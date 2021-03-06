<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LinksModel;
use CodeIgniter\Model;

class LinkController extends BaseController
{
	public function index()
	{
        $link_model = new LinksModel();
        $links = $link_model->findAll();
        return view('link/list',['links' => $links] );
	}

    public function addLink()
    {
        $link_model = new LinksModel();

        $rules = [
            'link' => 'required|min_length[8]',
        ];

        if (!$this->validate($rules) || !filter_var($this->request->getPost('link'), FILTER_VALIDATE_URL)) {
            return redirect()->to('link/add')->with('error', "URL non valide");
        }
        $parsed_url = parse_url($this->request->getPost('link'));

        $params = [];
        if (isset($parsed_url['query'])) {
            parse_str($parsed_url['query'], $params);
        }

        $path = (isset($parsed_url['path'])) ? array_filter(explode('/', $parsed_url['path'])) : [];
        $link = [
            'original_link' => $this->request->getPost('link'),
            'scheme' => $parsed_url['scheme'] ?? "",
            'host' => $parsed_url['host'] ?? "",
            'path' => json_encode($path),
            'params' => json_encode($params)
        ];

        $link_model->save($link);

        return redirect()->to('/')->with('success', "Url ajouté avec succès");
    }

    public function add()
    {
        return view('link/add');
    }

    public function delete($id)
    {
        $model = new LinksModel();

        $model->delete($id);

        return redirect()->back()->with('success', "Lien supprimé");
    }


}

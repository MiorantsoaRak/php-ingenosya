<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
	public function index()
	{
		if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        return view("auth/login");
	}

    public function auth()
    {
        $users = new UserModel();
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->with('error', $this->validator->listErrors());
        }

        $user = $users->where('email', $this->request->getPost('email'))
        ->first();
        if (!$user || !password_verify($this->request->getPost('password'), $user['password'])) {
            return redirect()->back()->with('error', "Compte utilisateur non trouvé ou mot de passe erroné");
        }

        session()->set('isLoggedIn', true);
        session()->set('userData', [
            'id' => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ]);

        return redirect()->to('/');
    }

    public function register()
    {
        return view('auth/register');
    }
    public function save()
    {
        $users = new UserModel();
        $rules = [
            'name' => 'required|alpha_space|min_length[2]',
            'email' => 'required|valid_email|is_unique[user.email,id,{id}]',
            'password' => 'required|min_length[5]',
            'repeat-password' => 'matches[password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('auth/register')->withInput()->with('error', $this->validator->listErrors());
        }

        $user = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $users->save($user);

        return redirect()->to('auth')->with('success', "Compte créé avec succés");
    }

    public function logout(){
        session()->destroy();

        return redirect()->to('auth');
    }
}

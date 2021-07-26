<?php

namespace App\Models;

use CodeIgniter\Model;

class LinkParamModel extends Model
{
	protected $table                = 'links_params';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = ['links_id', 'params'];
}

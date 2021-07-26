<?php

namespace App\Models;

use CodeIgniter\Model;

class LinkModel extends Model
{
	protected $table                = 'links';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = ['link_value'];
}

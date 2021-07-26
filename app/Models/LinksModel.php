<?php

namespace App\Models;

use CodeIgniter\Model;

class LinksModel extends Model
{
	protected $table                = 'links';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = ['scheme', 'host', 'path', 'params', 'original_link'];
}

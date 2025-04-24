<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartemenModel extends Model
{
    protected $table            =  'tbl_departemen';
    protected $primaryKey       = 'id_departemen';
    protected $allowedFields    = ['nama_departemen','nama_bagian'];
}

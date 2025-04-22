<?php


namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

Class CrudModel extends Model
{
    protected $table            =  'tbl_pegawai';
    protected $primaryKey       = 'id_tbl_pegawai';
    protected $allowedFields    = ['no_pegawai','nama','departemen'];
}
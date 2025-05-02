<?php


namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

Class CrudModel extends Model
{
    protected $table            =  'tbl_pegawai';
    protected $primaryKey       = 'id_tbl_pegawai';
    protected $allowedFields    = ['no_pegawai','nama','id_departemen','foto'];

    //FUNGSI UNTUK RELASIKAN
    public function getPegawai()
    {
        $this->join('tbl_departemen','tbl_pegawai.id_departemen = tbl_departemen.id_departemen');
        return $this->get()->getResultArray();
    }
}
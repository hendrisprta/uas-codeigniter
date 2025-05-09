<?php

namespace App\Models;

use CodeIgniter\Model;

class PenilaianModel extends Model
{
    protected $table            = 'tbl_penilaian';
    protected $primaryKey       = 'id_tbl_penilaian';
    protected $allowedFields    = ['no_pegawai', 'penilaian_kerja', 'keterangan','tgl_penilaian'];

    // Contoh fungsi untuk join dengan tabel pegawai
    public function getDataPegawai()
    {
        $this->join('tbl_pegawai', 'tbl_pegawai.no_pegawai = tbl_penilaian.no_pegawai');
        return $this->get()->getResultArray();
    }  

}

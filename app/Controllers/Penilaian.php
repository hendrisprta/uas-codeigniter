<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CrudModel;
use App\Models\PenilaianModel;

define('_TITLE','Penilaian');

class Penilaian extends BaseController
{
    private $crud_model, $penilaian_model;
    public function __construct()
    {
        $this->crud_model = new CrudModel();
        $this->penilaian_model = new PenilaianModel();
    }
    public function index()
    {
        $data_penilaian = $this->penilaian_model->getDataPegawai();

        $data = [
            'title' => _TITLE,
            'data_penilaian' => $data_penilaian
        ];

        return view('penilaian/index', $data);
    }
//FUNGSI CREATE
    public function create()
    {
        $data = [
            'title' => _TITLE,
            'penilaian' => $this->crud_model->orderby('no_pegawai')->findAll(),
        ];
    
        return view('penilaian/create', $data);
    }
    


    //FUNGSI SAVE NOTIF
    public function save()
    {
        $this->penilaian_model->save([
            'no_pegawai' => $this->request->getVar('no_pegawai'),
            'penilaian_kerja' => $this->request->getVar('penilaian_kerja'),
            'keterangan' => $this->request->getVar('keterangan'),
            'tgl_penilaian' => $this->request->getVar('tgl_penilaian')
        ]);
        session()->setFlashdata('succes','Data Berhasil Di Tambahkan');
        return redirect()->to('/penilaian');
    }
//END CREATE 

//FUNGSI EDIT 
    public function edit($id)
    {
        $data_penilaian = $this->penilaian_model->where(['id_tbl_penilaian' => $id])->first();

        $data = [
            'title' => _TITLE,
            'result' => $data_penilaian,
            'penilaian' => $this->crud_model->orderBy('no_pegawai')->findAll()
        ];
        return view('penilaian/edit',$data);
    }


    //FUNGSI SAVE EDIT
    public function update($id)
    {
        $this->penilaian_model->save([
            'id_tbl_penilaian' => $id,
            'no_pegawai' => $this->request->getVar('no_pegawai'),
            'penilaian_kerja' => $this->request->getVar('penilaian_kerja'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);
        session()->setFlashdata('succes','Data Berhasil Diubah');
        return redirect()->to('/penilaian');
    }

    public function delete($id)
    {
        $this->penilaian_model->delete($id);

        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to('/penilaian');
    }
    
}
<?php

namespace App\Controllers;
use App\Models\CrudModel;

define('_TITLE','CRUD');

class Crud extends BaseController
{
    private $crud_model;
    public function __construct()
    {
        $this->crud_model = new CrudModel();
    }
    public function index()
    {
        $data_crud = $this->crud_model->findAll();

        $data = [
            'title' => _TITLE,
            'data_crud' => $data_crud
        ];

        return view('crud/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => _TITLE,
            'validation' => \Config\Services::validation()
        ];
       return view('crud/create', $data);

    }


    //FUNGSI SAVE NOTIF
    public function save()
    {
        //VALIDASI 
        if (!$this->validate([
            'no_pegawai' => 'required',
            'nama' => 'required',
            'departemen' => 'required',
        ])) {
            return redirect()->to('/create-crud')->withInput();
        }
        $this->crud_model->save([
            'no_pegawai' => $this->request->getVar('no_pegawai'),
            'nama' => $this->request->getVar('nama'),
            'departemen' => $this->request->getVar('departemen')
        ]);
        session()->setFlashdata('succes','Data Berhasil Di Tambahkan');
        return redirect()->to('/crud');
    }

    //FUNGSI EDIT
    public function edit($id)
    {
        $data_crud = $this->crud_model->where(['id_tbl_pegawai' => $id])->first();

        $data = [
            'title' => _TITLE,
            'result' => $data_crud
        ];
        return view('crud/edit',$data);
    }

    

    public function update($id)
    {
        $this->crud_model->save([
            'id_tbl_pegawai' => $id,
            'no_pegawai' => $this->request->getVar('no_pegawai'),
            'nama' => $this->request->getVar('nama'),
            'departemen' => $this->request->getVar('departemen')
        ]);
        session()->setFlashdata('succes','Data Berhasil Diubah');
        return redirect()->to('/crud');
    }

    public function delete($id)
    {
        $this->crud_model->delete($id);

        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to('/crud');
    }
}
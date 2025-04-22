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
            'title' => _TITLE
        ];
       return view('crud/create', $data);

    }

    //FUNGSI SAVE
    public function save()
    {
        $this->crud_model->save([
            'no_pegawai'=> $this->request->getVar('no_pegawai'),
            'nama'=> $this->request->getVar('nama'),
            'departemen'=> $this->request->getVar('departemen')
        ]);
        session()->setFlashdata('success','Data Berhasil Ditambahkan');
        return redirect()->to('crud');
    }
}
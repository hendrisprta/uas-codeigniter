<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartemenModel;

define('_TITLE','Departemen');

class Departemen extends BaseController
{
    private $departemen_model;
    public function __construct()
    {
        $this->departemen_model = new DepartemenModel();
    }
    public function index()
    {
        $data_departemen = $this->departemen_model->findAll();

        $data = [
            'title' => _TITLE,
            'data_departemen' => $data_departemen
        ];

        return view('Departemen/index', $data);
    }
//FUNGSI CREATE
    public function create()
    {
        $data = [
            'title' => _TITLE,
            'validation' => \Config\Services::validation()
        ];
    
        return view('Departemen/create', $data);
    }
    


    //FUNGSI SAVE NOTIF
    public function save()
    {
        //VALIDASI 
        if (!$this->validate([
            'nama_departemen' => [
                'rules' => 'required',
                'label' => 'Nama Departemen',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'nama_bagian' => [
                'rules' => 'required',
                'label' => 'Nama Bagian',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
        ])) {
            return redirect()->to('/create-departemen')->withInput();
        }

        $this->departemen_model->save([
            'nama_departemen' => $this->request->getVar('nama_departemen'),
            'nama_bagian' => $this->request->getVar('nama_bagian'),
        ]);
        session()->setFlashdata('succes','Data Berhasil Di Tambahkan');
        return redirect()->to('/departemen');
    }
//END CREATE 

//FUNGSI EDIT
    public function edit($id)
    {
        $data_departemen = $this->departemen_model->where(['id_departemen' => $id])->first();

        $data = [
            'title' => _TITLE,
            'result' => $data_departemen,
            'validation' => \Config\Services::validation()
        ];
        return view('Departemen/edit',$data);
    }

    //FUNGSI EDIT
    public function update($id)
    {
        $this->departemen_model->save([
            'id_departemen' => $id,
            'nama_departemen' => $this->request->getVar('nama_departemen'),
            'nama_bagian' => $this->request->getVar('nama_bagian')
        ]);
        session()->setFlashdata('succes','Data Berhasil Diubah');
        return redirect()->to('/departemen');
    }

    public function delete($id)
    {
        $this->departemen_model->delete($id);

        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to('/departemen');
    }
}

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
//FUNGSI CREATE
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
            'no_pegawai' => [
                'rules' => 'required|is_unique[tbl_pegawai.no_pegawai]',
                'label' => 'No Pegawai',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} Sudah Ada',
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'label' => 'Nama',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'departemen' => [
                'rules' => 'required',
                'label' => 'Departemen',
                'error' => [
                    'required' => '{field} harus diisi',
                ]
            ],
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
//END CREATE 

//FUNGSI EDIT
    public function edit($id)
    {
        $data_crud = $this->crud_model->where(['id_tbl_pegawai' => $id])->first();

        $data = [
            'title' => _TITLE,
            'result' => $data_crud,
            'validation' => \Config\Services::validation()
        ];
        return view('crud/edit',$data);
    }

    //FUNGSI EDIT
    public function update($id)
    {
        //VALIDASI EDIT
        $no_lama = $this->request->getVar('no_lama');
        $dataNoLama = $this->crud_model->where(['id_tbl_pegawai'=>$id])->first();
        /*
        Jika no_pegawai yang baru dikirim dari form sama dengan yang lama, 
        maka aturan validasinya cukup 'required' saja (karena tidak ada perubahan, jadi tidak perlu cek unik).
        Tapi kalau berubah, maka harus validasi apakah no_pegawai yang baru unik 
        di tabel tbl_pegawai, dengan aturan 'required|is_unique[tbl_pegawai.no_pegawai]'
        . Bahasa mudah anggap username ig
        */
        if ($dataNoLama['no_pegawai'] == $this->request->getVar('no_pegawai')) {
            $rule_title = 'required';
        } else{
            $rule_title = 'required|is_unique[tbl_pegawai.no_pegawai]';
        }
        if (!$this->validate([
            'no_pegawai' => [
                'rules' => $rule_title,
                'label' => 'No Pegawai',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} Sudah Ada',
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'label' => 'Nama',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'departemen' => [
                'rules' => 'required',
                'label' => 'Departemen',
                'error' => [
                    'required' => '{field} harus diisi',
                ]
            ],
        ])) {
            return redirect()->to('/crud-edit/' . $no_lama)->withInput();
        }
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
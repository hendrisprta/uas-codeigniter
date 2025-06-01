<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use Myth\Auth\Password;

define('_TITLE', 'Profil');

class Profil extends BaseController
{
    private $_user_model;
    public function __construct()
    {
        $this->_user_model = new UsersModel();
    }
    public function index()
    {
        $data_user = $this->_user_model->getUsers(user_id());
        $data = [
            'title' => _TITLE,
            'result' => $data_user
        ];

        return view('profil/edit', $data);
    }

    public function updateProfil($id)
    {
        $this->_user_model->save([
            'id' => $id,
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ]);

        session()->setFlashdata('success', 'Berhasil Mengubah Profil');
        return redirect()->to('/profil');
    }

    public function ubahPassword()
    {
        $data_user = $this->_user_model->getUsers(user_id());
        $data = [
            "title" => _TITLE,
            'result' => $data_user,
            'validation' => \Config\Services::validation()
        ];

        return view('profil/ubah-password', $data);
    }

    public function updatePassword($id)
    {
        if (!$this->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|strong_password',
            'konfirmasi_password_baru' => 'required|matches[password_baru]',
        ])) {
            return redirect()->to('/password')->withInput();
        }

        $this->_user_model->save([
            'id' => $id,
            'password_hash' => Password::hash($this->request->getVar('password_baru')),
        ]);

        session()->setFlashdata('success', 'Berhasil Mengubah password');
        return redirect()->to('/password');
    }
}
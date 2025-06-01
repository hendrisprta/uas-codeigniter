<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['username','email','password_hash','active'];

public function getUsers($id = false)
{
    if ($id === false) {
        return $this->select('users.id, username, email, gs.group_id, g.name group_name')
            ->join('auth_groups_users gs', 'users.id=gs.user_id')
            ->join('auth_groups g', 'g.id = gs.group_id')
            ->findAll();
    } else {
        return $this->where(['id' => $id])->first();
    }
}
}

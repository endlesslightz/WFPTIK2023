<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{

    protected $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
    }

    public function index()
    {
        $data = [
            'menu' => 'halUser',
            'user' => $this->usermodel->findAll()
            // 'user' => $usermodel->where('jenis_kelamin', 'perempuan')->find()
            // keluarnya multidimensional-->foreach

            // 'user' => $usermodel->find(102)
            // keluarnya 1d array-->cocok dipakai jika kita hanya ingin panggil detail
        ];
        return view('user/user', $data);
    }

    public function detail($id)
    {
        $data = [
            'menu' => 'halUser',
            'user' => $this->usermodel->find($id)
        ];
        // var_dump($data);
        return view('user/detailuser', $data);
    }
}

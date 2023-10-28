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
        return view('user/detail', $data);
    }

    public function create()
    {
        $data = [
            'menu' => 'halUser',
        ];
        return view('user/create', $data);
    }

    public function insert()
    {
        $validasi = \Config\Services::validation();
        $valid = $this->validate([
            'nama_depan' => [
                'label' => 'Nama Depan',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 10 karakter'
                ]
            ],
            'nama_belakang' => [
                'label' => 'Nama Belakang',
                'rules' => 'required',
                'errors' => ['required' => '{field} tidak boleh kosong']
            ]
        ]);
        if (!$valid) {
            $pesan = [
                'error' => [
                    'namadepan' => $validasi->getError('nama_depan'),
                    'namabelakang' => $validasi->getError('nama_belakang'),
                ]
            ];
            return $this->response->setJSON($pesan);
        } else {
        $nama = $this->request->getVar('nama_depan') . ' ' . $this->request->getVar('nama_belakang');
        if ($this->request->getFile('avatar')->getName() != '') {
            $avatar = $this->request->getFile('avatar');
            $avatar->move(ROOTPATH . 'public/img');
            $namaavatar = $avatar->getName();
        } else {
            $namaavatar = 'default.jpg';
        }

        $data = [
            'nama' => $nama,
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
            'email' => $this->request->getVar('email'),
            'avatar' => $namaavatar
        ];

        $this->usermodel->save($data);
            $pesan = [
                'sukses' => 'Data anggota berhasil diinput'
            ];
            return $this->response->setJSON($pesan);
    }
    }
    
    public function getData(){
        if($this->request->isAJAX()){
            $data=[
                'user'=>$this->usermodel->findAll()
            ] ;  
            $hasil=[
                'data'=>view('user/list',$data)
            ];
                }else{
                exit('Data tidak dapat diload');
        }
        return $this->response->setJSON($hasil);    
    }
}

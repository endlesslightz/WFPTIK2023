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

    public function tambah()
    {
        if ($this->request->isAjax()){
            $hasil =['data'=>view('user/tambah')];
        }else{
            exit('Data tidak dapat diload');
        }
        return $this->response->setJSON($hasil);
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
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|min_length[5]|is_unique[users.username]',
                'errors' => [
                    'is_unique' =>'{field} sudah terdaftar',
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 5 karakter'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[5]|regex_match[/^(?=.*?\d)(?=.*?[a-zA-Z])[a-zA-Z\d]+$/]',
                'errors' => [
                    'regex_match' => '{field} terdiri dari angka dan huruf',
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 10 karakter'
                ]
            ],
            'upassword' => [
                'label' => 'Ulangi Password',
                'rules' => 'required|min_length[3]|matches[password]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 10 karakter',
                    'matches' => '{field} tidak sesuai'
                ]
            ],
        ]);
        if (!$valid) {
            $pesan = [
                'error' => [
                    'namadepan' => $validasi->getError('nama_depan'),
                    'namabelakang' => $validasi->getError('nama_belakang'),
                    'username' => $validasi->getError('username'),
                    'password' => $validasi->getError('password'),
                    'upassword' => $validasi->getError('upassword'),
                ]
            ];
            return $this->response->setJSON($pesan);
        } else {
        $nama = $this->request->getVar('nama_depan') . ' ' . $this->request->getVar('nama_belakang');
        if ($this->request->getFile('avatar')->getName() != '') {
            $avatar = $this->request->getFile('avatar');
            $namaavatar = $avatar->getRandomName();
            $avatar->move(ROOTPATH . 'public/images/avatar', $namaavatar);
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
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
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

    public function edit($id){
 if ($this->request->isAJAX()) {
            $item = $this->usermodel->find($id);
            $nama = explode(" ", $item['nama']);
            $data = [
                'id' => $item['id'],
                'nama_depan' => $nama[0],
                'nama_belakang' => $nama[1],
                'alamat' => $item['alamat'],
                'tempat_lahir' => $item['tempat_lahir'],
                'tanggal_lahir' => $item['tanggal_lahir'],
                'jenis_kelamin' => $item['jenis_kelamin'],
                'telepon' => $item['telepon'],
                'email' => $item['email'],
                'avatar' => $item['avatar']
            ];
            $hasil = [
                'data' => view('user/edit', $data)
            ];
            return $this->response->setJSON($hasil);
        } else {
            exit('data tidak dapat diload');
        }
    }

    public function update($id)
    {
        $validasi = \Config\Services::validation();
        $valid = $this->validate([
            'namadepan' => [
                'label' => 'Nama Depan',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 10 karakter'
                ]
            ],
            'namabelakang' => [
                'label' => 'Nama Belakang',
                'rules' => 'required',
                'errors' => ['required' => '{field} tidak boleh kosong']
            ]
        ]);
        if (!$valid) {
            $pesan = [
                'error' => [
                    'namadepan' => $validasi->getError('namadepan'),
                    'namabelakang' => $validasi->getError('namabelakang'),
                ]
            ];
            return $this->response->setJSON($pesan);
        } else {
            $nama = $this->request->getVar('namadepan') . " " . $this->request->getVar('namabelakang');
            if ($this->request->getFile('avatar')->getName() != '') {
                $avatar = $this->request->getFile('avatar');
                $namaavatar = $avatar->getRandomName();
                $avatar->move(ROOTPATH . 'public/images/avatar', $namaavatar);
            } else {
                $namaavatar = $this->request->getVar('avalama');
            }

            $input = [
                'id' => $id,
                'nama' => $nama,
                'alamat' => $this->request->getVar('alamat'),
                'tempat_lahir' => $this->request->getVar('tempatlahir'),
                'tanggal_lahir' => $this->request->getVar('tanggallahir'),
                'jenis_kelamin' => $this->request->getVar('jeniskelamin'),
                'telepon' => $this->request->getVar('telepon'),
                'email' => $this->request->getVar('email'),
                'avatar' => $namaavatar
            ];
            $this->usermodel->save($input);
            $pesan = [
                'sukses' => 'Data anggota berhasil diupdate'
            ];
            return $this->response->setJSON($pesan);
        }
    }

    public function delete($id){
        if($this->request->isAjax()){
            $this->usermodel->delete($id);
            $pesan=['sukses'=>"Data dengan ID=$id berhasil dihapus"];
        }else{
            exit('tidak dapat memproses data');
        }
        return $this->response->setJSON($pesan);
    }
}

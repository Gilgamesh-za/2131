<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    protected $UserModel;

    public function __construct()
    {
        //load model User
        $this->UserModel = new \App\Models\UserModel();
    }
   
    public function login()
    {
        $data['judul'] = 'tambah_user';
        return view('login', $data);
    }
   
    public function cek_login()
    {
        $nik = $this->request->getPost('nik');
        $password = $this->request->getPost('password');

        $dataUser = $this->UserModel->where('nik', $nik)->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser['password'])) {
                session()->set([
                    'nik' => $nik,
                    'logged_in' => true
                ]);
                return redirect()->to('/');
            }
            else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->to('/login');
            }
        }  else {

            session()->setFlashdata('error', 'NIK tidak ditemukan');
            return redirect()->to('/login');
            
        }
    }
   
    public function tambah_user()
    {
        $data['judul'] = 'tambah_user';

        return view('register');
    }
   
    public function register()
    {
        $validasi = $this->validate([
            'nik' => [
                'rules' => 'required|is_unique[tb_user.nik]',
                'errors' => [
                    'required' => 'nik harus diisi',
                    'is_unique' => 'nik sudah ada'
                ]
            ],
            'password_new' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'password harus diisi',
                    'min_length' => 'pasword minimal 4 karakter'
                ]
            ],
            'password' => [
                'rules' => 'matches[password_new]',
                'errors' => [
                    'matches' => 'konfirmasi password tidak sama'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi'
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Gender harus diisi'
                ]
            ],
            'hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'hp harus diisi'
                ]
            ],

        ]);

        if (!$validasi) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $data = [
            'nik' => $this->request->getPost('nik'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_BCRYPT
            ),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'gender' => $this->request->getPost('gender'),
            'hp' => $this->request->getPost('hp'),
        ];
        $this->UserModel->insert($data);

        return redirect()->to('/login');
    }
   
    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
   
    public function edit_user($id)
    {
        $data['judul']='edit User';     

        // gunakan fungsi Where()->findAll() 
 		$data['catatan']=$this->UserModel->where('id_user', $id)->findAll();;   
        
        return view('edit_user',$data);
    }
    public function update() 
    {
        $data=[
            'password' => $this->request->getPost('password'),
        ];
        $this->UserModel->update(['id_user' => $this->request->getPost('id_user')],$data);
        return redirect()->to('/login');
    }
}

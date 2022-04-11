<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    protected $UserModel, $CatatanModel;

    public function __construct()
    {
        //aktifkan url helper
        helper('url');
        //load model User
        $this->UserModel = new \App\Models\UserModel();
        $this->CatatanModel = new \App\Models\CatatanModel();
    }

    public function login()
    {
        if (session()->get('logged_in') == true) {
            return redirect()->to('/');
        }
        $data['judul'] = 'tambah_user';
        return view('login', $data);
    }

    public function tambah_user()
    {

        $data['judul'] = 'tambah_user';

        return view('tambah_user');
    }


    public function admin()
    {
        if (session()->get('akses') == 'user') {
            return redirect()->to('/');
        }
        $data['judul'] = 'Admin';

        // $data['tb_perjalanan']=$this->CatatanModel->findAll();

        $data['tb_user'] = $this->UserModel->findAll();
        return view('admin', $data);
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
                    'id' => $dataUser['id_user'],
                    'akses' => $dataUser['akses'],
                    'logged_in' => true
                ]);
                return redirect()->to('/');
            } else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->to('/login');
            }
        } else {

            session()->setFlashdata('error', 'NIK tidak ditemukan');
            return redirect()->to('/login');
        }
    }


    public function register()
    {
        $validasi = $this->validate([
            'nik' => [
                'rules' => 'required|is_unique[tb_user.nik]',
                'rules' => 'required|min_length[16]',
                'errors' => [
                    'required' => 'nik harus diisi',
                    'is_unique' => 'nik sudah ada',
                    'min_length' => 'pasword minimal 16 digit'
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

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function profile()
    {
        $data['judul'] = 'edit User';
        $id = session()->get('id');
        // gunakan fungsi Where()->findAll() 
        $data['user'] = $this->UserModel->where('id_user', $id)->findAll();;

        return view('profile', $data);
    }

    public function edit_profile($id)
    {
        $data['judul'] = 'edit Profile';

        // gunakan fungsi Where()->findAll() 
        $data['user'] = $this->UserModel->where('id_user', $id)->findAll();;

        return view('profile', $data);
    }
    public function update_profile()
    {
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'gender' => $this->request->getPost('gender'),
            'hp' => $this->request->getPost('hp')
        ];
        $this->UserModel->update(['id_user' => $this->request->getPost('id_user')], $data);
        return redirect()->to('/profile');
    }


    public function detail_user($id)
    {
        $data['judul'] = 'edit User';

        // gunakan fungsi Where()->findAll() 
        $data['user'] = $this->CatatanModel->where('id_user', $id)->findAll();;

        return view('detail_user', $data);
    }

    public function update()
    {
        $data = [
            'password' => $this->request->getPost('password'),
        ];
        $this->UserModel->update(['id_user' => $this->request->getPost('id_user')], $data);
        return redirect()->to('/login');
    }

    public function destroy($id)
    {

        // hapus data berdasarkan id

        $this->UserModel->delete(['id_user' => $id]);

        //kembali ke table employe

        return redirect()->to('/admin');
    }
}

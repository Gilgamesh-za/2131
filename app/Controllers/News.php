<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class News extends BaseController
{
    protected $BlogModel;
    public function __construct()
    {
        //aktifkan url helper
        helper('url');
        //load model User
        $this->BlogModel = new \App\Models\BlogModel();
    }

    public function news()
    {
        $data['judul'] = 'catatan';
        $data['blog'] = $this->BlogModel->findAll();
        return view('news', $data);
    }

    public function tambah_berita()
    {
        if (session()->get('akses') == 'user') {
            return redirect()->to('/');
        }
        $data['judul'] = 'catatan';

        return view('tambah_berita');
    }

    public function save_berita()
    {
        $gambar = $this->request->getFile('gambar');
        $gambar->move('assets/img');
        $namaGambar = $gambar->getName();
        $data = [
            'id_blog' => $this->request->getPost('id_blog'),
            'gambar' => $namaGambar,
            'judul' => $this->request->getPost('judul'),
            'sub_isi' => $this->request->getPost('sub_isi'),
            'isi' => $this->request->getPost('isi'),
        ];
        $this->BlogModel->insert($data);

        return redirect()->to('/news');
    }

    public function edit_berita($id)
    {
        if (session()->get('akses') == 'user') {
            return redirect()->to('/');
        }
        $data['judul'] = 'edit Berita';

        // gunakan fungsi Where()->findAll() 
        $data['news'] = $this->BlogModel->where('id_blog', $id)->findAll();;

        return view('edit_berita', $data);
    }

    public function update()
    {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'quote' => $this->request->getPost('quote'),
            'isi' => $this->request->getPost('isi'),
        ];
        $this->BlogModel->update(['id_blog' => $this->request->getPost('id_blog')], $data);
        return redirect()->to('/news');
    }

    public function destroy($id)
    {

        // hapus data berdasarkan id

        $this->BlogModel->delete(['id_blog' => $id]);

        //kembali ke table employe

        return redirect()->to('/news');
    }


    public function blog($id)
    {
        $data['judul'] = 'catatan';

        $data['blog'] = $this->BlogModel->where('id_blog', $id)->findAll();


        return view('blog', $data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Catatan extends BaseController
{
    protected $CatatanModel;
    public function __construct()
    {
        //aktifkan url helper
        helper('url');
        //load model User
        $this->CatatanModel = new \App\Models\CatatanModel();
    }
    
    public function index2() 
    {
        $data['judul']='CRUD Perjalanan';
        // $data['tb_perjalanan']=$this->CatatanModel->findAll();
        //tampilkan data perjalanan hanya user yang login
        $id_user = session()->nik;
        // $data['tb_perjalanan']=$this->CatatanModel->where('id_user', $id_user)->findAll();
        $data['tb_perjalanan']=$this->CatatanModel->view_perjalanan($id_user);
        return view('table_perjalanan',$data);
    }

    public function tambah_catatan()    
    {
        $data['judul'] = 'Tambah Catatan';
        return view('tambah_catatan');
    }
    public function save() 
    {
        $data=[
            'lokasi' => $this->request->getPost('lokasi'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu' => $this->request->getPost('waktu'),
            'ket' => $this->request->getPost('ket'),
            'id_user' => session()->nik
        ];
        $this->CatatanModel->save($data);
        return redirect()->to('/table_perjalanan');
    }
    public function edit_catatan($id)
    {
        $data['judul']='edit Catatan';     

        // gunakan fungsi Where()->findAll() 
 		$data['catatan']=$this->CatatanModel->where('id_perjalanan', $id)->findAll();;   
        
        return view('edit_catatan',$data);
    }
    public function update() 
    {
        $data=[
            'lokasi' => $this->request->getPost('lokasi'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu' => $this->request->getPost('waktu'),
            'ket' => $this->request->getPost('ket')
        ];
        $this->CatatanModel->update(['id_perjalanan' => $this->request->getPost('id_perjalanan')],$data);
        return redirect()->to('/table_perjalanan');
    }
    public function destroy($id) 
    {
    
        // hapus data berdasarkan id
    
        $this->CatatanModel->delete(['id_perjalanan' => $id]);
    
        //kembali ke table employe
    
        return redirect()->to('/table_perjalanan');
        
    }

}

<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Dompdf\Dompdf;

class PdfController extends Controller
{
    protected $CatatanModel;
    public function __construct()
    {
        //aktifkan url helper
        helper('url');
        //load model User
        $this->CatatanModel = new \App\Models\CatatanModel();
    }


    public function generate()
    {
        $data['tb_perjalanan'] = $this->CatatanModel->print();

        $data['jumlahcp'] = count($this->CatatanModel->print());

        return view('pdf_view', $data);
    }
}

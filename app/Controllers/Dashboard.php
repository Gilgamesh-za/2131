<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        $data['judul'] = 'about';

        return view('about');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    public function index()
    {
        return view('home');
    }

    public function news()
    {
        $data['judul'] = 'catatan';

        return view('news');
    }

    public function about()
    {
        $data['judul'] = 'about';

        return view('about');
    }
    public function profile()
    {
        $data['judul'] = 'profile';

        return view('profile');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function register()
    {
        $data = [];
        $data['main_content'] = 'Pages/SignIn';
        echo view('InnerPages/template', $data);
    }
    public function create()
    {
        $data = [];
        $data['main_content'] = 'Pages/SignUp';
        echo view('InnerPages/template', $data);
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        /*$data['title']= 'Page Title';
        $data['heading']= 'Welcome to chirags.in';*/
        $data = [];
        $data['main_content'] = 'Pages/welcome';
        echo view('InnerPages/template', $data);
    }
    public function reclamation()
    {
        $data = [];
        $data['main_content'] = 'Pages/Reclamation';
        echo view('InnerPages/template_login', $data);
    }
    public function listreclamation()
    {
        $reclamationModel = new \App\Models\ReclamationModel();
        $result = $reclamationModel->getAllReclamations();
        $data = [];
        $data['main_content'] = 'Pages/ListReclamation';
        $data['list_reclamation'] = $result;

        echo view('InnerPages/template_login', $data);
    }
}

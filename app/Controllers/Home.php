<?php

namespace App\Controllers;

use App\Models\ReclamationModel;
use App\Models\eventmodel;


class Home extends BaseController
{
    public function index(){
        $eventModel = new eventmodel();
        $data['events'] = $eventModel->getAllEvents();
        $data['main_content'] = 'Pages/welcome';
        $data['isFooter'] = true;

       
        return view('InnerPages/template', $data); 

    }
    public function event()
    {
        $eventModel = new eventmodel();
        $data = [];
        $data['main_content'] = 'Pages/Event';
        $data['events'] = $eventModel->getAllEvents();
        $data['isFooter'] = False;

        return view('InnerPages/template', $data); // Return the view with data
    }
}

<?php

namespace App\Controllers;
use App\Models\Dokter_model;

class Dashboard extends BaseController
{
    
    public function index(){
        echo view('layout/beranda');
    }

    public function aboutUs(){
        echo view('layout/aboutUs');
    }

}

<?php

namespace App\Controllers;
use App\Models\Dokter_model;

class Welcome extends BaseController
{
    public function index() {
        echo view('/layout/welcome');
    }

    public function login() {
        if(session('username')){
            return redirect()->to(base_url('Dashboard'));
        }
        echo view('/layout/view_login');
    }

    public function cekLogin() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "admin" and $password == "bismillah"){
            return redirect()->to(base_url('/dashboard'));
            exit;
        }
        
         else {
            session()->setFlashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Username atau Password Salah!</strong>
			</div>');
			return redirect()->to(base_url('welcome/login'));
        }
    }

    public function logout(){
		return redirect()->to(base_url('welcome'));
	}
}

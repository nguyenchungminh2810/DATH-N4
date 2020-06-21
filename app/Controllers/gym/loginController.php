<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class loginController extends BaseController
{
    public function show_login()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/Login');
    }
}
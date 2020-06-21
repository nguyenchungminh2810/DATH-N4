<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class tintucController extends BaseController
{
    public function show_TinTuc()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/tintuc');
    }
}
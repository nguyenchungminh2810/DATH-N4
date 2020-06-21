<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class goitapController extends BaseController
{
    public function show_goitap()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/goitap');
    }
}
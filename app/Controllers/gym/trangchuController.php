<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class trangchuController extends BaseController
{
    public function show_trangchu()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/trangchu');
    }

}
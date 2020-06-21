<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class dichvuController extends BaseController
{
    public function show_dichvu()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/dichvu');
    }
}
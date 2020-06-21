<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class editkhController extends BaseController
{
    public function EditKH()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/EditKH');
    }
}
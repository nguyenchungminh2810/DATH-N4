<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class editltController extends BaseController
{
    public function EditLT()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/EditLT');
    }
}
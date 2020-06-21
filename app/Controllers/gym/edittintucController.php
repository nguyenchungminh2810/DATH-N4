<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class edittintucController extends BaseController
{
    public function EditTinTuc()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/EditTT');
    }
}
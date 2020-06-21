<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class editnvController extends BaseController
{
    public function EditNhanVien()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/EditNV');
    }
}
<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class editdvController extends BaseController
{
    public function EditDichVu()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/EditDV');
    }
}
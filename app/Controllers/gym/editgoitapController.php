<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class editgoitapController extends BaseController
{
    public function EditGoiTap()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/EditGT');
    }
}
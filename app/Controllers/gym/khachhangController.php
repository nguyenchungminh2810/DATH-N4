<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class khachhangController extends BaseController
{
    public function show_khachhang()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/khachhang');
    }
}
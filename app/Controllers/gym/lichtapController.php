<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class lichtapController extends BaseController
{
    public function lichtap()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/lichtap');
    }
}
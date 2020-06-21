<?php


namespace App\Controllers\GYM;


use App\Controllers\BaseController;

class nhanvienController extends BaseController
{
    public $session;
    public $validation;
    public $controcnhanvien;

    public function nhanvien ()
    {
        echo view('gym/header');
        echo view('gym/navigation');
        echo view('gym/nhanvien');
    }

    public function save_nhanvien()
    {
        helper('url','form');
        $this->session=\Config\Services::session();
        $this->validation=\Config\Services::validation();
        $this->session->start();

        $data=['tenNV'=>$this->request->getPost('tenNV'),
            'gmailnv'=>$this->request->getPost('gmailnv'),
            'sdt'=>$this->request->getPost('sdt'),
            'ngaysinh'=>$this->request->getPost('ngaysinh'),
            'username'=>md5($this->request->getPost('username')),
            'password'=>$this->request->getPost('password')];
        var_dump($data);

    }
}
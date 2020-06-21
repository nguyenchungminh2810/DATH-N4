<?php


namespace App\Models\adminmodel;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class nvModel extends Model
{
    public $table='nhanvien';
    public $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
    public function add_nhanvien($data)
    {
        $this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }
    public  function Update_nhanvien($where,$data)
    {
        $this->db->table($this->table)->update($data,$where);
        return $this->db->affectedRows();
    }
    public function Delete_nhanvien($idNV)
    {
        $this->db->table($this->table)->delete(['idNV']);
    }
}
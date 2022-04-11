<?php

namespace App\Models;

use CodeIgniter\Model;

class CatatanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_perjalanan';
    protected $primaryKey       = 'id_perjalanan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_perjalanan', 'id_user', 'lokasi', 'tanggal', 'waktu', 'ket', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function view_perjalanan($id_user)
    {
        //query         
        $query = "SELECT tb_perjalanan.id_perjalanan, tb_perjalanan.id_user, tb_perjalanan.lokasi, tb_perjalanan.tanggal, tb_perjalanan.waktu, tb_perjalanan.ket, tb_user.nama, tb_user.hp FROM tb_perjalanan JOIN tb_user ON tb_user.id_user=tb_perjalanan.id_user WHERE tb_perjalanan.id_user='$id_user'";
        //ambil data dan jadikan array         
        $data = $this->db->query($query)->getResultArray();
        return $data;
    }
    public function print()
    {
        $query = "SELECT * FROM tb_perjalanan";
        $data = $this->db->query($query)->getResultArray();
        return $data;
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $allowedFields = ['id_pengaduan', 'tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status'];

    public function insertPengaduan($data)
    {
        $this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }
}
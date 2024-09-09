<?php

namespace App\Models;

use CodeIgniter\Model;

class EkstrakurikulerModel extends Model
{
    protected $table = 'db_ekstra';
    protected $primaryKey = 'Kode';
    protected $allowedFields = ['Nama ekstrakurikuler', 'Jadwal ekstrakurikuler'];

    public function getEkstrakurikuler()
    {
        return $this->findAll();
    }
    public function getEkstraHariIni($hari)
    {
    // return $this->where('Jadwal ekstrakurikuler', $hari)->findAll();
    return $this->where('jadwal ekstrakurikuler', $hari)->findAll();

    }

}

<?php

namespace App\Controllers;

use App\Models\EkstrakurikulerModel;
use CodeIgniter\Controller;

class Ekstrajadwalcontroller extends Controller
{
    public function getEkstraHariIni()
    {
        $model = new EkstrakurikulerModel();

        // // Mendapatkan hari ini dalam format lowercase
        // $hariIni = strtolower(date('l', strtotime('today')));
        $days = [
            'monday' => 'senin',
            'tuesday' => 'selasa',
            'wednesday' => 'rabu',
            'thursday' => 'kamis',
            'friday' => 'jumat',
            'saturday' => 'sabtu',
            'sunday' => 'minggu'
        ];
        
        // Mendapatkan hari ini dalam bahasa Inggris dan konversi ke bahasa Indonesia
        $hariIni = strtolower(date('l', strtotime('today')));
        $hariIni = $days[$hariIni];

        // Query untuk mendapatkan data ekstrakurikuler yang aktif pada hari ini
        $ekstraHariIni = $model->where('Jadwal ekstrakurikuler', $hariIni)->findAll();

        // Mengembalikan data dalam format JSON
        return $this->response->setJSON($ekstraHariIni);
    }
}

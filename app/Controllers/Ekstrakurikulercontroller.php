<?php

namespace App\Controllers;

use App\Models\EkstrakurikulerModel;
use CodeIgniter\Controller;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $model = new EkstrakurikulerModel();
        $data['ekstrakurikuler'] = $model->getEkstrakurikuler();

        return view('ekstrakurikuler_view', $data);
    }
    public function halaman()
    {
       return view ('halaman');
    }
}

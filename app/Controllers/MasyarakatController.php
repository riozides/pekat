<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;

class MasyarakatController extends BaseController
{
    public function index()
    {
        $model = new MasyarakatModel();
        $data['masyarakat'] = $model->findAll();
        return view('masyarakat/dashboard_masyarakat');
    }
}
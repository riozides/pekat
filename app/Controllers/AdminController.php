<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;
use App\Models\PetugasModel;

class AdminController extends BaseController
{
    public function __contruct()
    {
        $this->masyarakatModel = new MasyarakatModel();
        $this->petugasModel = new PetugasModel();
    }

    public function index()
    {
        return view('admin/dashboard_admin');
    }
}

<?php

namespace App\Controllers;

use App\Models\PengaduanModel;

class PengaduanController extends BaseController
{
    protected $helper = [];

    public function __construct()
    {
        helper(['form']);
        $this->pengaduanModel = new PengaduanModel();
    }

    public function index()
    {
        $data['pengaduan'] = $this->pengaduanModel->findAll();
        return view('pengaduan/index', $data);
    }

    public function store()
    {
        $data = [
            'tgl_pengaduan' => $this->request->getPost('tgl_pengaduan'),
            'nik' => $this->request->getPost('nik'),
            'isi_laporan' => $this->request->getPost('isi_laporan'),
            'foto' => $this->request->getFile('foto'),
            'status' => $this->request->getPost('status')
        ];
        $this->pengaduanModel->insert($data);
        return redirect()->to('/pengaduanform');


        // $model = new PengaduanModel();

        // $file = $this->request->getFile('foto');

        // if($file && $file->isValid()) {
        //     $data = [
        //         'nama' => $this->request->getPost('nama'),
        //         'nik' => $this->request->getPost('nik'),
        //         'pengaduan' => $this->request->getPost('pengaduan'),
        //         'foto' => file_get_contents($file->getTempName())
        //     ];
        //     echo "foto berhasil di upload";
        // } else {
        //     echo "foto gagal di upload";
        // }


        // $model->insertPengaduan($data);

        // return redirect()->to('masyarakat/pengaduan_masyarakat');
    }

    public function create()
    {
        return view('pengaduan/create');
    }

    public function edit($id_pengaduan)
    {
        $data['pengaduan'] = $this->pengaduanModel->find($id_pengaduan);
        return view('pengaduan/edit');
    }

    public function update($id_pengaduan)
    {
        $data = [
            'tgl_pengaduan' => $this->request->getPost('tgl_pengaduan'),
            'nik' => $this->request->getPost('nik'),
            'isi_laporan' => $this->request->getPost('isi_laporan'),
            'foto' => $this->request->getFile('foto'),
            'status' => $this->request->getPost('status')
        ];
        $this->pengaduanModel->update($data);
        return redirect()->to('/pengaduan');
    }

    public function delete($id_pengaduan)
    {
        $this->pengaduanModel->delete($id_pengaduan);
        return redirect()->to('/pengaduan');
    }
}
<?php

namespace App\Controllers;

class Latihan4 extends BaseController
{
    public function index()
    {
        return view('form-mata-kuliah');
    }

    public function cetak() {
        $data = [
            'name' => $this->request->getPost('nama-mahasiswa'),
            'kode' => $this->request->getPost('kode'),
            'nama' => $this->request->getPost('nama'),
            'sks'  => $this->request->getPost('sks')
        ];


        return view('cetak-hasil-form', $data);
    }
}

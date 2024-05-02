<?php

// namespace App\Controllers;

// class Latihan4 extends BaseController
// {
//     public function index()
//     {
//         return view('form-mata-kuliah');
//     }

//     public function cetak() {
//         $data = [
//             'name' => $this->request->getPost('nama-mahasiswa'),
//             'kode' => $this->request->getPost('kode'),
//             'nama' => $this->request->getPost('nama'),
//             'sks'  => $this->request->getPost('sks')
//         ];


//         return view('cetak-hasil-form', $data);
//     }
// }


namespace App\Controllers;

class Latihan4 extends BaseController
{
    public function index()
    {
        return view('form-mata-kuliah');
    }

    public function cetak() {
        $validationRules = [
            'nama-mahasiswa' => [
                'label' => 'Nama Mahasiswa',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama Mahasiswa harus diisi.',
                    'min_length' => 'Nama Mahasiswa terlalu pendek. Minimal 3 karakter.'
                ]
            ],
            'kode' => [
                'label' => 'Kode MTK',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Kode MTK harus diisi.',
                    'min_length' => 'Kode MTK terlalu pendek. Minimal 3 karakter.'
                ]
            ],
            'nama' => [
                'label' => 'Nama MTK',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama MTK harus diisi.',
                    'min_length' => 'Nama MTK terlalu pendek. Minimal 3 karakter.'
                ]
            ],
            'sks' => [
                'label' => 'SKS',
                'rules' => 'required',
                'errors' => [
                    'required' => 'SKS harus dipilih.'
                ]
            ]
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('nama-mahasiswa'),
            'kode' => $this->request->getPost('kode'),
            'nama' => $this->request->getPost('nama'),
            'sks'  => $this->request->getPost('sks')
        ];

        return view('cetak-hasil-form', $data);
    }
}



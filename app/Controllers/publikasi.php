<?php

namespace App\Controllers;

use App\Models\PublikasiModel;


class publikasi extends BaseController
{
    protected $publikasi;

    public function index()
    {
        $publish = $this->publikasi->findAll();
        $data = [
            'judul' => '.: Admin - Publikasi | Bappeda Kab. Banggai Laut',
            'isi' => 'backend/pages/publikasiadmin',
            'publikasi' => $publish

        ];
        return view('backend/template/wraper', $data);
    }

    /* TAMBAH PUBLIKASI */

    public function tambah()
    {
        $data = [
            'judul' => '.: Tambah - Publikasi | Bappeda Kab. Banggai Laut',
            'isi' => 'backend/pages/form/tambahpublikasi'

        ];
        return view('backend/template/wraper', $data);
    }


    public function save()
    {
        //Validasi
        if (!$this->validate(
            [
                'judul' => 'required',
                'sampul' => [
                    'rules' => 'uploaded[sampul]|max_size[sampul,5000]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Max 1 MB)',
                        'is_image' => 'File harus berupa gambar',
                        'mime_in' => 'Format File harus .jpg/.jpeg/.png',
                    ]
                ],
                'dokumen' => [
                    'rules' => 'uploaded[dokumen]',
                    'errors' => [
                        'uploaded' => 'upolado'
                    ]
                ]

            ]

        )) {
            return redirect()->to(base_url('/tambahpublikasi'))->withInput();
        };


        $fileSampul = $this->request->getFile('sampul');
        $fileDokumen = $this->request->getFile('dokumen');

        $namasampul = $fileSampul->getRandomName();
        $namadokumen = $fileDokumen->getName();
        $fileSampul->move('img', $namasampul);
        $fileDokumen->move('dok');



        $PublikasiModel = new PublikasiModel();
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $PublikasiModel->save(
            [
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'deskripsi' => $this->request->getVar('deskripsi'),
                'author' => 'Bappeda',
                'sampul' => $namasampul,
                'dokumen' => $namadokumen
            ]
        );
        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');
        return redirect()->to(base_url('/adminpublikasi'));
    }

    public function delete($id)
    {
        $publikasi = $this->publikasi->find($id);
        unlink('img/' . $publikasi['sampul']);
        unlink('dok/' . $publikasi['dokumen']);

        $this->publikasi->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('/adminpublikasi'));
    }


    public function edit($id)
    {
        $data = [
            'judul' => '.: Edit - Publikasi | Bappeda Kab. Banggai Laut',
            'isi' => 'backend/pages/form/editpublikasi',
            'publikasi' => $this->publikasi->find($id)

        ];
        return view('backend/template/wraper', $data);
    }



    public function update($id)
    {
        // if (!$this->validate(
        //     [
        //         'judul' => 'required',
        //         'sampul' => [
        //             'rules' => 'uploaded[sampul]|max_size[sampul,5000]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        //             'errors' => [
        //                 'uploaded' => 'Pilih gambar terlebih dahulu',
        //                 'max_size' => 'Ukuran gambar terlalu besar (Max 1 MB)',
        //                 'is_image' => 'File harus berupa gambar',
        //                 'mime_in' => 'Format File harus .jpg/.jpeg/.png',
        //             ]
        //         ],
        //         'dokumen' => [
        //             'rules' => 'uploaded[dokumen]',
        //             'errors' => [
        //                 'uploaded' => 'upolado'
        //             ]
        //         ]

        //     ]

        // )) {
        //     return redirect()->to(base_url('/adminpublikasi'))->withInput();
        // };


        $fileSampul = $this->request->getFile('sampul');
        $fileDokumen = $this->request->getFile('dokumen');


        if ($fileSampul->getError() == 4) {
            $namasampul = $this->request->getVar('sampulLama');
        } else {
            $namasampul = $fileSampul->getRandomName();
            $fileSampul->move('img', $namasampul);
            unlink('img/' . $this->request->getVar('sampulLama'));
        };


        if ($fileDokumen->getError() == 4) {
            $namadokumen = $this->request->getVar('dokumenLama');
        } else {
            $namadokumen = $fileDokumen->getName();
            $fileDokumen->move('dok');
            unlink('dok/' . $this->request->getVar('dokumenLama'));
        };




        $PublikasiModel = new PublikasiModel();
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $PublikasiModel->save(
            [
                'id' => $id,
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'deskripsi' => $this->request->getVar('deskripsi'),
                'author' => 'Bappeda',
                'sampul' => $namasampul,
                'dokumen' => $namadokumen
            ]
        );
        session()->setFlashdata('pesan', 'Data Berhasil di Ubah');
        return redirect()->to(base_url('/adminpublikasi'));
    }
}

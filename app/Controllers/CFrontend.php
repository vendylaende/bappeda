<?php

namespace App\Controllers;

class CFrontend extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => '.: Beranda | Bappeda Kab. Banggai Laut',
            'isi' => 'frontend/beranda',
            'menu' => 1
        ];
        return view('frontend/template/wraper', $data);
    }


    /* TENTANG KAMI */

    /* PROFIL */
    public function visimisi()
    {
        $data = [
            'judul' => '.: Visi Misi | Bappeda Kab. Banggai Laut',
            'isi' => 'frontend/visimisi',
            'menu' => 2

        ];
        return view('frontend/template/wraper', $data);
    }


    /* BATAS PROFIL */

    /* BATAS TENTANG KAMI */



    /* DATA DAN PUBLIKASI */

    /* Dokumen Perencanaan*/
    public function publikasi()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $cari = $this->publikasi->search($keyword);
        } else {
            $cari = $this->publikasi;
        }

        $publish = $cari->paginate(10, 'publikasi');
        $pager = $this->publikasi->pager;
        $data = [
            'judul' => '.: Publikasi | Bappeda Kab. Banggai Laut',
            'isi' => 'frontend/publikasi',
            'publikasi' => $publish,
            'pager' => $pager,
            'menu' => 3

        ];
        return view('frontend/template/wraper', $data);
    }
    /* Batas Dokumen Perencanaan */
}

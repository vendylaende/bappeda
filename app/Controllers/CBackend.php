<?php

namespace App\Controllers;

class CBackend extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => '.: Admin | Bappeda Kab. Banggai Laut',
            'isi' => 'backend/pages/home',
            'menu' => 1
        ];
        return view('backend/template/wraper', $data);
    }
}

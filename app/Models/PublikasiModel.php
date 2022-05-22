<?php

namespace App\Models;

use CodeIgniter\Model;

class PublikasiModel extends Model
{
    protected $table = "publikasi";
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'deskripsi', 'author', 'sampul', 'dokumen'];
    //protected $useSoftDeletes = true;
    //protected $allowedFields = ['name', 'email'];

    public function search($keyword)
    {
        $builder = $this->table('publikasi');
        $builder->like('judul', $keyword);
        return $builder;
    }
}

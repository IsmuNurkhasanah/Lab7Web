<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class Home extends BaseController
{
    public function index(): string
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();

        $kategori = $model->findAll();

        return view('layout/main', [
            'title' => $title,
            'kategoriList' => $kategori
        ]);
    }
}

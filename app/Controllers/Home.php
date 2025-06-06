<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
class Home extends BaseController
{
    public function index(): string
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();

        $kategoriList = $model->select('kategori')->distinct()->findAll();

        return view('layout/main', [
            'title' => $title,
            'kategoriList' => $kategoriList
        ]);
    }
}

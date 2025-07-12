<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Page extends BaseController
{
    public function about()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();

        $kategoriList = $model->findAll();

        return view('layout/main', [
            'title' => $title,
            'kategoriList' => $kategoriList
        ]);
    }
    public function contact()
    {
        $title = 'Contact';
        $model = new ArtikelModel();

        $kategoriList = $model->findAll();

        return view('layout/main', [
            'title' => $title,
            'kategoriList' => $kategoriList
        ]);
    }
    public function faqs()
    {
        $title = 'Faqs';
        $model = new ArtikelModel();

        $kategoriList = $model->findAll();

        return view('layout/main', [
            'title' => $title,
            'kategoriList' => $kategoriList
        ]);
    }
    public function tos()
    {
        $title = 'Term Of Services';
        $model = new ArtikelModel();

        $kategoriList = $model->findAll();

        return view('layout/main', [
            'title' => $title,
            'kategoriList' => $kategoriList
        ]);
    }
}

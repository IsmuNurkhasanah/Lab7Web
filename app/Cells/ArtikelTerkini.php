<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;
use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class ArtikelTerkini extends Cell
{
    // Parameter yang dikirim dari view
    protected string $kategori_id = '';

    public function render(): string
    {
        $kategoriModel = new KategoriModel();
        $artikelModel = new ArtikelModel();

        $kategori = $kategoriModel->findAll();

        $builder = $artikelModel->builder()
            ->select('artikel.*, kategori.nama_kategori')
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
            ->orderBy('artikel.created_at', 'DESC');

        if (!empty($this->kategori_id)) {
            $builder->where('artikel.id_kategori', $this->kategori_id);
        }

        $artikel = $builder->get(5)->getResultArray(); // ambil 5 artikel terbaru

        return view('component/artikelTerkini', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'kategori_id' => $this->kategori_id,
        ]);
    }
}

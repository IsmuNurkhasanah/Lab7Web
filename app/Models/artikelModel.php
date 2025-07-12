<?php

namespace App\Models;

use CodeIgniter\Model;
use ReturnTypeWillChange;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar', 'id_kategori'];

    public function getArtikelDenganKategori($kategori_id = null)
    {
        $builder = $this->db->table('artikel')
            ->select('artikel.*, kategori.nama_kategori')
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori');

        if ($kategori_id) {
            $builder->where('artikel.id_kategori', $kategori_id);
        }

        return $builder->get()->getResultArray();
    }

    public function artikelTerkini($kategori_id = null)
    {
        $builder = $this->db->table('artikel')
            ->select('artikel.*, kategori.nama_kategori')
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
            ->orderBy('artikel.id', 'DESC'); // <- ini sudah betul

        if ($kategori_id) {
            $builder->where('artikel.id_kategori', $kategori_id);
        }

        return $builder->get()->getResultArray();
    }
}

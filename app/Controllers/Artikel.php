<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Artikel extends BaseController
{
    public function index()
    {
        $title = 'Daftar Artikel';
        $kategori_id = $this->request->getVar('kategori_id') ?? '';

        $model = new ArtikelModel();

        if ($kategori_id) {
            // Jika ada kategori dipilih, filter artikel berdasarkan kategori_id
            $artikel = $model->getArtikelDenganKategori($kategori_id);
        } else {
            // Jika tidak, tampilkan semua artikel
            $artikel = $model->getArtikelDenganKategori();
        }

        $kategoriModel = new \App\Models\KategoriModel();
        $kategori = $kategoriModel->findAll();

        return view('artikel/index', compact('artikel', 'title', 'kategori', 'kategori_id'));
    }

    public function view($slug)
    {
        $model = new ArtikelModel();
        $kategoriModel = new KategoriModel();

        $data['artikel'] = $model->where('slug', $slug)->first();

        if (empty($data['artikel'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the article.');
        }

        $kategori = $kategoriModel->find($data['artikel']['id_kategori']);
        $data['nama_kategori'] = $kategori ? $kategori['nama_kategori'] : 'Tidak diketahui.';

        $data['title'] = $data['artikel']['judul'];
        return view('artikel/detail', $data);
    }

    public function admin_index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();

        $q = $this->request->getVar('q') ?? '';
        $kategori_id = $this->request->getVar('kategori_id') ?? '';
        $data = [
            'title' => $title,
            'q' => $q,
            'kategori_id' => $kategori_id,
        ];

        $builder = $model->table('artikel')
            ->select('artikel.*, kategori.nama_kategori')
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori');

        // Apply search filter if keyword is provided 
        if ($q != '') {
            $builder->like('artikel.judul', $q);
        }

        // Apply category filter if category_id is provided 
        if ($kategori_id != '') {
            $builder->where('artikel.id_kategori', $kategori_id);
        }

        // Apply pagination 
        $data['artikel'] = $builder->paginate(10);
        $data['pager'] = $model->pager;

        // Fetch all categories for the filter dropdown 
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();

        return view('artikel/admin_index', $data);
    }

    public function add()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'id_kategori' => 'required|integer'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $file = $this->request->getFile('gambar');
            if ($file && $file->isValid()) {
                $file->move(ROOTPATH . 'public/gambar');
                $gambar = $file->getName();
            }

            $artikel = new ArtikelModel();
            $artikel->insert([
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'slug' => url_title($this->request->getPost('judul')),
                'gambar' => $gambar,
                'id_kategori' => $this->request->getPost('id_kategori')
            ]);

            return redirect()->to('admin/artikel');
        }

        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();
        $data['title'] = "Tambah Artikel";

        return view('artikel/form_add', $data);
    }


    public function edit($id)
    {
        $artikel = new ArtikelModel();
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'id_kategori' => 'required|integer'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $file = $this->request->getFile('gambar');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $file->move(ROOTPATH . 'public/gambar');
                $gambar= $file->getName();
            } else {
                // Ambil data artikel lama untuk mempertahankan gambar sebelumnya
                $existing = $artikel->find($id);
                $gambar= $existing['gambar'];
            }

            $artikel->update($id, [
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'gambar' => $gambar,
                'id_kategori' => $this->request->getPost('id_kategori')
            ]);
            return redirect()->to('/admin/artikel');
        }

        $data['artikel'] = $artikel->find($id);
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();
        $data['title'] = "Edit Artikel";

        return view('artikel/form_edit', $data);
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
        $model->delete($id);
        return redirect()->to('/admin/artikel');
    }
}

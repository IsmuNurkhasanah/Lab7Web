<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\Response;
use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class AjaxController extends Controller
{
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();
        $data['title'] = 'Data Artikel';
        return view('ajax/admin_index', $data);
    }
    public function getData()
    {
        $model = new ArtikelModel();
        $data = $model->findAll();

        // Kirim data dalam format JSON 
        return $this->response->setJSON($data);
    }

    public function add()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'id_kategori' => 'required|integer'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $validation->getErrors()
            ]);
        }

        $gambar = '';
        $file = $this->request->getFile('gambar');
        if ($file && $file->isValid()) {
            $file->move(ROOTPATH . 'public/gambar');
            $gambar = $file->getName();
        }

        $artikel = new ArtikelModel();
        $artikel->insert([
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'slug' => url_title($this->request->getPost('judul'), '-', true),
            'gambar' => $gambar,
            'id_kategori' => $this->request->getPost('id_kategori')
        ]);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Artikel berhasil ditambahkan.'
        ]);
    }

    public function getDataById($id)
    {
        $artikel = new \App\Models\ArtikelModel();
        $data = $artikel->find($id);

        if ($data) {
            return $this->response->setJSON($data);
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Data tidak ditemukan'
        ]);
    }


    public function edit()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id' => 'required|integer',
            'judul' => 'required',
            'id_kategori' => 'required|integer'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $validation->getErrors()
            ]);
        }

        $id = $this->request->getPost('id');
        $artikel = new ArtikelModel();

        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'slug' => url_title($this->request->getPost('judul'), '-', true),
            'id_kategori' => $this->request->getPost('id_kategori')
        ];

        $file = $this->request->getFile('gambar');
        $gambarLama = $this->request->getPost('gambar_lama'); // Ambil nama gambar lama

        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Jika ada file baru diupload
            $namaBaru = $file->getRandomName();
            $file->move(ROOTPATH . 'public/gambar', $namaBaru);
            $data['gambar'] = $namaBaru;

            // Hapus gambar lama jika ada
            if ($gambarLama && file_exists(ROOTPATH . 'public/gambar/' . $gambarLama)) {
                unlink(ROOTPATH . 'public/gambar/' . $gambarLama);
            }
        } else {
            // Jika tidak ada file baru, pakai gambar lama
            $data['gambar'] = $gambarLama;
        }

        $artikel->update($id, $data);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Artikel berhasil diupdate.'
        ]);
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
        $data = $model->delete($id);

        $data = [
            'status' => 'OK'
        ];

        // Kirim data dalam format JSON 
        return $this->response->setJSON($data);
    }
}

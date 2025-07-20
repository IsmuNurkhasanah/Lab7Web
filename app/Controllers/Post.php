<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ArtikelModel;

class Post extends ResourceController
{
    use ResponseTrait;
    // all users 
    public function index()
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create 
    public function create()
    {
        $model = new ArtikelModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi'  => $this->request->getVar('isi'),
            'status' => 1,
            'slug' => url_title($this->request->getPost('judul'), '-', true),
            'id_kategori' => $this->request->getVar('id_kategori')
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data artikel berhasil ditambahkan.',
                'data' => $data
            ]
        ];
        return $this->respondCreated($response);
    }
    // single user 
    public function show($id = null)
    {
        $model = new ArtikelModel();
        $data = $model->where('id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update 
    public function update($id = null)
    {
        $model = new ArtikelModel();

        // Ambil raw input dari PUT
        $rawInput = $this->request->getBody(); // Ambil isi request body
        parse_str($rawInput, $parsed); // Parse jadi array

        $data = [
            'judul' => $parsed['judul'] ?? null,
            'isi'   => $parsed['isi'] ?? null,
        ];

        $model->update($id, $data);

        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data artikel berhasil diubah.',
                'data' => $data
            ]
        ];

        return $this->respond($response);
    }

    // delete 
    public function delete($id = null)
    {
        $model = new ArtikelModel();
        $data = $model->where('id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data artikel berhasil dihapus.',
                    'data' => $data
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}

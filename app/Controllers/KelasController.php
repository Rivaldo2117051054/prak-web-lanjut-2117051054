<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class KelasController extends BaseController
{

    public $kelasModel;
    public function __construct(){

        $this->kelasModel = new KelasModel();
    }
    protected $helpers=['form'];

    public function index()
    {
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas(),
        ];

        return view('list_kelas', $data);
    }

    public function createkelas(){
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create Kelas',
            'kelas' => $kelas,
        ];
        return view('create_kelas', $data);
    }

    public function kelasstore(){

        $this->kelasModel->saveKelas([
            'nama_kelas'=> $this->request->getVar('kelas'),
        ]);

        return redirect()->to('user');
    }
    

    public function edit($id){
        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
        ];
        return view('edit_kelas', $data);
    }

    public function update($id){
        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ];
        
        if (!$this->validate([
            'nama_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama kelas harus diisi!'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/kelas/' . $id . '/edit'))->withInput()->with('validation', $validation);
        }
        $result = $this->kelasModel->updateKelas($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }

        return redirect()->to(base_url('/kelas'));
    }

    public function destroy($id){
        $kelas = $this->kelasModel->deleteKelas($id);
        if (!$kelas) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/kelas'))
            ->with('success', 'Berhasil menghapus data!');
    }

}

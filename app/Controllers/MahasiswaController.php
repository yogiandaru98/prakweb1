<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        //
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('templates/header', $data)
            . view('mahasiswa/list', $data)
            . view('templates/footer');
    }
    public function create()
    {
        $data = [
            'title' => 'Create Mahasiswa'
        ];
        return view('templates/header', $data)
        . view('mahasiswa/create')
        . view('templates/footer');
    }
    public function store(){
        $mahasiswaModel = new Mahasiswa();
        if(!$this->validate([
            'npm' => 'required|is_unique[mahasiswa.npm]',
            'nama' => 'required',
            'alamat' => 'required'
        ])){
            $data = [
                'title' => 'Create Mahasiswa',
                'validation' => $this->validator
            ];
            return redirect()->to('/create')->withInput();
        }
        $mahasiswaModel->save([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        return redirect()->to('/mahasiswa');
    }
    public function delete($id){
        $mahasiswaModel = new Mahasiswa();
        $mahasiswaModel->delete($id);
        return redirect()->to('/mahasiswa');
    }
    public function edit($id){
        $mahasiswaModel = new Mahasiswa();
        $data = [
            'title' => 'Edit Mahasiswa',
            'mahasiswa' => $mahasiswaModel->find($id)
        ];
        return view('templates/header', $data).
        view('mahasiswa/edit', $data).
        view('templates/footer');
    }
    public function update($id){
        $mahasiswaModel = new Mahasiswa();
        if(!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required'
        ])){
            $data = [
                'title' => 'Edit Mahasiswa',
                'validation' => $this->validator,
                'mahasiswa' => $mahasiswaModel->find($id)
            ];
            return redirect()->to('/edit/'.$id)->withInput();
        }
        $data = [
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $mahasiswaModel->update($id, $data);
        return redirect()->to('/mahasiswa');
    }
}
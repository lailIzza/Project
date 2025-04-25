<?php

namespace App\Controllers;

use App\Models\matkulModel;

class  Profil extends BaseController
{
    public function __construct()
    {
        helper('url'); // Sekali load untuk seluruh method
    }
    public function home(): string
    {
        $courseModel = new MatkulModel();
        $data['courses'] = $courseModel->findAll(); //buat nampilin model
        return view('profil_view/home',  $data);
    }
    public function matkul($id): string
    {
        $courseModel = new MatkulModel();
        $data['courses'] = $courseModel->findAll();
        $data['matkul'] = $courseModel->find($id); // <- ini penting

        if (!$data['matkul']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Matkul gak ditemukan cuy!");
        }
        return view('profil_view/matkul', $data); // <- ini juga
    }
}

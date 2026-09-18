<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Menggunakan variabel $mahasiswa agar cocok dengan file Blade kamu
        $mahasiswa = [
            'nama' => 'Dzakirah Azalia',
            'nim' => '251011700497',
            'email' => 'dzakirahazalia26@gmail.com',
            'prodi' => 'Sistem Informasi',
            'status' => 'Aktif'
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}
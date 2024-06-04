<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPelanggaranController extends Controller
{
    public function index()
    {
        $daftar_pelanggaran = [
            ['pelanggaran' => 'Merokok', 'poin' => 10],
            ['pelanggaran' => 'Terlambat Masuk Kelas', 'poin' => 5],
            ['pelanggaran' => 'Merusak Fasilitas', 'poin' => 20],
            ['pelanggaran' => 'Merokok', 'poin' => 10],
            ['pelanggaran' => 'Terlambat Masuk Kelas', 'poin' => 5],
            ['pelanggaran' => 'Merusak Fasilitas', 'poin' => 20],
            ['pelanggaran' => 'Merokok', 'poin' => 10],
            ['pelanggaran' => 'Terlambat Masuk Kelas', 'poin' => 5],
            ['pelanggaran' => 'Merusak Fasilitas', 'poin' => 20],
            ['pelanggaran' => 'Merokok', 'poin' => 10],
            ['pelanggaran' => 'Terlambat Masuk Kelas', 'poin' => 5],
            ['pelanggaran' => 'Merusak Fasilitas', 'poin' => 20],
        ];

        return view('daftar_pelanggaran', compact('daftar_pelanggaran'));
    }
}


<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data = [
            'menu' => 'halDashboard',
            'mahasiswa' => array(
                [
                    'nama' => 'budi',
                    'nim' => 'K3520000',
                    'ipk' => 3.5
                ], [
                    'nama' => 'dani',
                    'nim' => 'K3520001',
                    'ipk' => 3.6
                ], [
                    'nama' => 'randy',
                    'nim' => 'K3520002',
                    'ipk' => 3.7
                ]
            )
        ];
        return view('dashboard', $data);
    }

    public function buku(): string
    {
        $data = [
            'menu' => 'halBuku',
            'buku' => array(
                [
                    'judul' => 'Desain Web',
                    'pengarang' => 'Nurcahya',
                    'penerbit' => 'Informatika'
                ], [
                    'judul' => 'OSK',
                    'pengarang' => 'Pradana',
                    'penerbit' => 'Intan Cendikia'
                ], [
                    'judul' => 'Statistik Terapan',
                    'pengarang' => 'Taufik',
                    'penerbit' => 'Elex Media'
                ]
            )
        ];
        return view('buku', $data);
    }
}

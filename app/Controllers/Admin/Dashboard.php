<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data = [
            'menu' => 'halDashboard'
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

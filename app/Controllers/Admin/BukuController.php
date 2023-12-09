<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\GroceryCrud;

class BukuController extends BaseController
{
    public function index()
    {
        $crud = new GroceryCrud();
        $crud->setTable('bukus');
        $crud->setSubject('Buku');
        $crud->setSubject('Buku');
        $crud->columns(['judul','penulis','penerbit','sinopsis','jml_halaman','created_at']);
        $crud->fields(['judul','penulis','penerbit','sinopsis','jml_halaman']);
        $crud->displayAs('jml_halaman', 'Jumlah Halaman');
        $crud->displayAs('created_at','Terdaftar');
        $output= $crud->render();
        $output->menu = 'halBuku';
        return view('buku', (array)$output);
        
    }
}

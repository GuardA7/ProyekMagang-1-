<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produk_controller extends Controller
{
    public function index()
    {
        $produk = [
            ['nama' => 'Barang 1', 'kategori' => 'Kategori 1', 'masuk' => 10, 'keluar' => 7, 'stok' => 3, 'modal' => 30000],
            ['nama' => 'Barang 2', 'kategori' => 'Kategori 1', 'masuk' => 10, 'keluar' => 5, 'stok' => 5, 'modal' => 25000],
            ['nama' => 'Barang 3', 'kategori' => 'Kategori 2', 'masuk' => 10, 'keluar' => 2, 'stok' => 8, 'modal' => 30000],
            ['nama' => 'Barang 4', 'kategori' => 'Kategori 4', 'masuk' => 10, 'keluar' => 1, 'stok' => 9, 'modal' => 25000],
        ];

        return view('page.produk.index', compact('produk'));
    }
}

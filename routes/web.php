<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\produk_controller;
use App\Http\Controllers\pengaturan_controller;
use App\Http\Controllers\pengguna_controller;
use App\Http\Controllers\kirimPaket_Controller;

// Login - Halaman awal
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login-attempt', [AuthController::class, 'attemptLogin'])->name('login.attempt');

// Setelah login
Route::get('/home', function () {
    return view('welcome'); // Atau dashboard view
})->name('home');

// Halaman lain
Route::get('/kirim-paket', function () {
    return view('page.kirimPaket.index');
});

Route::get('/kirim-paket', function () {
    return view('page.kirimPaket.index');
});

Route::get('/kirim-paket/uporder', function () {
    return view('page.kirimPaket.uporder');
});

Route::get('/produk', [produk_controller::class, 'index'])->name('produk.index');

Route::get('/pengaturan', [pengaturan_controller::class, 'index'])->name('pengaturan');

Route::get('/pengguna', [pengguna_controller::class, 'index'])->name('pengguna.index');
Route::get('/pengguna/tambah', [pengguna_controller::class, 'create'])->name('pengguna.create');

Route::get('/pengguna/edit/{id}', function ($id) {
    return view('page.pengguna.edit', ['id' => $id]);
})->name('pengguna.edit');

Route::delete('/pengguna/{id}', function ($id) {
    return redirect('/pengguna');
})->name('pengguna.destroy');


// routes/web.php
Route::get('/laporan/barang', function () {
    return view('page.laporan.barang');
});

// routes/web.php
Route::get('/laporan/keuangan', function () {
    return view('page.laporan.keuangan');
});

Route::get('/laporan/penjualan', function () {
    return view('page.laporan.penjualan');
});

Route::get('/laporan/user', function () {
    return view('page.laporan.user');
});

Route::get('/laporan/packing', function () {
    return view('page.laporan.packing');
});

Route::get('/laporan/packing/{resi}', function ($resi) {
    // Sementara statis untuk semua resi, tapi bisa dikembangkan ke dynamic
    return view('page.laporan.packing_detail', ['resi' => $resi]);
});


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengaturan_controller extends Controller
{
    public function index()
    {
        $user = [
            'nama' => 'Nama Pengguna',
            'email' => 'pengguna@gmail.com',
            'password' => '********',
        ];

        return view('page.pengaturan', compact('user'));
    }
}
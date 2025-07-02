<?php

namespace App\Http\Controllers;

use App\Models\User;

class pengguna_controller extends Controller
{
    public function index()
    {
        $users = User::all(); // ambil semua data user
        return view('page.pengguna.index', compact('users'));
    }

    public function create()
    {
        return view('page.pengguna.tambah'); // arahkan ke view tambah.blade.php
    }
}

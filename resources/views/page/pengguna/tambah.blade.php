@extends('layouts.app')
@section('title', 'Tambah Pengguna')

@section('content')
    <div class="container bg-white p-4 shadow rounded" style="max-width: 700px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">Tambah Pengguna</h3>
            <a href="{{ route('pengguna.index') }}" class="btn btn-primary">
                &larr; Kembali
            </a>
        </div>

        <form>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama pengguna">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role">
                    <option selected disabled>Pilih Role</option>
                    <option value="owner">Owner</option>
                    <option value="mod">MOD</option>
                    <option value="packing">Packing</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password">
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('pengguna.index') }}" class="btn btn-outline-secondary me-2">Batal</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection
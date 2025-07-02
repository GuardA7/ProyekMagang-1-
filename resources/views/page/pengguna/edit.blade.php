@extends('layouts.app')
@section('title', 'Edit Pengguna')

@section('content')
<div class="p-4 bg-white shadow rounded">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Edit Pengguna</h2>
        <a href="{{ route('pengguna.index') }}" class="btn btn-primary">&larr; Kembali</a>
    </div>

    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" id="name" name="name" class="form-control" value="Nama Dummy">
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="owner">Owner</option>
                <option value="mod">MOD</option>
                <option value="packing">Packing</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="dummy@example.com">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password (kosongkan jika tidak diubah)</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

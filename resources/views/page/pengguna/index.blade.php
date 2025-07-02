@extends('layouts.app')
@include('page.pengguna.tambah')
@include('page.pengguna.edit')
@include('page.pengguna.hapus')
@section('title', 'Pengguna')

@section('content')
<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4 gap-2">
        <h2 class="fw-semibold text-dark m-0">Manajemen Pengguna</h2>
        <a href="#" class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
            <i class="bi bi-person-plus"></i> Tambah Pengguna
        </a>
    </div>

    {{-- Table --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 text-center small">
                    <thead class="table-light text-secondary">
                        <tr>
                            <th><input type="checkbox"></th>
                            <th class="text-start">Nama Pengguna</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $users = [
                                ['id' => 1, 'name' => 'Andi Susanto', 'role' => 'owner'],
                                ['id' => 2, 'name' => 'Budi Hartono', 'role' => 'mod'],
                                ['id' => 3, 'name' => 'Citra Lestari', 'role' => 'packing'],
                            ];
                        @endphp

                        @foreach($users as $user)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td class="text-start d-flex align-items-center gap-2">
                                <i class="bi bi-person-circle fs-4 text-primary"></i>
                                <div>{{ $user['name'] }}</div>
                            </td>
                            <td class="text-capitalize">{{ $user['role'] }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <button type="button" class="btn btn-sm btn-outline-warning btn-edit"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalEdit"
                                        data-id="{{ $user['id'] }}"
                                        data-name="{{ $user['name'] }}"
                                        data-role="{{ $user['role'] }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger btn-hapus"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalHapus"
                                        data-id="{{ $user['id'] }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        @if (count($users) === 0)
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">Data pengguna tidak ditemukan.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Include Modals --}}

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Edit
        document.querySelectorAll('.btn-edit').forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('edit_name').value = this.dataset.name;
                document.getElementById('edit_role').value = this.dataset.role;
            });
        });

        // Hapus
        document.querySelectorAll('.btn-hapus').forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('hapus_id').textContent = this.dataset.id;
            });
        });
    });
</script>
@endpush

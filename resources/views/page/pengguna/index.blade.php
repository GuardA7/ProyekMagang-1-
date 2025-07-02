@extends('layouts.app')
@section('title', 'Pengguna')

@section('content')
<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4 gap-2">
        <h2 class="fw-semibold text-dark m-0">Manajemen Pengguna</h2>

        <a href="{{ url('/pengguna/tambah') }}" class="btn btn-primary d-flex align-items-center gap-2">
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
                                    <a href="{{ route('pengguna.edit', $user['id']) }}" class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-danger btn-hapus"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalHapus"
                                        data-id="{{ $user['id'] }}"
                                        title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        @if (count($users) === 0)
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">
                                Data pengguna tidak ditemukan.
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Modal Hapus --}}
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus pengguna ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <form id="formHapus" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const formHapus = document.getElementById('formHapus');
        const buttons = document.querySelectorAll('.btn-hapus');

        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const userId = this.getAttribute('data-id');
                formHapus.setAttribute('action', '/pengguna/' + userId);
            });
        });
    });
</script>
@endpush

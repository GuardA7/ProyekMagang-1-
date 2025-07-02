@extends('layouts.app')

{{-- Include Modal --}}
@include('page.produk.modal-tambah')
@include('page.produk.modal-edit')

@section('title', 'Produk')

@section('content')
<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4 gap-2">
        <h2 class="fw-semibold text-dark m-0">Manajemen Produk</h2>
        <div class="d-flex gap-2">
            <a href="#" class="btn btn-primary d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <i class="bi bi-plus-circle"></i> Tambah Barang
            </a>
            <a href="#" class="btn btn-outline-primary d-flex align-items-center gap-1">
                <i class="bi bi-upc-scan"></i> Cetak Barcode
            </a>
        </div>
    </div>

    {{-- Search --}}
    <div class="mb-4">
        <div class="input-group shadow-sm">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-search text-muted"></i>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Cari produk berdasarkan nama atau kategori...">
        </div>
    </div>

    {{-- Table --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 text-center">
                    <thead class="table-light text-secondary small">
                        <tr>
                            <th><input type="checkbox" /></th>
                            <th class="text-start">Nama Barang</th>
                            <th>Barang Masuk</th>
                            <th>Barang Keluar</th>
                            <th>Stok</th>
                            <th>Modal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="small">
                        @foreach ([1, 2, 3] as $index)
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td class="text-start d-flex align-items-center gap-2">
                                <img src="https://via.placeholder.com/40" class="rounded shadow-sm" alt="foto" width="40" height="40">
                                <div>
                                    <div class="fw-medium">Produk {{ $index }}</div>
                                    <div class="text-muted small">Kategori {{ $index }}</div>
                                </div>
                            </td>
                            <td>10</td>
                            <td>2</td>
                            <td><span class="badge bg-success">Sisa 8</span></td>
                            <td>Rp {{ number_format(15000 * $index, 0, ',', '.') }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-outline-warning"
                                       onclick="showEditModal({id: {{ $index }}, nama: 'Produk {{ $index }}', kategori: 'Kategori {{ $index }}', stok: 8, modal: {{ 15000 * $index }}})">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <button class="btn btn-sm btn-outline-danger" onclick="confirmDelete({{ $index }})">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

{{-- Script Edit Modal --}}
<script>
    function showEditModal(data) {
        document.getElementById('editId').value = data.id;
        document.getElementById('editNama').value = data.nama;
        document.getElementById('editKategori').value = data.kategori;
        document.getElementById('editStok').value = data.stok;
        document.getElementById('editModal').value = data.modal;
        new bootstrap.Modal(document.getElementById('modalEdit')).show();
    }

    function confirmDelete(id) {
        if (confirm("Apakah kamu yakin ingin menghapus produk ini?")) {
            alert('Produk dengan ID ' + id + ' berhasil dihapus (simulasi).');
        }
    }
</script>
@endsection

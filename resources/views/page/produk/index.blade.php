@extends('layouts.app')
@section('title', 'Produk')

@section('content')
<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4 gap-2">
        <h2 class="fw-semibold text-dark m-0">Manajemen Produk</h2>

        <div class="d-flex gap-2">
            <a href="#" class="btn btn-primary d-flex align-items-center gap-1">
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
                        @foreach ($produk as $item)
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td class="text-start d-flex align-items-center gap-2">
                                <img src="https://via.placeholder.com/40" class="rounded shadow-sm" alt="foto" width="40" height="40">
                                <div>
                                    <div class="fw-medium">{{ $item['nama'] }}</div>
                                    <div class="text-muted small">{{ $item['kategori'] }}</div>
                                </div>
                            </td>
                            <td>{{ $item['masuk'] }}</td>
                            <td>{{ $item['keluar'] }}</td>
                            <td>
                                @if ($item['stok'] <= 5)
                                    <span class="badge bg-danger">Sisa {{ $item['stok'] }}</span>
                                @else
                                    {{ $item['stok'] }}
                                @endif
                            </td>
                            <td>Rp {{ number_format($item['modal'], 0, ',', '.') }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-sm btn-outline-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form method="POST" action="#">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @if (count($produk) === 0)
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                Data produk tidak ditemukan.
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

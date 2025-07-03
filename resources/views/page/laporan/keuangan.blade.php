@extends('layouts.app')
@section('title', 'Laporan Keuangan')

@section('content')
    <div class="p-4 bg-white shadow rounded-lg">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Laporan Keuangan</h2>

            <div class="d-flex gap-2">
                {{-- Form Upload File --}}
                <form action="{{ route('keuangan.upload') }}" method="POST" enctype="multipart/form-data"
                    class="d-flex align-items-center gap-2">
                    @csrf
                    <input type="file" name="file_keuangan" class="form-control form-control-sm" required>
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="bi bi-upload me-1"></i> Upload
                    </button>
                </form>

                {{-- Tombol Export --}}
                <button class="btn btn-primary btn-sm">
                    <i class="bi bi-download me-1"></i> Export Laporan
                </button>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Upload gagal:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Tabel --}}
        <div class="table-responsive">
            <table class="table table-bordered table-striped w-100">
                <thead class="table-light">
                    <tr>
                        <th>Sumber</th>
                        <th>Jumlah Order</th>
                        <th>Pendapatan Kotor</th>
                        <th>Diskon Penjual</th>
                        <th>Diskon Platform</th>
                        <th>Pendapatan Bersih</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $laporanKeuangan = [
                            ['sumber' => 'Shopee', 'order' => 20, 'kotor' => 1500000, 'diskon_penjual' => 50000, 'diskon_platform' => 25000, 'bersih' => 1425000, 'tanggal' => '2025-07-01'],
                            ['sumber' => 'Tokopedia', 'order' => 15, 'kotor' => 1200000, 'diskon_penjual' => 30000, 'diskon_platform' => 20000, 'bersih' => 1150000, 'tanggal' => '2025-07-01'],
                            ['sumber' => 'Lazada', 'order' => 10, 'kotor' => 800000, 'diskon_penjual' => 20000, 'diskon_platform' => 15000, 'bersih' => 765000, 'tanggal' => '2025-07-01'],
                        ];
                    @endphp

                    @foreach($laporanKeuangan as $item)
                        <tr>
                            <td>{{ $item['sumber'] }}</td>
                            <td>{{ $item['order'] }}</td>
                            <td>Rp {{ number_format($item['kotor'], 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($item['diskon_penjual'], 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($item['diskon_platform'], 0, ',', '.') }}</td>
                            <td class="fw-bold text-success">Rp {{ number_format($item['bersih'], 0, ',', '.') }}</td>
                            <td>{{ $item['tanggal'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
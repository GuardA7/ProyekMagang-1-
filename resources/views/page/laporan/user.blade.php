@extends('layouts.app')

@section('content')
<div class="p-4 bg-white shadow rounded-lg">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0 fw-bold">Laporan User (Packing)</h2>
        <button class="btn btn-primary">Export Laporan</button>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped w-100">
            <thead class="table-light">
                <tr>
                    <th>Nama</th>
                    <th>Total Packing</th>
                    <th>Total Barang</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $laporanPacking = [
                        ['nama' => 'Andi Pratama', 'packing' => 20, 'barang' => 45, 'tanggal' => '20/05/2025'],
                        ['nama' => 'Budi Santoso', 'packing' => 15, 'barang' => 33, 'tanggal' => '20/05/2025'],
                        ['nama' => 'Citra Dewi', 'packing' => 18, 'barang' => 40, 'tanggal' => '20/05/2025'],
                    ];
                @endphp
                @foreach($laporanPacking as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['packing'] }} Paket</td>
                        <td>{{ $item['barang'] }} Barang</td>
                        <td>{{ $item['tanggal'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

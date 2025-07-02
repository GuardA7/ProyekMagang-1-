@extends('layouts.app')
@section('title', 'Laporan Keuangan')

@section('content')
<div class="p-4 bg-white shadow rounded-lg">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Laporan Keuangan</h2>
        <button class="btn btn-primary">Export Laporan</button>
    </div>

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

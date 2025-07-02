@extends('layouts.app')

@section('content')
    <div class="p-4 bg-white shadow rounded-lg">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0 fw-bold">Laporan Penjualan</h2>
            <button class="btn btn-primary">Export Laporan</button>

        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped w-100">
                <thead class="table-light">
                    <tr>
                        <th>Nama Produk</th>
                        <th>Jumlah Terjual</th>
                        <th>Total Revenue</th>
                        <th>Total Diskon</th>
                        <th>Pendapatan Bersih</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $penjualan = [
                            ['produk' => 'Produk A', 'terjual' => 30, 'revenue' => 900000, 'diskon' => 50000, 'bersih' => 850000, 'tanggal' => '2024-07-01'],
                            ['produk' => 'Produk B', 'terjual' => 20, 'revenue' => 600000, 'diskon' => 20000, 'bersih' => 580000, 'tanggal' => '2024-07-01'],
                            ['produk' => 'Produk C', 'terjual' => 10, 'revenue' => 300000, 'diskon' => 10000, 'bersih' => 290000, 'tanggal' => '2024-07-01'],
                        ];
                    @endphp

                    @foreach($penjualan as $item)
                        <tr>
                            <td>{{ $item['produk'] }}</td>
                            <td>{{ $item['terjual'] }}</td>
                            <td>Rp {{ number_format($item['revenue'], 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($item['diskon'], 0, ',', '.') }}</td>
                            <td class="text-success fw-semibold">Rp {{ number_format($item['bersih'], 0, ',', '.') }}</td>
                            <td>{{ $item['tanggal'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
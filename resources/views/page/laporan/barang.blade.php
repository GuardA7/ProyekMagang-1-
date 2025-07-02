@extends('layouts.app')
@section('title', 'Laporan Barang')

@section('content')
<div class="p-4 bg-white shadow rounded-lg">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Laporan Barang</h2>
        <button class="btn btn-primary">Export Laporan</button>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped w-100">
            <thead class="table-light">
                <tr>
                    <th>Barang Masuk</th>
                    <th>Barang Keluar</th>
                    <th>Pending</th>
                    <th>Dikirim</th>
                    <th>Selesai</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $laporan = [
                        ['masuk' => 100, 'keluar' => 50, 'pending' => 20, 'dikirim' => 10, 'selesai' => 20, 'date' => '5/1/2000'],
                        ['masuk' => 50, 'keluar' => 10, 'pending' => 5, 'dikirim' => 3, 'selesai' => 2, 'date' => '4/1/2000'],
                        ['masuk' => 70, 'keluar' => 20, 'pending' => 10, 'dikirim' => 10, 'selesai' => 0, 'date' => '3/1/2000'],
                        ['masuk' => 110, 'keluar' => 10, 'pending' => 10, 'dikirim' => 0, 'selesai' => 0, 'date' => '2/1/2000'],
                        ['masuk' => 200, 'keluar' => 100, 'pending' => 20, 'dikirim' => 40, 'selesai' => 40, 'date' => '1/1/2000'],
                    ];
                @endphp

                @foreach($laporan as $row)
                    <tr>
                        <td>{{ $row['masuk'] }}</td>
                        <td>{{ $row['keluar'] }}</td>
                        <td>{{ $row['pending'] }}</td>
                        <td>{{ $row['dikirim'] }}</td>
                        <td>{{ $row['selesai'] }}</td>
                        <td>{{ $row['date'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

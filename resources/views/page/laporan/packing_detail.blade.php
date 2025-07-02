@extends('layouts.app')

@section('title', 'Detail Packing')

@section('content')
    <div class="p-4 bg-white shadow rounded-lg">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Detail Packing - RESI123</h2>
            <a href="{{ url('/laporan/packing') }}" class="btn btn-primary">
                &larr; Kembali
            </a>
        </div>

        <div class="table-responsive mt-3">
            <table class="table table-bordered table-striped w-100">
                <thead class="table-light">
                    <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Harga Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $detailPacking = [
                            ['id' => 'BRG001', 'nama' => 'Kaos Polos Hitam L', 'jumlah' => 2, 'harga' => 55000],
                            ['id' => 'BRG002', 'nama' => 'Celana Chino Abu', 'jumlah' => 1, 'harga' => 120000],
                        ];
                    @endphp

                    @foreach($detailPacking as $item)
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['jumlah'] }}</td>
                            <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($item['jumlah'] * $item['harga'], 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
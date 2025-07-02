@extends('layouts.app')

@section('title', 'Laporan Packing')

@section('content')
<div class="p-4 bg-white shadow rounded-lg">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Laporan Packing</h2>
        <button class="btn btn-primary">Export Laporan</button>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped w-100">
            <thead class="table-light">
                <tr>
                    <th>No Resi</th>
                    <th>ID Order</th>
                    <th>Barang</th>
                    <th>User</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $dataPacking = [
                        ['resi' => 'RESI123', 'order_id' => 'ORD001', 'user' => 'Ulwan', 'tanggal' => '2024-07-01'],
                        ['resi' => 'RESI456', 'order_id' => 'ORD002', 'user' => 'Dina', 'tanggal' => '2024-07-01'],
                        ['resi' => 'RESI789', 'order_id' => 'ORD003', 'user' => 'Rudi', 'tanggal' => '2024-07-02'],
                    ];
                @endphp

                @foreach($dataPacking as $row)
                    <tr>
                        <td>{{ $row['resi'] }}</td>
                        <td>{{ $row['order_id'] }}</td>
                        <td>
                            <a href="{{ url('/laporan/packing/' . $row['resi']) }}" class="btn btn-sm btn-primary">
                                Lihat Barang
                            </a>
                        </td>
                        <td>{{ $row['user'] }}</td>
                        <td>{{ $row['tanggal'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

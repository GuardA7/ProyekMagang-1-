@extends('layouts.app')
@section('title', 'Upload Order')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h4 class="mb-3 text-primary">Upload File Order</h4>
                    <form action="{{ url('/kirim-paket/uporder/upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="file" class="form-label">Pilih File Order (CSV / Excel)</label>
                            <input type="file" name="file" id="file" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>

            {{-- Tabel Data Upload --}}
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Riwayat Upload Order</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Upload</th>
                                    <th>ID Order / Resi</th>
                                    <th>Marketplace</th>
                                    <th>Nama File</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Contoh data dummy --}}
                                <tr>
                                    <td>1</td>
                                    <td>2025-07-02</td>
                                    <td>RS1234567890</td>
                                    <td>Shopee</td>
                                    <td><a href="{{ asset('uploads/shopee_order.csv') }}" download>shopee_order.csv</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2025-07-01</td>
                                    <td>RS9876543210</td>
                                    <td>Tokopedia</td>
                                    <td><a href="{{ asset('uploads/tokopedia_orders.xlsx') }}" download>tokopedia_orders.xlsx</a></td>
                                </tr>
                                {{-- Nanti diganti dengan data dari controller --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

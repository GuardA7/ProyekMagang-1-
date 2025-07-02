@extends('layouts.app')
@section('title', 'Kirim Paket')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body text-center">
                        <h3 class="mb-3 text-primary">Kirim Paket</h3>
                        <p class="text-muted mb-4">Scan nomor resi terlebih dahulu, lalu scan barcode produk.</p>
                        <a href="{{ url('/kirim-paket/uporder') }}" class="btn btn-success mb-3">Up Order</a>

                        {{-- Kamera Scanner --}}
                        <div id="reader" style="width: 100%; max-width: 400px; margin: 0 auto;" class="mx-auto"></div>

                        {{-- Tombol --}}
                        <div class="d-flex justify-content-center gap-3 mt-4">
                            <button class="btn btn-outline-primary" onclick="startScanner()">Scan Ulang</button>
                            <button class="btn btn-outline-danger" onclick="resetAll()">Reset Semua</button>
                        </div>
                    </div>
                </div>

                {{-- Alert --}}
                <div id="alertContainer"></div>

                {{-- Tabel Hasil Transaksi --}}
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-dark mb-3">Hasil Transaksi</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th>No Resi</th>
                                        <th>Barcode</th>
                                    </tr>
                                </thead>
                                <tbody id="scanResultTable">
                                    <tr>
                                        <td colspan="3" class="text-center text-muted">Belum ada data</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Html5Qrcode --}}
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        let html5QrcodeScanner;
        let currentResi = null;
        let results = [];

        function isValidResi(code) {
            return code.startsWith("RS") || code.length >= 10;
        }

        function showAlert(message, type = 'info') {
            const alertHTML = `
                <div class="alert alert-${type} alert-dismissible fade show mt-3" role="alert">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>`;
            document.getElementById('alertContainer').innerHTML = alertHTML;
        }

        function startScanner() {
            if (html5QrcodeScanner) {
                html5QrcodeScanner.clear().catch(e => console.error("Clear failed", e));
            }

            html5QrcodeScanner = new Html5Qrcode("reader");
            html5QrcodeScanner.start(
                { facingMode: "environment" },
                {
                    fps: 10,
                    qrbox: { width: 250, height: 250 }
                },
                (decodedText) => {
                    handleScan(decodedText);
                },
                (errorMessage) => { }
            ).catch(err => {
                console.error("Start failed", err);
            });
        }

        function handleScan(code) {
            if (!currentResi) {
                if (isValidResi(code)) {
                    currentResi = code;
                    showAlert("Resi berhasil dibaca: <strong>" + code + "</strong>", "success");
                } else {
                    showAlert("Scan gagal. Harus scan nomor resi terlebih dahulu.", "danger");
                }
            } else {
                if (isValidResi(code)) {
                    currentResi = code;
                    showAlert("Resi baru dibaca: <strong>" + code + "</strong>. Transaksi baru dimulai.", "warning");
                } else {
                    results.push({
                        no: results.length + 1,
                        resi: currentResi,
                        barcode: code
                    });
                    updateTable();
                    showAlert("Barcode berhasil dicatat: <strong>" + code + "</strong>", "primary");
                }
            }
        }

        function updateTable() {
            const tbody = document.getElementById("scanResultTable");
            tbody.innerHTML = "";
            results.forEach((item, index) => {
                tbody.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.resi}</td>
                        <td>${item.barcode}</td>
                    </tr>
                `;
            });

            if (results.length === 0) {
                tbody.innerHTML = `<tr><td colspan="3" class="text-center text-muted">Belum ada data</td></tr>`;
            }
        }

        function resetAll() {
            if (html5QrcodeScanner) {
                html5QrcodeScanner.clear().catch(e => console.error("Clear failed", e));
            }
            currentResi = null;
            results = [];
            updateTable();
            showAlert("Transaksi telah di-reset. Silakan scan resi baru.", "info");
            startScanner();
        }

        document.addEventListener('DOMContentLoaded', startScanner);
    </script>
@endsection
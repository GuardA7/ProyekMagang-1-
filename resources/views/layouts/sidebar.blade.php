<style>

</style>

<div id="sidebar" class="sidebar d-flex flex-column border-end">
    <h5 class="mb-4">Menu Utama</h5>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                <i class="bi bi-house-door me-2"></i> Beranda
            </a>
        </li>
        <li>
            <a href="{{ url('/produk') }}" class="nav-link {{ request()->is('produk') ? 'active' : '' }}">
                <i class="bi bi-box me-2"></i> Produk
            </a>
        </li>
        <li>
            <a href="{{ url('/kirim-paket') }}" class="nav-link {{ request()->is('kirim-paket') ? 'active' : '' }}">
                <i class="bi bi-send me-2"></i> Kirim Paket
            </a>
        </li>
        <li>
            <a href="{{ url('/pengguna') }}" class="nav-link">
                <i class="bi bi-people me-2"></i> Pengguna
            </a>
        </li>

        {{-- Dropdown Laporan --}}
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#laporanMenu" role="button" aria-expanded="false" aria-controls="laporanMenu">
                <span><i class="bi bi-file-earmark-text me-2"></i> Laporan</span>
                <i class="bi bi-caret-down-fill dropdown-icon"></i>
            </a>
            <div class="collapse ps-2" id="laporanMenu">
                <ul class="nav flex-column mt-1">
                    <li><a class="nav-link py-1" href="{{ url('/laporan/barang') }}">Laporan Barang</a></li>
                    <li><a class="nav-link py-1" href="{{ url('/laporan/keuangan') }}">Laporan Keuangan</a></li>
                    <li><a class="nav-link py-1" href="{{ url('/laporan/penjualan') }}">Laporan Penjualan</a></li>
                    <li><a class="nav-link py-1" href="{{ url('/laporan/user') }}">Laporan User</a></li>
                    <li><a class="nav-link py-1" href="{{ url('/laporan/packing') }}">Laporan Packing</a></li>
                </ul>
            </div>
        </li>

        <li class="mt-3">
            <a href="{{ url('/pengaturan') }}" class="nav-link">
                <i class="bi bi-gear me-2"></i> Pengaturan
            </a>
        </li>
    </ul>
</div>

<nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #1e3a8a;">
    <div class="container-fluid">

        {{-- Sidebar Toggle Button --}}
        <button class="btn btn-outline-light me-3" id="sidebarToggle">
            <i class="bi bi-list fs-4"></i>
        </button>

        {{-- Brand --}}
        <a class="navbar-brand fw-semibold text-white" href="#">
            <i class="bi bi-shop me-2"></i> Nama Website
        </a>

        {{-- Spacer --}}
        <div class="flex-grow-1"></div>

        {{-- Dropdown: My Account --}}
        <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white d-flex align-items-center gap-2" href="#"
                    id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fs-5"></i>
                    <span class="d-none d-md-inline">Akun Saya</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="accountDropdown">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>
                            Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

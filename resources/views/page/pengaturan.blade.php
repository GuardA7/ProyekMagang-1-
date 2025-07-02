@extends('layouts.app')
@section('title', 'Pengaturan')

@section('content')

    <div class="container-fluid"> {{-- Header --}} <h2 class="fw-bold mb-4">Pengaturan</h2>
        {{-- Profil --}}
        <div class="row mb-5">
            <div class="col-md-2 text-center">
                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center"
                    style="width: 100px; height: 100px;">
                    <i class="bi bi-person fs-1 text-muted"></i>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td class="fw-semibold">Nama</td>
                        <td>: {{ Auth::user()->name ?? 'Nama Pengguna' }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Email</td>
                        <td>: {{ Auth::user()->email ?? 'pengguna@gmail.com' }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Password</td>
                        <td>: ******** <i class="bi bi-eye ms-2" style="cursor: pointer;"></i></td>
                    </tr>
                </table>
                <a href="#" class="btn btn-primary">Edit Profil</a>
            </div>
        </div>

        {{-- Language --}}
        <div class="mt-4 border-top pt-3">
            <h6><i class="bi bi-translate me-2"></i><a href="#" class="text-decoration-none text-primary">Language</a></h6>
        </div>
</div> @endsection
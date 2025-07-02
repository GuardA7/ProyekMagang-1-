<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke Aplikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: Icons Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
        }
        .login-card {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="login-card bg-white rounded shadow p-4">
        <div class="text-center mb-4">
            <i class="bi bi-person-circle fs-1 text-primary"></i>
            <h4 class="fw-bold mt-2">Masuk</h4>
            <p class="text-muted small m-0">Silakan login untuk melanjutkan</p>
        </div>
        <form action="{{ route('login.attempt') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="nama@email.com" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="••••••••" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
        </form>
    </div>
</body>
</html>

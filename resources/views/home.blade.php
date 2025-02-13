<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Magang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard Magang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Magang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tugas</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Software Manajemen Magang</h1>
            <p class="lead">Solusi terbaik untuk mengelola tugas dan aktivitas magang Anda.</p>
            <a href="#" class="btn btn-light btn-lg">Mulai Sekarang</a>
        </div>
    </header>

    <section class="container my-5 text-center">
        <h2>Fitur Utama</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <h4>Manajemen Tugas</h4>
                <p>Mengelola tugas harian dengan mudah dan efisien.</p>
            </div>
            <div class="col-md-4">
                <h4>Pelaporan Kinerja</h4>
                <p>Melihat dan melaporkan progres magang dengan cepat.</p>
            </div>
            <div class="col-md-4">
                <h4>Notifikasi Otomatis</h4>
                <p>Mendapatkan pengingat otomatis untuk setiap tugas.</p>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Dashboard Magang. Semua Hak Dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

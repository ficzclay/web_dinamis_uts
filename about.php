<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">DataTables</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Content Section -->
    <section class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-5 text-primary">Halaman About</h1>
            <p class="lead text-muted">Informasi tentang DataTables dan fitur situs kami.</p>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-table text-primary fs-1"></i>
                        <h5 class="card-title mt-3">Tentang DataTables</h5>
                        <p class="card-text text-muted">DataTables adalah plugin jQuery untuk mengelola dan menampilkan data dalam tabel interaktif.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-lightbulb text-primary fs-1"></i>
                        <h5 class="card-title mt-3">Keunggulan</h5>
                        <p class="card-text text-muted">Dengan menggunakan DataTables, data dapat difilter, diurutkan, dan dipaginasi dengan mudah dan juga efisien.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-people text-primary fs-1"></i>
                        <h5 class="card-title mt-3">Dukungan Komunitas</h5>
                        <p class="card-text text-muted">Didukung oleh komunitas besar yang aktif, memastikan bantuan dan pengembangan yang berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <button class="btn btn-primary">Pelajari Lebih Lanjut</button>
        </div>
    </section>
    <!-- Bootstrap JS and Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
</body>
</html>

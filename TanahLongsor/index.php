<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Home - Sistem Pemantauan Tanah Longsor</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #61481C;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-mountain me-2"></i>Tanah Longsor
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Maps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laporan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tentang</a></li>
                            <li><a class="dropdown-item" href="#">Kontak</a></li>
                            <li><a class="dropdown-item" href="#">Bantuan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-4">Sistem Pemantauan Tanah Longsor</h1>
                    <p class="lead mb-4">Platform real-time untuk memantau, menganalisis, dan mencegah bencana tanah longsor dengan teknologi terkini.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <button class="btn btn-primary-custom">
                            <i class="fas fa-map me-2"></i>Lihat Peta
                        </button>
                        <button class="btn btn-outline-light">
                            <i class="fas fa-chart-bar me-2"></i>Data Statistik
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-preview mt-4 mt-lg-0">
                        <div class="text-center">
                            <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                            <p>Peta Interaktif Pemantauan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">15</div>
                        <div class="stat-label">Lokasi Terpantau</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">3</div>
                        <div class="stat-label">Status Siaga</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">12</div>
                        <div class="stat-label">Status Aman</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Pemantauan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold section-title">Fitur Utama Sistem</h2>
                    <p class="text-muted">Teknologi canggih untuk keselamatan dan kewaspadaan masyarakat</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-satellite-dish"></i>
                        </div>
                        <h5 class="fw-bold">Monitoring Real-time</h5>
                        <p class="text-muted">Pemantauan 24/7 dengan sensor canggih untuk mendeteksi pergerakan tanah secara real-time</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h5 class="fw-bold">Peta Interaktif</h5>
                        <p class="text-muted">Visualisasi data dalam peta digital untuk analisis risiko yang komprehensif dan mudah dipahami</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h5 class="fw-bold">Sistem Peringatan</h5>
                        <p class="text-muted">Notifikasi otomatis ketika terdeteksi potensi bahaya tanah longsor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Status Alert Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="status-card status-warning">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-exclamation-triangle fa-2x me-3"></i>
                            <h4 class="mb-0">Status Siaga</h4>
                            <span class="alert-badge">3</span>
                        </div>
                        <p class="mb-0">3 lokasi dalam status siaga waspada. Perlu pemantauan intensif dan kewaspadaan tinggi.</p>
                        <small class="opacity-75">Terakhir update: 5 menit lalu</small>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="status-card status-safe">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle fa-2x me-3"></i>
                            <h4 class="mb-0">Status Aman</h4>
                        </div>
                        <p class="mb-0">12 lokasi dalam kondisi stabil dan aman dari potensi longsor. Tetap waspada terhadap perubahan cuaca.</p>
                        <small class="opacity-75">Terakhir update: 1 jam lalu</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-mountain me-2"></i>Sistem Pemantauan Tanah Longsor</h5>
                    <p class="mb-0 text-muted">Melindungi masyarakat dengan teknologi terdepan dan pemantauan berkelanjutan</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 text-muted">&copy; 2024 All rights reserved. | Sistem Early Warning</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
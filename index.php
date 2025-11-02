<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELI - Website Edukasi Tanah Longsor</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        .hero-section {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            padding: 120px 0 100px 0;
        }
        .navbar-brand {
            font-weight: 700;
            color: #2c3e50 !important;
            font-size: 1.5rem;
        }
        .nav-link {
            font-weight: 500;
        }
        .section-title {
            border-left: 5px solid #3498db;
            padding-left: 15px;
            margin: 40px 0 20px 0;
            font-weight: 600;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">WELI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informasi.php">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="peta-rawan.php">Peta Rawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sumber-daya.php">Sumber Daya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Selamat Datang di WELI</h1>
            <p class="lead fs-5">Website Edukasi dan Informasi Tanah Longsor Indonesia</p>
            <p class="mb-4">Platform informasi komprehensif untuk memahami, mencegah, dan menanggulangi bencana tanah longsor</p>
            <a href="informasi.php" class="btn btn-light btn-lg mt-3 fw-medium">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- Quick Info Section -->
    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Informasi Lengkap</h5>
                        <p class="card-text">Definisi, jenis-jenis, penyebab, dan mitigasi tanah longsor</p>
                        <a href="informasi.php" class="btn btn-primary fw-medium">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Peta Rawan</h5>
                        <p class="card-text">Peta interaktif zona rawan tanah longsor di Indonesia</p>
                        <a href="peta-rawan.php" class="btn btn-primary fw-medium">Lihat Peta</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Sumber Daya</h5>
                        <p class="card-text">Download materi edukasi dan pedoman penanggulangan</p>
                        <a href="sumber-daya.php" class="btn btn-primary fw-medium">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 WELI - Website Edukasi Tanah Longsor Indonesia. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap & JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
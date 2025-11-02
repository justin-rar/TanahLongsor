<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - WELI</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        * {
            font-family: 'Poppins', sans-serif;
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
        .gallery-img {
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .gallery-img:hover {
            transform: scale(1.05);
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            overflow: hidden;
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
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informasi.php">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="peta-rawan.php">Peta Rawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="galeri.php">Galeri</a>
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

    <div class="container mt-5 pt-5">
        <h1 class="section-title border-0 p-0 mt-4">Galeri Tanah Longsor</h1>
        <p class="lead mb-5">Kumpulan foto dan dokumentasi terkait tanah longsor di Indonesia</p>

        <!-- Gallery Grid -->
        <div class="row g-4">
            <!-- Galeri 1 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1591474200742-8e512e6f98f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top gallery-img" alt="Tanah Longsor 1">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Longsor di Daerah Pegunungan</h5>
                        <p class="card-text">Dokumentasi tanah longsor yang terjadi di daerah pegunungan dengan kemiringan lereng curam.</p>
                        <div class="text-muted small">Sumber: Dokumentasi BNPB</div>
                    </div>
                </div>
            </div>

            <!-- Galeri 2 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1612489846772-55a5e89766f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top gallery-img" alt="Tanah Longsor 2">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Dampak pada Permukiman</h5>
                        <p class="card-text">Akibat tanah longsor yang merusak permukiman warga di daerah rawan bencana.</p>
                        <div class="text-muted small">Sumber: Dokumentasi BPBD</div>
                    </div>
                </div>
            </div>

            <!-- Galeri 3 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top gallery-img" alt="Tanah Longsor 3">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Proses Evakuasi</h5>
                        <p class="card-text">Tim SAR melakukan evakuasi korban terdampak tanah longsor.</p>
                        <div class="text-muted small">Sumber: Dokumentasi Basarnas</div>
                    </div>
                </div>
            </div>

            <!-- Galeri 4 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top gallery-img" alt="Tanah Longsor 4">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Rekayasa Teknis</h5>
                        <p class="card-text">Pemasangan bronjong untuk stabilisasi lereng rawan longsor.</p>
                        <div class="text-muted small">Sumber: Dokumentasi PUPR</div>
                    </div>
                </div>
            </div>

            <!-- Galeri 5 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1476820865390-c52aeebb9891?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top gallery-img" alt="Tanah Longsor 5">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Vegetasi Penahan</h5>
                        <p class="card-text">Penanaman vegetasi untuk mengurangi risiko tanah longsor.</p>
                        <div class="text-muted small">Sumber: Dokumentasi Kementerian LHK</div>
                    </div>
                </div>
            </div>

            <!-- Galeri 6 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1464822759849-e2be53e9bb93?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="card-img-top gallery-img" alt="Tanah Longsor 6">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Pemantauan Lereng</h5>
                        <p class="card-text">Alat pemantauan pergerakan tanah di daerah rawan longsor.</p>
                        <div class="text-muted small">Sumber: Dokumentasi PVMBG</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Section -->
        <h2 class="section-title mt-5">Video Edukasi</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Video Edukasi Tanah Longsor" allowfullscreen></iframe>
                        </div>
                        <div class="p-3">
                            <h5 class="fw-semibold">Video Mitigasi Tanah Longsor</h5>
                            <p class="mb-0">Video edukasi tentang cara mitigasi bencana tanah longsor</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Video Penanggulangan Tanah Longsor" allowfullscreen></iframe>
                        </div>
                        <div class="p-3">
                            <h5 class="fw-semibold">Penanggulangan Bencana</h5>
                            <p class="mb-0">Tata cara penanggulangan saat terjadi tanah longsor</p>
                        </div>
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
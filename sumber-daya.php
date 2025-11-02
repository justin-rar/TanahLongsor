<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber Daya - WELI</title>
    
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
        .resource-card {
            border: none;
            border-left: 4px solid #3498db;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .resource-card:hover {
            transform: translateX(5px);
        }
        .download-btn {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            border: none;
            font-weight: 500;
        }
        .download-btn:hover {
            background: linear-gradient(135deg, #2980b9, #34495e);
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
                        <a class="nav-link" href="galeri.php">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="sumber-daya.php">Sumber Daya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1 class="section-title border-0 p-0 mt-4">Sumber Daya & Download</h1>
        <p class="lead mb-5">Kumpulan materi edukasi, pedoman, dan dokumen penting terkait tanah longsor</p>

        <!-- Download Resources -->
        <div class="row g-4">
            <!-- Sumber Daya 1 -->
            <div class="col-12">
                <div class="card resource-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="card-title fw-semibold text-primary">Pedoman Mitigasi Bencana Tanah Longsor</h4>
                                <p class="card-text">Pedoman lengkap tentang mitigasi bencana tanah longsor yang disusun oleh BNPB. Berisi langkah-langkah pencegahan, kesiapsiagaan, dan penanggulangan.</p>
                                <p class="text-muted mb-0"><small>Format: PDF | Ukuran: 2.5 MB</small></p>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn download-btn text-white px-4 py-2">
                                    <i class="fas fa-download me-2"></i>Download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sumber Daya 2 -->
            <div class="col-12">
                <div class="card resource-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="card-title fw-semibold text-primary">Peta Zona Rawan Longsor Nasional</h4>
                                <p class="card-text">Peta digital zona rawan tanah longsor seluruh Indonesia dalam format shapefile dan geojson. Dilengkapi dengan data atribut tingkat kerawanan.</p>
                                <p class="text-muted mb-0"><small>Format: ZIP (Shapefile, GeoJSON) | Ukuran: 15.8 MB</small></p>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn download-btn text-white px-4 py-2">
                                    <i class="fas fa-download me-2"></i>Download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sumber Daya 3 -->
            <div class="col-12">
                <div class="card resource-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="card-title fw-semibold text-primary">Modul Edukasi Masyarakat</h4>
                                <p class="card-text">Modul pembelajaran untuk edukasi masyarakat tentang bahaya tanah longsor dan cara penanggulangannya. Cocok untuk pelatihan dan sosialisasi.</p>
                                <p class="text-muted mb-0"><small>Format: PDF | Ukuran: 3.2 MB</small></p>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn download-btn text-white px-4 py-2">
                                    <i class="fas fa-download me-2"></i>Download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sumber Daya 4 -->
            <div class="col-12">
                <div class="card resource-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="card-title fw-semibold text-primary">Teknik Stabilisasi Lereng</h4>
                                <p class="card-text">Panduan teknis tentang metode stabilisasi lereng rawan longsor menggunakan teknik vegetatif dan struktural.</p>
                                <p class="text-muted mb-0"><small>Format: PDF | Ukuran: 4.1 MB</small></p>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn download-btn text-white px-4 py-2">
                                    <i class="fas fa-download me-2"></i>Download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sumber Daya 5 -->
            <div class="col-12">
                <div class="card resource-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="card-title fw-semibold text-primary">SOP Tanggap Darurat Longsor</h4>
                                <p class="card-text">Standar Operasional Prosedur (SOP) untuk tanggap darurat bencana tanah longsor.</p>
                                <p class="text-muted mb-0"><small>Format: PDF | Ukuran: 1.8 MB</small></p>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn download-btn text-white px-4 py-2">
                                    <i class="fas fa-download me-2"></i>Download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Resources -->
        <h2 class="section-title mt-5">Tautan Penting</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="list-group">
                    <a href="https://bnpb.go.id" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        BNPB - Badan Nasional Penanggulangan Bencana
                        <i class="fas fa-external-link-alt text-muted"></i>
                    </a>
                    <a href="https://bmkg.go.id" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        BMKG - Badan Meteorologi, Klimatologi, dan Geofisika
                        <i class="fas fa-external-link-alt text-muted"></i>
                    </a>
                    <a href="https://pvmbg.esdm.go.id" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        PVMBG - Pusat Vulkanologi dan Mitigasi Bencana Geologi
                        <i class="fas fa-external-link-alt text-muted"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <a href="https://pu.go.id" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Kementerian Pekerjaan Umum dan Perumahan Rakyat
                        <i class="fas fa-external-link-alt text-muted"></i>
                    </a>
                    <a href="https://menlhk.go.id" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Kementerian Lingkungan Hidup dan Kehutanan
                        <i class="fas fa-external-link-alt text-muted"></i>
                    </a>
                    <a href="https://bppt.go.id" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        BPPT - Badan Pengkajian dan Penerapan Teknologi
                        <i class="fas fa-external-link-alt text-muted"></i>
                    </a>
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

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <!-- Bootstrap & JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
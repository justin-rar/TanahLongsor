<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber Daya - WELI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Palet Warna*/
        :root {
            --primary-color: #795548;
            --secondary-color: #D84315;
            --secondary-hover-color: #F4511E;
            --dark-color: #5D4037;
            --light-bg-color: #F5F5F5;
        }

        * {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
        }
    
        .navbar-brand {
            font-weight: 700;
            color: var(--dark-color) !important;
            font-size: 1.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-color) !important;
            position: relative;
            padding-bottom: 5px;
            transition: color 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--secondary-color);
            transition: width 0.3s ease-in-out;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--secondary-color) !important;
        }
        .section-title {
            border-left: 5px solid var(--secondary-color); 
            padding-left: 15px;
            margin: 40px 0 20px 0;
            font-weight: 600;
        }
        
        .resource-card {
            border: none;
            border-left: 4px solid var(--primary-color); 
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            border-radius: 8px;
        }
        .resource-card:hover {
            transform: translateX(5px);
        }
        
        .resource-card .card-title.text-primary {
            color: var(--dark-color) !important; 
        }

        .download-btn {
            background-color: var(--secondary-color); 
            border: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        
        .download-btn:hover {
            background-color: var(--secondary-hover-color); 
        }
       
        .list-group-item-action {
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
        }
        .list-group-item-action:hover {
            color: var(--dark-color);
            background-color: var(--light-bg-color);
            border-left-color: var(--secondary-color);
        }
        .list-group-item-action:hover .fa-external-link-alt {
            color: var(--secondary-color) !important;
        }
        
        .download-btn a {
            color: white !important;
        }
        
    </style>
</head>
<body>
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
                        <a class="nav-link active" aria-current="page" href="sumber-daya.php">Sumber Daya</a>
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
        <p class="lead mb-5 text-muted">Kumpulan materi edukasi, pedoman, dan dokumen penting terkait tanah longsor</p>

        <div class="row g-4">
            <div class="col-12">
                <div class="card resource-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="card-title fw-semibold text-primary">Pedoman Mitigasi Bencana Tanah Longsor</h4>
                                <p class="card-text">Pedoman lengkap tentang mitigasi bencana tanah longsor yang disusun oleh BPBD. Berisi langkah-langkah pencegahan, kesiapsiagaan, dan penanggulangan.</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn download-btn text-white px-4 py-2">
                                    <i class="fas fa-external-link-alt me-2"></i><a href="https://bpbd.jogjaprov.go.id/berita/mitigasi-bencana-tanah-longsor-1" style="color: inherit; text-decoration: none;" target="_blank">Kunjungi</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card resource-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="card-title fw-semibold text-primary">Peta Zona Rawan Longsor Nasional</h4>
                                <p class="card-text">Peta digital zona rawan tanah longsor seluruh Indonesia. Tidak hanya tanah longsor, tetapi bahaya bencana alam lainnya.</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn download-btn text-white px-4 py-2">
                                    <i class="fas fa-external-link-alt me-2"></i><a href="https://inarisk.bnpb.go.id" style="color: inherit; text-decoration: none;" target="_blank">Kunjungi</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card resource-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="card-title fw-semibold text-primary">Modul Edukasi Masyarakat</h4>
                                <p class="card-text">Modul pembelajaran untuk edukasi masyarakat tentang bahaya tanah longsor dan cara penanggulangannya. Cocok untuk pelatihan dan sosialisasi.</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn download-btn text-white px-4 py-2">
                                    <i class="fas fa-download me-2"></i><a href="https://www.esdm.go.id/assets/media/content/Pengenalan_Gerakan_Tanah.pdf" style="color: inherit; text-decoration: none;" target="_blank">Download</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Tanah Longsor - WELI</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
        .sidebar {
            position: sticky;
            top: 100px;
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }
        .sidebar .list-group-item {
            border: none;
            border-left: 3px solid transparent;
            font-weight: 500;
            color: #555;
            transition: all 0.3s ease;
        }
        .sidebar .list-group-item:hover,
        .sidebar .list-group-item.active {
            background: #e9ecef;
            border-left-color: #3498db;
            color: #2c3e50;
        }
        .carousel-img {
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }
        .cause-item {
            background: #f8f9fa;
            border-left: 4px solid #3498db;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .mitigation-card {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .mitigation-card:hover {
            transform: translateY(-5px);
        }
        .timeline {
            position: relative;
            padding-left: 30px;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #3498db;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -23px;
            top: 5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #3498db;
            border: 3px solid white;
            box-shadow: 0 0 0 2px #3498db;
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
                        <a class="nav-link active" href="informasi.php">Informasi</a>
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

    <div class="container mt-5 pt-5">
        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-md-3">
                <div class="sidebar">
                    <h5 class="fw-semibold mb-3">Navigasi Informasi</h5>
                    <div class="list-group list-group-flush">
                        <a href="#definisi" class="list-group-item list-group-item-action">Definisi</a>
                        <a href="#jenis" class="list-group-item list-group-item-action">Jenis-Jenis</a>
                        <a href="#penyebab" class="list-group-item list-group-item-action">Penyebab</a>
                        <a href="#mitigasi" class="list-group-item list-group-item-action">Mitigasi</a>
                        <a href="#penanggulangan-sebelum" class="list-group-item list-group-item-action">Penanggulangan Sebelum</a>
                        <a href="#penanggulangan-saat" class="list-group-item list-group-item-action">Penanggulangan Saat</a>
                        <a href="#penanggulangan-setelah" class="list-group-item list-group-item-action">Penanggulangan Setelah</a>
                        <a href="#keuntungan" class="list-group-item list-group-item-action">Keuntungan</a>
                        <a href="#kerugian" class="list-group-item list-group-item-action">Kerugian</a>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <!-- Definisi -->
                <section id="definisi" class="mb-5">
                    <h2 class="section-title">Definisi Tanah Longsor</h2>
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <p class="card-text fs-6">
                                Tanah longsor adalah perpindahan material pembentuk lereng berupa batuan, bahan rombakan, tanah, 
                                atau material campuran tersebut, yang bergerak ke bawah atau keluar lereng akibat terganggunya 
                                kestabilan tanah atau batuan penyusun lereng tersebut.
                            </p>
                            <p class="card-text fs-6">
                                Fenomena alam ini dapat terjadi karena faktor alamiah maupun aktivitas manusia, dan sering 
                                menimbulkan kerusakan infrastruktur, korban jiwa, serta dampak ekonomi yang signifikan.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Jenis-Jenis -->
                <section id="jenis" class="mb-5">
                    <h2 class="section-title">Jenis-Jenis Tanah Longsor</h2>
                    <div id="jenisCarousel" class="carousel slide shadow rounded" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#jenisCarousel" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#jenisCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#jenisCarousel" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#jenisCarousel" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#jenisCarousel" data-bs-slide-to="4"></button>
                            <button type="button" data-bs-target="#jenisCarousel" data-bs-slide-to="5"></button>
                            <button type="button" data-bs-target="#jenisCarousel" data-bs-slide-to="6"></button>
                        </div>
                        <div class="carousel-inner"> <!-- 1 TRANSLASI -->
                            <div class="carousel-item active">
                                <img src="assets/images/longsorantranslasi.png" 
                                     class="d-block w-100 carousel-img" alt="Longsoran Translasi">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                                    <h5 class="fw-semibold">Longsoran Translasi</h5>
                                    <p>Longsoran yang bergerak sepanjang bidang gelincir berbentuk rata atau menggelombang landai</p>
                                </div>
                            </div>
                            <div class="carousel-item"> <!-- 2 ROTASI -->
                                <img src="assets/images/longsoranrotasi.png" 
                                     class="d-block w-100 carousel-img" alt="Longsoran Rotasi">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                                    <h5 class="fw-semibold">Longsoran Rotasi</h5>
                                    <p>Longsoran yang bergerak sepanjang bidang gelincir berbentuk cekung</p>
                                </div>
                            </div>
                            <div class="carousel-item"> <!-- 3 PEGERAKAN BLOK -->
                                <img src="assets/images/pergerakanblok.png" 
                                     class="d-block w-100 carousel-img" alt="Pergerakan Blok">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                                    <h5 class="fw-semibold">Pergerakan Blok</h5>
                                    <p>Pergerakan batuan yang bergerak pada bidang gelincir berbentuk rata</p>
                                </div>
                            </div>
                            <div class="carousel-item"> <!-- 4 RAYAPAN TANAH -->
                                <img src="assets/images/rayapantanah.png" 
                                     class="d-block w-100 carousel-img" alt="Rayapan Tanah">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                                    <h5 class="fw-semibold">Rayapan Tanah</h5>
                                    <p>Pergerakan tanah yang sangat lambat pada lereng landai</p>
                                </div>
                            </div>
                            <div class="carousel-item"> <!-- 5 RUNTUHAN BATU -->
                                <img src="assets/images/runtuhanbatu.png" 
                                     class="d-block w-100 carousel-img" alt="Runtuhan Batu">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                                    <h5 class="fw-semibold">Runtuhan Batu</h5>
                                    <p>Pergerakan tanah yang sangat lambat pada lereng landai</p>
                                </div>
                            </div>
                            <div class="carousel-item"> <!-- 6 ALIRAN BAHAN ROMBAKAN -->
                                <img src="assets/images/aliranbahanrombakan.png" 
                                     class="d-block w-100 carousel-img" alt="Aliran Bahan Rombakan">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                                    <h5 class="fw-semibold">Aliran Bahan Rombakan</h5>
                                    <p>Pergerakan tanah yang sangat lambat pada lereng landai</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#jenisCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#jenisCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </section>

                <!-- Penyebab -->
                <section id="penyebab" class="mb-5">
                    <h2 class="section-title">Penyebab Tanah Longsor</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-header bg-primary text-white fw-semibold">
                                    <i class="fas fa-mountain me-2"></i>Faktor Alam
                                </div>
                                <div class="card-body">
                                    <div class="cause-item">
                                        <strong>Kemiringan Lereng</strong>
                                        <p class="mb-0">Lereng yang terjal lebih rentan terhadap longsor</p>
                                    </div>
                                    <div class="cause-item">
                                        <strong>Curah Hujan Tinggi</strong>
                                        <p class="mb-0">Hujan lebat meningkatkan tekanan air pori tanah</p>
                                    </div>
                                    <div class="cause-item">
                                        <strong>Gempa Bumi</strong>
                                        <p class="mb-0">Getaran gempa mengganggu kestabilan lereng</p>
                                    </div>
                                    <div class="cause-item">
                                        <strong>Struktur Tanah Rapuh</strong>
                                        <p class="mb-0">Jenis tanah tertentu lebih mudah mengalami longsor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-header bg-warning text-dark fw-semibold">
                                    <i class="fas fa-users me-2"></i>Faktor Manusia
                                </div>
                                <div class="card-body">
                                    <div class="cause-item">
                                        <strong>Penggundulan Hutan</strong>
                                        <p class="mb-0">Hilangnya akar tanaman yang mengikat tanah</p>
                                    </div>
                                    <div class="cause-item">
                                        <strong>Pemotongan Tebing</strong>
                                        <p class="mb-0">Pembukaan lahan dengan memotong lereng alami</p>
                                    </div>
                                    <div class="cause-item">
                                        <strong>Budidaya di Lereng Terjal</strong>
                                        <p class="mb-0">Pertanian di lereng curam tanpa terasering</p>
                                    </div>
                                    <div class="cause-item">
                                        <strong>Pembebanan Berlebihan</strong>
                                        <p class="mb-0">Konstruksi bangunan berat di tepi lereng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Mitigasi -->
                <section id="mitigasi" class="mb-5">
                    <h2 class="section-title">Mitigasi Tanah Longsor</h2>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card mitigation-card">
                                <div class="card-body text-center">
                                    <div class="bg-primary rounded-circle p-3 d-inline-flex mb-3">
                                        <i class="fas fa-tree text-white fs-4"></i>
                                    </div>
                                    <h5 class="card-title fw-semibold">Penghijauan</h5>
                                    <p class="card-text">Penanaman vegetasi penutup tanah untuk meningkatkan stabilitas lereng</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mitigation-card">
                                <div class="card-body text-center">
                                    <div class="bg-success rounded-circle p-3 d-inline-flex mb-3">
                                        <i class="fas fa-tools text-white fs-4"></i>
                                    </div>
                                    <h5 class="card-title fw-semibold">Rekayasa Teknis</h5>
                                    <p class="card-text">Pembangunan bronjong, dinding penahan, dan saluran drainase</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mitigation-card">
                                <div class="card-body text-center">
                                    <div class="bg-info rounded-circle p-3 d-inline-flex mb-3">
                                        <i class="fas fa-binoculars text-white fs-4"></i>
                                    </div>
                                    <h5 class="card-title fw-semibold">Pemantauan</h5>
                                    <p class="card-text">Pemasangan alat pemantau pergerakan tanah di daerah rawan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mitigation-card">
                                <div class="card-body text-center">
                                    <div class="bg-warning rounded-circle p-3 d-inline-flex mb-3">
                                        <i class="fas fa-book text-white fs-4"></i>
                                    </div>
                                    <h5 class="card-title fw-semibold">Edukasi Masyarakat</h5>
                                    <p class="card-text">Sosialisasi dan pelatihan tentang bahaya dan mitigasi tanah longsor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mitigation-card">
                                <div class="card-body text-center">
                                    <div class="bg-danger rounded-circle p-3 d-inline-flex mb-3">
                                        <i class="fas fa-map-marked-alt text-white fs-4"></i>
                                    </div>
                                    <h5 class="card-title fw-semibold">Pemetaan Rawan</h5>
                                    <p class="card-text">Identifikasi dan pemetaan daerah rawan longsor untuk perencanaan tata ruang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Penanggulangan Sebelum -->
                <section id="penanggulangan-sebelum" class="mb-5">
                    <h2 class="section-title">Penanggulangan Sebelum Terjadi Bencana</h2>
                    <div class="timeline">
                        <div class="timeline-item">
                            <h5 class="fw-semibold">Pemetaan Daerah Rawan</h5>
                            <p>Melakukan identifikasi dan pemetaan daerah yang berpotensi mengalami tanah longsor berdasarkan karakteristik geologi, topografi, dan penggunaan lahan.</p>
                        </div>
                        <div class="timeline-item">
                            <h5 class="fw-semibold">Pembangunan Infrastruktur Mitigasi</h5>
                            <p>Membangun struktur penahan seperti bronjong, dinding beton, dan terasering untuk memperkuat lereng rawan longsor.</p>
                        </div>
                        <div class="timeline-item">
                            <h5 class="fw-semibold">Sistem Peringatan Dini</h5>
                            <p>Memasang alat deteksi dan sistem peringatan dini untuk memantau pergerakan tanah dan memberikan peringatan kepada masyarakat.</p>
                        </div>
                    </div>
                </section>

                <!-- Penanggulangan Saat -->
                <section id="penanggulangan-saat" class="mb-5">
                    <h2 class="section-title">Penanggulangan Saat Terjadi Bencana</h2>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold text-primary">Evakuasi Segera</h5>
                                    <p class="card-text">Melakukan evakuasi warga dari daerah yang berpotensi terdampak longsor ke lokasi yang lebih aman.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold text-primary">Pemberian Bantuan Darurat</h5>
                                    <p class="card-text">Menyediakan kebutuhan dasar seperti makanan, air bersih, obat-obatan, dan tempat tinggal sementara.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold text-primary">Pencarian dan Pertolongan</h5>
                                    <p class="card-text">Melakukan operasi pencarian dan pertolongan terhadap korban yang tertimbun material longsoran.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Penanggulangan Setelah -->
                <section id="penanggulangan-setelah" class="mb-5">
                    <h2 class="section-title">Penanggulangan Setelah Terjadi Bencana</h2>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="fas fa-home text-primary fs-1 mb-3"></i>
                                    <h5 class="card-title fw-semibold">Rehabilitasi Permukiman</h5>
                                    <p class="card-text">Membangun kembali rumah dan fasilitas umum yang rusak akibat tanah longsor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="fas fa-heart text-danger fs-1 mb-3"></i>
                                    <h5 class="card-title fw-semibold">Pemulihan Psikososial</h5>
                                    <p class="card-text">Memberikan dukungan mental dan psikologis kepada korban bencana.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="fas fa-chart-line text-success fs-1 mb-3"></i>
                                    <h5 class="card-title fw-semibold">Pemulihan Ekonomi</h5>
                                    <p class="card-text">Membantu masyarakat memulihkan mata pencaharian yang terdampak bencana.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Keuntungan -->
                <section id="keuntungan" class="mb-5">
                    <h2 class="section-title">Keuntungan Mitigasi Tanah Longsor</h2>
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <p class="card-text mb-4">Melakukan mitigasi tanah longsor memberikan berbagai manfaat jangka panjang bagi masyarakat dan lingkungan.</p>
                            
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold">Pengurangan Risiko Bencana</h6>
                                            <p class="small mb-0">Mengurangi potensi kerugian jiwa dan materi akibat tanah longsor</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold">Perlindungan Infrastruktur</h6>
                                            <p class="small mb-0">Melindungi jalan, jembatan, bangunan, dan fasilitas publik dari kerusakan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold">Kelestarian Lingkungan</h6>
                                            <p class="small mb-0">Menjaga keseimbangan ekosistem dan mencegah degradasi lahan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Kerugian -->
                <section id="kerugian" class="mb-5">
                    <h2 class="section-title">Kerugian Akibat Tanah Longsor</h2>
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <p class="card-text mb-4">Tanah longsor dapat menimbulkan berbagai kerugian baik secara langsung maupun tidak langsung.</p>
                            
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <i class="fas fa-times-circle text-danger me-3 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold">Korban Jiwa</h6>
                                            <p class="small mb-0">Menimbulkan korban jiwa dan cedera pada masyarakat yang terdampak</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <i class="fas fa-times-circle text-danger me-3 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold">Kerusakan Infrastruktur</h6>
                                            <p class="small mb-0">Merusak rumah, jalan, jembatan, dan fasilitas publik lainnya</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <i class="fas fa-times-circle text-danger me-3 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold">Gangguan Ekonomi</h6>
                                            <p class="small mb-0">Mengganggu aktivitas ekonomi dan mata pencaharian masyarakat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <i class="fas fa-times-circle text-danger me-3 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold">Dampak Lingkungan</h6>
                                            <p class="small mb-0">Menyebabkan kerusakan lingkungan dan ekosistem yang sulit dipulihkan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
    
    <script>
        // Smooth scroll for sidebar navigation
        document.querySelectorAll('.sidebar a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });

        // Update active state in sidebar
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.sidebar a');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (pageYOffset >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
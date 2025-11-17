<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - WELI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Palet Warna*/
        :root {
            --primary-color: #795548;
            --secondary-color: #D84315;
            --dark-color: #5D4037;
            --light-bg-color: #F5F5F5;
        }

        * {
            font-family: 'Poppins', sans-serif;
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
        /* ----------------------------------- */

        /* Judul Section (Menggunakan warna aksen) */
        .section-title {
            /* Warna aksen diubah dari #3498db ke Oranye (--secondary-color) */
            border-left: 5px solid var(--secondary-color); 
            padding-left: 15px;
            margin: 40px 0 20px 0;
            font-weight: 600;
            color: var(--dark-color);
        }
        
        /* Gambar Galeri */
        .gallery-img {
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .gallery-img:hover {
            transform: scale(1.05);
        }
        
        /* Card Galeri */
        .card {
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1); /* Shadow lebih menonjol */
            overflow: hidden;
            border-radius: 8px;
        }

        /* Card untuk Video agar terlihat seragam */
        .card.video-card .card-body {
            padding: 0;
        }

        /* Tautan Sumber di Card */
        .card-body a {
            color: var(--primary-color);
            font-weight: 500;
            text-decoration: none;
        }
        .card-body a:hover {
            color: var(--secondary-color);
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
                        <a class="nav-link active" aria-current="page" href="galeri.php">Galeri</a>
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
        <h1 class="section-title border-0 p-0 mt-4" style="border-left: 5px solid var(--secondary-color); padding-left: 15px;">Galeri Tanah Longsor</h1>
        <p class="lead mb-5">Kumpulan foto dan dokumentasi terkait tanah longsor di Indonesia</p>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://pusatkrisis.kemkes.go.id/__asset/__images/content/19tanah-longsor-mematikan-indonesia.jpg" 
                        class="card-img-top gallery-img" alt="Tanah Longsor 1">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold" style="color: var(--dark-color);">Longsor di Daerah Pegunungan</h5>
                        <p class="card-text">Dokumentasi tanah longsor yang terjadi di daerah pegunungan dengan kemiringan lereng curam.</p>
                        <div class="text-muted small">Sumber: <a href="https://pusatkrisis.kemkes.go.id/bencana-tanah-longsor-paling-mematikan-di-indonesia" rel="noopener noreferrer" target="_blank">pusatkrisis.kemkes.go.id</a> </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://asset.kompas.com/crops/mW65PetH73lvSB3oKBqWzbRz0kM=/0x72:1280x925/1200x800/data/photo/2019/03/13/672330627.jpg" 
                        class="card-img-top gallery-img" alt="Tanah Longsor 2">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold" style="color: var(--dark-color);">Dampak pada Permukiman</h5>
                        <p class="card-text">Akibat tanah longsor yang merusak permukiman warga di daerah rawan bencana.</p>
                        <div class="text-muted small">Sumber: <a href="https://www.kompas.com/skola/read/2021/09/29/183000869/dampak-tanah-longsor-bagi-lingkungan-dan-masyarakat" target="_blank" rel="noopener noreferrer">kompas.com</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://surabaya.basarnas.go.id/storage/uploads/posts/6831ad6d7ceb9.jpg" 
                        class="card-img-top gallery-img" alt="Tanah Longsor 3">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold" style="color: var(--dark-color);">Proses Evakuasi</h5>
                        <p class="card-text">Tim SAR melakukan evakuasi korban terdampak tanah longsor.</p>
                        <div class="text-muted small">Sumber: <a href="https://surabaya.basarnas.go.id/berita/tim-sar-gabungan-berhasil-menemukan-seluruh-korban-tanah-longsor-di-trenggalek" target="_blank" rel="noopener noreferrer">surabaya.basarnas.go.id</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://img.antaranews.com/cache/1200x800/2020/11/15/IMG-20201115-WA0003.jpg.webp" 
                        class="card-img-top gallery-img" alt="Tanah Longsor 4">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold" style="color: var(--dark-color);">Rekayasa Teknis</h5>
                        <p class="card-text">Pemasangan bronjong untuk stabilisasi lereng rawan longsor.</p>
                        <div class="text-muted small">Sumber: <a href="https://www.antaranews.com/berita/1840668/mengenal-teknik-pengaman-lereng-untuk-wilayah-rawan-longsor" target="_blank" rel="noopener noreferrer">antaranews.com</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://asset.kompas.com/crops/HnbPgxCJrH0urME2kPMa648JnQ4=/3x291:1054x992/1200x800/data/photo/2022/08/03/62ea5abda1087.jpg" 
                        class="card-img-top gallery-img" alt="Tanah Longsor 5">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold" style="color: var(--dark-color);">Vegetasi Penahan</h5>
                        <p class="card-text">Penanaman vegetasi untuk mengurangi risiko tanah longsor.</p>
                        <div class="text-muted small">Sumber: <a href="https://www.kompas.com/properti/read/2022/08/04/060000121/ternyata-tanaman-ini-bisa-cegah-longsor" target="_blank" rel="noopener noreferrer">kompas.com</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://testindo.co.id/wp-content/uploads/2023/10/Banner-Thumbnail-Testindo-79-1536x1024.jpg" 
                        class="card-img-top gallery-img" alt="Tanah Longsor 6">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold" style="color: var(--dark-color);">Pemantauan Lereng</h5>
                        <p class="card-text">Alat pemantauan pergerakan tanah di daerah rawan longsor.</p>
                        <div class="text-muted small">Sumber: <a href="https://testindo.co.id/sistem-monitoring-lereng-tambang/" target="_blank" rel="noopener noreferrer">testindo.co.id</a></div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="section-title mt-5">Video Edukasi</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <div class="card video-card">
                    <div class="card-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/zoR6cQN6GhE" title="Video Edukasi Tanah Longsor" allowfullscreen></iframe>
                        </div>
                        <div class="p-3">
                            <h5 class="fw-semibold" style="color: var(--dark-color);">Video Mitigasi Tanah Longsor</h5>
                            <p class="mb-0">Video edukasi tentang cara mitigasi bencana tanah longsor</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card video-card">
                    <div class="card-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/q9gR4gPqwRg" title="Video Penanggulangan Tanah Longsor" allowfullscreen></iframe>
                        </div>
                        <div class="p-3">
                            <h5 class="fw-semibold" style="color: var(--dark-color);">Penanggulangan Bencana</h5>
                            <p class="mb-0">Tata cara penanggulangan saat terjadi tanah longsor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
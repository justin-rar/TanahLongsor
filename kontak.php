<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - WELI</title>
    
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
        .contact-card {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-5px);
        }
        .submit-btn {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            border: none;
            font-weight: 500;
            padding: 12px 30px;
        }
        .submit-btn:hover {
            background: linear-gradient(135deg, #2980b9, #34495e);
        }
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
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
                        <a class="nav-link" href="sumber-daya.php">Sumber Daya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1 class="section-title border-0 p-0 mt-4">Kontak & Laporan</h1>
        <p class="lead mb-5">Hubungi kami untuk informasi lebih lanjut atau laporkan kejadian tanah longsor</p>

        <div class="row g-5">
            <!-- Instansi Terkait -->
            <div class="col-md-6">
                <h3 class="fw-semibold mb-4">Instansi Terkait</h3>
                
                <div class="row g-4">
                    <!-- BNPB -->
                    <div class="col-12">
                        <div class="card contact-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary rounded-circle p-3 me-3">
                                        <i class="fas fa-building text-white fs-5"></i>
                                    </div>
                                    <h5 class="card-title fw-semibold mb-0">BNPB</h5>
                                </div>
                                <p class="card-text"><strong>Badan Nasional Penanggulangan Bencana</strong></p>
                                <p class="card-text mb-1"><i class="fas fa-phone me-2 text-primary"></i> (021) 29827778</p>
                                <p class="card-text mb-1"><i class="fas fa-envelope me-2 text-primary"></i> info@bnpb.go.id</p>
                                <p class="card-text mb-0"><i class="fas fa-globe me-2 text-primary"></i> www.bnpb.go.id</p>
                            </div>
                        </div>
                    </div>

                    <!-- BMKG -->
                    <div class="col-12">
                        <div class="card contact-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success rounded-circle p-3 me-3">
                                        <i class="fas fa-cloud-sun text-white fs-5"></i>
                                    </div>
                                    <h5 class="card-title fw-semibold mb-0">BMKG</h5>
                                </div>
                                <p class="card-text"><strong>Badan Meteorologi, Klimatologi, dan Geofisika</strong></p>
                                <p class="card-text mb-1"><i class="fas fa-phone me-2 text-primary"></i> (021) 6546318</p>
                                <p class="card-text mb-1"><i class="fas fa-envelope me-2 text-primary"></i> info@bmkg.go.id</p>
                                <p class="card-text mb-0"><i class="fas fa-globe me-2 text-primary"></i> www.bmkg.go.id</p>
                            </div>
                        </div>
                    </div>

                    <!-- PVMBG -->
                    <div class="col-12">
                        <div class="card contact-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-warning rounded-circle p-3 me-3">
                                        <i class="fas fa-mountain text-white fs-5"></i>
                                    </div>
                                    <h5 class="card-title fw-semibold mb-0">PVMBG</h5>
                                </div>
                                <p class="card-text"><strong>Pusat Vulkanologi dan Mitigasi Bencana Geologi</strong></p>
                                <p class="card-text mb-1"><i class="fas fa-phone me-2 text-primary"></i> (022) 7272606</p>
                                <p class="card-text mb-1"><i class="fas fa-envelope me-2 text-primary"></i> pvmbg@esdm.go.id</p>
                                <p class="card-text mb-0"><i class="fas fa-globe me-2 text-primary"></i> pvmbg.esdm.go.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Laporan -->
            <div class="col-md-6">
                <h3 class="fw-semibold mb-4">Laporkan Kejadian</h3>
                
                <div class="card contact-card">
                    <div class="card-body">
                        <form id="reportForm">
                            <div class="mb-3">
                                <label for="nama" class="form-label fw-medium">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label fw-medium">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="telepon" class="form-label fw-medium">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="telepon" placeholder="Masukkan nomor telepon">
                            </div>
                            
                            <div class="mb-3">
                                <label for="lokasi" class="form-label fw-medium">Lokasi Kejadian</label>
                                <input type="text" class="form-control" id="lokasi" placeholder="Desa/Kecamatan/Kabupaten" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="tanggal" class="form-label fw-medium">Tanggal Kejadian</label>
                                <input type="date" class="form-control" id="tanggal" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-medium">Deskripsi Kejadian</label>
                                <textarea class="form-control" id="deskripsi" rows="4" placeholder="Jelaskan detail kejadian tanah longsor yang terjadi" required></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="dampak" class="form-label fw-medium">Dampak yang Terjadi</label>
                                <select class="form-select" id="dampak" required>
                                    <option value="" selected disabled>Pilih dampak yang terjadi</option>
                                    <option value="korban-jiwa">Korban Jiwa</option>
                                    <option value="kerusakan-rumah">Kerusakan Rumah</option>
                                    <option value="kerusakan-infrastruktur">Kerusakan Infrastruktur</option>
                                    <option value="mengungsi">Warga Mengungsi</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="foto" class="form-label fw-medium">Upload Foto (opsional)</label>
                                <input type="file" class="form-control" id="foto" accept="image/*">
                                <div class="form-text">Format: JPG, PNG (maks. 5MB)</div>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn submit-btn text-white">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Laporan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Emergency Contacts -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="alert alert-danger">
                    <h4 class="alert-heading fw-semibold"><i class="fas fa-exclamation-triangle me-2"></i>Kontak Darurat</h4>
                    <p class="mb-2">Dalam keadaan darurat, segera hubungi:</p>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mb-1"><strong>Call Center BNPB:</strong> 117</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1"><strong>Basarnas:</strong> 115</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1"><strong>Polisi:</strong> 110</p>
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

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <!-- Bootstrap & JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Form submission handling
        document.getElementById('reportForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple validation
            const nama = document.getElementById('nama').value;
            const email = document.getElementById('email').value;
            const lokasi = document.getElementById('lokasi').value;
            
            if(nama && email && lokasi) {
                alert('Laporan Anda telah berhasil dikirim! Tim kami akan segera menindaklanjuti.');
                this.reset();
            }
        });
    </script>
</body>
</html>
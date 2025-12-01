<?php
include 'koneksi.php'; // memanggil koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $lokasi_kejadian = $_POST['lokasi_kejadian'];
    $tanggal_kejadian = $_POST['tanggal_kejadian'];
    $deskripsi_kejadian = $_POST['deskripsi_kejadian'];

    $stmt = $conn->prepare("INSERT INTO laporan_longsor (nama, email, nomor_telepon, lokasi_kejadian, tanggal_kejadian, deskripsi_kejadian) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nama, $email, $nomor_telepon, $lokasi_kejadian, $tanggal_kejadian, $deskripsi_kejadian);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success text-center'>Laporan berhasil dikirim!</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Gagal mengirim laporan: " . $stmt->error . "</div>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - WELI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/kontak.css">
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
                        <a class="nav-link" href="sumber-daya.php">Sumber Daya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1 class="section-title border-0 p-0 mt-4">Kontak & Laporan</h1>
        <p class="lead mb-5 text-muted">Hubungi kami untuk informasi lebih lanjut atau laporkan kejadian tanah longsor</p>

        <div class="row g-5">
            <div class="col-md-6">
                <h3 class="fw-semibold mb-4">Instansi Terkait</h3>
                
                <div class="row g-4">
                    <div class="col-12">
                        <div class="card contact-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-circle">
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

                    <div class="col-12">
                        <div class="card contact-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-circle">
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

                    <div class="col-12">
                        <div class="card contact-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-circle">
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

            <form action="kontak.php" method="POST" class="col-md-6">
            <div class>
                <h3 class="fw-semibold mb-4">Laporkan Kejadian</h3>
                
                <div class="card contact-card">
                    <div class="card-body">
                            <div class="mb-3">
                                <label for="nama" class="form-label fw-medium">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" name="nama" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label fw-medium">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email" name="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="telepon" class="form-label fw-medium">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="telepon" placeholder="Masukkan nomor telepon" name="nomor_telepon">
                            </div>
                            
                            <div class="mb-3">
                                <label for="lokasi" class="form-label fw-medium">Lokasi Kejadian</label>
                                <input type="text" class="form-control" id="lokasi" placeholder="Desa/Kecamatan/Kabupaten" name="lokasi_kejadian" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="tanggal" class="form-label fw-medium">Tanggal Kejadian</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal_kejadian" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-medium">Deskripsi Kejadian</label>
                                <textarea class="form-control" id="deskripsi" rows="4" placeholder="Jelaskan detail kejadian tanah longsor yang terjadi" name="deskripsi_kejadian" required></textarea>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn submit-btn text-white">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Laporan
                                </button>
                            </div>
                    </div>
                </div>
            </div>
            </form>
        </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
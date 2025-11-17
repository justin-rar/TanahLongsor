<?php
session_start();
include 'koneksi.php';

if (empty($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Hapus data
if (isset($_POST['hapus_id'])) {
    $id = $_POST['hapus_id'];
    // Gunakan prepared statement untuk keamanan
    $stmt = $conn->prepare("DELETE FROM laporan_longsor WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: dashboard.php"); // Redirect untuk mencegah re-submit
    exit;
}

// Update data
if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $lokasi_kejadian = $_POST['lokasi_kejadian'];
    $tanggal_kejadian = $_POST['tanggal_kejadian'];
    $deskripsi_kejadian = $_POST['deskripsi_kejadian'];

    // Gunakan prepared statement untuk keamanan
    $stmt = $conn->prepare("UPDATE laporan_longsor SET 
        nama=?,
        email=?,
        nomor_telepon=?,
        lokasi_kejadian=?,
        tanggal_kejadian=?,
        deskripsi_kejadian=?
        WHERE id=?");
    $stmt->bind_param("ssssssi", $nama, $email, $nomor_telepon, $nomor_telepon, $lokasi_kejadian, $tanggal_kejadian, $deskripsi_kejadian, $id);
    $stmt->execute();
    $stmt->close();
    header("Location: dashboard.php"); // Redirect untuk mencegah re-submit
    exit;
}

// Hitung statistik
$total_laporan = $conn->query("SELECT COUNT(*) as total FROM laporan_longsor")->fetch_assoc()['total'];
$laporan_bulan_ini = $conn->query("SELECT COUNT(*) as total FROM laporan_longsor WHERE MONTH(tanggal_lapor) = MONTH(CURRENT_DATE()) AND YEAR(tanggal_lapor) = YEAR(CURRENT_DATE())")->fetch_assoc()['total'];
$laporan_hari_ini = $conn->query("SELECT COUNT(*) as total FROM laporan_longsor WHERE DATE(tanggal_lapor) = CURRENT_DATE()")->fetch_assoc()['total'];

$result = $conn->query("SELECT * FROM laporan_longsor ORDER BY tanggal_lapor DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Admin - WELI</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>

/* Palet Warna */
:root {
    --primary-color: #795548;
    --secondary-color: #D84315;
    --secondary-hover-color: #F4511E;
    --dark-color: #5D4037;
    --light-bg-color: #F5F5F5;
    --success-color: #2ecc71; 
    --warning-color: #f1c40f; 
    --danger-color: #dc3545;
}

* {
    font-family: 'Poppins', sans-serif;
}
body {
    background-color: var(--light-bg-color);
}
.navbar {
    background: var(--primary-color); 
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    padding: 15px;
}
.navbar-brand, .navbar-text {
    color: white !important;
    font-weight: 600;
}
.main-content {
    padding: 30px 0;
}
.stats-card {
    border-radius: 10px;
    border: none;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    transition: transform 0.2s ease;
    margin-bottom: 20px;
}
.stats-card:hover {
    transform: translateY(-2px);
}
.table-container {
    background: white;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    margin-top: 20px;
}
.btn-action {
    margin: 2px;
    border-radius: 5px;
}
.badge {
    font-size: 0.75rem;
}
.table th {
    border-top: none;
    font-weight: 600;
    color: var(--dark-color); 
}
.card-title {
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 5px;
    color: var(--dark-color); 
}
.card-value {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 0;
}
.page-title {
    color: var(--dark-color); 
    font-weight: 700;
    margin-bottom: 25px;
}

.border-primary { border-color: var(--secondary-color) !important; } 
.text-primary { color: var(--secondary-color) !important; } 
.btn-outline-primary {
    color: var(--secondary-color);
    border-color: var(--secondary-color);
}
.btn-outline-primary:hover {
    background-color: var(--secondary-hover-color);
    border-color: var(--secondary-hover-color);
    color: white;
}
.btn-primary { 
    background-color: var(--secondary-color) !important;
    border-color: var(--secondary-color) !important;
}
.btn-primary:hover {
    background-color: var(--secondary-hover-color) !important;
    border-color: var(--secondary-hover-color) !important;
}
.bg-primary { background-color: var(--secondary-color) !important; } 

.stats-card.total .card-value,
.stats-card.total .border {
    color: var(--secondary-color) !important;
    border-color: var(--secondary-color) !important;
}

.stats-card.bulan-ini .card-value,
.stats-card.bulan-ini .border {
    color: var(--success-color) !important;
    border-color: var(--success-color) !important;
}

.stats-card.hari-ini .card-value,
.stats-card.hari-ini .border {
    color: var(--warning-color) !important;
    border-color: var(--warning-color) !important;
}

.btn-outline-light {
    color: white;
    border-color: white;
}
.btn-outline-light:hover {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}
.btn-light {
    background-color: white;
    color: var(--primary-color);
    border-color: var(--primary-color);
}
.btn-light:hover {
    background-color: var(--light-bg-color);
    color: var(--primary-color);
    border-color: var(--primary-color);
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="fas fa-mountain me-2"></i>
            WELI Admin
        </a>
        <div class="d-flex align-items-center">
            <span class="navbar-text me-3">Halo, <?= htmlspecialchars($_SESSION['username']) ?></span>
            <a href="index.php" class="btn btn-outline-light btn-sm me-2">
                <i class="fas fa-external-link-alt me-1"></i> Website
            </a>
            <a href="logout.php" class="btn btn-light btn-sm">
                <i class="fas fa-sign-out-alt me-1"></i> Logout
            </a>
        </div>
    </div>
</nav>

<div class="container main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Dashboard Laporan</h2>
        <div class="text-muted small">
            <i class="fas fa-calendar me-1"></i> <?= date('d M Y') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card stats-card total border-primary"> <div class="card-body text-center">
                    <div class="card-value text-primary"><?= $total_laporan ?></div> <div class="card-title">Total Laporan</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card stats-card bulan-ini border-success"> <div class="card-body text-center">
                    <div class="card-value text-success"><?= $laporan_bulan_ini ?></div> <div class="card-title">Bulan Ini</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card stats-card hari-ini border-warning"> <div class="card-body text-center">
                    <div class="card-value text-warning"><?= $laporan_hari_ini ?></div> <div class="card-title">Hari Ini</div>
                </div>
            </div>
        </div>
    </div>

    <div class="table-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-semibold mb-0" style="color: var(--dark-color);">Data Laporan Tanah Longsor</h5>
            <span class="badge bg-primary"><?= $total_laporan ?> laporan</span> </div>
        
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead style="background-color: var(--light-bg-color);">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama Pelapor</th>
                        <th>Lokasi</th>
                        <th>Tanggal Kejadian</th>
                        <th>Tanggal Lapor</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td>
                                <div class="fw-medium" style="color: var(--dark-color);"><?= htmlspecialchars($row['nama']) ?></div>
                                <small class="text-muted"><?= htmlspecialchars($row['email']) ?></small>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border" style="border-color: var(--primary-color) !important; color: var(--primary-color) !important; background-color: #f0f0f0 !important;"><?= htmlspecialchars($row['lokasi_kejadian']) ?></span>
                            </td>
                            <td><?= htmlspecialchars($row['tanggal_kejadian']) ?></td>
                            <td>
                                <small class="text-muted"><?= htmlspecialchars($row['tanggal_lapor']) ?></small>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-outline-primary btn-sm btn-action" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#detailModal<?= $row['id'] ?>">
                                    <i class="fas fa-eye"></i>
                                </button>

                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="hapus_id" value="<?= $row['id'] ?>">
                                    <button type="submit" class="btn btn-outline-danger btn-sm btn-action">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <div class="modal fade" id="detailModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white"> <h5 class="modal-title">
                                            <i class="fas fa-file-alt me-2"></i>Detail Laporan #<?= $row['id'] ?>
                                        </h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <input type="hidden" name="edit_id" value="<?= $row['id'] ?>">
                                            
                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <h6 class="fw-semibold text-primary mb-3">Informasi Pelapor</h6> </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($row['nama']) ?>" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($row['email']) ?>" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Nomor Telepon</label>
                                                    <input type="text" name="nomor_telepon" class="form-control" value="<?= htmlspecialchars($row['nomor_telepon']) ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="fw-semibold text-primary mb-3">Detail Kejadian</h6> </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Lokasi Kejadian</label>
                                                    <input type="text" name="lokasi_kejadian" class="form-control" value="<?= htmlspecialchars($row['lokasi_kejadian']) ?>" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Tanggal Kejadian</label>
                                                    <input type="date" name="tanggal_kejadian" class="form-control" value="<?= htmlspecialchars($row['tanggal_kejadian']) ?>" required>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label class="form-label">Deskripsi Kejadian</label>
                                                    <textarea name="deskripsi_kejadian" class="form-control" rows="4" required><?= htmlspecialchars($row['deskripsi_kejadian']) ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary"> <i class="fas fa-save me-1"></i>Simpan Perubahan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">
                                <i class="fas fa-inbox fa-2x mb-3 d-block"></i>
                                Belum ada laporan.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
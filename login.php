<?php
session_start();
include 'koneksi.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Ambil data admin berdasarkan username
    $stmt = $conn->prepare("SELECT password FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    // Cek username & password (tanpa hash)
    // PERINGATAN: Dalam produksi, password harus di-hash menggunakan password_verify()
    if ($result && $password === $result['password']) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Admin - WELI</title>
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

    --gradient-bg-start: #4A2C21;
    --gradient-bg-end: #8D6E63; 
    --gradient-body: linear-gradient(135deg, var(--gradient-bg-start) 0%, var(--gradient-bg-end) 100%);
    
    --gradient-btn-start: #D84315; 
    --gradient-btn-end: #F4511E; 
    --gradient-button: linear-gradient(135deg, var(--gradient-btn-start) 0%, var(--gradient-btn-end) 100%);
}

* {
    font-family: 'Poppins', sans-serif;
}
body {

    background: var(--gradient-body); 
    min-height: 100vh;
    display: flex;
    align-items: center;
}
.login-container {
    background: white;
    border-radius: 15px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.3); 
    overflow: hidden;
}
.login-left {
    background: var(--gradient-body); 
    color: white;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.login-right {
    padding: 40px;
}
.brand {
    text-align: center;
    margin-bottom: 30px;
}
.brand i {
    font-size: 3rem;
    margin-bottom: 15px;
    color: var(--secondary-color); 
}
.brand h1 {
    font-weight: 700;
    color: var(--dark-color);
    margin-bottom: 5px;
}
.brand p {
    color: #9E9E9E; 
}
.form-control {
    border-radius: 8px;
    padding: 12px 15px;
    border: 1px solid #e1e5e9;
    transition: all 0.3s ease;
    color: var(--dark-color);
}
.form-control:focus {
    border-color: var(--secondary-color);
    box-shadow: 0 0 0 0.2rem rgba(216, 67, 21, 0.25);
}

.input-group-text {
    background-color: var(--light-bg-color) !important;
    border-color: #e1e5e9 !important;
}

.btn-login {
    background: var(--gradient-button);
    border: none;
    border-radius: 8px;
    padding: 12px;
    font-weight: 500;
    transition: all 0.3s ease;
}
.btn-login:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(216, 67, 21, 0.4); 
    filter: brightness(1.1);
}
.feature-list {
    list-style: none;
    padding: 0;
    color: white; 
}
.feature-list li {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}
.feature-list i {
    background: rgba(255,255,255,0.2);
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
    color: white;
}

.login-left .fa-mountain {
    color: white !important;
}

.text-muted.small {
    color: #9E9E9E !important;
}
.text-muted.small .fa-info-circle {
    color: var(--primary-color) !important;
}

</style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="login-container">
                <div class="row g-0">
                    <div class="col-md-6 login-left">
                        <div class="text-center">
                            <i class="fas fa-mountain fa-4x mb-3"></i>
                            <h2 class="fw-bold">WELI Admin</h2>
                            <p class="mb-4">Website Edukasi Tanah Longsor Indonesia</p>
                        </div>
                        <ul class="feature-list">
                            <li>
                                <i class="fas fa-shield-alt"></i>
                                <span>Panel Admin Terproteksi</span>
                            </li>
                            <li>
                                <i class="fas fa-chart-bar"></i>
                                <span>Analisis Data Laporan</span>
                            </li>
                            <li>
                                <i class="fas fa-cogs"></i>
                                <span>Manajemen Konten Lengkap</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 login-right">
                        <div class="brand">
                            <i class="fas fa-user-lock"></i>
                            <h1>Login Admin</h1>
                            <p>Masukkan kredensial Anda</p>
                        </div>
                        
                        <?php if ($error): ?>
                            <div class="alert alert-danger text-center">
                                <i class="fas fa-exclamation-triangle me-2"></i><?= htmlspecialchars($error) ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-medium">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-user text-muted"></i>
                                    </span>
                                    <input type="text" name="username" class="form-control border-start-0" placeholder="Masukkan username" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-medium">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-lock text-muted"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control border-start-0" placeholder="Masukkan password" required>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-login text-white py-2">
                                    <i class="fas fa-sign-in-alt me-2"></i>Login
                                </button>
                            </div>
                        </form>
                        
                        <div class="text-center mt-4">
                            <p class="text-muted small">
                                <i class="fas fa-info-circle me-1"></i>
                                Hanya personel yang berwenang yang dapat mengakses panel admin
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
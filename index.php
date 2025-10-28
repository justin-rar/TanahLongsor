<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <title>Home - Sistem Pemantauan Tanah Longsor</title>
    <style>
        :root {
            --primary-color: #61481C;
            --secondary-color: #A47E3B;
            --accent-color: #FFD700;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
        }
        
        /* Navbar yang diperbaiki */
        .navbar {
            background: linear-gradient(135deg, #61481C 0%, #8B6B2E 100%) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 12px 0;
        }
        
        .navbar-brand {
            font-size: 1.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            padding: 8px 15px !important;
            margin: 0 5px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link.active {
            background-color: rgba(255,255,255,0.15);
            transform: translateY(-2px);
        }
        
        .dropdown-menu {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: none;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.1"><polygon points="1000,100 1000,0 0,100"/></svg>');
            background-size: cover;
        }
        
        /* Tombol yang diperbaiki */
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(97, 72, 28, 0.3);
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(97, 72, 28, 0.4);
            color: white;
        }
        
        .btn-outline-light {
            border: 2px solid white;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-outline-light:hover {
            background-color: white;
            color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255,255,255,0.2);
        }
        
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: var(--dark-color);
            font-weight: 500;
        }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border: none;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 2rem;
        }
        
        .alert-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #dc3545;
            color: white;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
        }
        
        .status-card {
            border-radius: 15px;
            padding: 25px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .status-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            transform: translate(30px, -30px);
        }
        
        .status-warning {
            background: linear-gradient(135deg, #dc3545, #e35d6a);
        }
        
        .status-safe {
            background: linear-gradient(135deg, #198754, #20c997);
        }
        
        .section-title {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 40px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }
        
        /* Peta interaktif */
        #interactive-map {
            height: 400px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            z-index: 1;
        }
        
        .map-container {
            position: relative;
            margin-top: 30px;
        }
        
        .map-overlay {
            position: absolute;
            top: 20px;
            right: 20px;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            z-index: 1000;
            max-width: 250px;
        }
        
        .map-legend {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }
        
        .legend-safe {
            background-color: #28a745;
        }
        
        .legend-warning {
            background-color: #ffc107;
        }
        
        .legend-danger {
            background-color: #dc3545;
        }
        
        .map-controls {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        
        footer {
            background: linear-gradient(135deg, #343a40 0%, #495057 100%) !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-mountain me-2"></i>Tanah Longsor
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Maps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laporan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tentang</a></li>
                            <li><a class="dropdown-item" href="#">Kontak</a></li>
                            <li><a class="dropdown-item" href="#">Bantuan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-4">Sistem Pemantauan Tanah Longsor</h1>
                    <p class="lead mb-4">Platform real-time untuk memantau, menganalisis, dan mencegah bencana tanah longsor dengan teknologi terkini.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <button class="btn btn-primary-custom" id="lihatPetaBtn">
                            <i class="fas fa-map me-2"></i>Lihat Peta
                        </button>
                        <button class="btn btn-outline-light" id="dataStatistikBtn">
                            <i class="fas fa-chart-bar me-2"></i>Data Statistik
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-preview mt-4 mt-lg-0">
                        <div class="text-center">
                            <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                            <p>Peta Interaktif Pemantauan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">15</div>
                        <div class="stat-label">Lokasi Terpantau</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">3</div>
                        <div class="stat-label">Status Siaga</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">12</div>
                        <div class="stat-label">Status Aman</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Pemantauan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Map Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold section-title">Peta Interaktif Pemantauan</h2>
                    <p class="text-muted">Pantau lokasi rawan tanah longsor secara real-time dengan peta interaktif</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="map-container">
                        <div id="interactive-map"></div>
                        <div class="map-overlay">
                            <h6 class="fw-bold mb-3">Legenda Status</h6>
                            <div class="map-legend">
                                <div class="legend-item">
                                    <div class="legend-color legend-safe"></div>
                                    <span>Aman</span>
                                </div>
                                <div class="legend-item">
                                    <div class="legend-color legend-warning"></div>
                                    <span>Waspada</span>
                                </div>
                                <div class="legend-item">
                                    <div class="legend-color legend-danger"></div>
                                    <span>Bahaya</span>
                                </div>
                            </div>
                        </div>
                        <div class="map-controls">
                            <button class="btn btn-sm btn-outline-primary me-2" id="zoomInBtn">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-primary" id="zoomOutBtn">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold section-title">Fitur Utama Sistem</h2>
                    <p class="text-muted">Teknologi canggih untuk keselamatan dan kewaspadaan masyarakat</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-satellite-dish"></i>
                        </div>
                        <h5 class="fw-bold">Monitoring Real-time</h5>
                        <p class="text-muted">Pemantauan 24/7 dengan sensor canggih untuk mendeteksi pergerakan tanah secara real-time</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h5 class="fw-bold">Peta Interaktif</h5>
                        <p class="text-muted">Visualisasi data dalam peta digital untuk analisis risiko yang komprehensif dan mudah dipahami</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h5 class="fw-bold">Sistem Peringatan</h5>
                        <p class="text-muted">Notifikasi otomatis ketika terdeteksi potensi bahaya tanah longsor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Status Alert Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="status-card status-warning">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-exclamation-triangle fa-2x me-3"></i>
                            <h4 class="mb-0">Status Siaga</h4>
                            <span class="alert-badge">3</span>
                        </div>
                        <p class="mb-0">3 lokasi dalam status siaga waspada. Perlu pemantauan intensif dan kewaspadaan tinggi.</p>
                        <small class="opacity-75">Terakhir update: 5 menit lalu</small>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="status-card status-safe">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle fa-2x me-3"></i>
                            <h4 class="mb-0">Status Aman</h4>
                        </div>
                        <p class="mb-0">12 lokasi dalam kondisi stabil dan aman dari potensi longsor. Tetap waspada terhadap perubahan cuaca.</p>
                        <small class="opacity-75">Terakhir update: 1 jam lalu</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-mountain me-2"></i>Sistem Pemantauan Tanah Longsor</h5>
                    <p class="mb-0 text-muted">Melindungi masyarakat dengan teknologi terdepan dan pemantauan berkelanjutan</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 text-muted">&copy; 2024 All rights reserved. | Sistem Early Warning</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        // Inisialisasi peta
        const map = L.map('interactive-map').setView([-6.2088, 106.8456], 10); // Koordinat Jakarta
        
        // Tambahkan tile layer (peta dasar)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        
        // Data contoh lokasi pemantauan tanah longsor
        const monitoringLocations = [
            {
                name: "Gunung Pancar",
                lat: -6.5689,
                lng: 106.9356,
                status: "danger",
                description: "Tingkat bahaya tinggi. Terdeteksi pergerakan tanah signifikan."
            },
            {
                name: "Cisarua",
                lat: -6.6804,
                lng: 106.9524,
                status: "warning",
                description: "Tingkat waspada. Perlu pemantauan intensif."
            },
            {
                name: "Bogor Selatan",
                lat: -6.5971,
                lng: 106.8060,
                status: "safe",
                description: "Kondisi stabil. Tetap waspada terhadap perubahan cuaca."
            },
            {
                name: "Ciawi",
                lat: -6.6638,
                lng: 106.8659,
                status: "warning",
                description: "Tingkat waspada. Terdeteksi retakan kecil."
            },
            {
                name: "Megamendung",
                lat: -6.6362,
                lng: 106.8919,
                status: "safe",
                description: "Kondisi stabil. Tidak ada indikasi pergerakan tanah."
            }
        ];
        
        // Tambahkan marker untuk setiap lokasi
        monitoringLocations.forEach(location => {
            let markerColor;
            let iconHtml;
            
            if (location.status === "danger") {
                markerColor = "#dc3545";
                iconHtml = '<i class="fas fa-exclamation-triangle"></i>';
            } else if (location.status === "warning") {
                markerColor = "#ffc107";
                iconHtml = '<i class="fas fa-exclamation-circle"></i>';
            } else {
                markerColor = "#28a745";
                iconHtml = '<i class="fas fa-check-circle"></i>';
            }
            
            // Buat custom icon
            const customIcon = L.divIcon({
                html: `<div style="background-color: ${markerColor}; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; border: 3px solid white; box-shadow: 0 2px 5px rgba(0,0,0,0.3);">${iconHtml}</div>`,
                className: 'custom-div-icon',
                iconSize: [30, 30],
                iconAnchor: [15, 15]
            });
            
            // Tambahkan marker ke peta
            const marker = L.marker([location.lat, location.lng], { icon: customIcon }).addTo(map);
            
            // Tambahkan popup informasi
            marker.bindPopup(`
                <div class="p-2">
                    <h5 class="fw-bold">${location.name}</h5>
                    <p class="mb-1">${location.description}</p>
                    <div class="d-flex align-items-center mt-2">
                        <span class="badge ${location.status === 'danger' ? 'bg-danger' : location.status === 'warning' ? 'bg-warning' : 'bg-success'}">${location.status === 'danger' ? 'Bahaya' : location.status === 'warning' ? 'Waspada' : 'Aman'}</span>
                        <small class="ms-2 text-muted">Update: 10 menit lalu</small>
                    </div>
                </div>
            `);
        });
        
        // Kontrol zoom
        document.getElementById('zoomInBtn').addEventListener('click', () => {
            map.zoomIn();
        });
        
        document.getElementById('zoomOutBtn').addEventListener('click', () => {
            map.zoomOut();
        });
        
        // Tombol aksi
        document.getElementById('lihatPetaBtn').addEventListener('click', () => {
            document.getElementById('interactive-map').scrollIntoView({ 
                behavior: 'smooth' 
            });
        });
        
        document.getElementById('dataStatistikBtn').addEventListener('click', () => {
            alert('Fitur Data Statistik akan ditampilkan di sini!');
        });
    </script>
</body>
</html>
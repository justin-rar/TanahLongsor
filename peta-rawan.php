<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Rawan Tanah Longsor - WELI</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        .navbar-brand {
            font-weight: 700;
            color: #2c3e50 !important;
        }
        .map-container {
            position: relative;
            height: 600px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        #map {
            height: 100%;
            width: 100%;
        }
        .layer-control {
            position: absolute;
            top: 10px;
            right: 10px;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            z-index: 1000;
            width: 200px;
        }
        .layer-item {
            margin-bottom: 8px;
        }
        .layer-item:last-child {
            margin-bottom: 0;
        }
        .form-check-input:checked {
            background-color: #3498db;
            border-color: #3498db;
        }
        .map-controls {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1000;
        }
        .map-controls .btn {
            margin-bottom: 5px;
            display: block;
            width: 100%;
        }
        .legend-control {
            position: absolute;
            bottom: 30px;
            right: 10px;
            z-index: 1000;
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="informasi.php">Informasi</a></li>
                    <li class="nav-item"><a class="nav-link active" href="peta-rawan.php">Peta Rawan</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="sumber-daya.php">Sumber Daya</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-4">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="fw-bold mb-3">Peta Rawan Tanah Longsor</h1>
                <p class="text-muted">Peta interaktif zona rawan tanah longsor di Indonesia</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="map-container">
                    <!-- Map -->
                    <div id="map"></div>
                    
                    <!-- Layer Control - Kanan Atas -->
                    <div class="layer-control">
                        <h6 class="fw-bold mb-3">Layer Peta</h6>
                        
                        <div class="layer-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check-indeks" checked>
                                <label class="form-check-label" for="check-indeks">
                                    Indeks Risiko
                                </label>
                            </div>
                        </div>
                        
                        <div class="layer-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check-bahaya">
                                <label class="form-check-label" for="check-bahaya">
                                    Bahaya Longsor
                                </label>
                            </div>
                        </div>
                        
                        <div class="layer-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check-kerentanan">
                                <label class="form-check-label" for="check-kerentanan">
                                    Kerentanan
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Map Controls - Kiri Atas -->
                    <div class="map-controls">
                        <button class="btn btn-light btn-sm shadow-sm" id="resetView">
                            Reset Peta
                        </button>
                    </div>

                    <!-- Legend - Kanan Bawah -->
                    <div class="legend-control">
                        <h6 class="fw-bold mb-2">Keterangan</h6>
                        <div class="d-flex align-items-center mb-1">
                            <div class="bg-danger rounded me-2" style="width: 15px; height: 15px;"></div>
                            <small>Tinggi</small>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <div class="bg-warning rounded me-2" style="width: 15px; height: 15px;"></div>
                            <small>Sedang</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="bg-success rounded me-2" style="width: 15px; height: 15px;"></div>
                            <small>Rendah</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Tambahan -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Cara Menggunakan</h6>
                        <ul class="small mb-0">
                            <li>Centang layer untuk menampilkan data</li>
                            <li>Klik pada peta untuk melihat koordinat</li>
                            <li>Gunakan tombol reset untuk kembali ke view awal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 WELI - Website Edukasi Tanah Longsor Indonesia</p>
        </div>
    </footer>

    <!-- Leaflet & Esri-Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://unpkg.com/esri-leaflet@3.0.19/dist/esri-leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Inisialisasi peta
        const map = L.map("map").setView([-2.5489, 118.0149], 5);

        // Basemap
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Layer dari BNPB
        const indeksRisiko = L.esri.imageMapLayer({
            url: "https://gis.bnpb.go.id/server/rest/services/inarisk/INDEKS_RISIKO_TANAH_LONGSOR/ImageServer",
            opacity: 0.7
        }).addTo(map);

        const bahayaLongsor = L.esri.dynamicMapLayer({
            url: "https://gis.bnpb.go.id/server/rest/services/inarisk/layer_bahaya_tanah_longsor_30/MapServer",
            opacity: 0.7,
            layers: [0],
            f: 'image'
        });

        const kerentananLongsor = L.esri.imageMapLayer({
            url: "https://gis.bnpb.go.id/server/rest/services/inarisk/layer_kerentanan_tanah_longsor/ImageServer",
            opacity: 0.7
        });

        // Kontrol layer
        document.getElementById('check-indeks').addEventListener('change', function() {
            if (this.checked) {
                indeksRisiko.addTo(map);
            } else {
                map.removeLayer(indeksRisiko);
            }
        });
        
        document.getElementById('check-bahaya').addEventListener('change', function() {
            if (this.checked) {
                bahayaLongsor.addTo(map);
            } else {
                map.removeLayer(bahayaLongsor);
            }
        });
        
        document.getElementById('check-kerentanan').addEventListener('change', function() {
            if (this.checked) {
                kerentananLongsor.addTo(map);
            } else {
                map.removeLayer(kerentananLongsor);
            }
        });

        // Kontrol skala
        L.control.scale({ imperial: false }).addTo(map);

        // Reset view
        document.getElementById('resetView').addEventListener('click', function() {
            map.setView([-2.5489, 118.0149], 5);
        });

        // Popup klik
        map.on('click', function(e) {
            L.popup()
                .setLatLng(e.latlng)
                .setContent(`
                    <div class="text-center">
                        <strong>Koordinat</strong><br>
                        ${e.latlng.lat.toFixed(4)}, ${e.latlng.lng.toFixed(4)}
                    </div>
                `)
                .openOn(map);
        });
    </script>
</body>
</html>
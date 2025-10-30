<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Tanah Longsor Indonesia</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <i class="fas fa-mountain"></i>
                <span>SITLI</span>
            </div>
            <ul class="nav-menu">
                <li><a href="#beranda" class="nav-link">Beranda</a></li>
                <li><a href="#informasi" class="nav-link">Informasi</a></li>
                <li><a href="#peta" class="nav-link">Peta Rawan</a></li>
                <li><a href="#pencegahan" class="nav-link">Pencegahan</a></li>
                <li><a href="#galeri" class="nav-link">Galeri</a></li>
                <li><a href="#sumber" class="nav-link">Sumber Daya</a></li>
                <li><a href="#kontak" class="nav-link">Kontak</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Beranda Section -->
    <section id="beranda" class="hero">
        <div class="hero-content">
            <h1>Sistem Informasi Tanah Longsor Indonesia</h1>
            <p>Mitigasi, Edukasi, dan Penanggulangan Bencana Geologi</p>
            <button class="cta-button">Pelajari Lebih Lanjut</button>
        </div>
        <div class="hero-stats">
            <div class="stat-card">
                <h3>918</h3>
                <p>Lokasi Rawan Longsor</p>
            </div>
            <div class="stat-card">
                <h3>Rp 800 M</h3>
                <p>Kerugian/Tahun</p>
            </div>
            <div class="stat-card">
                <h3>1 Juta+</h3>
                <p>Jiwa Terancam</p>
            </div>
        </div>
    </section>

    <!-- Informasi Dasar Section -->
    <section id="informasi" class="section">
        <div class="container">
            <h2>Informasi Dasar Tanah Longsor</h2>
            
            <div class="tabs">
                <button class="tab-button active" data-tab="pengenalan">Pengenalan</button>
                <button class="tab-button" data-tab="jenis">Jenis-Jenis</button>
                <button class="tab-button" data-tab="gejala">Gejala</button>
                <button class="tab-button" data-tab="penyebab">Penyebab</button>
            </div>

            <div class="tab-content">
                <div id="pengenalan" class="tab-pane active">
                    <h3>Pengenalan Tanah Longsor</h3>
                    <p>Indonesia terletak pada pertemuan tiga lempeng dunia yaitu lempeng Eurasia, lempeng Pasifik, dan lempeng Australia yang bergerak saling menumbuk. Akibatnya, Indonesia rawan terhadap bencana geologi termasuk tanah longsor.</p>
                    <p><strong>Definisi:</strong> Tanah longsor adalah perpindahan material pembentuk lereng berupa batuan, bahan rombakan, tanah, atau material campuran tersebut, bergerak ke bawah atau keluar lereng.</p>
                </div>

                <div id="jenis" class="tab-pane">
                    <h3>6 Jenis Tanah Longsor</h3>
                    <div class="grid-container">
                        <div class="info-card">
                            <h4>Longsoran Translasi</h4>
                            <p>Massa tanah dan batuan bergerak pada bidang gelincir berbentuk rata</p>
                        </div>
                        <div class="info-card">
                            <h4>Longsoran Rotasi</h4>
                            <p>Massa tanah dan batuan bergerak pada bidang gelincir berbentuk cekung</p>
                        </div>
                        <div class="info-card">
                            <h4>Pergerakan Blok</h4>
                            <p>Batuan bergerak pada bidang gelincir berbentuk rata</p>
                        </div>
                        <div class="info-card">
                            <h4>Runtuhan Batu</h4>
                            <p>Batuan bergerak ke bawah dengan cara jatuh bebas</p>
                        </div>
                        <div class="info-card">
                            <h4>Rayapan Tanah</h4>
                            <p>Pergerakan lambat, sulit dikenali</p>
                        </div>
                        <div class="info-card">
                            <h4>Aliran Bahan Rombakan</h4>
                            <p>Massa tanah bergerak didorong air, paling mematikan</p>
                        </div>
                    </div>
                </div>

                <div id="gejala" class="tab-pane">
                    <h3>Gejala Umum Tanah Longsor</h3>
                    <ul class="symptoms-list">
                        <li><i class="fas fa-crack"></i> Muncul retakan di lereng sejajar tebing</li>
                        <li><i class="fas fa-water"></i> Muncul mata air baru secara tiba-tiba</li>
                        <li><i class="fas fa-mountain"></i> Tebing rapuh dan kerikil berjatuhan</li>
                        <li><i class="fas fa-cloud-rain"></i> Biasanya terjadi setelah hujan</li>
                    </ul>
                </div>

                <div id="penyebab" class="tab-pane">
                    <h3>Faktor Penyebab Tanah Longsor</h3>
                    <div class="causes-grid">
                        <div class="cause-item">
                            <span class="cause-number">1</span>
                            <strong>Hujan</strong> - Intensitas curah hujan tinggi
                        </div>
                        <div class="cause-item">
                            <span class="cause-number">2</span>
                            <strong>Lereng Terjal</strong> - Sudut kemiringan > 18°
                        </div>
                        <div class="cause-item">
                            <span class="cause-number">3</span>
                            <strong>Jenis Tanah</strong> - Tanah lempung tebal > 2.5m
                        </div>
                        <!-- Tambahkan faktor lainnya -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Peta Rawan Section -->
<section id="peta" class="section bg-light">
    <div class="container">
        <h2>Peta Zona Rawan Longsor Indonesia</h2>
        
        <!-- Map Controls -->
        <div class="map-controls">
            <div class="control-group">
                <label>Layer Peta:</label>
                <select id="baseLayerSelect">
                    <option value="satellite">Satelit</option>
                    <option value="street">Jalan</option>
                    <option value="topographic">Topografi</option>
                </select>
            </div>
            <div class="control-group">
                <label>Layer Data:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" id="showVulnerability" checked> Zona Kerentanan</label>
                    <label><input type="checkbox" id="showHotspots"> Titik Rawan</label>
                    <label><input type="checkbox" id="showHistory"> Sejarah Kejadian</label>
                </div>
            </div>
            <div class="control-group">
                <button id="locateBtn" class="control-btn">
                    <i class="fas fa-location-arrow"></i> Lokasi Saya
                </button>
                <button id="fullscreenBtn" class="control-btn">
                    <i class="fas fa-expand"></i> Layar Penuh
                </button>
            </div>
        </div>

        <!-- Map Container -->
        <div class="map-container">
            <div id="map"></div>
            <div class="map-legend">
                <h4>Legenda</h4>
                <div class="legend-item">
                    <span class="legend-color high-risk"></span>
                    <span>Rawan Tinggi</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color medium-risk"></span>
                    <span>Rawan Sedang</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color low-risk"></span>
                    <span>Rawan Rendah</span>
                </div>
            </div>
        </div>

        <!-- Map Info Panel -->
        <div class="map-info-panel">
            <div id="mapInfo">
                <p>Klik pada peta untuk melihat informasi detail</p>
            </div>
        </div>
        
        <!-- Province Table (tetap seperti sebelumnya) -->
        <div class="province-table">
            <h3>Data Kerawanan per Provinsi</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Provinsi</th>
                            <th>Lokasi Rawan</th>
                            <th>Kejadian (2003-2005)</th>
                            <th>Korban Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jawa Barat</td>
                            <td>276 lokasi</td>
                            <td>77 kejadian</td>
                            <td>166 jiwa</td>
                        </tr>
                        <tr>
                            <td>Jawa Tengah</td>
                            <td>327 lokasi</td>
                            <td>15 kejadian</td>
                            <td>17 jiwa</td>
                        </tr>
                        <tr>
                            <td>Sumatera Barat</td>
                            <td>100 lokasi</td>
                            <td>5 kejadian</td>
                            <td>63 jiwa</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Pencegahan Section -->
    <section id="pencegahan" class="section">
        <div class="container">
            <h2>Pencegahan & Mitigasi</h2>
            
            <div class="prevention-grid">
                <div class="prevention-item">
                    <div class="prevention-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h4>Jangan Tebang Pohon</h4>
                    <p>Hindari penebangan pohon di lereng untuk menjaga kestabilan tanah</p>
                </div>
                
                <div class="prevention-item">
                    <div class="prevention-icon">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <h4>Terasering</h4>
                    <p>Buat terasering (sengkedan) pada lereng terjal</p>
                </div>
                
                <div class="prevention-item">
                    <div class="prevention-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h4>Hindari Bangun di Tebing</h4>
                    <p>Jangan membangun rumah di bawah tebing atau lereng terjal</p>
                </div>
                
                <div class="prevention-item">
                    <div class="prevention-icon">
                        <i class="fas fa-tint-slash"></i>
                    </div>
                    <h4>Tutup Retakan</h4>
                    <p>Segera tutup retakan tanah untuk mencegah air masuk</p>
                </div>
            </div>

            <div class="mitigation-steps">
                <h3>Tahapan Mitigasi Bencana</h3>
                <div class="steps">
                    <div class="step">
                        <span class="step-number">1</span>
                        <h4>Pemetaan</h4>
                        <p>Informasi visual tingkat kerawanan</p>
                    </div>
                    <div class="step">
                        <span class="step-number">2</span>
                        <h4>Penyelidikan</h4>
                        <p>Mempelajari penyebab dan dampak</p>
                    </div>
                    <div class="step">
                        <span class="step-number">3</span>
                        <h4>Pemantauan</h4>
                        <p>Early warning system</p>
                    </div>
                    <div class="step">
                        <span class="step-number">4</span>
                        <h4>Sosialisasi</h4>
                        <p>Edukasi masyarakat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Section -->
    <section id="galeri" class="section bg-light">
        <div class="container">
            <h2>Dokumentasi Kejadian</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <i class="fas fa-image"></i>
                    </div>
                    <p>Longsor di Pacet, Jawa Timur</p>
                </div>
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <i class="fas fa-image"></i>
                    </div>
                    <p>Bahorok, Sumatera Utara</p>
                </div>
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <i class="fas fa-image"></i>
                    </div>
                    <p>Kuningan, Jawa Barat</p>
                </div>
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <i class="fas fa-image"></i>
                    </div>
                    <p>Garut, Jawa Barat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sumber Daya Section -->
    <section id="sumber" class="section">
        <div class="container">
            <h2>Sumber Daya & Download</h2>
            <div class="resources-grid">
                <div class="resource-card">
                    <i class="fas fa-file-pdf"></i>
                    <h4>Booklet Informasi</h4>
                    <p>PDF lengkap tentang tanah longsor</p>
                    <button class="download-btn">Download</button>
                </div>
                <div class="resource-card">
                    <i class="fas fa-map"></i>
                    <h4>Peta Zona Rawan</h4>
                    <p>Peta kerentanan tanah longsor</p>
                    <button class="download-btn">Download</button>
                </div>
                <div class="resource-card">
                    <i class="fas fa-chart-bar"></i>
                    <h4>Data Statistik</h4>
                    <p>Data kejadian 2003-2005</p>
                    <button class="download-btn">Download</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="section bg-dark">
        <div class="container">
            <h2>Kontak & Laporan</h2>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Instansi Terkait</h3>
                    <div class="contact-item">
                        <i class="fas fa-building"></i>
                        <div>
                            <strong>PVMBG</strong>
                            <p>Pusat Vulkanologi dan Mitigasi Bencana Geologi</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>BPBD</strong>
                            <p>Badan Penanggulangan Bencana Daerah</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Laporkan Kejadian</h3>
                    <form id="reportForm">
                        <input type="text" placeholder="Nama" required>
                        <input type="email" placeholder="Email" required>
                        <input type="text" placeholder="Lokasi" required>
                        <textarea placeholder="Deskripsi kejadian..." required></textarea>
                        <button type="submit">Kirim Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>SITLI</h4>
                    <p>Sistem Informasi Tanah Longsor Indonesia</p>
                </div>
                <div class="footer-section">
                    <h4>Link Cepat</h4>
                    <ul>
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#peta">Peta Rawan</a></li>
                        <li><a href="#pencegahan">Pencegahan</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Kontak Darurat</h4>
                    <p>112 - Call Center BNPB</p>
                    <p>119 - Emergency</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 SISTEM INFORMASI TANAH LONGSOR INDONESIA</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
    <!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</body>
</html>
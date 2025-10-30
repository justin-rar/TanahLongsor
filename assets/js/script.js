// Navigation Toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
    });
});

// Tab Functionality
const tabButtons = document.querySelectorAll('.tab-button');
const tabPanes = document.querySelectorAll('.tab-pane');

tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons and panes
        tabButtons.forEach(btn => btn.classList.remove('active'));
        tabPanes.forEach(pane => pane.classList.remove('active'));
        
        // Add active class to clicked button
        button.classList.add('active');
        
        // Show corresponding tab pane
        const tabId = button.getAttribute('data-tab');
        document.getElementById(tabId).classList.add('active');
    });
});

// Smooth Scrolling for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Form Submission
const reportForm = document.getElementById('reportForm');
if (reportForm) {
    reportForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);
        
        // Simulate form submission
        alert('Laporan berhasil dikirim! Tim kami akan menindaklanjuti segera.');
        this.reset();
    });
}

// Download Button Functionality
document.querySelectorAll('.download-btn').forEach(button => {
    button.addEventListener('click', function() {
        const resourceType = this.closest('.resource-card').querySelector('h4').textContent;
        alert(`Memulai download: ${resourceType}`);
    });
});

// CTA Button
document.querySelector('.cta-button').addEventListener('click', () => {
    document.querySelector('#informasi').scrollIntoView({
        behavior: 'smooth'
    });
});

// Scroll Animation
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for animation
document.querySelectorAll('.info-card, .prevention-item, .step, .resource-card').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

// Statistics Counter Animation
function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);
    const timer = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.textContent = target.toLocaleString();
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(start).toLocaleString();
        }
    }, 16);
}

// Initialize counters when section is in view
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const stats = [
                { element: document.querySelector('.stat-card:nth-child(1) h3'), target: 918 },
                { element: document.querySelector('.stat-card:nth-child(2) h3'), target: 800 },
                { element: document.querySelector('.stat-card:nth-child(3) h3'), target: 1000000 }
            ];
            
            stats.forEach(stat => {
                if (stat.element) {
                    animateCounter(stat.element, stat.target);
                }
            });
            
            statsObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

// Observe hero section for counter animation
const heroSection = document.querySelector('.hero');
if (heroSection) {
    statsObserver.observe(heroSection);
}

// Map Configuration
let map;
let vulnerabilityLayer;
let hotspotsLayer;
let historyLayer;
let currentBaseLayer;

// Sample data for demonstration
const landslideData = {
    "highRisk": [
        { name: "Kabupaten Bogor", lat: -6.6, lng: 106.8, incidents: 45, deaths: 89, risk: "Tinggi" },
        { name: "Kabupaten Bandung", lat: -7.1, lng: 107.6, incidents: 38, deaths: 67, risk: "Tinggi" },
        { name: "Kabupaten Garut", lat: -7.2, lng: 107.9, incidents: 32, deaths: 54, risk: "Tinggi" },
        { name: "Kabupaten Cianjur", lat: -6.8, lng: 107.1, incidents: 28, deaths: 42, risk: "Tinggi" }
    ],
    "mediumRisk": [
        { name: "Kabupaten Sukabumi", lat: -7.0, lng: 106.9, incidents: 22, deaths: 28, risk: "Sedang" },
        { name: "Kabupaten Tasikmalaya", lat: -7.5, lng: 108.2, incidents: 18, deaths: 23, risk: "Sedang" },
        { name: "Kabupaten Purwakarta", lat: -6.6, lng: 107.4, incidents: 15, deaths: 19, risk: "Sedang" },
        { name: "Kabupaten Subang", lat: -6.5, lng: 107.7, incidents: 12, deaths: 15, risk: "Sedang" }
    ],
    "lowRisk": [
        { name: "Kabupaten Sumedang", lat: -6.9, lng: 107.9, incidents: 8, deaths: 5, risk: "Rendah" },
        { name: "Kabupaten Majalengka", lat: -6.8, lng: 108.3, incidents: 6, deaths: 3, risk: "Rendah" },
        { name: "Kabupaten Kuningan", lat: -6.9, lng: 108.5, incidents: 5, deaths: 2, risk: "Rendah" },
        { name: "Kabupaten Indramayu", lat: -6.4, lng: 108.3, incidents: 3, deaths: 1, risk: "Rendah" }
    ]
};

// Initialize Map
function initMap() {
    // Create map centered on Indonesia
    map = L.map('map').setView([-2.5489, 118.0149], 5);

    // Base layers
    const baseLayers = {
        satellite: L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: '© Google Satellite'
        }),
        street: L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }),
        topographic: L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenTopoMap'
        })
    };

    // Set default base layer
    currentBaseLayer = baseLayers.satellite;
    currentBaseLayer.addTo(map);

    // Create overlay layers
    createVulnerabilityLayer();
    createHotspotsLayer();
    createHistoryLayer();

    // Add layer control
    L.control.layers(baseLayers).addTo(map);

    // Setup event listeners
    setupMapControls();
    setupLayerToggles();

    // Add click event to map
    map.on('click', function(e) {
        updateMapInfo(`Koordinat: ${e.latlng.lat.toFixed(4)}, ${e.latlng.lng.toFixed(4)}`);
    });
}

// Create vulnerability zones layer
function createVulnerabilityLayer() {
    vulnerabilityLayer = L.layerGroup();
    
    // Add high risk areas
    landslideData.highRisk.forEach(area => {
        const circle = L.circle([area.lat, area.lng], {
            color: '#e74c3c',
            fillColor: '#e74c3c',
            fillOpacity: 0.3,
            radius: 20000
        }).bindPopup(createPopupContent(area));
        
        vulnerabilityLayer.addLayer(circle);
    });

    // Add medium risk areas
    landslideData.mediumRisk.forEach(area => {
        const circle = L.circle([area.lat, area.lng], {
            color: '#f39c12',
            fillColor: '#f39c12',
            fillOpacity: 0.3,
            radius: 15000
        }).bindPopup(createPopupContent(area));
        
        vulnerabilityLayer.addLayer(circle);
    });

    // Add low risk areas
    landslideData.lowRisk.forEach(area => {
        const circle = L.circle([area.lat, area.lng], {
            color: '#27ae60',
            fillColor: '#27ae60',
            fillOpacity: 0.3,
            radius: 10000
        }).bindPopup(createPopupContent(area));
        
        vulnerabilityLayer.addLayer(circle);
    });

    vulnerabilityLayer.addTo(map);
}

// Create hotspots markers layer
function createHotspotsLayer() {
    hotspotsLayer = L.layerGroup();
    
    const allAreas = [...landslideData.highRisk, ...landslideData.mediumRisk, ...landslideData.lowRisk];
    
    allAreas.forEach(area => {
        const riskIcon = L.divIcon({
            className: `risk-marker risk-${area.risk.toLowerCase()}`,
            html: `<div class="marker-pulse"></div>`,
            iconSize: [20, 20]
        });

        const marker = L.marker([area.lat, area.lng], { icon: riskIcon })
            .bindPopup(createPopupContent(area));
        
        hotspotsLayer.addLayer(marker);
    });
}

// Create historical incidents layer
function createHistoryLayer() {
    historyLayer = L.layerGroup();
    
    const historicalEvents = [
        { name: "Longsor Pacet", lat: -7.65, lng: 112.55, date: "2023-01-15", impact: "Wisata terganggu" },
        { name: "Longsor Bahorok", lat: 3.55, lng: 98.50, date: "2022-12-03", impact: "200 korban jiwa" },
        { name: "Longsor Garut", lat: -7.20, lng: 107.90, date: "2023-02-20", impact: "Rumah rusak" },
        { name: "Longsor Cianjur", lat: -6.82, lng: 107.14, date: "2023-03-10", impact: "Jalan terputus" }
    ];

    historicalEvents.forEach(event => {
        const icon = L.divIcon({
            className: 'history-marker',
            html: `<i class="fas fa-exclamation-triangle"></i>`,
            iconSize: [25, 25]
        });

        const marker = L.marker([event.lat, event.lng], { icon: icon })
            .bindPopup(`
                <div class="risk-popup">
                    <h3>${event.name}</h3>
                    <p><strong>Tanggal:</strong> ${event.date}</p>
                    <p><strong>Dampak:</strong> ${event.impact}</p>
                </div>
            `);
        
        historyLayer.addLayer(marker);
    });
}

// Create popup content
function createPopupContent(area) {
    const riskClass = `risk-${area.risk.toLowerCase()}`;
    return `
        <div class="risk-popup">
            <h3>${area.name}</h3>
            <span class="risk-level ${riskClass}">Rawan ${area.risk}</span>
            <div class="popup-stats">
                <p><strong>Kejadian:</strong> ${area.incidents} kali</p>
                <p><strong>Korban Jiwa:</strong> ${area.deaths} orang</p>
                <p><strong>Status:</strong> Daerah Rawan Longsor</p>
            </div>
            <button onclick="showAreaDetail('${area.name}')" class="detail-btn">
                Lihat Detail
            </button>
        </div>
    `;
}

// Setup map controls
function setupMapControls() {
    // Base layer selector
    document.getElementById('baseLayerSelect').addEventListener('change', function(e) {
        const layerType = e.target.value;
        const layers = {
            satellite: L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '© Google Satellite'
            }),
            street: L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }),
            topographic: L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenTopoMap'
            })
        };

        if (currentBaseLayer) {
            map.removeLayer(currentBaseLayer);
        }
        
        currentBaseLayer = layers[layerType];
        currentBaseLayer.addTo(map);
    });

    // Locate button
    document.getElementById('locateBtn').addEventListener('click', function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;
                
                map.setView([lat, lng], 13);
                
                L.marker([lat, lng])
                    .addTo(map)
                    .bindPopup('Lokasi Anda Saat Ini')
                    .openPopup();
                    
                updateMapInfo(`Lokasi Anda: ${lat.toFixed(4)}, ${lng.toFixed(4)}`);
            }, function(error) {
                alert('Tidak dapat mengakses lokasi Anda. Pastikan izin lokasi sudah diaktifkan.');
            });
        } else {
            alert('Geolocation tidak didukung oleh browser ini.');
        }
    });

    // Fullscreen button
    document.getElementById('fullscreenBtn').addEventListener('click', function() {
        const mapContainer = document.querySelector('.map-container');
        mapContainer.classList.toggle('fullscreen');
        
        const icon = this.querySelector('i');
        if (mapContainer.classList.contains('fullscreen')) {
            icon.className = 'fas fa-compress';
        } else {
            icon.className = 'fas fa-expand';
        }
        
        setTimeout(() => {
            map.invalidateSize();
        }, 300);
    });
}

// Setup layer toggles
function setupLayerToggles() {
    document.getElementById('showVulnerability').addEventListener('change', function(e) {
        if (e.target.checked) {
            map.addLayer(vulnerabilityLayer);
        } else {
            map.removeLayer(vulnerabilityLayer);
        }
    });

    document.getElementById('showHotspots').addEventListener('change', function(e) {
        if (e.target.checked) {
            map.addLayer(hotspotsLayer);
        } else {
            map.removeLayer(hotspotsLayer);
        }
    });

    document.getElementById('showHistory').addEventListener('change', function(e) {
        if (e.target.checked) {
            map.addLayer(historyLayer);
        } else {
            map.removeLayer(historyLayer);
        }
    });
}

// Update map info panel
function updateMapInfo(info) {
    document.getElementById('mapInfo').innerHTML = `<p>${info}</p>`;
}

// Show area detail (placeholder function)
function showAreaDetail(areaName) {
    alert(`Detail untuk ${areaName} akan ditampilkan di sini.\n\nFitur ini dapat diintegrasikan dengan database real-time.`);
}

// Add active class to nav links based on scroll position
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');
    
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (scrollY >= sectionTop - 100) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// Initialize the page
document.addEventListener('DOMContentLoaded', function() {
    console.log('Sistem Informasi Tanah Longsor Indonesia loaded');
    
    // Add loading animation
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
    
    setTimeout(() => {
        document.body.style.opacity = '1';
    }, 100);

    // Initialize map
    initMap();
});
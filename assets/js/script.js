// // Navigation Toggle
// const hamburger = document.querySelector('.hamburger');
// const navMenu = document.querySelector('.nav-menu');

// hamburger.addEventListener('click', () => {
//     hamburger.classList.toggle('active');
//     navMenu.classList.toggle('active');
// });

// // Close mobile menu when clicking on a link
// document.querySelectorAll('.nav-link').forEach(link => {
//     link.addEventListener('click', () => {
//         hamburger.classList.remove('active');
//         navMenu.classList.remove('active');
//     });
// });

// // Tab Functionality
// const tabButtons = document.querySelectorAll('.tab-button');
// const tabPanes = document.querySelectorAll('.tab-pane');

// tabButtons.forEach(button => {
//     button.addEventListener('click', () => {
//         // Remove active class from all buttons and panes
//         tabButtons.forEach(btn => btn.classList.remove('active'));
//         tabPanes.forEach(pane => pane.classList.remove('active'));
        
//         // Add active class to clicked button
//         button.classList.add('active');
        
//         // Show corresponding tab pane
//         const tabId = button.getAttribute('data-tab');
//         document.getElementById(tabId).classList.add('active');
//     });
// });

// // Smooth Scrolling for Navigation Links
// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();
//         const target = document.querySelector(this.getAttribute('href'));
//         if (target) {
//             target.scrollIntoView({
//                 behavior: 'smooth',
//                 block: 'start'
//             });
//         }
//     });
// });

// // Form Submission
// const reportForm = document.getElementById('reportForm');
// if (reportForm) {
//     reportForm.addEventListener('submit', function(e) {
//         e.preventDefault();
        
//         // Get form data
//         const formData = new FormData(this);
//         const data = Object.fromEntries(formData);
        
//         // Simulate form submission
//         alert('Laporan berhasil dikirim! Tim kami akan menindaklanjuti segera.');
//         this.reset();
//     });
// }

// // Download Button Functionality
// document.querySelectorAll('.download-btn').forEach(button => {
//     button.addEventListener('click', function() {
//         const resourceType = this.closest('.resource-card').querySelector('h4').textContent;
//         alert(`Memulai download: ${resourceType}`);
//     });
// });

// // CTA Button
// document.querySelector('.cta-button').addEventListener('click', () => {
//     document.querySelector('#informasi').scrollIntoView({
//         behavior: 'smooth'
//     });
// });

// // Scroll Animation
// const observerOptions = {
//     threshold: 0.1,
//     rootMargin: '0px 0px -50px 0px'
// };

// const observer = new IntersectionObserver((entries) => {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
//             entry.target.style.opacity = '1';
//             entry.target.style.transform = 'translateY(0)';
//         }
//     });
// }, observerOptions);

// // Observe elements for animation
// document.querySelectorAll('.info-card, .prevention-item, .step, .resource-card').forEach(el => {
//     el.style.opacity = '0';
//     el.style.transform = 'translateY(20px)';
//     el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
//     observer.observe(el);
// });

// // Statistics Counter Animation
// function animateCounter(element, target, duration = 2000) {
//     let start = 0;
//     const increment = target / (duration / 16);
//     const timer = setInterval(() => {
//         start += increment;
//         if (start >= target) {
//             element.textContent = target.toLocaleString();
//             clearInterval(timer);
//         } else {
//             element.textContent = Math.floor(start).toLocaleString();
//         }
//     }, 16);
// }

// // Initialize counters when section is in view
// const statsObserver = new IntersectionObserver((entries) => {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
//             const stats = [
//                 { element: document.querySelector('.stat-card:nth-child(1) h3'), target: 918 },
//                 { element: document.querySelector('.stat-card:nth-child(2) h3'), target: 800 },
//                 { element: document.querySelector('.stat-card:nth-child(3) h3'), target: 1000000 }
//             ];
            
//             stats.forEach(stat => {
//                 if (stat.element) {
//                     animateCounter(stat.element, stat.target);
//                 }
//             });
            
//             statsObserver.unobserve(entry.target);
//         }
//     });
// }, { threshold: 0.5 });

// // Observe hero section for counter animation
// const heroSection = document.querySelector('.hero');
// if (heroSection) {
//     statsObserver.observe(heroSection);
// }

// // Map Configuration - Updated with BNPB Layers
// let map;
// let currentBaseLayer;

// // Layer dari ArcGIS BNPB
// let indeksRisiko, bahayaLongsor, kerentananLongsor;

// // Initialize Map
// function initMap() {
//     // Create map centered on Indonesia
//     map = L.map('map').setView([-2.5489, 118.0149], 5);

//     // Base layers
//     const baseLayers = {
//         satellite: L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
//             maxZoom: 20,
//             subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
//             attribution: '© Google Satellite'
//         }),
//         street: L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//             attribution: '© OpenStreetMap contributors'
//         }),
//         topographic: L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
//             attribution: '© OpenTopoMap'
//         })
//     };

//     // Set default base layer
//     currentBaseLayer = baseLayers.satellite;
//     currentBaseLayer.addTo(map);

//     // Create BNPB layers
//     createBNPBLayers();

//     // Setup event listeners
//     setupMapControls();
//     setupLayerToggles();

//     // Add click event to map
//     map.on('click', function(e) {
//         updateMapInfo(`Koordinat: ${e.latlng.lat.toFixed(4)}, ${e.latlng.lng.toFixed(4)}`);
//     });

//     // Add scale control
//     L.control.scale({ imperial: false }).addTo(map);
// }

// // Create BNPB layers
// function createBNPBLayers() {
//     // Indeks Risiko Tanah Longsor
//     indeksRisiko = L.esri.imageMapLayer({
//         url: "https://gis.bnpb.go.id/server/rest/services/inarisk/INDEKS_RISIKO_TANAH_LONGSOR/ImageServer",
//         opacity: 0.7,
//         attribution: "BNPB - Indeks Risiko Tanah Longsor"
//     });

//     // Bahaya Tanah Longsor
//     bahayaLongsor = L.esri.dynamicMapLayer({
//         url: "https://gis.bnpb.go.id/server/rest/services/inarisk/layer_bahaya_tanah_longsor_30/MapServer",
//         opacity: 0.7,
//         attribution: "BNPB - Bahaya Tanah Longsor",
//         layers: [0],
//         f: 'image'
//     });

//     // Kerentanan Tanah Longsor
//     kerentananLongsor = L.esri.imageMapLayer({
//         url: "https://gis.bnpb.go.id/server/rest/services/inarisk/layer_kerentanan_tanah_longsor/ImageServer",
//         opacity: 0.7,
//         attribution: "BNPB - Kerentanan Tanah Longsor"
//     });

//     // Add default layer (indeks risiko)
//     indeksRisiko.addTo(map);
// }

// // Setup map controls
// function setupMapControls() {
//     // Locate button
//     document.getElementById('locateBtn').addEventListener('click', function() {
//         if (navigator.geolocation) {
//             navigator.geolocation.getCurrentPosition(function(position) {
//                 const lat = position.coords.latitude;
//                 const lng = position.coords.longitude;
                
//                 map.setView([lat, lng], 13);
                
//                 L.marker([lat, lng])
//                     .addTo(map)
//                     .bindPopup('Lokasi Anda Saat Ini')
//                     .openPopup();
                    
//                 updateMapInfo(`Lokasi Anda: ${lat.toFixed(4)}, ${lng.toFixed(4)}`);
//             }, function(error) {
//                 alert('Tidak dapat mengakses lokasi Anda. Pastikan izin lokasi sudah diaktifkan.');
//             });
//         } else {
//             alert('Geolocation tidak didukung oleh browser ini.');
//         }
//     });

//     // Fullscreen button
//     document.getElementById('fullscreenBtn').addEventListener('click', function() {
//         const mapContainer = document.querySelector('.map-container');
//         mapContainer.classList.toggle('fullscreen');
        
//         const icon = this.querySelector('i');
//         if (mapContainer.classList.contains('fullscreen')) {
//             icon.className = 'fas fa-compress';
//         } else {
//             icon.className = 'fas fa-expand';
//         }
        
//         setTimeout(() => {
//             map.invalidateSize();
//         }, 300);
//     });
// }

// // Setup layer toggles for BNPB layers
// function setupLayerToggles() {
//     document.getElementById('check-indeks').addEventListener('change', function(e) {
//         if (e.target.checked) {
//             map.addLayer(indeksRisiko);
//         } else {
//             map.removeLayer(indeksRisiko);
//         }
//     });

//     document.getElementById('check-bahaya').addEventListener('change', function(e) {
//         if (e.target.checked) {
//             map.addLayer(bahayaLongsor);
//         } else {
//             map.removeLayer(bahayaLongsor);
//         }
//     });

//     document.getElementById('check-kerentanan').addEventListener('change', function(e) {
//         if (e.target.checked) {
//             map.addLayer(kerentananLongsor);
//         } else {
//             map.removeLayer(kerentananLongsor);
//         }
//     });
// }

// // Update map info panel
// function updateMapInfo(info) {
//     document.getElementById('mapInfo').innerHTML = `<p>${info}</p>`;
// }

// // Add active class to nav links based on scroll position
// window.addEventListener('scroll', () => {
//     const sections = document.querySelectorAll('section');
//     const navLinks = document.querySelectorAll('.nav-link');
    
//     let current = '';
//     sections.forEach(section => {
//         const sectionTop = section.offsetTop;
//         const sectionHeight = section.clientHeight;
//         if (scrollY >= sectionTop - 100) {
//             current = section.getAttribute('id');
//         }
//     });

//     navLinks.forEach(link => {
//         link.classList.remove('active');
//         if (link.getAttribute('href') === `#${current}`) {
//             link.classList.add('active');
//         }
//     });
// });

// // Initialize the page
// document.addEventListener('DOMContentLoaded', function() {
//     console.log('Sistem Informasi Tanah Longsor Indonesia loaded');
    
//     // Add loading animation
//     document.body.style.opacity = '0';
//     document.body.style.transition = 'opacity 0.5s ease';
    
//     setTimeout(() => {
//         document.body.style.opacity = '1';
//     }, 100);

//     // Initialize map with BNPB layers
//     initMap();
// });
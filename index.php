<!DOCTYPE html>
<html lang="id">

<head>
    <title>Dedari Bali - Travel & Tour</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    :root {
        --primary-color: #0066cc;
        --secondary-color: #ff6b35;
        --gold-color: #d4af37;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar-brand {
        padding: 5px 0;
    }

    .navbar-brand img {
        height: 70px;
        width: auto;
        transition: transform 0.3s ease;
        filter: brightness(1.1);
    }

    .navbar-brand img:hover {
        transform: scale(1.05);
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
            url('https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=800&h=600&fit=crop');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
        padding: 150px 0;
        text-align: center;
    }

    .hero-section h1 {
        font-size: 3.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);
        animation: fadeInDown 1s ease-out;
    }

    .hero-section p {
        font-size: 1.3rem;
        margin-bottom: 30px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .package-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        position: relative;
    }

    .package-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .package-img {
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 4rem;
    }

    .package-img.bali {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
            url("image/puratanahlot.jpg");
        background-size: cover;
        background-position: center;
    }

    .package-img.bromo {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
            url("image/bali1.jpg");
        background-size: cover;
        background-position: center;
    }

    .price-tag {
        background: var(--secondary-color);
        color: white;
        padding: 10px 20px;
        border-radius: 50px;
        font-size: 1.5rem;
        font-weight: bold;
        display: inline-block;
        margin: 15px 0;
    }

    .btn-book {
        background: var(--gold-color);
        color: white;
        border: none;
        padding: 12px 40px;
        border-radius: 50px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-book:hover {
        background: #b8941f;
        transform: scale(1.05);
        color: white;
        box-shadow: 0 5px 15px rgba(212, 175, 55, 0.4);
    }

    .badge-popular {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--secondary-color);
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: bold;
        z-index: 10;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
    }

    .features-section {
        background: #f8f9fa;
        padding: 60px 0;
    }

    .feature-box {
        text-align: center;
        padding: 30px;
    }

    .feature-icon {
        font-size: 3rem;
        color: var(--gold-color);
        margin-bottom: 20px;
    }

    .footer {
        background: #1a1a1a;
        color: white;
        padding: 40px 0 20px;
    }

    .footer h5 {
        color: var(--gold-color);
        margin-bottom: 20px;
    }

    .footer a {
        color: #ccc;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer a:hover {
        color: var(--gold-color);
    }

    .social-icons {
        font-size: 1.5rem;
    }

    .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        margin: 0 5px;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        background: var(--gold-color);
        transform: translateY(-3px);
    }

    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .whatsapp-float:hover {
        background-color: #128C7E;
        transform: scale(1.1);
        color: white;
    }

    .testimoni-card {
        animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .alert-custom {
        position: fixed;
        top: 100px;
        right: 20px;
        z-index: 1000;
        min-width: 300px;
        animation: slideInRight 0.5s ease-out;
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .badge-new {
        background: #28a745;
        color: white;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 0.75rem;
        margin-left: 8px;
    }

    /* DESAIN 4: Modern Minimalist dengan Accent Border */
    .package-v4 {
        border-radius: 15px;
        overflow: hidden;
        background: white;
        border: 3px solid transparent;
        background-clip: padding-box;
        position: relative;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        transition: all 0.4s ease;
    }

    .package-v4::before {
        content: '';
        position: absolute;
        top: -3px;
        left: -3px;
        right: -3px;
        bottom: -3px;

        border-radius: 15px;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.4s;
    }

    .package-v4:hover::before {
        opacity: 1;
    }

    .package-v4:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
    }

    .package-v4 .img-container {
        height: 300px;
        overflow: hidden;
    }

    .package-v4 .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
        filter: grayscale(20%);
    }

    .package-v4:hover .img-container img {
        transform: scale(1.15);
        filter: grayscale(0%);
    }

    .package-v4 .content-area {
        padding: 30px;
    }

    .package-v4 .feature-list {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }

    .package-v4 .feature-list li {
        padding: 10px 0;
        border-bottom: 1px solid #eee;
        color: #555;
    }

    .package-v4 .feature-list li:last-child {
        border-bottom: none;
    }

    /* General Styles */
    .btn-custom {
        background: var(--gold-color);
        color: white;
        border: none;
        padding: 12px 35px;
        border-radius: 50px;
        font-weight: bold;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-custom:hover {
        background: #b8941f;
        transform: scale(1.05);
        color: white;
        box-shadow: 0 5px 20px rgba(212, 175, 55, 0.4);
    }

    .design-label {
        background: var(--primary-color);
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 20px;
        font-weight: bold;
    }

    /* Menghilangkan banner Google di bagian atas setelah translate */
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    body {
        top: 0px !important;
    }

    /* Merapikan tampilan dropdown di navbar */
    #google_translate_element {
        padding: 10px;
    }

    /* Sembunyikan teks "Powered by Google" jika ingin lebih minimalis */
    .goog-logo-link {
        display: none !important;
    }

    .goog-te-gadget {
        color: transparent !important;
    }




    /* Merapikan dropdown translate */
    #google_translate_element select {
        background-color: white;
        color: var(--primary-color);
        border: 1px solid var(--gold-color);
        border-radius: 5px;
        padding: 5px;
        font-size: 14px;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="image/logo.png" alt="Dedari Bali Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang-kami.html">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <div id="google_translate_element"></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section" id="home">
        <div class="container">
            <h1>Jelajahi Keindahan Pulau Dewata</h1>
            <p>Nikmati Liburan Impian Anda Bersama Dedari Bali</p>
            <a href="#paket" class="btn btn-book btn-lg">Lihat Paket Wisata</a>
        </div>
    </section>

    <a href="https://wa.me/6282236645486?text=Halo,%20saya%20tertarik%20dengan%20paket%20wisata%20Dedari%20Bali"
        class="whatsapp-float" target="_blank" title="Chat WhatsApp">
        💬
    </a>

    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">🏆</div>
                        <h4>Terpercaya</h4>
                        <p>Berpengalaman melayani wisatawan dari mancanegara</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">💰</div>
                        <h4>Harga Terjangkau</h4>
                        <p>Paket wisata dengan harga kompetitif dan fasilitas terbaik</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">🎯</div>
                        <h4>Pelayanan Prima</h4>
                        <p>Tour guide profesional dan customer service 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="paket">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Paket Wisata Pilihan</h2>
                <p class="lead text-muted">Pilih destinasi favorit Anda dan ciptakan kenangan indah di Pulau Dewata</p>
            </div>
            <!-- DESAIN 4 -->
            <div class="design-section">
                <div class="text-center">
                </div>
                <div class="row g-4 mt-3">
                    <div class="col-md-6">
                        <div class="package-v4">
                            <div class="img-container">
                                <img src="https://images.unsplash.com/photo-1559628376-f3fe5f782a2e?w=800" alt="Tour">
                            </div>
                            <div class="content-area">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="fw-bold mb-0">Tour Berhari-hari</h3>
                                    <span class="badge bg-danger">⭐ POPULER</span>
                                </div>
                                <p class="text-muted">Pilih dari 10 paket wisata terbaik kami</p>
                                <ul class="feature-list">
                                    <li>✅ Flexible Duration (2-5 hari)</li>
                                    <li>✅ Professional Guide</li>
                                    <li>✅ All-Inclusive Package</li>
                                </ul>
                                <a href="baru.html" class="btn-custom w-100 text-center mt-3">View Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-v4">
                            <div class="img-container">
                                <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=800" alt="GWK">
                            </div>
                            <div class="content-area">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="fw-bold mb-0">GWK Cultural Park</h3>
                                    <span class="badge" style="background: var(--gold-color);">🎭 BUDAYA</span>
                                </div>
                                <p class="text-muted">Kunjungi landmark ikonik Bali</p>
                                <ul class="feature-list">
                                    <li>✅ 121-meter Statue</li>
                                    <li>✅ Cultural Performances</li>
                                    <li>✅ Photo Opportunities</li>
                                </ul>
                                <a href="#" class="btn-custom w-100 text-center mt-3">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Apa Kata Mereka</h2>

            <div class="card border-0 shadow-sm mb-5">
                <div class="card-body p-4">
                    <h5 class="mb-4">✍️ Tulis Testimoni Anda</h5>
                    <form id="testimoniForm">
                        <div class="mb-3">
                            <label class="form-label">Testimoni</label>
                            <textarea class="form-control" id="testimoniText" rows="3"
                                placeholder="Ceritakan pengalaman Anda..." required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" id="testimoniNama" placeholder="Nama Anda"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Kota</label>
                                <input type="text" class="form-control" id="testimoniKota" placeholder="Kota asal"
                                    required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-book">Kirim Testimoni</button>
                    </form>
                </div>
            </div>

            <div class="row" id="testimoniList">
                <!-- Testimoni akan dimuat dari database -->
            </div>
        </div>
    </section>

    <footer class="footer" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Dedari Bali Transport</h5>
                    <p>Travel & tour terpercaya untuk liburan impian Anda di Pulau Dewata.</p>
                    <h5>Sosial Media</h5>
                    <div class="social-icons">
                        <a href="#" title="Facebook">📘</a>
                        <a href="#" title="Instagram">📷</a>
                        <a href="#" title="Twitter">🐦</a>
                        <a href="#" title="YouTube">▶️</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Kontak Kami</h5>
                    <p>📞 +62 822-3664-5486<br>
                        📧 dedaribali@gmail.com<br>
                        📍 Bali, Indonesia</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Lokasi Kami</h5>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126214.40121033286!2d115.08808!3d-8.4095178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                            width="100%" height="200" style="border:0; border-radius: 10px;" allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
            <hr style="border-color: #444;">
            <div class="text-center pt-3">
                <p>&copy; 2025 Dedari Bali Transport. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
    // Fungsi untuk menampilkan notifikasi
    function showNotification(message, type = 'success') {
        const alert = document.createElement('div');
        alert.className = `alert alert-${type} alert-custom alert-dismissible fade show`;
        alert.innerHTML = `
    ${message}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  `;
        document.body.appendChild(alert);

        setTimeout(() => alert.remove(), 5000);
    }

    // Fungsi untuk memuat testimoni dari database
    function loadTestimoni(showNewBadge = false) {
        const testimoniList = document.getElementById('testimoniList');
        testimoniList.innerHTML = '<div class="col-12 text-center"><p>Memuat testimoni...</p></div>';

        fetch('api_testimoni.php?action=get')
            .then(response => {
                if (!response.ok) {
                    throw new Error('HTTP error! status: ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                console.log('Response dari API:', data);
                testimoniList.innerHTML = '';

                if (data.success) {
                    if (data.data && data.data.length > 0) {
                        data.data.forEach((testimoni, index) => {
                            // Badge "BARU" hanya muncul di testimoni pertama dan hanya setelah submit
                            const isNew = (index === 0 && showNewBadge);
                            addTestimoniToDOM(testimoni.testimoni, testimoni.nama, testimoni.kota, isNew);
                        });
                    } else {
                        testimoniList.innerHTML =
                            '<div class="col-12 text-center text-muted"><p>Belum ada testimoni. Jadilah yang pertama! ✍️</p></div>';
                    }
                } else {
                    testimoniList.innerHTML =
                        `<div class="col-12 text-center text-danger"><p>⚠️ ${data.message || 'Gagal memuat testimoni'}</p></div>`;
                    console.error('Error dari API:', data);
                }
            })
            .catch(error => {
                console.error('Error loading testimoni:', error);
                testimoniList.innerHTML =
                    '<div class="col-12 text-center text-danger"><p>⚠️ Gagal memuat testimoni. Cek console untuk detail.</p></div>';
                showNotification('❌ Gagal memuat testimoni: ' + error.message, 'danger');
            });
    }

    // Fungsi untuk menambahkan testimoni ke DOM
    function addTestimoniToDOM(text, nama, kota, isNew = false) {
        const newTestimoni = document.createElement('div');
        newTestimoni.className = 'col-md-4 testimoni-card';
        newTestimoni.innerHTML = `
    <div class="card border-0 shadow-sm mb-4">
      <div class="card-body">
        <p class="mb-3">"${text}"</p>
        <p class="mb-0 fw-bold">- ${nama}${isNew ? '<span class="badge-new">BARU</span>' : ''}</p>
        <small class="text-muted">${kota}</small>
      </div>
    </div>
  `;
        document.getElementById('testimoniList').appendChild(newTestimoni);
    }

    // Event listener untuk form submit
    document.getElementById('testimoniForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Panggil loadTestimoni saat halaman selesai dimuat
        document.addEventListener('DOMContentLoaded', function() {
            loadTestimoni(); // Muat testimoni saat halaman pertama kali dibuka
        });

        const testimoni = document.getElementById('testimoniText').value.trim();
        const nama = document.getElementById('testimoniNama').value.trim();
        const kota = document.getElementById('testimoniKota').value.trim();

        // Validasi di frontend
        if (!testimoni || !nama || !kota) {
            showNotification('⚠️ Mohon isi semua field!', 'warning');
            return;
        }

        if (testimoni.length < 10) {
            showNotification('⚠️ Testimoni minimal 10 karakter!', 'warning');
            return;
        }

        if (testimoni.length > 1000) {
            showNotification('⚠️ Testimoni maksimal 1000 karakter!', 'warning');
            return;
        }

        // Kirim data ke server
        const formData = new FormData();
        formData.append('action', 'add');
        formData.append('testimoni', testimoni);
        formData.append('nama', nama);
        formData.append('kota', kota);

        fetch('api_testimoni.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('HTTP error! status: ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                console.log('Response submit:', data);

                if (data.success) {
                    showNotification('✅ ' + (data.message || 'Testimoni berhasil disimpan!'), 'success');
                    this.reset();
                    loadTestimoni(true); // Reload dengan badge "BARU" untuk testimoni terbaru

                    // Hapus badge "BARU" setelah 10 detik
                    setTimeout(() => {
                        const badges = document.querySelectorAll('.badge-new');
                        badges.forEach(badge => {
                            badge.style.transition = 'opacity 0.5s';
                            badge.style.opacity = '0';
                            setTimeout(() => badge.remove(), 500);
                        });
                    }, 10000);
                } else {
                    showNotification('❌ ' + (data.message || 'Gagal menyimpan testimoni'), 'danger');
                    console.error('Error dari API:', data);
                }
            })
            .catch(error => {
                console.error('Error submit:', error);
                showNotification('❌ Terjadi kesalahan: ' + error.message, 'danger');
            });
    });
    </script>

</body>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'id', // Bahasa asli website Anda (id = Indonesia)
        includedLanguages: 'en,zh-CN,ar,ja', // Daftar bahasa tujuan (opsional)
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>


</html>
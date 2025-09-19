<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Sekolah - Portal Informasi Terbaru</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Glide JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css">
    <!--  -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
    <!-- Favicon -->
    <link rel="icon" href="https://res.cloudinary.com/dunynusuh/image/upload/v1755771459/Logo-Ar-Rahman_fm4mgg.png">
    <style>
      .page-title-card {
      border-radius: 12px;
      background: linear-gradient(135deg, #ffffff, #f8fdf9);
      border-bottom: 4px solid #046c28; /* aksen hijau bawah */
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
      margin: 20px auto;
      padding: 12px 15px;
      text-align: center;
      max-width: 95%;
      transition: all 0.3s ease;
    }
    .page-title-card:hover {
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
      transform: translateY(-2px);
    }
    .page-title-card h1 {
      font-size: 1.6rem;
      font-weight: bold;
      color: #046c28;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
    }
    .page-title-card h2 {
      font-size: 1.05rem;
      color: #046c28;
      margin: 2px 0 6px 0;
    }
    .divider {
      width: 70px;
      height: 3px;
      background: #046c28;
      margin: 6px auto;
      border-radius: 5px;
    }
    .comment-link {
      font-size: 0.85rem;
      color: #046c28;
      text-decoration: none;
      font-weight: 500;
    }
    .comment-link:hover {
      text-decoration: underline;
    }
    .comment-link i {
      margin-right: 5px;
    }
    </style>
</head>
<body>
@include('partials.header')
@include('partials.cursor')
  <!-- CARD TITLE -->
    <div class="container-fluid">
        <div class="card page-title-card">
            <div class="card-body p-2">
                <h1>Berita Terkini</h1>
                <h2>Pesantren Tahfidz Qur'an dan Digital Arrahman</h2>
                <div class="divider"></div>
                <a href="#" class="comment-link"><i class="bi bi-chat-dots"></i> Comment</a>
            </div>
        </div>
    </div>
    <!-- Konten Berita -->
    <div class="news-container">

        <!-- Filter Berita -->
        <div class="news-filter">
            <button class="filter-button active" data-filter="all">Semua</button>
            <button class="filter-button" data-filter="prestasi">Prestasi</button>
            <button class="filter-button" data-filter="kegiatan">Kegiatan</button>
            <button class="filter-button" data-filter="pengumuman">Pengumuman</button>
            <button class="filter-button" data-filter="eskul">Eskul</button>
        </div>

        <!-- Berita Utama -->
        <div class="highlight-news" data-category="prestasi" data-id="1">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80" alt="Kegiatan Sekolah" class="highlight-image">
            <div class="highlight-overlay">
                <span class="highlight-category">Prestasi</span>
                <h2 class="highlight-title">Siswa Kita Raih Medali Emas di Olimpiade Sains Nasional 2023</h2>
                <div class="highlight-meta">
                    <span class="highlight-date"><i class="far fa-calendar-alt"></i> 12 Oktober 2023</span>
                    <span class="highlight-author"><i class="far fa-user"></i> Admin Sekolah</span>
                </div>
            </div>
        </div>

        <div class="news-layout">
            <div class="news-main">
                <!-- Daftar Berita -->
                <div class="news-grid">
                    <!-- Berita 1 -->
                    <div class="news-card" data-category="kegiatan" data-id="2">
                        <img src="https://images.unsplash.com/photo-1584697964358-3e14ca57658b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" alt="Kegiatan Belajar" class="news-image">
                        <div class="news-content">
                            <span class="news-category">Kegiatan</span>
                            <span class="news-date"><i class="far fa-clock"></i> 10 Oktober 2023</span>
                            <h3 class="news-title">Study Tour ke Museum Nasional Membuka Wawasan Siswa</h3>
                            <p class="news-excerpt">Kegiatan study tour kelas X ke Museum Nasional berlangsung meriah dan penuh edukasi. Siswa mendapatkan pengalaman langsung tentang sejarah dan budaya Indonesia.</p>
                            <div class="news-tags">
                                <span class="news-tag">Field Trip</span>
                                <span class="news-tag">Edukasi</span>
                            </div>
                        </div>
                    </div>

                    <!-- Berita 2 -->
                    <div class="news-card" data-category="prestasi" data-id="3">
                        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" alt="Lomba Robotik" class="news-image">
                        <div class="news-content">
                            <span class="news-category">Prestasi</span>
                            <span class="news-date"><i class="far fa-clock"></i> 8 Oktober 2023</span>
                            <h3 class="news-title">Tim Robotik Sekolah Juara di Kompetisi Regional</h3>
                            <p class="news-excerpt">Tim robotik sekolah berhasil meraih juara pertama dalam kompetisi robotik regional yang diadakan di Universitas Indonesia.</p>
                            <div class="news-tags">
                                <span class="news-tag">Robotik</span>
                                <span class="news-tag">Kompetisi</span>
                            </div>
                        </div>
                    </div>

                    <!-- Berita 3 -->
                    <div class="news-card" data-category="eskul" data-id="4">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" alt="Ekstrakurikuler" class="news-image">
                        <div class="news-content">
                            <span class="news-category">Eskul</span>
                            <span class="news-date"><i class="far fa-clock"></i> 5 Oktober 2023</span>
                            <h3 class="news-title">Ekstrakurikuler Teater Kembali Beraksi dengan Lakon Baru</h3>
                            <p class="news-excerpt">Ekstrakurikuler teater sekolah akan mementaskan lakon "Roro Jonggrang" pada bulan depan. Saat ini sedang dalam proses latihan intensif.</p>
                            <div class="news-tags">
                                <span class="news-tag">Teater</span>
                                <span class="news-tag">Seni</span>
                            </div>
                        </div>
                    </div>

                    <!-- Berita 4 -->
                    <div class="news-card" data-category="kegiatan" data-id="5">
                        <img src="https://images.unsplash.com/photo-1582582621959-48d27397dc69?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" alt="Workshop" class="news-image">
                        <div class="news-content">
                            <span class="news-category">Kegiatan</span>
                            <span class="news-date"><i class="far fa-clock"></i> 3 Oktober 2023</span>
                            <h3 class="news-title">Workshop Kepenulisan untuk Tingkatkan Literasi Siswa</h3>
                            <p class="news-excerpt">Sekolah menyelenggarakan workshop kepenulisan dengan menghadirkan penulis terkenal untuk meningkatkan minat baca dan tulis siswa.</p>
                            <div class="news-tags">
                                <span class="news-tag">Literasi</span>
                                <span class="news-tag">Workshop</span>
                            </div>
                        </div>
                    </div>

                    <!-- Berita 5 -->
                    <div class="news-card" data-category="pengumuman" data-id="6">
                        <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" alt="Pengumuman" class="news-image">
                        <div class="news-content">
                            <span class="news-category">Pengumuman</span>
                            <span class="news-date"><i class="far fa-clock"></i> 1 Oktober 2023</span>
                            <h3 class="news-title">Jadwal Ujian Semester Ganjil Tahun Ajaran 2023/2024</h3>
                            <p class="news-excerpt">Telah ditetapkan jadwal ujian semester ganjil tahun ajaran 2023/2024. Silakan diperhatikan dan dipersiapkan dengan baik.</p>
                            <div class="news-tags">
                                <span class="news-tag">Ujian</span>
                                <span class="news-tag">Jadwal</span>
                            </div>
                        </div>
                    </div>

                    <!-- Berita 6 -->
                    <div class="news-card" data-category="prestasi" data-id="7">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" alt="Olahraga" class="news-image">
                        <div class="news-content">
                            <span class="news-category">Prestasi</span>
                            <span class="news-date"><i class="far fa-clock"></i> 28 September 2023</span>
                            <h3 class="news-title">Tim Basket Putra Juara Turnamen Antarsekolah Se-Kota</h3>
                            <p class="news-excerpt">Tim basket putra berhasil menjadi juara dalam turnamen antarsekolah se-kota setelah mengalahkan SMA Negeri 2 dengan skor 68-65.</p>
                            <div class="news-tags">
                                <span class="news-tag">Basket</span>
                                <span class="news-tag">Olahraga</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="cta-section">
                    <h2 class="cta-title">Tetap Terhubung dengan Sekolah Kami</h2>
                    <p>Dapatkan informasi terbaru langsung ke email Anda dengan berlangganan newsletter kami</p>
                    <div class="cta-buttons">
                        <button class="btn btn-cta" id="subscribeBtn"><i class="fas fa-envelope me-2"></i> Berlangganan Newsletter</button>
                        <button class="btn btn-cta-outline" id="contactBtn"><i class="fas fa-phone me-2"></i> Hubungi Kami</button>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="news-pagination">
                    <a href="#" class="page-link"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="page-link active">1</a>
                    <a href="#" class="page-link">2</a>
                    <a href="#" class="page-link">3</a>
                    <a href="#" class="page-link">4</a>
                    <a href="#" class="page-link"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="news-sidebar">
                <!-- Pencarian -->
                <div class="search-widget">
                    <input type="text" class="search-input" placeholder="Cari berita...">
                    <button class="search-button"><i class="fas fa-search"></i></button>
                </div>

                <!-- Berita Populer -->
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Berita Populer</h3>
                    <ul class="popular-news">
                        <li class="popular-item" data-id="5">
                            <img src="https://images.unsplash.com/photo-1582582621959-48d27397dc69?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Workshop" class="popular-img">
                            <div class="popular-content">
                                <h4 class="popular-title">Workshop Kepenulisan untuk Tingkatkan Literasi</h4>
                                <span class="popular-date">3 Okt 2023</span>
                            </div>
                        </li>
                        <li class="popular-item" data-id="3">
                            <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Robotik" class="popular-img">
                            <div class="popular-content">
                                <h4 class="popular-title">Tim Robotik Sekolah Juara Kompetisi</h4>
                                <span class="popular-date">8 Okt 2023</span>
                            </div>
                        </li>
                        <li class="popular-item" data-id="6">
                            <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Pengumuman" class="popular-img">
                            <div class="popular-content">
                                <h4 class="popular-title">Jadwal Ujian Semester Ganjil 2023/2024</h4>
                                <span class="popular-date">1 Okt 2023</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Kategori -->
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Kategori Berita</h3>
                    <ul class="categories-list">
                        <li class="category-item">
                            <a href="#" class="category-link" data-filter="prestasi">
                                <span>Prestasi</span>
                                <span class="category-count">12</span>
                            </a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-link" data-filter="kegiatan">
                                <span>Kegiatan Sekolah</span>
                                <span class="category-count">8</span>
                            </a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-link" data-filter="pengumuman">
                                <span>Pengumuman</span>
                                <span class="category-count">5</span>
                            </a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-link" data-filter="eskul">
                                <span>Ekstrakurikuler</span>
                                <span class="category-count">7</span>
                            </a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-link" data-filter="olahraga">
                                <span>Olahraga</span>
                                <span class="category-count">4</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Arsip -->
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Arsip Berita</h3>
                    <ul class="categories-list">
                        <li class="category-item">
                            <a href="#" class="category-link">
                                <span>Oktober 2023</span>
                                <span class="category-count">6</span>
                            </a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-link">
                                <span>September 2023</span>
                                <span class="category-count">10</span>
                            </a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-link">
                                <span>Agustus 2023</span>
                                <span class="category-count">8</span>
                            </a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-link">
                                <span>Juli 2023</span>
                                <span class="category-count">5</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter Subscription -->
                <div class="newsletter-widget">
                    <h3 class="newsletter-title">Berlangganan Newsletter</h3>
                    <p>Dapatkan update terbaru langsung ke email Anda</p>
                    <form class="newsletter-form">
                        <input type="email" class="newsletter-input" placeholder="Alamat email Anda" required>
                        <button type="submit" class="newsletter-button">Berlangganan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk berita -->
    <div class="modal" id="newsModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <img src="" alt="" class="modal-image" id="modalImage">
            <div class="modal-meta">
                <span id="modalCategory"></span>
                <span id="modalDate"></span>
                <span id="modalAuthor"></span>
            </div>
            <h2 class="modal-title" id="modalTitle"></h2>
            <div class="modal-body" id="modalBody"></div>
            <div class="share-buttons">
                <a href="#" class="share-button"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="share-button"><i class="fab fa-twitter"></i></a>
                <a href="#" class="share-button"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="share-button"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Modal untuk newsletter -->
    <div class="modal" id="newsletterModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 class="modal-title">Berlangganan Newsletter</h2>
            <p>Dapatkan informasi terbaru seputar kegiatan sekolah langsung ke email Anda</p>
            <form class="newsletter-form">
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" class="newsletter-input" placeholder="email@contoh.com" required>
                </div>
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" class="newsletter-input" placeholder="Nama Anda" required>
                </div>
                <button type="submit" class="newsletter-button">Berlangganan Sekarang</button>
            </form>
        </div>
    </div>

    <!-- Modal untuk kontak -->
    <div class="modal" id="contactModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 class="modal-title">Hubungi Kami</h2>
            <p>Silakan hubungi kami melalui salah satu saluran di bawah ini</p>
            
            <div class="contact-info">
                <div class="contact-itm">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Telepon</h3>
                    <p>+62 21 1234 5678</p>
                    <p>Senin - Jumat, 08:00 - 16:00</p>
                </div>
                
                <div class="contact-itm">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p>info@sekolahkami.sch.id</p>
                    <p>admin@sekolahkami.sch.id</p>
                </div>
                
                <div class="contact-itm">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Alamat</h3>
                    <p>Jl. Pendidikan No. 123</p>
                    <p>Jakarta Selatan, DKI Jakarta</p>
                </div>
            </div>
            
            <div class="form-group">
                <h3 class="sidebar-title">Kirim Pesan Langsung</h3>
                <form class="newsletter-form">
                    <div class="form-group">
                        <label for="contactName">Nama Lengkap</label>
                        <input type="text" id="contactName" class="newsletter-input" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="contactEmail">Alamat Email</label>
                        <input type="email" id="contactEmail" class="newsletter-input" placeholder="email@contoh.com" required>
                    </div>
                    <div class="form-group">
                        <label for="contactMessage">Pesan</label>
                        <textarea id="contactMessage" class="newsletter-input" placeholder="Tulis pesan Anda di sini" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="newsletter-button">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Loading animation -->
    <div class="loading" id="loading">
        <div class="loading-spinner"></div>
        <p>Memuat berita...</p>
    </div>

    @includeIf('partials.footer')

    <script>
        // Data berita lengkap
        const newsData = {
            1: {
                title: "Siswa Kita Raih Medali Emas di Olimpiade Sains Nasional 2023",
                category: "Prestasi",
                date: "12 Oktober 2023",
                author: "Admin Sekolah",
                image: "https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80",
                content: `<p>Kami dengan bangga mengumumkan bahwa salah satu siswa kami, Ahmad Rizki dari kelas XII IPA, berhasil meraih medali emas dalam Olimpiade Sains Nasional 2023 yang diselenggarakan di Jakarta.</p>
                <p>Ahmad berhasil mengalahkan ratusan peserta dari seluruh Indonesia dalam bidang ilmu Fisika. Prestasi ini merupakan yang pertama kalinya bagi sekolah kami dalam ajang bergengsi tersebut.</p>
                <p>"Ini adalah hasil dari kerja keras dan dedikasi yang tidak kenal lelah," ucap Ahmad saat diwawancarai. "Saya berterima kasih kepada para guru yang telah membimbing saya dan sekolah yang telah mendukung penuh."</p>
                <p>Kepala sekolah, Dr. Suryanto, M.Pd., menyampaikan kebanggaannya atas prestasi Ahmad. "Ini membuktikan bahwa dengan kerja keras dan dukungan yang tepat, siswa-siswa kita mampu bersaing di tingkat nasional."</p>
                <p>Keberhasilan Ahmad diharapkan dapat memotivasi siswa lainnya untuk terus berprestasi dan mengharumkan nama sekolah.</p>`
            },
            2: {
                title: "Study Tour ke Museum Nasional Membuka Wawasan Siswa",
                category: "Kegiatan",
                date: "10 Oktober 2023",
                author: "Guru Sejarah",
                image: "https://images.unsplash.com/photo-1584697964358-3e14ca57658b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80",
                content: `<p>Sebanyak 120 siswa kelas X mengikuti kegiatan study tour ke Museum Nasional dalam rangka memperdalam pengetahuan tentang sejarah dan budaya Indonesia.</p>
                <p>Kegiatan yang berlangsung selama satu hari penuh ini diisi dengan kunjungan ke berbagai galeri museum, termasuk Galeri Prasejarah, Galeri Keramik, dan Galeri Numismatik.</p>
                <p>"Sangat menarik bisa melihat langsung peninggalan sejarah yang selama ini hanya kita pelajari di buku," ujar Sinta, salah satu peserta study tour.</p>
                <p>Para siswa didampingi oleh guru-guru sejarah dan pemandu museum yang memberikan penjelasan mendetail tentang setiap koleksi yang dipamerkan.</p>
                <p>Kegiatan study tour seperti ini merupakan bagian dari kurikulum sekolah yang bertujuan untuk memberikan pengalaman belajar langsung di luar kelas.</p>`
            },
            3: {
                title: "Tim Robotik Sekolah Juara di Kompetisi Regional",
                category: "Prestasi",
                date: "8 Oktober 2023",
                author: "Pembina Eskul Robotik",
                image: "https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80",
                content: `<p>Tim robotik sekolah kita berhasil meraih juara pertama dalam Kompetisi Robotik Regional yang diselenggarakan oleh Universitas Indonesia.</p>
                <p>Tim yang terdiri dari 5 siswa ini berhasil membuat robot yang mampu menyelesaikan semua tantangan dengan sempurna, mengalahkan 30 tim dari sekolah-sekolah lain.</p>
                <p>"Kami menghabiskan waktu berbulan-bulan untuk mempersiapkan kompetisi ini," kata Rudi, ketua tim robotik. "Robot kami dirancang khusus untuk bisa menghadapi berbagai rintangan."</p>
                <p>Prestasi ini semakin membuktikan bahwa minat dan bakat siswa dalam bidang teknologi terus berkembang dengan baik di sekolah kita.</p>
                <p>Ke depan, tim robotik akan mempersiapkan diri untuk kompetisi tingkat nasional yang akan diselenggarakan bulan depan.</p>`
            },
            4: {
                title: "Ekstrakurikuler Teater Kembali Beraksi dengan Lakon Baru",
                category: "Eskul",
                date: "5 Oktober 2023",
                author: "Pembina Teater",
                image: "https://images.unsplash.com/photo-1511632765486-a01980e01a18?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80",
                content: `<p>Ekstrakurikuler teater sekolah akan mementaskan lakon "Roro Jonggrang" pada bulan depan. Saat ini sedang dalam proses latihan intensif untuk mempersiapkan pertunjukan tersebut.</p>
                <p>Lakon yang diangkat merupakan adaptasi dari legenda Jawa terkenal tentang asal-usul Candi Prambanan. Pertunjukan ini akan menampilkan 25 siswa dari berbagai kelas.</p>
                <p>"Kami berusaha menghadirkan pertunjukan yang tidak hanya menghibur tetapi juga mengandung nilai-nilai edukasi tentang budaya Indonesia," ujar Bu Sari, pembina ekstrakurikuler teater.</p>
                <p>Latihan dilakukan tiga kali seminggu dengan dibimbing oleh pelatih teater profesional dari komunitas seni lokal.</p>
                <p>Tiket pertunjukan sudah dapat dipesan mulai minggu depan melalui osis sekolah. Hasil dari penjualan tiket akan digunakan untuk kegiatan ekstrakurikuler lainnya.</p>`
            },
            5: {
                title: "Workshop Kepenulisan untuk Tingkatkan Literasi Siswa",
                category: "Kegiatan",
                date: "3 Oktober 2023",
                author: "Guru Bahasa Indonesia",
                image: "https://images.unsplash.com/photo-1582582621959-48d27397dc69?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80",
                content: `<p>Sekolah menyelenggarakan workshop kepenulisan dengan menghadirkan penulis terkenal untuk meningkatkan minat baca dan tulis siswa.</p>
                <p>Workshop yang berlangsung selama dua hari ini diisi oleh Ahmad Tohari, penulis novel terkenal "Ronggeng Dukuh Paruk". Kegiatan diikuti oleh 50 siswa yang memiliki minat dalam dunia kepenulisan.</p>
                <p>"Menulis adalah keterampilan yang sangat penting di era digital seperti sekarang," ujar Ahmad Tohari dalam sambutannya. "Dengan menulis, kalian bisa menyampaikan ide dan gagasan kepada banyak orang."</p>
                <p>Para peserta diajarkan teknik-teknik dasar menulis fiksi dan nonfiksi, termasuk bagaimana mengembangkan ide, membuat outline, dan menyunting tulisan sendiri.</p>
                <p>Di akhir workshop, para peserta diminta untuk membuat tulisan pendek yang akan dibukukan dalam antologi cerpen karya siswa.</p>`
            },
            6: {
                title: "Jadwal Ujian Semester Ganjil Tahun Ajaran 2023/2024",
                category: "Pengumuman",
                date: "1 Oktober 2023",
                author: "Wakil Kepala Sekolah",
                image: "https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80",
                content: `<p>Telah ditetapkan jadwal ujian semester ganjil tahun ajaran 2023/2024. Silakan diperhatikan dan dipersiapkan dengan baik.</p>
                <p>Ujian akan dilaksanakan mulai tanggal 27 November hingga 8 Desember 2023. Setiap hari akan diujikan dua mata pelajaran dengan waktu pengerjaan 120 menit untuk setiap mata pelajaran.</p>
                <p>Jadwal lengkap ujian dapat diunduh melalui website sekolah atau dilihat di papan pengumuman. Para siswa diharapkan mempersiapkan diri dengan baik dan mengikuti jadwal belajar yang telah disusun oleh guru.</p>
                <p>Bagi siswa yang berhalangan hadir karena sakit atau alasan penting lainnya, diwajibkan memberitahu wali kelas dan menyertakan surat keterangan. Ujian susulan akan diadakan pada tanggal 11-13 Desember 2023.</p>
                <p>Persiapan ujian juga termasuk memastikan kesehatan fisik dan mental. Selama periode ujian, kantin sekolah akan menyediakan menu makanan bergizi dengan harga khusus untuk siswa.</p>`
            },
            7: {
                title: "Tim Basket Putra Juara Turnamen Antarsekolah Se-Kota",
                category: "Prestasi",
                date: "28 September 2023",
                author: "Pelatih Basket",
                image: "https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80",
                content: `<p>Tim basket putra berhasil menjadi juara dalam turnamen antarsekolah se-kota setelah mengalahkan SMA Negeri 2 dengan skor 68-65.</p>
                <p>Turnamen yang diselenggarakan oleh Dinas Pemuda dan Olahraga Kota ini diikuti oleh 16 sekolah menengah atas. Tim kita berhasil melewati semua babak dengan gemilang tanpa mengalami kekalahan sama sekali.</p>
                <p>Pertandingan final berlangsung sangat seru dan menegangkan. Kedua tim bermain dengan strategi yang matang dan menunjukkan permainan berkualitas tinggi.</p>
                <p>Di menit-menit terakhir, Rizky berhasil mencetak three-point shot yang menentukan kemenangan tim kita. Prestasi ini merupakan yang ketiga kalinya dalam lima tahun terakhir.</p>
                <p>Atas prestasi ini, tim basket akan mewakili kota dalam turnamen tingkat provinsi yang akan diselenggarakan bulan depan. Selamat kepada seluruh pemain dan pelatih!</p>`
            }
        };

        // Fungsi untuk membuka modal berita
        function openNewsModal(newsId) {
            const news = newsData[newsId];
            if (!news) return;
            
            document.getElementById('modalImage').src = news.image;
            document.getElementById('modalCategory').textContent = news.category;
            document.getElementById('modalDate').textContent = news.date;
            document.getElementById('modalAuthor').textContent = `Oleh: ${news.author}`;
            document.getElementById('modalTitle').textContent = news.title;
            document.getElementById('modalBody').innerHTML = news.content;
            
            document.getElementById('newsModal').style.display = 'block';
            document.body.style.overflow = 'hidden'; // Mencegah scroll di background
        }

        // Fungsi untuk menutup modal
        function closeModals() {
            document.querySelectorAll('.modal').forEach(modal => {
                modal.style.display = 'none';
            });
            document.body.style.overflow = 'auto'; // Mengembalikan scroll
        }

        // Fungsi untuk filter berita
        function filterNews(category) {
            const newsCards = document.querySelectorAll('.news-card, .highlight-news');
            const loading = document.getElementById('loading');
            
            loading.style.display = 'block';
            
            // Simulasi loading
            setTimeout(() => {
                newsCards.forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
                
                loading.style.display = 'none';
            }, 500);
        }

        // Event listeners saat dokumen sudah dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Filter berita
            const filterButtons = document.querySelectorAll('.filter-button, .category-link');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Hapus kelas active dari semua tombol filter
                    document.querySelectorAll('.filter-button').forEach(btn => {
                        btn.classList.remove('active');
                    });
                    
                    // Tambahkan kelas active ke tombol yang diklik
                    if (this.classList.contains('filter-button')) {
                        this.classList.add('active');
                    }
                    
                    // Filter berita berdasarkan kategori
                    const filterValue = this.dataset.filter;
                    filterNews(filterValue);
                });
            });
            
            // Buka modal berita saat headline diklik
            document.querySelectorAll('.news-card, .highlight-news, .popular-item, .news-title, .popular-title, .highlight-title').forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const card = this.closest('[data-id]');
                    if (card) {
                        const newsId = card.dataset.id;
                        openNewsModal(newsId);
                    }
                });
            });
            
            // Tutup modal
            document.querySelectorAll('.close-modal').forEach(button => {
                button.addEventListener('click', closeModals);
            });
            
            // Klik di luar modal untuk menutup
            window.addEventListener('click', function(e) {
                if (e.target.classList.contains('modal')) {
                    closeModals();
                }
            });
            
            // Tutup modal dengan tombol ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeModals();
                }
            });
            
            // CTA buttons
            document.getElementById('subscribeBtn').addEventListener('click', function() {
                document.getElementById('newsletterModal').style.display = 'block';
                document.body.style.overflow = 'hidden';
            });
            
            document.getElementById('contactBtn').addEventListener('click', function() {
                document.getElementById('contactModal').style.display = 'block';
                document.body.style.overflow = 'hidden';
            });
            
            // Form submission
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Terima kasih! Permintaan Anda sedang diproses.');
                    this.reset();
                    closeModals();
                });
            });
            
            // Pencarian
            document.querySelector('.search-button').addEventListener('click', function() {
                const searchTerm = document.querySelector('.search-input').value.toLowerCase();
                const newsCards = document.querySelectorAll('.news-card');
                
                newsCards.forEach(card => {
                    const title = card.querySelector('.news-title').textContent.toLowerCase();
                    const excerpt = card.querySelector('.news-excerpt').textContent.toLowerCase();
                    
                    if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>
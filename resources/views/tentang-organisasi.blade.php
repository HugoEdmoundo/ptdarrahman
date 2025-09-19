<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Organisasi - Pesantren Tahfidz Qur'an dan Digital Arrahman</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/tentang-organisasi.css') }}">
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

    <!-- Header Section -->
    <header class="org-header text-center">
            <!-- CARD TITLE -->
            <div class="container-fluid">
                <div class="card page-title-card">
                <div class="card-body p-2">
                    <h1>Tentang Organisasi</h1>
                    <h2>Pesantren Tahfidz Qur'an dan Digital Arrahman</h2>
                    <div class="divider"></div>
                    <a href="#" class="comment-link"><i class="bi bi-chat-dots"></i> Comment</a>
                </div>
                </div>
            </div>
            <div class="card-body p-2">
                <h1>ORGANISASI Arrahman</h1>
                <h2>Struktur Organisasi dan Galeri</h2>
                <div class="divider"></div>
            </div>
            <div class="animate__animated animate__fadeInUp animate__delay-2s">
                <a href="#struktur" class="btn btn-hero btn-lg me-2">
                    <span>Struktur Kepengurusan</span>
                    <i class="fas fa-sitemap ms-2"></i>
                </a>
                <a href="#mantan-pengurus" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-users me-2"></i>
                    <span>Mantan Pengurus</span>
                </a>
            </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Slider Mantan Pengurus -->
        <section id="mantan-pengurus" class="slider-section">
            <div class="slider-container">
                <div class="slider-header">
                    <div class="period-badge">Periode 2022-2023</div>
                    <h2>Mantan Pengurus</h2>
                    <p>Para pengurus OSIS periode sebelumnya yang telah berkontribusi untuk sekolah</p>
                </div>
                
                <div class="slider-wrapper">
                    <div class="slider-track">
                        <!-- Item 1 -->
                        <div class="slider-item">
                            <div class="profile-card">
                                <div class="profile-img-container">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                                        alt="Muhammad Ardan Sundawa" class="profile-img">
                                </div>
                                <div class="profile-info">
                                    <h4 class="profile-name">Muhammad Ardan Sundawa</h4>
                                    <div class="profile-role">Ketua OSIS</div>
                                    <p class="profile-desc">Memimpin organisasi dengan integritas dan dedikasi tinggi selama masa jabatannya.</p>
                                    <div class="profile-class">XII IPA 1 (2022-2023)</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="slider-item">
                            <div class="profile-card">
                                <div class="profile-img-container">
                                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                                        alt="Alvito Syarman Siregar" class="profile-img">
                                </div>
                                <div class="profile-info">
                                    <h4 class="profile-name">Alvito Syarman Siregar</h4>
                                    <div class="profile-role">Wakil Ketua</div>
                                    <p class="profile-desc">Mendukung kelancaran kegiatan organisasi dengan penuh tanggung jawab.</p>
                                    <div class="profile-class">XII IPS 2 (2022-2023)</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 3 -->
                        <div class="slider-item">
                            <div class="profile-card">
                                <div class="profile-img-container">
                                    <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-1.2.1&auto=format&fit=crop&w=644&q=80" 
                                        alt="Budi Santoso" class="profile-img">
                                </div>
                                <div class="profile-info">
                                    <h4 class="profile-name">Budi Santoso</h4>
                                    <div class="profile-role">Sekretaris</div>
                                    <p class="profile-desc">Mengelola administrasi organisasi dengan tertib dan efisien.</p>
                                    <div class="profile-class">XII IPA 2 (2022-2023)</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 4 -->
                        <div class="slider-item">
                            <div class="profile-card">
                                <div class="profile-img-container">
                                    <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db1604?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                                        alt="Dewi Lestari" class="profile-img">
                                </div>
                                <div class="profile-info">
                                    <h4 class="profile-name">Dewi Lestari</h4>
                                    <div class="profile-role">Bendahara</div>
                                    <p class="profile-desc">Mengelola keuangan organisasi dengan transparan dan akuntabel.</p>
                                    <div class="profile-class">XII IPS 1 (2022-2023)</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 5 -->
                        <div class="slider-item">
                            <div class="profile-card">
                                <div class="profile-img-container">
                                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                                        alt="Muhammad Muzaffar Abdusallam" class="profile-img">
                                </div>
                                <div class="profile-info">
                                    <h4 class="profile-name">Muhammad Muzaffar Abdusallam</h4>
                                    <div class="profile-role">Koord. Keamanan</div>
                                    <p class="profile-desc">Memastikan keamanan lingkungan sekolah dengan penuh tanggung jawab.</p>
                                    <div class="profile-class">XII IPA 3 (2022-2023)</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 6 -->
                        <div class="slider-item">
                            <div class="profile-card">
                                <div class="profile-img-container">
                                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                                        alt="Maya Sari" class="profile-img">
                                </div>
                                <div class="profile-info">
                                    <h4 class="profile-name">Maya Sari</h4>
                                    <div class="profile-role">Koord. DKM</div>
                                    <p class="profile-desc">Mengelola kegiatan keagamaan dan pengajian dengan penuh dedikasi.</p>
                                    <div class="profile-class">XII IPA 4 (2022-2023)</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 7 -->
                        <div class="slider-item">
                            <div class="profile-card">
                                <div class="profile-img-container">
                                    <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                                        alt="Ibnu Hanif Maulana" class="profile-img">
                                </div>
                                <div class="profile-info">
                                    <h4 class="profile-name">Ibnu Hanif Maulana</h4>
                                    <div class="profile-role">Koord. Seni & Multimedia</div>
                                    <p class="profile-desc">Memperkenalkan inovasi digital untuk kemajuan organisasi.</p>
                                    <div class="profile-class">XII IPA 5 (2022-2023)</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 8 -->
                        <div class="slider-item">
                            <div class="profile-card">
                                <div class="profile-img-container">
                                    <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                                        alt="Muhammad Ridho" class="profile-img">
                                </div>
                                <div class="profile-info">
                                    <h4 class="profile-name">Muhammad Ridho</h4>
                                    <div class="profile-role">Koord. Kesehatan</div>
                                    <p class="profile-desc">Mengelola program kesehatan dan kebersihan lingkungan sekolah.</p>
                                    <div class="profile-class">XII IPS 3 (2022-2023)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slider-nav">
                    <button class="slider-button prev-button">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    
                    <div class="slider-progress">
                        <div class="slider-progress-bar"></div>
                    </div>
                    
                    <div class="slider-dots">
                        <span class="slider-dot active" data-index="0"></span>
                        <span class="slider-dot" data-index="1"></span>
                        <span class="slider-dot" data-index="2"></span>
                    </div>
                    
                    <button class="slider-button next-button">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>


        <!-- Divisi Section -->
        <section id="divisi" class="py-5">
            <div class="container">
                <h2 class="text-center fw-bold mb-5">Divisi Organisasi</h2>
                <div class="row g-4">
                    <!-- Divisi 1 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="divisi-card card h-100">
                            <div class="card-body text-center p-4">
                                <div class="divisi-icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <h5 class="card-title">Divisi Keamanan</h5>
                                <p class="card-text">Bertanggung jawab atas keamanan dan ketertiban lingkungan pesantren.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divisi 2 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="divisi-card card h-100">
                            <div class="card-body text-center p-4">
                                <div class="divisi-icon">
                                    <i class="fas fa-pray"></i>
                                </div>
                                <h5 class="card-title">Divisi DKM</h5>
                                <p class="card-text">Mengkoordinasikan kegiatan keagamaan dan pengembangan spiritual siswa.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divisi 3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="divisi-card card h-100">
                            <div class="card-body text-center p-4">
                                <div class="divisi-icon">
                                    <i class="fas fa-broom"></i>
                                </div>
                                <h5 class="card-title">Divisi Kebersihan</h5>
                                <p class="card-text">Menjaga kebersihan dan keasrian lingkungan pesantren.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divisi 4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="divisi-card card h-100">
                            <div class="card-body text-center p-4">
                                <div class="divisi-icon">
                                    <i class="fas fa-palette"></i>
                                </div>
                                <h5 class="card-title">Divisi Seni & Multimedia</h5>
                                <p class="card-text">Mengembangkan bakat seni dan mengelola konten multimedia.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divisi 5 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="divisi-card card h-100">
                            <div class="card-body text-center p-4">
                                <div class="divisi-icon">
                                    <i class="fas fa-first-aid"></i>
                                </div>
                                <h5 class="card-title">Divisi Kesehatan</h5>
                                <p class="card-text">Menjaga kesehatan dan memberikan pertolongan pertama.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divisi 6 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="divisi-card card h-100">
                            <div class="card-body text-center p-4">
                                <div class="divisi-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h5 class="card-title">Divisi Perpustakaan</h5>
                                <p class="card-text">Mengelola perpustakaan dan mempromosikan budaya membaca.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divisi 7 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="divisi-card card h-100">
                            <div class="card-body text-center p-4">
                                <div class="divisi-icon">
                                    <i class="fas fa-running"></i>
                                </div>
                                <h5 class="card-title">Divisi Olahraga</h5>
                                <p class="card-text">Mengkoordinir kegiatan olahraga dan menjaga kebugaran siswa.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divisi 8 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="divisi-card card h-100">
                            <div class="card-body text-center p-4">
                                <div class="divisi-icon">
                                    <i class="fas fa-utensils"></i>
                                </div>
                                <h5 class="card-title">Divisi Koperasi & Dapur</h5>
                                <p class="card-text">Mengelola koperasi dan dapur untuk kebutuhan sehari-hari.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Divisi 9 -->
                    <div class="col-md-6 col-lg-3 mx-auto">
                        <div class="divisi-card card h-100">
                            <div class="card-body text-center p-4">
                                <div class="divisi-icon">
                                    <i class="fas fa-language"></i>
                                </div>
                                <h5 class="card-title">Divisi Bahasa</h5>
                                <p class="card-text">Mengembangkan kemampuan bahasa asing dan daerah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Struktur Organisasi -->
        <section id="struktur" class="org-chart bg-light py-5">
            <div class="container">
                <div class="org-header-section">
                    <h2>Struktur Kepengurusan 2023-2024</h2>
                    <p>Kepengurusan OSIS periode kedua dengan fokus pada penguatan digitalisasi dan pengabdian masyarakat.</p>
                </div>
                
                <!-- Pimpinan Inti -->
                <div class="coordinator-section">
                    <div class="coordinator-header">
                        <h3>Pimpinan Organisasi</h3>
                    </div>
                    <div class="team-row">
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Ketua OSIS" class="member-img">
                            </div>
                            <h4 class="member-name">Alvito Syarman Siregar</h4>
                            <div class="member-role">Ketua OSIS</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Sekretaris" class="member-img">
                            </div>
                            <h4 class="member-name">Muhammad Ziyad Hasan</h4>
                            <div class="member-role">Wakil Ketua, Sekretaris & Bendahara</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                    </div>
                </div>
                
                <!-- Koordinator Keamanan -->
                <div class="coordinator-section">
                    <div class="coordinator-header">
                        <h3>Koordinator Keamanan</h3>
                    </div>
                    <div class="team-row">
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Koordinator Keamanan" class="member-img">
                            </div>
                            <h4 class="member-name">Rahmatullah Yusuf Ihsan</h4>
                            <div class="member-role">Koordinator Keamanan</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Anggota Keamanan" class="member-img">
                            </div>
                            <h4 class="member-name">Muhammad Muzaffar Abdusallam</h4>
                            <div class="member-role">Anggota Keamanan</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                    </div>
                </div>
                
                <!-- Koordinator DKM -->
                <div class="coordinator-section">
                    <div class="coordinator-header">
                        <h3>Koordinator DKM</h3>
                    </div>
                    <div class="team-row">
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Koordinator DKM" class="member-img">
                            </div>
                            <h4 class="member-name">Muhammad Fatihah Zahid</h4>
                            <div class="member-role">Koordinator DKM</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/women/51.jpg" alt="Anggota DKM" class="member-img">
                            </div>
                            <h4 class="member-name">Mahmued Abdur Razaq</h4>
                            <div class="member-role">Anggota DKM</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/19.jpg" alt="Anggota DKM" class="member-img">
                            </div>
                            <h4 class="member-name">Muhammad Syamil Hamasah</h4>
                            <div class="member-role">Anggota DKM</div>
                            <div class="member-class">IX IT</div>
                        </div>
                    </div>
                </div>
                
                <!-- Koordinator Kebersihan -->
                <div class="coordinator-section">
                    <div class="coordinator-header">
                        <h3>Koordinator Kebersihan</h3>
                    </div>
                    <div class="team-row">
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/36.jpg" alt="Koordinator Kebersihan" class="member-img">
                            </div>
                            <h4 class="member-name">Muhammad RIdho</h4>
                            <div class="member-role">Koordinator Kebersihan</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/women/39.jpg" alt="Anggota Kebersihan" class="member-img">
                            </div>
                            <h4 class="member-name">Muhammad Hammam Riziq</h4>
                            <div class="member-role">Anggota Kebersihan</div>
                            <div class="member-class">X RPL I</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/women/23.jpg" alt="Anggota Kebersihan" class="member-img">
                            </div>
                            <h4 class="member-name">Mahesa Vatian</h4>
                            <div class="member-role">Anggota Kebersihan</div>
                            <div class="member-class">IX IT</div>
                        </div>
                    </div>
                </div>
                
                <!-- Koordinator Seni & Multimedia -->
                <div class="coordinator-section">
                    <div class="coordinator-header">
                        <h3>Koordinator Seni & Multimedia</h3>
                    </div>
                    <div class="team-row">
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Koordinator Seni & Multimedia" class="member-img">
                            </div>
                            <h4 class="member-name">Hudzaifah Ali Miftah</h4>
                            <div class="member-role">Koordinator Seni & Multimedia</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Anggota Seni & Multimedia" class="member-img">
                            </div>
                            <h4 class="member-name">Rasyid Anwar Arief</h4>
                            <div class="member-role">Anggota Seni & Multimedia</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                    </div>
                </div>
                
                <!-- Koordinator Kesehatan -->
                <div class="coordinator-section">
                    <div class="coordinator-header">
                        <h3>Koordinator Kesehatan</h3>
                    </div>
                    <div class="team-row">
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/women/72.jpg" alt="Koordinator Kesehatan" class="member-img">
                            </div>
                            <h4 class="member-name">Ashraf El-Hafieza Rusmana</h4>
                            <div class="member-role">Koordinator Kesehatan</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Anggota Kesehatan" class="member-img">
                            </div>
                            <h4 class="member-name">Farhan Fauzi Amir Balfaz</h4>
                            <div class="member-role">Anggota Kesehatan</div>
                            <div class="member-class">IX IT</div>
                        </div>
                    </div>
                </div>
                
                <!-- Koordinator Perpustakaan -->
                <div class="coordinator-section">
                    <div class="coordinator-header">
                        <h3>Koordinator Perpustakaan</h3>
                    </div>
                    <div class="team-row">
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Koordinator Perpustakaan" class="member-img">
                            </div>
                            <h4 class="member-name">Muhammad Nashir Amrullah</h4>
                            <div class="member-role">Koordinator Perpustakaan</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                    </div>
                </div>
                
                <!-- Koordinator Olahraga -->
                <div class="coordinator-section">
                    <div class="coordinator-header">
                        <h3>Koordinator Olahraga</h3>
                    </div>
                    <div class="team-row">
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/77.jpg" alt="Koordinator Olahraga" class="member-img">
                            </div>
                            <h4 class="member-name">Muhammad Alfiansyah</h4>
                            <div class="member-role">Koordinator Olahraga</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/79.jpg" alt="Koordinator Olahraga" class="member-img">
                            </div>
                            <h4 class="member-name">Okte Pusta Riansyah</h4>
                            <div class="member-role">Koordinator Olahraga</div>
                            <div class="member-class">X RPL I</div>
                        </div>
                    </div>
                </div>
                
                <!-- Koordinator Koperasi Dapur -->
                <div class="coordinator-section">
                    <div class="coordinator-header">
                        <h3>Koordinator Koperasi Dapur</h3>
                    </div>
                    <div class="team-row">
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/women/81.jpg" alt="Koordinator Koperasi Dapur" class="member-img">
                            </div>
                            <h4 class="member-name">Aflah Fadhililah</h4>
                            <div class="member-role">Koordinator Koperasi Dapur</div>
                            <div class="member-class">X RPL I</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/women/83.jpg" alt="Anggota Koperasi Dapur" class="member-img">
                            </div>
                            <h4 class="member-name">Mush'ab Arrantisi</h4>
                            <div class="member-role">Anggota Koperasi Dapur</div>
                            <div class="member-class">IX IT</div>
                        </div>
                    </div>
                </div>
                
                <!-- Koordinator Bahasa -->
                <div class="coordinator-section">
                    <div class="coordinator-header">
                        <h3>Koordinator Bahasa</h3>
                    </div>
                    <div class="team-row">
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/men/85.jpg" alt="Koordinator Bahasa" class="member-img">
                            </div>
                            <h4 class="member-name">Muhammad Ardan Sundawa</h4>
                            <div class="member-role">Koordinator Bahasa</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                        
                        <div class="member-card">
                            <div class="member-img-container">
                                <img src="https://randomuser.me/api/portraits/women/87.jpg" alt="Anggota Bahasa" class="member-img">
                            </div>
                            <h4 class="member-name">Ibnu Hanif Maulana</h4>
                            <div class="member-role">Anggota Bahasa</div>
                            <div class="member-class">XI RPL II</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Galery -->
     <section>
        
     </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.slider-track');
            const dots = document.querySelectorAll('.slider-dot');
            const items = document.querySelectorAll('.slider-item');
            const prevButton = document.querySelector('.prev-button');
            const nextButton = document.querySelector('.next-button');
            const progressBar = document.querySelector('.slider-progress-bar');
            
            let currentIndex = 0;
            let slideInterval;
            let itemsPerView = 4;
            let isAnimating = false;
            
            // Fungsi untuk menentukan jumlah item per view berdasarkan lebar layar
            function updateItemsPerView() {
                if (window.innerWidth >= 1200) {
                    itemsPerView = 4;
                } else if (window.innerWidth >= 900) {
                    itemsPerView = 3;
                } else if (window.innerWidth >= 576) {
                    itemsPerView = 2;
                } else {
                    itemsPerView = 1;
                }
            }
            
            // Fungsi untuk memperbarui posisi slider
            function updateSlider(animate = true) {
                if (isAnimating) return;
                isAnimating = true;
                
                const itemWidth = items[0].offsetWidth + 30; // Width + margin
                const newPosition = -currentIndex * itemWidth;
                
                if (animate) {
                    track.style.transition = 'transform 0.6s cubic-bezier(0.23, 1, 0.32, 1)';
                } else {
                    track.style.transition = 'none';
                }
                
                track.style.transform = `translateX(${newPosition}px)`;
                
                // Update active dot
                const activeDotIndex = Math.floor(currentIndex / itemsPerView);
                dots.forEach((dot, index) => {
                    if (index === activeDotIndex) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
                
                // Update progress bar
                const progress = ((currentIndex % itemsPerView) + 1) / itemsPerView * 100;
                progressBar.style.width = `${progress}%`;
                
                // Reset animation flag setelah transisi selesai
                setTimeout(() => {
                    isAnimating = false;
                }, 600);
            }
            
            // Fungsi untuk slide berikutnya
            function nextSlide() {
                if (currentIndex < items.length - itemsPerView) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateSlider();
            }
            
            // Fungsi untuk slide sebelumnya
            function prevSlide() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = items.length - itemsPerView;
                }
                updateSlider();
            }
            
            // Auto slide setiap 4 detik
            function startSlider() {
                slideInterval = setInterval(() => {
                    nextSlide();
                }, 4000);
            }
            
            // Berhenti auto sliding ketika pengguna berinteraksi
            function stopSlider() {
                clearInterval(slideInterval);
            }
            
            // Event listeners untuk tombol
            nextButton.addEventListener('click', () => {
                stopSlider();
                nextSlide();
                startSlider();
            });
            
            prevButton.addEventListener('click', () => {
                stopSlider();
                prevSlide();
                startSlider();
            });
            
            // Event listeners untuk dots
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    stopSlider();
                    currentIndex = parseInt(this.getAttribute('data-index')) * itemsPerView;
                    updateSlider();
                    startSlider();
                });
            });
            
            // Pause slider on hover
            const sliderWrapper = document.querySelector('.slider-wrapper');
            sliderWrapper.addEventListener('mouseenter', stopSlider);
            sliderWrapper.addEventListener('mouseleave', startSlider);
            
            // Responsif saat resize window
            window.addEventListener('resize', () => {
                updateItemsPerView();
                updateSlider(false);
            });
            
            // Inisialisasi slider
            updateItemsPerView();
            updateSlider(false);
            startSlider();
        });
    </script>
</body>
</html>
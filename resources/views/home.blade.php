<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesantren Tahfidz Qur'an dan Digital Arrahman</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Glide JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Favicon -->
    <link rel="icon" href="https://res.cloudinary.com/dunynusuh/image/upload/v1755771459/Logo-Ar-Rahman_fm4mgg.png">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

    @include('partials.header')
    @include('partials.cursor')

    <!-- Hero Section with Video Background -->
    <section id="heroCarousel" class="carousel slide hero-section" data-bs-ride="carousel">
    <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <!-- Slide 1 Revisi Posisi Text -->
            <div class="carousel-item active">
                <div class="hero-slide-background slide-1">
                    <div class="overlay-gradient"></div>
                    <div class="particles-container" id="particles-1"></div>
                </div>
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="carousel-caption text-center w-100">
                        <div class="content-wrapper"> <!-- Tambah wrapper khusus -->
                            <h6 class="highlight-label animate__animated animate__fadeIn">BERGABUNGLAH</h6>
                            <h1 class="display-3 fw-bold text-white mb-3 animate__animated animate__fadeInUp animate__delay-1s">Daftarkan Masa Depan Anda</h1>
                            <p class="lead text-white mb-4 animate__animated animate__fadeInUp animate__delay-2s">Bentuk generasi Masa Depan bersama keluarga besar PTD'</p>
                            <div class="animate__animated animate__fadeInUp animate__delay-3s">
                                <a href="ppdb/info-ppdb.html" class="btn btn-hero btn-lg me-2">
                                    <span>Pelajari Lebih Lanjut</span>
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a> 
                                <a href="#video-tour" class="btn btn-video btn-lg">
                                    <i class="fas fa-play me-2"></i>
                                    <span>Video Tour</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="hero-slide-background slide-2">
                    <div class="overlay-gradient"></div>
                    <div class="particles-container" id="particles-2"></div>
                </div>
                <div class="container">
                    <div class="carousel-caption animate__animated animate__fadeIn">
                        <h6 class="highlight-label animate__animated animate__fadeIn animate__delay-1s">UNGGUL & TERPERCAYA</h6>
                        <h1 class="display-3 fw-bold text-white mb-3 animate__animated animate__fadeInUp animate__delay-2s">Pendidikan Bernilai Qur'ani dan Teknologi</h1>
                        <p class="lead text-white mb-4 animate__animated animate__fadeInUp animate__delay-3s">Menggabungkan ilmu, adab, dan teknologi dalam harmoni</p>
                        <div class="animate__animated animate__fadeInUp animate__delay-4s">
                            <a href="profil/tentang-kami/tentang-kami.html" class="btn btn-hero btn-lg me-2">
                                <span>Lihat Profil Sekolah</span>
                                <i class="fas fa-book-open ms-2"></i>
                            </a>
                            <a href="#prestasi" class="btn btn-outline-light btn-lg">
                                <i class="fas fa-trophy me-2"></i>
                                <span>Prestasi Kami</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="hero-slide-background slide-3">
                    <div class="overlay-gradient"></div>
                    <div class="particles-container" id="particles-3"></div>
                </div>
                <div class="container">
                    <div class="carousel-caption animate__animated animate__fadeIn">
                        <h6 class="highlight-label animate__animated animate__fadeIn animate__delay-1s">BERSAMA KAMI</h6>
                        <h1 class="display-3 fw-bold text-white mb-3 animate__animated animate__fadeInUp animate__delay-2s">Masa Depan Dimulai Dari Sini</h1>
                        <p class="lead text-white mb-4 animate__animated animate__fadeInUp animate__delay-3s">Buat Masa Depan-Mu Sekarang. Bukan Besok!</p>
                        <div class="animate__animated animate__fadeInUp animate__delay-4s">
                            <a href="#kontak" class="btn btn-hero btn-lg me-2">
                                <span>Hubungi Kami</span>
                                <i class="fas fa-phone-alt ms-2"></i>
                            </a>
                            <a href="#virtual-tour" class="btn btn-outline-light btn-lg">
                                <i class="fas fa-vr-cardboard me-2"></i>
                                <span>Virtual Tour</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls 
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </section>

    <!-- School Principal Section -->
    <section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4 align-items-center">

        <!-- Foto -->
        <div class="col-lg-5 text-center">
            <div class="photo-wrapper rounded-4 overflow-hidden border border-light">
            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755302400/samples/people/boy-snow-hoodie.jpg" alt="Kepala Sekolah" class="img-fluid" style="object-fit: cover; height: 500px; width: 100%;">
            </div>
            <p class="mt-2 fw-semibold text-primary">Mudir PTD Ar-Rahman'</p>
        </div>

        <!-- Sambutan -->
        <div class="col-lg-7">
            <div class="sambutan-box">
            <small class="sambutan-label">Kata Sambutan</small>
            <h3 class="fw-bold">Assalamu’alaikum<br>Warahmatullahi Wabarakatuh</h3>

            <p class="mt-3 mb-3">
                Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang,
            </p>
            <p>
                Segala puji dihat...
            </p>
            <p>
                Dan ruang ini, adalah pintu. Pintu untuk menyaksikan indahnya taman-taman Al-Qur'an...
            </p>

            <div class="sambutan-footer">
                <h6 class="fw-bold mt-4 text-primary">~ Ustadz Ziyad Khairy Al-Hafidz, S.E</h6>
                <p class="mb-4">Kepala Sekolah</p>
            </div>

            <a href="#sambutan" class="btn btn-member">
                Selengkapnya
            </a>
            </div>
        </div>

        </div>
    </div>
    </section>




    <!-- Why Choose Us Section -->
    <section class="py-5 why-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Mengapa Memilih Sekolah Kami?</h2>
                <p class="subtitle">Keunggulan yang membuat kami berbeda</p>
                <h5 class="mt-3" style="color: #00796B;">Empat Keunggulan Utama</h5>
            </div>
            
            <div class="row g-4 text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box bg-akademik">
                        <i class="fas fa-graduation-cap"></i>
                        <h6 class="btn btn-member">Akademik Unggul</h6>
                        <p>Fokus pada literasi digital dan komputasi.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box bg-karakter">
                        <i class="fas fa-heart"></i>
                        <h6 class="btn btn-member">PendidikanKarakter</h6>
                        <p>Program pembentukan karakter dengan nilai kebangsaan, moral, dan kepemimpinan.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box bg-fasilitas">
                        <i class="fas fa-flask"></i>
                        <h6 class="btn btn-member">Fasilitas Modern</h6>
                        <p>Lingkungan belajar nyaman dengan fasilitas pendukung terkini.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box bg-prestasi">
                        <i class="fas fa-trophy"></i>
                        <h6 class="btn btn-member">BerPrestasi</h6>
                        <p>Lingkungan belajar yang mendorong prestasi optimal siswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Facilities Showcase -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Fasilitas Kelas Dunia</h2>
                <p class="section-subtitle">Lingkungan belajar yang mendukung pengembangan optimal siswa</p>
            </div>

            <!-- Marquee Gambar -->
            <div class="facility-marquee">
                <div class="marquee-track">
                    <!-- slide 1 -->
                    <div class="facility-item">
                        <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Sains" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Sains</h5>
                            <p>Peralatan modern untuk eksperimen sains</p>
                        </div>
                    </div>
                    <!-- slide 2 -->
                    <div class="facility-item">
                        <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Perpustakaan Digital" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Perpustakaan Digital</h5>
                            <p>50.000+ koleksi buku fisik dan digital</p>
                        </div>
                    </div>
                    <!-- slide 3 -->
                    <div class="facility-item">
                        <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Lapangan Olahraga" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Lapangan Olahraga</h5>
                            <p>Fasilitas olahraga lengkap dan modern</p>
                        </div>
                    </div>
                    <!-- slide 4 -->
                    <div class="facility-item">
                        <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Studio Seni" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Studio Seni</h5>
                            <p>Pengembangan kreativitas dan bakat seni</p>
                        </div>
                    </div>
                    <!-- slide 5 -->
                    <div class="facility-item">
                        <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="profil/fasilitas/fasilitas.html" class="btn btn-member">
                    <i class="fas fa-eye me-2"></i> Lihat Semua Fasilitas
                </a>
            </div>
        </div>
    </section>


    <!-- Programs Section -->
    <section class="program py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Program Unggulan Kami</h2>
                <p class="section-subtitle">Inovasi pendidikan yang mempersiapkan siswa untuk masa depan</p>
            </div>
            
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="program-card text-white rounded-4 p-4 h-100 shadow-lg">
                        <div class="program-icon bg-white text-primary rounded-circle p-3 mb-4">
                            <i class="fas fa-globe fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Bilingual Program</h4>
                        <p class="mb-4">Program dwi bahasa (Indonesia-Inggris) dengan native speaker dan kurikulum internasional untuk mempersiapkan siswa menghadapi tantangan global.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check me-2"></i>Native English Teachers</li>
                            <li><i class="fas fa-check me-2"></i>Cambridge Curriculum</li>
                            <li><i class="fas fa-check me-2"></i>TOEFL/IELTS Preparation</li>
                        </ul>
                        <a href="program-bilingual.html" class="btn btn-pelajari">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="program-card text-white rounded-4 p-4 h-100 shadow-lg">
                        <div class="program-icon bg-white text-primary rounded-circle p-3 mb-4">
                            <i class="fas fa-book-quran fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Al-Hafidz Program</h4>
                        <p class="mb-4">Program Tahfidz dan pendalaman ilmu Al-Qur'an untuk membentuk generasi Qur'ani.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check me-2"></i>Tahfidz Al-Qur'an</li>
                            <li><i class="fas fa-check me-2"></i>Tajwid & Tafsir</li>
                            <li><i class="fas fa-check me-2"></i>Islamic Character Building</li>
                        </ul>
                        <a href="program-tahfidz.html" class="btn btn-pelajari">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="program-card text-white rounded-4 p-4 h-100 shadow-lg">
                        <div class="program-icon bg-white text-primary rounded-circle p-3 mb-4">
                            <i class="fas fa-laptop-code fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">STEM Excellence</h4>
                        <p class="mb-4">Program Science, Technology, Engineering, dan Mathematics dengan laboratorium canggih dan project-based learning untuk mengembangkan inovasi.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check me-2"></i>Robotics & AI Lab</li>
                            <li><i class="fas fa-check me-2"></i>3D Printing Workshop</li>
                            <li><i class="fas fa-check me-2"></i>Coding Bootcamp</li>
                        </ul>
                        <a href="program-stem.html" class="btn btn-pelajari">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                
                <!-- Card 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="program-card text-white rounded-4 p-4 h-100 shadow-lg">
                        <div class="program-icon bg-white text-primary rounded-circle p-3 mb-4">
                            <i class="fas fa-users fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Leadership Academy</h4>
                        <p class="mb-4">Program pengembangan kepemimpinan dan soft skills melalui berbagai kegiatan organisasi, public speaking, dan community service.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check me-2"></i>Student Government</li>
                            <li><i class="fas fa-check me-2"></i>Public Speaking Club</li>
                            <li><i class="fas fa-check me-2"></i>Community Service</li>
                        </ul>
                        <a href="program-leadership.html" class="btn btn-pelajari">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Gallery Marquee Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Galeri Kegiatan</h2>
                <a href="galeri.html" class="btn btn-outline-theme">Lihat Semua</a>
            </div>

            <div class="gallery-marquee">
                <div class="gallery-track">
                    <!-- Repeat items (dua kali untuk loop mulus) -->
                    <div class="facility-item">
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer">
                    <div class="facility-overlay">
                        <h5>Laboratorium Komputer</h5>
                        <p>Teknologi terkini untuk pembelajaran digital</p>
                    </div>
                    </div>
                    <div class="facility-item">
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer">
                    <div class="facility-overlay">
                        <h5>Laboratorium Komputer</h5>
                        <p>Teknologi terkini untuk pembelajaran digital</p>
                    </div>
                    </div>
                    <div class="facility-item">
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer">
                    <div class="facility-overlay">
                        <h5>Laboratorium Komputer</h5>
                        <p>Teknologi terkini untuk pembelajaran digital</p>
                    </div>
                    </div>
                    <div class="facility-item">
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer">
                    <div class="facility-overlay">
                        <h5>Laboratorium Komputer</h5>
                        <p>Teknologi terkini untuk pembelajaran digital</p>
                    </div>
                    </div>

                    <!-- DUPLICATE untuk efek loop -->
                    <div class="facility-item">
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer">
                    <div class="facility-overlay">
                        <h5>Laboratorium Komputer</h5>
                        <p>Teknologi terkini untuk pembelajaran digital</p>
                    </div>
                    </div>
                    <div class="facility-item">
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer">
                    <div class="facility-overlay">
                        <h5>Laboratorium Komputer</h5>
                        <p>Teknologi terkini untuk pembelajaran digital</p>
                    </div>
                    </div>
                    <div class="facility-item">
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer">
                    <div class="facility-overlay">
                        <h5>Laboratorium Komputer</h5>
                        <p>Teknologi terkini untuk pembelajaran digital</p>
                    </div>
                    </div>
                    <div class="facility-item">
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer">
                    <div class="facility-overlay">
                        <h5>Laboratorium Komputer</h5>
                        <p>Teknologi terkini untuk pembelajaran digital</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- News & Events Section -->
    <div class="iframely-embed">

    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Berita & Acara Terbaru</h2>
                <a href="berita.html" class="btn btn-outline-theme">Lihat Semua</a>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="news-card bg-white rounded-4 overflow-hidden shadow-sm h-100">
                        <div class="news-image position-relative">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755442772/wisuda7_vshlpc.jpg" alt="Berita 1" class="img-fluid w-100">
                            <div class="news-badge bg-danger text-white position-absolute top-0 end-0 m-3">
                                <i class="fas fa-calendar-alt me-1"></i> 15 Jun 2023
                            </div>
                        </div>
                        <div class="news-content p-4">
                            <div class="news-category mb-2">
                                <span class="badge bg-primary">Pengumuman</span>
                            </div>
                            <h5 class="fw-bold mb-3">Penerimaan Siswa Baru Tahun Ajaran 2023/2024</h5>
                            <p class="text-muted mb-4">Pendaftaran siswa baru telah dibuka untuk semua jenjang pendidikan mulai tanggal 1 Juli 2023.</p>
                            <a href="berita-detail.html" class="btn btn-link ps-0 text-decoration-none">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="news-card bg-white rounded-4 overflow-hidden shadow-sm h-100">
                        <div class="news-image position-relative">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755442772/wisuda7_vshlpc.jpg" alt="Berita 2" class="img-fluid w-100">
                            <div class="news-badge bg-danger text-white position-absolute top-0 end-0 m-3">
                                <i class="fas fa-calendar-alt me-1"></i> 10 Jun 2023
                            </div>
                        </div>
                        <div class="news-content p-4">
                            <div class="news-category mb-2">
                                <span class="badge bg-success">Prestasi</span>
                            </div>
                            <h5 class="fw-bold mb-3">Siswa Sekolah Unggulan Raih Medali Emas Olimpiade Sains Nasional</h5>
                            <p class="text-muted mb-4">Tim olimpiade sains kami berhasil meraih 3 medali emas dalam OSN tingkat provinsi.</p>
                            <a href="berita-detail.html" class="btn btn-link ps-0 text-decoration-none">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="news-card bg-white rounded-4 overflow-hidden shadow-sm h-100">
                        <div class="news-image position-relative">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755442772/wisuda7_vshlpc.jpg" alt="Berita 3" class="img-fluid w-100">
                            <div class="news-badge bg-danger text-white position-absolute top-0 end-0 m-3">
                                <i class="fas fa-calendar-alt me-1"></i> 5 Jun 2023
                            </div>
                        </div>
                        <div class="news-content p-4">
                            <div class="news-category mb-2">
                                <span class="badge bg-info">Kegiatan</span>
                            </div>
                            <h5 class="fw-bold mb-3">Kegiatan Outbound Tahunan untuk Pembentukan Karakter Siswa</h5>
                            <p class="text-muted mb-4">Siswa kelas X mengikuti kegiatan outbound di kawasan Puncak untuk melatih kerja sama tim.</p>
                            <a href="berita-detail.html" class="btn btn-link ps-0 text-decoration-none">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Alumni Success Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Daftar Kunjungan</h2>
                <p class="section-subtitle">Mereka yang telah melihat bukti kualitas pendidikan kami</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="alumni-card bg-light rounded-4 p-4 text-center h-100">
                        <div class="alumni-photo mb-4">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755302400/samples/people/boy-snow-hoodie.jpg" alt="Ustadz Ahmad Kainama" class="rounded-circle img-thumbnail" width="120" style="width: 150px; height: 150px;object-fit: cover;">
                        </div>
                        <h5 class="fw-bold mb-1">Ustadz Ahmad Kainama</h5>
                        <span class="badge bg-primary mb-3">Pakar Kristologi</span>
                        <p class="mb-3">"Pendidikan karakter yang kuat di Sekolah Unggulan membentuk saya menjadi dokter yang tidak hanya kompeten secara medis, tetapi juga memiliki empati tinggi terhadap pasien."</p>
                        <div class="alumni-achievements">
                            <small class="text-muted">
                                <i class="fas fa-trophy text-warning me-1"></i>Dokter Terbaik RS. Nasional 2023<br>
                                <i class="fas fa-graduation-cap text-primary me-1"></i> S3/Doktor Misionaris
                            </small>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="alumni-card bg-light rounded-4 p-4 text-center h-100">
                        <div class="alumni-photo mb-4">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755302400/samples/people/boy-snow-hoodie.jpg" alt="Budi Santoso" class="rounded-circle img-thumbnail" width="120" style="width: 150px; height: 150px;object-fit: cover;">
                        </div>
                        <h5 class="fw-bold mb-1">Ustadz Farrel Muhammad Rizqy</h5>
                        <span class="badge bg-success mb-3">Islamic Social Finance</span>
                        <p class="mb-3">"Program STEM dan leadership academy di sekolah ini menjadi fondasi kuat untuk membangun startup teknologi yang kini bernilai miliaran rupiah."</p>
                        <div class="alumni-achievements">
                            <small class="text-muted">
                                <i class="fas fa-trophy text-warning me-1"></i>DPS Bank DKI<br>
                                <i class="fas fa-building text-success me-1"></i> Founder TechInnovate Indonesia
                            </small>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="alumni-card bg-light rounded-4 p-4 text-center h-100">
                        <div class="alumni-photo mb-4">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755302400/samples/people/boy-snow-hoodie.jpg" alt="Maya Putri" class="rounded-circle img-thumbnail" width="120" style="width: 150px; height: 150px;object-fit: cover;">
                        </div>
                        <h5 class="fw-bold mb-1">Sintiawati</h5>
                        <span class="badge bg-info mb-3">Diplomat</span>
                        <p class="mb-3">"Bilingual program dan pendidikan global mindset di sekolah ini mempersiapkan saya dengan sangat baik untuk berkarir di dunia diplomasi internasional."</p>
                        <div class="alumni-achievements">
                            <small class="text-muted">
                                <i class="fas fa-trophy text-warning me-1"></i> Young Diplomat Award UN 2023<br>
                                <i class="fas fa-globe text-info me-1"></i> Konsul Jenderal RI di Singapura
                            </small>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="alumni-card bg-light rounded-4 p-4 text-center h-100">
                        <div class="alumni-photo mb-4">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755302400/samples/people/boy-snow-hoodie.jpg" alt="Rudi Hermawan" class="rounded-pill img-thumbnail" width="120" style="width: 150px; height: 150px;object-fit: cover;">
                        </div>
                        <h5 class="fw-bold mb-1">Rudi Hermawan</h5>
                        <span class="badge bg-warning mb-3">Atlet Nasional</span>
                        <p class="mb-3">"Fasilitas olahraga yang lengkap dan pelatih profesional di sekolah ini membantu saya mengembangkan bakat atletik hingga tingkat nasional."</p>
                        <div class="alumni-achievements">
                            <small class="text-muted">
                                <i class="fas fa-trophy text-warning me-1"></i> Medali Emas SEA Games 2023<br>
                                <i class="fas fa-running text-danger me-1"></i> Atlet Lari Nasional
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="kunjungan.html" class="btn btn-outline-theme btn-lg">
                    <i class="fas fa-users me-2"></i> Lihat Daftar Kunjungan Lainnya
                </a>
            </div>
        </div>
    </section>


    <!-- Registration Section -->
    <section id="pendaftaran" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">

            <!-- Kiri (Ajakan Daftar) -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-3">Tertarik Bergabung dengan Kami?</h2>
                <p class="lead mb-4">Daftarkan anak Anda sekarang dan raih masa depan gemilang bersama pendidikan terbaik!</p>
                <div class="d-flex flex-wrap gap-3">
                <a href="ppdb/info-ppdb.html" class="btn btn-member btn-lg px-4 cta-pulse" style="border-radius: 10px;">
                    <i class="fas fa-user-plus me-2"></i> Daftar Online
                </a>
                <a href="kontak.html" class="btn btn-outline-theme btn-lg px-4">
                    <i class="fas fa-map-marker-alt me-2"></i> Kunjungi Sekolah
                </a>
                </div>
            </div>

            <!-- Kanan (Iklan Singkat & Menjual) -->
            <div class="col-lg-6">
                <div class="promo-box p-4 shadow-lg rounded-4 bg-white text-center position-relative overflow-hidden">

                    <!-- Badge Urgensi -->
                    <span class="badge bg-danger text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill animate__animated animate__pulse animate__infinite">
                        Kuota Terbatas!
                    </span>

                    <!-- Gambar Promo -->
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755442772/wisuda7_vshlpc.jpg" alt="Promo PPDB" class="img-fluid rounded-3 mb-3">

                    <!-- Headline Singkat & Menjual -->
                    <h3 class="fw-bold text-theme mb-4">Sekolah Terbaik, Masa Depan Cemerlang!</h3>

                    <!-- Selling Points Ringkas -->
                    <div class="d-flex justify-content-around mb-4">
                        <div class="text-center">
                        <i class="fas fa-book-reader fa-2x text-primary mb-2"></i>
                        <p class="mb-0 fw-semibold">Kurikulum Modern</p>
                        </div>
                        <div class="text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-primary mb-2"></i>
                        <p class="mb-0 fw-semibold">Guru Profesional</p>
                        </div>
                        <div class="text-center">
                        <i class="fas fa-trophy fa-2x text-primary mb-2"></i>
                        <p class="mb-0 fw-semibold">Prestasi Nasional</p>
                        </div>
                    </div>

                    <!-- CTA -->
                    <a href="https://nurulfitri.cazh.id/ppdb/ponpes-nurul-fitri/registration" class="btn btn-theme btn-lg rounded-pill px-5 py-3 fw-bold registration-btn">
                        <i class="fas fa-bolt me-2"></i> Daftar Sekarang
                    </a>
                </div>
            </div>

            </div>
        </div>
    </section>

    <!-- Enhanced Footer -->
    @includeIf('partials.footer')

    <!-- Modal Tidak Ada Jadwal Pendaftaran -->
    <div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 overflow-hidden">
                <!-- Modal Header dengan gradient seperti topbar -->
                <div class="modal-header text-white" style="background: linear-gradient(90deg, var(--toska-1), #12cfa6 60%); border: none;">
                    <h5 class="modal-title fw-bold" id="scheduleModalLabel"><i class="fas fa-calendar-alt me-2"></i> Informasi Pendaftaran</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <!-- Modal Body -->
                <div class="modal-body text-center py-4 px-5">
                    <div class="mb-4">
                        <div class="bg-light rounded-circle d-inline-flex p-4 mb-3" style="background-color: rgba(30, 132, 73, 0.1) !important;">
                            <i class="fas fa-calendar-times fa-3x" style="color: var(--toska-1);"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color: var(--toska-1);">Tidak Ada Jadwal Pendaftaran</h4>
                        <p class="text-muted">Pendaftaran PPDB Pesantren Arrahman belum dibuka atau sudah ditutup.</p>
                        <div class="alert alert-light mt-3 d-inline-block" style="background-color: rgba(30, 132, 73, 0.05); border-left: 4px solid var(--toska-1);">
                            <p class="mb-0">
                                <strong style="color: var(--toska-1);">Periode Pendaftaran:</strong><br>
                                <span class="text-dark">1 Januari - 30 April 2024</span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Modal Footer -->
                <div class="modal-footer justify-content-center border-0 pt-0 pb-4">
                    <button type="button" class="btn btn-outline-light px-4" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Tutup
                    </button>
                    <a href="#informasi" class="btn btn-primary px-4" style="background: linear-gradient(90deg, var(--toska-1), #12cfa6); border: none;">
                        <i class="fas fa-info-circle me-2"></i>Lihat Informasi
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Glide JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"></script>
    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- Waypoints -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <!-- Counter Up -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        // Tanggal periode pendaftaran
        const registrationStart = new Date('2024-01-01');
        const registrationEnd = new Date('2024-04-30');
        const currentDate = new Date();

        // Fungsi untuk memeriksa jadwal pendaftaran
        function checkRegistrationSchedule() {
            if (currentDate < registrationStart || currentDate > registrationEnd) {
                // Tampilkan modal jika di luar jadwal
                const scheduleModal = new bootstrap.Modal(document.getElementById('scheduleModal'));
                scheduleModal.show();
                return false;
            }
            return true;
        }

        // Terapkan hanya ke tombol daftar yang dibatasi
        document.addEventListener('DOMContentLoaded', function() {
            const restrictedButtons = document.querySelectorAll('.registration-btn');
            
            restrictedButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (!checkRegistrationSchedule()) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>


</body>
</html>
<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info PPDB - PTD Arrahman</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <!-- DotLottie Player -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <!-- Favicon -->
    <link rel="icon" href="https://res.cloudinary.com/dunynusuh/image/upload/v1755771459/Logo-Ar-Rahman_fm4mgg.png">
    <!-- Costom CSS -->
    <link rel="stylesheet" href="{{ asset('css/info-ppdb.css') }}">
</head>

<body>
@include('partials.header')
@include('partials.cursor')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-3 text-white">Penerimaan Peserta Didik Baru</h1>
                    <p class="lead mb-4 text-white">Tahun Ajaran 2024/2025 - Pesantren Tahfidz Qur'an dan Digital Arrahman</p>
                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                        <a href="#" class="btn btn-member btn-lg me-md-2 mb-3 mb-md-0 registration-btn">
                            <i class="fas fa-pencil-alt me-2"></i>Daftar Sekarang
                        </a>
                        <a href="#informasi" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-info-circle me-2"></i>Informasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section id="informasi" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Informasi PPDB 2024/2025</h2>
                <p class="lead text-muted">Selamat datang di portal Penerimaan Peserta Didik Baru Pesantren Arrahman</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="info-card-header">
                            <h4 class="mb-0"><i class="fas fa-graduation-cap me-2"></i>Program Unggulan</h4>
                        </div>
                        <div class="info-card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Tahfidz Qur'an</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Pendidikan Digital</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bahasa Arab & Inggris</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Pengembangan Karakter</li>
                                <li><i class="fas fa-check text-success me-2"></i>Kewirausahaan</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="info-card-header">
                            <h4 class="mb-0"><i class="fas fa-calendar-alt me-2"></i>Jadwal Penting</h4>
                        </div>
                        <div class="info-card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Pendaftaran:</strong> 1 Januari - 30 April 2024</li>
                                <li class="mb-2"><strong>Tes Seleksi:</strong> 5 Mei 2024</li>
                                <li class="mb-2"><strong>Pengumuman:</strong> 12 Mei 2024</li>
                                <li class="mb-2"><strong>Daftar Ulang:</strong> 13-20 Mei 2024</li>
                                <li><strong>Awal Masuk:</strong> 15 Juli 2024</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="info-card-header">
                            <h4 class="mb-0"><i class="fas fa-file-alt me-2"></i>Persyaratan</h4>
                        </div>
                        <div class="info-card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Foto Copy Akta Kelahiran</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Foto Copy KK</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Foto 3x4 (2 lembar)</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Rapor 2 Semester Terakhir</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i>Foto Copy Ijazah (jika ada)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <section class="py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="fw-bold mb-4">Mengapa Memilih Pesantren Arrahman?</h3>
                            <p class="text-muted mb-4">Pesantren Tahfidz Qur'an dan Digital Arrahman merupakan lembaga pendidikan yang mengintegrasikan pendidikan agama Islam dengan teknologi digital, membentuk generasi Qur'ani yang unggul dan kompetitif di era modern.</p>
                            
                            <div class="d-flex mb-3">
                                <div class="feature-icon me-4">
                                    <i class="fas fa-quran"></i>
                                </div>
                                <div>
                                    <h5>Tahfidz Qur'an</h5>
                                    <p class="text-muted mb-0">Program tahfidz dengan metode yang efektif dan menyenangkan</p>
                                </div>
                            </div>
                            
                            <div class="d-flex mb-3">
                                <div class="feature-icon me-4">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <div>
                                    <h5>Pendidikan Digital</h5>
                                    <p class="text-muted mb-0">Kurikulum berbasis teknologi untuk menghadapi era digital</p>
                                </div>
                            </div>
                            
                            <div class="d-flex">
                                <div class="feature-icon me-4">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h5>Pengembangan Karakter</h5>
                                    <p class="text-muted mb-0">Pembentukan akhlak mulia dan kepribadian Islami</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="illustration-container">
                                <!-- SVG Illustration with updated colors -->
                                <svg class="main-illustration" viewBox="0 0 600 500" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Background Circle -->
                                    <circle cx="300" cy="250" r="200" fill="#e6f7ee" opacity="0.8"/>
                                    
                                    <!-- Main Character -->
                                    <g transform="translate(200, 100)">
                                        <!-- Body -->
                                        <rect x="70" y="180" width="60" height="120" fill="#1E8449" rx="5"/>
                                        
                                        <!-- Head -->
                                        <circle cx="100" cy="150" r="40" fill="#ffd6cc"/>
                                        
                                        <!-- Face -->
                                        <circle cx="90" cy="140" r="4" fill="#333"/>
                                        <circle cx="110" cy="140" r="4" fill="#333"/>
                                        <path d="M90 160 Q100 170 110 160" stroke="#333" stroke-width="2" fill="none"/>
                                        
                                        <!-- Hijab -->
                                        <path d="M60 150 Q100 110 140 150 L130 190 L70 190 Z" fill="#145A32"/>
                                        
                                        <!-- Arms -->
                                        <rect x="50" y="190" width="20" height="60" fill="#ffd6cc" rx="10"/>
                                        <rect x="130" y="190" width="20" height="60" fill="#ffd6cc" rx="10"/>
                                        
                                        <!-- Quran Book -->
                                        <rect x="40" y="200" width="30" height="40" fill="#F6A21E" rx="3"/>
                                        <line x1="45" y1="210" x2="65" y2="210" stroke="#333" stroke-width="1"/>
                                        <line x1="45" y1="215" x2="65" y2="215" stroke="#333" stroke-width="1"/>
                                        <line x1="45" y1="220" x2="65" y2="220" stroke="#333" stroke-width="1"/>
                                        
                                        <!-- Laptop -->
                                        <rect x="135" y="200" width="40" height="30" fill="#e0e0e0" rx="2"/>
                                        <rect x="137" y="202" width="36" height="26" fill="#1E8449" rx="1"/>
                                        <rect x="140" y="230" width="34" height="5" fill="#c0c0c0" rx="1"/>
                                    </g>
                                    
                                    <!-- Decorative Elements -->
                                    <circle cx="150" cy="150" r="30" fill="#F6A21E" opacity="0.7"/>
                                    <circle cx="450" cy="200" r="40" fill="#2ECC71" opacity="0.5"/>
                                    <circle cx="400" cy="350" r="25" fill="#145A32" opacity="0.4"/>
                                    
                                    <!-- Digital Elements -->
                                    <g transform="translate(400, 100)" opacity="0.8">
                                        <rect x="0" y="0" width="40" height="40" fill="#1E8449" rx="5"/>
                                        <polygon points="10,15 20,25 30,10" fill="white"/>
                                    </g>
                                    
                                    <g transform="translate(100, 350)" opacity="0.8">
                                        <circle cx="0" cy="0" r="20" fill="#F6A21E"/>
                                        <text x="0" y="5" text-anchor="middle" fill="white" font-size="14" font-weight="bold">AI</text>
                                    </g>
                                </svg>
                                
                                <!-- Floating elements -->
                                <div class="floating-element element-1">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="floating-element element-2">
                                    <i class="fas fa-mosque"></i>
                                </div>
                                <div class="floating-element element-3">
                                    <i class="fas fa-microchip"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Alur Pendaftaran</h2>
                <p class="lead text-muted">Ikuti langkah-langkah berikut untuk proses pendaftaran</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="timeline">
                        <div class="timeline-item">
                            <h5>Pendaftaran Online</h5>
                            <p class="text-muted">Isi formulir pendaftaran online melalui website atau datang langsung ke pesantren</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Verifikasi Berkas</h5>
                            <p class="text-muted">Tim admin akan memverifikasi kelengkapan berkas pendaftaran Anda</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Tes Seleksi</h5>
                            <p class="text-muted">Mengikuti tes baca Qur'an, wawancara, dan tes akademik dasar</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Pengumuman Hasil</h5>
                            <p class="text-muted">Pengumuman hasil seleksi melalui website dan pengiriman email</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Daftar Ulang</h5>
                            <p class="text-muted">Melakukan daftar ulang dan pembayaran biaya pendidikan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Biaya Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Informasi Biaya Pendidikan</h2>
                <p class="lead text-muted">Investasi pendidikan untuk masa depan yang lebih baik</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="info-card text-center h-100">
                        <div class="info-card-header">
                            <h4 class="mb-0">Pendaftaran</h4>
                        </div>
                        <div class="info-card-body">
                            <h3 class="fw-bold text-primary">Rp 250.000</h3>
                            <p class="text-muted">Biaya pendaftaran sekali bayar (non-refundable)</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="info-card text-center h-100">
                        <div class="info-card-header">
                            <h4 class="mb-0">SPP Bulanan</h4>
                        </div>
                        <div class="info-card-body">
                            <h3 class="fw-bold text-primary">Rp 500.000</h3>
                            <p class="text-muted">Biaya pendidikan bulanan termasuk makan dan asrama</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="info-card text-center h-100">
                        <div class="info-card-header">
                            <h4 class="mb-0">Daftar Ulang</h4>
                        </div>
                        <div class="info-card-body">
                            <h3 class="fw-bold text-primary">Rp 2.500.000</h3>
                            <p class="text-muted">Biaya daftar ulang termasuk seragam dan buku pelajaran</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="info-card text-center h-100">
                        <div class="info-card-header">
                            <h4 class="mb-0">Beasiswa</h4>
                        </div>
                        <div class="info-card-body">
                            <h3 class="fw-bold text-primary">Tersedia</h3>
                            <p class="text-muted">Beasiswa prestasi dan tahfidz untuk siswa berprestasi</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="alert alert-primary mt-5 text-center">
                <h5 class="fw-bold"><i class="fas fa-info-circle me-2"></i>Informasi Penting</h5>
                <p class="mb-0">Biaya dapat dicicil dengan ketentuan tertentu. Hubungi admin untuk informasi lebih lanjut.</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Pertanyaan Umum</h2>
                <p class="lead text-muted">Temukan jawaban atas pertanyaan yang sering diajukan</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faq-item">
                        <div class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq1">
                            <span>Apa saja program unggulan di Pesantren Arrahman?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div id="faq1" class="collapse faq-answer">
                            Pesantren Arrahman memiliki beberapa program unggulan yaitu Tahfidz Qur'an, Pendidikan Digital, Bahasa Arab dan Inggris, Pengembangan Karakter, serta Kewirausahaan. Program-program ini dirancang untuk membentuk generasi Qur'ani yang kompeten di era digital.
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq2">
                            <span>Bagaimana sistem pembayaran biaya pendidikan?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div id="faq2" class="collapse faq-answer">
                            Pembayaran biaya pendidikan dapat dilakukan secara tunai atau dicicil dengan ketentuan tertentu. Untuk informasi lebih detail mengenai skema cicilan, silakan hubungi admin pesantren.
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq3">
                            <span>Apakah ada beasiswa untuk siswa berprestasi?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div id="faq3" class="collapse faq-answer">
                            Ya, pesantren menyediakan beasiswa untuk siswa yang memiliki prestasi akademik maupun non-akademik, serta beasiswa tahfidz untuk penghafal Qur'an. Informasi detail dapat diperoleh pada saat pendaftaran.
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq4">
                            <span>Bagaimana sistem asrama di Pesantren Arrahman?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div id="faq4" class="collapse faq-answer">
                            Pesantren menyediakan asrama yang nyaman dan kondusif untuk belajar. Setiap kamar dilengkapi fasilitas lengkap dan didampingi oleh pembina asrama yang berpengalaman. Asrama putra dan putri terpisah dengan pengawasan ketat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="pendaftaran" class="py-5 bg-gradient-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="fw-bold">Segera Daftarkan Masa Depan Anda</h2>
                    <p class="lead mb-0">Jangan lewatkan kesempatan untuk memberikan pendidikan terbaik bagi generasi penerus</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#" class="btn btn-outline-theme btn-lg px-4 py-3 fw-bold" data-bs-toggle="modal" data-bs-target="#scheduleModal">
                        <i class="fas fa-user-graduate me-2"></i>Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Kontak Informasi</h2>
                <p class="lead text-muted">Hubungi kami untuk informasi lebih lanjut</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="feature-icon mx-auto mb-3">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5>Alamat</h5>
                        <p class="text-muted">Jl. Pendidikan No. 123, Kec. Cibiru, Kota Bandung, Jawa Barat</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="feature-icon mx-auto mb-3">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h5>Telepon</h5>
                        <p class="text-muted">+62 08-9866-9902</p>
                        <p class="text-muted">+62 22-8765-4321</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="feature-icon mx-auto mb-3">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Email</h5>
                        <p class="text-muted">info@sekolahunggulan.sch.id</p>
                        <p class="text-muted">ppdb@arrahmanship.sch.id</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- PPDB Footer -->
    <section class="py-5 py-lg-10 bg-gradient-primary text-white position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10" style="background-image: url('https://nurulfitri.cazh.id/assets/png/ppdb/dot.png'); background-repeat: repeat;"></div>
        <div class="position-absolute top-0 end-0" style="transform: rotate(10deg);">
            <img src="https://nurulfitri.cazh.id/assets/png/ppdb/crown.png" alt="Decoration" style="height: 120px;">
        </div>
        
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="display-4 fw-bold mb-4">Ayo Daftar Sekarang!</h2>
                    <p class="lead mb-5">Jangan lewatkan kesempatan untuk bergabung dengan Pesantren Tahfidz Qur'an dan Digital Arrahman. <br>Daftarkan putra/putri Anda sekarang sebelum kuota penuh!</p>
                    
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="https://nurulfitri.cazh.id/ppdb/ponpes-nurul-fitri/registration" class="btn btn-member btn-lg rounded-pill px-5 py-3 fw-bold registration-btn">
                            <i class="fas fa-user-plus me-2"></i> Daftar Sekarang
                        </a>
                        <a href="#" class="btn btn-outline-theme btn-lg rounded-pill px-5 py-3 fw-bold">
                            <i class="fas fa-question-circle me-2"></i> Tanya Panitia
                        </a>
                    </div>
                    
                    <div class="mt-5">
                        <div class="d-flex flex-wrap justify-content-center gap-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle fa-2x text-warning me-3"></i>
                                <div>
                                    <h5 class="mb-0">100% Hafalan Terjaga</h5>
                                    <small>Metode tahfidz yang terbukti efektif</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle fa-2x text-warning me-3"></i>
                                <div>
                                    <h5 class="mb-0">Fasilitas Lengkap</h5>
                                    <small>Asrama nyaman dan laboratorium digital</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle fa-2x text-warning me-3"></i>
                                <div>
                                    <h5 class="mb-0">Guru Berpengalaman</h5>
                                    <small>Pengajar kompeten dan bersertifikat</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Tidak Ada Jadwal Pendaftaran -->
    <div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 overflow-hidden">
                <!-- Modal Header dengan gradient seperti topbar -->
                <div class="modal-header bg-gradient-primary text-white" style="background: linear-gradient(90deg, var(--toska-1), #12cfa6 60%); border: none;">
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
                    <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Tutup
                    </button>
                    <a href="#informasi" class="btn btn-primary px-4" style="background: linear-gradient(90deg, var(--toska-1), #12cfa6); border: none;">
                        <i class="fas fa-info-circle me-2"></i>Lihat Informasi
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
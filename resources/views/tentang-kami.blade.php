<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil PTD Arrahman</title>
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
    <!-- Glide.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/tentang-kami.css') }}">
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

<!-- Glide.js JS -->
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    new Glide('.glide', {
      type: 'carousel',
      autoplay: 3000,   // auto slide tiap 3 detik
      hoverpause: true, // berhenti kalau di-hover
      perView: 1,       // tampil 1 slide per view
      animationDuration: 800 // kecepatan transisi
    }).mount();
  });
</script>


<body data-bs-spy="scroll" data-bs-target=".navbar">
@include('partials.header')
@include('partials.cursor')

    <!-- CARD TITLE -->
  <div class="container-fluid">
    <div class="card page-title-card">
      <div class="card-body p-2">
        <h1>Tentang Kami</h1>
        <h2>Pesantren Tahfidz Qur'an dan Digital Arrahman</h2>
        <div class="divider"></div>
        <a href="#" class="comment-link"><i class="bi bi-chat-dots"></i> Comment</a>
      </div>
    </div>
  </div>

    <!-- Tentang Kami -->
    <section class="tentang-sekolah py-5 bg-white">
        <div class="container">
            <div class="row align-items-center mb-5">
                <!-- Kiri: Label + Deskripsi -->
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="label-tentang mb-3">
                        <span class="label-left">TENTANG</span>
                        <span class="label-right">SEKOLAH KAMI :</span>
                    </div>
                    <p class="mt-4 fs-5">
                        Sekolah kami menyediakan fasilitas modern, program unggulan, dan lingkungan belajar
                        yang menyenangkan untuk membentuk generasi cerdas, berakhlak, dan berwawasan global.
                    </p>
                </div>

                <!-- Kanan: Carousel -->
                <div class="col-lg-6 col-md-12">
                    <div class="facility-carousel">
                        <div class="glide">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <div class="facility-item">
                                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Sains" class="img-fluid rounded">
                                            <div class="facility-overlay">
                                                <h5>Laboratorium Sains</h5>
                                                <p>Peralatan modern untuk eksperimen sains</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slide">
                                        <div class="facility-item">
                                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Perpustakaan Digital" class="img-fluid rounded">
                                            <div class="facility-overlay">
                                                <h5>Perpustakaan Digital</h5>
                                                <p>50.000+ koleksi buku fisik dan digital</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slide">
                                        <div class="facility-item">
                                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755442772/wisuda7_vshlpc.jpg" alt="Lapangan Olahraga" class="img-fluid rounded">
                                            <div class="facility-overlay">
                                                <h5>Lapangan Olahraga</h5>
                                                <p>Fasilitas olahraga lengkap dan modern</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-4">
                <div class="row g-4">
                    <!-- Kolom Kiri - Visi Misi Tujuan -->
                    <div class="col-lg-6">
                        <div class="section-box">
                            <div class="misi-title">VISI</div>
                            <p class="visi-text">
                                “ Menjadi <span class="visi-highlight">Lembaga Pendidikan Terbaik</span> bagi generasi Islam 
                                dengan memberikan penghayatan dan bekal hidup agar dapat berkembang menjadi generasi Islam 
                                yang berakhlak mulia, berkepribadian kuat, <span class="visi-highlight">memiliki kompetensi 
                                hafizh Al-Quran dan IT</span> serta berjiwa mandiri dan mempunyai daya juang tinggi dalam menghadapi 
                                tantangan masa depan “
                            </p>

                            <div class="misi-title">MISI</div>
                            <ol>
                                <li>Menciptakan lingkungan yang islami, bersih, nyaman, dan bersahabat</li>
                                <li>Menumbuhkan akidah yang lurus, berakhlak mulia, berkepribadian kuat, dan berdaya juang tinggi</li>
                                <li>Mencetak generasi penerus yang hafal Al-Quran</li>
                                <li>Memiliki kemampuan dalam bidang informasi & technology</li>
                                <li>Menjalin kerjasama dengan berbagai pihak baik dalam dan luar negeri untuk meningkatkan mutu pendidikan</li>
                            </ol>

                            <div class="tujuan-title">TUJUAN</div>
                            <ol>
                                <li>Membangun peradaban Islam di muka bumi</li>
                                <li>Menumbuhkan kecintaan pada Allah dan Rasul-Nya</li>
                                <li>Membentuk generasi muslim yang memahami Islam</li>
                                <li>Meningkatkan mutu pendidikan Islam melalui inovasi dan teknologi</li>
                                <li>Mencetak para pemimpin muslim dan penggerak dakwah</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Kolom Kanan - Nilai Santri -->
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <div class="title-main">NILAI SANTRI</div>
                            <div class="subtitle">Pesantren Tahfiz Quran dan Digital Ar-Rahman</div>
                        </div>
                    
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="nilai-section-box">
                                    <div class="section-title">AKIDAH AKHLAK</div>
                                    <ul>
                                        <li class="akidah-text">Bertaqwa</li>
                                        <li>Jujur</li>
                                        <li>Amanah</li>
                                        <li class="perubahan-text">Pembawa Perubahan</li>
                                        <li>Lebih Baik</li>
                                        <li>Berjiwa Sosial</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="nilai-section-box">
                                    <div class="section-title">MENTAL KARAKTER</div>
                                    <ul>
                                        <li class="mental-text">Rajin</li>
                                        <li>Disiplin</li>
                                        <li>Percaya Diri</li>
                                        <li>Tangguh</li>
                                        <li>Kreatif</li>
                                        <li>Berani</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row text-center g-3 mb-4">
                            <div class="col-md-4">
                                <div class="highlight-shalih">SHALIH</div>
                                <div class="nilai-section-box mt-2">
                                    <p>Al-Quran</p>
                                    <p>Keislaman</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="highlight-cerdas">CERDAS</div>
                                <div class="nilai-section-box mt-2">
                                    <p>Bahasa</p>
                                    <p>Fisik</p>
                                    <p>Social Relationship</p>
                                    <p>Ekstrakurikuler</p>
                                    <p>Umum</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="highlight-kompeten">KOMPETEN</div>
                                <div class="nilai-section-box mt-2">
                                    <p>Digital - IT</p>
                                    <p>Leadership</p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="footer-text">
                            Jadilah Generasi Rahmatan Lil ‘Alamin
                        </div>
                        <ul class="footer-small">
                            <li>Perubahan diri sendiri</li>
                            <li>Keberanian mencetak satu langkah</li>
                            <li>Pantang menunda</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Program Cards -->
            <div class="row g-4 mt-2">
                <div class="col-lg-3 col-md-6">
                    <div class="program-card p-4 h-100">
                        <div class="program-icon">
                            <i class="fas fa-globe fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Bilingual Program</h4>
                        <p>Program dwi bahasa (Indonesia-Inggris) dengan native speaker dan kurikulum internasional.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="program-card p-4 h-100">
                        <div class="program-icon">
                            <i class="fas fa-laptop-code fs-2 text-success"></i>
                        </div>
                        <h4 class="fw-bold mb-3">STEM Excellence</h4>
                        <p>Program Science, Technology, Engineering, dan Mathematics dengan laboratorium canggih.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="program-card p-4 h-100">
                        <div class="program-icon">
                            <i class="fas fa-book-quran fs-2 text-toska"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Al-Qur'an</h4>
                        <p>Program Tahfidz dan pendalaman ilmu Al-Qur’an untuk membentuk generasi Qur’ani.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="program-card p-4 h-100">
                        <div class="program-icon">
                            <i class="fas fa-users fs-2 text-warning"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Leadership Academy</h4>
                        <p>Pengembangan kepemimpinan dan soft skills melalui berbagai kegiatan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Sejarah Section -->
    <section class="sejarah-section py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="display-4 fw-bold mb-3">Sejarah <span class="text-toska">Kami</span></h2>
                <div class="divider mx-auto"></div>
                <p class="lead text-muted">Perjalanan panjang kami dalam membangun pendidikan berkualitas</p>
            </div>

            <div class="timeline-wrapper">
                <div class="timeline-line"></div>
                
                <!-- Timeline Item 1 -->
                <div class="timeline-item">
                    <div class="timeline-dot bg-toska"></div>
                    <div class="timeline-content animate__animated animate__fadeIn">
                        <div class="timeline-year text-toska fw-bold">2005</div>
                        <div class="timeline-card card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Pendirian Sekolah</h4>
                                <p class="card-text">Sekolah Unggulan Masa Depan didirikan dengan visi menjadi lembaga pendidikan terdepan yang mengintegrasikan nilai-nilai keislaman dengan kurikulum modern.</p>
                                <div class="timeline-image">
                                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Pendirian Sekolah" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="timeline-item">
                    <div class="timeline-dot bg-toska"></div>
                    <div class="timeline-content animate__animated animate__fadeIn">
                        <div class="timeline-year text-toska fw-bold">2010</div>
                        <div class="timeline-card card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Akreditasi Pertama</h4>
                                <p class="card-text">Memperoleh akreditasi A dari Badan Akreditasi Nasional untuk pertama kalinya, menjadi bukti komitmen kami terhadap kualitas pendidikan.</p>
                                <div class="timeline-image">
                                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Akreditasi" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="timeline-item">
                    <div class="timeline-dot bg-toska"></div>
                    <div class="timeline-content animate__animated animate__fadeIn">
                        <div class="timeline-year text-toska fw-bold">2015</div>
                        <div class="timeline-card card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Ekspansi Kampus</h4>
                                <p class="card-text">Pembangunan kampus baru dengan fasilitas modern di area seluas 5 hektar untuk mendukung proses belajar mengajar yang lebih baik.</p>
                                <div class="timeline-image">
                                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Kampus Baru" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="timeline-item">
                    <div class="timeline-dot bg-toska"></div>
                    <div class="timeline-content animate__animated animate__fadeIn">
                        <div class="timeline-year text-toska fw-bold">2020</div>
                        <div class="timeline-card card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Program Internasional</h4>
                                <p class="card-text">Meluncurkan program kelas internasional dengan kurikulum Cambridge dan kerjasama dengan berbagai sekolah di luar negeri.</p>
                                <div class="timeline-image">
                                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Program Internasional" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 5 -->
                <div class="timeline-item">
                    <div class="timeline-dot bg-toska"></div>
                    <div class="timeline-content animate__animated animate__fadeIn">
                        <div class="timeline-year text-toska fw-bold">2025</div>
                        <div class="timeline-card card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Pencapaian Terkini</h4>
                                <p class="card-text">Sekarang kami menjadi salah satu sekolah unggulan terbaik di Indonesia dengan berbagai prestasi di tingkat nasional dan internasional.</p>
                                <div class="timeline-image">
                                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Prestasi" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Footer -->
    @include('partials.footer')

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
    <script src="js/tentang-kami.js"></script>
</body>
</html>
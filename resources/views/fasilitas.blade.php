<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas PTD Arrahman</title>
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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
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
<body data-bs-spy="scroll" data-bs-target=".navbar">

    @include('partials.header')

    <!-- CARD TITLE -->
    <div class="container-fluid">
        <div class="card page-title-card">
        <div class="card-body p-2">
            <h1>Fasilitas</h1>
            <h2>Pesantren Tahfidz Qur'an dan Digital Arrahman</h2>
            <div class="divider"></div>
            <a href="#" class="comment-link"><i class="bi bi-chat-dots"></i> Comment</a>
        </div>
        </div>
    </div>

    <!-- Fasilitas Sekolah -->
    <section class="facilities-section py-6 bg-white">
        <div class="container">
            <div class="section-header text-center">
            <h2 class="fw-bold" style="padding-top: 25px;">Sarana dan Prasarana</h2>
            <p class="section-subtitle">Lingkungan belajar yang mendukung pengembangan optimal siswa</p>
            </div>
            
            <div class="row align-items-center">
            <!-- Left Column: Label + Description -->
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 pe-lg-5">
                <div class="label-tentang">
                <span class="label-left">FASILITAS</span>
                <span class="label-right">SEKOLAH KAMI</span>
                </div>
                <p class="mt-3 fs-5 tentang-deskripsi">
                Sekolah kami menyediakan fasilitas modern, program unggulan, dan lingkungan belajar
                yang menyenangkan untuk membentuk generasi cerdas, berakhlak, dan berwawasan global.
                </p>
                
                <div class="mt-4 d-flex gap-3">
                <button class="btn btn-member btn-lg" style="border-radius: 10px;">
                    <i class="fas fa-calendar-alt "></i> Jadwal Tur
                </button>
                <button class="btn btn-outline-theme btn-lg">
                    <i class="fas fa-images me-2"></i> Galeri Lengkap
                </button>
                </div>
            </div>

            <!-- Right Column: Carousel -->
            <div class="col-lg-6 col-md-12">
                <div class="facility-carousel">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                        <div class="facility-item">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" 
                                alt="Laboratorium Sains" 
                                class="img-fluid">
                            <div class="facility-overlay">
                            <h5>Laboratorium Sains</h5>
                            <p>Peralatan modern untuk eksperimen sains dengan teknologi terkini</p>
                            <button class="btn btn-sm btn-accent mt-2">Lihat Detail</button>
                            </div>
                        </div>
                        </li>
                        <li class="glide__slide">
                        <div class="facility-item">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" 
                                alt="Perpustakaan Digital" 
                                class="img-fluid">
                            <div class="facility-overlay">
                            <h5>Perpustakaan Digital</h5>
                            <p>50.000+ koleksi buku fisik dan digital dengan ruang baca yang nyaman</p>
                            <button class="btn btn-sm btn-accent mt-2">Lihat Detail</button>
                            </div>
                        </div>
                        </li>
                        <li class="glide__slide">
                        <div class="facility-item">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755442772/wisuda7_vshlpc.jpg" 
                                alt="Lapangan Olahraga" 
                                class="img-fluid">
                            <div class="facility-overlay">
                            <h5>Lapangan Olahraga</h5>
                            <p>Fasilitas olahraga lengkap dan modern untuk berbagai cabang olahraga</p>
                            <button class="btn btn-sm btn-accent mt-2">Lihat Detail</button>
                            </div>
                        </div>
                        </li>
                    </ul>
                    </div>
                    
                    <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    </div>
                    
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            
            <!-- Marquee Section -->
            <div class="facilities-marquee-container">
            <div class="container">
                <h4 class="text-center fw-bold ">Fasilitas Lainnya</h4>
                <div class="facilities-marquee">
                    <div class="facilities-track">
                        <!-- Items will be duplicated by JavaScript -->
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    @includeIf('partials.footer')
    @include('partials.cursor')

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
    <script src="{{ asset('js/fasilitas.js') }}"></script>
</body>
</html>
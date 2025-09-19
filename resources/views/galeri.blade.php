<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri PTD Arrahman</title>
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
    <link rel="stylesheet" href="{{ asset('css/galeri.css') }}">
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
                            <h1 class="display-3 fw-bold text-white mb-3 animate__animated animate__fadeInUp animate__delay-1s">Daftarkan Putra-Putri Anda</h1>
                            <p class="lead text-white mb-4 animate__animated animate__fadeInUp animate__delay-2s">Bentuk generasi qur'ani bersama keluarga besar PTD'</p>
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
                        <h1 class="display-3 fw-bold text-white mb-3 animate__animated animate__fadeInUp animate__delay-2s">Pendidikan Bernilai Qur'ani</h1>
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
                        <p class="lead text-white mb-4 animate__animated animate__fadeInUp animate__delay-3s">Kami siap membimbing dengan sepenuh hati</p>
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
        </button>  -->
    </section>

  <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                        <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Facilities Marquee -->
    <section class="py-5 bg-white">
    <div class="container"

        <div class="facilities-marquee">
        <div class="facilities-track">
            <!-- SET 1 -->
            <div class="facility-item">
            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Sains">
            <div class="facility-overlay">
                <h5>Laboratorium Sains</h5>
                <p>Peralatan modern untuk eksperimen sains</p>
            </div>
            </div>
            <div class="facility-item">
            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Perpustakaan Digital">
            <div class="facility-overlay">
                <h5>Perpustakaan Digital</h5>
                <p>50.000+ koleksi buku fisik dan digital</p>
            </div>
            </div>
            <div class="facility-item">
            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Lapangan Olahraga">
            <div class="facility-overlay">
                <h5>Lapangan Olahraga</h5>
                <p>Fasilitas olahraga lengkap dan modern</p>
            </div>
            </div>
            <div class="facility-item">
            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Studio Seni">
            <div class="facility-overlay">
                <h5>Studio Seni</h5>
                <p>Pengembangan kreativitas dan bakat seni</p>
            </div>
            </div>
            <div class="facility-item">
            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer">
            <div class="facility-overlay">
                <h5>Laboratorium Komputer</h5>
                <p>Teknologi terkini untuk pembelajaran digital</p>
            </div>
            </div>

            <!-- SET 2 (duplikasi untuk loop mulus) -->
            <div class="facility-item">
            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Sains">
            <div class="facility-overlay">
                <h5>Laboratorium Sains</h5>
                <p>Peralatan modern untuk eksperimen sains</p>
            </div>
            </div>
            <div class="facility-item">
            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Perpustakaan Digital">
            <div class="facility-overlay">
                <h5>Perpustakaan Digital</h5>
                <p>50.000+ koleksi buku fisik dan digital</p>
            </div>
            </div>
            <div class="facility-item">
            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Lapangan Olahraga">
            <div class="facility-overlay">
                <h5>Lapangan Olahraga</h5>
                <p>Fasilitas olahraga lengkap dan modern</p>
            </div>
            </div>
            <div class="facility-item">
            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Studio Seni">
            <div class="facility-overlay">
                <h5>Studio Seni</h5>
                <p>Pengembangan kreativitas dan bakat seni</p>
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


    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                        <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="facility-item">
                       <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg" alt="Laboratorium Komputer" class="img-fluid rounded">
                        <div class="facility-overlay">
                            <h5>Laboratorium Komputer</h5>
                            <p>Teknologi terkini untuk pembelajaran digital</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Footer -->
    @includeIf('partials.footer')

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
    <script src="{{ asset('js/galeri.js') }}"></script>
</body>
</html>
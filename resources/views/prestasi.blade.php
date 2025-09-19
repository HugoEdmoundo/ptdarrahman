<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi | PTD Arrahman</title>
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
    <link rel="stylesheet" href="{{ asset('css/prestasi.css') }}">
    <!-- Favicon -->
    <link rel="icon" href="https://res.cloudinary.com/dunynusuh/image/upload/v1755771459/Logo-Ar-Rahman_fm4mgg.png">
</head>
<body>
    @includeIf('partials.header')
    @include('partials.cursor')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="floating-icons">
            <div class="floating-icon" style="top: 20%; left: 10%; animation-delay: 0s;"><i class="fas fa-trophy"></i></div>
            <div class="floating-icon" style="top: 60%; left: 80%; animation-delay: 1s;"><i class="fas fa-medal"></i></div>
            <div class="floating-icon" style="top: 40%; left: 70%; animation-delay: 2s;"><i class="fas fa-award"></i></div>
            <div class="floating-icon" style="top: 70%; left: 15%; animation-delay: 3s;"><i class="fas fa-star"></i></div>
            <div class="floating-icon" style="top: 30%; left: 85%; animation-delay: 4s;"><i class="fas fa-graduation-cap"></i></div>
            <div class="floating-icon" style="top: 80%; left: 60%; animation-delay: 5s;"><i class="fas fa-lightbulb"></i></div>
        </div>
        
        <div class="container hero-content">
            <h1 class="display-3 fw-bold mb-4">Prestasi Membanggakan</h1>
            <p class="lead mb-5">Meski baru berusia 4 tahun, sekolah kami telah menorehkan berbagai prestasi membanggakan</p>
            <a href="#prestasi" class="btn btn-member btn-lg px-5 py-3 rounded-pill fw-bold">
                Telusuri Prestasi <i class="fas fa-arrow-down ms-2"></i>
            </a>
        </div>
    </section>

    <!-- Prestasi Section -->
    <section id="prestasi" class="prestasi-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold mb-3">Prestasi Kami</h2>
                <p class="lead">Berbagai pencapaian yang telah kami raih dalam waktu singkat</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="prestasi-card">
                        <div class="prestasi-img">
                            <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Olimpiade Sains">
                        </div>
                        <div class="prestasi-content">
                            <span class="prestasi-badge">Sains</span>
                            <h3>Juara Olimpiade Sains Regional</h3>
                            <p>Tim sains kami berhasil meraih juara 2 dalam Olimpiade Sains Regional tahun 2023.</p>
                            <div class="mt-auto pt-3">
                                <small class="text-muted"><i class="fas fa-calendar me-2"></i>Mei 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="prestasi-card">
                        <div class="prestasi-img">
                            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Olahraga">
                        </div>
                        <div class="prestasi-content">
                            <span class="prestasi-badge">Olahraga</span>
                            <h3>Juara 2 Basket Pelajar</h3>
                            <p>Tim basket kami menjadi runner-up dalam kejuaraan basket pelajar se-kota tahun 2023.</p>
                            <div class="mt-auto pt-3">
                                <small class="text-muted"><i class="fas fa-calendar me-2"></i>Agustus 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="prestasi-card">
                        <div class="prestasi-img">
                            <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Seni">
                        </div>
                        <div class="prestasi-content">
                            <span class="prestasi-badge">Seni</span>
                            <h3>Festival Seni Pelajar</h3>
                            <p>Kami meraih juara 3 dalam kategori paduan suara pada Festival Seni Pelajar Nasional 2022.</p>
                            <div class="mt-auto pt-3">
                                <small class="text-muted"><i class="fas fa-calendar me-2"></i>November 2022</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Journey Section - Desain Baru -->
    <section class="journey-section">
        <div class="journey-container container">
            <div class="journey-title">
                <h2 class="display-4 fw-bold">Perjalanan Prestasi</h2>
                <p class="lead">Tonggak-tonggak penting dalam perjalanan prestasi sekolah kami</p>
            </div>
            
            <div class="journey-cards">
                <div class="journey-card">
                    <div class="journey-year">2023</div>
                    <h3>Olimpiade Sains Regional</h3>
                    <p>Tim sains kami berhasil meraih juara 2 dalam Olimpiade Sains Regional dengan peserta dari 30 sekolah.</p>
                    <div class="journey-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                </div>
                
                <div class="journey-card">
                    <div class="journey-year">2022</div>
                    <h3>Festival Seni Pelajar</h3>
                    <p>Juara 3 paduan suara dalam Festival Seni Pelajar Nasional yang diikuti oleh 50 sekolah se-Indonesia.</p>
                    <div class="journey-icon">
                        <i class="fas fa-music"></i>
                    </div>
                </div>
                
                <div class="journey-card">
                    <div class="journey-year">2021</div>
                    <h3>Debat Bahasa Inggris</h3>
                    <p>Tim debat kami meraih juara harapan 1 dalam lomba debat bahasa Inggris antar sekolah se-provinsi.</p>
                    <div class="journey-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                </div>
                
                <div class="journey-card">
                    <div class="journey-year">2020</div>
                    <h3>Prestasi Pertama</h3>
                    <p>Pencapaian pertama kami sebagai sekolah baru dalam lomba cerdas cermat antar sekolah se-kota.</p>
                    <div class="journey-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                </div>
                
                <div class="journey-card">
                    <div class="journey-year">2019</div>
                    <h3>Sekolah Dibuka</h3>
                    <p>Pesantren Tahfidz Qur'an dan Digital Arrahman resmi dibuka dan memulai perjalanan pendidikan yang penuh prestasi.</p>
                    <div class="journey-icon">
                        <i class="fas fa-school"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievement Showcase -->
    <section class="showcase-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Galeri Penghargaan</h2>
                <p class="lead">Bukti nyata dedikasi dan kerja keras kami</p>
            </div>
            
            <div class="trophy-case">
                <div class="trophy-item">
                    <div class="trophy-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="trophy-count">5</div>
                    <div class="trophy-label">Juara 1</div>
                </div>
                
                <div class="trophy-item">
                    <div class="trophy-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="trophy-count">8</div>
                    <div class="trophy-label">Juara 2</div>
                </div>
                
                <div class="trophy-item">
                    <div class="trophy-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="trophy-count">12</div>
                    <div class="trophy-label">Juara 3</div>
                </div>
                
                <div class="trophy-item">
                    <div class="trophy-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="trophy-count">3</div>
                    <div class="trophy-label">Penghargaan Khusus</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="quote-section">
        <div class="container">
            <div class="quote-content">
                <div class="quote-icon">
                    <i class="fas fa-quote-left"></i>
                </div>
                <h2 class="mb-4">"Prestasi bukan hanya tentang menang, tetapi tentang proses belajar dan berkembang bersama."</h2>
                <p class="lead">- Pesantren Tahfidz Qur'an dan Digital Arrahman -</p>
                <a href="#prestasi" class="btn btn-outline-light btn-lg mt-4">
                    Lihat Prestasi Kami <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>
    @includeIf('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi scroll untuk navigasi
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Menambahkan lebih banyak floating icons
            const floatingIcons = document.querySelector('.floating-icons');
            const icons = ['fa-trophy', 'fa-medal', 'fa-award', 'fa-star', 'fa-graduation-cap', 'fa-lightbulb'];
            
            for (let i = 0; i < 10; i++) {
                const icon = document.createElement('div');
                icon.className = 'floating-icon';
                icon.innerHTML = `<i class="fas ${icons[Math.floor(Math.random() * icons.length)]}"></i>`;
                icon.style.top = `${Math.random() * 100}%`;
                icon.style.left = `${Math.random() * 100}%`;
                icon.style.animationDelay = `${Math.random() * 5}s`;
                icon.style.fontSize = `${Math.random() * 1.5 + 1.5}rem`;
                floatingIcons.appendChild(icon);
            }
        });
    </script>
</body>
</html>
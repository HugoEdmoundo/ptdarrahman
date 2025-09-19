<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurikulum | PTD Arrahman</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/kurikulum.css') }}">
    <!-- Favicon -->
    <link rel="icon" href="https://res.cloudinary.com/dunynusuh/image/upload/v1755771459/Logo-Ar-Rahman_fm4mgg.png">
</head>
<body>
    @include('partials.header')
    @include('partials.cursor')
    <!-- Hero Section -->
    <section class="hero-section" id="hero">
        <div class="hero-shape shape-1"></div>
        <div class="hero-shape shape-2"></div>
        <div class="hero-shape shape-3"></div>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto hero-content text-center">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">Pesantren Tahfidz Qur'an dan Digital Arrahman</h1>
                    <p class="lead mb-4 animate__animated animate__fadeIn animate__delay-1s">Mencetak Generasi Unggul Siap Kerja dan Berkarakter dengan Kurikulum Terdepan</p>
                    <div class="animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="#kurikulum" class="btn btn-warning btn-lg me-3 hover-lift">Jelajahi Kurikulum</a>
                        <a href="#ppdb" class="btn btn-outline-light btn-lg hover-lift">Info PPDB</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kurikulum Section -->
    <section class="kurikulum-section" id="kurikulum">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title text-center">Kurikulum Kami</h2>
                    <p class="lead">Kami menerapkan Kurikulum Merdeka yang berfokus pada pengembangan kompetensi dan karakter siswa</p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <div class="kurikulum-card text-center p-4 h-100 hover-lift">
                        <div class="kurikulum-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3>Kurikulum Merdeka</h3>
                        <p>Kurikulum Merdeka memberikan keleluasaan bagi sekolah untuk mengembangkan potensi siswa dengan pembelajaran yang relevan dan interaktif.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="kurikulum-card text-center p-4 h-100 hover-lift">
                        <div class="kurikulum-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Project Based Learning</h3>
                        <p>Pembelajaran berbasis proyek untuk mengasah kemampuan pemecahan masalah dan kolaborasi dalam tim.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="kurikulum-card text-center p-4 h-100 hover-lift">
                        <div class="kurikulum-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Link and Match Industri</h3>
                        <p>Kurikulum dirancang sesuai kebutuhan industri dengan magang dan praktik kerja lapangan.</p>
                    </div>
                </div>
            </div>

             <!-- Profil Kurikulum -->
            <div class="row mb-5" id="profil">
            <div class="col-12">
                <h2 class="section-title">Profil Kurikulum</h2>
            </div>
            <div class="col-lg-6">
                <p class="mb-4">Sekolah ini menerapkan <strong>Kurikulum Merdeka</strong> dengan pendekatan berbasis projek untuk mendukung pengembangan karakter dan kompetensi siswa. Kurikulum ini disusun berdasarkan Permendikbud terbaru serta kebijakan yayasan sekolah.</p>
                <p>Visi kurikulum adalah <em>“Mewujudkan peserta didik yang berkarakter, beriman, berilmu, dan berdaya saing global”</em>. Prinsip pembelajaran yang diterapkan: <strong>student centered</strong>, kolaboratif, dan kontekstual.</p>
            </div>
            <div class="col-lg-6">
                <div class="kurikulum-card p-4 h-100 hover-lift">
                    <div class="kurikulum-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="h4">Keunggulan Kurikulum Kami</h3>
                    <ul class="jurusan-features">
                        <li class="mb-2"><i class="fas fa-check-circle"></i> Berbasis Projek dan Kolaborasi</li>
                        <li class="mb-2"><i class="fas fa-check-circle"></i> Pengembangan Karakter dan Akademik</li>
                        <li class="mb-2"><i class="fas fa-check-circle"></i> Pembelajaran Kontekstual dan Aktual</li>
                        <li class="mb-2"><i class="fas fa-check-circle"></i> Berorientasi pada Keterampilan Abad 21</li>
                        <li class="mb-2"><i class="fas fa-check-circle"></i> Integrasi Teknologi dalam Pembelajaran</li>
                    </ul>
                </div>
            </div>
            </div>

            <!-- Struktur Mata Pelajaran -->
            <div class="row mb-5" id="struktur">
            <div class="col-12">
                <center><h2 class="section-title text-center">Struktur Mata Pelajaran</h2></center>
                <p class="text-center mb-5">Berikut contoh struktur mata pelajaran untuk jenjang SMA IPA:</p>
                
                <div class="table-responsive shadow-sm subject-table">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                    <tr>
                        <th>Mata Pelajaran</th>
                        <th>Kelas X</th>
                        <th>Kelas XI</th>
                        <th>Kelas XII</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr><td>Pendidikan Agama</td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td></tr>
                    <tr><td>Bahasa Indonesia</td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td></tr>
                    <tr><td>Matematika</td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td></tr>
                    <tr><td>Fisika</td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td></tr>
                    <tr><td>Kimia</td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td></tr>
                    <tr><td>Biologi</td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td></tr>
                    <tr><td>Bahasa Inggris</td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td></tr>
                    <tr><td>Informatika</td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td></tr>
                    <tr><td>PJOK</td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td></tr>
                    <tr><td>Seni Budaya</td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td><td><i class="fas fa-check check-icon"></i></td></tr>
                    </tbody>
                    <tfoot class="table-light">
                    <tr>
                        <th>Jumlah Mapel</th>
                        <th>10</th>
                        <th>10</th>
                        <th>10</th>
                    </tr>
                    </tfoot>
                </table>
                </div>
                
                <div class="alert alert-info mt-4">
                <i class="fas fa-info-circle me-2"></i> Struktur mata pelajaran dapat berubah sesuai dengan kebijakan kurikulum terbaru dari pemerintah dan kebutuhan sekolah.
                </div>
            </div>
            </div>

        </div>
    </section>

    <!-- Jurusan Section -->
    <section class="kurikulum-section bg-light py-5" id="jurusan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title text-center">Jurusan Kami</h2>
                    <p class="lead">Pilih jurusan yang sesuai dengan minat dan bakat Anda</p>
                </div>
            </div>

            <!-- RPL -->
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="jurusan-card h-100">
                        <div class="jurusan-img">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Rekayasa Perangkat Lunak">
                        </div>
                        <div class="jurusan-content">
                            <div class="jurusan-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3>Rekayasa Perangkat Lunak</h3>
                            <p>Membekali siswa dengan kemampuan pengembangan software, aplikasi mobile, dan web development.</p>
                            <ul class="jurusan-features">
                                <li><i class="fas fa-check-circle"></i> Pemrograman Web</li>
                                <li><i class="fas fa-check-circle"></i> Mobile Development</li>
                                <li><i class="fas fa-check-circle"></i> Database Management</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary btn-hover-lift">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="gradient-text">Rekayasa Perangkat Lunak</h3>
                    <p>Jurusan RPL mempersiapkan siswa untuk menjadi developer profesional dengan penguasaan berbagai bahasa pemrograman dan framework terkini.</p>
                    
                    <div class="icon-content">
                        <div class="icon-circle" style="--icon-color: #4e54c8; --icon-color-secondary: #8f94fb;">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Pemrograman Modern</h5>
                            <p class="mb-0 text-muted">HTML, CSS, JavaScript, PHP, Python</p>
                        </div>
                    </div>
                    
                    <div class="icon-content">
                        <div class="icon-circle" style="--icon-color: #6c63ff; --icon-color-secondary: #a89fff;">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Mobile Development</h5>
                            <p class="mb-0 text-muted">Android, iOS, Flutter, React Native</p>
                        </div>
                    </div>
                    
                    <div class="icon-content">
                        <div class="icon-circle" style="--icon-color: #11998e; --icon-color-secondary: #38ef7d;">
                            <i class="fas fa-database"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Database Management</h5>
                            <p class="mb-0 text-muted">MySQL, MongoDB, Firebase</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TKJ -->
            <div class="row mb-5 align-items-center flex-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="jurusan-card h-100">
                        <div class="jurusan-img">
                            <img src="https://images.unsplash.com/photo-1563207153-f403bf289096?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Teknik Komputer dan Jaringan">
                        </div>
                        <div class="jurusan-content">
                            <div class="jurusan-icon">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <h3>Teknik Komputer & Jaringan</h3>
                            <p>Membekali siswa dengan kemampuan instalasi, maintenance, dan administrasi jaringan komputer.</p>
                            <ul class="jurusan-features">
                                <li><i class="fas fa-check-circle"></i> Jaringan Nirkabel</li>
                                <li><i class="fas fa-check-circle"></i> Server Administration</li>
                                <li><i class="fas fa-check-circle"></i> Keamanan Jaringan</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary btn-hover-lift">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="gradient-text">Teknik Komputer & Jaringan</h3>
                    <p>Jurusan TKJ memfokuskan pada penguasaan teknologi jaringan komputer, server, dan keamanan cyber untuk memenuhi kebutuhan industri digital.</p>
                    
                    <div class="icon-content">
                        <div class="icon-circle" style="--icon-color: #556270; --icon-color-secondary: #ff6b6b;">
                            <i class="fas fa-server"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Administrasi Server</h5>
                            <p class="mb-0 text-muted">Windows Server, Linux, Cloud Computing</p>
                        </div>
                    </div>
                    
                    <div class="icon-content">
                        <div class="icon-circle" style="--icon-color: #4A00E0; --icon-color-secondary: #8E2DE2;">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Jaringan Nirkabel</h5>
                            <p class="mb-0 text-muted">Cisco, Mikrotik, Wireless Technology</p>
                        </div>
                    </div>
                    
                    <div class="icon-content">
                        <div class="icon-circle" style="--icon-color: #f46b45; --icon-color-secondary: #eea849;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Keamanan Jaringan</h5>
                            <p class="mb-0 text-muted">Cyber Security, Firewall, Ethical Hacking</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Multimedia -->
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="jurusan-card h-100">
                        <div class="jurusan-img">
                            <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Multimedia">
                        </div>
                        <div class="jurusan-content">
                            <div class="jurusan-icon">
                                <i class="fas fa-film"></i>
                            </div>
                            <h3>Multimedia</h3>
                            <p>Membekali siswa dengan kemampuan desain grafis, animasi, editing video, dan produksi konten digital.</p>
                            <ul class="jurusan-features">
                                <li><i class="fas fa-check-circle"></i> Desain Grafis</li>
                                <li><i class="fas fa-check-circle"></i> Animasi 2D & 3D</li>
                                <li><i class="fas fa-check-circle"></i> Video Production</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary btn-hover-lift">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="gradient-text">Multimedia</h3>
                    <p>Jurusan Multimedia mengembangkan kreativitas siswa dalam bidang desain grafis, animasi, dan produksi video untuk industri kreatif digital.</p>
                    
                    <div class="icon-content">
                        <div class="icon-circle" style="--icon-color: #ee0979; --icon-color-secondary: #ff6a00;">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Desain Grafis</h5>
                            <p class="mb-0 text-muted">Adobe Photoshop, Illustrator, InDesign</p>
                        </div>
                    </div>
                    
                    <div class="icon-content">
                        <div class="icon-circle" style="--icon-color: #834d9b; --icon-color-secondary: #d04ed6;">
                            <i class="fas fa-film"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Video Production</h5>
                            <p class="mb-0 text-muted">Adobe Premiere, After Effects, DaVinci Resolve</p>
                        </div>
                    </div>
                    
                    <div class="icon-content">
                        <div class="icon-circle" style="--icon-color: #0072ff; --icon-color-secondary: #00c6ff;">
                            <i class="fas fa-cube"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Animasi 3D</h5>
                            <p class="mb-0 text-muted">Blender, Maya, 3D Studio Max</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mitra Industri Section -->
    <section class="mitra-section" id="mitra">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title text-center">Mitra Industri</h2>
                    <p class="lead">Bekerja sama dengan perusahaan ternama untuk penempatan magang dan kerja</p>
                </div>
            </div>

            <div class="partner-scroll-container">
                <div class="partner-scroll">
                    <!-- Duplicate the logos to create seamless scroll -->
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/01/LG_logo_%282015%29.svg" alt="LG">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Toyota_2020_logo.svg" alt="Toyota">
                    </div>
                    <!-- Duplicate for seamless scroll -->
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/01/LG_logo_%282015%29.svg" alt="LG">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM">
                    </div>
                    <div class="partner-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Toyota_2020_logo.svg" alt="Toyota">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PPDB Section -->
    <section class="ppdb-section" id="ppdb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="ppdb-card">
                        <h2 class="mb-4">Persiapkan Masa Depanmu!</h2>
                        <p class="lead mb-4">Dapatkan informasi terbaru tentang Penerimaan Peserta Didik Baru SMK Negeri 1 Teknologi</p>
                        
                        <div class="mb-4">
                            <div class="ppdb-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                        </div>
                        
                        <p class="mb-4">Segera dapatkan informasi lengkap tentang program studi, persyaratan, dan jadwal pendaftaran</p>
                        
                        <a href="{{ url('info-ppdb') }}" class="btn btn-warning btn-lg me-3 hover-lift">Info Lebih Lanjut</a>
                        <a href="#" class="btn btn-outline-light btn-lg hover-lift">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Custom cursor
            const cursorDot = document.querySelector('.cursor-dot');
            const cursorOutline = document.querySelector('.cursor-outline');
            
            document.addEventListener('mousemove', function(e) {
                cursorDot.style.left = e.clientX + 'px';
                cursorDot.style.top = e.clientY + 'px';
                
                cursorOutline.style.left = e.clientX + 'px';
                cursorOutline.style.top = e.clientY + 'px';
            });
            
            // Interactive elements effect
            const interactiveElements = document.querySelectorAll('a, button, .hover-lift, .jurusan-card, .kurikulum-card');
            
            interactiveElements.forEach(element => {
                element.addEventListener('mouseenter', () => {
                    cursorDot.style.transform = 'translate(-50%, -50%) scale(1.5)';
                    cursorOutline.style.transform = 'translate(-50%, -50%) scale(1.2)';
                    cursorOutline.style.borderWidth = '1px';
                });
                
                element.addEventListener('mouseleave', () => {
                    cursorDot.style.transform = 'translate(-50%, -50%) scale(1)';
                    cursorOutline.style.transform = 'translate(-50%, -50%) scale(1)';
                    cursorOutline.style.borderWidth = '2px';
                });
            });
            
            // Animate elements on scroll
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.jurusan-card, .kurikulum-card');
                
                elements.forEach(element => {
                    const position = element.getBoundingClientRect();
                    
                    if(position.top < window.innerHeight - 100) {
                        element.style.opacity = 1;
                        element.style.transform = 'translateY(0)';
                    }
                });
            };
            
            // Initialize animation
            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll();
        });
    </script>
</body>
</html>
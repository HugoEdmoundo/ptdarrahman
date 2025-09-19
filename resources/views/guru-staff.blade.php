<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru & Staff | PTD Arrahman</title>
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
    <link rel="stylesheet" href="{{ asset('css/guru-staff.css') }}">
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
@include('partials.cursor')


    <div class="bg-pattern"></div>
    
    <!-- CARD TITLE -->
    <div class="container-fluid">
        <div class="card page-title-card">
            <div class="card-body p-2">
                <h1>Guru dan Staff</h1>
                <h2>Pesantren Tahfidz Qur'an dan Digital Arrahman</h2>
                <div class="divider"></div>
                <a href="#" class="comment-link"><i class="bi bi-chat-dots"></i> Comment</a>
            </div>
        </div>
    </div>
    
    <div class="page-container">
        <!-- Guru 1 -->
        <div class="teacher-profile">
            <div class="floating-shapes">
                <div class="shape shape-circle" style="top: 10%; right: 5%;"></div>
                <div class="shape shape-triangle" style="bottom: 15%; left: 8%; transform: rotate(45deg);"></div>
            </div>
            
            <div class="profile-content">
                <div class="profile-image">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Ustadz Ziyad Khairi">
                </div>
                
                <div class="profile-details">
                    <h2 class="teacher-name">Ustadz Ziyad Khairi Al-Hafidz S.E</h2>
                    <p class="teacher-bio">
                        Seorang pendidik dengan pengalaman lebih dari 15 tahun di dunia pendidikan. Menyelesaikan pendidikan doktoral dalam bidang Manajemen Pendidikan dengan penelitian tentang pengembangan model pembelajaran inovatif. Memiliki passion dalam menciptakan lingkungan belajar yang inspiratif dan menyenangkan bagi siswa dan rekan guru.
                    </p>
                    
                    <div class="teacher-contact">
                        <div class="contact-itm">
                            <i class="fas fa-envelope contact-icon"></i>
                            <span>zydkhari.gmail.com</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-phone contact-icon"></i>
                            <span>+62 812-3456-7890</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-graduation-cap contact-icon"></i>
                            <span>Spesialis Pendidikan Islam</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="teacher-roles">
                <div class="role-badge role-admin">
                    <i class="fas fa-crown role-icon"></i>
                    <span>Kepala Sekolah</span>
                </div>
                <div class="role-badge role-admin">
                    <i class="fas fa-chalkboard role-icon"></i>
                    <span>Guru Tuhfatul Athfal/Tajwid</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-book role-icon"></i>
                    <span>Pengajar Halaqoh Abu Bakar Ash-Shidiq</span>
                </div>
            </div>
        </div>

        <!-- Guru 2 -->
        <div class="teacher-profile">
            <div class="floating-shapes">
                <div class="shape shape-square" style="top: 20%; left: 5%; transform: rotate(20deg);"></div>
                <div class="shape shape-circle" style="bottom: 10%; right: 10%;"></div>
            </div>
            
            <div class="profile-content">
                <div class="profile-image">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Ustadz Murtadho Tumari">
                </div>
                
                <div class="profile-details">
                    <h2 class="teacher-name">Ustadz Murtadho Tumari</h2>
                    <p class="teacher-bio">
                        Spesialis dalam pengembangan kurikulum dan metode pembelajaran modern. Lulusan terbaik dari Universitas Pendidikan Indonesia dengan spesialisasi dalam bidang Manajemen Pendidikan. Selama 10 tahun terakhir, telah membantu mengembangkan sistem penilaian holistik yang digunakan di berbagai sekolah.
                    </p>
                    
                    <div class="teacher-contact">
                        <div class="contact-itm">
                            <i class="fas fa-envelope contact-icon"></i>
                            <span>murtadho@gmail.com</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-phone contact-icon"></i>
                            <span>+62 823-4567-8901</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-star contact-icon"></i>
                            <span>Ahli Kurikulum Pendidikan</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="teacher-roles">
                <div class="role-badge role-admin">
                    <i class="fas fa-user-tie role-icon"></i>
                    <span>Wakil Kepala Sekolah</span>
                </div>
                <div class="role-badge role-admin">
                    <i class="fas fa-clipboard-list role-icon"></i>
                    <span>Koordinator Kurikulum</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-book-open role-icon"></i>
                    <span>Guru Fiqh</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-scale-balanced role-icon"></i>
                    <span>Guru Ushulul Fiqh</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-quran role-icon"></i>
                    <span>Guru Tafsir Qur'an</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-book role-icon"></i>
                    <span>Guru Hadist</span>
                </div>
            </div>
        </div>

        <!-- Guru 3 -->
        <div class="teacher-profile">
            <div class="floating-shapes">
                <div class="shape shape-triangle" style="top: 15%; right: 8%; transform: rotate(70deg);"></div>
                <div class="shape shape-square" style="bottom: 15%; left: 7%; transform: rotate(15deg);"></div>
            </div>
            
            <div class="profile-content">
                <div class="profile-image">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Ustadz Makhrozal Mizan">
                </div>
                
                <div class="profile-details">
                    <h2 class="teacher-name">Ustadz Makhrozal Mizan S.Kom.</h2>
                    <p class="teacher-bio">
                        Ahli teknologi pendidikan dengan sertifikasi internasional di bidang pengembangan sistem e-learning. Meraih penghargaan "Inovator Pendidikan" tingkat nasional tahun 2020 untuk platform pembelajaran daring yang dikembangkannya. Memiliki komitmen kuat untuk mempersiapkan siswa menghadapi era digital.
                    </p>
                    
                    <div class="teacher-contact">
                        <div class="contact-itm">
                            <i class="fas fa-envelope contact-icon"></i>
                            <span>mizanmakhrozal@gmail.com</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-phone contact-icon"></i>
                            <span>+62 834-5678-9012</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-laptop-code contact-icon"></i>
                            <span>Spesialis Teknologi Pendidikan</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="teacher-roles">
                <div class="role-badge role-admin">
                    <i class="fas fa-tasks role-icon"></i>
                    <span>Waka Kurikulum</span>
                </div>
                <div class="role-badge role-admin">
                    <i class="fas fa-database role-icon"></i>
                    <span>Administrasi/Admin</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-code role-icon"></i>
                    <span>Guru Pemrograman WEB</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-robot role-icon"></i>
                    <span>Guru Algoritma BigData/Robotic</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-calculator role-icon"></i>
                    <span>Guru Matematika</span>
                </div>
            </div>
        </div>

        <!-- Guru 4 -->
        <div class="teacher-profile">
            <div class="floating-shapes">
                <div class="shape shape-circle" style="top: 20%; left: 5%;"></div>
                <div class="shape shape-triangle" style="bottom: 10%; right: 8%; transform: rotate(30deg);"></div>
            </div>
            
            <div class="profile-content">
                <div class="profile-image">
                    <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Ustadz Christian Anderson">
                </div>
                
                <div class="profile-details">
                    <h2 class="teacher-name">Ustadz Christian Anderson S.Kom</h2>
                    <p class="teacher-bio">
                        Pengajar matematika dengan pendekatan kreatif dan menyenangkan. Meraih gelar master dalam Pendidikan Matematika dari Universitas Negeri Jakarta. Metode pengajarannya telah membantu ratusan siswa mengatasi ketakutan terhadap matematika dan meraih prestasi gemilang di olimpiade sains nasional.
                    </p>
                    
                    <div class="teacher-contact">
                        <div class="contact-itm">
                            <i class="fas fa-envelope contact-icon"></i>
                            <span>zuikoten@gmail.com</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-phone contact-icon"></i>
                            <span>+62 845-6789-0123</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-mobile-alt contact-icon"></i>
                            <span>Spesialis Pemrograman Mobile</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="teacher-roles">
                <div class="role-badge role-teacher">
                    <i class="fas fa-mobile role-icon"></i>
                    <span>Guru Pemrograman Mobile</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-server role-icon"></i>
                    <span>Guru BasisData</span>
                </div>
                <div class="role-badge role-admin">
                    <i class="fas fa-project-diagram role-icon"></i>
                    <span>Guru Software Modeling</span>
                </div>
            </div>
        </div>

        <!-- Guru + -->
        <div class="teacher-profile">
            <div class="floating-shapes">
                <div class="shape shape-circle" style="top: 20%; left: 5%;"></div>
                <div class="shape shape-triangle" style="bottom: 10%; right: 8%; transform: rotate(30deg);"></div>
            </div>
            
            <div class="profile-content">
                <div class="profile-image">
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755927791/Kak-Nafis_ifqys2.jpg" alt="Kak Nafis Akbar Mujahid">
                </div>
                
                <div class="profile-details">
                    <h2 class="teacher-name">Kak Nafis Akbar Mujahid</h2>
                    <p class="teacher-bio">
                        Pengajar matematika dengan pendekatan kreatif dan menyenangkan. Meraih gelar master dalam Pendidikan Matematika dari Universitas Negeri Jakarta. Metode pengajarannya telah membantu ratusan siswa mengatasi ketakutan terhadap matematika dan meraih prestasi gemilang di olimpiade sains nasional.
                    </p>
                    
                    <div class="teacher-contact">
                        <div class="contact-itm">
                            <i class="fas fa-envelope contact-icon"></i>
                            <span>- @gmail.com</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-phone contact-icon"></i>
                            <span>+62 845-6789-0123</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-mobile-alt contact-icon"></i>
                            <span>Mahasiswa ITS</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="teacher-roles">
                <div class="role-badge role-teacher">
                    <i class="fas fa-mobile role-icon"></i>
                    <span>Guru Bahasa Inggris</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-server role-icon"></i>
                    <span>Guru TOEFL/ILTS</span>
                </div>
            </div>
        </div>

        <!-- Guru 5 -->
        <div class="teacher-profile">
            <div class="floating-shapes">
                <div class="shape shape-square" style="top: 15%; right: 7%; transform: rotate(10deg);"></div>
                <div class="shape shape-circle" style="bottom: 15%; left: 6%;"></div>
            </div>
            
            <div class="profile-content">
                <div class="profile-image">
                    <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db1604?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Ustadz Nur Fathoni">
                </div>
                
                <div class="profile-details">
                    <h2 class="teacher-name">Ustadz Nur Fathoni</h2>
                    <p class="teacher-bio">
                        Pengajar bahasa Inggris dengan sertifikasi TESOL internasional. Pernah mengajar selama 3 tahun di Australia sebelum kembali ke Indonesia untuk berkontribusi pada dunia pendidikan tanah air. Metode komunikatifnya telah membantu siswa meningkatkan kepercayaan diri dalam berbahasa Inggris secara signifikan.
                    </p>
                    
                    <div class="teacher-contact">
                        <div class="contact-itm">
                            <i class="fas fa-envelope contact-icon"></i>
                            <span>nurfathoni@gmail.com</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-phone contact-icon"></i>
                            <span>+62 856-7890-1234</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-language contact-icon"></i>
                            <span>Ahli Bahasa Arab</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="teacher-roles">
                <div class="role-badge role-teacher">
                    <i class="fas fa-pen-nib role-icon"></i>
                    <span>Guru Nahwu/Shorof</span>
                </div>
                <div class="role-badge role-teacher">
                    <i class="fas fa-book role-icon"></i>
                    <span>Guru Jurumiyyah</span>
                </div>
                <div class="role-badge role-admin">
                    <i class="fas fa-users role-icon"></i>
                    <span>Pengajar Halaqoh Utsman bin Affan</span>
                </div>
            </div>
        </div>

        <!-- Guru 6 -->
        <div class="teacher-profile">
            <div class="floating-shapes">
                <div class="shape shape-triangle" style="top: 10%; left: 8%; transform: rotate(60deg);"></div>
                <div class="shape shape-square" style="bottom: 10%; right: 5%; transform: rotate(25deg);"></div>
            </div>
            
            <div class="profile-content">
                <div class="profile-image">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Ustadz Charis Resmani">
                </div>
                
                <div class="profile-details">
                    <h2 class="teacher-name">Ustadz Charis Resmani</h2>
                    <p class="teacher-bio">
                        Tenaga administrasi profesional dengan pengalaman lebih dari 12 tahun di bidang administrasi pendidikan. Memiliki keahlian dalam mengelola database siswa, keuangan sekolah, dan sistem arsip digital. Dikenal sebagai pribadi yang teliti, ramah, dan selalu siap membantu baik siswa maupun rekan guru.
                    </p>
                    
                    <div class="teacher-contact">
                        <div class="contact-itm">
                            <i class="fas fa-envelope contact-icon"></i>
                            <span>auah@gmail.com</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-phone contact-icon"></i>
                            <span>+62 867-8901-2345</span>
                        </div>
                        <div class="contact-itm">
                            <i class="fas fa-hands-helping contact-icon"></i>
                            <span>Spesialis Administrasi Pendidikan</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="teacher-roles">
                <div class="role-badge role-support">
                    <i class="fas fa-chalkboard-teacher role-icon"></i>
                    <span>Pengajar Halaqoh Umar bin Khattab</span>
                </div>
            </div>
        </div>
    </div>

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
    <script src="{{ asset('js/guru-staff.js') }}"></script>

    <script>
        // Enhanced animations for profiles
        document.addEventListener('DOMContentLoaded', function() {
            const teacherProfiles = document.querySelectorAll('.teacher-profile');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0) scale(1)';
                        entry.target.style.boxShadow = '0 0.5rem 1rem rgba(0, 0, 0, 0.15)';
                    }
                });
            }, { threshold: 0.1 });
            
            teacherProfiles.forEach(profile => {
                profile.style.opacity = 0;
                profile.style.transform = 'translateY(30px) scale(0.95)';
                profile.style.transition = 'opacity 0.6s ease, transform 0.6s ease, box-shadow 0.6s ease';
                observer.observe(profile);
            });

            // Add hover sound effect (optional)
            const roleBadges = document.querySelectorAll('.role-badge');
            roleBadges.forEach(badge => {
                badge.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px) scale(1.05)';
                });
                
                badge.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
</body>
</html>
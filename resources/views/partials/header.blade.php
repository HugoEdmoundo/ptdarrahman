<style>
    /* ================ VARIABLES ================ */
:root {
  --primary: #1E8449;   /* Hijau Segar (utama banget) */
  --secondary: #145A32; /* Hijau Gelap (navbar/footer) */
  --accent: #F6A21E;    /* Oranye aksen */
  --light: #FFFFFF;     /* Putih */
  --dark: #1C1C1C;      /* Hitam Abu */
  --success: #27AE60;   /* Bootstrap Success style */
  --info: #2ECC71;      /* Hijau Muda (hover/link) */
  --warning: #f39c12;   /* Kuning/Oranye */
  --danger: #e74c3c;    /* Merah */
  --white: #ffffff;
  --black: #000000;
  --gray: #95a5a6;
  --dark-gray: #7f8c8d;
  --light-gray: #bdc3c7;
  --font-primary: 'Poppins', sans-serif;
  --font-secondary: 'Montserrat', sans-serif;
  --shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  --shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
  --transition: all 0.3s ease;
  --border-radius: 0.375rem;
  --border-radius-lg: 0.5rem;
  --border-radius-xl: 1rem;
  --toska-1: #1E8449;   /* Hijau utama */
  --toska-2: #2ECC71;   /* Hijau muda pendukung */
  --deep: #0B3D2E;      /* Hijau sangat gelap */
  --muted: #6b7280;
}

.btn-outline-theme

/* ================ BASE STYLES ================ */
*,
*::before,
*::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  scroll-behavior: smooth;
}

body {
  font-family: var(--font-primary);
  color: var(--dark);
  line-height: 1.6;
  background-color: var(--light);
  overflow-x: hidden;
}

h1, h2, h3, h4, h5, h6 {
  font-family: var(--font-secondary);
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 1rem;
}

a {
  text-decoration: none;
  color: var(--secondary);
  transition: var(--transition);
}

a:hover {
  color: var(--info);
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
  vertical-align: middle;
}

ul, ol {
  padding-left: 1.5rem;
}

.btn {
  font-weight: 500;
  padding: 0.5rem 1.25rem;
  border-radius: var(--border-radius);
  transition: var(--transition);
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

.btn-lg {
  padding: 0.75rem 1.5rem;
  font-size: 1.1rem;
  
}

.btn-primary {
  background-color: var(--primary);
  border-color: var(--primary);
  color: white;
}

.btn-primary:hover {
  background-color: #159b8c;
  border-color: #159b8c;
  color: white;
}

.btn-outline-light:hover {
  color: var(--dark);
}

.btn-link {
  color: var(--primary);
}

.btn-link:hover {
  color: var(--accent);
}

.text-primary {
  color: var(--primary) !important;
}

.text-warning {
  color: var(--warning) !important;
}

.bg-primary {
  background-color: var(--primary) !important;
}

.bg-light {
  background-color: var(--light) !important;
}

.bg-dark {
  background-color: var(--dark) !important;
}

.bg-gradient-primary {
  background: linear-gradient(135deg, var(--primary), #4a6491);
}

.bg-gradient-success {
  background: linear-gradient(135deg, var(--success), #2ecc71);
}

.bg-gradient-warning {
  background: linear-gradient(135deg, var(--warning), #f1c40f);
}

/* ================ UTILITY CLASSES ================ */
.rounded-4 {
  border-radius: var(--border-radius-lg);
}

.rounded-5 {
  border-radius: var(--border-radius-xl);
}

.shadow-sm {
  box-shadow: var(--shadow-sm);
}

.shadow {
  box-shadow: var(--shadow);
}

.shadow-lg {
  box-shadow: var(--shadow-lg);
}

.object-fit-cover {
  object-fit: cover;
}

.min-vh-100 {
  min-height: 100vh;
}

.z-index-1 {
  z-index: 1;
}

.z-index-2 {
  z-index: 2;
}

.z-index-3 {
  z-index: 3;
}

/* ================ COMPONENTS ================ */
/* Top bar */
.top-bar {
  background: linear-gradient(90deg, var(--toska-1), #12cfa6 60%);
  color: #fff;
  font-size: 0.90rem;
  padding: 6px 0;
}

.top-bar .contact-info i {
  width: 1.1rem;
  text-align: center;
}

.top-bar .contact-info a {
  color: #fff;
  text-decoration: none;
  margin-left: .5rem;
}

.top-bar .social-links a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 34px;
  height: 34px;
  border-radius: 50%;
  color: #fff;
  text-decoration: none;
  transition: all .22s ease;
  margin-left: .45rem;
}

.top-bar .social-links a:hover {
  transform: translateY(-3px);
  color: var(--accent);
}

/* Navbar */
.navbar {
  padding: 0.6rem 0;
  background: #fff;
  box-shadow: 0 8px 30px rgba(7, 22, 26, 0.08);
  transition: all .25s ease;
}

.navbar .navbar-brand {
  display: flex;
  align-items: center;
  gap: 12px;
  text-decoration: none;
  color: inherit;
}

.brand-logo {
  width: 150px;
  height: 45px;
  object-fit: contain;
  transition: transform .25s ease;
}

.navbar-brand:hover .brand-logo {
  transform: scale(1.06);
}

/* Nav links */
.nav-link {
  font-weight: 700;
  padding: .6rem .9rem;
  color: #2b2b2b;
  text-transform: uppercase;
  font-size: .86rem;
  position: relative;
  transition: color .22s ease;
  letter-spacing: .6px;
}

.nav-link:hover {
  color: var(--toska-1);
}

.nav-link::after {
  content: "";
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  bottom: 6px;
  width: 0;
  height: 3px;
  border-radius: 3px;
  background: linear-gradient(90deg, var(--toska-1), var(--toska-2)) !important;
  transition: width .25s ease;
}

.nav-link:hover::after,
.nav-link.active::after {
  width: 50%;
}

/* Dropdown menu */
.dropdown-menu {
  border-radius: 10px;
  border: 0;
  padding: .45rem 0;
  box-shadow: 0 12px 30px rgba(8, 20, 30, 0.08);
  min-width: 220px;
}
/* Animasi turun */
  .dropdown-menu {
    display: block;
    opacity: 0;
    visibility: hidden;
    transform: translateY(5px);
    transition: all 0.15s ease-in-out;
  }
  .dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

.dropdown-item {
  padding: .55rem 1rem;
  font-weight: 600;
  color: #1f2937;
  transition: background .18s, color .18s;
}

/* Dropdown active state */
.dropdown-item.active,
.dropdown-item.active:hover {
  background: linear-gradient(90deg, var(--toska-1), var(--toska-2)) !important;
  color: #fff !important;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, var(--toska-1), var(--toska-2));
  color: #fff;
}

/* Member button */
.btn-member {
  background: linear-gradient(90deg, var(--toska-1), var(--toska-2)) !important; 
  color: #fff;
  border-radius: 999px;
  padding: .45rem .95rem;
  font-weight: 700;
  box-shadow: 0 6px 18px rgba(0, 196, 98, 0.12);
  border: 0;
  transition: transform .18s ease, box-shadow .18s ease;
}

.btn-member i {
  margin-right: 6px;
}

.btn-member:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 28px rgba(170, 84, 3, 0.14);
}
</style>


<!-- Top Bar -->
<div class="top-bar">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="contact-info d-flex align-items-center">
      <i class="fas fa-phone me-2"></i><span>+62 08-9866-9902</span>
      <span class="d-none d-sm-inline"> &nbsp; / &nbsp; </span>
      <i class="fas fa-envelope ms-2 me-2"></i>
      <a href="mailto:info@sekolahunggulan.sch.id">info@sekolahunggulan.sch.id</a>
    </div>
    <div class="social-links">
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg sticky-top bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755771459/Logo-Ar-Rahman_fm4mgg.png" 
           alt="Logo" class="brand-logo" style="height: 50px;">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarMain" aria-controls="navbarMain" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        {{-- Beranda --}}
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
        </li>

        {{-- Profil --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('tentang-kami','guru-staff','fasilitas','tentang-organisasi','prestasi') ? 'active' : '' }}"
             href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="profilDropdown">
            <li><a class="dropdown-item" href="{{ url('tentang-kami') }}">Tentang Kami</a></li>
            <li><a class="dropdown-item" href="{{ url('guru-staff') }}">Guru & Staff</a></li>
            <li><a class="dropdown-item" href="{{ url('fasilitas') }}">Fasilitas</a></li>
            <li><a class="dropdown-item" href="{{ url('tentang-organisasi') }}">Tentang Organisasi</a></li>
            <li><a class="dropdown-item" href="{{ url('prestasi') }}">Prestasi</a></li>
          </ul>
        </li>

        {{-- Akademik --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('kurikulum','kalender-akademik','ekstrakurikuler','data-santri') ? 'active' : '' }}"
             href="#" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Akademik
          </a>
          <ul class="dropdown-menu" aria-labelledby="akademikDropdown">
            <li><a class="dropdown-item" href="{{ url('kurikulum') }}">Kurikulum</a></li>
            <li><a class="dropdown-item" href="{{ url('kalender-akademik') }}">Kalender Akademik</a></li>
            <li><a class="dropdown-item" href="{{ url('data-santri') }}">Data Santri</a></li>
          </ul>
        </li>

        {{-- Informasi --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('info-ppdb','kunjungan','hafalan') ? 'active' : '' }}"
             href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informasi
          </a>
          <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
            <li><a class="dropdown-item" href="{{ url('info-ppdb') }}">PPDB</a></li>
            <li><a class="dropdown-item" href="{{ url('kunjungan') }}">Kunjungan</a></li>
            <li><a class="dropdown-item" href="{{ url('hafalan') }}">Hafalan Santri</a></li>
          </ul>
        </li>

        {{-- Galeri --}}
        <li class="nav-item">
          <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="{{ url('galeri') }}">Galeri</a>
        </li>

        {{-- Berita --}}
        <li class="nav-item">
          <a class="nav-link {{ Request::is('berita') ? 'active' : '' }}" href="{{ url('berita') }}">Berita</a>
        </li>
      </ul>

      {{-- E-learning --}}
      <div class="d-flex align-items-center">
        <a href="{{ route('loading') }}" class="btn btn-member">
          <i class="fas fa-user-circle"></i> Member Area
        </a>
      </div>
    </div>
  </div>
</nav>

<style>
/* Footer */
/* Footer Styles with New Color Scheme */
/* Enhanced Parallax Footer */
.parallax-footer {
    position: relative;
    width: 100%;
    overflow: hidden;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.9)), 
    url('https://res.cloudinary.com/dunynusuh/image/upload/v1755442772/wisuda7_vshlpc.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    color: white;
    padding: 80px 0 40px;
    font-family: 'Poppins', sans-serif;
    margin-top: auto; /* Untuk memastikan footer tetap di bawah */
}

.parallax-footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%231E8449" fill-opacity="0.3" d="M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,218.7C672,224,768,160,864,138.7C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
    background-size: cover;
    background-position: center;
    opacity: 0.5;
    z-index: 1;
    animation: waveAnimation 15s linear infinite;
}

@keyframes waveAnimation {
    0% { background-position-x: 0%; }
    100% { background-position-x: 100%; }
}

.parallax-footer .container {
    position: relative;
    z-index: 2;
}

.parallax-footer a,
.parallax-footer span,
.parallax-footer li,
.parallax-footer p {
    color: rgba(255, 255, 255, 0.9);
    transition: all 0.3s ease;
}

.parallax-footer a:hover {
    color: #F6A21E; /* Fallback untuk var(--accent) */
    padding-left: 8px;
    text-shadow: 0 0 8px rgba(246, 162, 30, 0.6);
}

.parallax-footer h6 {
     /* Fallback untuk var(--hijau-cerah) */
    font-weight: 600;
    position: relative;
    padding-bottom: 12px;
    margin-bottom: 25px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.parallax-footer h6::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: linear-gradient(90deg, var(--toska-1), var(--toska-2)); /* Fallback untuk var() */
    /* background: linear-gradient(to right, #F6A21E, #1BB3A2); Fallback untuk var() */
    border-radius: 3px;
    box-shadow: 0 0 10px rgba(27, 179, 162, 0.5);
}


/* Accreditation Styles */
.accreditation img {
    transition: all 0.4s ease;
    opacity: 0.8;
    filter: grayscale(0.3);
    border-radius: 8px;
    padding: 5px;
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.accreditation img:hover {
    transform: scale(1.15) translateY(-5px);
    opacity: 1;
    filter: grayscale(0);
    box-shadow: 0 8px 25px rgba(27, 179, 162, 0.4);
}

/* Social Media Styles */
.social-media .btn {
    border-color: #1BB3A2; /* Fallback untuk var(--toska-1) */
    color: #1BB3A2; /* Fallback untuk var(--toska-1) */
    transition: all 0.3s ease;
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}

.social-media .btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: 0.5s;
}

.social-media .btn:hover::before {
    left: 100%;
}

.social-media .btn:hover {
    background: linear-gradient(45deg, #F6A21E, #1BB3A2); /* Fallback untuk var() */
    color: white;
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(27, 179, 162, 0.4);
    border-color: transparent;
}

/* Contact Info Icons */
.contact-item i {
    color: #1BB3A2; /* Fallback untuk var(--hijau-cerah) */
    background: rgba(27, 179, 162, 0.1);
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.contact-item:hover i {
    background: #1BB3A2; /* Fallback untuk var(--hijau-cerah) */
    color: white;
    transform: scale(1.1);
    box-shadow: 0 0 15px rgba(27, 179, 162, 0.5);
}

/* WhatsApp specific */
.contact-item .fa-whatsapp {
    color: #25D366;
}

.contact-item:hover .fa-whatsapp {
    background: #25D366;
    color: white;
    box-shadow: 0 0 15px rgba(37, 211, 102, 0.5);
}

/* Copyright Section */
footer .border-top {
    border-color: rgba(255, 255, 255, 0.15) !important;
}

footer .text-body-secondary {
    color: rgba(255, 255, 255, 0.7) !important;
}

/* Back to Top Button */
.back-to-top {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    transition: all 0.4s ease;
    background: linear-gradient(90deg, var(--toska-1), var(--toska-2)); /* Fallback untuk var() */
    color: white;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
}

.back-to-top.active {
    opacity: 1;
    visibility: visible;
    bottom: 2rem;
}

.back-to-top:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(27, 179, 162, 0.5);
}

/* School Logo Animation */
.school-logo {
    transition: all 0.5s ease;
    filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.3));
}

.school-logo:hover {
    transform: scale(1.05) rotate(2deg);
    filter: drop-shadow(0 8px 25px rgba(27, 179, 162, 0.5));
}

/* Responsive adjustments */
@media (max-width: 1199.98px) {
    .parallax-footer {
        padding: 70px 0 30px;
    }
}

@media (max-width: 991.98px) {
    .parallax-footer {
        padding: 60px 0 25px;
        background-attachment: scroll; /* Nonaktifkan parallax di mobile */
    }
    
    .parallax-footer::before {
        background-attachment: scroll; /* Nonaktifkan parallax di mobile */
    }
    
    .parallax-footer h6 {
        margin-top: 25px;
    }
    
    .social-media .btn {
        width: 38px;
        height: 38px;
    }
}

@media (max-width: 767.98px) {
    .parallax-footer {
        padding: 50px 0 20px;
    }
    
    .floating-icon {
        font-size: 18px;
    }
}

@media (max-width: 575.98px) {
    .parallax-footer {
        padding: 40px 0 15px;
    }
    
    .school-logo {
        height: 120px;
        width: 120px;
    }
}
</style>

<!-- Enhanced Footer -->
    <footer class="parallax-footer">
        <div class="container">
            <div class="row g-4">
                <!-- School Info -->
                <div class="col-lg-4 mb-4">
                    <div class="d-flex align-items-center mb-4">
                        <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755771459/Logo-Ar-Rahman_fm4mgg.png" alt="Logo Sekolah" height="150px" width="150px" class="me-3">
                    </div>
                    <p class="mb-4">Lembaga pendidikan terdepan yang mengintegrasikan kurikulum nasional dengan pendidikan karakter untuk mencetak generasi unggul Indonesia.</p>
                    
                    <!-- Accreditation -->
                    <div class="accreditation mb-4">
                        <h6 class="fw-bold mb-3">Sponsor By</h6>
                        <div class="d-flex flex-wrap gap-3">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755771458/JagoanHosting_lyykkb.jpg" alt="JagoanHosting" height="40" width="40">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755771458/komdigi_n2esbk.png" alt="Komdigi" height="40" width="40">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755771458/maspion_orbnv8.png" alt="Maspion IT" height="40" width="40">
                            <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755771458/1000_gbhnkl.png" alt="1000DC" height="40" width="40">
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="social-media">
                        <h6 class="fw-bold mb-3">Ikuti Kami</h6>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-4 mb-4">
                    <h6 class="fw-bold mb-4">Navigasi Cepat</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.html" class="text-body-light text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="profil.html" class="text-body-light text-decoration-none">Profil Sekolah</a></li>
                        <li class="mb-2"><a href="kurikulum.html" class="text-body-light text-decoration-none">Kurikulum</a></li>
                        <li class="mb-2"><a href="fasilitas.html" class="text-body-light text-decoration-none">Fasilitas</a></li>
                        <li class="mb-2"><a href="galeri.html" class="text-body-light text-decoration-none">Galeri</a></li>
                        <li class="mb-2"><a href="berita.html" class="text-body-light text-decoration-none">Berita</a></li>
                        <li class="mb-2"><a href="kontak.html" class="text-body-light text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                
                <!-- Academic Info -->
                <div class="col-lg-2 col-md-4 mb-4">
                    <h6 class="fw-bold mb-4">Akademik</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="kalender-akademik.html" class="text-body-light text-decoration-none">Kalender Akademik</a></li>
                        <li class="mb-2"><a href="prestasi.html" class="text-body-light text-decoration-none">Prestasi</a></li>
                        <li class="mb-2"><a href="kunjungan.html" class="text-body-light text-decoration-none">Kunjungan</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div class="col-lg-4 col-md-4 mb-4">
                    <h6 class="fw-bold mb-4">Informasi Kontak</h6>
                    
                    <div class="contact-item d-flex align-items-start mb-3">
                        <i class="fas fa-map-marker-alt text-primary me-3 mt-1"></i>
                        <div>
                            <strong>Alamat:</strong><br>
                            <span class="text-body-light">Rukan Hexa Green Kalimalang, Jl. Inspeksi Kalimalang C8-C9, Jatimulya, Kec. Tambun Sel., Kabupaten Bekasi, Jawa Barat 175106</span>
                        </div>
                    </div>
                    
                    <div class="contact-item d-flex align-items-start mb-3">
                        <i class="fas fa-phone text-primary me-3 mt-1"></i>
                        <div>
                            <strong>Telepon:</strong><br>
                            <span class="text-body-light">(021) 12345678<br>(021) 87654321</span>
                        </div>
                    </div>
                    
                    <div class="contact-item d-flex align-items-start mb-3">
                        <i class="fab fa-whatsapp text-success me-3 mt-1"></i>
                        <div>
                            <strong>WhatsApp:</strong><br>
                            <a href="https://wa.me/6281234567890" class="text-body-light">+62 812-3456-7890</a>
                        </div>
                    </div>
                    
                    <div class="contact-item d-flex align-items-start mb-3">
                        <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                        <div>
                            <strong>Email:</strong><br>
                            <a href="mailto:info@sekolahunggulan.sch.id" class="text-body-light">info@sekolahunggulan.sch.id</a><br>
                            <a href="mailto:admisi@sekolahunggulan.sch.id" class="text-body-light">admisi@sekolahunggulan.sch.id</a>
                        </div>
                    </div>
                    
                    <div class="contact-item d-flex align-items-start mb-4">
                        <i class="fas fa-clock text-primary me-3 mt-1"></i>
                        <div>
                            <strong>Jam Operasional:</strong><br>
                            <span class="text-body-light">Senin - Jumat: 07:00 - 16:00<br>Sabtu: 07:00 - 12:00</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Copyright -->
            <div class="row mt-4 pt-4 border-top border-light">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="d-flex align-items-center">
                        <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755771459/telkomdownload_chvgvl.png" alt="Telkom Indonesia" height="50" width="50px" class="me-3">
                        <span class="small text-body-light">Powered by darkcode</span>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 text-body-light">
                        Copyright &copy; 2025 ptdarrahman. All rights reserved. 
                    </p>
                </div>

            </div>
        </div>
    </footer>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></a>
    <script>
        // Back to top button functionality
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });
        
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
    </script>
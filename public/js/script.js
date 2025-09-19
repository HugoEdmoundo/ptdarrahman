// script.js

document.addEventListener('DOMContentLoaded', function() {
    // ================ GLOBAL FUNCTIONS ================
    
    // Preloader
    function initPreloader() {
        const preloader = document.createElement('div');
        preloader.className = 'preloader';
        preloader.innerHTML = `
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
            <div class="loading-text">Memuat Pesantren Tahfidz Qur'an dan Digital Ar-Rahman...</div>
        `;
        document.body.prepend(preloader);
        
        window.addEventListener('load', function() {
            setTimeout(() => {
                preloader.style.opacity = '0';
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 800);
            }, 1200);
        });
    }
    
    // Initialize all components
    function initAll() {
        initPreloader();
        initNavbar();
        initHeroSlider();
        initBackToTop();
        initScrollSpy();
        initCounterUp();
        initFacilitySlider();
        initGalleryHover();
        initTestimonials();
        initRegistrationForm();
        initAnimationOnScroll();
        initSmoothScroll();
        initTooltips();
        initVideoModal();
        initAccordion();
        initContactForm();
        initSocialShare();
    }
    
    // ================ COMPONENT INITIALIZATIONS ================
    
    // Navbar effects
    function initNavbar() {
        const navbar = document.querySelector('.navbar');
        const navbarHeight = navbar.offsetHeight;
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > navbarHeight) {
                navbar.classList.add('navbar-scrolled');
                navbar.style.boxShadow = '0 8px 30px rgba(7, 22, 26, 0.1)';
                navbar.style.padding = '0.4rem 0';
            } else {
                navbar.classList.remove('navbar-scrolled');
                navbar.style.boxShadow = 'none';
                navbar.style.padding = '0.6rem 0';
            }
        });
        
        // Mobile menu toggle
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        
        navbarToggler.addEventListener('click', function() {
            navbarCollapse.classList.toggle('show');
            this.classList.toggle('active');
        });
        
        // Close mobile menu when clicking a link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                    navbarToggler.classList.remove('active');
                }
            });
        });
    }
    
    // Hero slider with autoplay and pause on hover
    function initHeroSlider() {
    const heroCarousel = document.getElementById('heroCarousel');
    if (!heroCarousel) return;
    
    // Initialize Bootstrap Carousel
    const carousel = new bootstrap.Carousel(heroCarousel, {
        interval: 5000,
        pause: 'hover',
        wrap: true,
        touch: true
    });
    
    // Initialize particles.js for each slide
    const initParticles = (id) => {
        if (document.getElementById(id)) {
            particlesJS(id, {
                "particles": {
                    "number": {
                        "value": 60,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        }
                    },
                    "opacity": {
                        "value": 0.3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.2,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        }
    };
    
    // Initialize particles for each slide
    initParticles('particles-1');
    initParticles('particles-2');
    initParticles('particles-3');
    
    // Parallax effect
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        const slides = document.querySelectorAll('.hero-slide-background');
        
        slides.forEach(slide => {
            if (slide.closest('.active')) {
                slide.style.transform = `scale(1.05) translateY(${scrollPosition * 0.3}px)`;
            } else {
                slide.style.transform = `translateY(${scrollPosition * 0.3}px)`;
            }
        });
    });
    
    // Animation on slide change
    heroCarousel.addEventListener('slid.bs.carousel', function(e) {
        const activeCaption = e.relatedTarget.querySelector('.carousel-caption');
        activeCaption.classList.add('animate__animated', 'animate__fadeInUp');
        
        // Remove animation class after animation completes
        setTimeout(() => {
            activeCaption.classList.remove('animate__animated', 'animate__fadeInUp');
        }, 1000);
    });
    
    // Add floating animation to elements with .floating class
    const floatingElements = document.querySelectorAll('.floating');
    floatingElements.forEach(el => {
        el.style.animationDelay = `${Math.random() * 2}s`;
    });
}

    // Initialize when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initHeroSlider();
        
        // Load particles.js if not already loaded
        if (typeof particlesJS === 'undefined') {
            const script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js';
            script.onload = initHeroSlider;
            document.body.appendChild(script);
        }
    });
    
    // Back to top button
    function initBackToTop() {
        const backToTop = document.getElementById('backToTop');
        if (!backToTop) return;
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });
        
        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Scroll spy for navbar
    function initScrollSpy() {
        const scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '.navbar',
            offset: 80
        });
    }
    
    // Counter up animation for stats
    function initCounterUp() {
        const counters = document.querySelectorAll('.counter');
        if (counters.length === 0) return;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = +entry.target.getAttribute('data-target');
                    const count = +entry.target.innerText;
                    const increment = target / 100;
                    
                    if (count < target) {
                        entry.target.innerText = Math.ceil(count + increment);
                        setTimeout(() => {
                            observer.observe(entry.target);
                        }, 10);
                    } else {
                        entry.target.innerText = target;
                    }
                }
            });
        }, { threshold: 0.5 });
        
        counters.forEach(counter => {
            observer.observe(counter);
        });
    }
    
    // Facility slider with Glide.js
    
    // function initFacilitySlider() {
    //     const facilityCarousel = document.querySelector('.facility-carousel .glide');
    //     if (!facilityCarousel) return;
        
    //     new Glide(facilityCarousel, {
    //         type: 'carousel',
    //         perView: 3,
    //         gap: 30,
    //         autoplay: 3000, 
    //         hoverpause: true, 
    //         breakpoints: {
    //         992: { perView: 2 },
    //         768: { perView: 1 }
    //         }
    //     }).mount();
    // }

    
    // Gallery hover effect
    function initGalleryHover() {
        const galleryItems = document.querySelectorAll('.facility-item');
        galleryItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.querySelector('.facility-overlay').style.transform = 'translateY(0)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.querySelector('.facility-overlay').style.transform = 'translateY(100%)';
            });
        });
    }
    
    // Testimonials slider
    function initTestimonials() {
        const testimonialSlider = document.querySelector('.testimonial-slider');
        if (!testimonialSlider) return;
        
        new Glide(testimonialSlider, {
            type: 'carousel',
            perView: 1,
            autoplay: 5000,
            animationDuration: 800
        }).mount();
    }
    
    // Registration form validation
    function initRegistrationForm() {
        const regForm = document.getElementById('registrationForm');
        if (!regForm) return;
        
        regForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple validation
            const name = this.querySelector('#regName').value;
            const email = this.querySelector('#regEmail').value;
            const phone = this.querySelector('#regPhone').value;
            
            if (!name || !email || !phone) {
                showAlert('Harap lengkapi semua field yang wajib diisi!', 'danger');
                return;
            }
            
            // Simulate form submission
            showAlert('Pendaftaran berhasil dikirim! Kami akan segera menghubungi Anda.', 'success');
            this.reset();
            
            // In a real app, you would send data to server here
            // sendRegistrationData({ name, email, phone });
        });
        
        function showAlert(message, type) {
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
            alertDiv.role = 'alert';
            alertDiv.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;
            
            const container = regForm.querySelector('.form-container') || regForm;
            container.prepend(alertDiv);
            
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(alertDiv);
                bsAlert.close();
            }, 5000);
        }
    }
    
    // Animation on scroll with Intersection Observer
    function initAnimationOnScroll() {
        const animateElements = document.querySelectorAll('.animate-on-scroll');
        if (animateElements.length === 0) return;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const animation = entry.target.getAttribute('data-animation') || 'fadeInUp';
                    entry.target.classList.add('animate__animated', `animate__${animation}`);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        animateElements.forEach(element => {
            observer.observe(element);
        });
    }
    
    // Smooth scroll for anchor links
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
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
    }
    
    // Initialize tooltips
    function initTooltips() {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }
    
    // Video modal
    function initVideoModal() {
        const videoModal = document.getElementById('videoModal');
        if (!videoModal) return;
        
        videoModal.addEventListener('show.bs.modal', function(e) {
            const videoSrc = e.relatedTarget.getAttribute('data-video-src');
            const iframe = videoModal.querySelector('iframe');
            iframe.setAttribute('src', videoSrc);
        });
        
        videoModal.addEventListener('hide.bs.modal', function() {
            const iframe = videoModal.querySelector('iframe');
            iframe.setAttribute('src', '');
        });
    }
    
    // Accordion enhancements
    function initAccordion() {
        const accordions = document.querySelectorAll('.accordion-button');
        accordions.forEach(accordion => {
            accordion.addEventListener('click', function() {
                this.classList.toggle('active');
                const icon = this.querySelector('.accordion-icon');
                if (icon) {
                    icon.classList.toggle('fa-plus');
                    icon.classList.toggle('fa-minus');
                }
            });
        });
    }
    
    // Contact form with validation
    function initContactForm() {
        const contactForm = document.getElementById('contactForm');
        if (!contactForm) return;
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simple validation
            if (!data.name || !data.email || !data.message) {
                showContactAlert('Harap lengkapi semua field yang wajib diisi!', 'danger');
                return;
            }
            
            // Simulate form submission
            showContactAlert('Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.', 'success');
            this.reset();
            
            // In a real app, you would send data to server here
            // sendContactForm(data);
        });
        
        function showContactAlert(message, type) {
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type} alert-dismissible fade show mt-3`;
            alertDiv.role = 'alert';
            alertDiv.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;
            
            const container = contactForm.querySelector('.form-container') || contactForm;
            container.appendChild(alertDiv);
            
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(alertDiv);
                bsAlert.close();
            }, 5000);
        }
    }
    
    // Social share buttons
    function initSocialShare() {
        const shareButtons = document.querySelectorAll('.social-share');
        shareButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const platform = this.getAttribute('data-platform');
                const url = encodeURIComponent(window.location.href);
                const title = encodeURIComponent(document.title);
                let shareUrl = '';
                
                switch (platform) {
                    case 'facebook':
                        shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                        break;
                    case 'twitter':
                        shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
                        break;
                    case 'linkedin':
                        shareUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${url}&title=${title}`;
                        break;
                    case 'whatsapp':
                        shareUrl = `https://wa.me/?text=${title}%20${url}`;
                        break;
                }
                
                if (shareUrl) {
                    window.open(shareUrl, '_blank', 'width=600,height=400');
                }
            });
        });
    }
    
    // ================ INITIALIZE EVERYTHING ================
    initAll();
});

// Additional utility functions
function debounce(func, wait = 20, immediate = true) {
    let timeout;
    return function() {
        const context = this, args = arguments;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

function throttle(func, limit = 100) {
    let lastFunc;
    let lastRan;
    return function() {
        const context = this;
        const args = arguments;
        if (!lastRan) {
            func.apply(context, args);
            lastRan = Date.now();
        } else {
            clearTimeout(lastFunc);
            lastFunc = setTimeout(function() {
                if ((Date.now() - lastRan) >= limit) {
                    func.apply(context, args);
                    lastRan = Date.now();
                }
            }, limit - (Date.now() - lastRan));
        }
    };
}
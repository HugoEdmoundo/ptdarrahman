// Enhanced Carousel Initialization
const glide = new Glide('.glide', {
    type: 'carousel',
    autoplay: 5000,
    hoverpause: true,
    perView: 1,
    animationDuration: 1000,
    gap: 0,
    keyboard: true
});

// Add transition effect when slide changes
glide.on('run.before', () => {
    const activeSlide = document.querySelector('.glide__slide--active .facility-item');
    if (activeSlide) {
        activeSlide.querySelector('.facility-overlay').style.opacity = '0';
        activeSlide.querySelector('.facility-overlay').style.transform = 'translateY(20%)';
    }
});

glide.on('run.after', () => {
    const activeSlide = document.querySelector('.glide__slide--active .facility-item');
    if (activeSlide) {
        setTimeout(() => {
            activeSlide.querySelector('.facility-overlay').style.opacity = '1';
            activeSlide.querySelector('.facility-overlay').style.transform = 'translateY(0)';
        }, 300);
    }
    updateLabel(glide.index);
});

glide.mount();

// Enhanced Facilities Data
const facilities = [
    {
        imgSrc: 'https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg',
        alt: 'Laboratorium Sains',
        title: 'Laboratorium Sains',
        description: 'Peralatan modern untuk eksperimen sains dengan teknologi terkini',
        details: 'Lab kami dilengkapi dengan peralatan terbaru untuk praktikum fisika, kimia, dan biologi.'
    },
    {
        imgSrc: 'https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg',
        alt: 'Perpustakaan Digital',
        title: 'Perpustakaan Digital',
        description: '50.000+ koleksi buku fisik dan digital dengan ruang baca yang nyaman',
        details: 'Akses ke berbagai sumber belajar digital dan ruang baca yang ergonomis.'
    },
    {
        imgSrc: 'https://res.cloudinary.com/dunynusuh/image/upload/v1755442772/wisuda7_vshlpc.jpg',
        alt: 'Lapangan Olahraga',
        title: 'Lapangan Olahraga',
        description: 'Fasilitas olahraga lengkap dan modern untuk berbagai cabang olahraga',
        details: 'Lapangan multifungsi, kolam renang semi-olimpik, dan fasilitas fitness.'
    },
    {
        imgSrc: 'https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg',
        alt: 'Ruang Kelas',
        title: 'Ruang Kelas Modern',
        description: 'Ruang belajar nyaman dengan teknologi smart classroom',
        details: 'Dilengkapi dengan LCD proyektor, AC, dan desain ergonomis.'
    },
    {
        imgSrc: 'https://res.cloudinary.com/dunynusuh/image/upload/v1755502316/pulau-pari_x8apc9.jpg',
        alt: 'Studio Seni',
        title: 'Studio Seni & Musik',
        description: 'Pengembangan kreativitas melalui seni dan musik',
        details: 'Studio lengkap dengan berbagai alat musik dan peralatan seni.'
    }
];

// Create marquee items
const trackMarquee = document.querySelector('.facilities-track');
const descriptionElement = document.querySelector('.tentang-deskripsi');

function createMarqueeItems() {
    // Clear existing items
    trackMarquee.innerHTML = '';
    
    // Create 2 sets of items for infinite animation
    for (let i = 0; i < 2; i++) {
        facilities.forEach((item, index) => {
            const marqueeItem = document.createElement('div');
            marqueeItem.className = 'facility-marquee-item';
            marqueeItem.setAttribute('data-index', index);
            
            marqueeItem.innerHTML = `
                <img src="${item.imgSrc}" alt="${item.alt}" loading="lazy">
                <div class="facility-overlay">
                    <h5>${item.title}</h5>
                    <p>${item.description}</p>
                </div>
            `;
            
            trackMarquee.appendChild(marqueeItem);
            
            // Add click event
            marqueeItem.addEventListener('click', () => {
                glide.go('=' + (index % 3)); // Cycle through first 3 items in carousel
                updateLabel(index % 3);
                
                // Add visual feedback
                marqueeItem.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    marqueeItem.style.transform = '';
                }, 200);
            });
        });
    }
}

// Update label and description
function updateLabel(index) {
    const item = facilities[index];
    document.querySelector('.label-right').textContent = item.title.toUpperCase();
    descriptionElement.textContent = item.details;
    
    // Add animation
    descriptionElement.style.opacity = '0';
    descriptionElement.style.transform = 'translateY(10px)';
    setTimeout(() => {
        descriptionElement.style.opacity = '1';
        descriptionElement.style.transform = 'translateY(0)';
    }, 300);
}

// Animate marquee
let position = 0;
const speed = 1;
let requestId;

function animateMarquee() {
    position -= speed;
    
    if (position < -trackMarquee.scrollWidth / 2) {
        position = 0;
    }
    
    trackMarquee.style.transform = `translateX(${position}px)`;
    requestId = requestAnimationFrame(animateMarquee);
}

// Initialize
createMarqueeItems();
updateLabel(0);

// Start animation when in viewport
const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
        requestId = requestAnimationFrame(animateMarquee);
    } else {
        cancelAnimationFrame(requestId);
    }
}, { threshold: 0.1 });

observer.observe(document.querySelector('.facilities-marquee-container'));

// Pause on hover
trackMarquee.addEventListener('mouseenter', () => {
    cancelAnimationFrame(requestId);
});

trackMarquee.addEventListener('mouseleave', () => {
    requestId = requestAnimationFrame(animateMarquee);
});
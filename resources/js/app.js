

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// ========================================
// 1. LARAVEL BOOTSTRAP
// ========================================

import './bootstrap';


// ========================================
// 2. BOOTSTRAP JAVASCRIPT
// ========================================

import 'bootstrap/dist/js/bootstrap.bundle.min.js';


// ========================================
// 3. SWEETALERT2
// ========================================

import Swal from 'sweetalert2';

window.Swal = Swal;


// ========================================
// 4. CUSTOM JAVASCRIPT
// ========================================

// Add your application JavaScript here

const bucCarouselElement = document.querySelector('#bucCarousel');

if (bucCarouselElement) {
    const progress = bucCarouselElement.querySelector('#bucCarouselProgress');

    const restartCarouselProgress = () => {
        if (!progress) {
            return;
        }

        progress.classList.remove('is-running');
        void progress.offsetWidth;
        progress.classList.add('is-running');
    };

    restartCarouselProgress();

    bucCarouselElement.addEventListener('slid.bs.carousel', restartCarouselProgress);
    bucCarouselElement.addEventListener('mouseenter', () => {
        const carousel = window.bootstrap?.Carousel.getInstance(bucCarouselElement);
        carousel?.pause();
        progress?.classList.remove('is-running');
    });
    bucCarouselElement.addEventListener('mouseleave', () => {
        const carousel = window.bootstrap?.Carousel.getInstance(bucCarouselElement);
        carousel?.cycle();
        restartCarouselProgress();
    });
}

// ========================================
// 5. CUSTOM CSS SCRIPT
// ========================================

import '../css/style.css';
/* ==========================================
   GOUZKENSHAP - JavaScript Animations & Interactions
   ========================================== */

'use strict';

// ===== 1. ANIMATIONS AU SCROLL (Intersection Observer) =====
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.fade-in, .slide-up');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    });

    animatedElements.forEach((el) => observer.observe(el));
}

// ===== 2. NAVBAR ACTIVE LINK =====
function initActiveNavHighlight() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    window.addEventListener('scroll', () => {
        let current = '';
        const scrollPosition = window.scrollY + 100;

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove('active');
            const href = link.getAttribute('href').substring(1);
            if (href === current) {
                link.classList.add('active');
            }
        });
    });
}

// ===== 3. SMOOTH SCROLL =====
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (!targetElement) return;

            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarToggler && navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }

            const navbarHeight = document.querySelector('.navbar').offsetHeight;
            const targetPosition = targetElement.offsetTop - navbarHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        });
    });
}

// ===== 4. PARALLAX SUR HERO =====
function initHeroParallax() {
    const hero = document.querySelector('.hero-section');
    if (!hero) return;

    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        if (scrollY < window.innerHeight) {
            hero.style.backgroundPositionY = `${scrollY * 0.3}px`;
        }
    });
}

// ===== 5. PAGE LOAD ANIMATION =====
function initPageLoadAnimation() {
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.6s ease';

    window.addEventListener('load', () => {
        document.body.style.opacity = '1';
    });

    if (document.readyState === 'complete') {
        document.body.style.opacity = '1';
    }
}

// ===== 6. INITIALISATION =====
document.addEventListener('DOMContentLoaded', () => {
    initScrollAnimations();
    initActiveNavHighlight();
    initSmoothScroll();
    initHeroParallax();
    initPageLoadAnimation();

    console.log('✓ Gouzkenshap - Animations initialisées avec succès');
});


import './bootstrap';
import Alpine from 'alpinejs';
import lightGallery from 'lightgallery';
import lgVideo from 'lightgallery/plugins/video';
import lgZoom from 'lightgallery/plugins/zoom';
import lgThumbnail from 'lightgallery/plugins/thumbnail';
import confetti from 'canvas-confetti';

window.Alpine = Alpine;
window.lightGallery = lightGallery;
window.lgVideo = lgVideo;
window.lgZoom = lgZoom;
window.lgThumbnail = lgThumbnail;
window.confetti = confetti;

Alpine.start();

// Wedding Countdown
(function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
    let weddingDate = "Dec 15, 2026 00:00:00",
        countDown = new Date(weddingDate).getTime();
    
    let x = setInterval(function() {    
        let now = new Date().getTime(),
            distance = countDown - now;
            
        if (document.getElementById("days")) {
            document.getElementById("days").innerText = Math.floor(distance / (day));
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour));
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute));
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
        }
        
        // What to do when the date passes
        if (distance < 0) {
            if (document.getElementById("headline")) {
                document.getElementById("headline").innerText = "It's wedding time!";
            }
            if (document.getElementById("countdown")) {
                document.getElementById("countdown").style.display = "none";
            }
            if (document.getElementById("content")) {
                document.getElementById("content").style.display = "block";
            }
            clearInterval(x);
        }
    }, 1000);
})();

// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.querySelector('.mobile-menu-toggle');
    const sidebar = document.querySelector('#sidebar');
    
    if (toggle && sidebar) {
        toggle.addEventListener('click', function() {
            sidebar.classList.toggle('open');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!sidebar.contains(e.target) && !toggle.contains(e.target)) {
                sidebar.classList.remove('open');
            }
        });
    }
});

// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Gallery Lightbox
document.addEventListener('DOMContentLoaded', function() {
    const galleries = document.querySelectorAll('.lightgallery');
    galleries.forEach(function(gallery) {
        lightGallery(gallery, {
            plugins: [lgVideo, lgZoom, lgThumbnail],
            selector: '.gallery-item',
            download: false,
            thumbnail: true,
            zoom: true,
            videoMaxSize: '100mb',
            youtubePlayerParams: {
                modestbranding: 1,
                showinfo: 0,
                controls: 1,
                cc_load_policy: 0,
                iv_load_policy: 3,
                autohide: 0
            }
        });
    });
});

// Confetti Animation for Donation Success
window.triggerConfetti = function() {
    const duration = 3 * 1000;
    const animationEnd = Date.now() + duration;
    const defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 9999 };

    function randomInRange(min, max) {
        return Math.random() * (max - min) + min;
    }

    const interval = setInterval(function() {
        const timeLeft = animationEnd - Date.now();

        if (timeLeft <= 0) {
            return clearInterval(interval);
        }

        const particleCount = 50 * (timeLeft / duration);
        
        // Royal Purple Confetti
        confetti(Object.assign({}, defaults, {
            particleCount,
            origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 },
            colors: ['#4B0082', '#C8A2C8', '#FFFFFF', '#FF69B4']
        }));
        
        // Lilac Confetti
        confetti(Object.assign({}, defaults, {
            particleCount,
            origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 },
            colors: ['#C8A2C8', '#4B0082', '#FFFFFF', '#FF1493']
        }));
    }, 250);

    // Hearts Animation
    confetti(Object.assign({}, defaults, {
        particleCount: 100,
        scalar: 2,
        shapes: ['heart'],
        colors: ['#FF1493', '#FF69B4', '#C8A2C8'],
        origin: { y: 0.6 }
    }));
};

// Form Validation
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.wedding-form');
    forms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple validation
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(function(field) {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                } else {
                    field.classList.remove('border-red-500');
                }
            });
            
            if (isValid) {
                // Show loading state
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Processing...';
                submitBtn.disabled = true;
                
                // Submit form normally
                form.submit();
            }
        });
    });
});

// Scroll Animations
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
            }
        });
    }, observerOptions);

    const animateElements = document.querySelectorAll('.animate-on-scroll');
    animateElements.forEach(function(el) {
        observer.observe(el);
    });
});

// Video Upload Preview
document.addEventListener('DOMContentLoaded', function() {
    const videoInput = document.querySelector('input[type="file"][accept*="video"]');
    if (videoInput) {
        videoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file && file.type.startsWith('video/')) {
                const maxSize = 100 * 1024 * 1024; // 100MB
                if (file.size > maxSize) {
                    alert('Video file must be less than 100MB');
                    e.target.value = '';
                    return;
                }
                
                // Show file info
                const fileInfo = document.querySelector('.video-file-info');
                if (fileInfo) {
                    fileInfo.textContent = `Selected: ${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)`;
                    fileInfo.classList.remove('hidden');
                }
            }
        });
    }
});

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Faith & Samuel — Together Forever'); ?></title>
    <meta name="description" content="Faith & Samuel – Wedding Website">

    
    <title><?php echo $__env->yieldContent('title', 'Faith & Samuel — Together Forever'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', 'Join us as we celebrate the wedding of Faith & Samuel. Save the date and follow along as we begin our forever.'); ?>">
    <meta name="author" content="Faith & Samuel">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">

    
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="<?php echo e(url()->current()); ?>">
    <meta property="og:site_name"   content="Faith & Samuel — Together Forever">
    <meta property="og:title"       content="<?php echo $__env->yieldContent('og_title', 'Faith & Samuel — Together Forever'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('og_description', 'We\'re getting married! Join us to celebrate our love story. Save the date and celebrate with us.'); ?>">
    <meta property="og:image"       content="<?php echo $__env->yieldContent('og_image', asset('gallery/1.jpg')); ?>">
    <meta property="og:image:width"  content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt"   content="Faith & Samuel — Together Forever">
    <meta property="og:locale"      content="en_US">

    
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="<?php echo $__env->yieldContent('twitter_title', 'Faith & Samuel — Together Forever'); ?>">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('twitter_description', 'We\'re getting married! Join us to celebrate our love story. Save the date and celebrate with us.'); ?>">
    <meta name="twitter:image"       content="<?php echo $__env->yieldContent('twitter_image', asset('gallery/1.jpg')); ?>">
    <meta name="twitter:image:alt"   content="Faith & Samuel — Together Forever">

    
    

    
    <link rel="icon"             type="image/png" sizes="32x32" href="<?php echo e(asset('favicon.ico')); ?>">
    <link rel="icon"             type="image/png" sizes="16x16" href="<?php echo e(asset('favicon.ico')); ?>">
    <link rel="apple-touch-icon" sizes="180x180"                href="<?php echo e(asset('favicon.ico')); ?>">
    <meta name="theme-color" content="#b08b6e">



    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

        
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "Faith & Samuel — Together Forever",
        "description": "The wedding celebration of Faith and Samuel.",
        "startDate": "YYYY-MM-DD",
        "endDate": "YYYY-MM-DD",
        "eventStatus": "https://schema.org/EventScheduled",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "location": {
            "@type": "Place",
            "name": "Venue Name",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "123 Venue Street",
                "addressLocality": "City",
                "addressRegion": "State",
                "postalCode": "00000",
                "addressCountry": "US"
            }
        },
        "image": "<?php echo e(asset('gallery/1.jpg')); ?>",
        "url": "<?php echo e(url('/')); ?>"
    }
    </script>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'royal-purple': '#4B0082',
                        'lilac': '#C8A2C8',
                        'wedding-pink': '#faf8f7',
                    },
                    fontFamily: {
                        'alex': ['Alex Brush', 'cursive'],
                        'cormorant': ['Cormorant Garamond', 'serif'],
                        'nunito': ['Nunito Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Themify Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/themify-icons/themify-icons.css">

    <!-- AOS Animate On Scroll -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- LightGallery CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/favicon.ico')); ?>">

    <!-- Custom Styles -->
    <style>
        body { font-family: 'Nunito Sans', sans-serif; color: #555; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Cormorant Garamond', serif; color: #1a1a1a; font-weight: 500; }

        /* Fix Themify Icons - Tailwind preflight overrides font-family */
        [class^="ti-"], [class*=" ti-"] {
            font-family: 'themify-icons' !important;
            speak: never;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Sidebar */
        #sidebar { background: linear-gradient(180deg, #F6F1F0 0%, #efe8e6 100%); }
        #sidebar .nav-link { position: relative; overflow: hidden; }
        #sidebar .nav-link::after { content: ''; position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background: #4B0082; transition: all 0.3s ease; transform: translateX(-50%); }
        #sidebar .nav-link:hover::after, #sidebar .nav-link.active::after { width: 80%; }

        /* Hamburger */
        .hamburger span { display: block; width: 22px; height: 2px; background: #fff; margin: 5px 0; transition: all 0.3s ease; border-radius: 2px; }
        .hamburger.open span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
        .hamburger.open span:nth-child(2) { opacity: 0; }
        .hamburger.open span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }

        /* Buttons */
        .wedding-button { background: #4B0082; color: #fff; padding: 14px 32px; border: 2px solid #4B0082; font-family: 'Nunito Sans', sans-serif; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; font-size: 13px; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border-radius: 4px; display: inline-block; }
        .wedding-button:hover { background: transparent; color: #4B0082; transform: translateY(-2px); box-shadow: 0 4px 15px rgba(75, 0, 130, 0.3); }

        /* Form inputs */
        .wedding-form-input { border: 1px solid #e0d5d0; border-radius: 6px; padding: 12px 16px; font-family: 'Cormorant Garamond', serif; font-size: 17px; transition: all 0.3s ease; background: #faf8f7; }
        .wedding-form-input:focus { outline: none; border-color: #4B0082; box-shadow: 0 0 0 3px rgba(75, 0, 130, 0.1); background: #fff; }

        /* Video background */
        .video-background { position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; }
        .video-background video { width: 100vw; height: 100vh; object-fit: cover; }

        /* Heart animation */
        .heart-animation { display: inline-block; animation: heart-beat 1.5s ease-in-out infinite; }
        @keyframes heart-beat { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.2); } }

        /* Confetti container */
        #confetti-container { position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 9999; }

        /* Gallery masonry */
        .gallery-masonry { column-count: 3; column-gap: 1rem; }
        @media (max-width: 1024px) { .gallery-masonry { column-count: 2; } }
        @media (max-width: 640px) { .gallery-masonry { column-count: 1; } }
        .gallery-masonry .gallery-item { break-inside: avoid; margin-bottom: 1rem; border-radius: 12px; overflow: hidden; cursor: pointer; position: relative; }
        .gallery-masonry .gallery-item img, .gallery-masonry .gallery-item video { width: 100%; height: auto; transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
        .gallery-masonry .gallery-item:hover img, .gallery-masonry .gallery-item:hover video { transform: scale(1.05); }

        /* Wishes masonry */
        .wishes-grid { column-count: 2; column-gap: 1.5rem; }
        @media (max-width: 768px) { .wishes-grid { column-count: 1; } }
        .wish-card { break-inside: avoid; margin-bottom: 1.5rem; background: white; border-radius: 16px; padding: 1.5rem; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border: 1px solid rgba(200, 162, 200, 0.2); }
        .wish-card:hover { transform: translateY(-6px); box-shadow: 0 12px 40px rgba(75, 0, 130, 0.12); border-color: #C8A2C8; }

        /* Spin slow */
        @keyframes spin-slow { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
        .animate-spin-slow { animation: spin-slow 12s linear infinite; }

        /* Fade animations */
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeInDown { from { opacity: 0; transform: translateY(-20px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fadeInUp { animation: fadeInUp 0.8s ease-out; }
        .animate-fadeInDown { animation: fadeInDown 0.6s ease-out; }

        /* Glass morphism */
        .glass { background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.3); }

        /* Gradient text */
        .gradient-text { background: linear-gradient(135deg, #4B0082, #C8A2C8); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

        /* Smooth scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #C8A2C8; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #4B0082; }

        /* Page transition */
        .page-content { animation: fadeInUp 0.6s ease-out; }

        /* Banner image background */
        .banner-image { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; }

        /* LightGallery wedding theme */
        .lg-backdrop { background: rgba(75, 0, 130, 0.95) !important; }
        .lg-toolbar { background: rgba(75, 0, 130, 0.8) !important; }
        .lg-icon { color: #C8A2C8 !important; font-family: 'lg' !important; speak: never; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; line-height: 1; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        .lg-icon:hover { color: #FFFFFF !important; }
        .lg-sub-html { background: rgba(75, 0, 130, 0.8) !important; color: white !important; }
        .lg-counter { color: #C8A2C8 !important; }
        .lg-prev::after, .lg-next::before { font-family: 'lg' !important; }
        .lg-toolbar .lg-icon { font-size: 24px !important; }

        /* Mobile menu toggle */
        .mobile-menu-toggle { position: fixed; top: 16px; left: 16px; z-index: 9990; }
    </style>

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body class="bg-white antialiased" x-data="{ sidebarOpen: false }">

    <!-- Mobile Menu Toggle -->
    <button @click="sidebarOpen = !sidebarOpen"
            class="mobile-menu-toggle lg:hidden w-12 h-12 bg-royal-purple rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300"
            :class="{ 'bg-opacity-90': sidebarOpen }">
        <div class="hamburger" :class="{ 'open': sidebarOpen }">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>

    <!-- Mobile Overlay -->
    <div x-show="sidebarOpen"
         x-transition:enter="transition-opacity ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="sidebarOpen = false"
         class="fixed inset-0 bg-black/40 z-40 lg:hidden backdrop-blur-sm"
         style="display: none;"></div>

    <!-- Main Layout -->
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation -->
        <aside id="sidebar"
               :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
               class="fixed lg:translate-x-0 transition-transform duration-300 ease-in-out z-50 w-72 lg:w-[22%] h-screen overflow-y-auto flex flex-col">

            <!-- Close button mobile -->
            <button @click="sidebarOpen = false" class="lg:hidden absolute top-4 right-4 w-8 h-8 flex items-center justify-center text-gray-500 hover:text-royal-purple transition-colors">
                <i class="ti-close text-lg"></i>
            </button>

            <!-- Logo -->
            <div class="text-center pt-10 pb-6 px-6">
                <a href="<?php echo e(route('home')); ?>" class="inline-block group">
                    <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-royal-purple/10 flex items-center justify-center group-hover:bg-royal-purple/20 transition-colors duration-300">
                        <i class="ti-heart text-3xl text-royal-purple heart-animation"></i>
                    </div>
                    <h2 class="font-alex text-3xl text-royal-purple mb-1">Faith <span class="text-lilac">&amp;</span> Samuel</h2>
                    <p class="font-nunito text-xs tracking-[0.25em] text-gray-500 uppercase">30 May 2026</p>
                </a>
            </div>

            <div class="w-12 h-px bg-lilac/60 mx-auto mb-4"></div>

            <!-- Navigation Menu -->
            <nav class="flex-1 px-6 py-2">
                <ul class="space-y-1">
                    <?php
                        $navItems = [
                            ['route' => 'home', 'label' => 'Home', 'icon' => 'ti-home'],
                            ['route' => 'story', 'label' => 'Our Story', 'icon' => 'ti-book'],
                            ['route' => 'gallery', 'label' => 'Gallery', 'icon' => 'ti-image'],
                            ['route' => 'wishes', 'label' => 'Wishes', 'icon' => 'ti-heart'],
                            ['route' => 'donate', 'label' => 'Gift', 'icon' => 'ti-gift'],
                            ['route' => 'rsvp', 'label' => 'RSVP', 'icon' => 'ti-email'],
                        ];
                    ?>
                    <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route($item['route'])); ?>"
                               @click="sidebarOpen = false"
                               class="nav-link flex items-center gap-3 py-3 px-4 rounded-lg text-gray-600 hover:text-royal-purple hover:bg-royal-purple/5 transition-all duration-300 font-cormorant text-lg <?php echo e(request()->routeIs($item['route']) ? 'text-royal-purple bg-royal-purple/5 font-semibold' : ''); ?>">
                                <i class="<?php echo e($item['icon']); ?> text-sm <?php echo e(request()->routeIs($item['route']) ? 'text-royal-purple' : 'text-lilac'); ?>"></i>
                                <?php echo e($item['label']); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </nav>

            <!-- Sidebar Footer -->
            <div class="p-6 text-center">
                <div class="w-12 h-px bg-lilac/60 mx-auto mb-4"></div>
                <p class="text-xs text-gray-400 font-nunito leading-relaxed">
                    Faith & Samuel — Together Forever<br>
                    Lagos, Nigeria
                </p>
                <div class="flex justify-center gap-3 mt-3">
                    
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 lg:ml-[22%] min-h-screen overflow-x-hidden">
            <div class="page-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>

    <!-- Flash Messages -->
    <?php if(session('success')): ?>
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
             x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4"
             class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-xl shadow-2xl z-[9999] flex items-center gap-2">
            <i class="ti-check"></i> <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
             x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-xl shadow-2xl z-[9999] flex items-center gap-2">
            <i class="ti-alert"></i> <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <!-- Confetti Container -->
    <div id="confetti-container"></div>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <!-- LightGallery JS -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/video/lg-video.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/zoom/lg-zoom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/thumbnail/lg-thumbnail.min.js"></script>

    <!-- Canvas Confetti -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>

    <script>
        // Initialize AOS
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 60,
            });
        });

        // Confetti function
        window.triggerConfetti = function() {
            const duration = 3000;
            const end = Date.now() + duration;
            const defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 9999 };
            function rand(min, max) { return Math.random() * (max - min) + min; }
            const interval = setInterval(function() {
                if (Date.now() > end) return clearInterval(interval);
                const count = 50 * ((end - Date.now()) / duration);
                confetti(Object.assign({}, defaults, { particleCount: count, origin: { x: rand(0.1, 0.3), y: Math.random() - 0.2 }, colors: ['#4B0082', '#C8A2C8', '#FFFFFF', '#FF69B4'] }));
                confetti(Object.assign({}, defaults, { particleCount: count, origin: { x: rand(0.7, 0.9), y: Math.random() - 0.2 }, colors: ['#C8A2C8', '#4B0082', '#FFFFFF', '#FF1493'] }));
            }, 250);
        };

        // Wedding Countdown
        (function () {
            const countDown = new Date("May 30, 2026 00:00:00").getTime();
            setInterval(function() {
                const now = new Date().getTime(), d = countDown - now;
                const day = 86400000, hour = 3600000, min = 60000, sec = 1000;
                if (document.getElementById("days")) {
                    document.getElementById("days").innerText = Math.max(0, Math.floor(d / day));
                    document.getElementById("hours").innerText = Math.max(0, Math.floor((d % day) / hour));
                    document.getElementById("minutes").innerText = Math.max(0, Math.floor((d % hour) / min));
                    document.getElementById("seconds").innerText = Math.max(0, Math.floor((d % min) / sec));
                }
            }, 1000);
        })();
    </script>

    <?php echo $__env->yieldContent('scripts'); ?>

    <?php if(session('show_confetti')): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() { triggerConfetti(); });
        </script>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\laragon\www\wedding-site\resources\views/layouts/app.blade.php ENDPATH**/ ?>
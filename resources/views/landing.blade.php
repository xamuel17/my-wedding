<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeddingBliss.ng — Pink & Dark Pink Wedding Websites</title>
    <meta name="description" content="Elegant wedding invitation websites, galleries, and RSVP systems — now in beautiful pink and dark pink tones.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // 🎀 NEW PINK & DARK PINK PALETTE
                        'royal-purple': '#D14773',    // vibrant pinkish-rose
                        'lilac': '#FFB7D2',           // soft baby pink
                        'bliss': '#FF69B4',           // hot pink (primary)
                        'bliss-light': '#FF9ACD',     // light pink
                        'bliss-dark': '#C2185B',      // dark raspberry pink
                    },
                    fontFamily: {
                        'alex': ['Alex Brush', 'cursive'],
                        'cormorant': ['Cormorant Garamond', 'serif'],
                        'nunito': ['Nunito Sans', 'sans-serif'],
                        'inter': ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Themify Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/themify-icons/themify-icons.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        [class^="ti-"], [class*=" ti-"] {
            font-family: 'themify-icons' !important;
            speak: never; font-style: normal; font-weight: normal;
            font-variant: normal; text-transform: none; line-height: 1;
            -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;
        }

        /* Pink gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #FF69B4, #FF9ACD, #C2185B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Hero gradient — PINK & DARK PINK DREAM */
        .hero-gradient {
            background: linear-gradient(135deg, #3F0B24 0%, #691C3E 25%, #B23B6B 50%, #FF69B4 75%, #C2185B 100%);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 60px rgba(194, 24, 91, 0.2);
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite;
        }
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 20px rgba(255, 105, 180, 0.4); }
            50% { box-shadow: 0 0 40px rgba(255, 105, 180, 0.7); }
        }

        .marquee-track {
            display: flex;
            width: max-content;
            animation: marquee 30s linear infinite;
        }
        .marquee-track:hover { animation-play-state: paused; }
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
    </style>
</head>
<body class="bg-white antialiased overflow-x-hidden">

    <!-- Navigation (dark pink glass) -->
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="navbar">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 group">
                <span class="font-inter font-bold text-xl text-white">Wedding<span class="text-[#FFB7D2]">Bliss</span><span class="text-white/60 text-sm">.NG</span></span>
            </a>
            <a href="/sfaffair" class="hidden md:inline-flex items-center gap-2 px-5 py-2.5 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white text-sm font-semibold hover:bg-white hover:text-bliss-dark transition-all duration-300">
                View Faith & Samuel's Wedding Invite <i class="ti-arrow-right text-xs"></i>
            </a>
        </div>
    </nav>

    <!-- Hero Section (Pink/Dark Pink) -->
    <section class="hero-gradient min-h-screen relative flex items-center overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-72 h-72 bg-pink-300/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-rose-500/20 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-white/5 rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] border border-white/5 rounded-full"></div>
        </div>

        <div class="relative container mx-auto px-6 py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6" data-aos="fade-up" data-aos-delay="100">
                        Stunning Wedding<br>
                        <span class="gradient-text">Websites</span> That<br>
                        Tell Your Story
                    </h1>
                    <p class="text-lg text-white/60 max-w-lg mb-8 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                        We craft beautiful, personalized wedding invitation websites with galleries, RSVP systems, wish walls, and more — making your special day unforgettable.
                    </p>
                    <div class="flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://wa.me/2349025750231" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 bg-green-500 rounded-full text-white font-semibold shadow-lg hover:bg-green-600 hover:scale-105 transition-all duration-300"><i class="ti-comments"></i> Chat on WhatsApp</a>
                    </div>
                </div>

                <!-- Hero Visual (pink mockup) -->
                <div class="relative hidden lg:block" data-aos="fade-left" data-aos-delay="200">
                    <div class="relative float-animation">
                        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-2 shadow-2xl">
                            <div class="flex items-center gap-2 px-4 py-2 border-b border-white/10">
                                <div class="flex gap-1.5">
                                    <span class="w-3 h-3 rounded-full bg-red-400/70"></span>
                                    <span class="w-3 h-3 rounded-full bg-yellow-400/70"></span>
                                    <span class="w-3 h-3 rounded-full bg-green-400/70"></span>
                                </div>
                                <div class="flex-1 mx-4">
                                    <div class="bg-white/10 rounded-full px-4 py-1 text-xs text-white/40 text-center">weddingbliss.ng/maureen-and-gbenga</div>
                                </div>
                            </div>
                            <div class="p-4 space-y-4">
                                <div class="bg-gradient-to-br from-bliss-dark/40 to-bliss/30 rounded-xl p-8 text-center">
                                    <p class="font-alex text-3xl text-white/90 mb-1">Maureen & Gbenga</p>
                                    <p class="text-white/50 text-sm">11 January, 2026 — Lagos</p>
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="bg-white/10 rounded-lg h-20"></div>
                                    <div class="bg-white/10 rounded-lg h-20"></div>
                                    <div class="bg-white/10 rounded-lg h-20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 bg-white rounded-2xl p-3 shadow-xl" data-aos="zoom-in" data-aos-delay="600">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center"><i class="ti-check text-green-600 text-sm"></i></div>
                            <div>
                                <p class="text-xs font-semibold text-gray-800">RSVP Received</p>
                                <p class="text-[10px] text-gray-400">Just now</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl p-3 shadow-xl" data-aos="zoom-in" data-aos-delay="800">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-pink-100 rounded-lg flex items-center justify-center"><i class="ti-heart text-pink-600 text-sm"></i></div>
                            <div>
                                <p class="text-xs font-semibold text-gray-800">New Wish!</p>
                                <p class="text-[10px] text-gray-400">"So happy for you!"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-900 py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-2"><i class="ti-heart text-[#FFB7D2]"></i><span class="font-inter font-bold text-white">Wedding<span class="text-[#FFB7D2]">Bliss</span><span class="text-white/40">.ng</span></span></div>
                <p class="text-gray-500 text-sm">&copy; 2025 WeddingBliss.ng. All rights reserved.</p>
                {{-- <div class="flex items-center gap-4"><a href="#" class="w-9 h-9 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:bg-bliss hover:text-white transition-all"><i class="ti-instagram text-sm"></i></a><a href="#" class="w-9 h-9 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:bg-bliss hover:text-white transition-all"><i class="ti-twitter text-sm"></i></a><a href="#" class="w-9 h-9 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:bg-bliss hover:text-white transition-all"><i class="ti-facebook text-sm"></i></a></div>
             --}}
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, easing: 'ease-out-cubic', once: true, offset: 60 });
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-bliss-dark/90', 'backdrop-blur-lg', 'shadow-lg');
            } else {
                navbar.classList.remove('bg-bliss-dark/90', 'backdrop-blur-lg', 'shadow-lg');
            }
        });
    </script>
</body>
</html>
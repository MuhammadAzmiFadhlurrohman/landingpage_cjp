<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CJP - Koneksi Cepat, Stabil & Dedicated</title>
    <meta name="description" content="Penyedia layanan Internet Private Network berkualitas tinggi, cepat, dan terpercaya untuk bisnis dan personal.">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js & Plugins untuk Interaktivitas Accordion & Navbar -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts: Sora (Display) + Inter (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Swiper.js CDN untuk Carousel 3D Coverflow Portofolio -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        :root {
            --ink: #0B2A4A;
            --ink-light: #163B66;
            --sky: #29ABE2;
            --sky-deep: #1C8AC0;
            --mist: #F4FAFD;
            --mist-2: #E5F4FC;
            --teal: #15B8A6;
        }
        html { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Sora', sans-serif; }

        body { color: var(--ink); background-color: var(--mist); overflow-x: hidden; }

        /* Swiper 3D Coverflow Custom Styling */
        .portfolio-swiper {
            width: 100%;
            padding-top: 1.5rem !important;
            padding-bottom: 2.5rem !important;
        }
        .portfolio-swiper .swiper-slide {
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.4s ease;
            opacity: 0.5;
            transform: scale(0.82);
            filter: blur(0.5px);
        }
        .portfolio-swiper .swiper-slide-active {
            opacity: 1 !important;
            transform: scale(1.08) !important;
            filter: blur(0px) !important;
            z-index: 30;
        }
        .portfolio-swiper .swiper-slide-prev,
        .portfolio-swiper .swiper-slide-next {
            opacity: 0.8 !important;
            transform: scale(0.92) !important;
            filter: blur(0px) !important;
            z-index: 20;
        }
        .swiper-pagination-portfolio .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.4);
            opacity: 1;
            width: 10px;
            height: 10px;
            transition: all 0.3s ease;
        }
        .swiper-pagination-portfolio .swiper-pagination-bullet-active {
            background: var(--sky);
            width: 28px;
            border-radius: 999px;
            box-shadow: 0 0 10px rgba(41, 171, 226, 0.6);
        }

        .bg-gradient-produk {
            background:
                radial-gradient(60% 55% at 85% 10%, rgba(41,171,226,0.12) 0%, rgba(41,171,226,0) 60%),
                radial-gradient(50% 50% at 10% 90%, rgba(21,184,166,0.10) 0%, rgba(21,184,166,0) 60%),
                linear-gradient(180deg, #FFFFFF 0%, rgba(244,250,253,0.90) 100%),
                url('{{ asset('assets/bgproduk.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .bg-card-produk {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Eyebrow motif badge */
        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-family: 'Sora', sans-serif;
            font-weight: 700;
            font-size: 0.75rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--sky-deep);
            background: rgba(41, 171, 226, 0.1);
            padding: 0.35rem 0.95rem;
            border-radius: 9999px;
            border: 1px solid rgba(41, 171, 226, 0.25);
            transition: all 0.3s ease;
        }
        .eyebrow::before {
            content: '';
            width: 7px;
            height: 7px;
            border-radius: 999px;
            background: var(--sky);
            box-shadow: 0 0 0 3px rgba(41,171,226,0.25);
        }

        /* Signal Pulse Animation */
        .signal-rings { position: relative; width: 100%; height: 100%; }
        .signal-rings .ring {
            position: absolute;
            inset: 0;
            margin: auto;
            border-radius: 999px;
            border: 1.5px solid rgba(41,171,226,0.35);
            animation: pulseRing 3.8s ease-out infinite;
        }
        .signal-rings .ring:nth-child(2) { animation-delay: 1.2s; }
        .signal-rings .ring:nth-child(3) { animation-delay: 2.4s; }
        @keyframes pulseRing {
            0%   { width: 20%; height: 20%; opacity: 0.95; transform: scale(0.8); }
            100% { width: 100%; height: 100%; opacity: 0; transform: scale(1.1); }
        }

        /* Smooth Floating Animations */
        .float-slow {
            animation: floatSlow 4s ease-in-out infinite;
        }
        .float-reverse {
            animation: floatReverse 5s ease-in-out infinite;
        }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes floatReverse {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(10px); }
        }

        /* Dotted animated SVG data line */
        .connect-line {
            stroke-dasharray: 6 10;
            stroke-linecap: round;
            animation: dashFlow 12s linear infinite;
        }
        @keyframes dashFlow {
            to { stroke-dashoffset: -160; }
        }

        /* Glassmorphism Shine Sweep Effect */
        .shine-card {
            position: relative;
            overflow: hidden;
            will-change: transform;
            transform: translateZ(0);
        }
        .shine-card::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                60deg,
                transparent 30%,
                rgba(255, 255, 255, 0.45) 50%,
                transparent 70%
            );
            transform: rotate(30deg) translateX(-100%);
            transition: transform 0.85s cubic-bezier(0.4, 0, 0.2, 1);
            pointer-events: none;
            opacity: 0;
            will-change: transform, opacity;
        }
        .shine-card:hover::after {
            transform: rotate(30deg) translateX(100%);
            opacity: 1;
        }

        /* Smooth Hover Elevate & Glow */
        .card-hover {
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
            will-change: transform, box-shadow;
        }
        .card-hover:hover {
            transform: translateY(-8px) scale(1.015);
            box-shadow: 0 22px 40px -12px rgba(41, 171, 226, 0.22);
        }

        /* Scroll Reveal Base Classes */
        .reveal {
            opacity: 0;
            transform: translateY(35px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }
        .delay-500 { transition-delay: 500ms; }

        /* Button Pulse Glow */
        .btn-glow {
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-glow:hover {
            box-shadow: 0 12px 25px -5px rgba(41, 171, 226, 0.45);
            transform: translateY(-2px) scale(1.03);
        }
        .btn-glow:active {
            transform: translateY(0) scale(0.98);
        }
    </style>
</head>
<body class="font-sans text-[15px] leading-relaxed antialiased text-[color:var(--ink)]">

    <!-- Sticky Navbar dengan Blur Glassmorphism -->
    <nav x-data="{ scrolled: false, mobileMenuOpen: false }"
         @scroll.window="scrolled = (window.pageYOffset > 20)"
         :class="{ 'bg-white/90 backdrop-blur-lg shadow-md py-3 border-b border-sky-100/80': scrolled, 'bg-transparent py-5': !scrolled }"
         class="fixed w-full top-0 z-50 transition-all duration-500">
        <div class="container mx-auto px-6 md:px-12 flex justify-between items-center">
            
            <!-- Logo Branding (Hanya Gambar Logo) -->
            <a href="#beranda" class="flex items-center gap-3 group">
                <img src="{{ asset('assets/cjp.png') }}" alt="Logo CJP" class="h-7 sm:h-9 md:h-10 w-auto max-w-[130px] sm:max-w-none object-contain group-hover:scale-105 transition-transform duration-300">
            </a>

            <!-- Desktop Menu Navigation -->
            <div class="hidden md:flex space-x-7 items-center font-semibold text-sm">
                <a href="#beranda" class="text-gray-700 hover:text-[color:var(--sky-deep)] transition py-1 relative group">
                    Beranda
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--teal)] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#produk" class="text-gray-700 hover:text-[color:var(--sky-deep)] transition py-1 relative group">
                    Produk
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--teal)] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#paket" class="text-gray-700 hover:text-[color:var(--sky-deep)] transition py-1 relative group">
                    Paket
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--teal)] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#portofolio" class="text-gray-700 hover:text-[color:var(--sky-deep)] transition py-1 relative group">
                    Portofolio
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--teal)] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#klien" class="text-gray-700 hover:text-[color:var(--sky-deep)] transition py-1 relative group">
                    Klien
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--teal)] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#faq" class="text-gray-700 hover:text-[color:var(--sky-deep)] transition py-1 relative group">
                    FAQ
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--teal)] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#lokasi" class="text-gray-700 hover:text-[color:var(--sky-deep)] transition py-1 relative group">
                    Lokasi
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--teal)] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#kontak" class="btn-glow bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--sky-deep)] text-white px-6 py-2.5 rounded-full shadow-md font-bold text-xs tracking-wide uppercase">
                    Kontak Kami
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2.5 rounded-xl bg-white/90 border border-sky-100 text-[color:var(--ink)] shadow-sm focus:outline-none transition active:scale-95">
                <svg class="w-6 h-6 transition-transform duration-300" :class="{'rotate-90': mobileMenuOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Drawer Menu -->
        <div x-show="mobileMenuOpen" x-collapse class="md:hidden mx-4 mt-3 rounded-2xl bg-white/95 backdrop-blur-xl shadow-2xl ring-1 ring-sky-100 overflow-hidden">
            <div class="h-1 w-full" style="background: linear-gradient(90deg, var(--sky), var(--teal));"></div>

            <div class="flex flex-col px-4 py-4 space-y-1">
                <a href="#beranda" @click="mobileMenuOpen=false" class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-[color:var(--ink)] hover:bg-sky-50 transition">
                    <span class="w-8 h-8 rounded-lg bg-sky-50 flex items-center justify-center text-[color:var(--sky-deep)]">
                        <i class="fa-solid fa-house text-sm"></i>
                    </span>
                    Beranda
                </a>
                <a href="#produk" @click="mobileMenuOpen=false" class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-[color:var(--ink)] hover:bg-sky-50 transition">
                    <span class="w-8 h-8 rounded-lg bg-sky-50 flex items-center justify-center text-[color:var(--sky-deep)]">
                        <i class="fa-solid fa-box-open text-sm"></i>
                    </span>
                    Produk Layanan
                </a>
                <a href="#paket" @click="mobileMenuOpen=false" class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-[color:var(--ink)] hover:bg-sky-50 transition">
                    <span class="w-8 h-8 rounded-lg bg-sky-50 flex items-center justify-center text-[color:var(--sky-deep)]">
                        <i class="fa-solid fa-layer-group text-sm"></i>
                    </span>
                    Paket Internet
                </a>
                <a href="#portofolio" @click="mobileMenuOpen=false" class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-[color:var(--ink)] hover:bg-sky-50 transition">
                    <span class="w-8 h-8 rounded-lg bg-sky-50 flex items-center justify-center text-[color:var(--sky-deep)]">
                        <i class="fa-solid fa-briefcase text-sm"></i>
                    </span>
                    Portofolio Proyek
                </a>
                <a href="#klien" @click="mobileMenuOpen=false" class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-[color:var(--ink)] hover:bg-sky-50 transition">
                    <span class="w-8 h-8 rounded-lg bg-sky-50 flex items-center justify-center text-[color:var(--sky-deep)]">
                        <i class="fa-solid fa-handshake text-sm"></i>
                    </span>
                    Klien Kami
                </a>
                <a href="#faq" @click="mobileMenuOpen=false" class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-[color:var(--ink)] hover:bg-sky-50 transition">
                    <span class="w-8 h-8 rounded-lg bg-sky-50 flex items-center justify-center text-[color:var(--sky-deep)]">
                        <i class="fa-solid fa-circle-question text-sm"></i>
                    </span>
                    FAQ
                </a>

                <div class="h-px bg-sky-100 my-2"></div>

                <a href="#kontak" @click="mobileMenuOpen=false" class="flex items-center justify-center gap-2 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--sky-deep)] text-white text-center py-3 rounded-xl font-bold shadow-lg shadow-sky-200">
                    <i class="fa-solid fa-paper-plane text-xs"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="relative bg-gradient-hero pt-28 pb-16 md:pt-32 md:pb-20 px-6 overflow-hidden">
        
        <!-- Ambient Decorative Lighting Glows -->
        <div class="absolute -top-24 left-1/4 w-[500px] h-[500px] bg-[color:var(--sky)]/15 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute top-1/3 right-10 w-[400px] h-[400px] bg-[color:var(--teal)]/15 rounded-full blur-[100px] pointer-events-none"></div>

        <!-- Animated Background Pulse Motif -->
        <div class="hidden lg:block absolute -top-10 right-20 w-96 h-96 signal-rings pointer-events-none opacity-60">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
        </div>

        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Hero Text Content (Left 7 Cols) -->
                <div class="lg:col-span-7 text-center lg:text-left">
                    
                    <!-- Live Status Badge -->
                    <div class="reveal active inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full text-xs font-bold bg-white/90 border border-sky-200/80 text-[color:var(--sky-deep)] shadow-xs mb-6 float-slow">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                        </span>
                        <span>Jaringan Dedicated & Private Network — SLA 99.9%</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="reveal active delay-100 font-display text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold text-[color:var(--ink)] mb-5 leading-tight tracking-tight">
                        Koneksi Internet <br class="hidden sm:inline">
                        <span class="bg-gradient-to-r from-[color:var(--sky)] via-[color:var(--sky-deep)] to-[color:var(--teal)] bg-clip-text text-transparent">Dedicated & Ultra Stabil</span> <br class="hidden sm:inline">
                        Untuk Bisnis & Personal
                    </h1>

                    <!-- Subtitle Description -->
                    <p class="reveal active delay-200 text-sm sm:text-base text-gray-600 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed font-medium">
                        Solusi Private Network & Jaringan Lastmile berkecepatan tinggi dengan rasio dedicated 1:1, garansi Uptime 99.9%, serta pengawasan jaringan 24/7 nonstop.
                    </p>

                    <!-- Buttons CTA -->
                    <div class="reveal active delay-300 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start items-center mb-10">
                        <a href="#paket" class="btn-glow w-full sm:w-auto bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--sky-deep)] text-white font-bold px-8 py-4 rounded-2xl text-base shadow-lg flex items-center justify-center gap-2.5 group">
                            <span>Lihat Paket Layanan</span>
                            <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1.5 transition-transform duration-300"></i>
                        </a>
                        <a href="#kontak" class="w-full sm:w-auto bg-white/95 text-[color:var(--ink)] font-bold px-8 py-4 rounded-2xl text-base border border-sky-200 hover:bg-sky-50 hover:border-sky-300 transition shadow-xs flex items-center justify-center gap-2.5 hover:scale-105 transform duration-300">
                            <i class="fa-regular fa-comments text-base text-[color:var(--sky-deep)]"></i>
                            <span>Konsultasi Gratis</span>
                        </a>
                    </div>

                    <!-- Key Selling Points Badges -->
                    <div class="reveal active delay-400 flex flex-wrap justify-center lg:justify-start items-center gap-6 pt-4 border-t border-sky-200/60 text-xs font-semibold text-gray-600">
                        <div class="flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-teal-100 text-[color:var(--teal)] flex items-center justify-center text-[10px] font-bold">✓</span>
                            <span>Dedicated 1:1 Bandwidth</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-teal-100 text-[color:var(--teal)] flex items-center justify-center text-[10px] font-bold">✓</span>
                            <span>SLA Guarantee 99.9%</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-teal-100 text-[color:var(--teal)] flex items-center justify-center text-[10px] font-bold">✓</span>
                            <span>Support Prioritas 24/7</span>
                        </div>
                    </div>

                </div>

                <!-- Hero Visual Showcase / Dashboard Mockup Card (Right 5 Cols) -->
                <div class="lg:col-span-5 reveal active delay-200 relative mt-8 lg:mt-0">
                    
                    <!-- Floating Accent Card Top Right -->
                    <div class="absolute -top-6 -right-4 z-20 bg-white/95 backdrop-blur-md px-4 py-3 rounded-2xl border border-sky-100 shadow-lg flex items-center gap-3 float-slow hidden sm:flex">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center text-lg font-bold">
                            <i class="fa-solid fa-gauge-high"></i>
                        </div>
                        <div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Bandwidth Speed</div>
                            <div class="font-display font-extrabold text-sm text-[color:var(--ink)]">Up to 1 Gbps</div>
                        </div>
                    </div>

                    <!-- Floating Accent Card Bottom Left -->
                    <div class="absolute -bottom-6 -left-4 z-20 bg-white/95 backdrop-blur-md px-4 py-3 rounded-2xl border border-sky-100 shadow-lg flex items-center gap-3 float-reverse hidden sm:flex">
                        <div class="w-10 h-10 rounded-xl bg-sky-500/10 text-[color:var(--sky-deep)] flex items-center justify-center text-lg font-bold">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <div class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Security Protection</div>
                            <div class="font-display font-extrabold text-sm text-[color:var(--ink)]">Active Firewall 24/7</div>
                        </div>
                    </div>

                    <!-- Main Dashboard Graphic Card -->
                    <div class="shine-card bg-gradient-to-b from-white via-white/95 to-mist p-6 sm:p-7 rounded-3xl border border-sky-100 shadow-2xl relative z-10 overflow-hidden">
                        
                        <!-- Header Mockup -->
                        <div class="flex justify-between items-center pb-4 mb-5 border-b border-sky-100">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-rose-400"></div>
                                <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                                <div class="w-3 h-3 rounded-full bg-emerald-400"></div>
                                <span class="text-xs font-bold text-gray-400 ml-2 font-mono">cjp-network-status</span>
                            </div>
                            <span class="px-2.5 py-1 rounded-md bg-emerald-100 text-emerald-700 text-[10px] font-extrabold uppercase tracking-wider flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                Live Monitoring
                            </span>
                        </div>

                        <!-- Speed Metrics Grid -->
                        <div class="grid grid-cols-2 gap-3.5 mb-5">
                            <div class="bg-mist p-4 rounded-2xl border border-sky-100/80">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400">Download</span>
                                    <i class="fa-solid fa-arrow-down text-emerald-500 text-xs"></i>
                                </div>
                                <div class="font-display font-extrabold text-2xl text-[color:var(--ink)]">998.4 <span class="text-xs font-semibold text-gray-500">Mbps</span></div>
                            </div>
                            <div class="bg-mist p-4 rounded-2xl border border-sky-100/80">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400">Upload</span>
                                    <i class="fa-solid fa-arrow-up text-[color:var(--sky-deep)] text-xs"></i>
                                </div>
                                <div class="font-display font-extrabold text-2xl text-[color:var(--ink)]">998.1 <span class="text-xs font-semibold text-gray-500">Mbps</span></div>
                            </div>
                        </div>

                        <!-- Live Pulse Wave SVG Graphic -->
                        <div class="bg-gradient-to-r from-[color:var(--ink)] to-[color:var(--ink-light)] p-4 rounded-2xl text-white mb-4 shadow-inner relative overflow-hidden">
                            <div class="flex justify-between items-center text-xs mb-2">
                                <span class="font-semibold text-sky-200">Latency & Stability</span>
                                <span class="font-bold text-emerald-400 font-mono">&lt; 1.8 ms (Super Low)</span>
                            </div>
                            <svg class="w-full h-12" viewBox="0 0 300 50" fill="none">
                                <path d="M0 30 Q 30 10, 60 30 T 120 20 T 180 35 T 240 15 T 300 25" stroke="var(--sky)" stroke-width="3" fill="none" class="connect-line"/>
                                <path d="M0 30 Q 30 10, 60 30 T 120 20 T 180 35 T 240 15 T 300 25 L 300 50 L 0 50 Z" fill="url(#hero-gradient)" opacity="0.25"/>
                                <defs>
                                    <linearGradient id="hero-gradient" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="var(--sky)"/>
                                        <stop offset="100%" stop-color="var(--sky)" stop-opacity="0"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <!-- Server Nodes Status -->
                        <div class="flex items-center justify-between text-xs text-gray-600 bg-white p-3 rounded-xl border border-sky-100">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-network-wired text-[color:var(--sky-deep)]"></i>
                                <span class="font-bold text-[color:var(--ink)]">Redundancy Ring Topology</span>
                            </div>
                            <span class="text-[11px] font-bold text-teal-600">Active Node</span>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Trust & Stat Counter Bar -->
            <div class="reveal active delay-500 grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-6 max-w-5xl mx-auto mt-12 sm:mt-16 pt-8 sm:pt-10 border-t border-sky-200/60">
                <div class="shine-card card-hover bg-white/90 backdrop-blur-md p-3.5 sm:p-6 rounded-2xl border border-sky-100/90 shadow-md flex flex-col sm:flex-row items-center justify-center text-center sm:text-left gap-2 sm:gap-4 group">
                    <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-sky-100/90 flex items-center justify-center text-[color:var(--sky-deep)] text-lg sm:text-2xl font-bold group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300 shadow-xs shrink-0">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <div>
                        <div class="font-display font-extrabold text-xl sm:text-3xl text-[color:var(--ink)]">100+</div>
                        <div class="text-[10px] sm:text-xs font-bold text-gray-500 uppercase tracking-wider">Klien Terhubung</div>
                    </div>
                </div>

                <div class="shine-card card-hover bg-white/90 backdrop-blur-md p-3.5 sm:p-6 rounded-2xl border border-sky-100/90 shadow-md flex flex-col sm:flex-row items-center justify-center text-center sm:text-left gap-2 sm:gap-4 group">
                    <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-teal-100/90 flex items-center justify-center text-[color:var(--teal)] text-lg sm:text-2xl font-bold group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300 shadow-xs shrink-0">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div>
                        <div class="font-display font-extrabold text-xl sm:text-3xl text-[color:var(--ink)]">99.9%</div>
                        <div class="text-[10px] sm:text-xs font-bold text-gray-500 uppercase tracking-wider">Garansi Uptime SLA</div>
                    </div>
                </div>

                <div class="shine-card card-hover bg-white/90 backdrop-blur-md p-3.5 sm:p-6 rounded-2xl border border-sky-100/90 shadow-md flex flex-col sm:flex-row items-center justify-center text-center sm:text-left gap-2 sm:gap-4 group col-span-2 sm:col-span-1">
                    <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-sky-100/90 flex items-center justify-center text-[color:var(--sky-deep)] text-lg sm:text-2xl font-bold group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300 shadow-xs shrink-0">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div>
                        <div class="font-display font-extrabold text-xl sm:text-3xl text-[color:var(--ink)]">24/7</div>
                        <div class="text-[10px] sm:text-xs font-bold text-gray-500 uppercase tracking-wider">NOC & Priority Support</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Section Produk Kami -->
    <section id="produk" class="py-24 bg-gradient-produk px-6 border-t border-sky-100">
        <div class="container mx-auto">
            <div class="reveal text-center mb-16">
                <span class="eyebrow justify-center mb-3">Solusi & Infrastruktur</span>
                <h2 class="font-display text-3xl md:text-4xl font-extrabold text-[color:var(--ink)] tracking-tight">Katalog Produk Layanan</h2>
                <p class="mt-3 text-gray-600 max-w-xl mx-auto text-sm sm:text-base">Infrastruktur jaringan handal yang dapat disesuaikan dengan kebutuhan jaringan perusahaan Anda.</p>
            </div>

            @php
                $cardImages = [
                    1 => 'bgcard.jpg',
                    2 => 'bgcard2.jpg',
                    3 => 'bgcard3.jpg',
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($produks as $produk)
                @php
                    $imgIndex = (($loop->iteration - 1) % 3) + 1;
                    $cardImage = $cardImages[$imgIndex];
                    $delay = ($loop->iteration * 150) . 'ms';
                @endphp
                <div class="reveal shine-card card-hover bg-white p-8 rounded-3xl border border-sky-100 shadow-sm relative overflow-hidden flex flex-col justify-between group transform-gpu"
                     style="transition-delay: {{ $delay }};">
                    
                    <!-- GPU Accelerated Isolated Background Image Layer -->
                    <div class="absolute inset-0 bg-cover bg-center opacity-25 group-hover:opacity-35 group-hover:scale-105 transition-all duration-500 pointer-events-none transform-gpu"
                         style="background-image: url('{{ asset('assets/' . $cardImage) }}');"></div>
                    
                    <!-- Soft Ambient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-b from-white/95 via-white/90 to-sky-50/90 pointer-events-none"></div>

                    <!-- Top accent line -->
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--teal)] transition-all duration-300 group-hover:h-2 z-10"></div>

                    <div class="relative z-10">
                        <!-- Category Badge -->
                        <div class="flex justify-between items-center mb-6">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider text-[color:var(--sky-deep)] bg-sky-100/80 border border-sky-200">
                                Feature {{ sprintf('%02d', $loop->iteration) }}
                            </span>
                            <div class="w-12 h-12 rounded-2xl bg-white shadow-md flex items-center justify-center text-[color:var(--sky-deep)] text-xl border border-sky-100 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                                <i class="{{ $produk->icon }}"></i>
                            </div>
                        </div>

                        <h3 class="font-display text-xl font-bold text-[color:var(--ink)] mb-4 leading-snug group-hover:text-[color:var(--sky-deep)] transition-colors duration-300">{{ $produk->nama_produk }}</h3>

                        <!-- Rincian Fitur Checklist -->
                        <ul class="text-sm text-gray-700 space-y-3 mb-6">
                            @foreach($produk->details as $item)
                                <li class="flex items-start gap-2.5">
                                    <span class="w-5 h-5 rounded-full bg-teal-100 text-[color:var(--teal)] flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5 group-hover:scale-110 transition-transform duration-300">✓</span>
                                    <span class="font-medium leading-relaxed">{{ $item->detail }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <a href="#kontak" class="relative z-10 w-full mt-4 text-center py-2.5 rounded-xl border border-sky-200 text-[color:var(--sky-deep)] font-bold text-xs uppercase tracking-wider bg-white/80 hover:bg-[color:var(--sky-deep)] hover:text-white hover:shadow-md transition duration-300">
                        Konsultasi Layanan
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section Paket Layanan Broadband -->
    <section id="paket" class="relative py-24 bg-mist px-6 border-t border-sky-100 overflow-hidden">
        @php
            $tierStyles = [
                'bronze'     => [
                    'accent'   => 'from-amber-600 to-amber-500',
                    'badge_bg' => 'bg-amber-50 text-amber-700 border-amber-200',
                    'icon_bg'  => 'bg-amber-100 text-amber-700',
                    'badge'    => 'STARTER',
                    'popular'  => false,
                ],
                'silver'     => [
                    'accent'   => 'from-slate-600 to-gray-500',
                    'badge_bg' => 'bg-slate-100 text-slate-700 border-slate-200',
                    'icon_bg'  => 'bg-slate-100 text-slate-700',
                    'badge'    => 'STANDARD',
                    'popular'  => false,
                ],
                'gold'       => [
                    'accent'   => 'from-amber-500 to-yellow-400',
                    'badge_bg' => 'bg-amber-100 text-amber-800 border-amber-300',
                    'icon_bg'  => 'bg-amber-100 text-amber-600',
                    'badge'    => 'BEST SELLER',
                    'popular'  => true,
                ],
                'platinum'   => [
                    'accent'   => 'from-[color:var(--sky)] to-[color:var(--sky-deep)]',
                    'badge_bg' => 'bg-sky-100 text-[color:var(--sky-deep)] border-sky-200',
                    'icon_bg'  => 'bg-sky-100 text-[color:var(--sky-deep)]',
                    'badge'    => 'POPULER',
                    'popular'  => true,
                ],
                'enterprise' => [
                    'accent'   => 'from-[color:var(--ink)] to-[color:var(--ink-light)]',
                    'badge_bg' => 'bg-sky-900 text-sky-100 border-sky-800',
                    'icon_bg'  => 'bg-sky-100 text-[color:var(--ink)]',
                    'badge'    => 'ENTERPRISE',
                    'popular'  => true,
                ],
                'ultra'      => [
                    'accent'   => 'from-teal-500 to-emerald-400',
                    'badge_bg' => 'bg-teal-50 text-teal-700 border-teal-200',
                    'icon_bg'  => 'bg-teal-100 text-teal-600',
                    'badge'    => 'ULTRA SPEED',
                    'popular'  => false,
                ],
            ];
        @endphp

        <!-- Animated Background Dot Grid -->
        <div class="absolute inset-0 pointer-events-none opacity-30" style="background-image: radial-gradient(circle, rgba(41,171,226,0.3) 1px, transparent 1px); background-size: 24px 24px;"></div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="reveal text-center mb-16">
                <span class="eyebrow justify-center mb-3">Pricelist 2026</span>
                <h2 class="font-display text-3xl md:text-4xl font-extrabold text-[color:var(--ink)] tracking-tight">Paket Jaringan Lastmile</h2>
                <p class="mt-3 text-gray-600 max-w-xl mx-auto text-sm sm:text-base">Pilihlah kapasitas bandwidth jaringan lastmile yang paling sesuai dengan kebutuhan instansi & perusahaan Anda.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-6 lg:gap-8 items-stretch">
                @foreach($broadbands as $paket)
                @php
                    $words = explode(' ', trim($paket->nama_broadband));
                    $tierPrefix = strtolower($words[0] ?? '');
                    $style = $tierStyles[$tierPrefix] ?? [
                        'accent'   => 'from-[color:var(--sky)] to-[color:var(--sky-deep)]',
                        'badge_bg' => 'bg-sky-100 text-[color:var(--sky-deep)] border-sky-200',
                        'icon_bg'  => 'bg-sky-100 text-[color:var(--sky-deep)]',
                        'badge'    => 'BROADBAND',
                        'popular'  => false,
                    ];
                    $delay = (($loop->iteration % 4) * 100) . 'ms';
                @endphp
                
                <div class="reveal shine-card relative group flex flex-col {{ $style['popular'] ? 'lg:-translate-y-2' : '' }}" style="transition-delay: {{ $delay }};">
                    
                    <!-- Popular Tag Badge -->
                    @if($style['popular'])
                        <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 z-30 bg-gradient-to-r from-amber-500 to-yellow-400 text-black text-[9px] sm:text-[10px] font-black uppercase tracking-widest py-1 px-3 sm:px-4 rounded-full shadow-md border border-amber-300 flex items-center gap-1 float-slow">
                            <i class="fa-solid fa-star text-[8px] sm:text-[9px]"></i>
                            <span>{{ $style['badge'] }}</span>
                        </div>
                    @endif

                    <div class="relative bg-white rounded-2xl sm:rounded-3xl p-4 sm:p-7 shadow-md hover:shadow-2xl border border-sky-100/90 flex flex-col justify-between h-full transform transition-all duration-300 group-hover:-translate-y-2 overflow-hidden">
                        
                        <!-- Top Accent Bar -->
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r {{ $style['accent'] }}"></div>

                        <div>
                            <!-- Header Row with Badge & Icon -->
                            <div class="flex items-center justify-between mb-3 sm:mb-5 pt-1">
                                <span class="px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-[9px] sm:text-[10px] font-extrabold uppercase tracking-wider border {{ $style['badge_bg'] }}">
                                    {{ $style['badge'] }}
                                </span>
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl sm:rounded-2xl {{ $style['icon_bg'] }} flex items-center justify-center text-sm sm:text-lg font-bold group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300 shrink-0">
                                    <i class="fa-solid fa-bolt"></i>
                                </div>
                            </div>

                            <!-- Package Name -->
                            <h3 class="font-display text-base sm:text-xl font-extrabold text-[color:var(--ink)] mb-0.5 sm:mb-1 leading-snug group-hover:text-[color:var(--sky-deep)] transition-colors">
                                {{ $paket->nama_broadband }}
                            </h3>
                            <p class="text-[9px] sm:text-[11px] font-semibold text-gray-400 uppercase tracking-wider mb-3 sm:mb-6">High-Speed Lastmile</p>

                            <!-- Speed Capacity Box -->
                            <div class="bg-gradient-to-br from-mist via-white to-sky-50/50 p-2.5 sm:p-4 rounded-xl sm:rounded-2xl border border-sky-100 text-center mb-3 sm:mb-6">
                                <div class="text-[9px] sm:text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-0.5">Kapasitas Kecepatan</div>
                                <div class="flex items-baseline justify-center gap-1">
                                    <span class="font-display text-2xl sm:text-5xl font-extrabold text-[color:var(--ink)] tracking-tight">{{ $paket->kecepatan }}</span>
                                    <span class="font-display font-extrabold text-xs sm:text-lg text-[color:var(--sky-deep)]">Mbps</span>
                                </div>
                            </div>

                            <!-- Price Display Box -->
                            <div class="text-center mb-3 sm:mb-6">
                                <div class="text-[10px] sm:text-xs text-gray-500 font-medium mb-0.5">Biaya Bulanan (MRC)</div>
                                <div class="font-display text-base sm:text-2xl font-extrabold text-[color:var(--ink)]">
                                    Rp {{ number_format($paket->harga, 0, ',', '.') }}<span class="text-[10px] sm:text-xs font-semibold text-gray-500"> /bln</span>
                                </div>
                                <div class="inline-block mt-1 sm:mt-2 px-2 py-0.5 sm:px-3 sm:py-1 rounded-full bg-mist text-[9px] sm:text-[11px] font-semibold text-gray-500 border border-sky-100">
                                    OTC: <span class="font-bold text-gray-700">Rp {{ number_format($paket->otc, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <div class="pt-3 sm:pt-4 border-t border-sky-100/80">
                            <a href="#kontak" class="btn-glow w-full bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--sky-deep)] text-white font-bold py-2.5 sm:py-3.5 px-3 sm:px-6 rounded-xl sm:rounded-2xl text-[10px] sm:text-xs uppercase tracking-wider shadow-md flex items-center justify-center gap-1.5 group-hover:scale-[1.02] transition-transform duration-300">
                                <span>Pilih Paket</span>
                                <i class="fa-solid fa-arrow-right text-[10px] sm:text-xs group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section Portofolio Proyek -->
    <section id="portofolio" class="relative py-24 px-4 sm:px-6 border-t border-sky-800/40 overflow-hidden" style="background: linear-gradient(135deg, #081F38 0%, #0B2A4A 40%, #11426C 75%, #1C8AC0 100%);">
        
        <!-- Subtle Background Glows & Pattern -->
        <div class="absolute inset-0 pointer-events-none opacity-15" style="background-image: radial-gradient(circle, rgba(255,255,255,0.4) 1px, transparent 1px); background-size: 24px 24px;"></div>
        <div class="absolute -top-28 -right-28 w-96 h-96 rounded-full bg-sky-500/15 blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-28 -left-28 w-96 h-96 rounded-full bg-teal-400/15 blur-3xl pointer-events-none"></div>

        <div class="container mx-auto relative z-10">
            <div class="reveal text-center mb-10 sm:mb-14">
                <span class="inline-flex items-center gap-2 font-display font-bold text-xs uppercase tracking-widest text-sky-200 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full border border-white/20 shadow-sm justify-center mb-3">
                    <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                    Rekam Jejak
                </span>
                <h2 class="font-display text-3xl md:text-4xl font-extrabold text-white tracking-tight drop-shadow-sm">Portofolio & Proyek Terpilih</h2>
                <p class="mt-3 text-sky-100/90 max-w-xl mx-auto text-sm sm:text-base font-medium">Pengalaman kami dalam mengimplementasikan jaringan handal di berbagai instansi & perusahaan.</p>
            </div>

            @php
                $customPortfolios = [
                    [
                        'nama_perusahaan' => 'UPTD BANDUNG SELATAN',
                        'kota'            => 'KOTA BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Private Network',
                        'komoditi'        => 'Pemerintahan',
                    ],
                    [
                        'nama_perusahaan' => 'UPTD BANDUNG BARAT',
                        'kota'            => 'KOTA BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Private Network',
                        'komoditi'        => 'Pemerintahan',
                    ],
                    [
                        'nama_perusahaan' => 'UPTD BANDUNG TIMUR',
                        'kota'            => 'KOTA BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Private Network',
                        'komoditi'        => 'Pemerintahan',
                    ],
                    [
                        'nama_perusahaan' => 'UPTD BANDUNG TENGAH',
                        'kota'            => 'KOTA BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Private Network',
                        'komoditi'        => 'Pemerintahan',
                    ],
                    [
                        'nama_perusahaan' => 'DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN BANDUNG',
                        'kota'            => 'KABUPATEN BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Jaringan Lastmile',
                        'komoditi'        => 'Diskominfo',
                    ],
                    [
                        'nama_perusahaan' => 'UPTD GERAI PELAYANAN PUBLIK KOTA BANDUNG',
                        'kota'            => 'KOTA BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Public Service Net',
                        'komoditi'        => 'Pelayanan Publik',
                    ],
                    [
                        'nama_perusahaan' => 'GERAI SIM POLRESTABES BANDUNG',
                        'kota'            => 'KOTA BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Dedicated Network',
                        'komoditi'        => 'Kepolisian / SIM',
                    ],
                    [
                        'nama_perusahaan' => 'ISS BANDUNG NEUVIZ',
                        'kota'            => 'KOTA BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Corporate Network',
                        'komoditi'        => 'IT Provider / ISS',
                    ],
                    [
                        'nama_perusahaan' => 'SMK NEGERI 13 KOTA BANDUNG',
                        'kota'            => 'KOTA BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Education Dedicated',
                        'komoditi'        => 'Pendidikan / Sekolah',
                    ],
                    [
                        'nama_perusahaan' => 'TRANSMART BUAH BATU',
                        'kota'            => 'KABUPATEN BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Commercial Network',
                        'komoditi'        => 'Ritel & Pusat Perbelanjaan',
                    ],
                    [
                        'nama_perusahaan' => 'BBU - DINAS TENAGA KERJA KOTA BANDUNG',
                        'kota'            => 'KOTA BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Private Network',
                        'komoditi'        => 'Disnaker / Balai Pelatihan',
                    ],
                    [
                        'nama_perusahaan' => 'SMA NEGERI 22 KOTA BANDUNG',
                        'kota'            => 'KOTA BANDUNG',
                        'provinsi'        => 'JAWA BARAT',
                        'jenis_layanan'   => 'Education Dedicated',
                        'komoditi'        => 'Pendidikan / Sekolah',
                    ],
                ];
            @endphp

            <!-- Swiper 3D Coverflow Carousel Container -->
            <div class="reveal relative max-w-6xl mx-auto">
                <div class="swiper portfolio-swiper py-10">
                    <div class="swiper-wrapper items-stretch">
                        @foreach($customPortfolios as $porto)
                        <div class="swiper-slide !w-[290px] sm:!w-[360px] md:!w-[400px] h-auto">
                            <div class="shine-card bg-white/95 backdrop-blur-md rounded-3xl border border-white/50 p-6 sm:p-7 flex flex-col justify-between h-full relative overflow-hidden shadow-2xl group">
                                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-[color:var(--sky)] via-teal-400 to-[color:var(--sky-deep)] transition-all duration-300 group-hover:h-2.5"></div>

                                <div>
                                    <div class="flex items-center justify-between gap-2 mb-4">
                                        <span class="text-xs font-bold uppercase tracking-wider text-[color:var(--sky-deep)] bg-sky-100/90 px-3 py-1 rounded-full border border-sky-200 shadow-2xs">
                                            {{ $porto['jenis_layanan'] }}
                                        </span>
                                        <span class="text-xs font-bold text-gray-600 flex items-center gap-1.5 bg-gray-100/80 px-2.5 py-1 rounded-lg border border-gray-200">
                                            <i class="fa-solid fa-location-dot text-[color:var(--sky)]"></i>
                                            {{ $porto['kota'] }}
                                        </span>
                                    </div>

                                    <h3 class="font-display text-base sm:text-lg font-extrabold text-[color:var(--ink)] mb-3 leading-snug group-hover:text-[color:var(--sky-deep)] transition-colors duration-300">
                                        {{ $porto['nama_perusahaan'] }}
                                    </h3>

                                    <p class="text-xs font-medium text-gray-500 mb-6 flex items-center gap-1.5">
                                        <i class="fa-solid fa-map-location text-sky-400"></i>
                                        <span>Wilayah: <strong class="text-gray-700 font-semibold">{{ $porto['provinsi'] }}</strong></span>
                                    </p>
                                </div>

                                <div class="border-t border-sky-100 pt-4 flex justify-between items-center text-xs">
                                    <span class="text-gray-500 font-medium">Sektor Proyek:</span>
                                    <span class="bg-sky-50 text-[color:var(--sky-deep)] px-3 py-1.5 rounded-lg font-bold border border-sky-200 shadow-2xs group-hover:border-sky-300 transition-colors duration-300">
                                        {{ $porto['komoditi'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Custom Navigation Arrows & Pagination Dots -->
                <div class="flex items-center justify-between sm:justify-center gap-2 sm:gap-6 mt-6 px-4 max-w-sm sm:max-w-md mx-auto w-full">
                    <button class="swiper-button-prev-porto w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-white/20 hover:bg-[color:var(--sky)] text-white border border-white/30 backdrop-blur-md flex items-center justify-center transition-all duration-300 hover:scale-110 active:scale-95 shadow-xl shrink-0">
                        <i class="fa-solid fa-chevron-left text-sm sm:text-base"></i>
                    </button>

                    <div class="swiper-pagination-portfolio !w-auto flex items-center justify-center gap-1 mx-auto"></div>

                    <button class="swiper-button-next-porto w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-white/20 hover:bg-[color:var(--sky)] text-white border border-white/30 backdrop-blur-md flex items-center justify-center transition-all duration-300 hover:scale-110 active:scale-95 shadow-xl shrink-0">
                        <i class="fa-solid fa-chevron-right text-sm sm:text-base"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Klien Kami -->
    <section id="klien" class="py-20 bg-mist px-6 border-t border-sky-100">
        <div class="container mx-auto max-w-5xl">
            <div class="reveal text-center mb-12">
                <span class="eyebrow justify-center mb-3">Kepercayaan Mitra</span>
                <h2 class="font-display text-2xl md:text-3xl font-extrabold text-[color:var(--ink)] tracking-tight">Klien & Mitra Kami</h2>
                <p class="mt-2 text-gray-600 text-sm max-w-lg mx-auto font-medium">Dipercaya oleh instansi pemerintah, penyedia layanan IT, dan perusahaan terkemuka.</p>
            </div>

            @php
                $clientList = [
                    [
                        'nama' => 'Dinas Komunikasi dan Informatika (Diskominfo)',
                        'gambar' => 'diskominfo.jfif',
                        'scale'  => 'scale-[1.55] sm:scale-[1.7]',
                    ],
                    [
                        'nama' => 'ISS Bandung Neuviz',
                        'gambar' => 'iss.png',
                        'scale'  => 'scale-100',
                    ],
                    [
                        'nama' => 'PT. Media Sistem Network (MSN)',
                        'gambar' => 'msn.png',
                        'scale'  => 'scale-110',
                    ],
                ];

                if (isset($clients) && count($clients) > 0) {
                    foreach ($clients as $c) {
                        $clientList[] = [
                            'nama' => $c->nama_client ?? 'Klien',
                            'gambar' => str_starts_with($c->gambar, 'clients/') ? $c->gambar : 'clients/' . $c->gambar,
                            'scale'  => 'scale-100',
                        ];
                    }
                }
            @endphp

            <div class="flex flex-wrap justify-center items-center gap-6 md:gap-10 max-w-4xl mx-auto">
                @foreach($clientList as $client)
                @php
                    $delay = ($loop->iteration * 100) . 'ms';
                    $imgPath = asset('assets/' . $client['gambar']);
                    $scaleClass = $client['scale'] ?? 'scale-100';
                @endphp
                <div class="reveal shine-card card-hover bg-white p-6 rounded-2xl border border-sky-100 shadow-sm hover:shadow-xl hover:border-sky-300 transition-all duration-300 flex justify-center items-center group h-28 w-44 sm:w-56 transform hover:-translate-y-1.5 overflow-hidden" style="transition-delay: {{ $delay }};">
                    <img src="{{ $imgPath }}" 
                         alt="{{ $client['nama'] }}" 
                         title="{{ $client['nama'] }}"
                         class="max-h-16 max-w-full object-contain {{ $scaleClass }} group-hover:scale-125 transition-all duration-300">
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section FAQ (Pertanyaan Umum) -->
    <section id="faq" class="pt-20 pb-8 sm:pt-24 sm:pb-10 bg-gradient-to-b from-mist/50 via-white to-mist/30 px-6 border-t border-sky-100 relative overflow-hidden">
        <!-- Subtle background glow decoration -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-sky-200/20 blur-[100px] rounded-full pointer-events-none"></div>

        <div class="container mx-auto max-w-4xl relative z-10">
            <div class="reveal text-center mb-14">
                <span class="eyebrow justify-center mb-3">
                    <i class="fa-solid fa-circle-question text-[color:var(--sky-deep)] text-xs mr-1"></i> Pusat Informasi
                </span>
                <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-[color:var(--ink)] tracking-tight">Pertanyaan Umum (FAQ)</h2>
                <p class="mt-3 text-gray-600 text-sm sm:text-base max-w-xl mx-auto">Temukan jawaban atas pertanyaan yang paling sering diajukan mengenai layanan dan konektivitas CJP.</p>
            </div>

            <div class="space-y-4">
                @forelse($faqs as $faq)
                <div x-data="{ expanded: false }" 
                     class="reveal shine-card bg-white border rounded-2xl transition-all duration-300 shadow-sm hover:shadow-md overflow-hidden"
                     :class="expanded ? 'border-sky-300 ring-4 ring-sky-500/10 shadow-lg' : 'border-sky-100/80 hover:border-sky-200'">
                    
                    <button @click="expanded = ! expanded" 
                            class="w-full px-6 py-5 text-left font-semibold text-[color:var(--ink)] flex items-center justify-between gap-4 transition focus:outline-none group">
                        
                        <div class="flex items-center gap-4 flex-1">
                            <span class="w-9 h-9 rounded-xl flex items-center justify-center font-display font-bold text-xs shrink-0 transition-colors duration-300"
                                  :class="expanded ? 'bg-gradient-to-br from-[color:var(--sky)] to-[color:var(--sky-deep)] text-white shadow-sm' : 'bg-sky-50 text-[color:var(--sky-deep)] group-hover:bg-sky-100'">
                                Q{{ $loop->iteration }}
                            </span>
                            <span class="font-display font-bold text-base sm:text-lg text-[color:var(--ink)] group-hover:text-[color:var(--sky-deep)] transition-colors leading-snug">
                                {{ $faq->pertanyaan }}
                            </span>
                        </div>

                        <div class="w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-all duration-300"
                             :class="expanded ? 'bg-[color:var(--sky)] text-white rotate-180 shadow-xs' : 'bg-sky-100/70 text-[color:var(--sky-deep)] group-hover:bg-sky-200/80'">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </button>
                    
                    <div x-show="expanded" x-collapse>
                        <div class="px-6 pb-6 pt-1">
                            <div class="p-4 sm:p-5 rounded-xl bg-gradient-to-r from-sky-50/70 via-mist/80 to-sky-50/40 border border-sky-100/80 text-gray-700 text-sm leading-relaxed flex items-start gap-3.5">
                                <div class="w-7 h-7 rounded-lg bg-teal-500/10 text-teal-600 flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">
                                    <i class="fa-solid fa-check text-xs"></i>
                                </div>
                                <div class="flex-1 text-gray-700 font-medium leading-relaxed">
                                    {{ $faq->jawaban }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center py-12 bg-mist/60 rounded-2xl border border-sky-100">
                    <div class="w-14 h-14 rounded-2xl bg-sky-100 flex items-center justify-center mx-auto text-sky-500 text-xl mb-3">
                        <i class="fa-solid fa-folder-open"></i>
                    </div>
                    <p class="text-gray-500 font-medium text-sm">Belum ada data FAQ saat ini.</p>
                </div>
                @endforelse
            </div>

            <!-- Banner Bantuan Tambahan -->
            <div class="reveal mt-6 sm:mt-8 p-6 sm:p-8 rounded-2xl bg-gradient-to-r from-[color:var(--ink)] to-[color:var(--ink-light)] text-white shadow-xl flex flex-col sm:flex-row items-center justify-between gap-6 border border-sky-900/30">
                <div class="flex items-center gap-4 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-white/10 border border-white/20 flex items-center justify-center text-sky-300 text-xl shrink-0">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div>
                        <h4 class="font-display font-bold text-base sm:text-lg">Masih Punya Pertanyaan Lain?</h4>
                        <p class="text-xs sm:text-sm text-sky-200/80 mt-0.5">Tim dukungan teknis & layanan pelanggan kami siap membantu Anda 24/7.</p>
                    </div>
                </div>
                <a href="#kontak" class="btn-glow px-6 py-3 rounded-xl bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--sky-deep)] text-white font-bold text-xs uppercase tracking-wider shrink-0 shadow-md hover:scale-105 transition-all duration-300 flex items-center gap-2">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>Hubungi Kami</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Section Kontak & Form Saran -->
    <section id="kontak" class="pt-6 pb-20 sm:pt-8 sm:pb-24 bg-mist px-6 border-t border-sky-100">
        <div class="container mx-auto max-w-5xl">
            <div class="reveal shine-card bg-white rounded-3xl shadow-xl overflow-hidden md:flex border border-sky-100">
                
                <!-- Info Panel Kiri -->
                <div class="p-10 md:w-5/12 text-white flex flex-col justify-between relative overflow-hidden" style="background: linear-gradient(160deg, var(--sky-deep) 0%, var(--ink) 100%);">
                    <div class="relative z-10">
                        <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider text-sky-200 bg-white/10 border border-white/20 inline-block mb-4">
                            Hubungi Kami
                        </span>
                        <h3 class="font-display text-3xl font-extrabold mb-4 leading-snug">Ada Pertanyaan & Saran?</h3>
                        <p class="text-sky-100/90 text-sm mb-8 leading-relaxed">Tim dukungan kami siap membantu Anda 24/7. Silakan isi formulir di samping untuk informasi lebih lanjut.</p>
                        
                        <div class="space-y-4 text-sm font-medium">
                            <div class="flex items-center gap-3.5 bg-white/10 p-3.5 rounded-xl border border-white/10 hover:bg-white/20 transition duration-300">
                                <i class="fa-solid fa-envelope text-sky-300 text-base"></i>
                                <span>info@cjpnetwork.com</span>
                            </div>
                            <div class="flex items-center gap-3.5 bg-white/10 p-3.5 rounded-xl border border-white/10 hover:bg-white/20 transition duration-300">
                                <i class="fa-solid fa-headset text-teal-300 text-base"></i>
                                <span>Layanan Support 24/7</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 pt-6 border-t border-white/15 text-xs text-sky-200 relative z-10">
                        © Dedicated Private Network Solutions
                    </div>
                </div>

                <!-- Form Panel Kanan -->
                <div class="p-8 md:p-10 md:w-7/12 bg-white">
                    @if(session('success'))
                        <div class="bg-teal-50 border border-teal-300 text-teal-800 px-4 py-3.5 rounded-xl mb-6 text-sm font-bold flex items-center gap-2.5 animate-bounce">
                            <i class="fa-solid fa-circle-check text-teal-500 text-base"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('kontak.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Nama Depan</label>
                                <input type="text" name="nama_depan" required class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-sky-400 focus:border-sky-500 outline-none transition duration-300 text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Nama Belakang</label>
                                <input type="text" name="nama_belakang" required class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-sky-400 focus:border-sky-500 outline-none transition duration-300 text-sm">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Alamat Email</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-sky-400 focus:border-sky-500 outline-none transition duration-300 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Judul / Topik</label>
                            <input type="text" name="judul" required class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-sky-400 focus:border-sky-500 outline-none transition duration-300 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Pesan / Saran</label>
                            <textarea name="pesan" rows="4" required class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-sky-400 focus:border-sky-500 outline-none resize-none transition duration-300 text-sm"></textarea>
                        </div>
                        <button type="submit" class="btn-glow w-full bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--sky-deep)] text-white font-bold py-3.5 px-6 rounded-xl shadow-lg flex items-center justify-center gap-2 group">
                            <i class="fa-solid fa-paper-plane text-xs group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-300"></i>
                            <span>Kirim Pesan</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Alamat & Lokasi Maps -->
    <section id="lokasi" class="py-24 bg-white px-6 border-t border-sky-100">
        <div class="container mx-auto max-w-5xl">
            <div class="reveal text-center mb-16">
                <span class="eyebrow justify-center mb-3">Lokasi Operasional</span>
                <h2 class="font-display text-3xl md:text-4xl font-extrabold text-[color:var(--ink)] tracking-tight">Lokasi Kantor & Head Office</h2>
                <p class="mt-3 text-gray-600 max-w-xl mx-auto text-sm sm:text-base">Kunjungi kantor operasional kami atau buka petunjuk arah langsung melalui Google Maps.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">
                
                <!-- Info Alamat Left Panel (5 Cols) -->
                <div class="reveal md:col-span-5 shine-card bg-mist p-8 rounded-3xl border border-sky-100 shadow-lg flex flex-col justify-between relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--teal)]"></div>

                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-sky-100 flex items-center justify-center text-[color:var(--sky-deep)] text-xl font-bold border border-sky-200">
                                <i class="fa-solid fa-building-user"></i>
                            </div>
                            <div>
                                <h3 class="font-display text-lg font-extrabold text-[color:var(--ink)]">PT. Connecti Jelajah Priangan</h3>
                                <p class="text-xs font-bold text-[color:var(--sky-deep)] uppercase tracking-wider">CJP Network Solutions</p>
                            </div>
                        </div>

                        <div class="space-y-4 text-sm text-gray-700">
                            <div class="flex items-start gap-3.5 bg-white p-4 rounded-2xl border border-sky-100 shadow-2xs">
                                <i class="fa-solid fa-location-dot text-[color:var(--sky)] text-lg flex-shrink-0 mt-0.5"></i>
                                <div>
                                    <div class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-0.5">Alamat Kantor</div>
                                    <div class="font-medium text-gray-800 leading-relaxed">PT. Connecti Jelajah Priangan (CJP), Jl. Reog No.18, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-3.5 bg-white p-4 rounded-2xl border border-sky-100 shadow-2xs">
                                <i class="fa-solid fa-clock text-[color:var(--teal)] text-lg flex-shrink-0 mt-0.5"></i>
                                <div>
                                    <div class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-0.5">Jam Operasional</div>
                                    <div class="font-medium text-gray-800">Senin - Jumat: 08.00 - 17.00 WIB</div>
                                    <div class="text-xs text-[color:var(--teal)] font-bold mt-0.5">Support & Monitoring 24/7</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-3.5 bg-white p-4 rounded-2xl border border-sky-100 shadow-2xs">
                                <i class="fa-solid fa-phone text-[color:var(--sky-deep)] text-lg flex-shrink-0 mt-0.5"></i>
                                <div>
                                    <div class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-0.5">Kontak & Email</div>
                                    <div class="font-medium text-gray-800">info@cjpnetwork.com</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="https://www.google.com/maps/place/PT.CJP+(+Connecti+Jelajah+Priangan+)/@-6.9369878,107.6293815,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e8666588e463:0xddd296d9a427e333!8m2!3d-6.9369931!4d107.6319564!16s%2Fg%2F11c1tt7q4w" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="btn-glow w-full mt-8 bg-gradient-to-r from-[color:var(--sky)] to-[color:var(--sky-deep)] text-white font-bold py-3.5 px-6 rounded-xl shadow-md flex items-center justify-center gap-2.5 text-xs uppercase tracking-wider group">
                        <i class="fa-solid fa-map-location-dot text-sm group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Buka di Google Maps</span>
                    </a>
                </div>

                <!-- Google Maps Embed Right Panel (7 Cols) -->
                <div class="reveal md:col-span-7 shine-card bg-white p-3 rounded-3xl border border-sky-100 shadow-xl overflow-hidden min-h-[380px] flex">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6725830953285!2d107.6293815!3d-6.9369878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8666588e463%3A0xddd296d9a427e333!2sPT.CJP%20(%20Connecti%20Jelajah%20Priangan%20)!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                            class="w-full h-full min-h-[380px] rounded-2xl border-0" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer Multi-Kolom -->
    <footer class="text-gray-300 pt-16 pb-12 px-6" style="background: var(--ink);">
        <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-10 pb-12 border-b border-gray-800">
            
            <!-- Col 1: Brand Info -->
            <div class="space-y-4 col-span-2 md:col-span-1">
                <div class="flex items-center">
                    <img src="{{ asset('assets/cjp.png') }}" alt="Logo" class="h-9 brightness-0 invert opacity-90 hover:opacity-100 transition-opacity duration-300">
                </div>
                <p class="text-xs text-gray-400 leading-relaxed">
                    Penyedia infrastruktur Internet Private Network yang cepat, terpercaya, dan aman untuk menjamin kelancaran konektivitas digital Anda.
                </p>
            </div>

            <!-- Col 2: Quick Nav -->
            <div class="col-span-1">
                <h4 class="font-display font-bold text-sm text-white uppercase tracking-wider mb-4">Navigasi Utama</h4>
                <ul class="space-y-2.5 text-xs text-gray-400">
                    <li><a href="#beranda" class="hover:text-[color:var(--sky)] transition duration-200">Beranda</a></li>
                    <li><a href="#produk" class="hover:text-[color:var(--sky)] transition duration-200">Katalog Produk</a></li>
                    <li><a href="#paket" class="hover:text-[color:var(--sky)] transition duration-200">Paket Lastmile</a></li>
                    <li><a href="#portofolio" class="hover:text-[color:var(--sky)] transition duration-200">Portofolio</a></li>
                    <li><a href="#faq" class="hover:text-[color:var(--sky)] transition duration-200">FAQ</a></li>
                </ul>
            </div>

            <!-- Col 3: Layanan -->
            <div class="col-span-1">
                <h4 class="font-display font-bold text-sm text-white uppercase tracking-wider mb-4">Layanan Utama</h4>
                <ul class="space-y-2.5 text-xs text-gray-400">
                    <li><a href="#produk" class="hover:text-[color:var(--sky)] transition duration-200">Private Network Dedicated</a></li>
                    <li><a href="#paket" class="hover:text-[color:var(--sky)] transition duration-200">Jaringan Lastmile Dedicated</a></li>
                    <li><a href="#kontak" class="hover:text-[color:var(--sky)] transition duration-200">Kemitraan & Infrastruktur</a></li>
                    <li><a href="#kontak" class="hover:text-[color:var(--sky)] transition duration-200">Technical Support 24/7</a></li>
                </ul>
            </div>

            <!-- Col 4: Sosial Media & Legal -->
            <div class="col-span-2 md:col-span-1">
                <h4 class="font-display font-bold text-sm text-white uppercase tracking-wider mb-4">Ikuti Kami</h4>
                <div class="flex gap-3 mb-6">
                    <a href="#" class="w-9 h-9 rounded-xl bg-white/10 hover:bg-[color:var(--sky)] hover:text-white hover:scale-110 transition-all duration-300 flex items-center justify-center text-sm">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-xl bg-white/10 hover:bg-[color:var(--sky)] hover:text-white hover:scale-110 transition-all duration-300 flex items-center justify-center text-sm">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-xl bg-white/10 hover:bg-[color:var(--sky)] hover:text-white hover:scale-110 transition-all duration-300 flex items-center justify-center text-sm">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-xl bg-white/10 hover:bg-[color:var(--sky)] hover:text-white hover:scale-110 transition-all duration-300 flex items-center justify-center text-sm">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
                <p class="text-xs text-gray-500">
                    Sistem terpantau & aman 24 jam nonstop.
                </p>
            </div>
        </div>

        <div class="container mx-auto pt-8 flex flex-col sm:flex-row justify-between items-center text-xs text-gray-500 gap-4">
            <div>
                &copy; {{ date('Y') }} CJP. Hak Cipta Dilindungi Undang-Undang.
            </div>
            <div class="flex gap-6">
                <a href="#" class="hover:text-gray-400 transition">Kebijakan Privasi</a>
                <a href="#" class="hover:text-gray-400 transition">Syarat & Ketentuan</a>
            </div>
        </div>
    </footer>

    <!-- Interactive Scroll Reveal & Smooth Animation Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const revealElements = document.querySelectorAll(".reveal");

            const revealOnScroll = function () {
                const windowHeight = window.innerHeight;
                revealElements.forEach(function (el) {
                    const elementTop = el.getBoundingClientRect().top;
                    const elementVisible = 80;
                    if (elementTop < windowHeight - elementVisible) {
                        el.classList.add("active");
                    }
                });
            };

            window.addEventListener("scroll", revealOnScroll);
            revealOnScroll(); // Trigger initial check on load

            // Swiper 3D Coverflow Carousel Initialization
            if (typeof Swiper !== 'undefined') {
                new Swiper('.portfolio-swiper', {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    loop: true,
                    speed: 500,
                    coverflowEffect: {
                        rotate: 15,
                        stretch: 0,
                        depth: 120,
                        modifier: 1,
                        slideShadows: false,
                    },
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination-portfolio',
                        clickable: true,
                        dynamicBullets: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next-porto',
                        prevEl: '.swiper-button-prev-porto',
                    },
                });
            }
        });
    </script>
</body>
</html>
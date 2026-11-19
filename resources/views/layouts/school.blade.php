<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title", "SMK Yadika Manado") - Disiplin Nafasku, Prestasi Tujuanku</title>
    
    <link rel="icon" type="image/png" href="{{ asset("img/logo-yadikamanado.png") }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset("img/logo-yadikamanado.png") }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>
    @vite(["resources/css/app.css", "resources/js/app.js"])

    <style>
        body { font-family: "Plus Jakarta Sans", sans-serif; }
        .nav-link-item { color: #ffffff !important; font-weight: 600; font-size: 0.875rem; padding: 0.5rem 0.875rem; border-radius: 0.75rem; transition: all 0.2s; }
        .nav-link-item:hover { background-color: rgba(255, 255, 255, 0.2) !important; color: #ffffff !important; }
        .nav-link-active { background-color: rgba(255, 255, 255, 0.28) !important; color: #ffffff !important; font-weight: 700; }
    </style>
</head>
<body class="bg-[#f0f7fd] text-slate-800 min-h-screen flex flex-col" x-data="{ mobileMenuOpen: false }">

    <!-- Top Bar -->
    <div style="background-color: #0c4a6e !important; color: #e0f2fe !important;" class="text-xs py-2 px-4 border-b border-sky-800">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-5 font-medium">
                <span class="flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-sky-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Kota Manado, Sulawesi Utara
                </span>
                <span class="hidden sm:flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-sky-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    smkyadikamanado@yahoo.co.id
                </span>
            </div>
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="text-[11px] font-bold tracking-wider text-white uppercase">SPMB T.P 2027/2028 RESMI DIBUKA</span>
            </div>
        </div>
    </div>

    <!-- Header Navbar Biru Terang Solid -->
    <header style="background-color: #0284c7 !important;" class="sticky top-0 z-50 shadow-md py-3 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                
                <!-- Logo & Brand Sekolah -->
                <a href="{{ route("home") }}" class="flex items-center gap-3.5 group text-white">
                    <div class="w-12 h-12 rounded-2xl bg-white p-1.5 shadow-md flex items-center justify-center shrink-0">
                        <img src="{{ asset("img/logo-yadikamanado.png") }}" alt="Logo SMK Yadika Manado" width="44" height="44" style="width:44px; height:44px;" class="w-11 h-11 object-contain">
                    </div>
                    <div>
                        <span class="block font-black text-lg sm:text-xl text-white tracking-tight leading-none">
                            SMK YADIKA MANADO
                        </span>
                        <span class="text-[10px] font-bold text-sky-100 tracking-wider uppercase mt-1 block">
                            Disiplin Nafasku, Prestasi Tujuanku
                        </span>
                    </div>
                </a>

                <!-- Navigasi Menu Desktop -->
                <nav class="hidden lg:flex items-center gap-1">
                    <a href="{{ route("home") }}" class="nav-link-item {{ request()->routeIs("home") ? "nav-link-active" : "" }}">
                        Beranda
                    </a>
                    <a href="{{ route("profile") }}" class="nav-link-item {{ request()->routeIs("profile") ? "nav-link-active" : "" }}">
                        Profil &amp; Struktur
                    </a>
                    <a href="{{ route("majors.index") }}" class="nav-link-item {{ request()->routeIs("majors.*") ? "nav-link-active" : "" }}">
                        Jurusan
                    </a>
                    <a href="{{ route("pendaftar") }}" class="nav-link-item {{ request()->routeIs("pendaftar") ? "nav-link-active" : "" }}">
                        Pendaftar
                    </a>
                    <a href="{{ route("gallery") }}" class="nav-link-item {{ request()->routeIs("gallery") ? "nav-link-active" : "" }}">
                        Galeri
                    </a>
                    <a href="{{ route("spmb") }}" style="background-color: #082f49 !important; color: #ffffff !important; border: 1px solid rgba(255,255,255,0.2) !important;" class="px-4 py-2 rounded-xl font-extrabold text-sm shadow-md hover:bg-slate-900 transition ml-1">
                        SPMB 2027/2028
                    </a>
                    <a href="{{ route("contact") }}" class="nav-link-item {{ request()->routeIs("contact") ? "nav-link-active" : "" }}">
                        Kontak
                    </a>
                </nav>

                <!-- Tombol Admin -->
                <div class="hidden lg:flex items-center gap-3">
                    @auth
                        <a href="{{ route("admin.dashboard") }}" style="background-color: #0f172a !important; color: #ffffff !important;" class="px-4 py-2 rounded-xl font-bold text-xs shadow hover:bg-black transition">Dashboard</a>
                    @else
                        <a href="{{ route("login") }}" style="background-color: rgba(255,255,255,0.18) !important; color: #ffffff !important; border: 1px solid rgba(255,255,255,0.3) !important;" class="px-4 py-2 rounded-xl font-bold text-xs transition hover:bg-white/25">Masuk Admin</a>
                    @endauth
                </div>

                <!-- Tombol Hamburger Mobile -->
                <div class="flex items-center lg:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-2 rounded-xl bg-white/20 text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-transition style="background-color: #0369a1 !important;" class="lg:hidden px-4 py-5 space-y-2 text-white" style="display: none;">
            <a href="{{ route("home") }}" class="block px-3 py-2 rounded-xl text-white font-medium hover:bg-white/10">Beranda</a>
            <a href="{{ route("profile") }}" class="block px-3 py-2 rounded-xl text-white font-medium hover:bg-white/10">Profil &amp; Struktur</a>
            <a href="{{ route("majors.index") }}" class="block px-3 py-2 rounded-xl text-white font-medium hover:bg-white/10">Jurusan</a>
            <a href="{{ route("pendaftar") }}" class="block px-3 py-2 rounded-xl text-white font-medium hover:bg-white/10">Pendaftar</a>
            <a href="{{ route("gallery") }}" class="block px-3 py-2 rounded-xl text-white font-medium hover:bg-white/10">Galeri</a>
            <a href="{{ route("spmb") }}" style="background-color: #082f49 !important; color: #ffffff !important;" class="block px-3 py-2 rounded-xl font-extrabold">SPMB 2027/2028</a>
            <a href="{{ route("contact") }}" class="block px-3 py-2 rounded-xl text-white font-medium hover:bg-white/10">Kontak</a>
            <div class="pt-2 border-t border-white/20">
                <a href="{{ route("login") }}" style="background-color: #0f172a !important; color: #ffffff !important;" class="block text-center py-2.5 rounded-xl font-bold text-xs">Masuk Admin</a>
            </div>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="flex-grow">
        @yield("content")
    </main>

    <!-- Footer -->
    <footer style="background-color: #0f172a !important; color: #cbd5e1 !important;" class="pt-16 pb-12 mt-16 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-2xl bg-white p-1.5 flex items-center justify-center shrink-0">
                            <img src="{{ asset("img/logo-yadikamanado.png") }}" alt="Logo SMK Yadika" width="40" height="40" style="width:40px; height:40px;" class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <span class="font-black text-white text-base block">SMK YADIKA MANADO</span>
                            <span class="text-[10px] text-sky-400 uppercase font-bold">Yayasan Abdi Karya</span>
                        </div>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Mencetak tenaga vokasi berkarakter unggul, berkeahlian kompetitif standar industri, dan siap kerja.
                    </p>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm mb-4">Program Keahlian</h4>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li>Teknik Jaringan Komputer &amp; Telekomunikasi</li>
                        <li>Layanan Kesehatan</li>
                        <li>Akuntansi &amp; Keuangan Lembaga</li>
                        <li>Teknologi Farmasi</li>
                        <li>Manajemen Perkantoran &amp; Bisnis</li>
                        <li>Perhotelan</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm mb-4">Navigasi Cepat</h4>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li><a href="{{ route("home") }}" class="hover:text-white">Beranda Utama</a></li>
                        <li><a href="{{ route("profile") }}" class="hover:text-white">Profil &amp; Struktur</a></li>
                        <li><a href="{{ route("pendaftar") }}" class="hover:text-white">Data Pendaftar SPMB</a></li>
                        <li><a href="{{ route("gallery") }}" class="hover:text-white">Galeri Kegiatan</a></li>
                        <li><a href="{{ route("contact") }}" class="hover:text-white">Kontak Sekolah</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm mb-4">Alamat Kampus</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Jl. Raya Manado - Bitung, Kolongan, Kec. Kalawat, Minahasa Utara, Sulawesi Utara.<br><br>
                        Email: smkyadikamanado@yahoo.co.id
                    </p>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-800 flex justify-between text-xs text-slate-400">
                <p>&copy; 2026 SMK Yadika Manado. All Rights Reserved.</p>
                <span class="text-sky-400 font-bold italic">"Disiplin Nafasku, Prestasi Tujuanku"</span>
            </div>
        </div>
    </footer>
</body>
</html>
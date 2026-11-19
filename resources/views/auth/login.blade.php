<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk Administrator - SMK Yadika Manado</title>
    
    <link rel="icon" type="image/png" href="{{ asset('img/logo-yadikamanado.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-yadikamanado.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Alpine.js untuk Animasi & Interaksi Form -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-20px) scale(1.05); }
        }
        @keyframes float-reverse {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(20px) scale(0.95); }
        }
        @keyframes pulse-glow {
            0%, 100% { opacity: 0.4; }
            50% { opacity: 0.8; }
        }
        .animate-float1 { animation: float-slow 8s ease-in-out infinite; }
        .animate-float2 { animation: float-reverse 10s ease-in-out infinite; }
        .animate-glow { animation: pulse-glow 4s ease-in-out infinite; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="min-h-screen bg-slate-950 flex items-center justify-center p-4 sm:p-6 lg:p-8 relative overflow-hidden" 
      x-data="{ showPass: false, isSubmitting: false }">

    <!-- Background Animasi Orbs Cahaya Lembut Dinamis -->
    <div class="absolute -top-32 -left-32 w-[500px] h-[500px] bg-soft-blue-500/25 rounded-full blur-[120px] animate-float1 pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-[550px] h-[550px] bg-sky-400/20 rounded-full blur-[140px] animate-float2 pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-600/15 rounded-full blur-[160px] animate-glow pointer-events-none"></div>

    <!-- Pola Grid Halus di Latar Belakang -->
    <div class="absolute inset-0 bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:32px_32px] opacity-[0.07] pointer-events-none"></div>

    <!-- Kartu Login Split Canvas Kekinian -->
    <main class="w-full max-w-4xl relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 rounded-[2.5rem] bg-white/[0.08] backdrop-blur-2xl border border-white/20 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.7)] overflow-hidden transition-all duration-500 hover:border-white/30">
            
            <!-- Kolom Kiri: Showcase Brand & Identitas Sekolah -->
            <div class="lg:col-span-5 bg-gradient-to-br from-soft-blue-600/90 via-soft-blue-700/80 to-slate-900/90 p-8 sm:p-10 flex flex-col justify-between relative overflow-hidden border-b lg:border-b-0 lg:border-r border-white/10">
                <!-- Aksen Cahaya Lingkaran Interior -->
                <div class="absolute -top-16 -right-16 w-48 h-48 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>

                <!-- Bagian Atas Brand -->
                <div class="relative z-10">
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 text-white text-xs font-semibold backdrop-blur-md transition group mb-8">
                        <svg class="w-3.5 h-3.5 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali ke Portal
                    </a>

                    <div class="w-20 h-20 rounded-3xl bg-white p-3 shadow-2xl shadow-black/40 flex items-center justify-center transform transition duration-500 hover:scale-105 hover:rotate-3 border border-white/30 mb-6">
                        <img src="{{ asset('img/logo-yadikamanado.png') }}" alt="Logo SMK Yadika Manado" class="w-full h-full object-contain" onerror="this.src='{{ asset('img/loo.png') }}'">
                    </div>

                    <h1 class="text-2xl sm:text-3xl font-black text-white tracking-tight leading-tight">
                        SMK YADIKA<br><span class="text-soft-blue-200">MANADO</span>
                    </h1>
                    <p class="text-xs font-bold text-soft-blue-200 uppercase tracking-widest mt-2">
                        Yayasan Abdi Karya
                    </p>
                </div>

                <!-- Bagian Bawah: Slogan & Informasi Keamanan -->
                <div class="relative z-10 mt-10 lg:mt-0 pt-6 border-t border-white/15">
                    <div class="p-3.5 rounded-2xl bg-black/20 border border-white/10 backdrop-blur-sm mb-4">
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-soft-blue-300 block">Motto Keunggulan</span>
                        <p class="text-sm font-black italic text-white mt-0.5 tracking-wide">
                            "Disiplin Nafasku, Prestasi Tujuanku"
                        </p>
                    </div>
                    <div class="flex items-center gap-2 text-[11px] text-soft-blue-200/80 font-medium">
                        <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        Enkripsi Sesi Administrator Terproteksi
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Form Autentikasi Modern -->
            <div class="lg:col-span-7 bg-slate-900/60 p-8 sm:p-12 flex flex-col justify-center relative">
                
                <div class="mb-8">
                    <span class="px-3 py-1 rounded-full text-[10px] font-extrabold tracking-wider uppercase bg-soft-blue-500/20 text-soft-blue-300 border border-soft-blue-400/30">
                        Admin Portal v2.6
                    </span>
                    <h2 class="text-2xl font-black text-white mt-3 tracking-tight">Selamat Datang Kembali</h2>
                    <p class="text-xs text-slate-400 mt-1">Masukkan kredensial akun administrator untuk mengelola konten dan data sekolah.</p>
                </div>

                <!-- Alert Validasi Error -->
                @if ($errors->any())
                    <div class="mb-6 p-4 rounded-2xl bg-rose-500/15 border border-rose-500/30 text-rose-300 text-xs animate-shake">
                        <div class="font-bold flex items-center gap-2 mb-1">
                            <svg class="w-4 h-4 text-rose-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Gagal Melakukan Otentikasi
                        </div>
                        <ul class="list-disc list-inside space-y-0.5 pl-6 text-slate-300">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Login -->
                <form method="POST" action="{{ route('login') }}" @submit="isSubmitting = true" class="space-y-5">
                    @csrf

                    <!-- Input Email -->
                    <div>
                        <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                            Alamat Email Pengguna
                        </label>
                        <div class="relative group">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-400 group-focus-within:text-soft-blue-400 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206"/>
                                </svg>
                            </span>
                            <input type="email" id="email" name="email" value="{{ old('email', 'admin@smkyadikamanado.sch.id') }}" required autofocus
                                   class="w-full pl-12 pr-4 py-3.5 rounded-2xl bg-white/[0.06] border border-white/15 focus:border-soft-blue-400 focus:bg-white/[0.1] focus:ring-4 focus:ring-soft-blue-500/20 outline-none text-sm text-white placeholder-slate-500 transition duration-200"
                                   placeholder="nama@smkyadikamanado.sch.id">
                        </div>
                    </div>

                    <!-- Input Password + Tombol Toggle Show/Hide -->
                    <div>
                        <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                            Kata Sandi
                        </label>
                        <div class="relative group">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-400 group-focus-within:text-soft-blue-400 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </span>
                            <input :type="showPass ? 'text' : 'password'" id="password" name="password" required
                                   class="w-full pl-12 pr-12 py-3.5 rounded-2xl bg-white/[0.06] border border-white/15 focus:border-soft-blue-400 focus:bg-white/[0.1] focus:ring-4 focus:ring-soft-blue-500/20 outline-none text-sm text-white placeholder-slate-500 transition duration-200"
                                   placeholder="••••••••">
                            
                            <!-- Toggle Show Password -->
                            <button type="button" @click="showPass = !showPass" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-white transition focus:outline-none">
                                <svg x-show="!showPass" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                <svg x-show="showPass" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me & Dukungan Bantuan -->
                    <div class="flex items-center justify-between text-xs pt-1 text-slate-300">
                        <label class="flex items-center gap-2 cursor-pointer select-none">
                            <input type="checkbox" name="remember" class="w-4 h-4 rounded border-white/20 bg-white/10 text-soft-blue-500 focus:ring-soft-blue-400 focus:ring-offset-slate-900">
                            <span>Ingat sesi masuk</span>
                        </label>
                        <a href="{{ route('contact') }}" class="text-soft-blue-300 hover:text-soft-blue-200 transition font-medium">
                            Bantuan Akun?
                        </a>
                    </div>

                    <!-- Tombol Masuk dengan State Loading -->
                    <button type="submit" 
                            :disabled="isSubmitting"
                            class="w-full py-4 px-6 rounded-2xl bg-gradient-to-r from-soft-blue-500 via-soft-blue-600 to-sky-500 hover:from-soft-blue-600 hover:to-sky-600 text-white font-extrabold text-sm shadow-xl shadow-soft-blue-500/25 transition-all duration-300 transform hover:-translate-y-0.5 active:translate-y-0 disabled:opacity-50 flex items-center justify-center gap-2.5">
                        <svg x-show="isSubmitting" class="animate-spin w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" style="display: none;">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span x-text="isSubmitting ? 'Memverifikasi...' : 'Masuk ke Panel Kontrol'"></span>
                        <svg x-show="!isSubmitting" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </form>

                <div class="mt-8 text-center text-[11px] text-slate-500">
                    Sistem Manajemen Informasi &bull; &copy; 2026 SMK Yadika Manado
                </div>
            </div>

        </div>
    </main>

</body>
</html>
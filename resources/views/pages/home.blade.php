@extends('layouts.school')

@section('title', 'Beranda')

@section('content')
<!-- ========================================== -->
<!-- 1. HERO SECTION                            -->
<!-- ========================================== -->
<section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden bg-slate-950">
    <video autoplay loop muted playsinline 
           poster="{{ asset('img/ProfileSMK.png') }}"
           class="absolute inset-0 w-full h-full object-cover z-0 filter brightness-[0.70]">
        <source src="{{ asset('videos/profil-sekolah.mp4') }}" type="video/mp4">
    </video>

    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/75 via-slate-900/50 to-slate-950/85 z-10"></div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 text-center py-24 sm:py-32 text-white">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-xs font-bold uppercase tracking-wider text-sky-300 mb-6 shadow-sm">
            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
            Portal Resmi SMK Yadika Manado &bull; Yayasan Abdi Karya
        </div>

        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-tight mb-6 [text-shadow:_0_3px_12px_rgb(0_0_0_/_80%)]">
            Membentuk Karakter Unggul &amp;<br>
            <span class="text-sky-300">Keahlian Vokasi Siap Kerja</span>
        </h1>

        <p class="text-slate-200 text-sm sm:text-base lg:text-lg max-w-2xl mx-auto mb-10 leading-relaxed font-medium [text-shadow:_0_2px_8px_rgb(0_0_0_/_70%)]">
            SMK Yadika Manado menyelenggarakan pendidikan kejuruan berteknologi dengan 6 program keahlian strategis berstandar kurikulum nasional di Manado, Sulawesi Utara.
        </p>

        <div class="flex flex-wrap justify-center items-center gap-4">
            <a href="{{ route('spmb') }}" 
               style="background-color: #0284c7 !important; color: #ffffff !important;" 
               class="px-8 py-3.5 rounded-xl font-extrabold text-sm sm:text-base shadow-lg shadow-sky-600/40 transition transform hover:-translate-y-0.5">
                Daftar SPMB 2027/2028 &rarr;
            </a>
            <a href="{{ route('profile') }}" 
               style="background-color: #0f172a !important; color: #ffffff !important; border: 1px solid rgba(255,255,255,0.2) !important;" 
               class="px-8 py-3.5 rounded-xl font-bold text-sm sm:text-base shadow-md hover:bg-slate-800 transition transform hover:-translate-y-0.5">
                Profil &amp; Struktur Sekolah
            </a>
        </div>
    </div>
</section>

<!-- ========================================== -->
<!-- 2. SECTION SAMBUTAN KEPALA SEKOLAH         -->
<!-- ========================================== -->
<section class="py-16 sm:py-20 bg-[#f0f7fd] border-b border-sky-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl p-8 sm:p-12 lg:p-14 border border-slate-200 shadow-sm relative overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                
                <div class="lg:col-span-4 flex flex-col items-center text-center">
                    <div class="relative group">
                        <div class="w-64 h-80 rounded-2xl bg-sky-50 border-2 border-sky-200 shadow-md overflow-hidden p-2">
                            <img src="{{ asset('img/KepalaSekolah Mery Sorongan.png') }}" onerror="this.onerror=null; this.src='{{ asset('img/Profile_kosong.png') }}';" 
                                 alt="Mery Femi Sorongan, S.Pd" 
                                 class="w-full h-full object-cover object-top rounded-xl group-hover:scale-105 transition duration-500"
                                 onerror="this.src='{{ asset('img/Profile_kosong.png') }}'">
                        </div>
                        <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full text-white text-[11px] font-extrabold shadow-md border-2 border-white whitespace-nowrap"
                             style="background-color: #0284c7 !important;">
                            Kepala Sekolah
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <h3 class="font-black text-slate-900 text-xl tracking-tight">Mery Femi Sorongan, S.Pd</h3>
                        <p class="text-xs font-bold text-sky-700 uppercase tracking-wider mt-1">Kepala SMK Yadika Manado</p>
                        <p class="text-[11px] text-slate-500 mt-0.5">Yayasan Abdi Karya (Yadika)</p>
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-5">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-100 text-sky-800 text-xs font-bold uppercase tracking-wider border border-sky-200">
                        <svg class="w-4 h-4 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                        Sambutan Pimpinan
                    </div>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 tracking-tight leading-snug">
                        Menyiapkan Generasi Emas yang Mandiri, Adaptif, dan Religius
                    </h2>

                    <div class="p-4 sm:p-5 rounded-2xl bg-sky-50 border-l-4 border-y border-r border-sky-200 shadow-sm flex items-start gap-3.5"
                         style="border-left-color: #0284c7 !important;">
                        <div class="p-2 rounded-xl text-white shrink-0 mt-0.5" style="background-color: #0284c7 !important;">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-extrabold uppercase tracking-widest text-sky-800 block">Motto &amp; Slogan Keunggulan</span>
                            <p class="font-black text-slate-900 text-base sm:text-lg italic tracking-wide mt-0.5">
                                "Disiplin Nafasku, Prestasi Tujuanku"
                            </p>
                        </div>
                    </div>

                    <div class="space-y-3 text-slate-600 text-sm sm:text-base leading-relaxed text-justify">
                        <p>
                            Puji dan syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa atas rahmat dan perkenan-Nya, portal resmi <strong>SMK Yadika Manado</strong> dapat terus menjadi media informasi dan komunikasi bagi peserta didik, tenaga pendidik, orang tua siswa, serta dunia industri.
                        </p>
                        <p>
                            SMK Yadika Manado berkomitmen menyelenggarakan pendidikan vokasi berkualitas unggul melalui <strong>6 Program Keahlian Strategis</strong> (TJKT, Layanan Kesehatan, Akuntansi, Teknologi Farmasi, Manajemen Perkantoran, dan Perhotelan). Kami fokus membekali keterampilan teknis terstandarisasi, etika kerja profesional, serta pembinaan karakter disiplin.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5 pt-3 border-t border-slate-100">
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                            <span class="block font-bold text-sky-700 text-xs uppercase">01. Karakter Disiplin</span>
                            <p class="text-[11px] text-slate-500 mt-1">Pembinaan mental taruna berintegritas dan berbudi pekerti luhur.</p>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                            <span class="block font-bold text-sky-700 text-xs uppercase">02. Siap Industri</span>
                            <p class="text-[11px] text-slate-500 mt-1">Kurikulum terintegrasi dengan kebutuhan mitra kerja (DUDI).</p>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                            <span class="block font-bold text-sky-700 text-xs uppercase">03. Sertifikasi Resmi</span>
                            <p class="text-[11px] text-slate-500 mt-1">Lulusan dibekali ijazah serta sertifikat kompetensi profesi.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ========================================== -->
<!-- 3. SECTION BERITA SLIDER OTOMATIS          -->
<!-- ========================================== -->
<section class="py-16 sm:py-24 bg-white relative overflow-hidden"
         x-data="{
            currentIndex: 0,
            intervalId: null,
            totalCards: 5,
            itemsPerView() {
                if (window.innerWidth < 640) return 1;
                if (window.innerWidth < 1024) return 2;
                return 3;
            },
            maxIndex() {
                return Math.max(0, this.totalCards - this.itemsPerView());
            },
            next() {
                if (this.currentIndex >= this.maxIndex()) {
                    this.currentIndex = 0;
                } else {
                    this.currentIndex++;
                }
            },
            prev() {
                if (this.currentIndex <= 0) {
                    this.currentIndex = this.maxIndex();
                } else {
                    this.currentIndex--;
                }
            },
            startSlide() {
                this.stopSlide();
                this.intervalId = setInterval(() => { this.next(); }, 3500);
            },
            stopSlide() {
                if (this.intervalId) {
                    clearInterval(this.intervalId);
                    this.intervalId = null;
                }
            }
         }"
         x-init="startSlide()"
         @mouseenter="stopSlide()"
         @mouseleave="startSlide()"
         @resize.window="if (currentIndex > maxIndex()) currentIndex = maxIndex()">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Section & Tombol Kontrol Slider -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-[#0284c7] block mb-1">KABAR TERANYAR &amp; AGENDA</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    Berita &amp; Kegiatan Terkini
                </h2>
            </div>

            <!-- Tombol Navigasi Slider -->
            <div class="flex items-center gap-3">
                <a href="{{ route('gallery') }}" class="text-xs font-bold text-slate-500 hover:text-sky-700 transition mr-2 hidden sm:inline-block">
                    Lihat Semua Dokumentasi &rarr;
                </a>
                
                <button @click="prev()" 
                        type="button"
                        aria-label="Sebelumnya"
                        class="w-10 h-10 rounded-xl bg-white border border-slate-300 text-slate-700 hover:bg-[#0284c7] hover:border-[#0284c7] hover:text-white shadow-sm transition flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <button @click="next()" 
                        type="button"
                        aria-label="Berikutnya"
                        class="w-10 h-10 rounded-xl bg-white border border-slate-300 text-slate-700 hover:bg-[#0284c7] hover:border-[#0284c7] hover:text-white shadow-sm transition flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Track Slider (Otomatis Slide Mulus) -->
        <div class="overflow-hidden">
            <div class="flex transition-transform duration-500 ease-out -mx-3"
                 :style="'transform: translateX(-' + (currentIndex * (100 / itemsPerView())) + '%)'">
                
                <!-- Kartu 1: Kurikulum Industri -->
                <div class="w-full sm:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col h-full">
                        <div class="h-52 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('img/konten/Penyelarasan Kurikuum.jpeg') }}" 
                                 alt="Penyelarasan Kurikulum" 
                                 class="h-full w-full object-cover hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-6 flex flex-col justify-between flex-grow">
                            <div>
                                <span class="text-xs font-bold text-sky-600">18 September 2026</span>
                                <h3 class="font-bold text-slate-900 text-base mt-2 mb-2 leading-snug">
                                    Penyelarasan Kurikulum Berbasis Kebutuhan Industri
                                </h3>
                                <p class="text-slate-500 text-xs line-clamp-3 leading-relaxed">
                                    SMK Yadika Manado menyelenggarakan sinkronisasi materi ajar vokasi dengan standar kebutuhan dunia usaha dan dunia industri terkini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu 2: SPMB -->
                <div class="w-full sm:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col h-full">
                        <div class="h-52 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('img/konten/SPMB TP. 20272028.jpeg') }}" 
                                 alt="Penerimaan Siswa Baru" 
                                 class="h-full w-full object-cover hover:scale-105 transition duration-500"
                                 onerror="this.src='{{ asset('img/konten/SPMB TP. 20272028') }}';">
                        </div>
                        <div class="p-6 flex flex-col justify-between flex-grow">
                            <div>
                                <span class="text-xs font-bold text-sky-600">10 September 2026</span>
                                <h3 class="font-bold text-slate-900 text-base mt-2 mb-2 leading-snug">
                                    Penerimaan Calon Taruna/i Baru Tahun Pelajaran 2027/2028
                                </h3>
                                <p class="text-slate-500 text-xs line-clamp-3 leading-relaxed">
                                    Pendaftaran calon siswa baru resmi dibuka secara daring untuk seluruh 6 program keahlian unggulan berakreditasi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu 3: Uji Sertifikasi Mandiri -->
                <div class="w-full sm:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col h-full">
                        <div class="h-52 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('img/konten/Uji Sertifikasi.jpeg') }}" 
                                 alt="Uji Sertifikasi Mandiri" 
                                 class="h-full w-full object-cover hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-6 flex flex-col justify-between flex-grow">
                            <div>
                                <span class="text-xs font-bold text-sky-600">01 September 2026</span>
                                <h3 class="font-bold text-slate-900 text-base mt-2 mb-2 leading-snug">
                                    Uji Sertifikasi Kompetensi Keahlian Mandiri Siswa
                                </h3>
                                <p class="text-slate-500 text-xs line-clamp-3 leading-relaxed">
                                    Pelaksanaan uji kompetensi teknis terstandarisasi untuk membekali kelulusan dengan sertifikat kompetensi keahlian resmi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu 4: Literasi Digital & Cyber Security -->
                <div class="w-full sm:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col h-full">
                        <div class="h-52 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('img/konten/Penyelarasan Kurikuum.jpeg') }}" 
                                 alt="Workshop Jaringan" 
                                 class="h-full w-full object-cover hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-6 flex flex-col justify-between flex-grow">
                            <div>
                                <span class="text-xs font-bold text-sky-600">25 Agustus 2026</span>
                                <h3 class="font-bold text-slate-900 text-base mt-2 mb-2 leading-snug">
                                    Workshop Literasi Digital &amp; Cyber Security TJKT
                                </h3>
                                <p class="text-slate-500 text-xs line-clamp-3 leading-relaxed">
                                    Penguatan kompetensi infrastruktur server, keamanan jaringan, dan cloud computing taruna jurusan TJKT.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu 5: Layanan Medis & Keperawatan -->
                <div class="w-full sm:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col h-full">
                        <div class="h-52 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('img/konten/Uji Sertifikasi.jpeg') }}" 
                                 alt="Praktik Layanan Medis" 
                                 class="h-full w-full object-cover hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-6 flex flex-col justify-between flex-grow">
                            <div>
                                <span class="text-xs font-bold text-sky-600">20 Agustus 2026</span>
                                <h3 class="font-bold text-slate-900 text-base mt-2 mb-2 leading-snug">
                                    Simulasi Penanganan Klinis Terpadu Jurusan Kesehatan
                                </h3>
                                <p class="text-slate-500 text-xs line-clamp-3 leading-relaxed">
                                    Praktik klinis komprehensif tindakan keperawatan dan kefarmasian di Mini Hospital SMK Yadika Manado.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Titik Indikator Slider -->
        <div class="flex items-center justify-center gap-2 mt-8">
            <template x-for="i in (maxIndex() + 1)" :key="i">
                <button @click="currentIndex = (i - 1)" 
                        type="button"
                        aria-label="Pindah Slide"
                        class="h-2 rounded-full transition-all duration-300"
                        :class="currentIndex === (i - 1) ? 'w-7 bg-[#0284c7]' : 'w-2 bg-slate-300 hover:bg-slate-400'"></button>
            </template>
        </div>

    </div>
</section>
@endsection
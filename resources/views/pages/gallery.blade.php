@extends('layouts.school')

@section('title', 'Galeri Kegiatan')

@section('content')
<!-- Header Galeri -->
<section class="bg-soft-blue-100/50 py-14 border-b border-soft-blue-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1 rounded-full bg-soft-blue-200/70 text-soft-blue-900 text-xs font-bold uppercase tracking-wider mb-3">
            Dokumentasi Aktivitas
        </span>
        <h1 class="text-3xl sm:text-4xl font-black text-soft-blue-950 tracking-tight">Galeri SMK Yadika Manado</h1>
        <p class="text-slate-600 mt-2 max-w-2xl mx-auto text-sm sm:text-base">
            Momen pembelajaran praktik, perlombaan akademik &amp; non-akademik, ekstrakurikuler, dan kegiatan civitas akademika.
        </p>
    </div>
</section>

<!-- Konten Galeri dengan Filter Kategori Interaktif -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14" x-data="{ activeTab: 'all' }">
    
    <!-- Tombol Filter Kategori -->
    <div class="flex flex-wrap items-center justify-center gap-2.5 mb-12">
        <button @click="activeTab = 'all'" 
                :class="activeTab === 'all' ? 'bg-soft-blue-600 text-white shadow-md shadow-soft-blue-600/30' : 'bg-white text-slate-700 hover:bg-soft-blue-50 border border-soft-blue-200'"
                class="px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm transition">
            Semua Dokumentasi
        </button>
        <button @click="activeTab = 'pembelajaran'" 
                :class="activeTab === 'pembelajaran' ? 'bg-soft-blue-600 text-white shadow-md shadow-soft-blue-600/30' : 'bg-white text-slate-700 hover:bg-soft-blue-50 border border-soft-blue-200'"
                class="px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm transition">
            Pembelajaran &amp; Industri
        </button>
        <button @click="activeTab = 'lomba'" 
                :class="activeTab === 'lomba' ? 'bg-soft-blue-600 text-white shadow-md shadow-soft-blue-600/30' : 'bg-white text-slate-700 hover:bg-soft-blue-50 border border-soft-blue-200'"
                class="px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm transition">
            Lomba &amp; Prestasi
        </button>
        <button @click="activeTab = 'ekskul'" 
                :class="activeTab === 'ekskul' ? 'bg-soft-blue-600 text-white shadow-md shadow-soft-blue-600/30' : 'bg-white text-slate-700 hover:bg-soft-blue-50 border border-soft-blue-200'"
                class="px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm transition">
            Ekstrakurikuler &amp; Ibadah
        </button>
    </div>

    <!-- Grid Foto Dokumentasi Kegiatan -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- 1. Robotik (Lomba / Pembelajaran) -->
        <div x-show="activeTab === 'all' || activeTab === 'lomba' || activeTab === 'pembelajaran'" 
             x-transition class="bg-white rounded-3xl overflow-hidden border-2 border-soft-blue-100 hover:border-soft-blue-400 transition shadow-sm hover:shadow-xl group">
            <div class="h-60 w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('img/galeri/Robotik.png') }}" 
                     alt="Prestasi Tim Robotik" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                     onerror="this.src='{{ asset('img/galeri/Robotik.jpeg') }}';">
            </div>
            <div class="p-6">
                <span class="text-[10px] font-bold uppercase tracking-wider text-soft-blue-600 bg-soft-blue-50 px-2.5 py-1 rounded-full">Lomba &amp; Inovasi</span>
                <h3 class="font-bold text-slate-900 text-base mt-2">Kompetisi Riset &amp; Tim Robotik SMK Yadika Manado</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Pengembangan karya teknologi dan kreasi robotik siswa berdaya saing nasional.</p>
            </div>
        </div>

        <!-- 2. SMK EKSDPO (Lomba & Kegiatan Akbar) -->
        <div x-show="activeTab === 'all' || activeTab === 'pembelajaran'" 
             x-transition class="bg-white rounded-3xl overflow-hidden border-2 border-soft-blue-100 hover:border-soft-blue-400 transition shadow-sm hover:shadow-xl group">
            <div class="h-60 w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('img/galeri/SMK_EKSPO.png') }}" 
                     alt="SMK Ekspo" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                     onerror="this.src='{{ asset('img/galeri/SMK_EKSPO.jpeg') }}';">
            </div>
            <div class="p-6">
                <span class="text-[10px] font-bold uppercase tracking-wider text-soft-blue-600 bg-soft-blue-50 px-2.5 py-1 rounded-full">Pameran Vokasi</span>
                <h3 class="font-bold text-slate-900 text-base mt-2">Gelar Karya &amp; SMK Yadika Manado Ekspo</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Pameran produk unggulan dan jasa kreatif karya seluruh 6 program keahlian.</p>
            </div>
        </div>

        <!-- 3. Kunjungan Belajar (Pembelajaran Industri) -->
        <div x-show="activeTab === 'all' || activeTab === 'pembelajaran'" 
             x-transition class="bg-white rounded-3xl overflow-hidden border-2 border-soft-blue-100 hover:border-soft-blue-400 transition shadow-sm hover:shadow-xl group">
            <div class="h-60 w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('img/galeri/Kunjungan belajar.png') }}" 
                     alt="Kunjungan Belajar" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                     onerror="this.src='{{ asset('img/galeri/Kunjungan belajar.jpeg') }}';">
            </div>
            <div class="p-6">
                <span class="text-[10px] font-bold uppercase tracking-wider text-soft-blue-600 bg-soft-blue-50 px-2.5 py-1 rounded-full">Pembelajaran Lapangan</span>
                <h3 class="font-bold text-slate-900 text-base mt-2">Kunjungan Industri &amp; Studi Lapangan Siswa</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Pengenalan langsung etos kerja dan operasional di industri mitra.</p>
            </div>
        </div>

        <!-- 4. Lomba Puisi (Lomba Seni & Akademik) -->
        <div x-show="activeTab === 'all' || activeTab === 'lomba'" 
             x-transition class="bg-white rounded-3xl overflow-hidden border-2 border-soft-blue-100 hover:border-soft-blue-400 transition shadow-sm hover:shadow-xl group">
            <div class="h-60 w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('img/galeri/lombaPuisi.png') }}" 
                     alt="Lomba Baca Puisi" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                     onerror="this.src='{{ asset('img/galeri/lombaPuisi.jpeg') }}';">
            </div>
            <div class="p-6">
                <span class="text-[10px] font-bold uppercase tracking-wider text-soft-blue-600 bg-soft-blue-50 px-2.5 py-1 rounded-full">Lomba Bahasa &amp; Seni</span>
                <h3 class="font-bold text-slate-900 text-base mt-2">Ajang Apresiasi Sastra &amp; Lomba Baca Puisi</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Pengasahan bakat literasi, kepercayaan diri, dan seni tutur bahasa siswa.</p>
            </div>
        </div>

        <!-- 5. Ekskul Pramuka -->
        <div x-show="activeTab === 'all' || activeTab === 'ekskul'" 
             x-transition class="bg-white rounded-3xl overflow-hidden border-2 border-soft-blue-100 hover:border-soft-blue-400 transition shadow-sm hover:shadow-xl group">
            <div class="h-60 w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('img/galeri/Ekskul pramuka.png') }}" 
                     alt="Ekskul Pramuka" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                     onerror="this.src='{{ asset('img/galeri/Ekskul pramuka.jpeg') }}';">
            </div>
            <div class="p-6">
                <span class="text-[10px] font-bold uppercase tracking-wider text-soft-blue-600 bg-soft-blue-50 px-2.5 py-1 rounded-full">Ekstrakurikuler</span>
                <h3 class="font-bold text-slate-900 text-base mt-2">Pendidikan Karakter Pramuka Gugus Depan</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Membina kedisiplinan, kemandirian, dan kepemimpinan taruna/i.</p>
            </div>
        </div>

        <!-- 6. Ibadah Natal / Rohani -->
        <div x-show="activeTab === 'all' || activeTab === 'ekskul'" 
             x-transition class="bg-white rounded-3xl overflow-hidden border-2 border-soft-blue-100 hover:border-soft-blue-400 transition shadow-sm hover:shadow-xl group">
            <div class="h-60 w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('img/galeri/Ibadah natal.png') }}" 
                     alt="Ibadah Bersama" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                     onerror="this.src='{{ asset('img/galeri/Ibadah natal.jpeg') }}';">
            </div>
            <div class="p-6">
                <span class="text-[10px] font-bold uppercase tracking-wider text-soft-blue-600 bg-soft-blue-50 px-2.5 py-1 rounded-full">Kerohanian</span>
                <h3 class="font-bold text-slate-900 text-base mt-2">Ibadah Syukur &amp; Pembinaan Spiritual Sekolah</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Menumbuhkan ketakwaan dan toleransi beragama seluruh civitas sekolah.</p>
            </div>
        </div>

        <!-- 7. Praktik Kejuruan TJKT -->
        <div x-show="activeTab === 'all' || activeTab === 'pembelajaran'" 
             x-transition class="bg-white rounded-3xl overflow-hidden border-2 border-soft-blue-100 hover:border-soft-blue-400 transition shadow-sm hover:shadow-xl group">
            <div class="h-60 w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('img/galeri/jurusan1.png') }}" 
                     alt="Praktik Jurusan TJKT" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                     onerror="this.src='{{ asset('img/galeri/jurusan1.jpeg') }}';">
            </div>
            <div class="p-6">
                <span class="text-[10px] font-bold uppercase tracking-wider text-soft-blue-600 bg-soft-blue-50 px-2.5 py-1 rounded-full">Praktik Kejuruan</span>
                <h3 class="font-bold text-slate-900 text-base mt-2">Praktik Lab Komputer &amp; Perakitan Jaringan</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Penguasaan skill teknis jaringan komputer dan telekomunikasi terkini.</p>
            </div>
        </div>

        <!-- 8. Praktik Kejuruan Medis / Manajemen -->
        <div x-show="activeTab === 'all' || activeTab === 'pembelajaran'" 
             x-transition class="bg-white rounded-3xl overflow-hidden border-2 border-soft-blue-100 hover:border-soft-blue-400 transition shadow-sm hover:shadow-xl group">
            <div class="h-60 w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('img/galeri/jurusan3.png') }}" 
                     alt="Praktik Jurusan" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                     onerror="this.src='{{ asset('img/galeri/jurusan3.jpeg') }}';">
            </div>
            <div class="p-6">
                <span class="text-[10px] font-bold uppercase tracking-wider text-soft-blue-600 bg-soft-blue-50 px-2.5 py-1 rounded-full">Praktik Vokasi</span>
                <h3 class="font-bold text-slate-900 text-base mt-2">Simulasi Pelayanan Praktik Kejuruan</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Pelatihan intensif persiapan uji kompetensi dan kerja industri.</p>
            </div>
        </div>

    </div>
</div>
@endsection
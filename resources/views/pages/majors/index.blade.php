@extends('layouts.school')

@section('title', 'Program Keahlian')

@section('content')
<section class="bg-soft-blue-100/50 py-14 border-b border-soft-blue-200 text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-soft-blue-950">Program Keahlian (Jurusan)</h1>
        <p class="text-slate-600 mt-3 max-w-2xl mx-auto text-sm sm:text-base">Enam bidang vokasi berstandar industri siap mengantarkan masa depan siswa.</p>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card Jurusan -->
        <a href="{{ route('majors.detail', 'tjkt') }}" class="block bg-white rounded-2xl p-7 border-2 border-soft-blue-100 hover:border-soft-blue-500 shadow-sm hover:shadow-lg transition group">
            <span class="text-xs font-bold text-soft-blue-600 uppercase tracking-wider">Teknologi Informasi</span>
            <h3 class="text-xl font-bold text-slate-800 group-hover:text-soft-blue-600 mt-2 mb-3 transition">Teknik Jaringan Komputer & Telekomunikasi</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-6">Konsentrasi perancangan jaringan, konfigurasi server, keamanan siber, dan infrastruktur telekomunikasi modern.</p>
            <span class="text-sm font-semibold text-soft-blue-600 flex items-center gap-1 group-hover:gap-2 transition-all">Lihat Selengkapnya &rarr;</span>
        </a>

        <a href="{{ route('majors.detail', 'layanan-kesehatan') }}" class="block bg-white rounded-2xl p-7 border-2 border-soft-blue-100 hover:border-soft-blue-500 shadow-sm hover:shadow-lg transition group">
            <span class="text-xs font-bold text-soft-blue-600 uppercase tracking-wider">Kesehatan</span>
            <h3 class="text-xl font-bold text-slate-800 group-hover:text-soft-blue-600 mt-2 mb-3 transition">Layanan Kesehatan</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-6">Mempelajari dasar keperawatan, asistensi medis, serta penanganan pasien secara profesional dan beretika.</p>
            <span class="text-sm font-semibold text-soft-blue-600 flex items-center gap-1 group-hover:gap-2 transition-all">Lihat Selengkapnya &rarr;</span>
        </a>

        <a href="{{ route('majors.detail', 'akuntansi') }}" class="block bg-white rounded-2xl p-7 border-2 border-soft-blue-100 hover:border-soft-blue-500 shadow-sm hover:shadow-lg transition group">
            <span class="text-xs font-bold text-soft-blue-600 uppercase tracking-wider">Bisnis & Keuangan</span>
            <h3 class="text-xl font-bold text-slate-800 group-hover:text-soft-blue-600 mt-2 mb-3 transition">Akuntansi & Keuangan Lembaga</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-6">Tata kelola pembukuan finansial, siklus akuntansi berbasis software digital, dan perpajakan terpadu.</p>
            <span class="text-sm font-semibold text-soft-blue-600 flex items-center gap-1 group-hover:gap-2 transition-all">Lihat Selengkapnya &rarr;</span>
        </a>

        <a href="{{ route('majors.detail', 'teknologi-farmasi') }}" class="block bg-white rounded-2xl p-7 border-2 border-soft-blue-100 hover:border-soft-blue-500 shadow-sm hover:shadow-lg transition group">
            <span class="text-xs font-bold text-soft-blue-600 uppercase tracking-wider">Farmasi</span>
            <h3 class="text-xl font-bold text-slate-800 group-hover:text-soft-blue-600 mt-2 mb-3 transition">Teknologi Farmasi</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-6">Mempelajari formulasi obat-obatan, peracikan resep dokter, manajemen apotek, dan kontrol mutu farmasi.</p>
            <span class="text-sm font-semibold text-soft-blue-600 flex items-center gap-1 group-hover:gap-2 transition-all">Lihat Selengkapnya &rarr;</span>
        </a>

        <a href="{{ route('majors.detail', 'manajemen-perkantoran') }}" class="block bg-white rounded-2xl p-7 border-2 border-soft-blue-100 hover:border-soft-blue-500 shadow-sm hover:shadow-lg transition group">
            <span class="text-xs font-bold text-soft-blue-600 uppercase tracking-wider">Manajemen</span>
            <h3 class="text-xl font-bold text-slate-800 group-hover:text-soft-blue-600 mt-2 mb-3 transition">Manajemen Perkantoran & Bisnis</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-6">Pengelolaan korespondensi kantor digital, kearsipan elektronik, dan tata laksana operasional bisnis modern.</p>
            <span class="text-sm font-semibold text-soft-blue-600 flex items-center gap-1 group-hover:gap-2 transition-all">Lihat Selengkapnya &rarr;</span>
        </a>

        <a href="{{ route('majors.detail', 'perhotelan') }}" class="block bg-white rounded-2xl p-7 border-2 border-soft-blue-100 hover:border-soft-blue-500 shadow-sm hover:shadow-lg transition group">
            <span class="text-xs font-bold text-soft-blue-600 uppercase tracking-wider">Hospitality</span>
            <h3 class="text-xl font-bold text-slate-800 group-hover:text-soft-blue-600 mt-2 mb-3 transition">Perhotelan</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-6">Keahlian operasional hotel mencakup front office reception, tata graha (housekeeping), dan pelayanan tamu.</p>
            <span class="text-sm font-semibold text-soft-blue-600 flex items-center gap-1 group-hover:gap-2 transition-all">Lihat Selengkapnya &rarr;</span>
        </a>
    </div>
</div>
@endsection

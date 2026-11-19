@extends('layouts.school')

@php
    $titles = [
        'tjkt' => 'Teknik Jaringan Komputer dan Telekomunikasi',
        'layanan-kesehatan' => 'Layanan Kesehatan',
        'akuntansi' => 'Akuntansi dan Keuangan Lembaga',
        'teknologi-farmasi' => 'Teknologi Farmasi',
        'manajemen-perkantoran' => 'Manajemen Perkantoran dan Layanan Bisnis',
        'perhotelan' => 'Perhotelan',
    ];
    $name = $titles[$slug] ?? ucwords(str_replace('-', ' ', $slug));
@endphp

@section('title', $name)

@section('content')
<section class="bg-gradient-to-r from-soft-blue-900 to-soft-blue-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="text-xs uppercase font-bold tracking-widest text-soft-blue-200">Program Keahlian Vokasi</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold mt-2 mb-4">{{ $name }}</h1>
        <p class="text-soft-blue-100 text-base max-w-3xl">SMK Yadika Manado menyiapkan lulusan berdaya saing tinggi dan siap kerja di sektor industri terkait.</p>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">
    <!-- Visi Misi Jurusan -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white rounded-2xl p-8 border-2 border-soft-blue-200 shadow-sm">
            <h3 class="text-xl font-bold text-soft-blue-900 mb-3">Visi Program Keahlian</h3>
            <p class="text-slate-600 leading-relaxed text-sm">
                Menghasilkan teknisi dan praktisi {{ $name }} yang profesional, memiliki etos kerja tinggi, inovatif, serta tersertifikasi secara nasional.
            </p>
        </div>
        <div class="bg-white rounded-2xl p-8 border-2 border-soft-blue-200 shadow-sm">
            <h3 class="text-xl font-bold text-soft-blue-900 mb-3">Misi Program Keahlian</h3>
            <ul class="text-slate-600 text-sm space-y-2 list-disc list-inside">
                <li>Melaksanakan pembelajaran praktik berbasis Teaching Factory (TEFA).</li>
                <li>Meningkatkan keterlibatan praktisi industri di ruang kelas.</li>
                <li>Menyelenggarakan sertifikasi kompetensi kejuruan resmi.</li>
            </ul>
        </div>
    </div>

    <!-- Program Unggulan -->
    <div class="bg-soft-blue-50/60 rounded-3xl p-8 sm:p-10 border border-soft-blue-200">
        <h3 class="text-2xl font-bold text-soft-blue-950 mb-6">Program Unggulan Jurusan</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-soft-blue-100 shadow-sm">
                <h4 class="font-bold text-slate-800 mb-2">Praktek Kerja Lapangan (PKL)</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Penempatan magang langsung di perusahaan dan institusi mitra terkemuka di Kota Manado dan sekitarnya.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-soft-blue-100 shadow-sm">
                <h4 class="font-bold text-slate-800 mb-2">Uji Sertifikasi Kompetensi</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Ujian kompetensi keahlian berstandar BNSP guna memastikan pengakuan resmi keahlian lulusan.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-soft-blue-100 shadow-sm">
                <h4 class="font-bold text-slate-800 mb-2">Kelas Industri Terpadu</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Penyelarasan kurikulum harian dengan standar industri mitra pendamping.</p>
            </div>
        </div>
    </div>

    <!-- Foto Dokumentasi Kegiatan Jurusan -->
    <div>
        <h3 class="text-2xl font-bold text-soft-blue-950 mb-6">Dokumentasi Praktik Kejuruan</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="h-56 bg-soft-blue-100 rounded-2xl border border-soft-blue-200 flex items-center justify-center text-soft-blue-500 font-medium">Praktik Laboratorium 1</div>
            <div class="h-56 bg-soft-blue-100 rounded-2xl border border-soft-blue-200 flex items-center justify-center text-soft-blue-500 font-medium">Praktik Laboratorium 2</div>
            <div class="h-56 bg-soft-blue-100 rounded-2xl border border-soft-blue-200 flex items-center justify-center text-soft-blue-500 font-medium">Kunjungan Industri</div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.school')

@section('title', 'Hubungi Kami')

@section('content')
<!-- Header Kontak -->
<section class="bg-soft-blue-100/50 py-12 border-b border-soft-blue-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1 rounded-full bg-soft-blue-200/70 text-soft-blue-900 text-xs font-bold uppercase tracking-wider mb-3">
            Informasi &amp; Lokasi
        </span>
        <h1 class="text-3xl sm:text-4xl font-black text-soft-blue-950 tracking-tight">Hubungi SMK Yadika Manado</h1>
        <p class="text-slate-600 mt-2 max-w-2xl mx-auto text-sm sm:text-base">
            Silakan berkunjung langsung ke kampus kami atau hubungi kontak resmi sekolah untuk informasi pendaftaran dan kerja sama industri.
        </p>
    </div>
</section>

<!-- Konten Utama: 2 Kolom Lebar Seimbang -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start w-full">
        
        <!-- Kolom Kiri: Detail Kontak & Info -->
        <div class="space-y-6 w-full">
            <div class="bg-white rounded-3xl p-6 sm:p-8 border-2 border-soft-blue-100 shadow-sm">
                <h3 class="text-xl font-bold text-soft-blue-950 mb-6 flex items-center gap-2.5">
                    <span class="w-2.5 h-6 rounded bg-soft-blue-500 inline-block"></span>
                    Alamat &amp; Kontak Resmi
                </h3>

                <div class="space-y-6 text-sm">
                    <!-- Lokasi Fisik -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-soft-blue-100 text-soft-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Alamat Kampus</span>
                            <p class="font-semibold text-slate-800 mt-0.5 leading-relaxed">
                                Jl. Raya Manado - Bitung, Kolongan, Kec. Kalawat, Kabupaten Minahasa Utara, Sulawesi Utara
                            </p>
                            <a href="https://maps.app.goo.gl/5FH1F6H5YLrd2its6" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-soft-blue-600 hover:text-soft-blue-800 mt-2">
                                Buka di Aplikasi Google Maps &rarr;
                            </a>
                        </div>
                    </div>

                    <!-- Email Resmi -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-soft-blue-100 text-soft-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Surat Elektronik (Email)</span>
                            <p class="font-semibold text-slate-800 mt-0.5">smkyadikamanado@yahoo.co.id</p>
                        </div>
                    </div>

                    <!-- Waktu Operasional -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-soft-blue-100 text-soft-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Jam Operasional Pelayanan</span>
                            <p class="font-semibold text-slate-800 mt-0.5">Senin - Jumat: 07.15 - 15.30 WITA</p>
                            <p class="text-xs text-slate-500">Sabtu &amp; Minggu: Libur Pelayanan Kantor</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Slogan -->
            <div class="bg-gradient-to-br from-soft-blue-600 to-soft-blue-700 text-white rounded-3xl p-6 sm:p-7 shadow-md">
                <span class="text-[11px] font-bold text-soft-blue-200 uppercase tracking-widest block">Slogan Sekolah</span>
                <p class="text-lg sm:text-xl font-black italic tracking-wide mt-1">
                    "Disiplin Nafasku, Prestasi Tujuanku"
                </p>
            </div>
        </div>

        <!-- Kolom Kanan: Google Maps Responsif Penuh -->
        <div class="w-full">
            <div class="bg-white rounded-3xl p-5 sm:p-6 border-2 border-soft-blue-200 shadow-sm w-full">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-bold text-soft-blue-900 uppercase tracking-wider flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                        Peta Lokasi Kampus
                    </span>
                    <a href="https://maps.app.goo.gl/5FH1F6H5YLrd2its6" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-soft-blue-600 hover:text-soft-blue-800">
                        Buka di Tab Baru &rarr;
                    </a>
                </div>

                <!-- Iframe Container Luas 100% -->
                <div class="w-full h-[450px] rounded-2xl overflow-hidden border border-slate-200 shadow-inner">
                    <iframe 
                        src="https://maps.google.com/maps?q=SMK%20Yadika%20Manado,%20Kolongan,%20Kalawat&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                        class="w-full h-full border-0"
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between text-xs text-slate-500 gap-2">
                    <span>Lokasi: SMK Yadika Manado (Jl. Raya Manado - Bitung)</span>
                    <span class="font-semibold text-soft-blue-600">Minahasa Utara / Manado</span>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@extends('layouts.school')

@section('title', 'Admin Content Hub - SMK Yadika Manado')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10" id="adminApp">

    <!-- Toast Notifikasi -->
    <div id="toastAlert" style="display: none; background-color: #0284c7 !important; color: #ffffff !important;" 
         class="fixed bottom-6 right-6 z-[300] px-5 py-3 rounded-2xl shadow-2xl flex items-center gap-2.5 font-bold text-xs">
        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
        <span id="toastMsg">Data berhasil disimpan!</span>
    </div>

    <!-- Header Profil Admin -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border-2 border-sky-100 shadow-sm mb-8 flex flex-col sm:flex-row items-center justify-between gap-6">
        <div class="flex items-center gap-4 text-center sm:text-left">
            <div style="background-color: #0284c7 !important;" class="w-14 h-14 rounded-2xl text-white flex items-center justify-center font-black text-xl shadow-md shrink-0">
                AD
            </div>
            <div>
                <div class="flex items-center gap-2 justify-center sm:justify-start">
                    <h2 class="text-lg sm:text-xl font-black text-slate-900">Administrator SMK Yadika Manado</h2>
                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-sky-100 text-sky-800">
                        Admin Utama
                    </span>
                </div>
                <p class="text-xs text-slate-500 mt-1">Pusat Manajemen Konten Seluruh Halaman &amp; Verifikasi Hasil SPMB</p>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ route('profile') }}" target="_blank" class="px-4 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 font-bold text-xs transition flex items-center gap-1.5">
                Lihat Halaman Profil &rarr;
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-4 py-2.5 rounded-xl border border-rose-200 text-rose-600 hover:bg-rose-50 font-bold text-xs transition">
                    Keluar (Logout)
                </button>
            </form>
        </div>
    </div>

    <!-- TAB MENU LINTAS SEMUA HALAMAN -->
    <div class="flex flex-wrap items-center gap-2 mb-8 border-b border-slate-200 pb-3">
        <button type="button" onclick="switchTab('spmb')" id="tabBtn_spmb"
                style="background-color: #0284c7 !important; color: #ffffff !important; font-weight: 700;"
                class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm transition flex items-center gap-2 shadow-sm cursor-pointer">
            Verifikasi Hasil SPMB
        </button>

        <button type="button" onclick="switchTab('guru')" id="tabBtn_guru"
                style="background-color: #ffffff; color: #334155; border: 1px solid #cbd5e1;"
                class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm transition flex items-center gap-2 shadow-sm cursor-pointer">
            Kelola Profil Guru
        </button>

        <button type="button" onclick="switchTab('berita')" id="tabBtn_berita"
                style="background-color: #ffffff; color: #334155; border: 1px solid #cbd5e1;"
                class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm transition flex items-center gap-2 shadow-sm cursor-pointer">
            Kelola Berita Beranda
        </button>

        <button type="button" onclick="switchTab('galeri')" id="tabBtn_galeri"
                style="background-color: #ffffff; color: #334155; border: 1px solid #cbd5e1;"
                class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm transition flex items-center gap-2 shadow-sm cursor-pointer">
            Kelola Galeri Foto
        </button>

        <button type="button" onclick="switchTab('jurusan')" id="tabBtn_jurusan"
                style="background-color: #ffffff; color: #334155; border: 1px solid #cbd5e1;"
                class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm transition flex items-center gap-2 shadow-sm cursor-pointer">
            Kelola 6 Jurusan
        </button>

        <button type="button" onclick="switchTab('kontak')" id="tabBtn_kontak"
                style="background-color: #ffffff; color: #334155; border: 1px solid #cbd5e1;"
                class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm transition flex items-center gap-2 shadow-sm cursor-pointer">
            Kelola Kontak &amp; Alamat
        </button>
    </div>

    <!-- ================================================================ -->
    <!-- 1. TAB VERIFIKASI SPMB                                           -->
    <!-- ================================================================ -->
    <div id="section_spmb" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-6">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-sky-600 block">SISTEM PENERIMAAN MURID BARU</span>
                <h3 class="text-xl font-black text-slate-900 mt-1">Verifikasi Berkas Calon Siswa/i Baru (T.P 2027/2028)</h3>
                <p class="text-xs text-slate-500 mt-0.5">Total pendaftar: <b class="text-slate-800" id="totalSpmbCount">0</b> berkas.</p>
            </div>
            
            <div class="flex flex-wrap items-center gap-2.5 text-xs">
                <!-- TOMBOL EXPORT EXCEL WARNA HIJAU -->
                <button type="button" onclick="exportSpmbExcelHtmlWithImages()" 
                        style="background-color: #16a34a !important; color: #ffffff !important; border: 1px solid #15803d !important;" 
                        class="px-4 py-2.5 rounded-xl font-extrabold shadow-md shadow-emerald-700/20 hover:bg-emerald-700 transition flex items-center gap-2 cursor-pointer">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    <span>Export Excel Lengkap</span>
                </button>

                <!-- TOMBOL CETAK SEMUA SISWA -->
                <button type="button" onclick="exportSemuaSiswaPdf()" 
                        style="background-color: #0284c7 !important; color: #ffffff !important;" 
                        class="px-4 py-2.5 rounded-xl font-extrabold shadow-md hover:bg-sky-700 transition flex items-center gap-2 cursor-pointer">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                    <span>Cetak / PDF Semua Siswa &amp; Gambar</span>
                </button>

                <div class="flex items-center gap-1.5 ml-1">
                    <span class="text-slate-500 font-medium">Filter:</span>
                    <select id="filterSpmbSelect" onchange="renderSpmbTable()" class="px-3 py-2 rounded-xl border border-slate-300 text-xs font-bold outline-none bg-white">
                        <option value="Semua">Semua Status</option>
                        <option value="Berkas Terkirim">Berkas Terkirim</option>
                        <option value="Berkas Sedang Diverifikasi">Berkas Sedang Diverifikasi</option>
                        <option value="Berkas Tervalidasi">Berkas Tervalidasi</option>
                        <option value="Belum Memenuhi Kriteria">Belum Memenuhi Kriteria</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-slate-200">
            <table class="w-full text-left text-sm text-slate-700 divide-y divide-slate-200">
                <thead class="bg-slate-50 text-slate-900 font-bold uppercase text-xs">
                    <tr>
                        <th class="w-12 px-3 py-3.5 text-center">Detail</th>
                        <th class="px-4 py-3.5">No. Registrasi</th>
                        <th class="px-4 py-3.5">Nama Calon Siswa</th>
                        <th class="px-4 py-3.5">Asal SMP/MTs</th>
                        <th class="px-4 py-3.5">Pilihan Jurusan</th>
                        <th class="px-4 py-3.5 text-center">Status Alur Berkas</th>
                        <th class="px-4 py-3.5 text-center">Aksi Verifikasi</th>
                    </tr>
                </thead>
                <tbody id="spmbTableBody" class="divide-y divide-slate-100 bg-white">
                    <!-- Di-render oleh JavaScript -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================================================================ -->
    <!-- 2. TAB KELOLA GURU                                               -->
    <!-- ================================================================ -->
    <div id="section_guru" style="display: none;" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-6">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-sky-600 block">Halaman Sasaran: /profil</span>
                <h3 class="text-xl font-black text-slate-900 mt-1">Data Pendidik &amp; Tenaga Kependidikan</h3>
                <p class="text-xs text-slate-500 mt-0.5">Total saat ini: <b class="text-slate-800" id="totalGuruCount">10</b> orang.</p>
            </div>
            <div class="flex items-center gap-3">
                <button onclick="resetDefaultGuru()" type="button" class="px-4 py-2.5 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-50 font-semibold text-xs transition">
                    Reset Default
                </button>
                <button type="button" onclick="toggleFormGuru()" id="btnToggleGuru"
                        style="background-color: #0284c7 !important; color: #ffffff !important;" 
                        class="px-5 py-2.5 rounded-xl font-bold text-xs shadow hover:opacity-90 transition flex items-center gap-1.5 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                    <span id="btnToggleText">+ Tambah Guru / Pegawai</span>
                </button>
            </div>
        </div>

        <!-- FORM INPUT / EDIT GURU -->
        <div id="boxFormGuru" style="display: none;" class="bg-sky-50/70 border-2 border-sky-300 rounded-3xl p-6 mb-8 transition-all">
            <div class="flex items-center justify-between pb-3 mb-4 border-b border-sky-200">
                <h4 id="formGuruTitle" class="text-sm font-black text-slate-900">Form Tambah Pegawai / Guru Baru</h4>
                <button type="button" onclick="toggleFormGuru(false)" class="text-slate-400 hover:text-slate-600 text-xs font-bold">Tutup &times;</button>
            </div>

            <form onsubmit="submitGuruForm(event)" class="space-y-4 text-xs">
                <input type="hidden" id="guru_id" value="">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Nama Lengkap &amp; Gelar *</label>
                        <input type="text" id="guru_nama" required placeholder="Contoh: Mikhael Rudiarti Bawowo, S.Kom" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 bg-white outline-none focus:ring-2 focus:ring-sky-400">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Klasifikasi Utama *</label>
                        <select id="guru_kategori" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 bg-white outline-none focus:ring-2 focus:ring-sky-400">
                            <option value="Kaprodi">Ketua Program Keahlian (Kaprodi)</option>
                            <option value="Pimpinan">Pimpinan Sekolah</option>
                            <option value="Guru Produktif">Guru Kejuruan Produktif</option>
                            <option value="Guru Umum">Guru Mata Pelajaran Umum</option>
                            <option value="Tenaga Kependidikan">Tenaga Kependidikan / Tata Usaha</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Tugas / Jabatan Utama *</label>
                        <input type="text" id="guru_jabatan" required placeholder="Contoh: Ketua PK TJKT" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 bg-white outline-none focus:ring-2 focus:ring-sky-400">
                    </div>
                </div>

                <div class="p-4 bg-white rounded-2xl border border-sky-200">
                    <label class="font-extrabold text-slate-900 text-xs block mb-1">Peran / Tugas Mengajar Tambahan (Opsional - Multi Role)</label>
                    <input type="text" id="guru_role2" placeholder="Contoh: Guru Produktif TJKT & Guru Mapel Informatika" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 bg-slate-50/50 outline-none">
                </div>

                <div class="flex justify-end gap-2 pt-2">
                    <button type="button" onclick="toggleFormGuru(false)" class="px-4 py-2 rounded-xl border border-slate-200 text-slate-600 bg-white font-semibold">Batal</button>
                    <button type="submit" style="background-color: #0284c7 !important; color: #ffffff !important;" class="px-6 py-2 rounded-xl font-bold shadow hover:opacity-90">Simpan Data Pegawai</button>
                </div>
            </form>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-slate-200">
            <table class="w-full text-left text-sm text-slate-700 divide-y divide-slate-200">
                <thead class="bg-slate-50 text-slate-900 font-bold uppercase text-xs">
                    <tr>
                        <th class="px-5 py-3.5">Nama Lengkap &amp; Gelar</th>
                        <th class="px-5 py-3.5">Jabatan / Amanah Utama</th>
                        <th class="px-5 py-3.5">Tugas Tambahan (Role 2)</th>
                        <th class="px-5 py-3.5">Klasifikasi</th>
                        <th class="px-5 py-3.5 text-center">Tindakan</th>
                    </tr>
                </thead>
                <tbody id="guruTableBody" class="divide-y divide-slate-100 bg-white"></tbody>
            </table>
        </div>
    </div>

    <!-- TAB BERITA -->
    <div id="section_berita" style="display: none;" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <h3 class="text-xl font-black text-slate-900 mb-2">Kelola Berita &amp; Pengumuman Beranda</h3>
        <p class="text-xs text-slate-500 mb-6">Manajemen artikel sekolah, kegiatan vokasi, dan prestasi siswa.</p>
        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 text-xs text-slate-600">
            Fitur integrasi berita otomatis terhubung ke slider beranda publik.
        </div>
    </div>

    <!-- TAB GALERI -->
    <div id="section_galeri" style="display: none;" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <h3 class="text-xl font-black text-slate-900 mb-2">Kelola Galeri Foto Sekolah</h3>
        <p class="text-xs text-slate-500 mb-6">Dokumentasi apel disiplin, ruang lab komputer, dan aktivitas praktik vokasi.</p>
        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 text-xs text-slate-600">
            Arsip foto galeri sekolah otomatis terhubung ke halaman /galeri publik.
        </div>
    </div>

    <!-- TAB JURUSAN -->
    <div id="section_jurusan" style="display: none;" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <h3 class="text-xl font-black text-slate-900 mb-2">Kelola 6 Program Keahlian Vokasi</h3>
        <p class="text-xs text-slate-500 mb-6">TJKT, Layanan Kesehatan, MPLB, AKL, Teknologi Farmasi, dan Perhotelan.</p>
        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 text-xs text-slate-600">
            Informasi kaprodi, laboratorium, dan kuota penerimaan siswa baru.
        </div>
    </div>

    <!-- TAB KONTAK -->
    <div id="section_kontak" style="display: none;" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <h3 class="text-xl font-black text-slate-900 mb-2">Kelola Kontak &amp; Alamat Resmi</h3>
        <p class="text-xs text-slate-500 mb-6">Alamat kampus, nomor WhatsApp panitia SPMB, dan jam operasional sekolah.</p>
        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 text-xs text-slate-600 space-y-2">
            <p><strong>Alamat:</strong> Jl. Raya Manado - Bitung, Kolongan, Kec. Kalawat, Minahasa Utara</p>
            <p><strong>Kontak BRI Panitia:</strong> 5119 0102 4110 534 A.N CHATRIEN A SAMOLA</p>
        </div>
    </div>

    <!-- MODAL POPUP VERIFIKASI SPMB LENGKAP DENGAN PREVIEW GAMBAR -->
    <div id="modalSpmb" style="display: none;" class="fixed inset-0 z-[200] flex items-center justify-center p-3 sm:p-5 bg-slate-950/80 backdrop-blur-sm overflow-y-auto">
        <div class="bg-white rounded-3xl p-6 border border-sky-100 shadow-2xl relative my-auto" style="max-width: 660px !important; width: 100% !important; max-height: 92vh; overflow-y: auto;">
            
            <div class="flex items-center justify-between pb-3 border-b border-slate-100 sticky top-0 bg-white z-10">
                <div>
                    <span class="text-[10px] font-black uppercase tracking-wider text-sky-600 block">Detail Verifikasi Berkas &amp; Formulir Calon Siswa/i</span>
                    <h3 id="modalSpmbNama" class="text-base font-black text-slate-900 mt-0.5"></h3>
                </div>
                <div class="flex items-center gap-2">
                    <button type="button" onclick="exportCurrentSpmbPdf()" class="px-3.5 py-1.5 rounded-xl bg-rose-600 hover:bg-rose-700 text-white text-xs font-bold transition flex items-center gap-1.5 shadow-sm">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                        Cetak / PDF
                    </button>
                    <button type="button" onclick="closeSpmbModal()" class="p-1.5 rounded-xl hover:bg-slate-100 text-slate-400 hover:text-slate-600">&times;</button>
                </div>
            </div>

            <div class="my-4 space-y-3 text-xs">
                
                <div class="bg-sky-50/70 rounded-2xl p-4 border border-sky-100 grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                    <div><span class="text-slate-500 block text-[10px]">NO. REGISTRASI:</span><strong id="modalSpmbNo" class="font-mono text-sky-800 text-xs"></strong></div>
                    <div><span class="text-slate-500 block text-[10px]">PROGRAM KEAHLIAN:</span><strong id="modalSpmbJurusan" class="text-slate-900 text-xs"></strong></div>
                    <div><span class="text-slate-500 block text-[10px]">ASAL SEKOLAH:</span><span id="modalSpmbAsal" class="font-semibold text-slate-800"></span></div>
                    <div><span class="text-slate-500 block text-[10px]">EMAIL AKUN:</span><span id="modalSpmbEmail" class="font-medium text-slate-700"></span></div>
                    <div><span class="text-slate-500 block text-[10px]">NISN SISWA:</span><span id="modalSpmbNisn" class="font-mono font-bold text-slate-800"></span></div>
                    <div><span class="text-slate-500 block text-[10px]">NO HP / WHATSAPP:</span><span id="modalSpmbHp" class="font-semibold text-slate-800"></span></div>
                    <div class="sm:col-span-2"><span class="text-slate-500 block text-[10px]">ALAMAT TEMPAT TINGGAL:</span><span id="modalSpmbAlamat" class="text-slate-700"></span></div>
                </div>

                <div class="bg-slate-50 rounded-2xl p-4 border border-slate-200 grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                    <div><span class="text-slate-500 block text-[10px]">NAMA ORANG TUA / WALI:</span><strong id="modalSpmbOrtu" class="text-slate-800"></strong></div>
                    <div><span class="text-slate-500 block text-[10px]">NOMOR KARTU KELUARGA (KK):</span><span id="modalSpmbKk" class="font-mono text-slate-700"></span></div>
                    <div><span class="text-slate-500 block text-[10px]">PEKERJAAN ORANG TUA:</span><span id="modalSpmbPekerjaan" class="text-slate-700"></span></div>
                    <div><span class="text-slate-500 block text-[10px]">RINCIAN PEMBAYARAN:</span><span id="modalSpmbBayar" class="font-bold text-emerald-700"></span></div>
                </div>

                <!-- GALERI BERKAS GAMBAR (KK, AKTE, PAS FOTO, BUKTI BAYAR) -->
                <div class="pt-2">
                    <span class="block text-xs font-black text-slate-900 uppercase tracking-wider mb-2">
                        Lampiran Berkas Gambar &amp; Bukti Pembayaran:
                    </span>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 text-center">
                        <div class="bg-white p-2.5 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                            <span class="text-[10px] font-bold text-slate-700 block mb-1">Kartu Keluarga (KK)</span>
                            <div class="h-24 bg-slate-100 rounded-xl overflow-hidden border border-slate-200 flex items-center justify-center p-0.5">
                                <img id="previewImgKk" src="" class="w-full h-full object-cover rounded-lg cursor-pointer hover:scale-105 transition" onclick="window.open(this.src)">
                            </div>
                        </div>

                        <div class="bg-white p-2.5 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                            <span class="text-[10px] font-bold text-slate-700 block mb-1">Akte Kelahiran</span>
                            <div class="h-24 bg-slate-100 rounded-xl overflow-hidden border border-slate-200 flex items-center justify-center p-0.5">
                                <img id="previewImgAkte" src="" class="w-full h-full object-cover rounded-lg cursor-pointer hover:scale-105 transition" onclick="window.open(this.src)">
                            </div>
                        </div>

                        <div class="bg-white p-2.5 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                            <span class="text-[10px] font-bold text-slate-700 block mb-1">Pas Foto 3x4</span>
                            <div class="h-24 bg-slate-100 rounded-xl overflow-hidden border border-slate-200 flex items-center justify-center p-0.5">
                                <img id="previewImgFoto" src="" class="w-full h-full object-cover rounded-lg cursor-pointer hover:scale-105 transition" onclick="window.open(this.src)">
                            </div>
                        </div>

                        <div class="bg-white p-2.5 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                            <span class="text-[10px] font-bold text-emerald-700 block mb-1">Bukti Transfer BRI</span>
                            <div class="h-24 bg-slate-100 rounded-xl overflow-hidden border border-emerald-300 flex items-center justify-center p-0.5">
                                <img id="previewImgBayar" src="" class="w-full h-full object-cover rounded-lg cursor-pointer hover:scale-105 transition" onclick="window.open(this.src)">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Checklist Syarat -->
                <div class="space-y-1.5 pt-2">
                    <span class="text-[11px] font-extrabold uppercase text-slate-700 tracking-wider block">Checklist Persyaratan Berkas:</span>
                    <label class="flex items-center gap-2 p-2 rounded-xl border border-slate-200 hover:bg-slate-50 text-xs">
                        <input type="checkbox" id="chk_ijazah" class="w-4 h-4 text-sky-600 rounded"><span>Ijazah / SKL Asli / Legalisir</span>
                    </label>
                    <label class="flex items-center gap-2 p-2 rounded-xl border border-slate-200 hover:bg-slate-50 text-xs">
                        <input type="checkbox" id="chk_rapor" class="w-4 h-4 text-sky-600 rounded"><span>Rapor SMP / MTs Lengkap</span>
                    </label>
                    <label class="flex items-center gap-2 p-2 rounded-xl border border-slate-200 hover:bg-slate-50 text-xs">
                        <input type="checkbox" id="chk_foto" class="w-4 h-4 text-sky-600 rounded"><span>Pas Foto Calon Siswa/i (Ukr 3x4)</span>
                    </label>
                    <label class="flex items-center gap-2 p-2 rounded-xl border border-slate-200 hover:bg-slate-50 text-xs">
                        <input type="checkbox" id="chk_pernyataan" class="w-4 h-4 text-sky-600 rounded"><span>Surat Pernyataan Disiplin Yadika</span>
                    </label>
                </div>

                <!-- Update Status Alur -->
                <div class="pt-2">
                    <span class="block text-[11px] font-extrabold uppercase text-slate-700 tracking-wider mb-1.5">Tentukan Keputusan Status Berkas:</span>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-xs">
                        <button type="button" onclick="updateCurrentSpmbStatus('Berkas Sedang Diverifikasi')" style="background-color: #fef3c7 !important; color: #92400e !important; border: 1px solid #fde68a !important;" class="p-2.5 rounded-xl font-bold hover:opacity-90 text-center">⏳ Diverifikasi</button>
                        <button type="button" onclick="updateCurrentSpmbStatus('Berkas Tervalidasi')" style="background-color: #d1fae5 !important; color: #065f46 !important; border: 1px solid #a7f3d0 !important;" class="p-2.5 rounded-xl font-bold hover:opacity-90 text-center">✅ Tervalidasi</button>
                        <button type="button" onclick="updateCurrentSpmbStatus('Belum Memenuhi Kriteria')" style="background-color: #ffe4e6 !important; color: #9f1239 !important; border: 1px solid #fecdd3 !important;" class="p-2.5 rounded-xl font-bold hover:opacity-90 text-center">❌ Belum Memenuhi</button>
                        <button type="button" onclick="updateCurrentSpmbStatus('Berkas Terkirim')" style="background-color: #dbeafe !important; color: #1e40af !important; border: 1px solid #bfdbfe !important;" class="p-2.5 rounded-xl font-bold hover:opacity-90 text-center">📩 Berkas Terkirim</button>
                    </div>
                </div>

            </div>

            <div class="flex items-center justify-between pt-3 border-t border-slate-100">
                <button type="button" onclick="deleteCurrentSpmbFromModal()" class="px-3 py-1.5 rounded-xl text-rose-600 hover:bg-rose-50 text-xs font-bold border border-rose-200">
                    Hapus Pendaftar Ini
                </button>
                <button type="button" onclick="closeSpmbModal()" class="px-5 py-2 rounded-xl bg-slate-900 text-white font-bold text-xs">
                    Tutup
                </button>
            </div>

        </div>
    </div>

</div>

<!-- SCRIPT PUSAT DATA JAVASCRIPT VALID & BERSIH -->
<script>
const default10Guru = [...JSON.parse(localStorage.getItem('smk_yadika_guru_data') || '[]')];

const fallbackKk = "{{ asset('img/banner1.png') }}";
const fallbackAkte = "{{ asset('img/banner2.png') }}";
const fallbackFoto = "{{ asset('img/KepalaSekolah.png') }}";
const fallbackBayar = "{{ asset('img/banner3.png') }}";

const defaultSpmb = [
    { no: 'REG-2027-622', nama: 'Mikhael Bawowo', asal: 'SMP N 1 Kalawat', jurusan: 'Teknik Jaringan Komputer & Telko', status: 'Berkas Tervalidasi', email: 'mikhaelbawowo@gmail.com', nisn: '0081234567', noHp: '081242142893', alamat: 'Jl. Raya Manado - Bitung, Kolongan, Kalawat', ortu: 'Dewi Widiarti', noKk: '7171012345670001', pekerjaan: 'Wiraswasta', pembayaran: 'UANG PEMBANGUNAN, SPP, SERAGAM, ID CARD', imgKk: fallbackKk, imgAkte: fallbackAkte, imgFoto: fallbackFoto, imgBayar: fallbackBayar },
    { no: 'REG-2027-003', nama: 'Washfa Witta Fujiani', asal: 'SMPN 2 Katapang', jurusan: 'Teknik Jaringan Komputer & Telko', status: 'Berkas Tervalidasi', email: 'washfa@gmail.com', nisn: '0081234568', noHp: '081234567891', alamat: 'Manado', ortu: 'Bpk. Fujiani', noKk: '7171012345670002', pekerjaan: 'PNS', pembayaran: 'UANG PEMBANGUNAN, SPP', imgKk: fallbackKk, imgAkte: fallbackAkte, imgFoto: fallbackFoto, imgBayar: fallbackBayar },
    { no: 'REG-2027-004', nama: 'Shelomitha Keyla P P', asal: 'SMPN 2 Banjaran', jurusan: 'Layanan Kesehatan', status: 'Berkas Sedang Diverifikasi', email: 'shelomitha@gmail.com', nisn: '0081234569', noHp: '081234567892', alamat: 'Kalawat', ortu: 'Ibu Keyla', noKk: '7171012345670003', pekerjaan: 'Swasta', pembayaran: 'UANG PEMBANGUNAN, SPP, ID CARD', imgKk: fallbackKk, imgAkte: fallbackAkte, imgFoto: fallbackFoto, imgBayar: fallbackBayar }
];

let globalGuru = [];
let globalSpmb = [];
let currentSpmbItem = null;

function showToast(msg) {
    const el = document.getElementById('toastAlert');
    if (!el) return;
    document.getElementById('toastMsg').innerText = msg;
    el.style.display = 'flex';
    setTimeout(() => { el.style.display = 'none'; }, 3000);
}

function switchTab(tabName) {
    const tabs = ['spmb', 'guru', 'berita', 'galeri', 'jurusan', 'kontak'];
    tabs.forEach(t => {
        const sec = document.getElementById('section_' + t);
        const btn = document.getElementById('tabBtn_' + t);
        if (sec && btn) {
            if (t === tabName) {
                sec.style.display = 'block';
                btn.style.backgroundColor = '#0284c7';
                btn.style.color = '#ffffff';
                btn.style.fontWeight = '700';
                btn.style.border = 'none';
            } else {
                sec.style.display = 'none';
                btn.style.backgroundColor = '#ffffff';
                btn.style.color = '#334155';
                btn.style.fontWeight = 'normal';
                btn.style.border = '1px solid #cbd5e1';
            }
        }
    });

    if (tabName === 'spmb') {
        loadSpmbData();
    } else if (tabName === 'guru') {
        loadGuruData();
    }
}

// ================= GURU LOGIC =================
function loadGuruData() {
    const saved = localStorage.getItem('smk_yadika_guru_data');
    if (saved) {
        try { globalGuru = JSON.parse(saved); } catch(e) { globalGuru = [...default10Guru]; }
    } else {
        globalGuru = [...default10Guru];
        localStorage.setItem('smk_yadika_guru_data', JSON.stringify(default10Guru));
    }
    renderGuruTable();
}

function renderGuruTable() {
    const tbody = document.getElementById('guruTableBody');
    if (!tbody) return;
    document.getElementById('totalGuruCount').innerText = globalGuru.length;
    tbody.innerHTML = '';

    globalGuru.forEach(g => {
        const tr = document.createElement('tr');
        tr.className = 'hover:bg-sky-50/50 transition';
        const role2Badge = (g.role2 && g.role2.trim().length > 0) 
            ? `<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg text-xs font-semibold bg-emerald-50 text-emerald-800 border border-emerald-200"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> ${g.role2}</span>`
            : `<span class="text-xs text-slate-300 italic">-</span>`;

        tr.innerHTML = `
            <td class="px-5 py-3.5 font-bold text-slate-900">${g.nama}</td>
            <td class="px-5 py-3.5 text-slate-800 font-semibold">${g.jabatan}</td>
            <td class="px-5 py-3.5">${role2Badge}</td>
            <td class="px-5 py-3.5"><span class="px-3 py-1 rounded-full text-xs font-semibold bg-sky-100 text-sky-800">${g.kategori}</span></td>
            <td class="px-5 py-3.5 text-center">
                <div class="inline-flex items-center gap-2">
                    <button type="button" onclick="editGuru(${g.id})" class="px-3 py-1.5 rounded-lg bg-sky-50 text-sky-700 hover:bg-sky-100 font-bold text-xs border border-sky-200">Edit</button>
                    <button type="button" onclick="deleteGuruItem(${g.id})" class="px-3 py-1.5 rounded-lg bg-rose-50 text-rose-600 hover:bg-rose-100 font-bold text-xs border border-rose-200">Hapus</button>
                </div>
            </td>
        `;
        tbody.appendChild(tr);
    });
}

function toggleFormGuru(forceOpen) {
    const box = document.getElementById('boxFormGuru');
    const text = document.getElementById('btnToggleText');
    const shouldOpen = forceOpen !== undefined ? forceOpen : (box.style.display === 'none');
    if (shouldOpen) {
        box.style.display = 'block';
        text.innerText = 'Tutup Form Tambah';
        document.getElementById('formGuruTitle').innerText = 'Form Tambah Pegawai / Guru Baru';
        document.getElementById('guru_id').value = '';
        document.getElementById('guru_nama').value = '';
        document.getElementById('guru_jabatan').value = '';
        document.getElementById('guru_role2').value = '';
        document.getElementById('guru_nama').focus();
    } else {
        box.style.display = 'none';
        text.innerText = '+ Tambah Guru / Pegawai';
    }
}

function editGuru(id) {
    const target = globalGuru.find(g => g.id === id);
    if (!target) return;
    toggleFormGuru(true);
    document.getElementById('formGuruTitle').innerText = 'Edit Data Pegawai: ' + target.nama;
    document.getElementById('guru_id').value = target.id;
    document.getElementById('guru_nama').value = target.nama;
    document.getElementById('guru_jabatan').value = target.jabatan;
    document.getElementById('guru_role2').value = target.role2 || '';
    document.getElementById('guru_kategori').value = target.kategori;
    document.getElementById('boxFormGuru').scrollIntoView({ behavior: 'smooth' });
}

function submitGuruForm(e) {
    e.preventDefault();
    const idVal = document.getElementById('guru_id').value;
    const nama = document.getElementById('guru_nama').value.trim();
    const jabatan = document.getElementById('guru_jabatan').value.trim();
    const role2 = document.getElementById('guru_role2').value.trim();
    const kategori = document.getElementById('guru_kategori').value;

    if (!nama || !jabatan) return;
    if (idVal) {
        const targetId = parseInt(idVal);
        globalGuru = globalGuru.map(g => g.id === targetId ? { id: targetId, nama, jabatan, role2, kategori } : g);
        showToast('Data guru berhasil diperbarui!');
    } else {
        const baru = { id: Date.now(), nama, jabatan, role2, kategori };
        globalGuru = [baru, ...globalGuru];
        showToast('Guru baru berhasil ditambahkan!');
    }
    localStorage.setItem('smk_yadika_guru_data', JSON.stringify(globalGuru));
    renderGuruTable();
    toggleFormGuru(false);
}

function deleteGuruItem(id) {
    if (confirm('Yakin ingin menghapus guru ini?')) {
        globalGuru = globalGuru.filter(g => g.id !== id);
        localStorage.setItem('smk_yadika_guru_data', JSON.stringify(globalGuru));
        renderGuruTable();
        showToast('Data guru berhasil dihapus!');
    }
}

function resetDefaultGuru() {
    globalGuru = [...default10Guru];
    localStorage.setItem('smk_yadika_guru_data', JSON.stringify(default10Guru));
    renderGuruTable();
    showToast('Data guru dinormalkan ke default!');
}

// ================= SPMB LOGIC =================
function loadSpmbData() {
    const keysToCheck = ['smk_yadika_spmb_data', 'spmb_registrations', 'spmb_list'];
    let list = null;

    // Cek apakah user sudah pernah menginisialisasi sistem data
    const isInit = localStorage.getItem('smk_yadika_spmb_initialized');

    for (let k of keysToCheck) {
        let raw = localStorage.getItem(k);
        if (raw !== null) {
            try {
                let parsed = JSON.parse(raw);
                if (Array.isArray(parsed)) {
                    list = parsed;
                    break;
                }
            } catch(e) {}
        }
    }

    // Hanya jika benar-benar pertama kali dibuka (belum pernah diinisialisasi) gunakan default
    if (list === null && !isInit) {
        list = [...defaultSpmb];
        localStorage.setItem('smk_yadika_spmb_initialized', 'true');
    } else if (list === null) {
        list = [];
    }

    let uniqueMap = new Map();
    list.forEach(item => {
        if (item && item.no && !uniqueMap.has(item.no)) {
            if (!item.imgKk) item.imgKk = fallbackKk;
            if (!item.imgAkte) item.imgAkte = fallbackAkte;
            if (!item.imgFoto) item.imgFoto = fallbackFoto;
            if (!item.imgBayar) item.imgBayar = fallbackBayar;
            uniqueMap.set(item.no, item);
        }
    });

    globalSpmb = Array.from(uniqueMap.values());
    
    // Simpan hasil sinkronisasi ke seluruh storage key
    for (let k of keysToCheck) {
        try { localStorage.setItem(k, JSON.stringify(globalSpmb)); } catch(e) {}
    }
    renderSpmbTable();
}

let openDropdownRowId = null;

function toggleDropdownRow(no) {
    const detailRow = document.getElementById('dropdown_detail_' + no);
    const arrowIcon = document.getElementById('arrow_' + no);
    if (!detailRow) return;

    if (detailRow.style.display === 'none' || detailRow.style.display === '') {
        detailRow.style.display = 'table-row';
        if (arrowIcon) arrowIcon.style.transform = 'rotate(180deg)';
        openDropdownRowId = no;
    } else {
        detailRow.style.display = 'none';
        if (arrowIcon) arrowIcon.style.transform = 'rotate(0deg)';
        openDropdownRowId = null;
    }
}

function renderSpmbTable() {
    const filterEl = document.getElementById('filterSpmbSelect');
    const filter = filterEl ? filterEl.value : 'Semua';
    const tbody = document.getElementById('spmbTableBody');
    if (!tbody) return;
    
    document.getElementById('totalSpmbCount').innerText = globalSpmb.length;
    tbody.innerHTML = '';

    const list = filter === 'Semua' ? globalSpmb : globalSpmb.filter(s => s.status === filter);

    list.forEach(item => {
        let badgeClass = 'bg-blue-100 text-blue-800 border-blue-200';
        let dotClass = 'bg-blue-500';
        if (item.status === 'Berkas Sedang Diverifikasi') {
            badgeClass = 'bg-amber-100 text-amber-800 border-amber-200';
            dotClass = 'bg-amber-500 animate-pulse';
        } else if (item.status === 'Berkas Tervalidasi') {
            badgeClass = 'bg-emerald-100 text-emerald-800 border-emerald-200';
            dotClass = 'bg-emerald-500';
        } else if (item.status === 'Belum Memenuhi Kriteria') {
            badgeClass = 'bg-rose-100 text-rose-800 border-rose-200';
            dotClass = 'bg-rose-500';
        }

        const safeId = item.no.replace(/[^a-zA-Z0-9_-]/g, '_');
        const isCurrentlyOpen = (openDropdownRowId === safeId);

        // 1. Baris Utama
        const trMain = document.createElement('tr');
        trMain.className = 'hover:bg-sky-50/50 transition cursor-pointer select-none';
        trMain.innerHTML = `
            <td class="w-12 px-3 py-3.5 text-center" onclick="toggleDropdownRow('${safeId}')">
                <button type="button" class="w-7 h-7 rounded-lg bg-sky-100 text-sky-700 hover:bg-sky-200 font-bold flex items-center justify-center mx-auto transition">
                    <svg id="arrow_${safeId}" style="transition: transform 0.2s; transform: ${isCurrentlyOpen ? 'rotate(180deg)' : 'rotate(0deg)'};" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </button>
            </td>
            <td class="px-4 py-3.5 font-mono font-bold text-sky-700" onclick="toggleDropdownRow('${safeId}')">${item.no}</td>
            <td class="px-4 py-3.5 font-bold text-slate-900" onclick="toggleDropdownRow('${safeId}')">${item.nama}</td>
            <td class="px-4 py-3.5 text-slate-600" onclick="toggleDropdownRow('${safeId}')">${item.asal}</td>
            <td class="px-4 py-3.5 font-semibold text-slate-800" onclick="toggleDropdownRow('${safeId}')">${item.jurusan}</td>
            <td class="px-4 py-3.5 text-center" onclick="toggleDropdownRow('${safeId}')">
                <span class="px-3 py-1.5 rounded-full text-xs font-bold inline-flex items-center gap-1.5 border ${badgeClass}">
                    <span class="w-2 h-2 rounded-full ${dotClass}"></span>
                    ${item.status}
                </span>
            </td>
            <td class="px-4 py-3.5 text-center">
                <div class="inline-flex items-center gap-1.5">
                    <button type="button" onclick="openSpmbModal('${item.no}')" style="background-color: #0284c7 !important; color: #ffffff !important;" class="px-3 py-1.5 rounded-lg font-bold text-xs shadow hover:opacity-90">Modal &rarr;</button>
                    <button type="button" onclick="deleteSpmbItem('${item.no}')" style="background-color: #ffe4e6 !important; color: #e11d48 !important; border: 1px solid #fecdd3 !important;" class="px-2.5 py-1.5 rounded-lg font-bold text-xs hover:bg-rose-200">Hapus</button>
                </div>
            </td>
        `;
        tbody.appendChild(trMain);

        // 2. Baris Dropdown Ekstensi (Detail & Lampiran Berkas Gambar)
        const trDropdown = document.createElement('tr');
        trDropdown.id = 'dropdown_detail_' + safeId;
        trDropdown.style.display = isCurrentlyOpen ? 'table-row' : 'none';
        trDropdown.className = 'bg-sky-50/40 border-y-2 border-sky-200';
        trDropdown.innerHTML = `
            <td colspan="7" class="p-5">
                <div class="bg-white rounded-2xl p-5 border border-sky-200 shadow-sm space-y-4">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-3 border-b border-slate-100 gap-2">
                        <div>
                            <span class="text-[10px] font-black uppercase text-sky-600 block">DROPDOWN DETAIL FORMULIR</span>
                            <h4 class="text-sm font-black text-slate-900">${item.nama} - <span class="font-mono text-sky-800">${item.no}</span></h4>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button" onclick="openSpmbModal('${item.no}')" class="px-3 py-1.5 rounded-xl bg-sky-600 text-white font-bold text-xs hover:bg-sky-700">Verifikasi Lengkap</button>
                            <button type="button" onclick="printSingleStudent('${item.no}')" class="px-3 py-1.5 rounded-xl bg-rose-600 text-white font-bold text-xs hover:bg-rose-700">Cetak PDF Siswa Ini</button>
                        </div>
                    </div>

                    <!-- Informasi Isian Formulir -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs">
                        <div class="bg-slate-50 p-3 rounded-xl border border-slate-200 space-y-1">
                            <span class="text-[10px] font-bold text-slate-400 block uppercase">Identitas Siswa</span>
                            <p><strong>NISN:</strong> ${item.nisn || '-'}</p>
                            <p><strong>Kontak HP:</strong> ${item.noHp || '-'}</p>
                            <p><strong>Email:</strong> ${item.email || '-'}</p>
                            <p><strong>Alamat:</strong> ${item.alamat || 'Manado'}</p>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-xl border border-slate-200 space-y-1">
                            <span class="text-[10px] font-bold text-slate-400 block uppercase">Data Orang Tua</span>
                            <p><strong>Nama Wali:</strong> ${item.ortu || '-'}</p>
                            <p><strong>Nomor KK:</strong> ${item.noKk || '-'}</p>
                            <p><strong>Pekerjaan:</strong> ${item.pekerjaan || '-'}</p>
                            <p><strong>Status:</strong> <span class="font-bold text-sky-700">${item.status}</span></p>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-xl border border-slate-200 space-y-1">
                            <span class="text-[10px] font-bold text-slate-400 block uppercase">Rincian Pembayaran</span>
                            <p class="font-bold text-emerald-700">${item.pembayaran || 'UANG PEMBANGUNAN'}</p>
                            <p class="text-[10px] text-slate-400 pt-1">Rekening BRI: 5119 0102 4110 534 A.N CHATRIEN A SAMOLA</p>
                        </div>
                    </div>

                    <!-- Galeri Gambar Berkas di dalam Dropdown -->
                    <div>
                        <span class="text-[10px] font-black uppercase text-slate-700 block mb-2">Lampiran Berkas Gambar Fisik (Klik gambar untuk perbesar):</span>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-center text-xs">
                            <div class="bg-slate-50 p-2 rounded-xl border border-slate-200">
                                <span class="text-[10px] font-bold text-slate-700 block mb-1">Pas Foto 3x4</span>
                                <div class="h-24 bg-white rounded-lg overflow-hidden border border-slate-200 flex items-center justify-center">
                                    <img src="${item.imgFoto || fallbackFoto}" class="w-full h-full object-cover cursor-pointer hover:scale-105 transition" onclick="window.open(this.src)">
                                </div>
                            </div>
                            <div class="bg-slate-50 p-2 rounded-xl border border-slate-200">
                                <span class="text-[10px] font-bold text-slate-700 block mb-1">Kartu Keluarga (KK)</span>
                                <div class="h-24 bg-white rounded-lg overflow-hidden border border-slate-200 flex items-center justify-center">
                                    <img src="${item.imgKk || fallbackKk}" class="w-full h-full object-cover cursor-pointer hover:scale-105 transition" onclick="window.open(this.src)">
                                </div>
                            </div>
                            <div class="bg-slate-50 p-2 rounded-xl border border-slate-200">
                                <span class="text-[10px] font-bold text-slate-700 block mb-1">Akte Kelahiran</span>
                                <div class="h-24 bg-white rounded-lg overflow-hidden border border-slate-200 flex items-center justify-center">
                                    <img src="${item.imgAkte || fallbackAkte}" class="w-full h-full object-cover cursor-pointer hover:scale-105 transition" onclick="window.open(this.src)">
                                </div>
                            </div>
                            <div class="bg-slate-50 p-2 rounded-xl border border-slate-200">
                                <span class="text-[10px] font-bold text-emerald-700 block mb-1">Bukti Bayar BRI</span>
                                <div class="h-24 bg-white rounded-lg overflow-hidden border border-emerald-300 flex items-center justify-center">
                                    <img src="${item.imgBayar || fallbackBayar}" class="w-full h-full object-cover cursor-pointer hover:scale-105 transition" onclick="window.open(this.src)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        `;
        tbody.appendChild(trDropdown);
    });
}

function printSingleStudent(no) {
    currentSpmbItem = globalSpmb.find(s => s.no === no);
    if (currentSpmbItem) {
        exportCurrentSpmbPdf();
    }
}

function openSpmbModal(no) {
    currentSpmbItem = globalSpmb.find(s => s.no === no);
    if (!currentSpmbItem) return;

    document.getElementById('modalSpmbNama').innerText = currentSpmbItem.nama;
    document.getElementById('modalSpmbNo').innerText = currentSpmbItem.no;
    document.getElementById('modalSpmbAsal').innerText = currentSpmbItem.asal;
    document.getElementById('modalSpmbJurusan').innerText = currentSpmbItem.jurusan;
    document.getElementById('modalSpmbEmail').innerText = currentSpmbItem.email || '-';
    document.getElementById('modalSpmbNisn').innerText = currentSpmbItem.nisn || '-';
    document.getElementById('modalSpmbHp').innerText = currentSpmbItem.noHp || '-';
    document.getElementById('modalSpmbAlamat').innerText = currentSpmbItem.alamat || 'Manado, Sulawesi Utara';
    document.getElementById('modalSpmbOrtu').innerText = currentSpmbItem.ortu || 'Bpk/Ibu Wali Murid';
    document.getElementById('modalSpmbKk').innerText = currentSpmbItem.noKk || '-';
    document.getElementById('modalSpmbPekerjaan').innerText = currentSpmbItem.pekerjaan || 'Wiraswasta';
    document.getElementById('modalSpmbBayar').innerText = currentSpmbItem.pembayaran || 'UANG PEMBANGUNAN, SPP';

    document.getElementById('previewImgKk').src = currentSpmbItem.imgKk || fallbackKk;
    document.getElementById('previewImgAkte').src = currentSpmbItem.imgAkte || fallbackAkte;
    document.getElementById('previewImgFoto').src = currentSpmbItem.imgFoto || fallbackFoto;
    document.getElementById('previewImgBayar').src = currentSpmbItem.imgBayar || fallbackBayar;

    const isVal = currentSpmbItem.status === 'Berkas Tervalidasi';
    const isVer = currentSpmbItem.status === 'Berkas Sedang Diverifikasi';
    document.getElementById('chk_ijazah').checked = isVal || isVer;
    document.getElementById('chk_rapor').checked = isVal || isVer;
    document.getElementById('chk_foto').checked = isVal;
    document.getElementById('chk_pernyataan').checked = isVal;

    document.getElementById('modalSpmb').style.display = 'flex';
}

function closeSpmbModal() {
    document.getElementById('modalSpmb').style.display = 'none';
}

function updateCurrentSpmbStatus(newStatus) {
    if (!currentSpmbItem) return;
    const no = currentSpmbItem.no;
    globalSpmb = globalSpmb.map(s => s.no === no ? { ...s, status: newStatus } : s);
    localStorage.setItem('smk_yadika_spmb_data', JSON.stringify(globalSpmb));
    localStorage.setItem('spmb_registrations', JSON.stringify(globalSpmb));
    renderSpmbTable();
    closeSpmbModal();
    showToast('Status ' + no + ' diubah ke: ' + newStatus);
}

function deleteSpmbItem(no) {
    if (confirm('Hapus berkas pendaftar ' + no + ' secara permanen?')) {
        globalSpmb = globalSpmb.filter(s => s.no !== no);

        // Hapus permanen dari semua storage key
        const keysToCheck = ['smk_yadika_spmb_data', 'spmb_registrations', 'spmb_list'];
        keysToCheck.forEach(k => {
            localStorage.setItem(k, JSON.stringify(globalSpmb));
        });
        localStorage.setItem('smk_yadika_spmb_initialized', 'true');

        renderSpmbTable();
        showToast('Data ' + no + ' berhasil dihapus permanen!');
    }
}

function deleteCurrentSpmbFromModal() {
    if (!currentSpmbItem) return;
    if (confirm('Hapus berkas pendaftar ' + currentSpmbItem.no + ' secara permanen?')) {
        deleteSpmbItem(currentSpmbItem.no);
        closeSpmbModal();
    }
}

// ================= EKSPOR EXCEL & PDF =================
function exportSpmbExcelHtmlWithImages() {
    if (!globalSpmb || globalSpmb.length === 0) {
        alert('Tidak ada data pendaftar untuk diekspor!');
        return;
    }

    const host = window.location.origin;
    let rowsHtml = '';
    
    globalSpmb.forEach((item, index) => {
        const fullFoto = (item.imgFoto && item.imgFoto.startsWith('data:')) ? item.imgFoto : (host + (item.imgFoto || fallbackFoto));
        const fullKk = (item.imgKk && item.imgKk.startsWith('data:')) ? item.imgKk : (host + (item.imgKk || fallbackKk));
        const fullAkte = (item.imgAkte && item.imgAkte.startsWith('data:')) ? item.imgAkte : (host + (item.imgAkte || fallbackAkte));
        const fullBayar = (item.imgBayar && item.imgBayar.startsWith('data:')) ? item.imgBayar : (host + (item.imgBayar || fallbackBayar));

        rowsHtml += `
            <tr style="height: 40px; text-align: center;">
                <td style="border: 1px solid #cbd5e1; padding: 6px;">${index + 1}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px; font-weight: bold; font-family: monospace;">${item.no}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px; font-weight: bold; text-align: left;">${item.nama}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px;">${item.gender || 'Laki-laki'}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px;">${item.nisn || '-'}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px; text-align: left;">${item.asal}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px; font-weight: bold; text-align: left;">${item.jurusan}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px;">${item.email || '-'}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px;">${item.noHp || '-'}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px; text-align: left;">${item.ortu || '-'} (KK: ${item.noKk || '-'})</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px; font-weight: bold; color: #047857;">${item.pembayaran || 'UANG PEMBANGUNAN'}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px; font-weight: bold;">${item.status}</td>
                <td style="border: 1px solid #cbd5e1; padding: 6px;"><a href="${fullFoto}" target="_blank">Lihat Pas Foto</a></td>
                <td style="border: 1px solid #cbd5e1; padding: 6px;"><a href="${fullKk}" target="_blank">Lihat Kartu Keluarga</a></td>
                <td style="border: 1px solid #cbd5e1; padding: 6px;"><a href="${fullAkte}" target="_blank">Lihat Akte Lahir</a></td>
                <td style="border: 1px solid #cbd5e1; padding: 6px;"><a href="${fullBayar}" target="_blank">Lihat Bukti Bayar</a></td>
            </tr>
        `;
    });

    const excelContent = `
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <style>
                table { border-collapse: collapse; width: 100%; font-family: Arial, sans-serif; font-size: 11px; }
                th { background-color: #0284c7; color: white; padding: 10px; border: 1px solid #94a3b8; font-size: 11px; }
                td { border: 1px solid #cbd5e1; padding: 6px; vertical-align: middle; }
                a { color: #0284c7; text-decoration: underline; font-weight: bold; }
            </style>
        </head>
        <body>
            <h2 style="font-family: Arial, sans-serif; color: #0f172a;">REKAPITULASI RESMI PENERIMAAN MURID BARU (SPMB) - SMK YADIKA MANADO</h2>
            <p style="font-family: Arial, sans-serif; font-size: 11px; color: #64748b;">Tanggal Unduh: 29 September 2026 &bull; Data Lengkap Terhubung Langsung ke Lampiran Berkas Siswa</p>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Registrasi</th>
                        <th>Nama Calon Siswa</th>
                        <th>Gender</th>
                        <th>NISN</th>
                        <th>Asal SMP/MTs</th>
                        <th>Pilihan Jurusan</th>
                        <th>Email Siswa</th>
                        <th>No. HP / WA</th>
                        <th>Data Orang Tua & KK</th>
                        <th>Rincian Pembayaran</th>
                        <th>Status Alur Berkas</th>
                        <th>Link Pas Foto</th>
                        <th>Link Kartu Keluarga</th>
                        <th>Link Akte Lahir</th>
                        <th>Link Bukti Bayar BRI</th>
                    </tr>
                </thead>
                <tbody>
                    ${rowsHtml}
                </tbody>
            </table>
        </body>
        </html>
    `;

    const blob = new Blob([excelContent], { type: 'application/vnd.ms-excel;charset=utf-8' });
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = `Rekap_SPMB_SMK_Yadika_Manado_${new Date().toISOString().slice(0,10)}.xls`;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    showToast('Rekap Excel & Tautan Berkas Fisik Berhasil Diunduh!');
}

function exportSemuaSiswaPdf() {
    if (!globalSpmb || globalSpmb.length === 0) {
        alert('Tidak ada data pendaftar untuk dicetak!');
        return;
    }

    let cardsHtml = '';
    globalSpmb.forEach(item => {
        cardsHtml += `
            <div style="page-break-after: always; padding: 25px; border-bottom: 2px dashed #94a3b8; font-family: Arial, sans-serif;">
                <div style="text-align: center; border-bottom: 2px solid #0284c7; padding-bottom: 8px; margin-bottom: 15px;">
                    <h2 style="margin: 0; color: #0f172a; font-size: 16px;">SMK YADIKA MANADO</h2>
                    <p style="margin: 2px 0 0; font-size: 11px; color: #475569;">PANITIA PENERIMAAN MURID BARU (SPMB) T.P 2027/2028</p>
                </div>
                
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 15px; font-size: 11px;">
                    <tr><th style="width: 25%; background: #f8fafc; border: 1px solid #cbd5e1; padding: 6px;">No. Registrasi</th><td style="border: 1px solid #cbd5e1; padding: 6px; font-weight: bold; font-family: monospace;">${item.no}</td></tr>
                    <tr><th style="background: #f8fafc; border: 1px solid #cbd5e1; padding: 6px;">Nama Calon Siswa</th><td style="border: 1px solid #cbd5e1; padding: 6px; font-weight: bold;">${item.nama}</td></tr>
                    <tr><th style="background: #f8fafc; border: 1px solid #cbd5e1; padding: 6px;">NISN / Kontak</th><td style="border: 1px solid #cbd5e1; padding: 6px;">${item.nisn || '-'} / ${item.noHp || '-'}</td></tr>
                    <tr><th style="background: #f8fafc; border: 1px solid #cbd5e1; padding: 6px;">Asal Sekolah</th><td style="border: 1px solid #cbd5e1; padding: 6px;">${item.asal}</td></tr>
                    <tr><th style="background: #f8fafc; border: 1px solid #cbd5e1; padding: 6px;">Pilihan Jurusan</th><td style="border: 1px solid #cbd5e1; padding: 6px; font-weight: bold; color: #0284c7;">${item.jurusan}</td></tr>
                    <tr><th style="background: #f8fafc; border: 1px solid #cbd5e1; padding: 6px;">Data Orang Tua</th><td style="border: 1px solid #cbd5e1; padding: 6px;">${item.ortu || '-'} (No. KK: ${item.noKk || '-'})</td></tr>
                    <tr><th style="background: #f8fafc; border: 1px solid #cbd5e1; padding: 6px;">Rincian Pembayaran</th><td style="border: 1px solid #cbd5e1; padding: 6px; font-weight: bold; color: #059669;">${item.pembayaran || 'UANG PEMBANGUNAN'}</td></tr>
                    <tr><th style="background: #f8fafc; border: 1px solid #cbd5e1; padding: 6px;">Status Verifikasi</th><td style="border: 1px solid #cbd5e1; padding: 6px; font-weight: bold;">${item.status}</td></tr>
                </table>

                <h4 style="margin: 0 0 8px 0; font-size: 11px;">LAMPIRAN BERKAS FISIK & BUKTI BAYAR:</h4>
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px; text-align: center;">
                    <div style="border: 1px solid #cbd5e1; padding: 5px; border-radius: 6px;"><span style="display: block; font-size: 9px; font-weight: bold; margin-bottom: 4px;">Pas Foto 3x4</span><img src="${item.imgFoto || fallbackFoto}" style="max-width: 100%; height: 95px; object-fit: cover; border-radius: 4px;"></div>
                    <div style="border: 1px solid #cbd5e1; padding: 5px; border-radius: 6px;"><span style="display: block; font-size: 9px; font-weight: bold; margin-bottom: 4px;">Kartu Keluarga (KK)</span><img src="${item.imgKk || fallbackKk}" style="max-width: 100%; height: 95px; object-fit: cover; border-radius: 4px;"></div>
                    <div style="border: 1px solid #cbd5e1; padding: 5px; border-radius: 6px;"><span style="display: block; font-size: 9px; font-weight: bold; margin-bottom: 4px;">Akte Kelahiran</span><img src="${item.imgAkte || fallbackAkte}" style="max-width: 100%; height: 95px; object-fit: cover; border-radius: 4px;"></div>
                    <div style="border: 1px solid #cbd5e1; padding: 5px; border-radius: 6px;"><span style="display: block; font-size: 9px; font-weight: bold; margin-bottom: 4px;">Bukti Bayar BRI</span><img src="${item.imgBayar || fallbackBayar}" style="max-width: 100%; height: 95px; object-fit: cover; border-radius: 4px;"></div>
                </div>
            </div>
        `;
    });

    const printAllWin = window.open('', '', 'width=900,height=950');
    printAllWin.document.write(`
        <!DOCTYPE html>
        <html>
        <head>
            <title>Kumpulan Berkas Lengkap Seluruh Pendaftar SPMB</title>
        </head>
        <body>
            ${cardsHtml}
        </body>
        </html>
    `);
    printAllWin.document.close();
    printAllWin.focus();
    setTimeout(() => { printAllWin.print(); }, 600);
}

function exportCurrentSpmbPdf() {
    if (!currentSpmbItem) return;
    const printWin = window.open('', '', 'width=880,height=950');
    printWin.document.write(`
        <!DOCTYPE html>
        <html>
        <head>
            <title>Lembar Verifikasi SPMB - ${currentSpmbItem.nama}</title>
            <style>
                body { font-family: Arial, sans-serif; padding: 25px; color: #0f172a; }
                .kop { text-align: center; border-bottom: 2px solid #0284c7; padding-bottom: 10px; margin-bottom: 20px; }
                .kop h2 { margin: 0; color: #0f172a; font-size: 18px; }
                .kop p { margin: 3px 0 0; font-size: 11px; color: #475569; }
                table { width: 100%; border-collapse: collapse; margin-bottom: 20px; font-size: 12px; }
                th, td { border: 1px solid #cbd5e1; padding: 7px 10px; text-align: left; }
                th { background-color: #f8fafc; width: 32%; }
                .grid-img { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-top: 15px; }
                .img-box { border: 1px solid #cbd5e1; padding: 6px; text-align: center; border-radius: 8px; }
                .img-box img { max-width: 100%; height: 95px; object-fit: cover; border-radius: 4px; }
                .img-box span { display: block; font-size: 10px; font-weight: bold; margin-bottom: 5px; color: #334155; }
                .badge { display: inline-block; padding: 4px 10px; font-size: 11px; font-weight: bold; border-radius: 4px; background: #e0f2fe; color: #0369a1; }
                .footer { margin-top: 35px; text-align: right; font-size: 11px; }
            </style>
        </head>
        <body>
            <div class="kop">
                <h2>SMK YADIKA MANADO</h2>
                <p>PANITIA PENERIMAAN MURID BARU (SPMB) T.P 2027/2028</p>
                <p>Jl. Raya Manado - Bitung, Kolongan, Kec. Kalawat, Minahasa Utara, Sulawesi Utara</p>
            </div>
            <h3 style="text-align: center; font-size: 14px; margin-bottom: 15px;">LEMBAR VERIFIKASI BERKAS PENDAFTAR RESMI</h3>
            <table>
                <tr><th>No. Registrasi</th><td><strong>${currentSpmbItem.no}</strong></td></tr>
                <tr><th>Nama Calon Siswa</th><td><strong>${currentSpmbItem.nama}</strong></td></tr>
                <tr><th>NISN Siswa</th><td>${currentSpmbItem.nisn || '-'}</td></tr>
                <tr><th>Asal SMP / MTs</th><td>${currentSpmbItem.asal}</td></tr>
                <tr><th>Pilihan Program Keahlian</th><td><strong>${currentSpmbItem.jurusan}</strong></td></tr>
                <tr><th>Email / Kontak WA</th><td>${currentSpmbItem.email || '-'} / ${currentSpmbItem.noHp || '-'}</td></tr>
                <tr><th>Alamat Domisili</th><td>${currentSpmbItem.alamat || 'Manado, Sulawesi Utara'}</td></tr>
                <tr><th>Data Orang Tua / Wali</th><td>${currentSpmbItem.ortu || '-'} (No. KK: ${currentSpmbItem.noKk || '-'})</td></tr>
                <tr><th>Rincian Pembayaran</th><td><strong>${currentSpmbItem.pembayaran || 'UANG PEMBANGUNAN, SPP'}</strong></td></tr>
                <tr><th>Status Hasil Verifikasi</th><td><span class="badge">${currentSpmbItem.status}</span></td></tr>
            </table>

            <h4 style="margin: 0 0 5px 0; font-size: 12px;">DOKUMEN LAMPIRAN BERKAS FISIK & BUKTI BAYAR:</h4>
            <div class="grid-img">
                <div class="img-box"><span>Kartu Keluarga (KK)</span><img src="${currentSpmbItem.imgKk || fallbackKk}"></div>
                <div class="img-box"><span>Akte Kelahiran</span><img src="${currentSpmbItem.imgAkte || fallbackAkte}"></div>
                <div class="img-box"><span>Pas Foto 3x4</span><img src="${currentSpmbItem.imgFoto || fallbackFoto}"></div>
                <div class="img-box"><span>Bukti Bayar BRI</span><img src="${currentSpmbItem.imgBayar || fallbackBayar}"></div>
            </div>

            <div class="footer">
                <p>Manado, 29 September 2026</p>
                <p style="margin-top: 45px;"><strong>Panitia Verifikasi SPMB SMK Yadika</strong></p>
            </div>
        </body>
        </html>
    `);
    printWin.document.close();
    printWin.focus();
    setTimeout(() => { printWin.print(); }, 500);
}

// Inisialisasi awal saat halaman termuat
document.addEventListener('DOMContentLoaded', () => {
    loadSpmbData();
    loadGuruData();
});
</script>
@endsection
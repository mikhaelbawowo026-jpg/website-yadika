@extends('layouts.school')

@section('title', 'Profil & Struktur Guru - SMK Yadika Manado')

@section('content')
<!-- HERO SECTION -->
<section class="relative py-16 overflow-hidden bg-gradient-to-b from-sky-100/70 via-sky-50/30 to-white border-b border-slate-200">
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-sky-300/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-300/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-extrabold uppercase tracking-widest bg-white/80 text-sky-800 border border-sky-200 shadow-xs backdrop-blur-md mb-4">
            <span class="w-2 h-2 rounded-full bg-[#0284c7] animate-ping"></span>
            Tentang SMK Yadika Manado
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
            PROFIL, VISI MISI &amp; STRUKTUR ORGANISASI
        </h1>
        <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-3 leading-relaxed font-medium">
            Mencetak generasi vokasi yang unggul, berkarakter disiplin tinggi, mandiri, dan berdaya saing global.
        </p>
    </div>
</section>

<!-- MAIN CONTENT WRAPPER -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-12" id="publicGuruApp">

    <!-- 1. SAMBUTAN KEPALA SEKOLAH -->
    <section class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm hover:shadow-md transition">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-4 flex flex-col items-center text-center">
                <div class="relative group">
                    <div class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-sky-500 to-blue-600 opacity-30 group-hover:opacity-60 blur-sm transition duration-300"></div>
                    <div class="relative w-44 h-52 sm:w-48 sm:h-56 rounded-2xl overflow-hidden border border-slate-200 shadow-sm bg-slate-100">
                        <img src="{{ asset('img/KepalaSekolah Mery Sorongan.png') }}" alt="Kepala Sekolah" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                </div>
                <h3 class="text-base font-black text-slate-900 mt-4 leading-snug">Mery Femi Sorongan, S.Pd</h3>
                <span class="text-xs font-bold text-sky-600">Kepala SMK Yadika Manado</span>
            </div>

            <div class="lg:col-span-8 space-y-3.5 text-slate-600 text-sm leading-relaxed">
                <span class="text-xs font-extrabold uppercase tracking-wider text-[#0284c7] block">Sambutan Pimpinan</span>
                <h2 class="text-xl sm:text-2xl font-black text-slate-900 leading-snug">
                    Mewujudkan Pendidikan Kejuruan Berdaya Saing Global
                </h2>
                <p>
                    Selamat datang di portal resmi SMK Yadika Manado. Sebagai lembaga pendidikan vokasi di bawah naungan <strong>Yayasan Abdi Karya (YADIKA)</strong>, kami berkomitmen menyelenggarakan pembelajaran yang mengintegrasikan kompetensi teknis (hard skills) dan pembentukan karakter integritas disiplin kerja (soft skills).
                </p>
                <p>
                    Dengan sarana pembelajaran komprehensif, ruang praktik standar industri, serta kemitraan DUDI yang luas, kami membina setiap siswa dan siswi menjadi insan cerdas dan berkarakter siap kerja maupun berwirausaha.
                </p>
            </div>
        </div>
    </section>

    <!-- 2. VISI & MISI SEKOLAH (SESUAI PEDOMAN RESMI) -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Visi Card -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between hover:border-sky-300 transition">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div style="background-color: #0284c7 !important;" class="w-11 h-11 rounded-2xl text-white flex items-center justify-center font-black text-base shrink-0 shadow-md">
                        V
                    </div>
                    <div>
                        <span class="text-[10px] font-black uppercase text-sky-600 tracking-wider block">Pedoman Utama</span>
                        <h3 class="text-lg font-black text-slate-900">Visi Sekolah</h3>
                    </div>
                </div>
                <div class="bg-sky-50/70 p-5 rounded-2xl border border-sky-100 mt-2">
                    <p class="text-slate-800 text-base font-extrabold leading-snug tracking-tight text-center sm:text-left">
                        "Menuju SMK Cerdas dan Berkarakter"
                    </p>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-slate-400">
                <span>Nilai Inti: Cerdas &bull; Disiplin &bull; Karakter</span>
                <span class="text-sky-600 font-bold">SMK Yadika Manado</span>
            </div>
        </div>

        <!-- Misi Card -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col justify-between hover:border-sky-300 transition">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div style="background-color: #0284c7 !important;" class="w-11 h-11 rounded-2xl text-white flex items-center justify-center font-black text-base shrink-0 shadow-md">
                        M
                    </div>
                    <div>
                        <span class="text-[10px] font-black uppercase text-sky-600 tracking-wider block">Arah &amp; Tindakan</span>
                        <h3 class="text-lg font-black text-slate-900">Misi Sekolah</h3>
                    </div>
                </div>
                <div class="bg-sky-50/70 p-5 rounded-2xl border border-sky-100 mt-2">
                    <p class="text-slate-700 text-sm font-semibold leading-relaxed">
                        "Mencerdaskan peserta didik melalui layanan pendidikan yang berkualitas, bermakna, dan terjangkau."
                    </p>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-100 text-xs font-semibold text-slate-400">
                Fokus Sasaran: Mutu Layanan &bull; Pembelajaran Bermakna &bull; Inklusif
            </div>
        </div>
    </section>

    <!-- 3. DIREKTORI GURU & PEGAWAI SINKRON DENGAN GAMBAR FOLDER PUBLIC/IMG -->
    <section class="space-y-6">
        <div class="text-center sm:text-left mb-2">
            <span class="text-xs font-extrabold uppercase tracking-wider text-[#0284c7] block">Dewan Pengajar &amp; Tenaga Kependidikan</span>
            <h3 class="text-2xl sm:text-3xl font-black text-slate-900 mt-1">Direktori Guru &amp; Staf Yadika</h3>
        </div>

        <!-- CSS KHUSUS TAB MENU -->
        <style>
            .tab-btn { transition: all 0.3s ease; cursor: pointer; border: 1px solid transparent; }
            .tab-active { background-color: #0284c7 !important; color: #ffffff !important; font-weight: 900 !important; box-shadow: 0 4px 10px rgba(2,132,199,0.3); border-color: #0284c7 !important; }
            .tab-inactive { background-color: #ffffff !important; color: #64748b !important; font-weight: 700 !important; border-color: #cbd5e1 !important; }
            .tab-inactive:hover { background-color: #f8fafc !important; color: #0f172a !important; border-color: #94a3b8 !important; }
        </style>

        <!-- MODERN TOOLBAR: TABS & SEARCH -->
        <div class="bg-slate-50 p-3 sm:p-4 rounded-3xl border border-slate-200 shadow-sm flex flex-col xl:flex-row xl:items-center justify-between gap-4 mb-8">
            
            <!-- Segmented Control Tabs -->
            <div class="flex flex-wrap items-center gap-2 w-full xl:w-auto" id="filterBtnGroup">
                <button type="button" onclick="setKategoriFilter('Semua')" id="btnKat_Semua" class="tab-btn tab-active px-5 py-2.5 rounded-xl text-xs text-center w-full sm:w-auto">
                    Semua (<span id="count_Semua">0</span>)
                </button>
                <button type="button" onclick="setKategoriFilter('Pimpinan')" id="btnKat_Pimpinan" class="tab-btn tab-inactive px-5 py-2.5 rounded-xl text-xs text-center flex-1 sm:flex-none">Pimpinan</button>
                <button type="button" onclick="setKategoriFilter('Kaprodi')" id="btnKat_Kaprodi" class="tab-btn tab-inactive px-5 py-2.5 rounded-xl text-xs text-center flex-1 sm:flex-none">Kaprodi</button>
                <button type="button" onclick="setKategoriFilter('Guru Produktif')" id="btnKat_GuruProduktif" class="tab-btn tab-inactive px-5 py-2.5 rounded-xl text-xs text-center flex-1 sm:flex-none">Kejuruan</button>
                <button type="button" onclick="setKategoriFilter('Guru Umum')" id="btnKat_GuruUmum" class="tab-btn tab-inactive px-5 py-2.5 rounded-xl text-xs text-center flex-1 sm:flex-none">Umum</button>
                <button type="button" onclick="setKategoriFilter('Tenaga Kependidikan')" id="btnKat_TenagaKependidikan" class="tab-btn tab-inactive px-5 py-2.5 rounded-xl text-xs text-center flex-1 sm:flex-none">Staf &amp; TU</button>
            </div>

            <!-- Search Input Modern -->
            <div class="relative w-full xl:max-w-xs shrink-0">
                <input type="text" id="searchTeacherInput" onkeyup="handleSearchTeacher()" placeholder="Cari nama atau mapel..." 
                       class="w-full pl-11 pr-4 py-3 rounded-xl border-2 border-slate-200 focus:border-sky-400 focus:ring-4 focus:ring-sky-500/10 outline-none text-xs font-bold text-slate-800 bg-white hover:bg-slate-50 transition-all placeholder:font-medium placeholder:text-slate-400">
                <svg class="w-4 h-4 text-slate-400 absolute left-4 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </div>
            
        </div>

        <!-- GRID KARTU GURU MODEREN --><!-- GRID KARTU GURU MODEREN SESUAI GAMBAR FOLDER ASLI -->
        <div id="gridTeachers" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
            <!-- Di-generate dinamis oleh script -->
        </div>

        <div id="emptyTeacherMsg" style="display: none;" class="text-center py-16 bg-white rounded-3xl border border-dashed border-slate-300 p-8">
            <h4 class="text-sm font-bold text-slate-800">Pendidik atau staf tidak ditemukan</h4>
            <p class="text-xs text-slate-400 mt-1">Coba gunakan kata kunci pencarian yang lain.</p>
        </div>
    </section>

</div>

<!-- SCRIPT DIRECTORY TERHUBUNG DENGAN ASSET FOLDER PUBLIC/IMG -->
<script>
const defaultGuruDirectory = [
    // --- PIMPINAN & KAPRODI ---
    { id: 1, nama: 'Mery Femi Sorongan, S.Pd, Gr', jabatan: 'KEPALA SEKOLAH', role2: 'Guru Mapel Matematika', kategori: 'Pimpinan', fotoPimpinan: '{{ asset("img/KepalaSekolah Mery Sorongan.png") }}', fotoMapel: '{{ asset("img/foto_guru/Guru Mapel Matematika - Mery Sorongan.png") }}' },
    { id: 2, nama: 'Sefrianus Meki Tatontos, S.Pd, Gr', jabatan: 'WAKIL KEPALA SEKOLAH BIDANG KURIKULUM', role2: 'Guru Produktif TJKT', kategori: 'Pimpinan', fotoPimpinan: '{{ asset("img/Kurikulum Sefrianus Tatontos.png") }}', fotoMapel: '{{ asset("img/foto_guru/Guru Produktif TJKT - Sefrianus Tatontos.png") }}' },
    { id: 3, nama: 'Arki Arter Saselah, S.Pd, Gr', jabatan: 'WAKIL KESISWAAN', role2: 'Guru Produktif Perhotelan', kategori: 'Pimpinan', fotoPimpinan: '{{ asset("img/Wakasis - Arki Saselah.png") }}', fotoMapel: '{{ asset("img/foto_guru/Guru Produktif Hotel - Arki Saselah.png") }}' },
    { id: 4, nama: 'Tirza Zainullah, S.E', jabatan: 'KEPALA TATA USAHA', role2: '', kategori: 'Pimpinan', fotoPimpinan: '{{ asset("img/KTU Tirza Zainullah.png") }}', fotoMapel: '' },
    { id: 5, nama: 'Mikhael Rudiarti Bawowo, S.Kom', jabatan: 'KETUA PK TJKT', role2: 'Guru Produktif TJKT & Guru Mapel Informatika', kategori: 'Kaprodi', fotoPimpinan: '{{ asset("img/Ketua PK TKJ Mikhael Bawowo.png") }}', fotoMapel: '{{ asset("img/foto_guru/Guru Produktif TJKT - Mikhael Bawowo.png") }}' },
    { id: 6, nama: 'Tiya Margaret Turambi, S.Pd, Gr', jabatan: 'KETUA PK MPLB', role2: 'Guru Produktif MPLB', kategori: 'Kaprodi', fotoPimpinan: '{{ asset("img/Profile_kosong.png") }}', fotoMapel: '' },
    { id: 7, nama: 'Winston Togelang, S.Kep NS, M.Si, Gr', jabatan: 'KETUA PK LAYANAN KESEHATAN', role2: 'Guru Produktif Layanan Kesehatan', kategori: 'Kaprodi', fotoPimpinan: '{{ asset("img/kajur_Laykes Winston Togelang.png") }}', fotoMapel: '{{ asset("img/foto_guru/Guru Produktif Layanan Kesehatan - Winston Togelang.png") }}' },
    { id: 8, nama: 'Jovano Filep Kakalang, S.Ak', jabatan: 'KETUA PK AKL', role2: 'Guru Produktif AKL', kategori: 'Kaprodi', fotoPimpinan: '{{ asset("img/Jurusan_AKL Jovano Kakalang.png") }}', fotoMapel: '{{ asset("img/foto_guru/Guru Produktif AKL - Jovano Kakalang.png") }}' },
    { id: 9, nama: 'Yunita M. Padoma, S.Pd', jabatan: 'KETUA PK PERHOTELAN', role2: 'Guru Produktif Perhotelan', kategori: 'Kaprodi', fotoPimpinan: '{{ asset("img/Ketua PK Hotel Yunita Padoma.png") }}', fotoMapel: '{{ asset("img/foto_guru/Guru Bahasa Jepang - Yunita Padoma.png") }}' }, // Asumsi Yunita Padoma ada di mapel Jepang
    { id: 10, nama: 'Yusra Dunggio, M.Pd, Gr', jabatan: 'KETUA PK TEKNOLOGI FARMASI', role2: 'Guru Mapel Agama Islam', kategori: 'Kaprodi', fotoPimpinan: '{{ asset("img/Kajur_farmasi -Yusra Dunggio.png") }}', fotoMapel: '{{ asset("img/foto_guru/Guru Agama Islam - Yusra.png") }}' },

    // --- GURU PRODUKTIF ---
    { id: 11, nama: 'Christian Hernando Moningka, S.Pd, Gr', jabatan: 'GURU PRODUKTIF MPLB', role2: '', kategori: 'Guru Produktif', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Bimbingan Konseling Nethania ..png") }}' }, // Penyesuaian karena foto asli Christian belum jelas terlihat di screenshot
    { id: 12, nama: 'Ledy Moendoeng, S.Farm', jabatan: 'GURU PRODUKTIF FARMASI', role2: '', kategori: 'Guru Produktif', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Produktif Farmasi Ledy Moe..png") }}' },
    { id: 13, nama: 'Christine Mekel, S.Farm', jabatan: 'GURU PRODUKTIF FARMASI', role2: '', kategori: 'Guru Produktif', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Produktif Farmasi Christin..png") }}' },
    { id: 14, nama: 'Maria Fransye Iriani Rembang, M.Pd', jabatan: 'GURU PRODUKTIF PERHOTELAN', role2: '', kategori: 'Guru Produktif', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Produktif Hotel - Maria Rembang.png") }}' },
    { id: 15, nama: 'Laurens Yohan Suawa, S.Pd', jabatan: 'GURU PRODUKTIF TJKT', role2: '', kategori: 'Guru Produktif', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Produktif TJKT - Laurens ..png") }}' },
    { id: 16, nama: 'Mariskan Inge Harjono, S.Kep NS', jabatan: 'GURU KEJURUAN LAYANAN KESEHATAN', role2: '', kategori: 'Guru Produktif', fotoPimpinan: '', fotoMapel: '{{ asset("img/Profile_kosong.png") }}' }, // Foto Mariskan belum terlihat di screenshot
    { id: 17, nama: 'Veiby Lohonauman, S.Kep NS', jabatan: 'GURU KEJURUAN LAYANAN KESEHATAN', role2: '', kategori: 'Guru Produktif', fotoPimpinan: '', fotoMapel: '{{ asset("img/Profile_kosong.png") }}' }, // Foto Veiby belum terlihat di screenshot
    { id: 18, nama: 'Inggrid E. Tulas, S.Ak', jabatan: 'PEMBINA HUMAS / GURU PRODUKTIF AKL', role2: 'Guru Akuntansi Dasar', kategori: 'Guru Produktif', fotoPimpinan: '{{ asset("img/humas - Ingrid Tulas.png") }}', fotoMapel: '{{ asset("img/foto_guru/Guru Produktif AKL - Inggrid Tulas.png") }}' },

    // --- GURU UMUM ---
    { id: 19, nama: 'Yulius Pareda, S.Pd, Gr', jabatan: 'GURU MATA PELAJARAN PJOK', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru PJOK - Yulius Pareda.png") }}' },
    { id: 20, nama: 'Eduardi Magampeng, S.Pd', jabatan: 'GURU MATA PELAJARAN PJOK', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru PJOK - Eduardi Magampeng.png") }}' },
    { id: 21, nama: 'Christania Caroline Ngangi, S.Pd, Gr', jabatan: 'GURU MATEMATIKA', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/Profile_kosong.png") }}' },
    { id: 22, nama: 'Fallen Tongkeles, S.Pd', jabatan: 'GURU MATEMATIKA', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/Profile_kosong.png") }}' },
    { id: 23, nama: 'Welmina Tuwaidan, S.Pd, Gr', jabatan: 'GURU BAHASA INDONESIA', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Bahasa Indonesia - Welmina.png") }}' },
    { id: 24, nama: 'Sela Agreany Mantik, S.Pd', jabatan: 'GURU MATA PELAJARAN BAHASA INDONESIA', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Bahasa Indonesia - Sella.png") }}' },
    { id: 25, nama: 'Billy Gilbert Kakalang', jabatan: 'GURU MATA PELAJARAN BAHASA INGGRIS', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Bahasa Inggris - Bily Kakalang.png") }}' },
    { id: 26, nama: 'Sinly Sarah Londah, S.Pd', jabatan: 'GURU MATA PELAJARAN BAHASA INGGRIS', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/Profile_kosong.png") }}' },
    { id: 27, nama: 'Lusyana Madiong, S.Si.Teol', jabatan: 'PEMBINA SARPRAS / GURU AGAMA KRISTEN', role2: 'Guru Mapel Agama Kristen', kategori: 'Guru Umum', fotoPimpinan: '{{ asset("img/Sarpras - Lusy Madiong.png") }}', fotoMapel: '{{ asset("img/foto_guru/Guru Agama Kristen - Lusy.png") }}' },
    { id: 28, nama: 'Sarah Mudeng, S.Pd.K', jabatan: 'GURU MATA PELAJARAN AGAMA KRISTEN', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Agama Kristen - Sarah.png") }}' },
    { id: 29, nama: 'Christofora Dominika Kalele, S.Pd', jabatan: 'GURU MATA PELAJARAN AGAMA KHATOLIK', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Agama Khatolik - Christofora.png") }}' },
    { id: 30, nama: 'Imelda Wenur, S.Pd', jabatan: 'GURU MATA PELAJARAN IPAS', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Mapel IPAS - Imelda Wenur.png") }}' },
    { id: 31, nama: 'Herts Taunaumang, M.H', jabatan: 'GURU MATA PELAJARAN PENDIDIKAN PANCASILA', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Mapel Pendidikan Pancasila Herts Taun..png") }}' },
    { id: 32, nama: 'Sefanya Manorek, S.Pd', jabatan: 'GURU MATA PELAJARAN SENI BUDAYA', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Seni Budaya - Sefanya Manorek.png") }}' },
    { id: 33, nama: 'Alita Pratiwi, S.Psi', jabatan: 'GURU BIMBINGAN KONSELING', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/Profile_kosong.png") }}' },
    { id: 34, nama: 'Nethania Herlambang, S.Pd', jabatan: 'GURU BIMBINGAN KONSELING', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/foto_guru/Guru Bimbingan Konseling Nethania ..png") }}' },
    { id: 35, nama: 'Jovialin Masinambow, S.M', jabatan: 'GURU MATA PELAJARAN KEWIRAUSAHAAN', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/Profile_kosong.png") }}' },
    { id: 36, nama: 'Yudi Mangamba, S.Kom', jabatan: 'GURU KECERDASAN ARTIFISIAL', role2: '', kategori: 'Guru Umum', fotoPimpinan: '', fotoMapel: '{{ asset("img/Profile_kosong.png") }}' },

    // --- STAF & TENAGA KEPENDIDIKAN ---
    { id: 37, nama: 'Chatrine Samola, S.Tr.Ak', jabatan: 'BENDAHARA DAN PEMBUKUAN', role2: '', kategori: 'Tenaga Kependidikan', fotoPimpinan: '{{ asset("img/bendahara - Chatrine Samola.png") }}', fotoMapel: '' },
    { id: 38, nama: 'Rico Manusama', jabatan: 'STAFF ADMINISTRASI', role2: '', kategori: 'Tenaga Kependidikan', fotoPimpinan: '{{ asset("img/Administrasi - Rico Manusama.png") }}', fotoMapel: '' },
    { id: 39, nama: 'Andrew Mailoor, S.Pd', jabatan: 'OPERATOR SEKOLAH', role2: 'Pengelola Data Pokok Pendidikan', kategori: 'Tenaga Kependidikan', fotoPimpinan: '{{ asset("img/oprator Andrew Mailoor.png") }}', fotoMapel: '' },
    { id: 40, nama: 'Vance Sinaulan', jabatan: 'LOGISTIK', role2: '', kategori: 'Tenaga Kependidikan', fotoPimpinan: '{{ asset("img/Logistik Vance Sinaulan.png") }}', fotoMapel: '' },
    { id: 41, nama: 'Jenly Mandak', jabatan: 'SOPIR SEKOLAH', role2: '', kategori: 'Tenaga Kependidikan', fotoPimpinan: '{{ asset("img/Sopir -Jenly Mandak.png") }}', fotoMapel: '' },
    { id: 42, nama: 'Andris Kaluwulang', jabatan: 'SECURITY', role2: '', kategori: 'Tenaga Kependidikan', fotoPimpinan: '{{ asset("img/Profile_kosong.png") }}', fotoMapel: '' },
    { id: 43, nama: 'Yusman Agama', jabatan: 'SECURITY', role2: '', kategori: 'Tenaga Kependidikan', fotoPimpinan: '{{ asset("img/Profile_kosong.png") }}', fotoMapel: '' },
    { id: 44, nama: 'Marlon Pongoh', jabatan: 'SECURITY', role2: '', kategori: 'Tenaga Kependidikan', fotoPimpinan: '{{ asset("img/Profile_kosong.png") }}', fotoMapel: '' },
    { id: 45, nama: 'Fitria Daleda', jabatan: 'CLEANING SERVICE', role2: '', kategori: 'Tenaga Kependidikan', fotoPimpinan: '{{ asset("img/CS - Fitria Daleda.png") }}', fotoMapel: '' },
    { id: 46, nama: 'Altje Salawati', jabatan: 'CLEANING SERVICE', role2: '', kategori: 'Tenaga Kependidikan', fotoPimpinan: '{{ asset("img/CS - Altje Salawati.png") }}', fotoMapel: '' }
];
let allGuruList = [];
let activeKategori = 'Semua';
let activeSearchQuery = '';

function loadGuruDataset() {
    allGuruList = [...defaultGuruDirectory];
    // Memaksa browser menghapus cache lama dan memakai data terbaru ini
    localStorage.removeItem('smk_yadika_guru_data'); 
    localStorage.setItem('smk_yadika_guru_data', JSON.stringify(allGuruList));
    updateCountBadge();
    renderModernTeacherGrid();
}function updateCountBadge() {
    const elSemua = document.getElementById('count_Semua');
    if (elSemua) elSemua.innerText = allGuruList.length;
}

function setKategoriFilter(kat) {
    activeKategori = kat;
    
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('tab-active');
        btn.classList.add('tab-inactive');
    });

    const activeBtn = document.getElementById('btnKat_' + kat.replace(/\s+/g, ''));
    if (activeBtn) {
        activeBtn.classList.remove('tab-inactive');
        activeBtn.classList.add('tab-active');
    }

    renderModernTeacherGrid();
}

function handleSearchTeacher() {
    activeSearchQuery = document.getElementById('searchTeacherInput').value.trim().toLowerCase();
    renderModernTeacherGrid();
}

function renderModernTeacherGrid() {
    const container = document.getElementById('gridTeachers');
    const emptyMsg = document.getElementById('emptyTeacherMsg');
    if (!container) return;

    container.innerHTML = '';

    const filtered = allGuruList.filter(guru => {
        const matchesKat = (activeKategori === 'Semua') || 
            (guru.kategori && guru.kategori.toLowerCase() === activeKategori.toLowerCase()) ||
            (activeKategori === 'Guru Produktif' && guru.kategori === 'Guru Kejuruan');

        const matchesSearch = !activeSearchQuery || 
            (guru.nama && guru.nama.toLowerCase().includes(activeSearchQuery)) ||
            (guru.jabatan && guru.jabatan.toLowerCase().includes(activeSearchQuery)) ||
            (guru.role2 && guru.role2.toLowerCase().includes(activeSearchQuery));

        return matchesKat && matchesSearch;
    });

    if (filtered.length === 0) {
        emptyMsg.style.display = 'block';
        return;
    } else {
        emptyMsg.style.display = 'none';
    }

    filtered.forEach(guru => {
        let selectedFoto = guru.fotoPimpinan || guru.fotoMapel || '{{ asset("img/Profile_kosong.png") }}';
        
        if (activeKategori === 'Guru Produktif' || activeKategori === 'Guru Umum') {
            selectedFoto = guru.fotoMapel || guru.fotoPimpinan || '{{ asset("img/Profile_kosong.png") }}';
        } else if (activeKategori === 'Pimpinan' || activeKategori === 'Kaprodi' || activeKategori === 'Tenaga Kependidikan') {
            selectedFoto = guru.fotoPimpinan || guru.fotoMapel || '{{ asset("img/Profile_kosong.png") }}';
        }

        // PERBAIKAN UTAMA: Meng-encode URL agar spasi menjadi %20 sehingga browser tidak memotong tag HTML
        let encodedUrl = encodeURI(selectedFoto);
        let fallbackUrl = '{{ asset("img/Profile_kosong.png") }}';
        
        let avatarHtml = `<img src="${encodedUrl}" alt="${guru.nama}" class="w-full h-full object-cover object-top" onerror="this.onerror=null; this.src='${fallbackUrl}';">`;

        const hasRole2 = (guru.role2 && guru.role2.trim().length > 0);
        const role2BadgeHtml = hasRole2
            ? `<div class="mt-2.5 pt-2 border-t border-slate-100 flex items-center justify-center gap-1.5">
                 <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-800 border border-emerald-200">
                     <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                     ${guru.role2}
                 </span>
               </div>`
            : '';

        const card = document.createElement('div');
        card.className = 'group relative bg-white rounded-3xl p-5 border border-slate-200 shadow-xs hover:shadow-xl hover:border-sky-300 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between text-center';

        card.innerHTML = `
            <div>
                <div class="relative mx-auto mb-3.5 w-24 h-24 sm:w-28 sm:h-28 flex items-center justify-center">
                    <div class="absolute inset-0 rounded-full bg-sky-400/20 group-hover:bg-sky-500/30 group-hover:scale-110 transition duration-300 blur-xs"></div>
                    <div class="relative w-22 h-22 sm:w-26 sm:h-26 rounded-full overflow-hidden p-1 bg-white shadow-md border-2 border-sky-100 group-hover:border-sky-400 transition duration-300">
                        <div class="w-full h-full rounded-full overflow-hidden flex items-center justify-center bg-slate-100">
                            ${avatarHtml}
                        </div>
                    </div>
                </div>

                <h4 class="text-xs sm:text-sm font-black text-slate-900 leading-snug group-hover:text-sky-700 transition-colors">
                    ${guru.nama}
                </h4>

                <p class="text-[11px] font-extrabold uppercase tracking-wide text-[#0284c7] mt-1">
                    ${guru.jabatan}
                </p>

                ${role2BadgeHtml}
            </div>

            <div class="mt-4 pt-2.5 border-t border-slate-100 flex items-center justify-between text-[10px] text-slate-400 font-semibold">
                <span class="px-2 py-0.5 rounded-md bg-slate-100 text-slate-600 font-bold uppercase tracking-wider">${guru.kategori || 'Pendidik'}</span>
                <span class="text-sky-600 font-bold">SMK Yadika</span>
            </div>
        `;

        container.appendChild(card);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    loadGuruDataset();
});
</script>
@endsection
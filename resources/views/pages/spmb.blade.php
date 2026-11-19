@extends('layouts.school')

@section('title', 'Formulir Pendaftaran SPMB - SMK Yadika Manado')

@section('content')
<section class="py-12 bg-gradient-to-b from-sky-100/70 via-sky-50/40 to-transparent border-b border-sky-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-sky-100 text-sky-800 border border-sky-200 mb-3 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
            Sistem Penerimaan Murid Baru T.P 2027/2028
        </span>
        <h1 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
            FORMULIR PENDAFTARAN SISWA BARU
        </h1>
        <p class="text-slate-600 text-sm max-w-2xl mx-auto mt-2 leading-relaxed">
            Ayo Kenal Lebih Dekat SMK Yadika Manado: <strong>Daftar &bull; Belajar &bull; Berkarya &bull; Berprestasi</strong>.
        </p>
    </div>
</section>

<section class="py-12 bg-slate-50/60" id="spmbApp">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- NOTIFIKASI BERHASIL SUBMIT -->
        <div id="suksesBox" style="display: none;" class="bg-emerald-50 border-2 border-emerald-300 rounded-3xl p-8 text-center shadow-lg mb-8">
            <div class="w-16 h-16 bg-emerald-500 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 font-black text-3xl shadow-md">
                ✓
            </div>
            <h2 class="text-2xl font-black text-emerald-950">Pendaftaran Berhasil Dikirim!</h2>
            <p class="text-xs text-emerald-800 mt-1">Nomor Registrasi Anda: <strong id="regNumberDisplay" class="font-mono text-base text-sky-700"></strong></p>
            <div class="bg-white rounded-2xl p-4 my-4 border border-emerald-200 text-left text-xs space-y-1.5 max-w-md mx-auto">
                <div class="flex justify-between"><span class="text-slate-500">Nama Calon Siswa:</span><span id="resNama" class="font-bold text-slate-800"></span></div>
                <div class="flex justify-between"><span class="text-slate-500">Pilihan Jurusan:</span><span id="resJurusan" class="font-bold text-sky-700"></span></div>
                <div class="flex justify-between"><span class="text-slate-500">Status Alur Berkas:</span><span class="font-bold text-blue-700 bg-blue-50 px-2 py-0.5 rounded">Berkas Terkirim</span></div>
            </div>
            <p class="text-xs text-slate-500 max-w-md mx-auto">
                Data dan lampiran berkas Anda telah tersimpan dan siap diverifikasi oleh panitia SPMB.
            </p>
            <div class="mt-6 flex justify-center gap-3">
                <a href="{{ route('pendaftar') }}" style="background-color: #0284c7 !important; color: #ffffff !important;" class="px-5 py-2.5 rounded-xl font-bold text-xs shadow hover:opacity-95 transition">
                    Lihat Rekap Kelulusan di Halaman Pendaftar &rarr;
                </a>
            </div>
        </div>

        <!-- FORM PENDAFTARAN LENGKAP -->
        <form id="spmbForm" onsubmit="handleFormSubmit(event)" class="space-y-6">

            <!-- BAGIAN: EMAIL AKUN -->
            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-sm">
                <label class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                    Email Aktif <span class="text-rose-500">*</span>
                </label>
                <p class="text-[11px] text-slate-400 mb-3">Email calon siswa atau orang tua untuk penerimaan bukti registrasi resmi.</p>
                <input type="email" id="email" required placeholder="contoh: calon.siswa@gmail.com" 
                       class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
            </div>

            <!-- BAGIAN 1: IDENTITAS CALON SISWA -->
            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-sm space-y-4">
                <div class="border-b border-slate-100 pb-3">
                    <span class="text-xs font-black text-[#0284c7] uppercase tracking-wider block">Bagian 1</span>
                    <h3 class="text-base font-black text-slate-900 mt-0.5">Identitas Calon Peserta Didik Baru</h3>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">NAMA LENGKAP <span class="text-rose-500">*</span></label>
                    <input type="text" id="nama" required placeholder="Masukkan nama lengkap sesuai ijazah/akta" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">TEMPAT LAHIR <span class="text-rose-500">*</span></label>
                        <input type="text" id="tempat_lahir" required placeholder="Kota kelahiran" 
                               class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">TANGGAL LAHIR <span class="text-rose-500">*</span></label>
                        <input type="date" id="tgl_lahir" required 
                               class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Jenis Kelamin <span class="text-rose-500">*</span></label>
                    <div class="flex items-center gap-6 text-xs text-slate-700 pt-0.5">
                        <label class="flex items-center gap-2 cursor-pointer font-medium">
                            <input type="radio" name="gender" value="Laki-laki" checked class="text-sky-600 focus:ring-sky-500"> Laki-laki
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer font-medium">
                            <input type="radio" name="gender" value="Perempuan" class="text-sky-600 focus:ring-sky-500"> Perempuan
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">NISN (Nomor Induk Siswa Nasional) <span class="text-rose-500">*</span></label>
                    <input type="text" id="nisn" required placeholder="10 digit NISN aktif" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">ALAMAT TEMPAT TINGGAL <span class="text-rose-500">*</span></label>
                    <textarea id="alamat" rows="2.5" required placeholder="Jalan, Kelurahan/Desa, Lingkungan/Jaga, Kota/Kabupaten" 
                              class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">AGAMA <span class="text-rose-500">*</span></label>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5 text-xs text-slate-700">
                        <label class="flex items-center gap-2 cursor-pointer p-2 rounded-xl border border-slate-200 hover:bg-slate-50"><input type="radio" name="agama" value="Kristen" checked> Kristen</label>
                        <label class="flex items-center gap-2 cursor-pointer p-2 rounded-xl border border-slate-200 hover:bg-slate-50"><input type="radio" name="agama" value="Katolik"> Katolik</label>
                        <label class="flex items-center gap-2 cursor-pointer p-2 rounded-xl border border-slate-200 hover:bg-slate-50"><input type="radio" name="agama" value="Islam"> Islam</label>
                        <label class="flex items-center gap-2 cursor-pointer p-2 rounded-xl border border-slate-200 hover:bg-slate-50"><input type="radio" name="agama" value="Hindu"> Hindu</label>
                        <label class="flex items-center gap-2 cursor-pointer p-2 rounded-xl border border-slate-200 hover:bg-slate-50"><input type="radio" name="agama" value="Budha"> Budha</label>
                        <label class="flex items-center gap-2 cursor-pointer p-2 rounded-xl border border-slate-200 hover:bg-slate-50"><input type="radio" name="agama" value="Lainnya"> Yang lain</label>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">NOMOR HP/WA SISWA <span class="text-rose-500">*</span></label>
                    <input type="tel" id="no_hp_siswa" required placeholder="Contoh: 081234567890" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                </div>
            </div>

            <!-- BAGIAN 2: IDENTITAS SEKOLAH ASAL -->
            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-sm space-y-4">
                <div class="border-b border-slate-100 pb-3">
                    <span class="text-xs font-black text-[#0284c7] uppercase tracking-wider block">Bagian 2</span>
                    <h3 class="text-base font-black text-slate-900 mt-0.5">Identitas Sekolah Asal</h3>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">NAMA SMP/MTs ASAL <span class="text-rose-500">*</span></label>
                    <input type="text" id="asal_smp" required placeholder="Contoh: SMP Negeri 1 Manado" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">ALAMAT SEKOLAH ASAL</label>
                    <input type="text" id="alamat_sekolah" placeholder="Kota / Kabupaten lokasi sekolah asal" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">TAHUN LULUS / RENCANA LULUS <span class="text-rose-500">*</span></label>
                    <div class="flex items-center gap-6 text-xs text-slate-700">
                        <label class="flex items-center gap-2 cursor-pointer"><input type="radio" name="thn_lulus" value="2026" checked> 2026</label>
                        <label class="flex items-center gap-2 cursor-pointer"><input type="radio" name="thn_lulus" value="2027"> 2027</label>
                        <label class="flex items-center gap-2 cursor-pointer"><input type="radio" name="thn_lulus" value="Lainnya"> Yang lain</label>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">NO. IJAZAH <span class="text-slate-400 font-normal">(Jika sudah memiliki)</span></label>
                    <input type="text" id="no_ijazah" placeholder="Kosongkan jika ijazah belum terbit" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                </div>
            </div>

            <!-- BAGIAN 3: DATA ORANG TUA / WALI -->
            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-sm space-y-4">
                <div class="border-b border-slate-100 pb-3">
                    <span class="text-xs font-black text-[#0284c7] uppercase tracking-wider block">Bagian 3</span>
                    <h3 class="text-base font-black text-slate-900 mt-0.5">Data Orang Tua / Wali</h3>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nama Ayah / Ibu / Wali <span class="text-rose-500">*</span></label>
                    <input type="text" id="nama_ortu" required placeholder="Nama lengkap orang tua / wali" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">NOMOR KARTU KELUARGA (KK) <span class="text-rose-500">*</span></label>
                    <input type="text" id="no_kk" required placeholder="16 digit nomor KK" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">PEKERJAAN ORANG TUA <span class="text-rose-500">*</span></label>
                        <input type="text" id="pekerjaan_ortu" required placeholder="PNS, Wiraswasta, Karyawan Swasta, dll." 
                               class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">NOMOR HP/WA ORANG TUA</label>
                        <input type="tel" id="no_hp_ortu" placeholder="Nomor telepon aktif orang tua" 
                               class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm">
                    </div>
                </div>
            </div>

            <!-- BAGIAN 4: PILIHAN PROGRAM KEAHLIAN & UPLOAD BERKAS -->
            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-sm space-y-4">
                <div class="border-b border-slate-100 pb-3">
                    <span class="text-xs font-black text-[#0284c7] uppercase tracking-wider block">Bagian 4</span>
                    <h3 class="text-base font-black text-slate-900 mt-0.5">Pilihan Program Keahlian &amp; Dokumen</h3>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-2">Pilih Program Keahlian yang Diminati <span class="text-rose-500">*</span></label>
                    <div class="space-y-2 text-xs text-slate-800">
                        <label class="flex items-center gap-2.5 p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 cursor-pointer transition">
                            <input type="radio" name="jurusan" value="Teknik Jaringan Komputer & Telko" checked class="text-sky-600">
                            <span class="font-bold">TEKNIK KOMPUTER DAN JARINGAN TELEKOMUNIKASI (TJKT) 💻</span>
                        </label>
                        <label class="flex items-center gap-2.5 p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 cursor-pointer transition">
                            <input type="radio" name="jurusan" value="Layanan Kesehatan" class="text-sky-600">
                            <span class="font-bold">LAYANAN KESEHATAN (KEPERAWATAN) 🏥</span>
                        </label>
                        <label class="flex items-center gap-2.5 p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 cursor-pointer transition">
                            <input type="radio" name="jurusan" value="Manajemen Perkantoran & Bisnis" class="text-sky-600">
                            <span class="font-bold">MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS (MPLB) 💼</span>
                        </label>
                        <label class="flex items-center gap-2.5 p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 cursor-pointer transition">
                            <input type="radio" name="jurusan" value="Akuntansi & Keuangan Lembaga" class="text-sky-600">
                            <span class="font-bold">AKUNTANSI DAN KEUANGAN LEMBAGA (AKL) 📊</span>
                        </label>
                        <label class="flex items-center gap-2.5 p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 cursor-pointer transition">
                            <input type="radio" name="jurusan" value="Teknologi Farmasi" class="text-sky-600">
                            <span class="font-bold">TEKNOLOGI FARMASI 💊</span>
                        </label>
                        <label class="flex items-center gap-2.5 p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 cursor-pointer transition">
                            <input type="radio" name="jurusan" value="Perhotelan" class="text-sky-600">
                            <span class="font-bold">PERHOTELAN 🏨</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">ALASAN MEMILIH JURUSAN</label>
                    <textarea id="alasan_jurusan" rows="2" placeholder="Tuliskan motivasi atau minat Anda memilih jurusan tersebut" 
                              class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-xs sm:text-sm"></textarea>
                </div>

                <!-- DOKUMEN PERSYARATAN -->
                <div class="pt-2 space-y-3">
                    <span class="block text-xs font-black text-slate-800">Unggah Dokumen Syarat (PDF atau Image, Maks. 10 MB)</span>
                    
                    <div class="p-3.5 rounded-2xl border border-slate-200 bg-slate-50/70 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                        <div>
                            <span class="block text-xs font-bold text-slate-800">UPLOAD KARTU KELUARGA (KK) <span class="text-rose-500">*</span></span>
                            <span class="text-[10px] text-slate-400">Scan / Foto Kartu Keluarga</span>
                        </div>
                        <input type="file" id="file_kk" accept="image/*,.pdf" class="text-xs text-slate-500">
                    </div>

                    <div class="p-3.5 rounded-2xl border border-slate-200 bg-slate-50/70 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                        <div>
                            <span class="block text-xs font-bold text-slate-800">UPLOAD AKTE KELAHIRAN <span class="text-rose-500">*</span></span>
                            <span class="text-[10px] text-slate-400">Scan / Foto Akta Kelahiran</span>
                        </div>
                        <input type="file" id="file_akte" accept="image/*,.pdf" class="text-xs text-slate-500">
                    </div>

                    <div class="p-3.5 rounded-2xl border border-slate-200 bg-slate-50/70 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                        <div>
                            <span class="block text-xs font-bold text-slate-800">UPLOAD PASS FOTO SISWA (Ukr 3X4) <span class="text-rose-500">*</span></span>
                            <span class="text-[10px] text-slate-400">Pas Foto Berwarna Siswa</span>
                        </div>
                        <input type="file" id="file_foto" accept="image/*" class="text-xs text-slate-500">
                    </div>

                    <div class="p-3.5 rounded-2xl border border-slate-200 bg-slate-50/70 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                        <div>
                            <span class="block text-xs font-bold text-slate-800">UPLOAD FILE PENDUKUNG LAINNYA</span>
                            <span class="text-[10px] text-slate-400">Sertifikat Prestasi (Opsional)</span>
                        </div>
                        <input type="file" id="file_lain" accept="image/*,.pdf" class="text-xs text-slate-500">
                    </div>
                </div>
            </div>

            <!-- BAGIAN 5: PEMBAYARAN -->
            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-sm space-y-4">
                <div class="border-b border-slate-100 pb-3">
                    <span class="text-xs font-black text-[#0284c7] uppercase tracking-wider block">Bagian 5</span>
                    <h3 class="text-base font-black text-slate-900 mt-0.5">Informasi Pembayaran Biaya Masuk</h3>
                </div>

                <div class="bg-sky-50 rounded-2xl p-4 text-xs text-sky-950 space-y-2 border border-sky-200">
                    <p class="leading-relaxed">
                        Silahkan mengunggah bukti pembayaran beserta rincian pembayarannya pada bagian berikut:
                    </p>
                    <div class="p-2.5 bg-white rounded-xl border border-sky-300 font-mono text-xs">
                        <strong>Nomor Rekening BRI :</strong> 5119 0102 4110 534<br>
                        <strong>A.N :</strong> CHATRIEN A SAMOLA
                    </div>
                    <p class="font-bold pt-1">Konfirmasi Pembayaran ke kontak Panitia :</p>
                    <ul class="space-y-0.5 text-[11px] text-slate-700">
                        <li>&bull; <strong>081244889947</strong> (Maam Sarah Mudeng)</li>
                        <li>&bull; <strong>081356477791</strong> (Maam Cristofora Kalele)</li>
                        <li>&bull; <strong>085256579797</strong> (Maam Chatrien Samola)</li>
                        <li>&bull; <strong>085396148079</strong> (Admin Sekolah)</li>
                    </ul>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">
                        KETERANGAN PEMBAYARAN <span class="text-slate-400 font-normal">(Centang semua item yang sudah dibayarkan)</span>
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2.5 text-xs text-slate-800">
                        <label class="flex items-center gap-2.5 cursor-pointer p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 transition">
                            <input type="checkbox" name="ket_bayar" value="UANG PEMBANGUNAN" checked class="w-4 h-4 text-sky-600 rounded">
                            <span class="font-bold">UANG PEMBANGUNAN</span>
                        </label>
                        <label class="flex items-center gap-2.5 cursor-pointer p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 transition">
                            <input type="checkbox" name="ket_bayar" value="SPP" checked class="w-4 h-4 text-sky-600 rounded">
                            <span class="font-bold">SPP</span>
                        </label>
                        <label class="flex items-center gap-2.5 cursor-pointer p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 transition">
                            <input type="checkbox" name="ket_bayar" value="SERAGAM" checked class="w-4 h-4 text-sky-600 rounded">
                            <span class="font-bold">SERAGAM</span>
                        </label>
                        <label class="flex items-center gap-2.5 cursor-pointer p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 transition">
                            <input type="checkbox" name="ket_bayar" value="ID CARD" checked class="w-4 h-4 text-sky-600 rounded">
                            <span class="font-bold">ID CARD</span>
                        </label>
                        <label class="flex items-center gap-2.5 cursor-pointer p-3 rounded-2xl border border-slate-200 hover:border-sky-400 hover:bg-sky-50/50 transition sm:col-span-2">
                            <input type="checkbox" name="ket_bayar" value="Yang lain" id="chk_lainnya" onchange="document.getElementById('input_lainnya').style.display = this.checked ? 'block' : 'none'" class="w-4 h-4 text-sky-600 rounded">
                            <span class="font-bold">Yang lain:</span>
                            <input type="text" id="input_lainnya" placeholder="Rincian lainnya..." style="display: none;" class="ml-2 flex-1 px-3 py-1 text-xs rounded-lg border border-slate-300 bg-white outline-none">
                        </label>
                    </div>
                </div>

                <div class="p-3.5 rounded-2xl border border-slate-200 bg-slate-50/70 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                    <div>
                        <span class="block text-xs font-bold text-slate-800">BUKTI PEMBAYARAN <span class="text-rose-500">*</span></span>
                        <span class="text-[10px] text-slate-400">Upload bukti transfer BRI (Maks. 10 MB)</span>
                    </div>
                    <input type="file" id="file_bayar" accept="image/*,.pdf" class="text-xs text-slate-500">
                </div>
            </div>

            <div class="pt-2">
                <button type="submit" id="btnSubmitForm" style="background-color: #0284c7 !important; color: #ffffff !important;" 
                        class="w-full py-4 rounded-2xl font-black text-sm shadow-xl shadow-sky-600/30 hover:opacity-95 transition flex items-center justify-center gap-2 cursor-pointer">
                    <span>Kirim Formulir Pendaftaran</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>
        </form>

    </div>
</section>

<script>
// Fungsi konversi file input ke Base64 Data URL agar gambar tersimpan permanen
// Mengompresi gambar otomatis agar pas disimpan di browser tanpa memicu QuotaExceededError
function readFileAsDataUrl(fileInput) {
    return new Promise((resolve) => {
        if (!fileInput || !fileInput.files || !fileInput.files[0]) {
            resolve(null);
            return;
        }

        const file = fileInput.files[0];

        // Jika file adalah PDF atau dokumen non-gambar
        if (file.type === 'application/pdf') {
            resolve('/img/banner1.png');
            return;
        }

        const reader = new FileReader();
        reader.onload = function(readerEvent) {
            const img = new Image();
            img.onload = function() {
                // Resize gambar besar (seperti 4K) ke ukuran ideal pratinjau
                const maxDimension = 600;
                let width = img.width;
                let height = img.height;

                if (width > height) {
                    if (width > maxDimension) {
                        height = Math.round((height * maxDimension) / width);
                        width = maxDimension;
                    }
                } else {
                    if (height > maxDimension) {
                        width = Math.round((width * maxDimension) / height);
                        height = maxDimension;
                    }
                }

                const canvas = document.createElement('canvas');
                canvas.width = width;
                canvas.height = height;

                const ctx = canvas.getContext('2d');
                ctx.drawImage(img, 0, 0, width, height);

                // Kompresi hasil ke JPEG kualitas 0.7 (~40-60 KB)
                const compressedDataUrl = canvas.toDataURL('image/jpeg', 0.7);
                resolve(compressedDataUrl);
            };
            img.onerror = function() {
                resolve('/img/banner1.png');
            };
            img.src = readerEvent.target.result;
        };
        reader.onerror = function() {
            resolve(null);
        };
        reader.readAsDataURL(file);
    });
}

async function handleFormSubmit(e) {
    e.preventDefault();

    const btn = document.getElementById('btnSubmitForm');
    btn.disabled = true;
    btn.innerText = 'Menyimpan & Mengunggah Berkas...';

    const nama = document.getElementById('nama').value.trim();
    const asal = document.getElementById('asal_smp').value.trim();
    const selectedJurusan = document.querySelector('input[name="jurusan"]:checked')?.value || 'Teknik Jaringan Komputer & Telko';
    const email = document.getElementById('email').value.trim();
    const noHp = document.getElementById('no_hp_siswa').value.trim();
    const nisn = document.getElementById('nisn').value.trim();
    const tempatLahir = document.getElementById('tempat_lahir').value.trim();
    const tglLahir = document.getElementById('tgl_lahir').value;
    const gender = document.querySelector('input[name="gender"]:checked')?.value || 'Laki-laki';
    const alamat = document.getElementById('alamat').value.trim();
    const agama = document.querySelector('input[name="agama"]:checked')?.value || 'Kristen';
    const namaOrtu = document.getElementById('nama_ortu').value.trim();
    const noKk = document.getElementById('no_kk').value.trim();
    const pekerjaanOrtu = document.getElementById('pekerjaan_ortu').value.trim();
    const noHpOrtu = document.getElementById('no_hp_ortu').value.trim();

    // Centang Pembayaran
    const checkedBayar = Array.from(document.querySelectorAll('input[name="ket_bayar"]:checked')).map(cb => {
        if (cb.value === 'Yang lain') {
            const extra = document.getElementById('input_lainnya').value.trim();
            return extra ? 'Lainnya: ' + extra : 'Yang lain';
        }
        return cb.value;
    });

    // Baca file asli calon siswa
    const kkDataUrl = await readFileAsDataUrl(document.getElementById('file_kk'));
    const akteDataUrl = await readFileAsDataUrl(document.getElementById('file_akte'));
    const fotoDataUrl = await readFileAsDataUrl(document.getElementById('file_foto'));
    const bayarDataUrl = await readFileAsDataUrl(document.getElementById('file_bayar'));

    // Sediakan fallback foto resmi Yadika jika calon siswa tidak mengupload
    const fallbackKk = "{{ asset('img/banner1.png') }}";
    const fallbackAkte = "{{ asset('img/banner2.png') }}";
    const fallbackFoto = "{{ asset('img/KepalaSekolah.png') }}";
    const fallbackBayar = "{{ asset('img/banner3.png') }}";

    const randomSuffix = Math.floor(Math.random() * 899) + 100;
    const noRegistrasi = 'REG-2027-' + randomSuffix;

    const dataBaru = {
        no: noRegistrasi,
        nama: nama,
        asal: asal,
        jurusan: selectedJurusan,
        status: 'Berkas Terkirim',
        email: email,
        noHp: noHp,
        nisn: nisn,
        tempatLahir: tempatLahir,
        tglLahir: tglLahir,
        gender: gender,
        alamat: alamat,
        agama: agama,
        ortu: namaOrtu,
        noKk: noKk,
        pekerjaan: pekerjaanOrtu,
        noHpOrtu: noHpOrtu,
        pembayaran: checkedBayar.length > 0 ? checkedBayar.join(', ') : 'UANG PEMBANGUNAN, SPP',
        tgl: '29 Sep 2026',
        imgKk: kkDataUrl || fallbackKk,
        imgAkte: akteDataUrl || fallbackAkte,
        imgFoto: fotoDataUrl || fallbackFoto,
        imgBayar: bayarDataUrl || fallbackBayar
    };

    let currentSpmb = [];
    try {
        currentSpmb = JSON.parse(localStorage.getItem('smk_yadika_spmb_data')) || [];
    } catch(err) { currentSpmb = []; }

    currentSpmb = [dataBaru, ...currentSpmb];
    try {
        localStorage.setItem('smk_yadika_spmb_data', JSON.stringify(currentSpmb));
        localStorage.setItem('spmb_registrations', JSON.stringify(currentSpmb));
    } catch (quotaError) {
        // Jika penyimpanan sebelumnya sudah penuh, bersihkan gambar berat dan simpan datanya
        currentSpmb = currentSpmb.map(item => {
            if (item.no !== noRegistrasi) {
                return { ...item, imgKk: fallbackKk, imgAkte: fallbackAkte, imgFoto: fallbackFoto, imgBayar: fallbackBayar };
            }
            return item;
        });
        localStorage.setItem('smk_yadika_spmb_data', JSON.stringify(currentSpmb));
        localStorage.setItem('spmb_registrations', JSON.stringify(currentSpmb));
    }

    document.getElementById('spmbForm').style.display = 'none';
    document.getElementById('regNumberDisplay').innerText = noRegistrasi;
    document.getElementById('resNama').innerText = nama;
    document.getElementById('resJurusan').innerText = selectedJurusan;
    document.getElementById('suksesBox').style.display = 'block';
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>
@endsection
@extends('layouts.school')

@section('title', 'Rekapitulasi Pendaftar SPMB T.P 2027/2028')

@section('content')
<section class="py-12 bg-gradient-to-b from-sky-100/60 to-transparent border-b border-sky-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-sky-100 text-sky-800 border border-sky-200 mb-3">
            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
            Data Publik Calon Siswa Baru Terintegrasi
        </span>
        <h1 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
            Rekap Pendaftar SPMB T.P 2027/2028
        </h1>
        <p class="text-slate-600 text-sm max-w-2xl mx-auto mt-2 leading-relaxed">
            Data terverifikasi resmi secara langsung oleh panitia SPMB SMK Yadika Manado.
        </p>
    </div>
</section>

<section class="py-12" x-data="publicPendaftar()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Search & Filter Card -->
        <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm mb-8">
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">
                <div class="sm:col-span-7 relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 pointer-events-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </span>
                    <input type="text" x-model="search" placeholder="Cari No. Registrasi, Nama Calon Siswa, atau Asal SMP..." 
                           class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                </div>

                <div class="sm:col-span-3">
                    <select x-model="filterJurusan" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 bg-white text-sm focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none transition">
                        <option value="Semua">Semua Program Keahlian</option>
                        <option value="Teknik Jaringan Komputer">Teknik Jaringan Komputer (TJKT)</option>
                        <option value="Layanan Kesehatan">Layanan Kesehatan</option>
                        <option value="Akuntansi">Akuntansi &amp; Keuangan</option>
                        <option value="Teknologi Farmasi">Teknologi Farmasi</option>
                        <option value="Manajemen Perkantoran">Manajemen Perkantoran (MPLB)</option>
                        <option value="Perhotelan">Perhotelan</option>
                    </select>
                </div>

                <div class="sm:col-span-2 text-right">
                    <a href="{{ route('spmb') }}" style="background-color: #0284c7 !important; color: #ffffff !important;" 
                       class="inline-block w-full text-center px-4 py-2.5 rounded-xl font-bold text-xs shadow hover:opacity-95 transition">
                        + Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>

        <!-- Tabel Rekap Data Tersinkronisasi -->
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm divide-y divide-slate-200">
                    <thead class="bg-slate-50 text-slate-800 font-extrabold uppercase text-xs tracking-wider">
                        <tr>
                            <th class="px-6 py-4">No. Registrasi</th>
                            <th class="px-6 py-4">Nama Calon Siswa</th>
                            <th class="px-6 py-4">Asal Sekolah (SMP)</th>
                            <th class="px-6 py-4">Pilihan Jurusan</th>
                            <th class="px-6 py-4 text-center">Status Verifikasi</th>
                            <th class="px-6 py-4 text-right">Tanggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 bg-white">
                        <template x-for="item in filteredData" :key="item.no">
                            <tr class="hover:bg-sky-50/50 transition">
                                <td class="px-6 py-4 font-black text-sky-700 font-mono" x-text="item.no"></td>
                                <td class="px-6 py-4 font-bold text-slate-900" x-text="item.nama"></td>
                                <td class="px-6 py-4 text-slate-600" x-text="item.asal"></td>
                                <td class="px-6 py-4 font-semibold text-slate-800" x-text="item.jurusan"></td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 rounded-full text-xs font-bold inline-flex items-center gap-1.5"
                                          :class="{
                                            'bg-emerald-100 text-emerald-800 border border-emerald-200': item.status === 'Berkas Tervalidasi' || item.status === 'Diterima',
                                            'bg-amber-100 text-amber-800 border border-amber-200': item.status === 'Berkas Sedang Diverifikasi' || item.status === 'Verifikasi Berkas',
                                            'bg-blue-100 text-blue-800 border border-blue-200': item.status === 'Berkas Terkirim',
                                            'bg-rose-100 text-rose-800 border border-rose-200': item.status === 'Belum Memenuhi Kriteria' || item.status === 'Ditolak'
                                          }">
                                        <span class="w-1.5 h-1.5 rounded-full"
                                              :class="{
                                                'bg-emerald-500': item.status === 'Berkas Tervalidasi' || item.status === 'Diterima',
                                                'bg-amber-500 animate-pulse': item.status === 'Berkas Sedang Diverifikasi' || item.status === 'Verifikasi Berkas',
                                                'bg-blue-500': item.status === 'Berkas Terkirim',
                                                'bg-rose-500': item.status === 'Belum Memenuhi Kriteria' || item.status === 'Ditolak'
                                              }"></span>
                                        <span x-text="item.status"></span>
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right text-xs text-slate-400" x-text="item.tgl || '18 Sep 2026'"></td>
                            </tr>
                        </template>
                        <tr x-show="filteredData.length === 0" style="display: none;">
                            <td colspan="6" class="px-6 py-12 text-center text-slate-400 text-sm">
                                Data pendaftar yang Anda cari tidak ditemukan.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="p-4 bg-slate-50 border-t border-slate-200 text-xs text-slate-500 flex items-center justify-between">
                <span>Menampilkan <b class="text-slate-800" x-text="filteredData.length"></b> dari <b class="text-slate-800" x-text="pendaftarList.length"></b> total pendaftar</span>
                <span class="text-sky-600 font-semibold flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Live Data Terhubung
                </span>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('publicPendaftar', () => ({
        search: '',
        filterJurusan: 'Semua',
        pendaftarList: [],
        defaultData: [
            { no: 'REG-2027-001', nama: 'Meisya Aulia Safa', asal: 'SMPN 1 Kutawaringin', jurusan: 'Akuntansi & Keuangan Lembaga', status: 'Berkas Tervalidasi', tgl: '18 Sep 2026' },
            { no: 'REG-2027-002', nama: 'Dewi Sinta Anggraeni', asal: 'SMP Negeri 2 Margahayu', jurusan: 'Perhotelan', status: 'Berkas Tervalidasi', tgl: '17 Sep 2026' },
            { no: 'REG-2027-003', nama: 'Washfa Witta Fujiani', asal: 'SMPN 2 Katapang', jurusan: 'Teknik Jaringan Komputer & Telko', status: 'Berkas Sedang Diverifikasi', tgl: '16 Sep 2026' },
            { no: 'REG-2027-004', nama: 'Shelomitha Keyla P P', asal: 'SMPN 2 Banjaran', jurusan: 'Layanan Kesehatan', status: 'Berkas Sedang Diverifikasi', tgl: '15 Sep 2026' },
            { no: 'REG-2027-005', nama: 'Ikram Rafa Fasila', asal: 'SMP Al Irsyad', jurusan: 'Perhotelan', status: 'Berkas Terkirim', tgl: '14 Sep 2026' },
            { no: 'REG-2027-006', nama: 'Gabriel Christian Rondonuwu', asal: 'SMP Kristen Manado', jurusan: 'Teknik Jaringan Komputer & Telko', status: 'Berkas Terkirim', tgl: '12 Sep 2026' },
            { no: 'REG-2027-007', nama: 'Angelina Priscilia Lumintang', asal: 'SMP Katolik Don Bosco', jurusan: 'Teknologi Farmasi', status: 'Belum Memenuhi Kriteria', tgl: '10 Sep 2026' }
        ],

                loadData() {
            let raw = localStorage.getItem('smk_yadika_spmb_data') || localStorage.getItem('spmb_registrations');
            if (raw !== null) {
                try {
                    let parsed = JSON.parse(raw);
                    let uniqueMap = new Map();
                    if (Array.isArray(parsed)) {
                        parsed.forEach(item => {
                            if (item && item.no && !uniqueMap.has(item.no)) {
                                uniqueMap.set(item.no, item);
                            }
                        });
                        this.pendaftarList = Array.from(uniqueMap.values());
                    }
                } catch(e) {}
            }
        },
        _old_loadData() {
            let raw = localStorage.getItem('smk_yadika_spmb_data') || localStorage.getItem('spmb_registrations');
            if (raw) {
                try {
                    let parsed = JSON.parse(raw);
                    let uniqueMap = new Map();
                    parsed.forEach(item => {
                        if (item && item.no && !uniqueMap.has(item.no)) {
                            uniqueMap.set(item.no, item);
                        }
                    });
                    this.pendaftarList = Array.from(uniqueMap.values());
                } catch(e) {}
            }
        },

        init() {
            this.loadData();
            // Listen real-time perubahan jika admin mengubah data di tab lain
            window.addEventListener('storage', (e) => {
                if (e.key === 'smk_yadika_spmb_data') {
                    this.loadData();
                }
            });
        },

        get filteredData() {
            return this.pendaftarList.filter(item => {
                const matchSearch = item.nama.toLowerCase().includes(this.search.toLowerCase()) ||
                                    item.no.toLowerCase().includes(this.search.toLowerCase()) ||
                                    item.asal.toLowerCase().includes(this.search.toLowerCase());
                const matchJurusan = this.filterJurusan === 'Semua' || item.jurusan.includes(this.filterJurusan);
                return matchSearch && matchJurusan;
            });
        }
    }));
});
</script>
@endsection
@extends('layouts.wakasek')

@section('title', 'Detail Pengaduan - Wakasek Kurikulum')

@section('content')
<div class="pb-16">
    <!-- Breadcrumb -->
    <nav class="flex text-xs text-gray-500 mb-2 gap-2 items-center">
        <a href="{{ route('wakasek.pengaduan-masuk') }}" class="hover:text-blue-700">Pengaduan Masuk</a>
        <span>&gt;</span>
        <span class="text-gray-800 font-medium">Detail Pengaduan</span>
    </nav>

    <!-- Header Title & Badge Status -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-serif font-bold text-gray-900">Detail Pengaduan</h1>
        <div class="flex items-center gap-2 bg-amber-50 text-amber-600 border border-amber-200 px-3 py-1.5 rounded-lg text-xs font-semibold">
            <i class="fa-regular fa-clock text-sm"></i>
            <span>Status: <strong>Menunggu ACC</strong></span>
        </div>
    </div>

    <!-- Main Card Container -->
    <div class="space-y-4">

        <!-- Section 1: Data Metadata Pengaduan -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Kolom 1 -->
                <div class="space-y-4">
                    <div>
                        <span class="text-[11px] font-medium text-gray-400 block mb-0.5">No. Pengaduan</span>
                        <span class="text-lg font-bold text-blue-600">1234</span>
                    </div>
                    <div>
                        <span class="text-[11px] font-medium text-gray-400 block mb-0.5">Tanggal Pengaduan</span>
                        <span class="text-xs font-bold text-gray-800">29 Jul 2026, 10:24 WIB</span>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="space-y-4">
                    <div>
                        <span class="text-[11px] font-medium text-gray-400 block mb-1">Kategori</span>
                        <span class="bg-blue-50 text-blue-600 px-3 py-1 rounded-md text-xs font-semibold inline-block">Sarana Prasarana</span>
                    </div>
                    <div>
                        <span class="text-[11px] font-medium text-gray-400 block mb-1">Jenis Pelapor</span>
                        <span class="bg-blue-50 text-blue-600 px-3 py-1 rounded-md text-xs font-semibold inline-block">Identitas</span>
                    </div>
                </div>

                <!-- Kolom 3 -->
                <div class="space-y-4">
                    <div>
                        <span class="text-[11px] font-medium text-gray-400 block mb-0.5">Diajukan Oleh</span>
                        <span class="text-xs font-bold text-gray-900">Budi Santoso</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <span class="text-[11px] font-medium text-gray-400 block mb-0.5">NIS</span>
                            <span class="text-xs font-bold text-gray-800">12345</span>
                        </div>
                        <div>
                            <span class="text-[11px] font-medium text-gray-400 block mb-0.5">Kelas</span>
                            <span class="text-xs font-bold text-gray-800">XII IPS 2</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2: Isi Pengaduan -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="text-sm font-bold text-gray-900 mb-4">Isi Pengaduan</h3>

            <div class="space-y-3">
                <div>
                    <span class="text-[11px] font-medium text-gray-400 block mb-1">Judul Pengaduan</span>
                    <p class="text-sm font-bold text-gray-800">AC di ruang kelas 8B tidak berfungsi dengan baik.</p>
                </div>

                <div>
                    <span class="text-[11px] font-medium text-gray-400 block mb-1">Deskripsi Pengaduan</span>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        AC di ruang kelas 8B sudah tidak dingin sejak 2 hari yang lalu. Saat dinyalakan hanya keluar angin biasa, tidak terasa dingin. Mohon untuk segera diperbaiki.
                    </p>
                </div>
            </div>
        </div>

        <!-- Section 3: Bukti Pendukung -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="text-sm font-bold text-gray-900 mb-4">Bukti Pendukung</h3>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <!-- Foto 1 -->
                <div>
                    <div class="aspect-video rounded-xl overflow-hidden bg-gray-100 border border-gray-200 relative group">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=400&auto=format&fit=crop" alt="Foto 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <span class="text-xs font-bold text-gray-800 block mt-2">Foto 1</span>
                    <span class="text-[10px] text-gray-400 block">29 Jul 2026, 10:20</span>
                </div>

                <!-- Foto 2 -->
                <div>
                    <div class="aspect-video rounded-xl overflow-hidden bg-gray-100 border border-gray-200 relative group">
                        <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?q=80&w=400&auto=format&fit=crop" alt="Foto 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <span class="text-xs font-bold text-gray-800 block mt-2">Foto 2</span>
                    <span class="text-[10px] text-gray-400 block">29 Jul 2026, 10:21</span>
                </div>

                <!-- Foto 3 -->
                <div>
                    <div class="aspect-video rounded-xl overflow-hidden bg-gray-100 border border-gray-200 relative group">
                        <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=400&auto=format&fit=crop" alt="Foto 3" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <span class="text-xs font-bold text-gray-800 block mt-2">Foto 3</span>
                    <span class="text-[10px] text-gray-400 block">29 Jul 2026, 10:22</span>
                </div>

                <!-- Video 1 -->
                <div>
                    <div class="aspect-video rounded-xl overflow-hidden bg-gray-900 border border-gray-200 relative group cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1581092335397-9583fe92d232?q=80&w=400&auto=format&fit=crop" alt="Video 1" class="w-full h-full object-cover opacity-70 group-hover:scale-105 transition duration-300">
                        <!-- Play Button Overlay -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-8 h-8 bg-black/50 text-white rounded-full flex items-center justify-center border border-white/40">
                                <i class="fa-solid fa-play text-xs ml-0.5"></i>
                            </div>
                        </div>
                        <span class="absolute bottom-1 right-1 bg-black/70 text-white text-[9px] px-1.5 py-0.5 rounded">00:15</span>
                    </div>
                    <span class="text-xs font-bold text-gray-800 block mt-2">Video 1</span>
                    <span class="text-[10px] text-gray-400 block">29 Jul 2026, 10:23</span>
                </div>
            </div>
        </div>

        <!-- Section 4: Riwayat Pengaduan (Timeline) -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="text-sm font-bold text-gray-900 mb-4">Riwayat Pengaduan</h3>

            <div class="relative pl-6 space-y-6 before:content-[''] before:absolute before:left-[9px] before:top-2 before:bottom-2 before:w-[2px] before:bg-gray-200">

                <!-- Timeline Item 1 -->
                <div class="relative flex items-start gap-3">
                    <div class="absolute -left-[24px] top-0.5 w-4 h-4 rounded-full bg-amber-400 border-2 border-white flex items-center justify-center shadow-sm"></div>
                    <div>
                        <h4 class="text-xs font-bold text-gray-800">Pengaduan Diajukan</h4>
                        <span class="text-[10px] text-gray-400 block mt-0.5">29 Jul 2026, 10:24 WIB</span>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="relative flex items-start gap-3">
                    <div class="absolute -left-[24px] top-0.5 w-4 h-4 rounded-full bg-gray-300 border-2 border-white flex items-center justify-center"></div>
                    <div>
                        <h4 class="text-xs font-bold text-gray-500">Menunggu Persetujuan Wakasek Kurikulum</h4>
                        <span class="text-[10px] text-gray-400 block mt-0.5">29 Jul 2026, 10:25 WIB</span>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Bottom Action Bar -->
    <div class="mt-8 flex items-center justify-between">
        <a href="{{ route('wakasek.pengaduan-masuk') }}" class="bg-blue-800 hover:bg-blue-900 text-white px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 shadow-md transition">
            <i class="fa-solid fa-chevron-left text-xs"></i>
            Kembali ke Daftar
        </a>

        <button type="button" class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 shadow-md transition">
            <i class="fa-solid fa-check text-sm"></i>
            ACC Pengaduan
        </button>
    </div>
</div>
@endsection

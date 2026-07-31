@extends('layouts.wakasek')

@section('title', 'Umpan Balik Pengaduan - Wakasek Kurikulum')

@section('content')
<div class="pb-16">
    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ route('wakasek.daftar-pengaduan') }}" class="inline-flex items-center gap-2 bg-white hover:bg-gray-50 border border-gray-200 text-gray-700 px-3.5 py-1.5 rounded-lg text-xs font-semibold shadow-sm transition">
            <i class="fa-solid fa-arrow-left text-xs"></i>
            Kembali ke Daftar Pengaduan
        </a>
    </div>

    <!-- Header Title -->
    <div class="mb-6">
        <h1 class="text-2xl font-serif font-bold text-gray-900">Umpan Balik Pengaduan</h1>
        <p class="text-xs text-gray-500 mt-1">Berikan tanggapan atau umpan balik kepada pelapor.</p>
    </div>

    <!-- Main Content Layout (Grid 2 Kolom) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">

        <!-- Kolom Kiri: Form & Informasi Utama (2/3 width) -->
        <div class="lg:col-span-2 space-y-6">

            <!-- Card 1: Informasi Pengaduan -->
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                <h3 class="text-sm font-bold text-blue-800 mb-4">Informasi Pengaduan</h3>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-4 pb-4 border-b border-gray-100">
                    <div>
                        <span class="text-[10px] text-gray-400 font-medium block">No. Pengaduan</span>
                        <span class="text-xs font-bold text-gray-900">1</span>
                    </div>
                    <div>
                        <span class="text-[10px] text-gray-400 font-medium block">Tanggal Pengaduan</span>
                        <span class="text-xs font-bold text-gray-800">27 Jul 2026 11:05</span>
                    </div>
                    <div>
                        <span class="text-[10px] text-gray-400 font-medium block">Pelapor</span>
                        <span class="text-xs font-bold text-gray-800">Andi Wijaya (Identitas)</span>
                    </div>
                    <div>
                        <span class="text-[10px] text-gray-400 font-medium block mb-1">Kategori</span>
                        <span class="bg-emerald-100 text-emerald-700 px-2.5 py-0.5 rounded text-[10px] font-bold inline-block">Kurikulum</span>
                    </div>
                </div>

                <div class="space-y-3">
                    <div>
                        <span class="text-[10px] text-gray-400 font-medium block">Judul Pengaduan</span>
                        <p class="text-xs font-bold text-gray-800">Toilet di lantai 2 kotor dan bau tidak sedap.</p>
                    </div>
                    <div>
                        <span class="text-[10px] text-gray-400 font-medium block">Ringkasan Pengaduan</span>
                        <p class="text-xs text-gray-600 leading-relaxed">
                            Toilet di lantai 2 kotor dan bau tidak sedap sehingga membuat tidak nyaman saat digunakan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Form Umpan Balik -->
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                <h3 class="text-sm font-bold text-blue-800 mb-4">Umpan Balik Wakasek Kurikulum</h3>

                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf

                    <!-- Input Tanggapan -->
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">
                            Tanggapan / Umpan Balik <span class="text-red-500">*</span>
                        </label>
                        <textarea rows="4" class="w-full text-xs p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400" placeholder="Tulis tanggapan atau umpan balik untuk pelapor..."></textarea>
                        <span class="text-[10px] text-gray-400 mt-1 block">Sampaikan tanggapan yang membangun dan sopan.</span>
                    </div>

                    <!-- Input Grid: Status & Prioritas -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5">
                                Status Pengaduan <span class="text-red-500">*</span>
                            </label>
                            <select class="w-full text-xs p-2.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 font-medium text-gray-700">
                                <option value="diproses" selected>Diproses</option>
                                <option value="selesai">Selesai</option>
                                <option value="ditolak">Ditolak</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5">Prioritas</label>
                            <select class="w-full text-xs p-2.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 font-medium text-gray-700">
                                <option value="normal" selected>Normal</option>
                                <option value="tinggi">Tinggi</option>
                                <option value="rendah">Rendah</option>
                            </select>
                        </div>
                    </div>

                    <!-- Input File Pendukung -->
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">File Pendukung (Opsional)</label>
                        <div class="flex items-center gap-3">
                            <label class="flex-1 flex items-center gap-2 border border-gray-200 rounded-xl p-2.5 cursor-pointer hover:bg-gray-50 transition text-xs text-gray-400">
                                <i class="fa-solid fa-paperclip text-sm text-gray-500"></i>
                                <span>Pilih file (jika ada)</span>
                                <input type="file" class="hidden">
                            </label>
                            <span class="text-[10px] text-gray-400 whitespace-nowrap">Maks. 2MB (PDF, JPG, PNG)</span>
                        </div>
                    </div>

                    <!-- Form Action Buttons -->
                    <div class="flex items-center justify-end gap-3 pt-4 border-t border-gray-100">
                        <a href="{{ route('wakasek.daftar-pengaduan') }}" class="px-5 py-2 rounded-xl border border-gray-200 text-xs font-bold text-gray-600 hover:bg-gray-50 transition">
                            Batal
                        </a>
                        <button type="submit" class="px-5 py-2 rounded-xl bg-orange-500 hover:bg-orange-600 text-white text-xs font-bold flex items-center gap-2 shadow-sm transition">
                            <i class="fa-regular fa-paper-plane text-xs"></i>
                            Kirim Umpan Balik
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <!-- Kolom Kanan: Sidebar Ringkasan (1/3 width) -->
        <div class="lg:col-span-1">
            <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm space-y-4">
                <h3 class="text-xs font-bold text-blue-900 border-b border-gray-100 pb-3">Status Pengaduan Saat Ini</h3>

                <div>
                    <span class="text-[10px] font-medium text-gray-400 block mb-1">Status</span>
                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-md text-[11px] font-bold inline-block">
                        Menunggu ACC
                    </span>
                </div>

                <div>
                    <span class="text-[10px] font-medium text-gray-400 block">Diajukan Pada</span>
                    <span class="text-xs font-bold text-gray-800">27 Jul 2026 11:05</span>
                </div>

                <div>
                    <span class="text-[10px] font-medium text-gray-400 block">Diajukan Oleh</span>
                    <span class="text-xs font-bold text-gray-800">Andi Wijaya (Identitas)</span>
                </div>

                <div>
                    <span class="text-[10px] font-medium text-gray-400 block mb-1">Kategori</span>
                    <span class="bg-emerald-100 text-emerald-700 px-2.5 py-0.5 rounded text-[10px] font-bold inline-block">
                        Kurikulum
                    </span>
                </div>

                <div class="pt-2 border-t border-gray-100">
                    <span class="text-[10px] font-medium text-gray-400 block mb-2">Bukti Pendukung</span>
                    <a href="#" class="inline-flex items-center gap-2 text-xs font-semibold text-blue-600 hover:underline bg-blue-50/50 px-3 py-1.5 rounded-lg border border-blue-100 w-full">
                        <i class="fa-solid fa-paperclip text-blue-500"></i>
                        <span class="truncate">Toilet_kotor.jpg</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

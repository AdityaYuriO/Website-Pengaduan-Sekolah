@extends('layouts.wakasek')

@section('title', 'Daftar Pengaduan - Wakasek Kurikulum')

@section('content')
    <!-- Header Title -->
    <div class="mb-6">
        <h1 class="text-2xl font-serif font-bold text-gray-900">Daftar Pengaduan</h1>
    </div>

    <!-- 4 Mini Summary Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">

        <!-- Card 1: Pengaduan Masuk -->
        <div class="bg-white p-3.5 rounded-2xl border border-gray-200 shadow-sm flex items-center justify-between border-b-4 border-b-blue-500">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-500 text-white rounded-xl flex items-center justify-center text-lg flex-shrink-0 shadow-sm">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div>
                    <span class="text-[11px] font-bold text-gray-800 block leading-tight">Pengaduan Masuk</span>
                    <span class="text-xl font-extrabold text-gray-900 leading-tight">12</span>
                    <span class="text-[9px] text-gray-400 block leading-tight">Pengaduan baru</span>
                </div>
            </div>
        </div>

        <!-- Card 2: Menunggu ACC -->
        <div class="bg-white p-3.5 rounded-2xl border border-gray-200 shadow-sm flex items-center justify-between border-b-4 border-b-amber-400">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-amber-400 text-white rounded-xl flex items-center justify-center text-lg flex-shrink-0 shadow-sm">
                    <i class="fa-regular fa-clock"></i>
                </div>
                <div>
                    <span class="text-[11px] font-bold text-gray-800 block leading-tight">Menunggu ACC</span>
                    <span class="text-xl font-extrabold text-gray-900 leading-tight">12</span>
                    <span class="text-[9px] text-gray-400 block leading-tight">Perlu persetujuan</span>
                </div>
            </div>
        </div>

        <!-- Card 3: Sudah Di-ACC -->
        <div class="bg-white p-3.5 rounded-2xl border border-gray-200 shadow-sm flex items-center justify-between border-b-4 border-b-emerald-500">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-emerald-500 text-white rounded-xl flex items-center justify-center text-lg flex-shrink-0 shadow-sm">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div>
                    <span class="text-[11px] font-bold text-gray-800 block leading-tight">Sudah Di-ACC</span>
                    <span class="text-xl font-extrabold text-gray-900 leading-tight">18</span>
                    <span class="text-[9px] text-gray-400 block leading-tight">Disetujui</span>
                </div>
            </div>
        </div>

        <!-- Card 4: Total Pengaduan -->
        <div class="bg-white p-3.5 rounded-2xl border border-gray-200 shadow-sm flex items-center justify-between border-b-4 border-b-purple-500">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-purple-500 text-white rounded-xl flex items-center justify-center text-lg flex-shrink-0 shadow-sm">
                    <i class="fa-solid fa-file-invoice"></i>
                </div>
                <div>
                    <span class="text-[11px] font-bold text-gray-800 block leading-tight">Total Pengaduan</span>
                    <span class="text-xl font-extrabold text-gray-900 leading-tight">30</span>
                    <span class="text-[9px] text-gray-400 block leading-tight">Semua waktu</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Table Container -->
    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <!-- Table Header -->
                <thead>
                    <tr class="bg-[#0f3b7e] text-white font-semibold">
                        <th class="py-3 px-3 text-center w-10">No</th>
                        <th class="py-3 px-4">Tanggal</th>
                        <th class="py-3 px-4">Pelapor</th>
                        <th class="py-3 px-4">Jenis Pelapor</th>
                        <th class="py-3 px-4">Kategori</th>
                        <th class="py-3 px-4 max-w-xs">Judul Pengaduan</th>
                        <th class="py-3 px-4 text-center">Status</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100 text-gray-700">

                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-3 text-center font-bold">1</td>
                        <td class="py-3 px-4">
                            <span class="font-bold text-gray-900 block">29 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">10:24</span>
                        </td>
                        <td class="py-3 px-4 font-medium text-gray-800">Budi Santoso</td>
                        <td class="py-3 px-4">
                            <span class="bg-blue-100 text-blue-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Identitas</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-sky-100 text-sky-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Fasilitas Sekolah</span>
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate">AC di ruang kelas 8B tidak berfungsi dengan baik.</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-eye"></i> Lihat Detail
                                </a>
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-solid fa-check"></i> ACC
                                </button>
                                <button class="bg-orange-500 hover:bg-orange-600 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-comment-dots"></i> Umpan Balik
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-3 text-center font-bold">2</td>
                        <td class="py-3 px-4">
                            <span class="font-bold text-gray-900 block">29 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">09:50</span>
                        </td>
                        <td class="py-3 px-4 font-medium text-gray-800">Anonim</td>
                        <td class="py-3 px-4">
                            <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Anonim</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-purple-100 text-purple-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Kedisiplinan</span>
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate">Beberapa siswa sering datang terlambat tanpa alasan jelas.</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-eye"></i> Lihat Detail
                                </a>
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-solid fa-check"></i> ACC
                                </button>
                                <button class="bg-orange-500 hover:bg-orange-600 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-comment-dots"></i> Umpan Balik
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-3 text-center font-bold">3</td>
                        <td class="py-3 px-4">
                            <span class="font-bold text-gray-900 block">28 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">16:30</span>
                        </td>
                        <td class="py-3 px-4 font-medium text-gray-800">Siti Aminah</td>
                        <td class="py-3 px-4">
                            <span class="bg-blue-100 text-blue-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Identitas</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-emerald-100 text-emerald-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Kurikulum</span>
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate">Materi pembelajaran terlalu padat dalam waktu singkat.</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-eye"></i> Lihat Detail
                                </a>
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-solid fa-check"></i> ACC
                                </button>
                                <button class="bg-orange-500 hover:bg-orange-600 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-comment-dots"></i> Umpan Balik
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-3 text-center font-bold">4</td>
                        <td class="py-3 px-4">
                            <span class="font-bold text-gray-900 block">28 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">14:12</span>
                        </td>
                        <td class="py-3 px-4 font-medium text-gray-800">Anonim</td>
                        <td class="py-3 px-4">
                            <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Anonim</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-orange-100 text-orange-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Guru</span>
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate">Guru jarang hadir tepat waktu di kelas.</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-eye"></i> Lihat Detail
                                </a>
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-solid fa-check"></i> ACC
                                </button>
                                <button class="bg-orange-500 hover:bg-orange-600 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-comment-dots"></i> Umpan Balik
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-3 text-center font-bold">5</td>
                        <td class="py-3 px-4">
                            <span class="font-bold text-gray-900 block">27 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">11:05</span>
                        </td>
                        <td class="py-3 px-4 font-medium text-gray-800">Andi Wijaya</td>
                        <td class="py-3 px-4">
                            <span class="bg-blue-100 text-blue-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Identitas</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-sky-100 text-sky-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Fasilitas Sekolah</span>
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate">Toilet di lantai 2 kotor dan bau tidak sedap.</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-eye"></i> Lihat Detail
                                </a>
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-solid fa-check"></i> ACC
                                </button>
                                <button class="bg-orange-500 hover:bg-orange-600 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-comment-dots"></i> Umpan Balik
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-3 text-center font-bold">6</td>
                        <td class="py-3 px-4">
                            <span class="font-bold text-gray-900 block">26 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">15:45</span>
                        </td>
                        <td class="py-3 px-4 font-medium text-gray-800">Anonim</td>
                        <td class="py-3 px-4">
                            <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Anonim</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-purple-100 text-purple-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Kedisiplinan</span>
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate">Seragam tidak sesuai aturan namun tidak ditegur.</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-eye"></i> Lihat Detail
                                </a>
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-solid fa-check"></i> ACC
                                </button>
                                <button class="bg-orange-500 hover:bg-orange-600 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-comment-dots"></i> Umpan Balik
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 7 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-3 text-center font-bold">7</td>
                        <td class="py-3 px-4">
                            <span class="font-bold text-gray-900 block">25 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">09:12</span>
                        </td>
                        <td class="py-3 px-4 font-medium text-gray-800">Dewi Lestari</td>
                        <td class="py-3 px-4">
                            <span class="bg-blue-100 text-blue-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Identitas</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-emerald-100 text-emerald-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Kurikulum</span>
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate">Penjelasan guru kurang dipahami saat pelajaran.</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-eye"></i> Lihat Detail
                                </a>
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-solid fa-check"></i> ACC
                                </button>
                                <button class="bg-orange-500 hover:bg-orange-600 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-comment-dots"></i> Umpan Balik
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 8 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-3 text-center font-bold">8</td>
                        <td class="py-3 px-4">
                            <span class="font-bold text-gray-900 block">25 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">08:40</span>
                        </td>
                        <td class="py-3 px-4 font-medium text-gray-800">Anonim</td>
                        <td class="py-3 px-4">
                            <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Anonim</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-orange-100 text-orange-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Guru</span>
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate">Guru menggunakan bahasa yang kurang sopan.</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-eye"></i> Lihat Detail
                                </a>
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-solid fa-check"></i> ACC
                                </button>
                                <button class="bg-orange-500 hover:bg-orange-600 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-comment-dots"></i> Umpan Balik
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 9 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-3 text-center font-bold">9</td>
                        <td class="py-3 px-4">
                            <span class="font-bold text-gray-900 block">24 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">13:20</span>
                        </td>
                        <td class="py-3 px-4 font-medium text-gray-800">Rafi Hidayat</td>
                        <td class="py-3 px-4">
                            <span class="bg-blue-100 text-blue-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Identitas</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-sky-100 text-sky-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Fasilitas Sekolah</span>
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate">Lampu di ruang kelas sering mati sendiri.</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-eye"></i> Lihat Detail
                                </a>
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-solid fa-check"></i> ACC
                                </button>
                                <button class="bg-orange-500 hover:bg-orange-600 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-comment-dots"></i> Umpan Balik
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 10 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-3 text-center font-bold">10</td>
                        <td class="py-3 px-4">
                            <span class="font-bold text-gray-900 block">24 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">07:50</span>
                        </td>
                        <td class="py-3 px-4 font-medium text-gray-800">Anonim</td>
                        <td class="py-3 px-4">
                            <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Anonim</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-emerald-100 text-emerald-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Kurikulum</span>
                        </td>
                        <td class="py-3 px-4 max-w-xs truncate">Tugas menumpuk dalam waktu bersamaan.</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-eye"></i> Lihat Detail
                                </a>
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-solid fa-check"></i> ACC
                                </button>
                                <button class="bg-orange-500 hover:bg-orange-600 text-white px-2.5 py-1.5 rounded-lg text-[10px] font-bold flex items-center gap-1 shadow-sm">
                                    <i class="fa-regular fa-comment-dots"></i> Umpan Balik
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Pagination Footer -->
        <div class="px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-gray-100 bg-white">
            <span class="text-xs text-gray-500 font-medium">Menampilkan 1 - 10 dari 12 data</span>

            <div class="flex items-center gap-1 text-xs">
                <button class="w-7 h-7 flex items-center justify-center rounded-md border border-gray-200 text-gray-400 hover:bg-gray-50">&lt;</button>
                <button class="w-7 h-7 flex items-center justify-center rounded-md bg-blue-800 text-white font-bold">1</button>
                <button class="w-7 h-7 flex items-center justify-center rounded-md border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium">2</button>
                <button class="w-7 h-7 flex items-center justify-center rounded-md border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium">&gt;</button>
            </div>
        </div>
    </div>
@endsection

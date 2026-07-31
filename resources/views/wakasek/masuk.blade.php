@extends('layouts.wakasek')

@section('title', 'Pengaduan Masuk - Wakasek Kurikulum')

@section('content')
    <!-- Header Title & Search Input -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-serif font-bold text-gray-900">Pengaduan Masuk</h1>
            <p class="text-gray-500 text-sm mt-0.5">Daftar pengaduan masuk yang perlu di verifikasi dan di proses.</p>
        </div>

        <!-- Search Bar -->
        <div class="relative w-full sm:w-72">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
            </span>
            <input type="text"
                   class="w-full pl-9 pr-4 py-2 bg-white border border-gray-300 rounded-xl text-xs focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm"
                   placeholder="Cari pengaduan...">
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
                        <th class="py-3 px-4 max-w-xs">Ringkasan</th>
                        <th class="py-3 px-4 text-center">Status</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100 text-gray-700">

                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3.5 px-3 text-center font-bold">1</td>
                        <td class="py-3.5 px-4">
                            <span class="font-bold text-gray-900 block">29 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">10:24</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="font-semibold text-gray-800 block">Budi Santoso</span>
                            <span class="text-[10px] text-gray-400">(Identitas)</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="bg-blue-100 text-blue-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Identitas</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="bg-sky-100 text-sky-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Fasilitas Sekolah</span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs truncate">AC di ruang kelas 8B tidak berfungsi dengan baik.</td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3.5 px-4">
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
                        <td class="py-3.5 px-3 text-center font-bold">2</td>
                        <td class="py-3.5 px-4">
                            <span class="font-bold text-gray-900 block">29 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">09:50</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="font-semibold text-gray-800 block">Anonim</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Anonim</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="bg-purple-100 text-purple-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Kedisiplinan</span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs truncate">Beberapa siswa sering datang terlambat tanpa alasan jelas.</td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3.5 px-4">
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
                        <td class="py-3.5 px-3 text-center font-bold">3</td>
                        <td class="py-3.5 px-4">
                            <span class="font-bold text-gray-900 block">28 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">16:30</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="font-semibold text-gray-800 block">Siti Aminah</span>
                            <span class="text-[10px] text-gray-400">(Identitas)</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="bg-blue-100 text-blue-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Identitas</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="bg-emerald-100 text-emerald-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Kurikulum</span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs truncate">Materi pembelajaran terlalu padat dalam waktu singkat.</td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="bg-blue-100 text-blue-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Diproses</span>
                        </td>
                        <td class="py-3.5 px-4">
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
                        <td class="py-3.5 px-3 text-center font-bold">4</td>
                        <td class="py-3.5 px-4">
                            <span class="font-bold text-gray-900 block">28 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">14:12</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="font-semibold text-gray-800 block">Anonim</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Anonim</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="bg-orange-100 text-orange-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Guru</span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs truncate">Guru jarang hadir tepat waktu di kelas.</td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3.5 px-4">
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
                        <td class="py-3.5 px-3 text-center font-bold">5</td>
                        <td class="py-3.5 px-4">
                            <span class="font-bold text-gray-900 block">27 Jul 2026</span>
                            <span class="text-[10px] text-gray-500">11:05</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="font-semibold text-gray-800 block">Andi Wijaya</span>
                            <span class="text-[10px] text-gray-400">(Identitas)</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="bg-blue-100 text-blue-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Identitas</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="bg-sky-100 text-sky-600 px-2.5 py-1 rounded-md text-[10px] font-semibold">Fasilitas Sekolah</span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs truncate">Toilet di lantai 2 kotor dan bau tidak sedap.</td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="bg-amber-100 text-amber-700 px-2.5 py-1 rounded-md text-[10px] font-bold">Menunggu ACC</span>
                        </td>
                        <td class="py-3.5 px-4">
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

        <!-- Table Pagination Footer -->
        <div class="px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-gray-100 bg-white">
            <span class="text-xs text-gray-500 font-medium">Menampilkan 1 - 8 dari 40 data</span>

            <div class="flex items-center gap-1 text-xs">
                <button class="w-7 h-7 flex items-center justify-center rounded-md border border-gray-200 text-gray-400 hover:bg-gray-50">&lt;</button>
                <button class="w-7 h-7 flex items-center justify-center rounded-md bg-blue-800 text-white font-bold">1</button>
                <button class="w-7 h-7 flex items-center justify-center rounded-md border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium">2</button>
                <button class="w-7 h-7 flex items-center justify-center rounded-md border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium">3</button>
                <button class="w-7 h-7 flex items-center justify-center rounded-md border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium">4</button>
                <button class="w-7 h-7 flex items-center justify-center rounded-md border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium">5</button>
                <span class="px-1 text-gray-400">...</span>
                <button class="w-7 h-7 flex items-center justify-center rounded-md border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium">5</button>
                <button class="w-7 h-7 flex items-center justify-center rounded-md border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium">&gt;</button>
            </div>
        </div>
    </div>
@endsection

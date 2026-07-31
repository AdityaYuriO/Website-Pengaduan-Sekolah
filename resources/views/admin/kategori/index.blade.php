@extends('layouts.app') {{-- Sesuaikan dengan path layout kamu, misal: layouts.layouts --}}

@section('title', 'Kategori - Pengaduan Sekolah')

@section('content')
<div class="space-y-6">
    <!-- Header Title & Subtitle -->
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Kategori</h1>
        <p class="text-xs text-slate-500 mt-1">Kelola kategori pengaduan sekolah dengan mudah dan efisien.</p>
    </div>

    <!-- Action Bar: Search & Add Button -->
    <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
        <!-- Search Input -->
        <div class="relative w-full sm:w-72">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-slate-400">
                <i class="fa-solid fa-magnifying-glass text-xs"></i>
            </span>
            <input type="text" 
                   placeholder="Cari kategori..." 
                   class="w-full pl-9 pr-4 py-2 bg-white border border-gray-200 rounded-md text-xs text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition shadow-sm">
        </div>

        <!-- Tambah Kategori Button -->
        <a href="#" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-[#0052cc] hover:bg-[#0043a8] text-white px-4 py-2 rounded-md text-xs font-semibold shadow-sm transition">
            <i class="fa-solid fa-plus"></i>
            <span>Tambah Kategori</span>
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <!-- Table Header -->
                <thead>
                    <tr class="bg-[#0044aa] text-white text-xs font-semibold">
                        <th class="py-3 px-6 w-16 text-center">No</th>
                        <th class="py-3 px-6">Kategori</th>
                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center w-48">Aksi</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100 text-xs text-slate-700 font-medium">
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6 text-center font-bold">1</td>
                        <td class="py-4 px-6 font-semibold text-slate-800">Kesiswaan</td>
                        <td class="py-4 px-6 text-center">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-700">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                AKTIF
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-50 border border-blue-200 text-blue-600 rounded hover:bg-blue-100 font-semibold transition">
                                    <i class="fa-solid fa-pen text-[10px]"></i> Edit
                                </a>
                                <button type="button" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 border border-red-200 text-red-500 rounded hover:bg-red-100 font-semibold transition">
                                    <i class="fa-solid fa-trash text-[10px]"></i> Hapus
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6 text-center font-bold">2</td>
                        <td class="py-4 px-6 font-semibold text-slate-800">Hubin</td>
                        <td class="py-4 px-6 text-center">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold bg-orange-100 text-orange-600">
                                <span class="w-1.5 h-1.5 rounded-full bg-orange-400"></span>
                                NONAKTIF
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-50 border border-blue-200 text-blue-600 rounded hover:bg-blue-100 font-semibold transition">
                                    <i class="fa-solid fa-pen text-[10px]"></i> Edit
                                </a>
                                <button type="button" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 border border-red-200 text-red-500 rounded hover:bg-red-100 font-semibold transition">
                                    <i class="fa-solid fa-trash text-[10px]"></i> Hapus
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6 text-center font-bold">3</td>
                        <td class="py-4 px-6 font-semibold text-slate-800">Kurikulum</td>
                        <td class="py-4 px-6 text-center">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-700">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                AKTIF
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-50 border border-blue-200 text-blue-600 rounded hover:bg-blue-100 font-semibold transition">
                                    <i class="fa-solid fa-pen text-[10px]"></i> Edit
                                </a>
                                <button type="button" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 border border-red-200 text-red-500 rounded hover:bg-red-100 font-semibold transition">
                                    <i class="fa-solid fa-trash text-[10px]"></i> Hapus
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6 text-center font-bold">4</td>
                        <td class="py-4 px-6 font-semibold text-slate-800">Evaluasi Guru</td>
                        <td class="py-4 px-6 text-center">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold bg-orange-100 text-orange-600">
                                <span class="w-1.5 h-1.5 rounded-full bg-orange-400"></span>
                                NONAKTIF
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-50 border border-blue-200 text-blue-600 rounded hover:bg-blue-100 font-semibold transition">
                                    <i class="fa-solid fa-pen text-[10px]"></i> Edit
                                </a>
                                <button type="button" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 border border-red-200 text-red-500 rounded hover:bg-red-100 font-semibold transition">
                                    <i class="fa-solid fa-trash text-[10px]"></i> Hapus
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6 text-center font-bold">5</td>
                        <td class="py-4 px-6 font-semibold text-slate-800">Layanan Konseling</td>
                        <td class="py-4 px-6 text-center">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-700">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                AKTIF
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-50 border border-blue-200 text-blue-600 rounded hover:bg-blue-100 font-semibold transition">
                                    <i class="fa-solid fa-pen text-[10px]"></i> Edit
                                </a>
                                <button type="button" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 border border-red-200 text-red-500 rounded hover:bg-red-100 font-semibold transition">
                                    <i class="fa-solid fa-trash text-[10px]"></i> Hapus
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6 text-center font-bold">6</td>
                        <td class="py-4 px-6 font-semibold text-slate-800">Sarana Prasarana</td>
                        <td class="py-4 px-6 text-center">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold bg-orange-100 text-orange-600">
                                <span class="w-1.5 h-1.5 rounded-full bg-orange-400"></span>
                                NONAKTIF
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-50 border border-blue-200 text-blue-600 rounded hover:bg-blue-100 font-semibold transition">
                                    <i class="fa-solid fa-pen text-[10px]"></i> Edit
                                </a>
                                <button type="button" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 border border-red-200 text-red-500 rounded hover:bg-red-100 font-semibold transition">
                                    <i class="fa-solid fa-trash text-[10px]"></i> Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table Footer / Pagination -->
        <div class="p-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <div>
                Menampilkan <span class="font-bold text-slate-700">1 – 6</span> dari <span class="font-bold text-slate-700">6</span> data
            </div>

            <div class="flex items-center gap-1">
                <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded text-slate-400 hover:bg-gray-50 disabled:opacity-50">
                    <i class="fa-solid fa-chevron-left text-[10px]"></i>
                </button>
                <button class="w-7 h-7 flex items-center justify-center bg-[#0044aa] text-white font-semibold rounded">
                    1
                </button>
                <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded text-slate-600 hover:bg-gray-50 font-medium">
                    2
                </button>
                <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded text-slate-600 hover:bg-gray-50 font-medium">
                    3
                </button>
                <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded text-slate-600 hover:bg-gray-50 font-medium">
                    4
                </button>
                <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded text-slate-600 hover:bg-gray-50">
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
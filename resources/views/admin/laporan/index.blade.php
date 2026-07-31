@extends('layouts.app') {{-- Sesuaikan nama file layout kamu --}}

@section('title', 'Daftar Pengaduan - Pengaduan Sekolah')

@section('content')
<div class="space-y-6">
    <!-- Header Title & Stats Row -->
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Laporan Pengaduan</h1>
            <p class="text-xs text-slate-500 mt-1">Kelola dan cetak pengaduan sekolah.</p>
        </div>

        <!-- Stat Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 w-full lg:w-auto">
            <!-- Total Pengaduan -->
            <div class="bg-blue-50/60 border border-blue-200/80 rounded-xl p-3 flex items-center justify-between gap-4 min-w-[170px]">
                <div>
                    <span class="text-[11px] font-semibold text-slate-600 block">Total Pengaduan</span>
                    <span class="text-xl font-extrabold text-slate-900 block my-0.5">226</span>
                    <span class="text-[10px] text-slate-500 block">Semua Laporan</span>
                </div>
                <div class="w-9 h-9 rounded-lg bg-blue-500/10 border border-blue-400/30 flex items-center justify-center text-blue-600 flex-shrink-0">
                    <i class="fa-solid fa-list-check text-base"></i>
                </div>
            </div>

            <!-- Diproses -->
            <div class="bg-amber-50/60 border border-amber-200/80 rounded-xl p-3 flex items-center justify-between gap-4 min-w-[170px]">
                <div>
                    <span class="text-[11px] font-semibold text-slate-600 block">Diproses</span>
                    <span class="text-xl font-extrabold text-slate-900 block my-0.5">200</span>
                    <span class="text-[10px] text-slate-500 block">Sedang diproses</span>
                </div>
                <div class="w-9 h-9 rounded-full bg-amber-500/10 border border-amber-400/30 flex items-center justify-center text-amber-500 flex-shrink-0">
                    <i class="fa-regular fa-clock text-base"></i>
                </div>
            </div>

            <!-- Selesai -->
            <div class="bg-emerald-50/60 border border-emerald-200/80 rounded-xl p-3 flex items-center justify-between gap-4 min-w-[170px]">
                <div>
                    <span class="text-[11px] font-semibold text-slate-600 block">Selesai</span>
                    <span class="text-xl font-extrabold text-slate-900 block my-0.5">26</span>
                    <span class="text-[10px] text-slate-500 block">Laporan Selesai</span>
                </div>
                <div class="w-9 h-9 rounded-full bg-emerald-500/10 border border-emerald-400/30 flex items-center justify-center text-emerald-500 flex-shrink-0">
                    <i class="fa-regular fa-circle-check text-base"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter & Action Card -->
    <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm space-y-4">
        <!-- Form Filters -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Tanggal Mulai -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1.5">Tanggal Mulai</label>
                <div class="relative">
                    <input type="text" value="01/05/2026" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-lg text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400">
                        <i class="fa-regular fa-calendar text-xs"></i>
                    </span>
                </div>
            </div>

            <!-- Tanggal Akhir -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1.5">Tanggal Akhir</label>
                <div class="relative">
                    <input type="text" value="29/07/2026" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-lg text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400">
                        <i class="fa-regular fa-calendar text-xs"></i>
                    </span>
                </div>
            </div>

            <!-- Kategori -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1.5">Kategori</label>
                <div class="relative">
                    <select class="w-full appearance-none bg-white border border-gray-200 rounded-lg px-3 py-2 pr-8 text-xs text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600 cursor-pointer">
                        <option>Semua Kategori</option>
                        <option>Fasilitas Sekolah</option>
                        <option>Kebersihan</option>
                        <option>Pembelajaran</option>
                        <option>Guru</option>
                        <option>Bullying</option>
                        <option>Keamanan</option>
                    </select>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-slate-400">
                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                    </span>
                </div>
            </div>

            <!-- Status -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1.5">Status</label>
                <div class="relative">
                    <select class="w-full appearance-none bg-white border border-gray-200 rounded-lg px-3 py-2 pr-8 text-xs text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600 cursor-pointer">
                        <option>Semua Status</option>
                        <option>Diproses</option>
                        <option>Selesai</option>
                    </select>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-slate-400">
                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                    </span>
                </div>
            </div>
        </div>

        <!-- Buttons Cetak & Unduh -->
        <div class="flex items-center gap-3 pt-1">
            <button class="inline-flex items-center gap-2 bg-[#0052cc] hover:bg-[#0043a8] text-white px-4 py-2 rounded-lg text-xs font-semibold shadow-sm transition">
                <i class="fa-solid fa-print text-xs"></i>
                <span>Cetak Laporan</span>
            </button>
            <button class="inline-flex items-center gap-2 bg-[#1a8a38] hover:bg-[#146c2c] text-white px-4 py-2 rounded-lg text-xs font-semibold shadow-sm transition">
                <i class="fa-solid fa-download text-xs"></i>
                <span>Unduh Laporan</span>
            </button>
        </div>
    </div>

    <!-- Table Section Card -->
    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden p-5 space-y-4">
        <!-- Table Header Control: Title, Search, Reset -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-3">
            <h2 class="text-sm font-bold text-slate-800">Daftar Pengaduan</h2>
            
            <div class="flex items-center gap-2 w-full sm:w-auto">
                <!-- Search Input -->
                <div class="relative w-full sm:w-60">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-slate-400">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    </span>
                    <input type="text" placeholder="Cari pengaduan..." class="w-full pl-8 pr-3 py-1.5 border border-gray-200 rounded-lg text-xs text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                
                <!-- Cari Button -->
                <button class="bg-[#0052cc] hover:bg-[#0043a8] text-white px-4 py-1.5 rounded-lg text-xs font-semibold transition">
                    Cari
                </button>

                <!-- Reset Button -->
                <button class="border border-gray-200 hover:bg-gray-50 text-slate-700 px-3 py-1.5 rounded-lg text-xs font-semibold inline-flex items-center gap-1.5 transition">
                    <i class="fa-solid fa-rotate-right text-[10px]"></i>
                    Reset
                </button>
            </div>
        </div>

        <!-- Table Container -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-gray-100 text-slate-700 text-xs font-bold">
                        <th class="py-3 px-3 w-10 text-center">No</th>
                        <th class="py-3 px-4">Tanggal</th>
                        <th class="py-3 px-4">Pelapor</th>
                        <th class="py-3 px-4">Kategori</th>
                        <th class="py-3 px-4 max-w-xs">Isi Pengaduan</th>
                        <th class="py-3 px-4 text-center">Status</th>
                        <th class="py-3 px-3 text-center w-28">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-xs font-medium text-slate-700">
                    <!-- Row 1 -->
                    <tr class="hover:bg-slate-50/60 transition">
                        <td class="py-3.5 px-3 text-center font-semibold">1</td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">29/07/2026</div>
                            <div class="text-[11px] text-slate-400 font-normal">09:15</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">Siti Aisyah</div>
                            <div class="text-[11px] text-slate-400 font-normal">(XI RPL 1)</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-semibold bg-blue-100/70 text-blue-600">
                                Fasilitas Sekolah
                            </span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs text-slate-800">
                            AC di ruang kelas tidak dingin saat siang hari.
                        </td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="px-3 py-1 rounded-md text-[10px] font-bold bg-amber-100/70 text-amber-600">
                                Diproses
                            </span>
                        </td>
                        <td class="py-3.5 px-3">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </a>
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition">
                                    <i class="fa-solid fa-print text-xs"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-slate-50/60 transition">
                        <td class="py-3.5 px-3 text-center font-semibold">2</td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">28/07/2026</div>
                            <div class="text-[11px] text-slate-400 font-normal">14:20</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">Budi Santoso</div>
                            <div class="text-[11px] text-slate-400 font-normal">(XII TKJ 2)</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-semibold bg-purple-100/70 text-purple-600">
                                Kebersihan
                            </span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs text-slate-800">
                            Toilet di lantai 2 kotor dan bau.
                        </td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="px-3 py-1 rounded-md text-[10px] font-bold bg-emerald-100/70 text-emerald-600">
                                Selesai
                            </span>
                        </td>
                        <td class="py-3.5 px-3">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </a>
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition">
                                    <i class="fa-solid fa-print text-xs"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-slate-50/60 transition">
                        <td class="py-3.5 px-3 text-center font-semibold">3</td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">27/07/2026</div>
                            <div class="text-[11px] text-slate-400 font-normal">11:05</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">Dewi Lestari</div>
                            <div class="text-[11px] text-slate-400 font-normal">(XI AKL 1)</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-semibold bg-orange-100/70 text-orange-600">
                                Pembelajaran
                            </span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs text-slate-800">
                            Proyektor di kelas sering tidak berfungsi.
                        </td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="px-3 py-1 rounded-md text-[10px] font-bold bg-amber-100/70 text-amber-600">
                                Diproses
                            </span>
                        </td>
                        <td class="py-3.5 px-3">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </a>
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition">
                                    <i class="fa-solid fa-print text-xs"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-slate-50/60 transition">
                        <td class="py-3.5 px-3 text-center font-semibold">4</td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">26/07/2026</div>
                            <div class="text-[11px] text-slate-400 font-normal">10:30</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">Andi Pratama</div>
                            <div class="text-[11px] text-slate-400 font-normal">(XII TBSM 1)</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-semibold bg-pink-100/70 text-pink-600">
                                Guru
                            </span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs text-slate-800">
                            Guru datang terlambat sering terjadi.
                        </td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="px-3 py-1 rounded-md text-[10px] font-bold bg-emerald-100/70 text-emerald-600">
                                Selesai
                            </span>
                        </td>
                        <td class="py-3.5 px-3">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </a>
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition">
                                    <i class="fa-solid fa-print text-xs"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr class="hover:bg-slate-50/60 transition">
                        <td class="py-3.5 px-3 text-center font-semibold">5</td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">25/07/2026</div>
                            <div class="text-[11px] text-slate-400 font-normal">08:45</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">Rina Oktaviani</div>
                            <div class="text-[11px] text-slate-400 font-normal">(XI RPL 2)</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-semibold bg-rose-100/70 text-rose-600">
                                Bullying
                            </span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs text-slate-800">
                            Ada siswa yang mengejek teman di kelas.
                        </td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="px-3 py-1 rounded-md text-[10px] font-bold bg-amber-100/70 text-amber-600">
                                Diproses
                            </span>
                        </td>
                        <td class="py-3.5 px-3">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </a>
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition">
                                    <i class="fa-solid fa-print text-xs"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr class="hover:bg-slate-50/60 transition">
                        <td class="py-3.5 px-3 text-center font-semibold">6</td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">24/07/2026</div>
                            <div class="text-[11px] text-slate-400 font-normal">13:10</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800">Fajar Maulana</div>
                            <div class="text-[11px] text-slate-400 font-normal">(XII MM 1)</div>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-semibold bg-teal-100/70 text-teal-600">
                                Keamanan
                            </span>
                        </td>
                        <td class="py-3.5 px-4 max-w-xs text-slate-800">
                            Pagar belakang sekolah rusak dan terbuka.
                        </td>
                        <td class="py-3.5 px-4 text-center">
                            <span class="px-3 py-1 rounded-md text-[10px] font-bold bg-emerald-100/70 text-emerald-600">
                                Selesai
                            </span>
                        </td>
                        <td class="py-3.5 px-3">
                            <div class="flex items-center justify-center gap-1.5">
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </a>
                                <a href="#" class="w-7 h-7 flex items-center justify-center bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition">
                                    <i class="fa-solid fa-print text-xs"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-2 pt-2 text-xs font-semibold text-slate-600">
            <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded-lg text-slate-400 hover:bg-gray-50 transition">
                <i class="fa-solid fa-chevron-left text-[10px]"></i>
            </button>
            <button class="w-7 h-7 flex items-center justify-center bg-[#0052cc] text-white font-bold rounded-lg">1</button>
            <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded-lg text-slate-700 hover:bg-gray-50 transition">2</button>
            <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded-lg text-slate-700 hover:bg-gray-50 transition">3</button>
            <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded-lg text-slate-700 hover:bg-gray-50 transition">
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
            </button>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app') {{-- Sesuaikan dengan nama layout kamu --}}

@section('title', 'Kelola Pengguna - Pengaduan Sekolah')

@section('content')
<div class="space-y-6">
    <!-- Header Title & Subtitle -->
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Kelola Pengguna</h1>
        <p class="text-xs text-slate-500 mt-0.5">Kelola akun pengguna sistem</p>
    </div>

    <!-- Stats Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Card Total Pengguna -->
        <div class="bg-white p-5 rounded-2xl border border-gray-300 shadow-sm flex items-center gap-5">
            <div class="w-16 h-16 rounded-full bg-slate-200 flex items-center justify-center flex-shrink-0">
                <i class="fa-solid fa-user text-3xl text-slate-600"></i>
            </div>
            <div>
                <h3 class="text-lg font-bold text-slate-800 leading-snug">Total Pengguna</h3>
                <div class="text-2xl font-black text-slate-900 my-0.5">16</div>
                <p class="text-xs font-medium text-slate-500">Semua akun terdaftar</p>
            </div>
        </div>

        <!-- Card Admin -->
        <div class="bg-white p-5 rounded-2xl border border-gray-300 shadow-sm flex items-center gap-5">
            <div class="w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                <i class="fa-solid fa-gear text-5xl text-slate-700"></i>
            </div>
            <div>
                <h3 class="text-lg font-bold text-slate-800 leading-snug">Admin</h3>
                <div class="text-2xl font-black text-slate-900 my-0.5">10</div>
                <p class="text-xs font-medium text-slate-500">Akun admin</p>
            </div>
        </div>
    </div>

    <!-- Main Container Table & Filters -->
    <div class="bg-white p-6 rounded-2xl border border-gray-300 shadow-sm space-y-5">
        <!-- Filter Bar -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <!-- Left Side: Search & Role Filter -->
            <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                <!-- Search Input -->
                <div class="relative w-full sm:w-64">
                    <input type="text" 
                           placeholder="Cari pengguna..." 
                           class="w-full pl-4 pr-10 py-2 bg-white border border-gray-300 rounded-lg text-xs text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    </span>
                </div>

                <!-- Role Filter Dropdown -->
                <div class="relative w-full sm:w-auto">
                    <select class="w-full sm:w-auto appearance-none bg-white border border-gray-300 rounded-lg px-4 py-2 pr-8 text-xs font-semibold text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600 cursor-pointer">
                        <option value="">Semua Role</option>
                        <option value="SISWA">SISWA</option>
                        <option value="ADMIN">ADMIN</option>
                        <option value="KEPSEK">KEPSEK</option>
                        <option value="WAKASEK">WAKASEK</option>
                    </select>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-slate-500">
                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                    </span>
                </div>
            </div>

            <!-- Right Side: Tambah User Button -->
            <a href="#" class="w-full md:w-auto inline-flex items-center justify-center gap-2 bg-[#2b65a8] hover:bg-[#1e4c82] text-white px-5 py-2 rounded-lg text-xs font-bold transition shadow-sm">
                <i class="fa-solid fa-plus text-xs"></i>
                <span>Tambah User</span>
            </a>
        </div>

        <!-- Data Table -->
        <div class="overflow-x-auto rounded-xl border border-slate-300">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#1e4d8c] text-white text-xs font-bold tracking-wider divide-x divide-white/20">
                        <th class="py-3 px-4 w-12 text-center">NO</th>
                        <th class="py-3 px-6">USERNAME</th>
                        <th class="py-3 px-6 text-center">ID</th>
                        <th class="py-3 px-6 text-center">ROLE</th>
                        <th class="py-3 px-6 text-center w-32">AKSI</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-300 text-xs font-semibold text-slate-800">
                    <!-- Row 1 -->
                    <tr class="hover:bg-slate-50 transition divide-x divide-slate-300">
                        <td class="py-3.5 px-4 text-center">1</td>
                        <td class="py-3.5 px-6">Anisa Kaila</td>
                        <td class="py-3.5 px-6 text-center font-normal">133457876543</td>
                        <td class="py-3.5 px-6 text-center">SISWA</td>
                        <td class="py-3.5 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="p-1.5 border border-amber-300 rounded bg-amber-50 text-amber-500 hover:bg-amber-100 transition">
                                    <i class="fa-solid fa-pen text-xs"></i>
                                </a>
                                <button type="button" class="p-1.5 border border-red-200 rounded bg-red-50 text-red-400 hover:bg-red-100 transition">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-slate-50 transition divide-x divide-slate-300">
                        <td class="py-3.5 px-4 text-center">2</td>
                        <td class="py-3.5 px-6">Sopiyanti</td>
                        <td class="py-3.5 px-6 text-center font-normal">133457876543</td>
                        <td class="py-3.5 px-6 text-center">SISWA</td>
                        <td class="py-3.5 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="p-1.5 border border-amber-300 rounded bg-amber-50 text-amber-500 hover:bg-amber-100 transition">
                                    <i class="fa-solid fa-pen text-xs"></i>
                                </a>
                                <button type="button" class="p-1.5 border border-red-200 rounded bg-red-50 text-red-400 hover:bg-red-100 transition">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-slate-50 transition divide-x divide-slate-300">
                        <td class="py-3.5 px-4 text-center">3</td>
                        <td class="py-3.5 px-6">Melly Amelia</td>
                        <td class="py-3.5 px-6 text-center font-normal">133457876543</td>
                        <td class="py-3.5 px-6 text-center">ADMIN</td>
                        <td class="py-3.5 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="p-1.5 border border-amber-300 rounded bg-amber-50 text-amber-500 hover:bg-amber-100 transition">
                                    <i class="fa-solid fa-pen text-xs"></i>
                                </a>
                                <button type="button" class="p-1.5 border border-red-200 rounded bg-red-50 text-red-400 hover:bg-red-100 transition">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-slate-50 transition divide-x divide-slate-300">
                        <td class="py-3.5 px-4 text-center">4</td>
                        <td class="py-3.5 px-6">Zannah</td>
                        <td class="py-3.5 px-6 text-center font-normal">133457876543</td>
                        <td class="py-3.5 px-6 text-center">KEPSEK</td>
                        <td class="py-3.5 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="p-1.5 border border-amber-300 rounded bg-amber-50 text-amber-500 hover:bg-amber-100 transition">
                                    <i class="fa-solid fa-pen text-xs"></i>
                                </a>
                                <button type="button" class="p-1.5 border border-red-200 rounded bg-red-50 text-red-400 hover:bg-red-100 transition">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr class="hover:bg-slate-50 transition divide-x divide-slate-300">
                        <td class="py-3.5 px-4 text-center">5</td>
                        <td class="py-3.5 px-6">Intan Alif</td>
                        <td class="py-3.5 px-6 text-center font-normal">133457876543</td>
                        <td class="py-3.5 px-6 text-center">WAKASEK</td>
                        <td class="py-3.5 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="p-1.5 border border-amber-300 rounded bg-amber-50 text-amber-500 hover:bg-amber-100 transition">
                                    <i class="fa-solid fa-pen text-xs"></i>
                                </a>
                                <button type="button" class="p-1.5 border border-red-200 rounded bg-red-50 text-red-400 hover:bg-red-100 transition">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-3 pt-2 text-xs font-bold text-slate-800">
            <button class="text-slate-600 hover:text-black font-extrabold">&lt;</button>
            <button class="w-7 h-7 flex items-center justify-center bg-[#0d3468] text-white rounded-md">1</button>
            <button class="w-7 h-7 flex items-center justify-center text-slate-700 hover:bg-slate-100 rounded-md">2</button>
            <button class="w-7 h-7 flex items-center justify-center text-slate-700 hover:bg-slate-100 rounded-md">3</button>
            <button class="w-7 h-7 flex items-center justify-center text-slate-700 hover:bg-slate-100 rounded-md">4</button>
            <button class="text-slate-600 hover:text-black font-extrabold">&gt;</button>
        </div>
    </div>
</div>
@endsection
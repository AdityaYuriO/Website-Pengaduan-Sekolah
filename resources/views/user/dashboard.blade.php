@extends('layouts.siswa')

@section('title', 'Dashboard - Pengaduan Sekolah')

@section('content')
<div class="w-full max-w-2xl mx-auto text-center space-y-8 py-4">

    <!-- Welcome Greeting -->
    <div class="space-y-1">
        <h1 class="text-3xl font-extrabold text-[#1d4d8c] tracking-wide font-serif">
            SELAMAT DATANG,
        </h1>
        <h2 class="text-2xl font-bold text-[#1d4d8c] italic font-serif tracking-widest">
            SOPIYANTI!
        </h2>
    </div>

    <!-- Summary Cards Row -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-2">
        
        <!-- Card 1: Laporan Saya -->
        <div class="bg-[#dcdcdc] rounded-2xl p-5 flex flex-col items-center justify-center space-y-2 border border-gray-300/80 shadow-sm hover:shadow-md transition">
            <!-- Icon Clipboard with Check -->
            <div class="relative text-slate-700 my-1">
                <i class="fa-solid fa-clipboard-list text-5xl"></i>
                <span class="absolute -bottom-1 -right-1 bg-blue-600 text-white rounded-full w-5 h-5 flex items-center justify-center text-[10px] border border-white">
                    <i class="fa-solid fa-check"></i>
                </span>
            </div>
            <div class="text-2xl font-black text-slate-900 leading-none">6</div>
            <div class="text-xs font-bold text-slate-700">Laporan Saya</div>
        </div>

        <!-- Card 2: Menunggu -->
        <div class="bg-[#dcdcdc] rounded-2xl p-5 flex flex-col items-center justify-center space-y-2 border border-gray-300/80 shadow-sm hover:shadow-md transition">
            <!-- Icon Hourglass -->
            <div class="text-slate-700 my-1">
                <i class="fa-solid fa-hourglass-half text-5xl"></i>
            </div>
            <div class="text-2xl font-black text-slate-900 leading-none">4</div>
            <div class="text-xs font-bold text-slate-700">Menunggu</div>
        </div>

        <!-- Card 3: Selesai -->
        <div class="bg-[#dcdcdc] rounded-2xl p-5 flex flex-col items-center justify-center space-y-2 border border-gray-300/80 shadow-sm hover:shadow-md transition">
            <!-- Icon Check Circle -->
            <div class="text-emerald-500 bg-white rounded-full p-1 my-1 shadow-sm">
                <i class="fa-solid fa-circle-check text-5xl"></i>
            </div>
            <div class="text-2xl font-black text-slate-900 leading-none">2</div>
            <div class="text-xs font-bold text-slate-700">Selesai</div>
        </div>

    </div>

    <!-- Action Button: Buat Pengaduan -->
    <div class="pt-4">
        <a href="#" class="inline-flex items-center justify-center gap-2 bg-[#2b6eb3] hover:bg-[#1f538a] text-white text-base font-bold italic px-8 py-3 rounded-full shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5">
            <span>+ Buat Pengaduan</span>
        </a>
    </div>

    <!-- Footer Quote -->
    <div class="pt-2">
        <p class="text-xs font-serif font-medium text-slate-700 tracking-wide">
            Mari Bersama Menciptakan Sekolah Yang Lebih Baik
        </p>
    </div>

</div>
@endsection
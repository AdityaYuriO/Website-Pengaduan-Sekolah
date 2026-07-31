@extends('layouts.wakasek')

@section('title', 'Dashboard Wakasek Kurikulum')

@section('content')
    <!-- Header Welcome & Role Info Box -->
    <div class="flex flex-col md:flex-row md:items-start justify-between gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-serif font-bold text-gray-900">Selamat Datang, Wakasek Kurikulum</h1>
            <p class="text-gray-600 text-sm mt-1">Berikut ringkasan pengaduan pada bidang kurikulum yang perlu anda tinjau.</p>
        </div>

        <!-- Role Banner Box -->
        <div class="bg-white border border-gray-300 rounded-2xl p-3 px-4 flex items-center gap-3 max-w-sm shadow-sm">
            <div class="w-10 h-10 rounded-full bg-blue-500 text-white flex items-center justify-center flex-shrink-0">
                <i class="fa-solid fa-users text-lg"></i>
            </div>
            <div>
                <span class="text-xs text-gray-500 font-semibold block leading-tight">Role Anda</span>
                <span class="text-xs font-bold italic text-gray-900 block leading-tight">Wakasek Kurikulum</span>
                <p class="text-[10px] text-gray-500 leading-tight mt-0.5">Bertugas memberikan persetujuan pengaduan bidang kurikulum.</p>
            </div>
        </div>
    </div>

    <!-- 4 Stats Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

        <!-- Pengaduan Masuk -->
        <div class="bg-white p-4 rounded-2xl border border-gray-300 shadow-sm flex items-center gap-3">
            <div class="w-12 h-12 bg-sky-400 text-white rounded-xl flex items-center justify-center text-2xl flex-shrink-0">
                <i class="fa-regular fa-comment-dots"></i>
            </div>
            <div>
                <span class="text-xs font-bold text-gray-800 block">Pengaduan Masuk</span>
                <span class="text-2xl font-extrabold text-gray-900 leading-none">12</span>
                <span class="text-[10px] text-gray-500 block leading-tight mt-0.5">Menunggu verifikasi& tindakan</span>
            </div>
        </div>

        <!-- Total Pengaduan -->
        <div class="bg-white p-4 rounded-2xl border border-gray-300 shadow-sm flex items-center gap-3">
            <div class="w-12 h-12 bg-sky-100 text-sky-600 rounded-xl flex items-center justify-center text-2xl flex-shrink-0 relative">
                <i class="fa-solid fa-clipboard-list"></i>
                <span class="absolute -bottom-1 -right-1 bg-red-500 text-white text-[9px] rounded-full w-4 h-4 flex items-center justify-center font-bold">!</span>
            </div>
            <div>
                <span class="text-xs font-bold text-gray-800 block">Total Pengaduan</span>
                <span class="text-2xl font-extrabold text-gray-900 leading-none">30</span>
                <span class="text-[10px] text-gray-500 block leading-tight mt-0.5">Semua Laporan</span>
            </div>
        </div>

        <!-- Diproses -->
        <div class="bg-white p-4 rounded-2xl border border-gray-300 shadow-sm flex items-center gap-3">
            <div class="w-12 h-12 bg-amber-50 text-amber-500 rounded-xl flex items-center justify-center text-2xl flex-shrink-0">
                <i class="fa-solid fa-hourglass-half"></i>
            </div>
            <div>
                <span class="text-xs font-bold text-gray-800 block">Diproses</span>
                <span class="text-2xl font-extrabold text-gray-900 leading-none">12</span>
                <span class="text-[10px] text-gray-500 block leading-tight mt-0.5">Sedang diproses</span>
            </div>
        </div>

        <!-- Selesai -->
        <div class="bg-white p-4 rounded-2xl border border-gray-300 shadow-sm flex items-center gap-3">
            <div class="w-12 h-12 bg-emerald-100 text-emerald-500 rounded-xl flex items-center justify-center text-2xl flex-shrink-0">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <span class="text-xs font-bold text-gray-800 block">Selesai</span>
                <span class="text-2xl font-extrabold text-gray-900 leading-none">18</span>
                <span class="text-[10px] text-gray-500 block leading-tight mt-0.5">Selesai ditindak lanjuti</span>
            </div>
        </div>

    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Bar Chart (Grafik Bulanan) -->
        <div class="lg:col-span-2 bg-white p-5 rounded-2xl border border-gray-300 shadow-sm">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-bold text-gray-800 text-sm">Grafik Pengaduan Bulanan</h3>
                <select class="text-xs font-semibold border border-gray-300 rounded-lg px-2.5 py-1 bg-gray-50 text-gray-700 focus:outline-none">
                    <option>Tahun 2026</option>
                </select>
            </div>
            <div class="h-64">
                <canvas id="monthlyChart"></canvas>
            </div>
        </div>

        <!-- Donut Chart (Kategori Pengaduan) -->
        <div class="bg-white p-5 rounded-2xl border border-gray-300 shadow-sm">
            <h3 class="font-bold text-gray-800 text-sm mb-4">Kategori Pengaduan Terbanyak</h3>
            <div class="h-64 flex items-center justify-center">
                <canvas id="categoryChart"></canvas>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
<script>
    // Grafik Bulanan (Bar Chart)
    const ctxBar = document.getElementById('monthlyChart').getContext('2d');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
            datasets: [{
                data: [12, 18, 21, 25, 31, 28, 34],
                backgroundColor: '#3b82f6',
                borderRadius: 4,
                barThickness: 22,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, max: 40, ticks: { stepSize: 10 } },
                x: { grid: { display: false } }
            }
        }
    });

    // Grafik Kategori (Doughnut Chart)
    const ctxPie = document.getElementById('categoryChart').getContext('2d');
    new Chart(ctxPie, {
        type: 'doughnut',
        data: {
            labels: ['Fasilitas Sekolah 40%', 'Kurikulum 25%', 'Guru 18%', 'Bullying 10%', 'Lainnya 7%'],
            datasets: [{
                data: [40, 25, 18, 10, 7],
                backgroundColor: ['#1d4ed8', '#10b981', '#f59e0b', '#8b5cf6', '#ef4444'],
                borderWidth: 2,
                borderColor: '#ffffff'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                    labels: { boxWidth: 10, font: { size: 9, weight: 'bold' } }
                }
            },
            cutout: '60%'
        }
    });
</script>
@endpush

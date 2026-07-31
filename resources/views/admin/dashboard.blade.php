@extends('layouts.app')

@section('title', 'Dashboard - Pengaduan Sekolah')

@section('content')
    <!-- Header Welcome -->
    <div class="mb-6">
        <h1 class="text-2xl font-serif font-bold text-gray-800">Selamat Datang, Admin</h1>
        <p class="text-gray-600 text-sm mt-1">Kelola pengaduan sekolah dengan mudah dan efisien.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        <!-- Total Pengaduan -->
        <div class="bg-white p-5 rounded-2xl border border-gray-300 shadow-sm flex items-center gap-4">
            <div class="p-3 bg-blue-50 rounded-xl text-3xl text-blue-600">
                <i class="fa-solid fa-clipboard-list"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-gray-700 block">Total Pengaduan</span>
                <span class="text-3xl font-extrabold text-gray-900 leading-none">26</span>
                <span class="text-xs text-gray-500 block mt-1">Semua Laporan</span>
            </div>
        </div>

        <!-- Diproses -->
        <div class="bg-white p-5 rounded-2xl border border-gray-300 shadow-sm flex items-center gap-4">
            <div class="p-3 bg-amber-50 rounded-xl text-3xl text-amber-500">
                <i class="fa-solid fa-[#d97706] fa-hourglass-half"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-gray-700 block">Diproses</span>
                <span class="text-3xl font-extrabold text-gray-900 leading-none">6</span>
                <span class="text-xs text-gray-500 block mt-1">Sedang diproses</span>
            </div>
        </div>

        <!-- Selesai -->
        <div class="bg-white p-5 rounded-2xl border border-gray-300 shadow-sm flex items-center gap-4">
            <div class="p-3 bg-emerald-50 rounded-xl text-3xl text-emerald-500">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-gray-700 block">Selesai</span>
                <span class="text-3xl font-extrabold text-gray-900 leading-none">20</span>
                <span class="text-xs text-gray-500 block mt-1">Selesai ditindak lanjuti</span>
            </div>
        </div>

    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Bar Chart (Grafik Bulanan) -->
        <div class="lg:col-span-2 bg-white p-5 rounded-2xl border border-gray-300 shadow-sm">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-bold text-gray-800 text-sm">Grafik Pengaduan Bulanan</h3>
                <select class="text-xs font-semibold border border-gray-300 rounded-lg px-2 py-1 bg-gray-50 text-gray-700 focus:outline-none">
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
                borderRadius: 6,
                barThickness: 24,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 40,
                    ticks: { stepSize: 10 }
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });

    // Grafik Kategori (Doughnut Chart)
    const ctxPie = document.getElementById('categoryChart').getContext('2d');
    new Chart(ctxPie, {
        type: 'doughnut',
        data: {
            labels: ['Fasilitas Sekolah (40%)', 'Kurikulum (25%)', 'Guru (18%)', 'Bullying (10%)', 'Lainnya (7%)'],
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
                    labels: {
                        boxWidth: 12,
                        font: { size: 10, weight: 'bold' }
                    }
                }
            },
            cutout: '60%'
        }
    });
</script>
@endpush

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pengaduan Sekolah')</title>
    <!-- Tailwind CSS (via CDN untuk testing / atau gunakan @vite(['resources/css/app.css', 'resources/js/app.js'])) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-gradient-to-b from-[#0f2852] to-[#1e4d8c] text-white flex flex-col justify-between p-4 flex-shrink-0">
            <div>
                <!-- Logo & Brand -->
                <div class="flex items-center gap-3 px-2 py-4 mb-6">
                    <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center font-bold text-blue-900 border-2 border-white shadow">
                        <i class="fa-solid font-bold text-xl">P</i>
                    </div>
                    <div class="leading-tight">
                        <h1 class="font-extrabold tracking-wider text-sm">PENGADUAN</h1>
                        <h2 class="font-bold tracking-wider text-xs text-gray-200">SEKOLAH</h2>
                    </div>
                </div>

                <!-- Navigation Links -->
                <nav class="space-y-3">
                    <a href="{{ route('halaman.admin') }}"
                       class="flex items-center gap-4 px-4 py-3 rounded-full font-semibold italic text-sm transition {{ request()->routeIs('dashboard') ? 'bg-[#184a8c] shadow-lg text-white' : 'text-gray-300 hover:bg-white/10' }}">
                        <i class="fa-solid font-bold text-lg fa-table-cells-large"></i>
                        <span>DASHBOARD</span>
                    </a>

                    <a href="{{ route('halaman.kategori')}}"
                       class="flex items-center gap-4 px-4 py-3 rounded-full font-semibold italic text-sm text-gray-300 hover:bg-white/10 transition">
                        <i class="fa-regular text-lg fa-folder-closed"></i>
                        <span>KATEGORI</span>
                    </a>

                    <a href="{{route('halaman.pengguna')}}"
                       class="flex items-center gap-4 px-4 py-3 rounded-full font-semibold italic text-sm text-gray-300 hover:bg-white/10 transition">
                        <i class="fa-regular text-lg fa-user"></i>
                        <span>DATA USER</span>
                    </a>

                <a href="{{route('halaman.laporan')}}"
                       class="flex items-center gap-4 px-4 py-3 rounded-full font-semibold italic text-sm text-gray-300 hover:bg-white/10 transition">
                        <i class="fa-regular text-lg fa-file-lines"></i>
                        <span>DAFTAR PENGADUAN</span>
                    </a>
                </nav>
            </div>

            <!-- Logout Button -->
            <div class="mb-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-start gap-4 px-4 py-2.5 rounded-full bg-[#133766] hover:bg-[#0c2545] font-semibold italic text-sm text-white transition border border-white/20">
                        <div class="bg-red-500 p-1.5 rounded-md flex items-center justify-center">
                            <i class="fa-solid fa-arrow-right-from-bracket text-xs"></i>
                        </div>
                        <span>LOGOUT</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- MAIN CONTENT AREA -->
        <div class="flex-1 flex flex-col overflow-y-auto">

            <!-- TOP NAVBAR -->
            <header class="bg-white border-b border-gray-200 px-8 py-3 flex items-center justify-between">
                <!-- Date Filter -->
                <div class="flex items-center gap-3 text-gray-700 font-bold italic text-sm bg-gray-50 px-3 py-1.5 rounded-lg border border-gray-200 cursor-pointer">
                    <i class="fa-regular fa-calendar-days text-xl text-black"></i>
                    <span>July 29,2026</span>
                    <i class="fa-solid fa-chevron-down text-xs ml-1"></i>
                </div>

                <!-- User Profile -->
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center border border-blue-300 overflow-hidden">
                        <i class="fa-solid fa-user-circle text-3xl text-blue-500"></i>
                    </div>
                    <span class="font-bold italic text-gray-800 text-sm">admin</span>
                </div>
            </header>

            <!-- PAGE CONTENT -->
            <main class="p-8 flex-1">
                @yield('content')
            </main>

        </div>
    </div>

    @stack('scripts')
</body>
</html>

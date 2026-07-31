<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Siswa - Pengaduan Sekolah')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">

        <!-- SIDEBAR SISWA -->
        <aside class="w-64 bg-gradient-to-b from-[#0a1e3f] via-[#0f2d5e] to-[#1d4d8c] text-white flex flex-col justify-between p-4 flex-shrink-0">
            <div>
                <!-- Logo & Brand -->
                <div class="flex items-center gap-3 px-2 py-4 mb-6">
                    <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center font-bold text-blue-900 border-2 border-white shadow">
                        <i class="fa-solid text-xl">P</i>
                    </div>
                    <div class="leading-tight">
                        <h1 class="font-extrabold tracking-wider text-sm">PENGADUAN</h1>
                        <h2 class="font-bold tracking-wider text-xs text-gray-200">SEKOLAH</h2>
                    </div>
                </div>

                <!-- Navigation Links untuk Siswa -->
                <nav class="space-y-3">
                    <!-- Dashboard -->
                    <a href="#"
                       class="flex items-center gap-4 px-4 py-2.5 rounded-full font-bold italic text-xs transition {{ request()->is('siswa/dashboard*') ? 'bg-[#184a8c] shadow-lg text-white' : 'text-gray-300 hover:bg-white/10' }}">
                        <i class="fa-solid fa-table-cells-large text-base"></i>
                        <span>DASHBOARD</span>
                    </a>

                    <!-- Kategori -->
                    <a href="#"
                       class="flex items-center gap-4 px-4 py-2.5 rounded-full font-bold italic text-xs text-gray-300 hover:bg-white/10 transition">
                        <i class="fa-regular fa-folder-closed text-base"></i>
                        <span>KATEGORI</span>
                    </a>

                    <!-- Riwayat -->
                    <a href="#"
                       class="flex items-center gap-4 px-4 py-2.5 rounded-full font-bold italic text-xs text-gray-300 hover:bg-white/10 transition">
                        <i class="fa-regular fa-clock text-base"></i>
                        <span>RIWAYAT</span>
                    </a>
                </nav>
            </div>

            <!-- Logout Button -->
            <div class="mb-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-start gap-4 px-4 py-2 rounded-full bg-[#133766] hover:bg-[#0c2545] font-bold italic text-xs text-white transition border border-white/20">
                        <div class="bg-red-500 p-1.5 rounded-md flex items-center justify-center">
                            <i class="fa-solid fa-arrow-right-from-bracket text-xs"></i>
                        </div>
                        <span>LOGOUT</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- MAIN CONTENT AREA -->
        <div class="flex-1 flex flex-col overflow-y-auto bg-white">

            <!-- TOP NAVBAR -->
            <header class="bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between">
                <!-- Date Filter / Indicator -->
                <div class="flex items-center gap-3 text-slate-800 font-bold italic text-xs bg-gray-50 px-3 py-1.5 rounded-lg border border-gray-200 cursor-pointer shadow-sm">
                    <i class="fa-regular fa-calendar-days text-lg text-slate-800"></i>
                    <span>July 29,2026</span>
                    <i class="fa-solid fa-chevron-down text-[10px] ml-1"></i>
                </div>

                <!-- User Profile (SISWA) -->
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center border border-blue-300 overflow-hidden shadow-sm">
                        <i class="fa-solid fa-user-circle text-3xl text-blue-600"></i>
                    </div>
                    <span class="font-black italic text-slate-900 text-xs tracking-wider">SISWA</span>
                </div>
            </header>

            <!-- PAGE CONTENT -->
            <main class="p-8 flex-1 flex flex-col items-center justify-center">
                @yield('content')
            </main>

        </div>
    </div>

    @stack('scripts')
</body>
</html>
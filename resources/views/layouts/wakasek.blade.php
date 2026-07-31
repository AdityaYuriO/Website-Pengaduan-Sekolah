<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wakasek - Pengaduan Sekolah')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">

        <!-- SIDEBAR WAKASEK -->
        <aside class="w-64 bg-gradient-to-b from-[#0b2246] via-[#10305f] to-[#1a4a8d] text-white flex flex-col justify-between p-4 flex-shrink-0 shadow-xl">
            <div>
                <!-- Logo & Title Header -->
                <div class="flex items-center gap-3 px-2 py-4 mb-6">
                    <div class="w-11 h-11 bg-yellow-400 rounded-full flex items-center justify-center font-bold text-blue-900 border-2 border-white shadow">
                        <i class="fa-solid fa-graduation-cap text-lg text-blue-950"></i>
                    </div>
                    <div class="leading-tight">
                        <h1 class="font-extrabold tracking-wider text-sm italic">PENGADUAN</h1>
                        <h2 class="font-bold tracking-wider text-xs text-gray-200 italic">SEKOLAH</h2>
                    </div>
                </div>

                <!-- Navigation Links Wakasek -->
                <nav class="space-y-3">
                    <a href="{{ route('wakasek.dashboard') }}"
                       class="flex items-center gap-4 px-4 py-3 rounded-full font-bold italic text-xs tracking-wider transition {{ request()->routeIs('wakasek.dashboard') ? 'bg-[#184a8c] shadow-md text-white border border-blue-400/30' : 'text-gray-300 hover:bg-white/10' }}">
                        <i class="fa-solid fa-table-cells-large text-base"></i>
                        <span>DASHBOARD</span>
                    </a>

                    <a href="{{ route('wakasek.pengaduan') }}"
                       class="flex items-center gap-4 px-4 py-3 rounded-full font-bold italic text-xs tracking-wider text-gray-300 hover:bg-white/10 transition">
                        <i class="fa-regular fa-folder-closed text-base"></i>
                        <span>PENGADUAN MASUK</span>
                    </a>

                    <a href="{{ route('wakasek.daftar') }}"
                       class="flex items-center gap-4 px-4 py-3 rounded-full font-bold italic text-xs tracking-wider text-gray-300 hover:bg-white/10 transition">
                        <i class="fa-regular fa-file-lines text-base"></i>
                        <span>DAFTAR PENGADUAN</span>
                    </a>
                </nav>
            </div>

            <!-- Logout -->
            <div class="mb-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-start gap-4 px-4 py-2.5 rounded-full bg-[#133766] hover:bg-[#0c2545] font-bold italic text-xs tracking-wider text-white transition border border-white/20 shadow">
                        <div class="bg-red-500 p-1 rounded flex items-center justify-center">
                            <i class="fa-solid fa-arrow-right-from-bracket text-xs text-white"></i>
                        </div>
                        <span>LOGOUT</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- MAIN CONTENT CONTAINER -->
        <div class="flex-1 flex flex-col overflow-y-auto">

            <!-- TOP NAVBAR WAKASEK -->
            <header class="bg-white border-b border-gray-200 px-8 py-3 flex items-center justify-between shadow-sm">
                <!-- Date Filter -->
                <div class="flex items-center gap-3 text-gray-800 font-bold italic text-sm bg-gray-50 px-3.5 py-1.5 rounded-xl border border-gray-300 cursor-pointer hover:bg-gray-100 transition">
                    <i class="fa-regular fa-calendar-days text-2xl text-black"></i>
                    <span>July 29,2026</span>
                    <i class="fa-solid fa-chevron-down text-xs ml-1 text-gray-600"></i>
                </div>

                <!-- User Profile Wakasek Kurikulum -->
                <div class="flex items-center gap-3 cursor-pointer">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center border border-blue-200 overflow-hidden">
                        <i class="fa-solid fa-user-tie text-2xl text-blue-700"></i>
                    </div>
                    <div class="text-left">
                        <div class="flex items-center gap-1">
                            <span class="font-bold italic text-gray-900 text-sm">Wakasek Kurikulum</span>
                            <i class="fa-solid fa-chevron-down text-xs text-gray-700"></i>
                        </div>
                        <p class="text-xs text-gray-500 font-medium leading-none">Wakilkepala sekolah</p>
                    </div>
                </div>
            </header>

            <!-- CONTENT SLOT -->
            <main class="p-8 flex-1 bg-gray-50">
                @yield('content')
            </main>

        </div>
    </div>

    @stack('scripts')
</body>
</html>

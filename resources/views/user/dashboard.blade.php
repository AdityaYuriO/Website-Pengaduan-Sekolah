<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard User - Pengaduan Sekolah</title>

    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,700&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<div class="user-dashboard">

    {{-- ================= SIDEBAR ================= --}}
    <aside class="sidebar">

        {{-- LOGO --}}
        <div class="sidebar-logo">

            <div class="logo-image">
                {{-- Ganti dengan logo project kamu --}}
                <img src="{{ asset('images/logo-sekolah.png') }}"
                     alt="Logo Sekolah"
                     onerror="this.style.display='none'; this.parentElement.classList.add('logo-fallback');">
                
                <i class="fa-solid fa-school logo-fallback-icon"></i>
            </div>

            <div class="logo-text">
                <span>PENGADUAN</span>
                <span>SEKOLAH</span>
            </div>

        </div>


        {{-- MENU --}}
        <nav class="sidebar-menu">

            <a href="{{ route('user.dashboard') }}"
               class="menu-item active">

                <span class="menu-icon">
                    <i class="fa-solid fa-grip"></i>
                </span>

                <span>DASHBOARD</span>

            </a>


            <a href="#" class="menu-item">

                <span class="menu-icon">
                    <i class="fa-regular fa-folder"></i>
                </span>

                <span>KATEGORI</span>

            </a>


            <a href="#" class="menu-item">

                <span class="menu-icon">
                    <i class="fa-regular fa-clock"></i>
                </span>

                <span>RIWAYAT</span>

            </a>

        </nav>


        {{-- LOGOUT --}}
        <div class="sidebar-bottom">

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="logout-button">

                    <span class="logout-icon">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </span>

                    <span>LOGOUT</span>

                </button>

            </form>

        </div>

    </aside>


    {{-- ================= MAIN ================= --}}
    <main class="main-content">

        {{-- HEADER --}}
        <header class="topbar">

            {{-- DATE --}}
            <div class="date-area">

                <div class="calendar-icon">
                    <i class="fa-regular fa-calendar-days"></i>
                </div>

                <span class="date-text">
                    {{ now()->format('F d, Y') }}
                </span>

                <i class="fa-solid fa-chevron-down date-arrow"></i>

            </div>


            {{-- PROFILE --}}
            <div class="profile-area">

                <div class="profile-avatar">

                    <i class="fa-regular fa-user"></i>

                </div>

                <div class="profile-name">

                    <span>
                        {{ auth()->user()->name ?? 'Sopi love ikbal' }}
                    </span>

                </div>

            </div>

        </header>


        {{-- ================= CONTENT ================= --}}
        <section class="dashboard-content">

            {{-- WELCOME --}}
            <div class="welcome-section">

                <h1>
                    SELAMAT DATANG,
                </h1>

                <h2>
                    {{ strtoupper(auth()->user()->name ?? 'ROBERT WILLIAM') }}!
                </h2>

            </div>


            {{-- STATISTICS --}}
            <div class="stats-wrapper">

                {{-- LAPORAN --}}
                <div class="stat-card">

                    <div class="stat-icon report-icon">

                        <i class="fa-regular fa-clipboard"></i>

                        <span class="check-small">
                            <i class="fa-solid fa-check"></i>
                        </span>

                    </div>

                    <div class="stat-number">
                        {{ $laporanSaya ?? 6 }}
                    </div>

                    <div class="stat-label">
                        Lapor Saya
                    </div>

                </div>


                {{-- MENUNGGU --}}
                <div class="stat-card">

                    <div class="stat-icon waiting-icon">

                        <i class="fa-regular fa-hourglass-half"></i>

                    </div>

                    <div class="stat-number">
                        {{ $menunggu ?? 4 }}
                    </div>

                    <div class="stat-label">
                        Menunggu
                    </div>

                </div>


                {{-- SELESAI --}}
                <div class="stat-card">

                    <div class="stat-icon done-icon">

                        <div class="done-circle">
                            <i class="fa-solid fa-check"></i>
                        </div>

                    </div>

                    <div class="stat-number">
                        {{ $selesai ?? 2 }}
                    </div>

                    <div class="stat-label">
                        Selesai
                    </div>

                </div>

            </div>


            {{-- BUTTON --}}
            <div class="complaint-area">

                <a href="#" class="complaint-button">

                    <span>+</span>

                    Buat Pengaduan

                </a>

            </div>


            {{-- FOOTER TEXT --}}
            <div class="dashboard-motto">

                Mari Bersama Menciptakan Sekolah Yang Lebih Baik

            </div>

        </section>

    </main>

</div>

</body>
</html>
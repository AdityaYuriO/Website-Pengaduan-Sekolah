<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Wakasek Kurikulum - Pengaduan Sekolah</title>

    <link rel="stylesheet" href="{{ asset('css/wakasek.css') }}">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,700&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<div class="user-dashboard">

    {{-- ================= SIDEBAR ================= --}}
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div class="logo-image">
                <img src="{{ asset('images/logo-sekolah.png') }}" alt="Logo Sekolah" onerror="this.style.display='none'; this.parentElement.classList.add('logo-fallback');">
                <i class="fa-solid fa-school logo-fallback-icon"></i>
            </div>
        </div>

        <div class="sidebar-divider"></div>

        <div class="sidebar-title">
            <span>PENGADUAN</span>
            <span>SEKOLAH</span>
        </div>

        <nav class="sidebar-menu">
            <a href="{{ route('wakasek.dashboard') }}" class="menu-item active">
                <span class="menu-icon">
                    <i class="fa-solid fa-grip"></i>
                </span>
                <span>DASHBOARD</span>
            </a>

            <a href="{{ route('wakasek.pengaduan') }}" class="menu-item">
                <span class="menu-icon">
                    <i class="fa-solid fa-inbox"></i>
                </span>
                <span>PENGADUAN MASUK</span>
            </a>

            <a href="{{ route('wakasek.daftar') }}" class="menu-item">
                <span class="menu-icon">
                    <i class="fa-regular fa-file-lines"></i>
                </span>
                <span>DAFTAR PENGADUAN</span>
            </a>

            <a href="#" class="menu-item">
                <span class="menu-icon">
                    <i class="fa-regular fa-clock"></i>
                </span>
                <span>RIWAYAT</span>
            </a>
        </nav>

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

        {{-- TOPBAR --}}
        <header class="topbar">
            <div class="topbar-left">
                <span class="date-text">July 29, 2026</span>
            </div>
            <div class="topbar-right">
                <span class="school-title">PENGADUAN SEKOLAH</span>
            </div>
        </header>

        {{-- ================= CONTENT ================= --}}
        <section class="dashboard-content">

            {{-- WELCOME --}}
            <div class="welcome-section">
                <h1>Selamat Datang, Wakasek {{ $user->name }}</h1>
                <p>Berikut ringkasan pengaduan pada bidang kurikulum yang perlu anda tinjau.</p>
            </div>

            {{-- STATS - 3 CARD --}}
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon report">
                        <i class="fa-regular fa-clipboard"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Total Pengaduan</span>
                        <span class="stat-number">26</span>
                        <span class="stat-desc">Semua Laporan</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon process">
                        <i class="fa-regular fa-hourglass-half"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Diproses</span>
                        <span class="stat-number">6</span>
                        <span class="stat-desc">Sedang diproses</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon done">
                        <i class="fa-regular fa-circle-check"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Selesai</span>
                        <span class="stat-number">20</span>
                        <span class="stat-desc">Selesai ditindak lanjut</span>
                    </div>
                </div>
            </div>

            {{-- CHART & CATEGORY --}}
            <div class="dashboard-bottom">

                {{-- GRAFIK --}}
                <div class="chart-card">
                    <div class="chart-header">
                        <h3>Grafik Pengaduan Bulanan</h3>
                        <select>
                            <option>TAHUN 2026</option>
                        </select>
                    </div>
                    <div class="bar-chart">
                        <div class="bar-item">
                            <div class="bar" style="height: 25px;"></div>
                            <span>Jan</span>
                        </div>
                        <div class="bar-item">
                            <div class="bar" style="height: 35px;"></div>
                            <span>Feb</span>
                        </div>
                        <div class="bar-item">
                            <div class="bar" style="height: 20px;"></div>
                            <span>Mar</span>
                        </div>
                        <div class="bar-item">
                            <div class="bar" style="height: 45px;"></div>
                            <span>Apr</span>
                        </div>
                        <div class="bar-item">
                            <div class="bar" style="height: 30px;"></div>
                            <span>Mei</span>
                        </div>
                        <div class="bar-item">
                            <div class="bar" style="height: 38px;"></div>
                            <span>Jun</span>
                        </div>
                        <div class="bar-item">
                            <div class="bar active" style="height: 50px;"></div>
                            <span>Jul</span>
                        </div>
                    </div>
                    <div class="chart-labels">
                        <span>40</span>
                        <span>30</span>
                        <span>20</span>
                        <span>10</span>
                        <span>0</span>
                    </div>
                </div>

                {{-- KATEGORI TERBANYAK --}}
                <div class="category-card">
                    <h3>Kategori Pengaduan Terbanyak</h3>
                    <div class="category-content">
                        <div class="donut">
                            <div class="donut-center">
                                <span>100%</span>
                            </div>
                        </div>
                        <div class="category-list">
                            <div>
                                <span class="dot blue"></span>
                                <span>Fasilitas Sekolah</span>
                                <b>40%</b>
                            </div>
                            <div>
                                <span class="dot green"></span>
                                <span>Kurikulum</span>
                                <b>25%</b>
                            </div>
                            <div>
                                <span class="dot yellow"></span>
                                <span>Guru</span>
                                <b>18%</b>
                            </div>
                            <div>
                                <span class="dot red"></span>
                                <span>Bullying</span>
                                <b>10%</b>
                            </div>
                            <div>
                                <span class="dot purple"></span>
                                <span>Lainnya</span>
                                <b>7%</b>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>

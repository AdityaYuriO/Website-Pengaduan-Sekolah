<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengaduan - Wakasek Kurikulum</title>

    <link rel="stylesheet" href="{{ asset('css/daftar.css') }}">

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
            <a href="{{ route('wakasek.dashboard') }}" class="menu-item">
                <span class="menu-icon">
                    <i class="fa-solid fa-grip"></i>
                </span>
                <span>DASHBOARD</span>
            </a>

            <a href="{{ route('wakasek.masuk') }}" class="menu-item">
                <span class="menu-icon">
                    <i class="fa-solid fa-inbox"></i>
                </span>
                <span>PENGADUAN MASUK</span>
            </a>

            <a href="{{ route('wakasek.daftar') }}" class="menu-item active">
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
            <form method="POST" action="#">
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
                <h1 class="page-title">Daftar Pengaduan</h1>
            </div>
            <div class="topbar-right">
                <span class="date-text">July 29, 2026</span>
                <span class="school-title">PENGADUAN SEKOLAH</span>
            </div>
        </header>

        {{-- ================= CONTENT ================= --}}
        <section class="dashboard-content">

            {{-- DESKRIPSI --}}
            <div class="page-header">
                <p>Daftar seluruh pengaduan yang telah masuk dan diproses.</p>
            </div>

            {{-- STATS ROW 1 --}}
            <div class="stats-row">
                <div class="stat-card stat-menunggu">
                    <div class="stat-icon">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Menunggu ACC</span>
                        <span class="stat-number">12</span>
                        <span class="stat-desc">Perlu persetujuan</span>
                    </div>
                </div>

                <div class="stat-card stat-total">
                    <div class="stat-icon">
                        <i class="fa-regular fa-clipboard"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Total Pengaduan</span>
                        <span class="stat-number">30</span>
                        <span class="stat-desc">Semua waktu</span>
                    </div>
                </div>
            </div>

            {{-- STATS ROW 2 --}}
            <div class="stats-row stats-row-3">
                <div class="stat-card stat-menunggu">
                    <div class="stat-icon">
                        <i class="fa-regular fa-hourglass-half"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Menunggu ACC</span>
                        <span class="stat-number">12</span>
                        <span class="stat-desc">Perlu persetujuan</span>
                    </div>
                </div>

                <div class="stat-card stat-selesai">
                    <div class="stat-icon">
                        <i class="fa-regular fa-circle-check"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Sudah Di-ACC</span>
                        <span class="stat-number">18</span>
                        <span class="stat-desc">Disetujui</span>
                    </div>
                </div>

                <div class="stat-card stat-total">
                    <div class="stat-icon">
                        <i class="fa-regular fa-clipboard"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Total Pengaduan</span>
                        <span class="stat-number">30</span>
                        <span class="stat-desc">Semua waktu</span>
                    </div>
                </div>
            </div>

            {{-- SEARCH & FILTER --}}
            <div class="toolbar">
                <div class="search-box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Cari pengaduan...">
                </div>
                <div class="filter-group">
                    <select>
                        <option>Semua Status</option>
                    </select>
                    <select>
                        <option>Semua Kategori</option>
                    </select>
                    <select>
                        <option>Semua Jenis Pelapor</option>
                    </select>
                </div>
            </div>

            {{-- TABLE --}}
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Pelapor</th>
                            <th>Jenis Pelapor</th>
                            <th>Kategori</th>
                            <th>Judul Pengaduan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data akan diisi dari database -->
                    </tbody>
                </table>

                {{-- EMPTY STATE --}}
                <div class="empty-state">
                    <i class="fa-regular fa-inbox"></i>
                    <p>Belum ada daftar pengaduan</p>
                    <span>Semua pengaduan akan muncul di sini</span>
                </div>
            </div>

            {{-- PAGINATION --}}
            <div class="pagination-section">
                <div class="pagination-info">
                    <span>Menampilkan 1 - 10 dari 30 data</span>
                </div>
                <div class="pagination-controls">
                    <button class="page-btn prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn next"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>

        </section>

    </main>

</div>

</body>
</html>
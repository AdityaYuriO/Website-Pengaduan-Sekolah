<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat - Pengaduan Sekolah</title>

    <link rel="stylesheet" href="{{ asset('css/riwayat.css') }}">

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
            <a href="#" class="menu-item">
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

            <a href="#" class="menu-item active">
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
                <h1 class="page-title">RIWAYAT</h1>
                <span class="page-date">July 29, 2026</span>
            </div>
            <div class="topbar-right">
                <span class="school-title">PENGADUAN SEKOLAH</span>
            </div>
        </header>

        {{-- ================= CONTENT ================= --}}
        <section class="dashboard-content">

            {{-- DESKRIPSI --}}
            <div class="page-header">
                <p>Daftar seluruh laporan yang telah diajukan beserta status penanganannya secara real-time</p>
            </div>

            {{-- GARIS PEMISAH --}}
            <div class="section-divider"></div>

            {{-- SEARCH --}}
            <div class="search-container">
                <div class="search-box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search...">
                </div>
            </div>

            {{-- TABLE --}}
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data akan diisi dari database -->
                    </tbody>
                </table>
            </div>

        </section>

    </main>

</div>

</body>
</html>
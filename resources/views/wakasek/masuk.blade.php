<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masuk - Wakasek Kurikulum</title>

    <link rel="stylesheet" href="{{ asset('css/masuk.css') }}">

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

            <a href="{{ route('wakasek.pengaduan') }}" class="menu-item active">
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
                <div class="breadcrumb">
                    <span class="breadcrumb-current">Pengaduan Masuk</span>
                </div>
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
                <p>Daftar pengaduan masuk yang perlu di verifikasi dan di proses.</p>
            </div>

            {{-- SEARCH --}}
            <div class="toolbar">
                <div class="search-box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Cari pengaduan...">
                </div>
            </div>

            {{-- TABLE KOSONG --}}
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
                    <p>Belum ada pengaduan masuk</p>
                    <span>Semua pengaduan akan muncul di sini</span>
                </div>
            </div>

            {{-- =========================================================
                 DETAIL PENGADUAN - KOSONG
                 ========================================================= --}}

            {{-- DIVIDER --}}
            <div class="section-divider"></div>

            {{-- BREADCRUMB DETAIL --}}
            <div class="detail-breadcrumb">
                <a href="#" class="breadcrumb-link">Pengaduan Masuk</a>
                <span class="breadcrumb-separator">></span>
                <span class="breadcrumb-current">Detail Pengaduan</span>
            </div>

            {{-- DETAIL SECTION KOSONG --}}
            <div class="detail-section">

                {{-- JUDUL --}}
                <h2 class="section-title">Detail Pengaduan</h2>

                {{-- INFO PENGADUAN KOSONG --}}
                <div class="detail-card">
                    <div class="detail-grid">
                        <div class="detail-item">
                            <span class="detail-label">No. Pengaduan</span>
                            <span class="detail-value">-</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Kategori</span>
                            <span class="detail-value">-</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Diajukan Oleh</span>
                            <span class="detail-value">-</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Tanggal Pengaduan</span>
                            <span class="detail-value">-</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Jenis Pelapor</span>
                            <span class="detail-value">-</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">NIS</span>
                            <span class="detail-value">-</span>
                        </div>
                    </div>
                </div>

                {{-- ISI PENGADUAN KOSONG --}}
                <div class="detail-card">
                    <h3 class="card-subtitle">Isi Pengaduan</h3>
                    <div class="detail-content">
                        <span class="detail-label">Judul Pengaduan</span>
                        <p class="detail-text">-</p>
                    </div>
                    <div class="detail-content">
                        <span class="detail-label">Deskripsi Pengaduan</span>
                        <p class="detail-text">-</p>
                    </div>
                </div>

                {{-- BUKTI PENDUKUNG KOSONG --}}
                <div class="detail-card">
                    <h3 class="card-subtitle">Bukti Pendukung</h3>
                    <div class="bukti-empty">
                        <i class="fa-regular fa-image"></i>
                        <p>Belum ada bukti pendukung</p>
                    </div>
                </div>

                {{-- RIWAYAT PENGADUAN KOSONG --}}
                <div class="detail-card">
                    <h3 class="card-subtitle">Riwayat Pengaduan</h3>
                    <div class="riwayat-empty">
                        <i class="fa-regular fa-clock"></i>
                        <p>Belum ada riwayat pengaduan</p>
                    </div>
                </div>

                {{-- TOMBOL AKSI --}}
                <div class="action-buttons">
                    <a href="#" class="btn-back">
                        <i class="fa-solid fa-arrow-left"></i>
                        Kembali ke Daftar
                    </a>
                    <button class="btn-approve">
                        <i class="fa-regular fa-circle-check"></i>
                        ACC Pengaduan
                    </button>
                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>

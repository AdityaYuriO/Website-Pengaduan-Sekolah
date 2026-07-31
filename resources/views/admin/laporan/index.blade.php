<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan Sekolah - Laporan Pengaduan</title>
    <link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="admin-wrapper">
        <!-- ========== SIDEBAR ========== -->
        <aside class="sidebar">
            <div class="sidebar-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <div>
                    <strong>PENGADUAN</strong>
                    <strong>SEKOLAH</strong>
                </div>
            </div>

            <nav class="sidebar-menu">
                <a href="#" class="menu-item">
                    <span>📊</span>
                    <strong>DASHBOARD</strong>
                </a>
                <a href="#" class="menu-item">
                    <span>📂</span>
                    <strong>KATEGORI</strong>
                </a>
                <a href="#" class="menu-item">
                    <span>👥</span>
                    <strong>DATA USER</strong>
                </a>
                <a href="#" class="menu-item active">
                    <span>📋</span>
                    <strong>DAFTAR PENGADUAN</strong>
                </a>
            </nav>

            <form class="logout-form">
                <button type="submit" class="logout-button">
                    <span>🚪</span>
                    LOGOUT
                </button>
            </form>
        </aside>

        <!-- ========== MAIN CONTENT ========== -->
        <main class="main-content">
            <!-- Topbar -->
            <header class="topbar">
                <div class="date-info">
                    <span class="calendar-icon">📅</span>
                    <strong>July 29, 2026</strong>
                </div>
                <div class="admin-info">
                    <strong>admin</strong>
                    <span class="admin-icon">👤</span>
                </div>
            </header>

            <!-- Content -->
            <section class="dashboard-content">
                <!-- Header -->
                <div class="page-header">
                    <h1>Laporan Pengaduan</h1>
                    <p>Kelola dan cetak pengaduan sekolah.</p>
                </div>

                <!-- Stats -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon report">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="stat-info">
                            <span>TOTAL PENGADUAN</span>
                            <h2>226</h2>
                            <small>Semua Laporan</small>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon process">
                            <i class="fas fa-spinner"></i>
                        </div>
                        <div class="stat-info">
                            <span>DIPROSES</span>
                            <h2>200</h2>
                            <small>Sedang diproses</small>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon done">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-info">
                            <span>SELESAI</span>
                            <h2>26</h2>
                            <small>Laporan Selesai</small>
                        </div>
                    </div>
                </div>

                <!-- Filter Form -->
                <div class="filter-container">
                    <form class="filter-form">
                        <div class="filter-row">
                            <div class="filter-group">
                                <label>Tanggal Mulai</label>
                                <input type="text" value="01/06/2026">
                            </div>
                            <div class="filter-group">
                                <label>Tanggal Akhir</label>
                                <input type="text" value="29/07/2026">
                            </div>
                            <div class="filter-group">
                                <label>Kategori</label>
                                <select>
                                    <option>Semua Kategori</option>
                                </select>
                            </div>
                            <div class="filter-group">
                                <label>Status</label>
                                <select>
                                    <option>Semua Status</option>
                                </select>
                            </div>
                            <div class="filter-group">
                                <label>&nbsp;</label>
                                <button type="submit" class="btn-print">
                                    <i class="fas fa-print"></i>
                                    Cetak Laporan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Pelapor</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data kosong, akan diisi dari database nanti -->
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
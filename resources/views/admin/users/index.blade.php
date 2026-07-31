<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan Sekolah - Kelola Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
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
                <a href="" class="menu-item active">
                    <span>👥</span>
                    <strong>Kelola Pengguna</strong>
                </a>
                <a href="#" class="menu-item">
                    <span>📋</span>
                    <strong>Kelola Pengaduan</strong>
                </a>
                <a href="#" class="menu-item">
                    <span>📊</span>
                    <strong>Laporan</strong>
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
                <div class="date-area">
                    <span class="calendar-icon">📅</span>
                    <strong>Selasa, 29 Juli 2026</strong>
                </div>
                <div class="admin-profile">
                    <strong>Admin</strong>
                    <div class="admin-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <section class="dashboard-content">
                <!-- Header -->
                <div class="page-header">
                    <h1>Kelola Pengguna</h1>
                    <p>Kelola akun pengguna sistem</p>
                </div>

                <!-- Stats -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon report">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <span>TOTAL PENGGUNA</span>
                            <h2>16</h2>
                            <small>Semua akun tersebut</small>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon process">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="stat-info">
                            <span>ADMIN</span>
                            <h2>10</h2>
                            <small>Akun admin</small>
                        </div>
                    </div>
                </div>

                <!-- Toolbar -->
                <div class="toolbar">
                    <button class="btn-add">
                        <i class="fas fa-plus"></i>
                        Tambah User
                    </button>
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Cari pengguna...">
                    </div>
                </div>

                <!-- Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>USERNAME</th>
                                <th>ID</th>
                                <th>ROLE</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Anisa Kaila</td>
                                <td>133457876543</td>
                                <td><span class="badge badge-siswa">SISWA</span></td>
                                <td>
                                    <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Sopiyanti</td>
                                <td>133457876543</td>
                                <td><span class="badge badge-siswa">SISWA</span></td>
                                <td>
                                    <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Melly Amelia</td>
                                <td>133457876543</td>
                                <td><span class="badge badge-admin">ADMIN</span></td>
                                <td>
                                    <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Zannah</td>
                                <td>133457876543</td>
                                <td><span class="badge badge-kepsek">KEPSEK</span></td>
                                <td>
                                    <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Intan Alif</td>
                                <td>133457876543</td>
                                <td><span class="badge badge-wakasek">WAKASEK</span></td>
                                <td>
                                    <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>

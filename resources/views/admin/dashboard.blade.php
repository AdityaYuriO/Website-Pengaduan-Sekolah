```blade
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - Pengaduan Sekolah</title>

    <link rel="stylesheet"
          href="{{ asset('css/admin.css') }}">

</head>

<body>

<div class="admin-wrapper">


    <!-- ================= SIDEBAR ================= -->

    <aside class="sidebar">

        <div class="sidebar-logo">

            <img
                src="https://cdn.phototourl.com/free/2026-07-28-7540ffdc-e2ba-4015-a474-4cacaa2dd3b4.jpg"
                alt="Logo Sekolah"
            >

            <div>
                <strong>PENGADUAN</strong>
                <strong>SEKOLAH</strong>
            </div>

        </div>


        <nav class="sidebar-menu">

            <!-- DASHBOARD -->
            <a href="{{ url('/admin/dashboard') }}"
               class="menu-item active">

                <span>▦</span>

                <strong>DASHBOARD</strong>

            </a>


            <!-- KATEGORI -->
            <a href="{{ url('/admin/kategori') }}"
               class="menu-item">

                <span>▱</span>

                <strong>KATEGORI</strong>

            </a>


            <!-- DATA USER -->
            <a href="{{ url('/admin/users') }}"
               class="menu-item">

                <span>♙</span>

                <strong>DATA USER</strong>

            </a>


            <!-- PENGADUAN -->
            <a href="{{ url('/admin/pengaduan') }}"
               class="menu-item">

                <span>▤</span>

                <strong>PENGADUAN</strong>

            </a>

        </nav>


        <form method="POST" action="{{ route('logout') }}"
              class="logout-form">

            @csrf

            <button type="submit"
                    class="logout-button">

                <span>↪</span>

                LOGOUT

            </button>

        </form>

    </aside>



    <!-- ================= MAIN ================= -->

    <main class="main-content">


        <!-- TOPBAR -->

        <header class="topbar">

            <div class="date-area">

                <span class="calendar-icon">▣</span>

                <strong>
                    {{ now()->format('F d, Y') }}
                </strong>

                <span>⌄</span>

            </div>


            <!-- PROFILE ADMIN -->

            <a href="{{ url('/admin/profile') }}"
               class="admin-profile">

                <div class="admin-avatar">

                    <span>👨🏻‍💼</span>

                </div>

                <strong>
                    {{ $user->name }}
                </strong>

            </a>

        </header>



        <!-- CONTENT -->

        <section class="dashboard-content">


            <!-- WELCOME -->

            <div class="welcome">

                <h1>
                    Selamat Datang,
                    {{ $user->name }}
                </h1>

                <p>
                    Kelola pengaduan sekolah dengan mudah dan efisien.
                </p>

            </div>



            <!-- ================= STATISTICS ================= -->

            <div class="stats-grid">


                <!-- TOTAL PENGADUAN -->

                <a href="{{ url('/admin/pengaduan') }}"
                   class="stat-card">

                    <div class="stat-icon report">
                        📋
                    </div>

                    <div class="stat-info">

                        <span>Total Pengaduan</span>

                        <h2>
                            {{ $totalPengaduan ?? 26 }}
                        </h2>

                        <small>
                            Semua laporan
                        </small>

                    </div>

                </a>



                <!-- DIPROSES -->

                <a href="{{ url('/admin/pengaduan?status=diproses') }}"
                   class="stat-card">

                    <div class="stat-icon process">
                        ⏳
                    </div>

                    <div class="stat-info">

                        <span>Diproses</span>

                        <h2>
                            {{ $totalDiproses ?? 6 }}
                        </h2>

                        <small>
                            Sedang diproses
                        </small>

                    </div>

                </a>



                <!-- SELESAI -->

                <a href="{{ url('/admin/pengaduan?status=selesai') }}"
                   class="stat-card">

                    <div class="stat-icon done">
                        ✓
                    </div>

                    <div class="stat-info">

                        <span>Selesai</span>

                        <h2>
                            {{ $totalSelesai ?? 20 }}
                        </h2>

                        <small>
                            Selesai ditindaklanjuti
                        </small>

                    </div>

                </a>


            </div>



            <!-- ================= CHART ================= -->

            <div class="dashboard-bottom">


                <!-- BAR CHART -->

                <div class="chart-card">

                    <div class="chart-header">

                        <div>

                            <h3>
                                Grafik Pengaduan Bulanan
                            </h3>

                            <p>
                                Jumlah pengaduan
                            </p>

                        </div>


                        <select>

                            <option>
                                Tahun {{ now()->year }}
                            </option>

                        </select>

                    </div>


                    <div class="bar-chart">


                        <a href="{{ url('/admin/pengaduan?bulan=1') }}"
                           class="bar-item">

                            <div class="bar"
                                 style="height:35%;">
                            </div>

                            <span>Jan</span>

                        </a>


                        <a href="{{ url('/admin/pengaduan?bulan=2') }}"
                           class="bar-item">

                            <div class="bar"
                                 style="height:50%;">
                            </div>

                            <span>Feb</span>

                        </a>


                        <a href="{{ url('/admin/pengaduan?bulan=3') }}"
                           class="bar-item">

                            <div class="bar"
                                 style="height:60%;">
                            </div>

                            <span>Mar</span>

                        </a>


                        <a href="{{ url('/admin/pengaduan?bulan=4') }}"
                           class="bar-item">

                            <div class="bar"
                                 style="height:70%;">
                            </div>

                            <span>Apr</span>

                        </a>


                        <a href="{{ url('/admin/pengaduan?bulan=5') }}"
                           class="bar-item">

                            <div class="bar"
                                 style="height:88%;">
                            </div>

                            <span>Mei</span>

                        </a>


                        <a href="{{ url('/admin/pengaduan?bulan=6') }}"
                           class="bar-item">

                            <div class="bar"
                                 style="height:78%;">
                            </div>

                            <span>Jun</span>

                        </a>


                        <a href="{{ url('/admin/pengaduan?bulan=7') }}"
                           class="bar-item">

                            <div class="bar"
                                 style="height:95%;">
                            </div>

                            <span>Jul</span>

                        </a>


                    </div>

                </div>



                <!-- CATEGORY -->

                <a href="{{ url('/admin/kategori') }}"
                   class="category-card">

                    <h3>
                        Kategori Pengaduan Terbanyak
                    </h3>


                    <div class="category-content">


                        <div class="donut">

                            <div class="donut-center">
                                100%
                            </div>

                        </div>


                        <div class="category-list">


                            <div>

                                <span class="dot blue"></span>

                                Fasilitas Sekolah

                                <b>40%</b>

                            </div>


                            <div>

                                <span class="dot green"></span>

                                Kebersihan

                                <b>25%</b>

                            </div>


                            <div>

                                <span class="dot yellow"></span>

                                Guru

                                <b>15%</b>

                            </div>


                            <div>

                                <span class="dot red"></span>

                                Bullying

                                <b>10%</b>

                            </div>


                            <div>

                                <span class="dot purple"></span>

                                Lainnya

                                <b>10%</b>

                            </div>


                        </div>

                    </div>

                </a>


            </div>


        </section>

    </main>

</div>


</body>

</html>

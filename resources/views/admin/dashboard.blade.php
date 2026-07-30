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

            <a href="{{ url('/admin/dashboard') }}"
               class="menu-item active">

                <span>▦</span>

                <strong>DASHBOARD</strong>

            </a>


            <a href="#" class="menu-item">

                <span>▱</span>

                <strong>KATEGORI</strong>

            </a>


            <a href="#" class="menu-item">

                <span>♙</span>

                <strong>DATA USER</strong>

            </a>


            <a href="#" class="menu-item">

                <span>▤</span>

                <strong>PENGADUAN</strong>

            </a>

        </nav>


        <form method="POST" action="{{ route('logout') }}"
              class="logout-form">

            @csrf

            <button type="submit" class="logout-button">

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


            <div class="admin-profile">

                <div class="admin-avatar">

                    <span>👨🏻‍💼</span>

                </div>

                <strong>
                    {{ $user->name }}
                </strong>

            </div>

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


                <div class="stat-card">

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

                </div>



                <div class="stat-card">

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

                </div>



                <div class="stat-card">

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

                </div>


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

                        <div class="bar-item">

                            <div class="bar"
                                 style="height:35%;">
                            </div>

                            <span>Jan</span>

                        </div>


                        <div class="bar-item">

                            <div class="bar"
                                 style="height:50%;">
                            </div>

                            <span>Feb</span>

                        </div>


                        <div class="bar-item">

                            <div class="bar"
                                 style="height:60%;">
                            </div>

                            <span>Mar</span>

                        </div>


                        <div class="bar-item">

                            <div class="bar"
                                 style="height:70%;">
                            </div>

                            <span>Apr</span>

                        </div>


                        <div class="bar-item">

                            <div class="bar"
                                 style="height:88%;">
                            </div>

                            <span>Mei</span>

                        </div>


                        <div class="bar-item">

                            <div class="bar"
                                 style="height:78%;">
                            </div>

                            <span>Jun</span>

                        </div>


                        <div class="bar-item">

                            <div class="bar"
                                 style="height:95%;">
                            </div>

                            <span>Jul</span>

                        </div>

                    </div>

                </div>



                <!-- CATEGORY -->

                <div class="category-card">

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

                </div>


            </div>


        </section>

    </main>

</div>

</body>

</html>

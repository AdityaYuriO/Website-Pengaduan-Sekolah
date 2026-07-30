<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kategori - Admin</title>

    <link rel="stylesheet" href="{{ asset('css/admin/kategori.css') }}">
</head>

<body>

<div class="admin-layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="sidebar-logo">

            <img src="https://cdn.phototourl.com/free/2026-07-28-7540ffdc-e2ba-4015-a474-4cacaa2dd3b4.jpg">

            <div>
                <strong>PENGADUAN</strong>
                <strong>SEKOLAH</strong>
            </div>

        </div>


        <nav class="sidebar-menu">

            <a href="#">
                <span class="menu-icon">▦</span>
                DASHBOARD
            </a>

            <a href="#" class="active">
                <span class="menu-icon">▭</span>
                KATEGORI
            </a>

            <a href="#">
                <span class="menu-icon">♙</span>
                DATA USER
            </a>

            <a href="#">
                <span class="menu-icon">▤</span>
                PENGADUAN
            </a>

        </nav>


        <a href="#" class="logout">
            <span>↪</span>
            LOGOUT
        </a>

    </aside>


    <!-- MAIN -->
    <main class="main-content">

        <!-- TOPBAR -->
        <header class="topbar">

            <div class="date">

                <span class="calendar-icon">▣</span>

                <strong>July 29, 2026</strong>

                <span>⌄</span>

            </div>


            <div class="admin-profile">

                <div class="profile-circle">
                    👨🏻‍💼
                </div>

                <strong>admin</strong>

            </div>

        </header>


        <!-- CONTENT -->
        <section class="content">

            <div class="welcome">

                <h1>Selamat Datang, Admin</h1>

                <p>
                    Kelola pengaduan sekolah dengan mudah dan efisien.
                </p>

            </div>


            <!-- TOOLBAR -->

            <div class="toolbar">

                <div class="search-box">

                    <input
                        type="text"
                        placeholder="Search..."
                    >

                    <span>⌕</span>

                </div>


                <a href="#" class="category-button">
                    + &nbsp; Kategori
                </a>

            </div>


            <!-- TABLE -->

            <div class="table-container">

                <table>

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Kategori</th>

                            <th>Status</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>1</td>

                            <td>Keiswaan</td>

                            <td>
                                <span class="status selesai">
                                    ● SELESAI
                                </span>
                            </td>

                            <td class="actions">

                                <button class="edit">
                                    ✎
                                </button>

                                <button class="delete">
                                    ♜
                                </button>

                            </td>

                        </tr>


                        <tr>

                            <td>2</td>

                            <td>Hubin</td>

                            <td>
                                <span class="status menunggu">
                                    ● MENUNGGU
                                </span>
                            </td>

                            <td class="actions">

                                <button class="detail">
                                    ▣ DETAIL
                                </button>

                            </td>

                        </tr>


                        <tr>

                            <td>3</td>

                            <td>Kurikulum</td>

                            <td>
                                <span class="status selesai">
                                    ● SELESAI
                                </span>
                            </td>

                            <td class="actions">

                                <button class="detail">
                                    ▣ DETAIL
                                </button>

                            </td>

                        </tr>


                        <tr>

                            <td>4</td>

                            <td>Evaluasi guru</td>

                            <td>
                                <span class="status menunggu">
                                    ● MENUNGGU
                                </span>
                            </td>

                            <td class="actions">

                                <button class="detail">
                                    ▣ DETAIL
                                </button>

                            </td>

                        </tr>


                        <tr>

                            <td>5</td>

                            <td>Layanan konseling</td>

                            <td>
                                <span class="status selesai">
                                    ● SELESAI
                                </span>
                            </td>

                            <td class="actions">

                                <button class="detail">
                                    ▣ DETAIL
                                </button>

                            </td>

                        </tr>


                        <tr>

                            <td>6</td>

                            <td>Sarana Prasarana</td>

                            <td>
                                <span class="status menunggu">
                                    ● MENUNGGU
                                </span>
                            </td>

                            <td class="actions">

                                <button class="detail">
                                    ▣ DETAIL
                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>


            <!-- PAGINATION -->

            <div class="pagination">

                <span>&lt;</span>

                <a href="#" class="active-page">1</a>

                <a href="#">2</a>

                <a href="#">3</a>

                <a href="#">4</a>

                <span>&gt;</span>

            </div>

        </section>

    </main>

</div>

</body>

</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaduan Sekolah</title>

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar">

    <div class="logo-area">

        <img
            src="https://cdn.phototourl.com/free/2026-07-28-7540ffdc-e2ba-4015-a474-4cacaa2dd3b4.jpg"
            alt="Logo Sekolah"
        >

        <div class="logo-text">
            PENGADUAN<br>
            SEKOLAH
        </div>

    </div>


    <ul class="nav-menu">

        <li>
            <a href="#home">Beranda</a>
        </li>

        <li>
            <a href="#tentang">Tentang</a>
        </li>

        <li>
            <a href="#informasi">Informasi</a>
        </li>

        <li>
            <a href="#kontak">Kontak</a>
        </li>

        <li>
            <a href="{{ route('login') }}" class="login-btn">
                LOGIN
            </a>
        </li>

    </ul>

</nav>


<!-- ================= HERO ================= -->

<section class="hero" id="home">

    <div class="hero-content">

        <h1>
            Sampaikan Pengaduan,
            Bangun Sekolah Lebih Baik
        </h1>

        <p>
            Sistem pengaduan sekolah yang memudahkan siswa
            menyampaikan kritik, saran, dan laporan secara
            cepat, aman, dan transparan.
        </p>

        <a href="{{ route('login') }}" class="btn">
            Mulai Pengaduan
        </a>

    </div>

</section>


<!-- ================= TENTANG ================= -->

<section class="about" id="tentang">

    <div class="about-container">

        <div class="about-image">

            <img
                src="https://cdn.phototourl.com/free/2026-07-28-cf3335c1-9912-4766-ada8-0a1f7af2e012.jpg"
                alt="Lingkungan Sekolah"
            >

        </div>


        <div class="about-content">

            <h2>
                Tentang E-Pengaduan
            </h2>

            <p>
                E-Pengaduan Sekolah merupakan platform digital
                yang dibuat untuk memudahkan siswa dalam menyampaikan
                kritik, saran, maupun laporan mengenai lingkungan sekolah.
                Dengan adanya sistem ini, setiap pengaduan dapat
                disampaikan dengan lebih mudah, cepat, aman, dan terarah
                kepada pihak sekolah.
            </p>


            <div class="about-icons">

                <div class="icon-box">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/2919/2919592.png"
                        alt="Mudah"
                    >

                    <h4>
                        Mudah Digunakan
                    </h4>

                </div>


                <div class="icon-box">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/159/159604.png"
                        alt="Cepat"
                    >

                    <h4>
                        Proses Cepat
                    </h4>

                </div>


                <div class="icon-box">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png"
                        alt="Aman"
                    >

                    <h4>
                        Data Aman
                    </h4>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= INFORMASI ================= -->

<section class="info-section" id="informasi">

    <div class="info-container">

        <h2>
            Langkah-langkah<br>
            pengaduan
        </h2>


        <div class="info-grid">


            <!-- 1 -->

            <div class="info-card">

                <div class="info-icon">
                    <i class="fa-solid fa-user"></i>
                </div>

                <h3>
                    1. Login
                </h3>

            </div>


            <!-- 2 -->

            <div class="info-card">

                <div class="info-icon">
                    <i class="fa-solid fa-users-gear"></i>
                </div>

                <h3>
                    2. Pilih Kategori
                </h3>

            </div>


            <!-- 3 -->

            <div class="info-card">

                <div class="info-icon">
                    <i class="fa-solid fa-file-lines"></i>
                </div>

                <h3>
                    3. Isi Pengaduan
                </h3>

            </div>


            <!-- 4 -->

            <div class="info-card">

                <div class="info-icon">
                    <i class="fa-solid fa-file-arrow-up"></i>
                </div>

                <h3>
                    4. Unggah Bukti
                </h3>

            </div>


            <!-- 5 -->

            <div class="info-card">

                <div class="info-icon">
                    <i class="fa-solid fa-file-circle-check"></i>
                </div>

                <h3>
                    5. Kirim Pengaduan
                </h3>

            </div>


            <!-- 6 -->

            <div class="info-card">

                <div class="info-icon">
                    <i class="fa-solid fa-user-check"></i>
                </div>

                <h3>
                    6. Pantau Status
                </h3>

            </div>


        </div>


        <a href="{{ route('login') }}" class="info-btn">
            AJUKAN PENGADUAN
        </a>

    </div>

</section>


<!-- ================= CONTACT ================= -->

<section class="contact" id="kontak">

    <div class="contact-title">

        <img
            src="https://cdn-icons-png.flaticon.com/512/724/724664.png"
            alt="Contact"
        >

        <h2>
            Contact Us
        </h2>

    </div>


    <div class="contact-wrapper">


        <!-- PHONE -->

        <div class="contact-card">

            <div class="contact-icon">

                <img
                    src="https://cdn-icons-png.flaticon.com/512/724/724664.png"
                    alt="Phone"
                >

            </div>


            <div class="contact-info">

                <small>
                    CONTACT
                </small>

                <h3>
                    Phone Support
                </h3>

                <p>
                    +62 812-3456-7890
                </p>

                <p>
                    +62 821-9876-5432
                </p>

            </div>

        </div>


        <!-- EMAIL -->

        <div class="contact-card">

            <div class="contact-icon">

                <img
                    src="https://cdn-icons-png.flaticon.com/512/561/561127.png"
                    alt="Email"
                >

            </div>


            <div class="contact-info">

                <small>
                    EMAIL
                </small>

                <h3>
                    Pengaduan Sekolah
                </h3>

                <p>
                    pengaduan@smkn1kawali.sch.id
                </p>

                <p>
                    admin@smkn1kawali.sch.id
                </p>

            </div>

        </div>


    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <p>
        © {{ date('Y') }} E-Pengaduan Sekolah.
        Semua Hak Dilindungi.
    </p>

</footer>


</body>

</html>
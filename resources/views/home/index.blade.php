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


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar">

    <a href="#home" class="logo-area">

        <img
            src="https://cdn.phototourl.com/free/2026-07-28-7540ffdc-e2ba-4015-a474-4cacaa2dd3b4.jpg"
            alt="Logo Sekolah"
        >

        <div class="logo-text">
            PENGADUAN<br>
            SEKOLAH
        </div>

    </a>


    <ul class="nav-menu">

        <li>
            <a href="#home" class="active">
                Beranda
            </a>
        </li>

        <li>
            <a href="#tentang">
                Tentang
            </a>
        </li>

        <li>
            <a href="#informasi">
                informasi
            </a>
        </li>

        <li>
            <a href="#kontak">
                kontak
            </a>
        </li>

        <li>
            <a href="{{ route('login') }}" class="login-btn">
                LOGIN
            </a>
        </li>

    </ul>

</nav>



<!-- =====================================================
     BERANDA
===================================================== -->

<section class="hero" id="home">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <h1>
            PENGADUAN SEKOLAH
        </h1>

        <p>
            Sampaikan kritik, saran, maupun pengaduan
            <br>
            Anda dengan mudah melalui website ini.
            <br>
            Setiap masukan akan menjadi bahan evaluasi
            <br>
            untuk menciptakan lingkungan sekolah yang
            <br>
            lebih baik.
        </p>

    </div>

</section>



<!-- =====================================================
     TENTANG
===================================================== -->

<section class="about" id="tentang">

    <div class="about-container">


        <!-- FOTO -->

        <div class="about-image">

            <img
                src="https://cdn.phototourl.com/free/2026-07-28-cf3335c1-9912-4766-ada8-0a1f7af2e012.jpg"
                alt="Lingkungan Sekolah"
            >

        </div>


        <!-- TEKS -->

        <div class="about-content">

            <p>
                Sistem Kritik, Saran, dan Pengaduan sekolah hadir
                <br>
                sebagai media
                <br>
                bagi siswa untuk menyampaikan kritik, saran, dan
                <br>
                pengaduan
                <br>
                kepada pihak sekolah.Setiap masukan diharapkan
                <br>
                dapat menjadi
                <br>
                bahan evaluasi demi meningkatkan kualitas sekolah.
                <br>
                Silakan login untuk mengakses seluruh fitur yang
                <br>
                tersedia.
            </p>


            <!-- ICON -->

            <div class="about-icons">


                <div class="about-icon-box">

                    <div class="about-icon">
                        <i class="fa-solid fa-comment-exclamation"></i>
                    </div>

                    <span>
                        Tulis Kritik
                    </span>

                </div>



                <div class="about-icon-box">

                    <div class="about-icon">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>

                    <span>
                        Ajukan Saran
                    </span>

                </div>



                <div class="about-icon-box">

                    <div class="about-icon">
                        <i class="fa-solid fa-file-signature"></i>
                    </div>

                    <span>
                        Pengaduan
                    </span>

                    <span>
                        Resmi
                    </span>

                </div>


            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     INFORMASI
===================================================== -->

<section class="info-section" id="informasi">

    <div class="info-container">


        <h2>
            Langkah-langkah
            <br>
            pengaduan
        </h2>


        <div class="info-grid">


            <!-- 1 -->

            <div class="info-card">

                <div class="info-icon">
                    <i class="fa-regular fa-user"></i>
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
                    <i class="fa-regular fa-file-lines"></i>
                </div>

                <h3>
                    3. Isi Pengaduan
                </h3>

            </div>



            <!-- 4 -->

            <div class="info-card">

                <div class="info-icon">
                    <i class="fa-regular fa-file-arrow-up"></i>
                </div>

                <h3>
                    4. Unggah Bukti
                </h3>

            </div>



            <!-- 5 -->

            <div class="info-card">

                <div class="info-icon">
                    <i class="fa-regular fa-file-circle-check"></i>
                </div>

                <h3>
                    5. Kirim Pengaduan
                </h3>

            </div>



            <!-- 6 -->

            <div class="info-card">

                <div class="info-icon">
                    <i class="fa-regular fa-user-check"></i>
                </div>

                <h3>
                    6. Pantau Status
                </h3>

            </div>


        </div>



        <a
            href="{{ route('login') }}"
            class="info-btn"
        >
            AJUKAN PENGADUAN
        </a>


    </div>

</section>



<!-- =====================================================
     KONTAK
===================================================== -->

<section class="contact" id="kontak">

    <div class="contact-container">


        <h2>
            Contact Us
        </h2>


        <div class="contact-wrapper">


            <!-- PHONE -->

            <div class="contact-card">

                <div class="contact-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div>

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
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div>

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

    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <p>
        © {{ date('Y') }} E-Pengaduan Sekolah.
        Semua Hak Dilindungi.
    </p>

</footer>


</body>

</html>
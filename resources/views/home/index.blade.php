<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaduan Sekolah</title>

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

</head>

<body>


<nav class="navbar">

    <div class="logo-area">

        <img src="https://cdn.phototourl.com/free/2026-07-28-7540ffdc-e2ba-4015-a474-4cacaa2dd3b4.jpg">

        <div class="logo-text">
            PENGADUAN<br>
            SEKOLAH
        </div>

    </div>

</nav>
   <nav class="navbar">

    <div class="logo-area">

        <img src="https://cdn.phototourl.com/free/2026-07-28-7540ffdc-e2ba-4015-a474-4cacaa2dd3b4.jpg">

        <div class="logo-text">
            PENGADUAN<br>
            SEKOLAH
        </div>

    </div>


    <ul class="nav-menu">

        <li>
            <a href="/" class="active">
                Beranda
            </a>
        </li>

        <li>
            <a href="#tentang">
                Tentang
            </a>
        </li>

        <li>
            <a href="#cara">
                Informasi
            </a>
        </li>

        <li>
            <a href="#">
                Kontak
            </a>
        </li>

        <li>
            <a href="{{ route('login') }}" class="login-btn">
                LOGIN
            </a>
        </li>

    </ul>




</nav>


<!-- HERO -->

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


       


    </div>

</section>




<!-- TENTANG -->

<!-- ================= TENTANG ================= -->

<section class="about" id="tentang">

    <div class="about-container">

       <div class="about-image">
    <img src="https://cdn.phototourl.com/free/2026-07-28-e182d2c5-9bd4-44e6-a4d7-87c3586c0453.jpg" alt="Foto Sekolah">
</div>


        <div class="about-content">
        

            <p>
                Sistem Kritik, Saran, dan Pengaduan sekolah hadir sebagai media 
bagi siswa untuk menyampaikan kritik, saran, dan pengaduan 
kepada pihak sekolah.Setiap masukan diharapkan dapat menjadi 
bahan evaluasi demi meningkatkan kualitas sekolah. 
Silakan login untuk mengakses seluruh fitur yang tersedia.
            </p>


            <div class="about-icons">

                <div class="icon-box">

                    <img src="https://cdn-icons-png.flaticon.com/512/1380/1380338.png">

                    <h4>Tulis Kritik</h4>

                </div>


                <div class="icon-box">

                    <img src="https://cdn-icons-png.flaticon.com/512/929/929495.png">

                    <h4>Ajukan Saran</h4>

                </div>


                <div class="icon-box">

                    <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png">

                    <h4>Pengaduan Resmi</h4>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- CARA KERJA -->

<!-- ================= INFORMASI ================= -->
<section class="info-section" id="informasi">

    <h2>Langkah-langkah<br>pengaduan</h2>

    <div class="info-grid">

        <div class="info-card">
            <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" alt="Login">
            <h3>1. Login</h3>
        </div>

        <div class="info-card">
            <img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png" alt="Kategori">
            <h3>2. Pilih Kategori</h3>
        </div>

        <div class="info-card">
            <img src="https://cdn-icons-png.flaticon.com/512/2991/2991112.png" alt="Isi">
            <h3>3. Isi Pengaduan</h3>
        </div>

        <div class="info-card">
            <img src="https://cdn-icons-png.flaticon.com/512/724/724933.png" alt="Bukti">
            <h3>4. Unggah Bukti</h3>
        </div>

        <div class="info-card">
            <img src="https://cdn-icons-png.flaticon.com/512/2920/2920277.png" alt="Kirim">
            <h3>5. Kirim Pengaduan</h3>
        </div>

        <div class="info-card">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Status">
            <h3>6. Pantau Status</h3>
        </div>

    </div>

    <a href="/login" class="info-btn">
        AJUKAN PENGADUAN
    </a>

</section>


<!-- kontak -->

<!-- ================= CONTACT ================= -->

<section class="contact" id="kontak">

    <div class="contact-title">

        <img src="https://cdn.phototourl.com/free/2026-07-28-880a51e0-5a2a-4eb5-b641-6a1bbfbe9e24.png" alt="Contact">

        <h2>Contact Us</h2>

    </div>

    <div class="contact-wrapper">

        <div class="contact-card">

            <div class="contact-icon">

                <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="Phone">

            </div>

            <div class="contact-info">

                <small>CONTACT</small>

                <h3>Phone Support</h3>

                <p>+62 812-3456-7890</p>

                <p>+62 821-9876-5432</p>

            </div>

        </div>


        <div class="contact-card">

            <div class="contact-icon">

                <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Email">

            </div>

            <div class="contact-info">

                <small>EMAIL</small>

                <h3>Pengaduan Sekolah</h3>

                <p>pengaduan@smkn1kawali.sch.id</p>

                <p>admin@smkn1kawali.sch.id</p>

            </div>

        </div>

    </div>

</section>







<!-- FOOTER -->


<footer>

    <p>
        © {{ date('Y') }} E-Pengaduan Sekolah.
        Semua Hak Dilindungi.
    </p>

</footer>



</body>

</html>
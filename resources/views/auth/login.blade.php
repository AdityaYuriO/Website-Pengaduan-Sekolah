<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Pengaduan Sekolah</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>


<body>


<!-- BAGIAN KIRI -->

<div class="login-left">


    <img src="https://cdn.phototourl.com/free/2026-07-28-3b541000-9b66-4966-8f1a-77997873b3d5.png"
     class="school-logo"
     alt="Logo Sekolah">

    <h1>
        PENGADUAN<br>
        SEKOLAH
    </h1>


    <p>
        Sampaikan aspirasi untuk sekolah yang lebih baik
    </p>


</div>





<!-- BAGIAN KANAN -->

<div class="login-right">


    <div class="login-card">


        <h2>
            Login ke Akun Anda
        </h2>


        <p class="subtitle">
            Masukkan username dan password<br>
            untuk mengakses layanan.
        </p>



        <form method="POST" action="{{ route('proses.login') }}">

            @csrf


            <div class="input-box">

                <i>✉</i>

                <input
                    type="email"
                    name="email"
                    placeholder="Username"
                    required
                >

            </div>



            <div class="input-box">

                <i>🔒</i>

                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    required
                >

            </div>



            <button class="login-button" type="submit">

                Login

            </button>


            <!-- KEMBALI KE BERANDA -->

            <a href="{{ url('/') }}" class="back-home">
                ← Kembali ke Beranda
            </a>



        </form>


    </div>


</div>



</body>

</html>

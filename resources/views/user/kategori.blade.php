<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Pengajuan - Pengaduan Sekolah</title>

    <link rel="stylesheet" href="{{ asset('css/user-kategori.css') }}">

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
            <div class="logo-text">
                <span>PENGADUAN</span>
                <span>SEKOLAH</span>
            </div>
        </div>

        <nav class="sidebar-menu">
            <a href="#" class="menu-item">
                <span class="menu-icon">
                    <i class="fa-solid fa-grip"></i>
                </span>
                <span>DASHBOARD</span>
            </a>

            <a href="#" class="menu-item active">
                <span class="menu-icon">
                    <i class="fa-regular fa-folder"></i>
                </span>
                <span>KATEGORI</span>
            </a>

            <a href="#" class="menu-item">
                <span class="menu-icon">
                    <i class="fa-regular fa-clock"></i>
                </span>
                <span>RIWAYAT</span>
            </a>
        </nav>

        <div class="sidebar-bottom">
            <form method="POST" action="#">
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

        {{-- ================= CONTENT ================= --}}
        <section class="dashboard-content">

            {{-- HEADER --}}
            <div class="page-header">
                <h1>KATEGORI PENGAJUAN</h1>
                <p>Pilih kategori yang sesuai dengan laporan atau aspirasi yang ingin kamu sampaikan agar dapat ditindaklanjuti oleh tim sekolah secara tepat.</p>
            </div>

            {{-- CATEGORY GRID --}}
            <div class="category-grid">

                {{-- Card 1: Kurikulum --}}
                <div class="category-card">
                    <div class="card-image">
                        <img src="{{ asset('images/kurikulum.jpg') }}" alt="Kurikulum" class="card-img" onerror="this.style.display='none'; this.parentElement.style.background='#e8edf5'; this.parentElement.innerHTML='<div style=\'display:flex;align-items:center;justify-content:center;width:100%;height:100%;font-size:45px;color:#8899b3;\'>📖</div>'">
                    </div>
                    <div class="card-label">Kurikulum</div>
                </div>

                {{-- Card 2: Kesiswaan --}}
                <div class="category-card">
                    <div class="card-image">
                        <img src="{{ asset('images/kesiswaan.jpg') }}" alt="Kesiswaan" class="card-img" onerror="this.style.display='none'; this.parentElement.style.background='#e8edf5'; this.parentElement.innerHTML='<div style=\'display:flex;align-items:center;justify-content:center;width:100%;height:100%;font-size:45px;color:#8899b3;\'>👥</div>'">
                    </div>
                    <div class="card-label">Kesiswaan</div>
                </div>

                {{-- Card 3: Hubin --}}
                <div class="category-card">
                    <div class="card-image">
                        <img src="{{ asset('images/hubin.jpg') }}" alt="Hubin" class="card-img" onerror="this.style.display='none'; this.parentElement.style.background='#e8edf5'; this.parentElement.innerHTML='<div style=\'display:flex;align-items:center;justify-content:center;width:100%;height:100%;font-size:45px;color:#8899b3;\'>🤝</div>'">
                    </div>
                    <div class="card-label">Hubin</div>
                </div>

                {{-- Card 4: Evaluasi Guru --}}
                <div class="category-card">
                    <div class="card-image">
                        <img src="{{ asset('images/evaluasi-guru.jpg') }}" alt="Evaluasi Guru" class="card-img" onerror="this.style.display='none'; this.parentElement.style.background='#e8edf5'; this.parentElement.innerHTML='<div style=\'display:flex;align-items:center;justify-content:center;width:100%;height:100%;font-size:45px;color:#8899b3;\'>👨‍🏫</div>'">
                    </div>
                    <div class="card-label">Evaluasi Guru</div>
                </div>

                {{-- Card 5: Layanan Konseling --}}
                <div class="category-card">
                    <div class="card-image">
                        <img src="{{ asset('images/layanan-konseling.jpg') }}" alt="Layanan Konseling" class="card-img" onerror="this.style.display='none'; this.parentElement.style.background='#e8edf5'; this.parentElement.innerHTML='<div style=\'display:flex;align-items:center;justify-content:center;width:100%;height:100%;font-size:45px;color:#8899b3;\'>💬</div>'">
                    </div>
                    <div class="card-label">Layanan Konseling</div>
                </div>

                {{-- Card 6: Sarana Prasarana --}}
                <div class="category-card">
                    <div class="card-image">
                        <img src="{{ asset('images/sarana-prasarana.jpg') }}" alt="Sarana Prasarana" class="card-img" onerror="this.style.display='none'; this.parentElement.style.background='#e8edf5'; this.parentElement.innerHTML='<div style=\'display:flex;align-items:center;justify-content:center;width:100%;height:100%;font-size:45px;color:#8899b3;\'>🏫</div>'">
                    </div>
                    <div class="card-label">Sarana Prasarana</div>
                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>
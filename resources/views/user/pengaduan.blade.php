<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan - Pengaduan Sekolah</title>

    <link rel="stylesheet" href="{{ asset('css/pengaduan.css') }}">

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
        </div>

        <div class="sidebar-divider"></div>

        <div class="sidebar-title">
            <span>PENGADUAN</span>
            <span>SEKOLAH</span>
        </div>

        <nav class="sidebar-menu">
            <a href="#" class="menu-item active">
                <span class="menu-icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                </span>
                <span>FORM PENGAJUAN</span>
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

        {{-- TOPBAR --}}
        <header class="topbar">
            <div class="topbar-left">
                <h1 class="page-title">Form Pengaduan</h1>
            </div>
            <div class="topbar-right">
                <span class="school-title">PENGADUAN SEKOLAH</span>
            </div>
        </header>

        {{-- ================= CONTENT ================= --}}
        <section class="dashboard-content">

            {{-- Kategori Terpilih --}}
            <div class="category-selected">
                <div class="category-header">
                    <span class="category-icon">📚</span>
                    <h2>Kategori Terpilih</h2>
                </div>
                <div class="category-info">
                    <h3>Kurikulum</h3>
                    <p>Pengaduan terkait kegiatan belajar mengajar, materi, jadwal, dan lainnya.</p>
                </div>
            </div>

            {{-- Cara Mengirim Pengaduan --}}
            <div class="section-card">
                <h3 class="section-title">Cara Mengirim Pengaduan</h3>
                <p class="section-subtitle">Pilih cara Anda mengirim pengaduan.</p>

                <div class="option-group">
                    <div class="option-card active" data-option="identitas" onclick="selectOption(this)">
                        <div class="option-icon">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="option-content">
                            <h4>Menggunakan Identitas</h4>
                            <p>Identitas Anda akan digunakan untuk memudahkan tindak lanjut pengaduan.</p>
                        </div>
                        <div class="option-check">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                    </div>

                    <div class="option-card" data-option="anonim" onclick="selectOption(this)">
                        <div class="option-icon">
                            <i class="fa-regular fa-user-secret"></i>
                        </div>
                        <div class="option-content">
                            <h4>Anonim</h4>
                            <p>Identitas Anda tidak akan di simpan dan tidak akan di tampilkan pada pihak sekolah.</p>
                        </div>
                        <div class="option-check">
                            <i class="fa-regular fa-circle"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Form Pengaduan --}}
            <div class="form-card">
                <h3 class="form-title" id="formTitle">Form Pengaduan (Menggunakan Identitas)</h3>

                <form class="complaint-form" id="complaintForm">
                    {{-- Form Identitas --}}
                    <div id="identitasForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" placeholder="Masukkan NIS Anda">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" placeholder="Masukkan nama lengkap Anda">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Masukkan email Anda">
                            </div>
                            <div class="form-group">
                                <label>No. HP</label>
                                <input type="text" placeholder="Masukkan nomor hp Anda">
                            </div>
                        </div>
                    </div>

                    {{-- Form Anonim --}}
                    <div id="anonimForm" style="display: none;">
                        <div class="anonim-info">
                            <i class="fa-regular fa-user-secret"></i>
                            <p>Anda mengirim pengaduan secara anonim. Identitas Anda tidak akan disimpan.</p>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label>Isi Pengaduan</label>
                        <textarea placeholder="Tuliskan pengaduan Anda secara detail dan jelas..."></textarea>
                    </div>

                    {{-- Lampiran --}}
                    <div class="attachment-section">
                        <div class="attachment-header">
                            <span class="attachment-icon">📎</span>
                            <h4>Lampiran (opsional)</h4>
                        </div>
                        <div class="attachment-box">
                            <div class="attachment-content">
                                <i class="fa-regular fa-image"></i>
                                <p>Pilih File</p>
                                <span class="attachment-info">Format: JPG, PNG, Video</span>
                            </div>
                            <input type="file" class="attachment-input">
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="submit-section">
                        <button type="submit" class="btn-submit">
                            <i class="fa-regular fa-paper-plane"></i>
                            Kirim Pengaduan
                        </button>
                    </div>
                </form>
            </div>

        </section>

    </main>

</div>

{{-- ================= JAVASCRIPT ================= --}}
<script>
    function selectOption(element) {
        document.querySelectorAll('.option-card').forEach(card => {
            card.classList.remove('active');
            card.querySelector('.option-check i').className = 'fa-regular fa-circle';
        });

        element.classList.add('active');
        element.querySelector('.option-check i').className = 'fa-regular fa-circle-check';

        const option = element.dataset.option;
        const identitasForm = document.getElementById('identitasForm');
        const anonimForm = document.getElementById('anonimForm');
        const formTitle = document.getElementById('formTitle');

        if (option === 'identitas') {
            identitasForm.style.display = 'block';
            anonimForm.style.display = 'none';
            formTitle.textContent = 'Form Pengaduan (Menggunakan Identitas)';
        } else {
            identitasForm.style.display = 'none';
            anonimForm.style.display = 'block';
            formTitle.textContent = 'Form Pengaduan (Anonim)';
        }
    }
</script>

</body>
</html>
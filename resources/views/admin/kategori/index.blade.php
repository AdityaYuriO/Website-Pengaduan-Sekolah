```blade
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kategori - Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-900">

<div class="flex min-h-screen">

    {{-- ================= SIDEBAR ================= --}}
    <aside
        class="fixed left-0 top-0 z-50 flex h-screen w-[163px] flex-col bg-gradient-to-b from-[#06265d] via-[#0b3d91] to-[#2777c8] px-5 py-[15px] text-white">

        {{-- LOGO --}}
        <div class="mb-[35px] flex items-center gap-2">

            <img
                src="https://cdn.phototourl.com/free/2026-07-28-7540ffdc-e2ba-4015-a474-4cacaa2dd3b4.jpg"
                alt="Logo Sekolah"
                class="h-[38px] w-[38px] object-contain"
            >

            <div class="flex flex-col text-[9px] italic leading-tight">
                <strong>PENGADUAN</strong>
                <strong>SEKOLAH</strong>
            </div>

        </div>


        {{-- MENU --}}
        <nav class="flex flex-col gap-2">

            {{-- DASHBOARD --}}
            <a
                href="{{ url('/admin/dashboard') }}"
                class="flex h-[35px] items-center gap-[9px] rounded-full px-3 text-[10px] font-bold italic text-white transition hover:bg-white/15">

                <span class="w-5 text-center text-[20px] not-italic">
                    ▦
                </span>

                DASHBOARD
            </a>


            {{-- KATEGORI --}}
            <a
                href="{{ url('/admin/kategori') }}"
                class="flex h-[35px] items-center gap-[9px] rounded-full bg-[#0963a9] px-3 text-[10px] font-bold italic text-white">

                <span class="w-5 text-center text-[20px] not-italic">
                    ▭
                </span>

                KATEGORI
            </a>


            {{-- DATA USER --}}
            <a
                href="{{ url('/admin/users') }}"
                class="flex h-[35px] items-center gap-[9px] rounded-full px-3 text-[10px] font-bold italic text-white transition hover:bg-white/15">

                <span class="w-5 text-center text-[20px] not-italic">
                    ♙
                </span>

                DATA USER
            </a>


            {{-- PENGADUAN --}}
            <a
                href="{{ url('/admin/pengaduan') }}"
                class="flex h-[35px] items-center gap-[9px] rounded-full px-3 text-[10px] font-bold italic text-white transition hover:bg-white/15">

                <span class="w-5 text-center text-[20px] not-italic">
                    ▤
                </span>

                PENGADUAN
            </a>

        </nav>


        {{-- LOGOUT --}}
        <form
            method="POST"
            action="{{ url('/logout') }}"
            class="mt-auto">

            @csrf

            <button
                type="submit"
                class="flex h-8 w-[95px] items-center justify-center gap-[7px] rounded-full border-0 bg-[#07579c] text-[9px] font-bold italic text-white transition hover:bg-[#064b87]">

                <span class="text-[18px]">
                    ↪
                </span>

                LOGOUT

            </button>

        </form>

    </aside>


    {{-- ================= MAIN ================= --}}
    <main class="ml-[163px] min-h-screen w-[calc(100%-163px)]">

        {{-- TOPBAR --}}
        <header
            class="flex h-[49px] items-center justify-between border-b border-gray-400 px-[22px]">

            {{-- DATE --}}
            <div class="flex items-center gap-3 text-[10px]">

                <span class="text-[23px]">
                    ▣
                </span>

                <strong>
                    {{ now()->format('F d, Y') }}
                </strong>

                <span class="text-[15px]">
                    ⌄
                </span>

            </div>


            {{-- PROFILE --}}
            <div class="flex items-center gap-[9px] text-[11px]">

                <div
                    class="flex h-[38px] w-[38px] items-center justify-center rounded-full border border-gray-900 bg-blue-100 text-[23px]">

                    👨🏻‍💼

                </div>

                <strong>
                    {{ Auth::user()->name ?? 'Admin' }}
                </strong>

            </div>

        </header>


        {{-- CONTENT --}}
        <section class="px-5 py-4">

            {{-- WELCOME --}}
            <div>

                <h1
                    class="mb-[3px] font-serif text-[16px] font-normal">

                    Selamat Datang,
                    {{ Auth::user()->name ?? 'Admin' }}

                </h1>

                <p class="text-[9px] text-gray-700">
                    Kelola pengaduan sekolah dengan mudah dan efisien.
                </p>

            </div>


            {{-- TOOLBAR --}}
            <div
                class="mt-[7px] flex items-center justify-between gap-[15px]">

                {{-- SEARCH --}}
                <form
                    method="GET"
                    action="{{ url('/admin/kategori') }}"
                    class="flex h-6 w-[195px] items-center rounded-full border border-gray-400 bg-white px-[10px]">

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search..."
                        class="w-full border-0 bg-transparent text-[9px] outline-none placeholder:text-gray-400"
                    >

                    <button
                        type="submit"
                        class="border-0 bg-transparent p-0 text-[18px] text-gray-400">

                        ⌕

                    </button>

                </form>


                {{-- TAMBAH KATEGORI --}}
                <a
                    href="{{ url('/admin/kategori/create') }}"
                    class="flex h-[25px] w-[86px] items-center justify-center rounded-[3px] bg-[#1474b8] text-[10px] font-bold text-white transition hover:bg-[#0e609d]">

                    + &nbsp; Kategori

                </a>

            </div>


            {{-- TABLE --}}
            <div class="mt-[10px] w-full overflow-x-auto">

                <table class="w-full table-fixed border-collapse">

                    <thead class="bg-[#1268a8] text-white">

                        <tr>

                            <th class="h-[26px] w-[13%] text-center text-[11px] italic">
                                No
                            </th>

                            <th class="h-[26px] w-[28%] text-center text-[11px] italic">
                                Kategori
                            </th>

                            <th class="h-[26px] w-[28%] text-center text-[11px] italic">
                                Status
                            </th>

                            <th class="h-[26px] w-[31%] text-center text-[11px] italic">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        {{-- DATA CONTOH --}}
                        <tr class="border-b border-gray-400">

                            <td class="h-7 text-center text-[9px] font-bold">
                                1
                            </td>

                            <td class="h-7 text-center text-[9px] font-bold">
                                Keiswaan
                            </td>

                            <td class="h-7 text-center">

                                <span
                                    class="inline-block rounded-[3px] bg-[#9bc9a1] px-1.5 py-0.5 text-[7px] font-bold text-[#165b20]">

                                    ● SELESAI

                                </span>

                            </td>

                            <td>

                                <div class="flex items-center justify-center gap-3">

                                    <a
                                        href="#"
                                        class="text-[18px] text-gray-900">

                                        ✎

                                    </a>

                                    <button
                                        type="button"
                                        onclick="alert('Fitur hapus akan dihubungkan ke database.')"
                                        class="border-0 bg-transparent text-[17px] text-gray-900">

                                        ♜

                                    </button>

                                </div>

                            </td>

                        </tr>


                        <tr class="border-b border-gray-400">

                            <td class="h-7 text-center text-[9px] font-bold">
                                2
                            </td>

                            <td class="h-7 text-center text-[9px] font-bold">
                                Hubin
                            </td>

                            <td class="h-7 text-center">

                                <span
                                    class="inline-block rounded-[3px] bg-[#e1ce65] px-1.5 py-0.5 text-[7px] font-bold text-[#735d00]">

                                    ● MENUNGGU

                                </span>

                            </td>

                            <td>

                                <div class="flex items-center justify-center">

                                    <a
                                        href="#"
                                        class="rounded-[3px] bg-[#b7d6f8] px-1.5 py-0.5 text-[9px] font-bold text-[#18528b]">

                                        ▣ DETAIL

                                    </a>

                                </div>

                            </td>

                        </tr>


                        <tr class="border-b border-gray-400">

                            <td class="h-7 text-center text-[9px] font-bold">
                                3
                            </td>

                            <td class="h-7 text-center text-[9px] font-bold">
                                Kurikulum
                            </td>

                            <td class="h-7 text-center">

                                <span
                                    class="inline-block rounded-[3px] bg-[#9bc9a1] px-1.5 py-0.5 text-[7px] font-bold text-[#165b20]">

                                    ● SELESAI

                                </span>

                            </td>

                            <td>

                                <div class="flex items-center justify-center">

                                    <a
                                        href="#"
                                        class="rounded-[3px] bg-[#b7d6f8] px-1.5 py-0.5 text-[9px] font-bold text-[#18528b]">

                                        ▣ DETAIL

                                    </a>

                                </div>

                            </td>

                        </tr>


                        <tr class="border-b border-gray-400">

                            <td class="h-7 text-center text-[9px] font-bold">
                                4
                            </td>

                            <td class="h-7 text-center text-[9px] font-bold">
                                Evaluasi guru
                            </td>

                            <td class="h-7 text-center">

                                <span
                                    class="inline-block rounded-[3px] bg-[#e1ce65] px-1.5 py-0.5 text-[7px] font-bold text-[#735d00]">

                                    ● MENUNGGU

                                </span>

                            </td>

                            <td>

                                <div class="flex items-center justify-center">

                                    <a
                                        href="#"
                                        class="rounded-[3px] bg-[#b7d6f8] px-1.5 py-0.5 text-[9px] font-bold text-[#18528b]">

                                        ▣ DETAIL

                                    </a>

                                </div>

                            </td>

                        </tr>


                        <tr class="border-b border-gray-400">

                            <td class="h-7 text-center text-[9px] font-bold">
                                5
                            </td>

                            <td class="h-7 text-center text-[9px] font-bold">
                                Layanan konseling
                            </td>

                            <td class="h-7 text-center">

                                <span
                                    class="inline-block rounded-[3px] bg-[#9bc9a1] px-1.5 py-0.5 text-[7px] font-bold text-[#165b20]">

                                    ● SELESAI

                                </span>

                            </td>

                            <td>

                                <div class="flex items-center justify-center">

                                    <a
                                        href="#"
                                        class="rounded-[3px] bg-[#b7d6f8] px-1.5 py-0.5 text-[9px] font-bold text-[#18528b]">

                                        ▣ DETAIL

                                    </a>

                                </div>

                            </td>

                        </tr>


                        <tr class="border-b border-gray-400">

                            <td class="h-7 text-center text-[9px] font-bold">
                                6
                            </td>

                            <td class="h-7 text-center text-[9px] font-bold">
                                Sarana Prasarana
                            </td>

                            <td class="h-7 text-center">

                                <span
                                    class="inline-block rounded-[3px] bg-[#e1ce65] px-1.5 py-0.5 text-[7px] font-bold text-[#735d00]">

                                    ● MENUNGGU

                                </span>

                            </td>

                            <td>

                                <div class="flex items-center justify-center">

                                    <a
                                        href="#"
                                        class="rounded-[3px] bg-[#b7d6f8] px-1.5 py-0.5 text-[9px] font-bold text-[#18528b]">

                                        ▣ DETAIL

                                    </a>

                                </div>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>


            {{-- PAGINATION --}}
            <div
                class="mt-[60px] flex items-center justify-center gap-[17px] text-[11px] font-bold">

                <button class="text-gray-900">
                    &lt;
                </button>

                <a
                    href="#"
                    class="flex h-[18px] w-5 items-center justify-center rounded-[3px] bg-[#073d85] text-white">

                    1

                </a>

                <a
                    href="#"
                    class="text-gray-900">

                    2

                </a>

                <a
                    href="#"
                    class="text-gray-900">

                    3

                </a>

                <a
                    href="#"
                    class="text-gray-900">

                    4

                </a>

                <button class="text-gray-900">
                    &gt;
                </button>

            </div>

        </section>

    </main>

</div>

</body>
</html>
```

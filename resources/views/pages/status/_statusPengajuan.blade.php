@extends('default')

@section('content')
@include('components._breadcrumbLink')
<div class="max-w-5xl min-h-screen p-4 mx-auto text-gray-800 dark:text-gray-200">
    <!-- Header Page -->
    <div class="pt-20 mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Status <span class="text-yellow-500">Pengajuan
                Sewa</span></h1>
        <p class="mt-1 text-gray-500 dark:text-gray-400">Pantau proses verifikasi dan riwayat pemesanan kamar Anda.</p>
    </div>


    @if ($booking->isEmpty())
    {{-- ---------------------------------------------------------------------- --}}
    {{-- STATE KOSONG (Jika tidak ada pengajuan aktif) --}}
    {{-- ---------------------------------------------------------------------- --}}
    <div
        class="p-12 mb-12 text-center bg-white border-2 border-gray-300 border-dashed shadow-sm dark:bg-gray-800 rounded-3xl dark:border-gray-700">
        <svg class="w-12 h-12 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
        </svg>
        <h3 class="mt-2 text-sm font-semibold text-gray-900 dark:text-white">Tidak ada pengajuan aktif</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Anda belum melakukan pemesanan kamar baru-baru ini.
        </p>
        <div class="mt-6">
            <a href="{{ route('booking.form') }}"
                class="inline-flex items-center px-5 py-3 text-sm font-bold text-black transition-colors bg-yellow-400 shadow-sm rounded-xl hover:bg-yellow-500">
                <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                </svg>
                Sewa Kamar Baru
            </a>
        </div>
    </div>
    @else
    {{-- ---------------------------------------------------------------------- --}}
    {{-- SECTION 1: STATUS PENGAJUAN AKTIF --}}
    {{-- ---------------------------------------------------------------------- --}}
    <div
        class="mb-12 overflow-hidden transition-all bg-white border border-gray-100 shadow-lg dark:bg-gray-800 rounded-3xl dark:border-gray-700 hover:shadow-xl">
        <!-- Header Card: ID & Status Badge -->
        <div
            class="flex flex-col items-start justify-between gap-4 px-6 py-5 border-b border-gray-100 badge-container bg-gray-50 dark:bg-gray-700/50 dark:border-gray-700 md:flex-row md:items-center">
            <div>
                <p class="text-xs tracking-wider text-gray-500 uppercase dark:text-gray-400">ID Pemesanan</p>
                {{-- nomor pesanan diambil dari tgl/bulan/tahun dan singkatan yellow kost, nama depan user dan belakang
                --}}
                <h3 class="font-mono text-xl font-bold text-gray-900 dark:text-white">0312205YLKAD</h3>
            </div>

            <!-- Logika Badge Status -->
            <span
                class="inline-flex items-center px-4 py-2 text-sm font-bold text-yellow-700 bg-yellow-100 border border-yellow-200 rounded-full">
                <svg class="w-4 h-4 mr-2 animate-spin" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                Menunggu Verifikasi
            </span>
            <span
                class="inline-flex items-center px-4 py-2 text-sm font-bold text-green-700 bg-green-100 border border-green-200 rounded-full">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Disetujui
            </span>
            <span
                class="inline-flex items-center px-4 py-2 text-sm font-bold text-red-700 bg-red-100 border border-red-200 rounded-full">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
                Ditolak / Batal
            </span>
        </div>
        {{-- ------------------------------------------------------------------ --}}
        {{-- Body Card --}}
        {{-- ------------------------------------------------------------------ --}}
        <div class="p-6 md:p-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

                <!-- Kolom Kiri: Detail Data -->
                <div class="space-y-6 md:col-span-2">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <p class="mb-1 text-xs font-semibold text-gray-400 uppercase">Kamar Pilihan</p>
                            <p class="text-lg font-medium text-gray-900 dark:text-white">
                                44
                            </p>
                        </div>
                        <div>
                            <p class="mb-1 text-xs font-semibold text-gray-400 uppercase">Tanggal Masuk</p>
                            <p class="text-lg font-medium text-gray-900 dark:text-white">44
                            </p>
                        </div>
                        <div>
                            <p class="mb-1 text-xs font-semibold text-gray-400 uppercase">Total Biaya</p>
                            <p class="text-lg font-medium text-gray-900 dark:text-white">324
                            </p>
                        </div>
                        <div>
                            <p class="mb-1 text-xs font-semibold text-gray-400 uppercase">Tanggal Pengajuan</p>
                            <p class="text-lg font-medium text-gray-900 dark:text-white">
                                234
                            </p>
                        </div>
                    </div>
                    {{-- ------------------------------------------------------------------ --}}
                    {{-- AREA KHUSUS JIKA DITOLAK --}}
                    {{-- ------------------------------------------------------------------ --}}
                    <div
                        class="p-5 mt-6 border-l-4 border-red-500 bg-red-50 dark:bg-red-900/20 rounded-r-xl animate-fade-in">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <!-- Icon Warning -->
                                <svg class="w-6 h-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="w-full ml-4">
                                <h3 class="text-lg font-bold text-red-800 dark:text-red-400">Pengajuan Ditolak</h3>
                                {{-- ------------------------------------------------------------------ --}}
                                {{-- Alasan Penolakan--}}
                                {{-- ------------------------------------------------------------------ --}}
                                <div
                                    class="p-3 mt-2 text-sm text-red-700 border border-red-100 rounded-lg dark:text-red-200 bg-white/60 dark:bg-black/20 dark:border-red-800/50">
                                    <span class="block mb-1 font-semibold">Alasan dari Admin:</span>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-3 text-sm text-red-600 dark:text-red-300">
                                        Silakan perbaiki data atau pilih kamar lain, lalu ajukan ulang.
                                    </p>
                                    {{-- ------------------------------------------------------------------ --}}
                                    {{-- TOMBOL PENGAJUAN ULANG--}}
                                    {{-- ------------------------------------------------------------------ --}}
                                    <a href="{{ route('booking.form') }}"
                                        class="inline-flex items-center px-5 py-2.5 bg-red-600 hover:bg-red-700 text-white text-sm font-bold rounded-xl shadow-lg shadow-red-500/30 transition-all transform active:scale-95 focus:ring-4 focus:ring-red-300">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                            </path>
                                        </svg>
                                        Ajukan Ulang Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ------------------------------------------------------------------ --}}
                    {{-- Pesan Jika Diterima --}}
                    {{-- ------------------------------------------------------------------ --}}
                    <div class="p-5 mt-6 border-l-4 border-green-500 bg-green-50 dark:bg-green-900/20 rounded-r-xl">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-700 dark:text-green-300">
                                    Selamat! Pengajuan diterima. Silakan hubungi admin atau cek menu tagihan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ------------------------------------------------------------------------ --}}
                {{-- Kolom Kanan: Status Visual --}}
                {{-- ------------------------------------------------------------------------ --}}
                <div
                    class="items-center justify-center hidden p-6 border border-gray-100 md:flex bg-gray-50 dark:bg-gray-700/30 rounded-2xl dark:border-gray-700">
                    <div class="text-center">
                        <div class="pb-6">
                            <span
                                class="p-3 px-4 font-bold border border-gray-100 rounded-full dark:bg-gray-700/80 dark:border-gray-700">Status
                                Pengajuan Anda</span>
                        </div>
                        <div class="flex flex-col">
                            <div
                                class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-green-100 rounded-full dark:bg-green-900/30">
                                <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Selesai</h4>
                        </div>
                        <div class="flex flex-col">
                            <div
                                class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-green-100 rounded-full dark:bg-green-900/30">
                                <svg class="w-12 h-12 text-green-500" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path
                                        d="M144 224C161.7 224 176 238.3 176 256L176 512C176 529.7 161.7 544 144 544L96 544C78.3 544 64 529.7 64 512L64 256C64 238.3 78.3 224 96 224L144 224zM334.6 80C361.9 80 384 102.1 384 129.4L384 133.6C384 140.4 382.7 147.2 380.2 153.5L352 224L512 224C538.5 224 560 245.5 560 272C560 291.7 548.1 308.6 531.1 316C548.1 323.4 560 340.3 560 360C560 383.4 543.2 402.9 521 407.1C525.4 414.4 528 422.9 528 432C528 454.2 513 472.8 492.6 478.3C494.8 483.8 496 489.8 496 496C496 522.5 474.5 544 448 544L360.1 544C323.8 544 288.5 531.6 260.2 508.9L248 499.2C232.8 487.1 224 468.7 224 449.2L224 262.6C224 247.7 227.5 233 234.1 219.7L290.3 107.3C298.7 90.6 315.8 80 334.6 80z" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Siap Huni</h4>
                        </div>
                        <div class="flex flex-col">
                            <div
                                class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-red-100 rounded-full dark:bg-red-900/30">
                                <svg class="w-12 h-12 text-red-500 animate-pulse" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Ditolak</h4>
                        </div>
                        <div class="flex flex-col">
                            <div
                                class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-yellow-100 rounded-full dark:bg-yellow-900/30">
                                <svg class="w-12 h-12 text-yellow-600 animate-spin" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path
                                        d="M272 112C272 85.5 293.5 64 320 64C346.5 64 368 85.5 368 112C368 138.5 346.5 160 320 160C293.5 160 272 138.5 272 112zM272 528C272 501.5 293.5 480 320 480C346.5 480 368 501.5 368 528C368 554.5 346.5 576 320 576C293.5 576 272 554.5 272 528zM112 272C138.5 272 160 293.5 160 320C160 346.5 138.5 368 112 368C85.5 368 64 346.5 64 320C64 293.5 85.5 272 112 272zM480 320C480 293.5 501.5 272 528 272C554.5 272 576 293.5 576 320C576 346.5 554.5 368 528 368C501.5 368 480 346.5 480 320zM139 433.1C157.8 414.3 188.1 414.3 206.9 433.1C225.7 451.9 225.7 482.2 206.9 501C188.1 519.8 157.8 519.8 139 501C120.2 482.2 120.2 451.9 139 433.1zM139 139C157.8 120.2 188.1 120.2 206.9 139C225.7 157.8 225.7 188.1 206.9 206.9C188.1 225.7 157.8 225.7 139 206.9C120.2 188.1 120.2 157.8 139 139zM501 433.1C519.8 451.9 519.8 482.2 501 501C482.2 519.8 451.9 519.8 433.1 501C414.3 482.2 414.3 451.9 433.1 433.1C451.9 414.3 482.2 414.3 501 433.1z" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Sedang Diproses</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--
    <!-- STATE KOSONG (Jika tidak ada pengajuan aktif) --> --}}
    <div
        class="p-12 mb-12 text-center bg-white border-2 border-gray-300 border-dashed shadow-sm dark:bg-gray-800 rounded-3xl dark:border-gray-700 drop-shadow-lg">
        <svg class="w-12 h-12 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
        </svg>
        <h3 class="mt-2 text-sm font-semibold text-gray-900 dark:text-white">Tidak ada pengajuan aktif</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Anda belum melakukan pemesanan kamar baru-baru ini.</p>
        <div class="mt-6">
            <a href="{{ route('booking.form') }}"
                class="inline-flex items-center px-5 py-3 text-sm font-bold text-black transition-colors bg-yellow-400 shadow-sm rounded-xl hover:bg-yellow-500">
                <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                </svg>
                Sewa Kamar Baru
            </a>
        </div>
    </div>

    {{--
    <!-- SECTION 2: RIWAYAT PENGAJUAN --> --}}
    <div class="mt-12">
        <h2 class="flex items-center gap-2 mb-6 text-xl font-bold text-gray-900">
            <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Riwayat Pengajuan
        </h2>
        <div
            class="overflow-x-auto bg-white border border-gray-200 shadow-sm dark:bg-gray-800 rounded-2xl dark:border-gray-700 drop-shadow-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs text-gray-700 uppercase border-b bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-4">ID Booking</th>
                        <th scope="col" class="px-6 py-4">Tanggal</th>
                        <th scope="col" class="px-6 py-4">Kamar</th>
                        <th scope="col" class="px-6 py-4 text-center">Status</th>
                        <th scope="col" class="px-6 py-4">Catatan</th>
                        <th scope="col" class="px-6 py-4">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="align-top transition-colors bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50">
                        <td class="px-6 py-4 font-mono font-medium text-gray-900 dark:text-white">
                            0312205YLKAD
                        </td>
                        <td class="px-6 py-4">
                            13
                        </td>
                        <td class="px-6 py-4">
                            13
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div
                                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1.5  dark:bg-green-900 dark:text-green-300 border border-green-200 dark:border-green-900 rounded-full">
                                <span class="flex items-center gap-1">
                                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">me.com
                                        License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path
                                            d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM450.7 372.9C462.6 369.2 474.6 379.2 470.3 391C447.9 452.3 389 496.1 320 496.1C251 496.1 192.1 452.2 169.7 390.9C165.4 379.1 177.4 369.1 189.3 372.8C228.5 385 273 391.9 320 391.9C367 391.9 411.5 385 450.7 372.8zM272 256C272 291.3 257.7 320 240 320C222.3 320 208 291.3 208 256C208 220.7 222.3 192 240 192C257.7 192 272 220.7 272 256zM400 320C382.3 320 368 291.3 368 256C368 220.7 382.3 192 400 192C417.7 192 432 220.7 432 256C432 291.3 417.7 320 400 320z" />
                                    </svg>
                                    <span>
                                        Diterima
                                    </span>
                                </span>
                            </div>
                            <div
                                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1.5  dark:bg-green-900 dark:text-green-300 border border-green-200 dark:border-green-900 rounded-full">
                                <span class="flex items-center gap-1">
                                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                    </svg>
                                    <span>
                                        Selesai
                                    </span>
                                </span>
                            </div>
                            <div
                                class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-1.5  dark:bg-red-900 dark:text-red-300 border border-red-200 dark:border-red-900 rounded-full">
                                <span class="flex items-center gap-1">
                                    <svg class="w-5 h-5 animate-pulse" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path
                                            d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM231 231C240.4 221.6 255.6 221.6 264.9 231L319.9 286L374.9 231C384.3 221.6 399.5 221.6 408.8 231C418.1 240.4 418.2 255.6 408.8 264.9L353.8 319.9L408.8 374.9C418.2 384.3 418.2 399.5 408.8 408.8C399.4 418.1 384.2 418.2 374.9 408.8L319.9 353.8L264.9 408.8C255.5 418.2 240.3 418.2 231 408.8C221.7 399.4 221.6 384.2 231 374.9L286 319.9L231 264.9C221.6 255.5 221.6 240.3 231 231z" />
                                    </svg>
                                    <span>
                                        Ditolak
                                    </span>
                                </span>
                            </div>
                            <div
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-1.5  dark:bg-yellow-900 dark:text-yellow-300 border border-yellow-200 dark:border-yellow-900 rounded-full">
                                <span class="flex items-center gap-1">
                                    <svg class="w-5 h-5 animate-spin" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path
                                            d="M272 112C272 85.5 293.5 64 320 64C346.5 64 368 85.5 368 112C368 138.5 346.5 160 320 160C293.5 160 272 138.5 272 112zM272 528C272 501.5 293.5 480 320 480C346.5 480 368 501.5 368 528C368 554.5 346.5 576 320 576C293.5 576 272 554.5 272 528zM112 272C138.5 272 160 293.5 160 320C160 346.5 138.5 368 112 368C85.5 368 64 346.5 64 320C64 293.5 85.5 272 112 272zM480 320C480 293.5 501.5 272 528 272C554.5 272 576 293.5 576 320C576 346.5 554.5 368 528 368C501.5 368 480 346.5 480 320zM139 433.1C157.8 414.3 188.1 414.3 206.9 433.1C225.7 451.9 225.7 482.2 206.9 501C188.1 519.8 157.8 519.8 139 501C120.2 482.2 120.2 451.9 139 433.1zM139 139C157.8 120.2 188.1 120.2 206.9 139C225.7 157.8 225.7 188.1 206.9 206.9C188.1 225.7 157.8 225.7 139 206.9C120.2 188.1 120.2 157.8 139 139zM501 433.1C519.8 451.9 519.8 482.2 501 501C482.2 519.8 451.9 519.8 433.1 501C414.3 482.2 414.3 451.9 433.1 433.1C451.9 414.3 482.2 414.3 501 433.1z" />
                                    </svg>
                                    <span>
                                        Pending
                                    </span>
                                </span>
                            </div>
                        </td>
                        <td class="px-4 py-4 text-gray-500">
                            <div class="max-w-xs text-gray-500 whitespace-normal line-clamp-3">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nihil placeat sequi
                                incidunt
                                adipisci et officia quas ab, voluptas amet quis ut iste dicta nesciunt nemo labore?
                                Similique, deserunt itaque!
                            </div>
                        </td>
                        <td class="max-w-xs px-6 py-4 text-gray-500 truncate">
                            <button
                                class="flex gap-1 bg-blue-600 text-blue-100 p-1.5 px-2.5 rounded-full text-xs items-center justify-center hover:bg-blue-700 transition-color duration-300">
                                <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640">
                                    <path
                                        d="M320 96C239.2 96 174.5 132.8 127.4 176.6C80.6 220.1 49.3 272 34.4 307.7C31.1 315.6 31.1 324.4 34.4 332.3C49.3 368 80.6 420 127.4 463.4C174.5 507.1 239.2 544 320 544C400.8 544 465.5 507.2 512.6 463.4C559.4 419.9 590.7 368 605.6 332.3C608.9 324.4 608.9 315.6 605.6 307.7C590.7 272 559.4 220 512.6 176.6C465.5 132.9 400.8 96 320 96zM176 320C176 240.5 240.5 176 320 176C399.5 176 464 240.5 464 320C464 399.5 399.5 464 320 464C240.5 464 176 399.5 176 320zM320 256C320 291.3 291.3 320 256 320C244.5 320 233.7 317 224.3 311.6C223.3 322.5 224.2 333.7 227.2 344.8C240.9 396 293.6 426.4 344.8 412.7C396 399 426.4 346.3 412.7 295.1C400.5 249.4 357.2 220.3 311.6 224.3C316.9 233.6 320 244.4 320 256z" />
                                </svg>
                                <span>Tampilkan</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-gray-400 dark:text-gray-500">
                            Belum ada riwayat pengajuan sebelumnya.
                        </td>
                    </tr>
                </tbody>
            </table>
            {{----------------------------------------------------------------}}
            {{-- PAGINATION--}}
            {{----------------------------------------------------------------}}
            <div
                class="flex flex-col items-center justify-between p-5 border-t border-gray-200 md:flex-row dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800">
                <span class="block mb-4 text-sm text-gray-700 dark:text-gray-400 md:mb-0">
                    Menampilkan <span class="mx-1 font-semibold text-white">...</span> sampai
                    <span class="mx-1 font-semibold text-white">...</span> dari total <span
                        class="mx-1 font-semibold text-white">...</span>
                    Barisan
                </span>
                <div class="inline-flex">
                    {{----------------------------------------------------------------}}
                    {{-- TOMBOL PREVIOUS --}}
                    {{----------------------------------------------------------------}}
                    <span
                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                        Prev
                    </span>
                    <a href=""
                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                        Prev
                    </a>
                    {{----------------------------------------------------------------}}
                    {{-- TOMBOL NEXT --}}
                    {{----------------------------------------------------------------}}
                    <a href=""
                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-t border-b border-r border-gray-300 rounded-r-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                    </a>
                    <span
                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border-t border-b border-r border-gray-300 rounded-r-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                        Next
                    </span>
                </div>
            </div>
            {{--------------------------------------------------------------}}
            {{-- END PAGINATION --}}
            {{--------------------------------------------------------------}}
        </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script type="text/html" id="listBadge">
    <div>
        <span
            class="inline-flex items-center px-4 py-2 text-sm font-bold text-yellow-700 bg-yellow-100 border border-yellow-200 rounded-full badge badge-pending">
            <svg class="w-4 h-4 mr-2 animate-spin" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            Menunggu Verifikasi
        </span>
        <span
            class="inline-flex items-center px-4 py-2 text-sm font-bold text-green-700 bg-green-100 border border-green-200 rounded-full badge badge-confirmed">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                </path>
            </svg>
            Disetujui
        </span>
        <span
            class="inline-flex items-center px-4 py-2 text-sm font-bold text-red-700 bg-red-100 border border-red-200 rounded-full badge badge-cancelled">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
            Ditolak / Batal
        </span>
        <div>
</script>
<script type="text/html" id="detailDescription">
    <div>
        <div
            class="p-5 mt-6 border-l-4 border-red-500 description description-cancelled bg-red-50 dark:bg-red-900/20 rounded-r-xl animate-fade-in">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="w-6 h-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <div class="w-full ml-4">
                    <h3 class="text-lg font-bold text-red-800 dark:text-red-400">Pengajuan Ditolak
                    </h3>

                    <div
                        class="p-3 mt-2 text-sm text-red-700 border border-red-100 rounded-lg dark:text-red-200 bg-white/60 dark:bg-black/20 dark:border-red-800/50">
                        <span id="notes" class="block mb-1 font-semibold">Alasan dari Admin:</span>

                    </div>

                    <div class="mt-4">
                        <p class="mb-3 text-sm text-red-600 dark:text-red-300">
                            Silakan perbaiki data atau pilih kamar lain, lalu ajukan ulang.
                        </p>

                        <a href="{{ route('booking.form') }}"
                            class="inline-flex items-center px-5 py-2.5 bg-red-600 hover:bg-red-700 text-white text-sm font-bold rounded-xl shadow-lg shadow-red-500/30 transition-all transform active:scale-95 focus:ring-4 focus:ring-red-300">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                </path>
                            </svg>
                            Ajukan Ulang Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="p-5 mt-6 border-l-4 border-green-500 description description-confirmed bg-green-50 dark:bg-green-900/20 rounded-r-xl">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-green-700 dark:text-green-300">
                        Selamat! Pengajuan diterima. Silakan hubungi admin atau cek menu tagihan.
                    </p>
                </div>
            </div>
        </div>
        <div>
</script>
<script type="text/html" id="statusVisual">
    <div>
        <div
            class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-green-100 rounded-full visual visual-confirmed dark:bg-green-900/30">
            <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <h4 class="font-bold text-gray-900 dark:text-white">Siap Huni</h4>
        <div
            class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-red-100 rounded-full visual visual-cancelled dark:bg-red-900/30">
            <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <h4 class="font-bold text-gray-900 dark:text-white">Ditolak</h4>
        <div
            class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-yellow-100 rounded-full visual visual-pending dark:bg-yellow-900/30 animate-pulse">
            <svg class="w-12 h-12 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <h4 class="font-bold text-gray-900 dark:text-white">Sedang Diproses</h4>
    </div>
</script>
<script>
    let badgeContainer, badgePending, badgeConfirmed, badgeCancelled;
    let descriptionContainer, descriptionPending, descriptionConfirmed, descriptionCancelled;
    let visualContainer, visualPending, visualConfirmed, visualCancelled;
    function detailPengajuan(idBooking) {
        $.post("{{ route('booking.status.detail') }}", {
            id_booking: idBooking,
            _token: '{{ csrf_token() }}'
        }, function(response) {
            clearDetail();

            if (response.status === 'pending') {

                badgeContainer.append(badgePending);
                descriptionContainer.append(descriptionPending);
                visualContainer.append(visualPending);

            } else if (response.status === 'confirmed') {

                badgeContainer.append(badgeConfirmed);
                descriptionContainer.append(descriptionConfirmed);
                visualContainer.append(visualConfirmed);

            } else if (response.status === 'cancelled') {

                badgeContainer.append(badgeCancelled);
                descriptionContainer.append(descriptionCancelled);
                visualContainer.append(visualCancelled);

            }

            $('#id_booking').text(response.id);
            $('#room_name').text(response.room.room_name);
            $('#check_in').text(formatDate(response.check_in));
            $('#total_paid').text(response.total_paid ?? '-');
            $('#created_at').text(formatDate(response.created_at));
        });
    }

    function clearDetail() {
        badgeContainer.find('.badge').remove();
        descriptionContainer.find('.description').remove();
        visualContainer.find('.visual').remove();

        $('[name="id_booking"]').text('-');
        $('#room_name').text('-');
        $('#check_in').text('-');
        $('#total_paid').text('-');
        $('#created_at').text('-');
    }

    $(document).ready(function() {
        const listBadgeHtml = $('#listBadge').html();
        const detailDescriptionHtml = $('#detailDescription').html();
        const statusVisualHtml = $('#statusVisual').html();

        const $listBadgeFragment = $('<div>').html(listBadgeHtml);
        const $detailDescriptionFragment = $('<div>').html(detailDescriptionHtml);
        const $statusVisualFragment = $('<div>').html(statusVisualHtml);

        badgeContainer = $('.badge-container');
        badgePending = $listBadgeFragment.find('.badge-pending').prop('outerHTML');
        badgeConfirmed = $listBadgeFragment.find('.badge-confirmed').prop('outerHTML');
        badgeCancelled = $listBadgeFragment.find('.badge-cancelled').prop('outerHTML');

        descriptionContainer = $('.description-container');
        descriptionPending = $detailDescriptionFragment.find('.description-pending').prop('outerHTML');
        descriptionConfirmed = $detailDescriptionFragment.find('.description-confirmed').prop('outerHTML');
        descriptionCancelled = $detailDescriptionFragment.find('.description-cancelled').prop('outerHTML');

        visualContainer = $('.visual-container');
        visualPending = $statusVisualFragment.find('.visual-pending').prop('outerHTML');
        visualConfirmed = $statusVisualFragment.find('.visual-confirmed').prop('outerHTML');
        visualCancelled = $statusVisualFragment.find('.visual-cancelled').prop('outerHTML');

        $('[name="btnDetail"]:first').trigger('click');
    });
</script>
@endpush

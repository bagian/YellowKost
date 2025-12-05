@extends('default')
@section('content')

<div class="max-w-5xl min-h-screen p-6 mx-auto text-gray-800 md:p-10 dark:text-gray-200">
    <!-- Header Page -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Status <span class="text-yellow-500">Pengajuan
                Sewa</span></h1>
        <p class="mt-1 text-gray-500 dark:text-gray-400">Pantau proses verifikasi dan riwayat pemesanan kamar Anda.</p>
    </div>
    <!-- SECTION 1: STATUS PENGAJUAN AKTIF -->
    <div
        class="mb-12 overflow-hidden transition-all bg-white border border-gray-100 shadow-lg dark:bg-gray-800 rounded-3xl dark:border-gray-700 hover:shadow-xl">
        <!-- Header Card: ID & Status Badge -->
        <div
            class="flex flex-col items-start justify-between gap-4 px-6 py-5 border-b border-gray-100 bg-gray-50 dark:bg-gray-700/50 dark:border-gray-700 md:flex-row md:items-center">
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

        <!-- Body Card -->
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

                    <!-- === AREA KHUSUS JIKA DITOLAK === -->
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

                                <!-- Alasan Penolakan -->
                                <div
                                    class="p-3 mt-2 text-sm text-red-700 border border-red-100 rounded-lg dark:text-red-200 bg-white/60 dark:bg-black/20 dark:border-red-800/50">
                                    <span class="block mb-1 font-semibold">Alasan dari Admin:</span>

                                </div>

                                <div class="mt-4">
                                    <p class="mb-3 text-sm text-red-600 dark:text-red-300">
                                        Silakan perbaiki data atau pilih kamar lain, lalu ajukan ulang.
                                    </p>

                                    <!-- TOMBOL PENGAJUAN ULANG -->
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

                    <!-- Pesan Jika Diterima -->
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

                <!-- Kolom Kanan: Status Visual -->
                <div
                    class="items-center justify-center hidden p-6 border border-gray-100 md:flex bg-gray-50 dark:bg-gray-700/30 rounded-2xl dark:border-gray-700">
                    <div class="text-center">
                        <div class="pb-6">
                            <span
                                class="p-3 px-4 font-bold border border-gray-100 rounded-full dark:bg-gray-700/80 dark:border-gray-700">Status
                                Pengajuan Anda</span>
                        </div>
                        <span>
                            <div
                                class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-green-100 rounded-full dark:bg-green-900/30">
                                <svg class="w-12 h-12 text-green-500" fill="currentColor" stroke="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path
                                        d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM450.7 372.9C462.6 369.2 474.6 379.2 470.3 391C447.9 452.3 389 496.1 320 496.1C251 496.1 192.1 452.2 169.7 390.9C165.4 379.1 177.4 369.1 189.3 372.8C228.5 385 273 391.9 320 391.9C367 391.9 411.5 385 450.7 372.8zM272 256C272 291.3 257.7 320 240 320C222.3 320 208 291.3 208 256C208 220.7 222.3 192 240 192C257.7 192 272 220.7 272 256zM400 320C382.3 320 368 291.3 368 256C368 220.7 382.3 192 400 192C417.7 192 432 220.7 432 256C432 291.3 417.7 320 400 320z" />
                                </svg>

                            </div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Diterima</h4>
                        </span>
                        <span>
                            <div
                                class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-blue-100 rounded-full dark:bg-blue-900/30">
                                <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Siap Huni</h4>
                        </span>
                        <div
                            class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-red-100 rounded-full dark:bg-red-900/30">
                            <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-900 dark:text-white">Ditolak</h4>
                        <div
                            class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-yellow-100 rounded-full dark:bg-yellow-900/30 animate-pulse">
                            <svg class="w-12 h-12 text-yellow-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-900 dark:text-white">Sedang Diproses</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- STATE KOSONG (Jika tidak ada pengajuan aktif) -->
    <div
        class="p-12 mb-12 text-center bg-white border-2 border-gray-300 border-dashed shadow-sm dark:bg-gray-800 rounded-3xl dark:border-gray-700">
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

    <!-- SECTION 2: RIWAYAT PENGAJUAN -->
    <div class="mt-12">
        <h2 class="flex items-center gap-2 mb-6 text-xl font-bold text-gray-900">
            <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Riwayat Pengajuan
        </h2>

        <div
            class="overflow-x-auto bg-white border border-gray-200 shadow-sm dark:bg-gray-800 rounded-2xl dark:border-gray-700">
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
                            <span
                                class=" border-green-500 bg-green-50 dark:bg-green-900/20 text-xs font-medium px-2.5 py-1.5 flex rounded-full">
                                <div class="flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-400" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path
                                            d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM450.7 372.9C462.6 369.2 474.6 379.2 470.3 391C447.9 452.3 389 496.1 320 496.1C251 496.1 192.1 452.2 169.7 390.9C165.4 379.1 177.4 369.1 189.3 372.8C228.5 385 273 391.9 320 391.9C367 391.9 411.5 385 450.7 372.8zM272 256C272 291.3 257.7 320 240 320C222.3 320 208 291.3 208 256C208 220.7 222.3 192 240 192C257.7 192 272 220.7 272 256zM400 320C382.3 320 368 291.3 368 256C368 220.7 382.3 192 400 192C417.7 192 432 220.7 432 256C432 291.3 417.7 320 400 320z" />
                                    </svg>
                                    <div class="ml-1.5">
                                        <p class="text-sm text-green-700 dark:text-green-300">
                                            Diterima
                                        </p>
                                    </div>
                                </div>
                            </span>
                            <span
                                class=" border-blue-500 bg-blue-50 dark:bg-blue-900/20 text-xs font-medium px-2.5 py-1.5 flex rounded-full">
                                <div class="flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="ml-1.5">
                                        <p class="text-sm text-blue-700 dark:text-blue-300">
                                            Selesai
                                        </p>
                                    </div>
                                </div>
                            </span>
                            <span
                                class=" bg-red-100 text-red-800 text-xs font-medium px-2.5 py-1.5  dark:bg-red-900 dark:text-red-300 border border-red-200 dark:border-red-900 rounded-full flex">
                                <div class="flex items-center justify-center">
                                    <svg class="w-5 h-5 text-red-300 animate-pulse" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                    <div class="ml-1.5">
                                        <p class="text-sm text-red-700 dark:text-red-300">
                                            Ditolak
                                        </p>
                                    </div>
                                </div>
                            </span>
                            <span
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-1.5 dark:bg-yellow-900 dark:text-yellow-300 border border-yellow-200 dark:border-yellow-900 rounded-full flex">
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 text-yellow-500 animate-pulse" fill="currentColor" stroke="none"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path
                                            d="M160 64C142.3 64 128 78.3 128 96C128 113.7 142.3 128 160 128L160 139C160 181.4 176.9 222.1 206.9 252.1L274.8 320L206.9 387.9C176.9 417.9 160 458.6 160 501L160 512C142.3 512 128 526.3 128 544C128 561.7 142.3 576 160 576L480 576C497.7 576 512 561.7 512 544C512 526.3 497.7 512 480 512L480 501C480 458.6 463.1 417.9 433.1 387.9L365.2 320L433.1 252.1C463.1 222.1 480 181.4 480 139L480 128C497.7 128 512 113.7 512 96C512 78.3 497.7 64 480 64L160 64zM224 139L224 128L416 128L416 139C416 164.5 405.9 188.9 387.9 206.9L320 274.8L252.1 206.9C234.1 188.9 224 164.4 224 139z" />
                                    </svg>
                                    <div class="ml-1.5">
                                        <p class="text-sm text-yellow-700 dark:text-yellow-300">
                                            Pending
                                        </p>
                                    </div>
                                </div>
                            </span>
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
            {{-- PAGINATION --}}
            <div
                class="flex flex-col items-center justify-between p-5 border-t border-gray-200 md:flex-row dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800">

                <span class="block mb-4 text-sm text-gray-700 dark:text-gray-400 md:mb-0">
                    Menampilkan <span class="mx-1 font-semibold text-white">...</span> sampai
                    <span class="mx-1 font-semibold text-white">...</span> dari total <span
                        class="mx-1 font-semibold text-white">...</span>
                    Barisan
                </span>
                <div class="inline-flex">
                    {{-- TOMBOL PREVIOUS --}}
                    <span
                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                        Prev
                    </span>
                    <a href=""
                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                        Prev
                    </a>
                    {{-- TOMBOL NEXT --}}
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
        </div>
    </div>

</div>
@endsection

@extends('default')

@section('content')

<div class="min-h-screen p-6 md:p-10 max-w-5xl mx-auto text-gray-800 dark:text-gray-200">
    <!-- Header Page -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Status <span class="text-yellow-500">Pengajuan
                Sewa</span></h1>
        <p class="text-gray-500 dark:text-gray-400 mt-1">Pantau proses verifikasi dan riwayat pemesanan kamar Anda.</p>
    </div>
    <!-- SECTION 1: STATUS PENGAJUAN AKTIF -->
    <div
        class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-100 dark:border-gray-700 overflow-hidden mb-12 transition-all hover:shadow-xl">
        <!-- Header Card: ID & Status Badge -->
        <div
            class="bg-gray-50 dark:bg-gray-700/50 px-6 py-5 border-b border-gray-100 dark:border-gray-700 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider">ID Pemesanan</p>
                {{-- nomor pesanan diambil dari tgl/bulan/tahun dan singkatan yellow kost, nama depan user dan belakang
                --}}
                <h3 class="text-xl font-bold text-gray-900 dark:text-white font-mono">0312205YLKAD</h3>
            </div>

            <!-- Logika Badge Status -->
            <span
                class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold bg-yellow-100 text-yellow-700 border border-yellow-200">
                <svg class="w-4 h-4 mr-2 animate-spin" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                Menunggu Verifikasi
            </span>
            <span
                class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold bg-green-100 text-green-700 border border-green-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Disetujui
            </span>
            <span
                class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold bg-red-100 text-red-700 border border-red-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
                Ditolak / Batal
            </span>
        </div>

        <!-- Body Card -->
        <div class="p-6 md:p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Kolom Kiri: Detail Data -->
                <div class="md:col-span-2 space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <p class="text-xs font-semibold uppercase text-gray-400 mb-1">Kamar Pilihan</p>
                            <p class="font-medium text-gray-900 dark:text-white text-lg">
                                44
                            </p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase text-gray-400 mb-1">Tanggal Masuk</p>
                            <p class="font-medium text-gray-900 dark:text-white text-lg">44
                            </p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase text-gray-400 mb-1">Total Biaya</p>
                            <p class="font-medium text-gray-900 dark:text-white text-lg">324
                            </p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase text-gray-400 mb-1">Tanggal Pengajuan</p>
                            <p class="font-medium text-gray-900 dark:text-white text-lg">
                                234
                            </p>
                        </div>
                    </div>

                    <!-- === AREA KHUSUS JIKA DITOLAK === -->
                    <div
                        class="mt-6 bg-red-50 dark:bg-red-900/20 border-l-4 border-red-500 p-5 rounded-r-xl animate-fade-in">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <!-- Icon Warning -->
                                <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="ml-4 w-full">
                                <h3 class="text-lg font-bold text-red-800 dark:text-red-400">Pengajuan Ditolak</h3>

                                <!-- Alasan Penolakan -->
                                <div
                                    class="mt-2 text-sm text-red-700 dark:text-red-200 bg-white/60 dark:bg-black/20 p-3 rounded-lg border border-red-100 dark:border-red-800/50">
                                    <span class="font-semibold block mb-1">Alasan dari Admin:</span>

                                </div>

                                <div class="mt-4">
                                    <p class="text-sm text-red-600 dark:text-red-300 mb-3">
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
                    <div class="mt-6 bg-green-50 dark:bg-green-900/20 border-l-4 border-green-500 p-5 rounded-r-xl">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
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
                    class="hidden md:flex items-center justify-center bg-gray-50 dark:bg-gray-700/30 rounded-2xl p-6 border border-gray-100 dark:border-gray-700">
                    <div class="text-center">
                        <div class="pb-6">
                            <span
                                class="font-bold dark:bg-gray-700/80 p-3 rounded-full px-4 border border-gray-100 dark:border-gray-700">Status
                                Pengajuan Anda</span>
                        </div>
                        <div
                            class="w-24 h-24 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-900 dark:text-white">Siap Huni</h4>
                        <div
                            class="w-24 h-24 bg-red-100 dark:bg-red-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-900 dark:text-white">Ditolak</h4>
                        <div
                            class="w-24 h-24 bg-yellow-100 dark:bg-yellow-900/30 rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse">
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
        class="bg-white dark:bg-gray-800 rounded-3xl shadow-sm border-2 border-dashed border-gray-300 dark:border-gray-700 p-12 text-center mb-12">
        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
        </svg>
        <h3 class="mt-2 text-sm font-semibold text-gray-900 dark:text-white">Tidak ada pengajuan aktif</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Anda belum melakukan pemesanan kamar baru-baru ini.</p>
        <div class="mt-6">
            <a href="{{ route('booking.form') }}"
                class="inline-flex items-center rounded-xl bg-yellow-400 px-5 py-3 text-sm font-bold text-black shadow-sm hover:bg-yellow-500 transition-colors">
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
        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Riwayat Pengajuan
        </h2>

        <div
            class="overflow-x-auto bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300 border-b dark:border-gray-700">
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
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors align-top">
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
                                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1.5  dark:bg-green-900 dark:text-green-300 border border-green-200 dark:border-green-900 rounded-full">Diterima</span>
                            <span
                                class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-1.5  dark:bg-red-900 dark:text-red-300 border border-red-200 dark:border-red-900 rounded-full">Ditolak</span>
                            <span
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-1.5  dark:bg-yellow-900 dark:text-yellow-300 border border-yellow-200 dark:border-yellow-900 rounded-full">Pending</span>
                        </td>
                        <td class="px-4 py-4 text-gray-500">
                            <div class="text-gray-500 max-w-xs whitespace-normal line-clamp-3">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nihil placeat sequi
                                incidunt
                                adipisci et officia quas ab, voluptas amet quis ut iste dicta nesciunt nemo labore?
                                Similique, deserunt itaque!
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-500 truncate max-w-xs">
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
        </div>
    </div>

</div>
@endsection

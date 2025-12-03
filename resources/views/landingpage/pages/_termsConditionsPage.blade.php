@extends('landingpage.index')

@section('content')
<section class="relative py-16">
    <div class="relative max-w-4xl px-6 mx-auto text-center ">
        <span
            class="inline-block px-3 py-1 mb-4 text-sm font-semibold text-yellow-900 border rounded-full bg-yellow-500/20 border-yellow-500/30">
            Peraturan & Tata Tertib Resmi
        </span>
        <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-800 sm:text-5xl">
            Syarat & Ketentuan <br><span class="text-yellow-400 ">YellowKost</span>
        </h1>
        <p class="max-w-2xl mx-auto mt-6 leading-6 text-gray-500">
            Dokumen ini mengatur hak dan kewajiban antara Pengelola dan Penyewa demi terciptanya lingkungan hunian yang
            aman, nyaman, dan kondusif di Griya Mangli Indah.
        </p>
    </div>
</section>

<section class="py-10">
    <div class="max-w-6xl px-6 mx-auto ">

        <div class="p-8 mb-12 bg-yellow-100 border-l-4 border-yellow-500 shadow-sm">
            <p class="text-yellow-700">
                "Dengan menandatangani formulir pendaftaran atau melakukan pembayaran deposit, Penyewa dianggap telah
                <strong>membaca, memahami, dan menyetujui</strong> seluruh poin yang tertulis di bawah ini tanpa
                paksaan."
            </p>
        </div>

        <div class="grid grid-cols-1 gap-2 md:grid-cols-2">

            <div
                class="p-8 transition-shadow duration-300 bg-gray-800 border-gray-700 shadow-lg rounded-3xl hover:shadow-xl">
                <div class="flex items-center gap-4 pb-4 mb-6 border-b border-gray-700">
                    <div class="flex items-center justify-center w-12 h-12 text-yellow-600 rounded-xl bg-yellow-900/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0c-4.938 2.25-9 8-9 8m9-8c4.938 2.25 9 8 9 8m-9-8v4m0 0h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">1. Administrasi Penghuni</h3>
                </div>
                <ul class="pl-5 space-y-4 text-sm leading-7 text-gray-300 list-disc marker:text-yellow-500">
                    <li>
                        <strong class="text-white">Identitas Valid:</strong>
                        <p>
                            Calon penghuni wajib menyerahkan fotokopi E-KTP (Kartu Tanda
                            Penduduk) dan Kartu Keluarga (KK) yang masih berlaku untuk data kepolisian setempat (RT/RW).
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Aturan Pasutri (Suami-Istri):</strong>
                        <p>
                            Khusus bagi penyewa lawan jenis yang tinggal
                            dalam satu kamar, <strong>WAJIB</strong> menunjukkan Buku Nikah Asli atau sertifikat
                            pernikahan
                            resmi negara. Nikah siri atau pasangan tanpa ikatan resmi dilarang keras.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Kapasitas Kamar:</strong>
                        <p>
                            Satu kamar standar hanya diperuntukkan bagi 1 (satu) orang.
                            Penambahan penghuni tetap (sekamar berdua) harus seizin pengelola dan akan dikenakan biaya
                            tambahan sewa bulanan.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Alih Sewa:</strong>
                        <p>
                            Penyewa dilarang keras meminjamkan, menyewakan kembali (sublet),
                            atau memindahtangankan kunci kamar kepada pihak ketiga tanpa persetujuan tertulis dari
                            pengelola.
                        </p>
                    </li>
                </ul>
            </div>

            <div
                class="p-8 transition-shadow duration-300 bg-gray-800 border-gray-700 shadow-lg rounded-3xl hover:shadow-xl">
                <div class="flex items-center gap-4 pb-4 mb-6 border-b border-gray-700">
                    <div class="flex items-center justify-center w-12 h-12 text-green-600 rounded-xl bg-green-900/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">2. Sistem Pembayaran</h3>
                </div>
                <ul class="pl-5 space-y-4 text-sm leading-7 text-justify text-gray-300 list-disc marker:text-green-500">
                    <li>
                        <strong class="text-white">Jatuh Tempo:</strong>
                        <p>
                            Pembayaran sewa wajib dilakukan di awal (Prepaid), paling lambat
                            pada tanggal yang sama dengan tanggal masuk (Check-in) setiap bulannya.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Keterlambatan:</strong>
                        <p>
                            Keterlambatan pembayaran lebih dari 3 (tiga) hari tanpa
                            konfirmasi akan dikenakan denda harian sebesar Rp 20.000,-/hari atau pemutusan akses listrik
                            sementara.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Kebijakan Refund:</strong>
                        <p>
                            Biaya sewa yang telah dibayarkan tidak dapat dikembalikan
                            (Non-Refundable) jika penyewa memutuskan pindah sebelum masa sewa berakhir, kecuali ada
                            kesepakatan khusus.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Deposit (Jika ada):</strong>
                        <p>
                            Uang jaminan akan dikembalikan utuh saat check-out, dengan
                            syarat tidak ada kerusakan fasilitas, tunggakan listrik, atau kehilangan kunci.
                        </p>
                    </li>
                </ul>
            </div>

            <div
                class="p-8 transition-shadow duration-300 bg-gray-800 border-gray-700 shadow-lg rounded-3xl hover:shadow-xl">
                <div class="flex items-center gap-4 pb-4 mb-6 border-b border-gray-700">
                    <div class="flex items-center justify-center w-12 h-12 text-blue-600 rounded-xl bg-blue-900/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">3. Fasilitas & Kelistrikan</h3>
                </div>
                <ul class="pl-5 space-y-4 text-sm leading-7 text-justify text-gray-300 list-disc marker:text-blue-500">
                    <li>
                        <strong class="text-white">Token Listrik:</strong>
                        <p>
                            Biaya sewa BELUM termasuk listrik. Setiap kamar dilengkapi
                            meteran token daya 900 Watt yang menjadi tanggung jawab penyewa sepenuhnya.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Alat Elektronik Berat:</strong>
                        <p>
                            Dilarang membawa peralatan elektronik berdaya tinggi
                            (seperti: Kulkas pribadi, AC Portable, Dispenser Pemanas, Kompor Listrik Induksi) tanpa
                            izin,
                            untuk mencegah korsleting/turun daya.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Kerusakan Fasilitas:</strong>
                        <p>
                            Penyewa wajib menjaga inventaris (Kasur, Lemari, Kunci,
                            Kran Air). Kerusakan akibat kelalaian (human error) wajib diganti sesuai harga barang.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Modifikasi Kamar:</strong>
                        <p>
                            Dilarang memaku tembok, menempel stiker yang sulit dilepas,
                            atau mengecat ulang dinding kamar tanpa izin pengelola.
                        </p>
                    </li>
                </ul>
            </div>

            <div
                class="p-8 transition-shadow duration-300 bg-gray-800 border-gray-700 shadow-lg rounded-3xl hover:shadow-xl">
                <div class="flex items-center gap-4 pb-4 mb-6 border-b border-gray-700">
                    <div class="flex items-center justify-center w-12 h-12 text-purple-600 rounded-xl bg-purple-900/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">4. Tamu & Keamanan</h3>
                </div>
                <ul
                    class="pl-5 space-y-4 text-sm leading-7 text-justify text-gray-300 list-disc marker:text-purple-500 ">
                    <li>
                        <strong class="text-white">Jam Bertamu:</strong>
                        <p>
                            Batas waktu menerima tamu maksimal pukul 22.00 WIB. Pintu gerbang
                            utama wajib ditutup & dikunci kembali oleh penghuni yang keluar/masuk diatas jam tersebut.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Tamu Menginap:</strong>
                        <p>
                            Tamu (keluarga/teman sesama jenis) yang menginap wajib melapor
                            ke pengelola minimal 1x24 jam sebelumnya dan akan dikenakan biaya <em>extra charge</em> per
                            malam.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Tamu Lawan Jenis:</strong>
                        <p>
                            Dilarang keras menerima tamu lawan jenis di dalam kamar
                            dengan pintu tertutup. Silakan gunakan ruang tamu umum yang telah disediakan.
                        </p>
                    </li>
                    <li>
                        <strong class="text-white">Kehilangan Kunci:</strong>
                        <p>
                            Kehilangan kunci kamar/gerbang akan dikenakan denda
                            penggantian silinder kunci (full set) demi keamanan bersama.
                        </p>
                    </li>
                </ul>
            </div>

        </div>

        <div class="p-8 mt-10 border border-red-800 bg-red-900/30 rounded-3xl md:p-10">
            <div class="flex flex-col items-start gap-6 md:flex-row">
                <div class="flex-shrink-0">
                    <div
                        class="flex items-center justify-center w-16 h-16 text-red-900 rounded-full bg-red-900/20 animate-pulse">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="mb-2 text-2xl font-bold text-red-800">Pelanggaran Berat (Zero
                        Tolerance)</h3>
                    <p class="mb-6 text-red-600">
                        Pelanggaran terhadap poin-poin di bawah ini akan berakibat pada <strong>pemutusan hubungan sewa
                            secara sepihak</strong> (pengusiran) tanpa pengembalian sisa uang sewa, dan pelaporan kepada
                        pihak berwajib jika diperlukan:
                    </p>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium text-red-800">Narkoba & Obat Terlarang</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium text-red-800">Minuman Keras & Perjudian</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium text-red-800">Tindakan Asusila / Kumpul
                                Kebo</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium text-red-800">Pencurian & Tindak
                                Kriminal</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium text-red-800">Membawa Hewan Peliharaan</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-8 mt-12 text-center border-t border-gray-700">
                <p class="flex justify-center max-w-2xl mx-auto text-sm text-gray-800">
                    Syarat & Ketentuan ini dapat berubah sewaktu-waktu sesuai kebijakan manajemen tanpa pemberitahuan
                    tertulis sebelumnya.
                    Untuk informasi lebih lanjut, silakan hubungi Admin.
                </p>
                <div class="flex flex-col justify-center gap-4 mt-6 md:flex-row">
                    <a href="{{ route('home') }}"
                        class="px-6 py-2.5 rounded-xl text-sm font-semibold text-gray-900 bg-white  hover:bg-gray-50 transition-colors shadow-sm">
                        Kembali ke Beranda
                    </a>
                    <a href="{{ route('booking.form') }}"
                        class="px-6 py-2.5 rounded-xl text-sm font-bold text-black bg-yellow-400 hover:bg-yellow-500 transition-colors shadow-lg">
                        Saya Setuju & Pesan Kamar
                    </a>
                </div>
            </div>

        </div>
</section>
@endsection
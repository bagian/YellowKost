@extends('landingpage.index')

@section('content')
<div class="max-w-5xl mx-6">
    <section class="relative py-20">
        <div class="relative container px-6 mx-auto text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-yellow-500/20 text-yellow-900 text-sm font-semibold mb-4 border border-yellow-500/30">
                Legal & Keamanan
            </span>
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                Kebijakan <span class="text-yellow-500">Privasi</span>
            </h1>
            <span class="mt-4 text-gray-700 inline-block">
                Terakhir diperbarui:
                <span class="font-semibold text-yellow-600">
                    @php
                    $lastModified = filemtime(resource_path('views/landingpage/pages/_privacyPolicyPage.blade.php'));
                    @endphp

                    {{ \Carbon\Carbon::parse('2026-01-12 21:12:20', 'Asia/Jakarta')
                    ->locale('id')
                    ->isoFormat('D MMMM Y, HH:mm:ss') }}
                </span>
                <span>
                    Wib
                </span>
            </span>
        </div>
    </section>
    <section class="relative">
        <div class="bg-gray-800 p-8 md:p-12 rounded-3xl shadow-xl border border-gray-700">
            <div class="prose prose-lg prose-yellow max-w-none dark:prose-invert">
                <p class="text-gray-100 leading-8 text-justify hyphens-auto text-sm md:text-base">
                    Selamat datang di website <strong>Rumah Kost Yellow & Partners (YellowKost)</strong>.
                    Kami sangat menghargai privasi Anda dan berkomitmen untuk melindungi informasi pribadi yang Anda
                    bagikan kepada kami.
                    Dokumen ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi data Anda saat
                    menggunakan layanan atau menyewa kamar di tempat kami.
                </p>
            </div>

            <hr class="my-8 border-gray-700">
            <div class="mb-10">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-yellow-900/30 text-yellow-400 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-md lg:text-lg font-semibold text-white text-sm md:text-base">1. Informasi yang Kami
                        Kumpulkan</h2>
                </div>
                <p class="text-gray-200 lg:mb-4 lg:pl-14 text-sm md:text-base">
                    Saat Anda melakukan pemesanan atau menghubungi kami, kami mungkin meminta informasi berikut:
                </p>
                <ul
                    class="list-disc lg:pl-28 pl-8 space-y-2 text-gray-200 marker:text-yellow-500 my-4 text-sm md:text-base">
                    <li>
                        <strong>Identitas Pribadi:</strong>
                        <p>
                            Nama lengkap, alamat email, dan nomor telepon (WhatsApp).
                        </p>
                    </li>
                    <li>
                        <strong>Dokumen Verifikasi:</strong>
                        <p>
                            Foto KTP (Kartu Tanda Penduduk) untuk keperluan keamanan
                            dan pendataan penghuni.
                        </p>
                    </li>
                    <li>
                        <strong>Dokumen Tambahan:</strong>
                        <p>
                            Foto Buku Nikah resmi (khusus bagi penyewa pasangan
                            suami-istri).
                        </p>
                    </li>
                    <li>
                        <strong>Data Transaksi:</strong>
                        <p>
                            Bukti transfer pembayaran untuk validasi pemesanan.
                    </li>
                    </p>
                </ul>
            </div>
            <div class=" mb-10">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-yellow-900/30 text-yellow-400 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" stroke="" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path
                                d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l180 0c-22.7-31.5-36-70.2-36-112 0-100.6 77.4-183.2 176-191.3l0-38.1c0-17-6.7-33.3-18.7-45.3L290.7 18.7C278.7 6.7 262.5 0 245.5 0L96 0zM357.5 176L264 176c-13.3 0-24-10.7-24-24L240 58.5 357.5 176zM432 544a144 144 0 1 0 0-288 144 144 0 1 0 0 288zm16-208l0 48 48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16s7.2-16 16-16l48 0 0-48c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                        </svg>

                    </div>
                    <h2 class="text-md lg:text-lg font-semibold text-white text-sm md:text-base">2. Cara Kami
                        Menggunakan Informasi
                    </h2>
                </div>
                <p class="text-gray-200 lg:mb-4 lg:pl-14 text-sm md:text-base">
                    Data yang kami kumpulkan digunakan semata-mata untuk:
                </p>
                <ul
                    class="list-disc lg:pl-28 pl-8 space-y-2 text-gray-200 marker:text-yellow-500 my-4 text-sm md:text-base">
                    <li>Memproses konfirmasi booking kamar Anda.</li>
                    <li>Memverifikasi identitas demi keamanan seluruh penghuni kost (Griya Mangli Indah).</li>
                    <li>Menghubungi Anda terkait tagihan bulanan, info perbaikan, atau pengumuman kost.</li>
                    <li>Memastikan kepatuhan terhadap aturan norma dan hukum yang berlaku.</li>
                </ul>
            </div>

            <div class="mb-10">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-yellow-900/30 text-yellow-400 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" stroke="" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path
                                d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l201.2 0C261 469.4 240 414.5 240 356.4l0-31.1c0-34.4 22-65 54.7-75.9l112-37.3c3.1-1 6.2-1.8 9.3-2.5l0-39.1c0-17-6.7-33.3-18.7-45.3L290.7 18.7C278.7 6.7 262.5 0 245.5 0L96 0zM357.5 176L264 176c-13.3 0-24-10.7-24-24L240 58.5 357.5 176zm87.8 312.5l-13.3 6.3 0-188.1 96 32 0 19.6c0 55.8-32.2 106.5-82.7 130.3zM421.9 259.5l-112 37.3c-13.1 4.4-21.9 16.6-21.9 30.4l0 31.1c0 74.4 43 142.1 110.2 173.7l18.5 8.7c4.8 2.2 10 3.4 15.2 3.4s10.5-1.2 15.2-3.4l18.5-8.7C533 500.3 576 432.6 576 358.2l0-31.1c0-13.8-8.8-26-21.9-30.4l-112-37.3c-6.6-2.2-13.7-2.2-20.2 0z" />
                        </svg>
                    </div>
                    <h2 class="text-md lg:text-lg font-semibold text-white">3. Perlindungan & Pembagian Data</h2>
                </div>
                <div class="text-gray-200 lg:mb-4 lg:pl-14 leading-8 text-justify hyphens-auto text-sm md:text-base">
                    <p>
                        Kami berkomitmen menjaga kerahasiaan data pribadi Anda.
                        <span class="font-semibold text-gray-200 underline">Kami tidak akan pernah menjual,
                            menyewakan, atau membagikan data pribadi Anda</span> (seperti foto KTP atau Nomor HP) kepada
                        pihak ketiga untuk tujuan pemasaran. Data mungkin dibagikan hanya jika diwajibkan oleh hukum
                        atau diminta oleh pihak berwenang (Kepolisian/RT/RW) untuk keperluan penyelidikan keamanan.
                    </p>
                </div>
            </div>

            <div class="bg-gray-700/50 rounded-2xl p-6 border border-gray-600">
                <h3 class="text-lg font-bold text-white mb-2">Punya Pertanyaan Lain?</h3>
                <p class="text-gray-200 mb-4">
                    Jika Anda memiliki pertanyaan mengenai kebijakan privasi ini atau ingin mengajukan penghapusan data
                    setelah masa sewa berakhir, silakan hubungi kami.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="mailto:admin@yellowkost.com"
                        class="inline-flex items-center text-sm font-medium  hover:text-yellow-600 text-yellow-400">
                        <svg class="w-4 h-4 mr-2 hidden xl:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-xs lg:text-md">
                            admin@yellowkost.com
                        </span>
                    </a>
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium  hover:text-yellow-600 text-yellow-400">
                        <svg class="w-4 h-4 mr-2 hidden xl:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-xs lg:text-md">
                            Griya Mangli Indah No. AG 22, Jember
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
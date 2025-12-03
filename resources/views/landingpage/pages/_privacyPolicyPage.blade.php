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
            <p class="mt-4 text-gray-700">
                Terakhir diperbarui: {{ date('d F Y') }}
            </p>
        </div>
    </section>
    <section class="relative">
        <div class="bg-gray-800 p-8 md:p-12 rounded-3xl shadow-xl border border-gray-700">
            <div class="prose prose-lg prose-yellow max-w-none dark:prose-invert">
                <p class="text-gray-100 leading-8 text-justify">
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
                        class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-yellow-900/30 text-yellow-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-md lg:text-lg font-semibold text-white">1. Informasi yang Kami
                        Kumpulkan</h2>
                </div>
                <p class="text-gray-200 lg:mb-4 lg:pl-14">
                    Saat Anda melakukan pemesanan atau menghubungi kami, kami mungkin meminta informasi berikut:
                </p>
                <ul class="list-disc lg:pl-28 pl-8 space-y-2 text-gray-200 marker:text-yellow-500 my-4">
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
                        class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-yellow-900/30 text-yellow-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-md lg:text-lg font-semibold text-white">2. Cara Kami Menggunakan Informasi
                    </h2>
                </div>
                <p class="text-gray-200 lg:mb-4 lg:pl-14">
                    Data yang kami kumpulkan digunakan semata-mata untuk:
                </p>
                <ul class="list-disc lg:pl-28 pl-8 space-y-2 text-gray-200 marker:text-yellow-500 my-4">
                    <li>Memproses konfirmasi booking kamar Anda.</li>
                    <li>Memverifikasi identitas demi keamanan seluruh penghuni kost (Griya Mangli Indah).</li>
                    <li>Menghubungi Anda terkait tagihan bulanan, info perbaikan, atau pengumuman kost.</li>
                    <li>Memastikan kepatuhan terhadap aturan norma dan hukum yang berlaku.</li>
                </ul>
            </div>

            <div class="mb-10">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-yellow-900/30 text-yellow-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-md lg:text-lg font-semibold text-white">3. Perlindungan & Pembagian Data</h2>
                </div>
                <div class="text-gray-200 lg:mb-4 lg:pl-14 leading-8 text-justify">
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
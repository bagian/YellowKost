@extends('default')
@section('content')
<section class="flex flex-col items-center justify-center pt-20">
    <div id="receipt-card-pending"
        class="w-full max-w-md bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden relative">

        <div class="bg-orange-500 h-32 w-full absolute top-0 left-0 z-0">
            <svg class="absolute inset-0 h-full w-full opacity-10" xmlns="http://www.w3.org/2000/svg">
                <pattern id="pattern-pending" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1" fill="#fff" />
                </pattern>
                <rect width="100%" height="100%" fill="url(#pattern-pending)" />
            </svg>
        </div>

        <div class="relative z-10 pt-16 px-6 pb-8 text-center">

            <div class="mb-6 flex justify-center">
                <div class="warning-circle">
                    <div class="background"></div>
                    <div class="exclamation"></div>
                </div>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-1">Pembayaran Belum Selesai</h2>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Menunggu pembayaran Anda untuk diproses.</p>

            <div
                class="mt-8 bg-gray-50 dark:bg-gray-700/50 rounded-xl border border-gray-200 dark:border-gray-600 p-5 text-left">

                <div
                    class="flex flex-col items-center justify-center border-b border-dashed border-gray-300 dark:border-gray-500 pb-5 mb-5">
                    <span class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider">Total
                        Pembayaran</span>
                    <span class="text-3xl font-extrabold text-gray-900 dark:text-white mt-1">
                        Rp {{ number_format($transaction->amount ?? 0, 0, ',', '.') }}
                    </span>
                </div>

                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-500 dark:text-gray-400">Order ID</span>
                        <span class="font-medium text-gray-900 dark:text-white font-mono">
                            {{ $transaction->order_id ?? '-' }}
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500 dark:text-gray-400">Batas Waktu</span>
                        <span class="font-medium text-orange-600 dark:text-orange-400">
                            1 x 24 Jam
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500 dark:text-gray-400">Status</span>
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-300">
                            Menunggu / Pending
                        </span>
                    </div>

                    <div
                        class="mt-2 p-3 bg-blue-50 border border-blue-100 rounded-lg flex gap-2 items-start dark:bg-blue-900/30 dark:border-blue-800">
                        <svg class="w-5 h-5 text-blue-500 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-xs text-blue-700 dark:text-blue-300">
                            Silakan selesaikan pembayaran sesuai instruksi yang diberikan (Transfer
                            Bank/Indomaret/E-Wallet).
                        </p>
                    </div>
                </div>
            </div>

            <p class="mt-6 text-xs text-gray-400 dark:text-gray-400">
                Jika Anda sudah membayar, status akan berubah otomatis dalam beberapa menit.
            </p>

            <div class="mt-8 flex flex-col gap-3">
                @if(isset($transaction->payment_url))
                <a href="{{ $transaction->payment_url }}" target="_blank"
                    class="w-full inline-flex justify-center items-center px-4 py-3 border border-transparent rounded-xl shadow-sm text-sm font-semibold text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-400 transition-all">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    Lihat Cara Pembayaran
                </a>
                @else
                <a href="{{ route('dashboard') }}"
                    class="w-full inline-flex justify-center items-center px-4 py-3 border border-transparent rounded-xl shadow-sm text-sm font-semibold text-white bg-orange-500 hover:bg-orange-600 transition-all">
                    Cek Status Pembayaran
                </a>
                @endif

                <a href="{{ route('dashboard') }}"
                    class="w-full inline-flex justify-center items-center px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm text-sm font-semibold text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none transition-all">
                    Kembali ke Dashboard
                </a>
            </div>

        </div>
    </div>
</section>
@endsection

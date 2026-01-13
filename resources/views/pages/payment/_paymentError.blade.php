@extends('default')
@section('content')
<section class="flex flex-col items-center justify-center pt-20">
    <div id="receipt-card-error"
        class="w-full max-w-md bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden relative">

        <div class="bg-red-600 h-32 w-full absolute top-0 left-0 z-0">
            <svg class="absolute inset-0 h-full w-full opacity-10" xmlns="http://www.w3.org/2000/svg">
                <pattern id="pattern-error" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1" fill="#fff" />
                </pattern>
                <rect width="100%" height="100%" fill="url(#pattern-error)" />
            </svg>
        </div>

        <div class="relative z-10 pt-16 px-6 pb-8 text-center">

            <div class="mb-6 flex justify-center">
                <div class="cross-circle">
                    <div class="background"></div>
                    <div class="cross"></div>
                </div>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-1">Pembayaran Gagal!</h2>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Maaf, transaksi Anda tidak dapat diproses.</p>

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
                        <span class="text-gray-500 dark:text-gray-400">Tanggal</span>
                        <span class="font-medium text-gray-900 dark:text-white">
                            {{ \Carbon\Carbon::now()->format('d M Y, H:i') }}
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500 dark:text-gray-400">Status</span>
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300">
                            Gagal / Failed
                        </span>
                    </div>

                    <div
                        class="mt-2 p-2 bg-red-50 border border-red-100 rounded text-xs text-red-600 dark:bg-red-900/30 dark:border-red-800 dark:text-red-400">
                        Masalah koneksi bank atau saldo tidak cukup.
                    </div>
                </div>
            </div>

            <p class="mt-6 text-xs text-gray-400 dark:text-gray-400">
                Silakan coba ulangi pembayaran atau gunakan metode lain.
            </p>

            <div class="mt-8 flex flex-col gap-3">
                <a href=""
                    class="w-full inline-flex justify-center items-center px-4 py-3 border border-transparent rounded-xl shadow-sm text-sm font-semibold text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-red-500 transition-all">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                        </path>
                    </svg>
                    Coba Pembayaran Lagi
                </a>

                <a href="{{ route('dashboard') }}"
                    class="w-full inline-flex justify-center items-center px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm text-sm font-semibold text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none transition-all">
                    Kembali ke Dashboard
                </a>
            </div>

        </div>
    </div>
</section>
@endsection

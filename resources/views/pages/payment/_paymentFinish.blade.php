@extends('default')
@section('content')
<section class="flex flex-col items-center justify-center pt-20">
    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden relative ">
        <div class="bg-green-600 h-32 w-full absolute top-0 left-0 z-0">
            <svg class="absolute inset-0 h-full w-full opacity-10" xmlns="http://www.w3.org/2000/svg">
                <pattern id="pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1" fill="#fff" />
                </pattern>
                <rect width="100%" height="100%" fill="url(#pattern)" />
            </svg>
        </div>

        <div class="relative z-10 pt-16 px-6 pb-8 text-center">
            <div class="mb-6 flex justify-center">
                <div class="checkmark-circle">
                    <div class="background"></div>
                    <div class="checkmark"></div>
                </div>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-1">Pembayaran Berhasil!</h2>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Terima kasih, transaksi Anda telah dikonfirmasi.</p>

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
                        <span class="font-medium text-gray-900 dark:text-white font-mono">{{ $transaction->order_id ??
                            '-'
                            }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500 dark:text-gray-400">Tanggal</span>
                        {{-- <span class="font-medium text-gray-900 dark:text-white">
                            {{ \Carbon\Carbon::parse($transaction->created_at)->translatedFormat('d M Y, H:i') }}
                        </span> --}}
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500 dark:text-gray-400">Metode</span>
                        <span class="font-medium text-gray-900 dark:text-white uppercase">
                            {{ $transaction->payment_type ?? 'Bank Transfer' }}
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500 dark:text-gray-400">Status</span>
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300">
                            Lunas / Settled
                        </span>
                    </div>
                </div>
            </div>

            <p class="mt-6 text-xs text-gray-400 dark:text-gray-400">
                Simpan bukti pembayaran ini sebagai transaksi yang sah
            </p>

            <div class="mt-8 flex flex-col gap-3">
                <a href="{{ route('dashboard') }}"
                    class="w-full inline-flex justify-center items-center px-4 py-3 border border-transparent rounded-xl shadow-sm text-sm font-semibold text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-0  focus:ring-green-500 transition-all">
                    Kembali ke Dashboard
                </a>

                <button onclick="window.print()"
                    class="w-full inline-flex justify-center items-center px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm text-sm font-semibold text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none transition-all no-print">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z">
                        </path>
                    </svg>
                    Cetak Bukti
                </button>
            </div>

        </div>
    </div>
</section>
@endsection

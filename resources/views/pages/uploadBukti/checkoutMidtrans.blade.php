@extends('default')

@push('style')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
</script>
<style>
    .drag-over {
        border-color: #3b82f6;
        /* blue-500 */
        background-color: rgb(43, 56, 75);
        /* blue-50/50 */
        color: #fff;

    }
</style>
@endpush

@section('content')
@include('components._breadcrumbLink')
<div class="flex flex-col max-w-7xl p-4 mx-auto min-h-screen">
    <div class="pt-20 mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Ringkasan <span class="text-yellow-500">Biaya Sewa</span>
        </h1>
        <p class="mt-1 text-gray-500 dark:text-gray-600">Pratinjau pembayaran sewa Anda</p>
    </div>
    @if($booking)
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
        <div class="lg:col-span-8 space-y-4">
            <div
                class="p-6 bg-white border border-gray-200 rounded-2xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                    <span class="bg-blue-900 rounded-xl p-4">
                        <svg class="w-5 h-5 text-blue-300" fill="currentColor" stroke=""
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M256 152a88 88 0 1 0 0-176 88 88 0 1 0 0 176zm0 298.7l0-149.3c16.3-6.8 32.9-13.7 49.7-20.7 39-16.2 80.8-24.6 123.1-24.6l19.2 0 0 160-19.2 0c-59.1 0-117.7 11.7-172.3 34.5l-.5 .2zM256 232l-25.1-10.5C184.1 202 133.9 192 83.2 192L48 192c-26.5 0-48 21.5-48 48L0 432c0 26.5 21.5 48 48 48l35.2 0c50.7 0 100.9 10 147.7 29.5l12.8 5.3c7.9 3.3 16.7 3.3 24.6 0l12.8-5.3c46.8-19.5 97-29.5 147.7-29.5l35.2 0c26.5 0 48-21.5 48-48l0-192c0-26.5-21.5-48-48-48l-35.2 0c-50.7 0-100.9 10-147.7 29.5L256 232z" />
                        </svg>
                    </span>
                    Detail Sewa
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    @if(!empty($booking->room->pictures->first()->url))
                    <img src="{{ Storage::url($booking->room->pictures->first()->url) }}" alt="Room Image"
                        class="w-3h-36 h-36 object-cover rounded-xl bg-gray-200">
                    @else
                    <div
                        class="w-full sm:w-36 sm:h-36 h-36 rounded-xl bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-400">
                        <svg class="w-8 h-8 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    @endif
                    <div class="flex-1 space-y-2">
                        {{-- INFORMASI KAMAR --}}
                        <div class="flex justify-between items-start">
                            <div class="flex flex-col gap-1">
                                <span class="text-xl font-bold text-gray-900 dark:text-white">{{
                                    $booking->room->room_name }}</span>
                                <span class="text-md font-bold text-gray-900 dark:text-blue-500">
                                    <span>{{ $booking->room->price_formatted }}</span>
                                </span>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Free wifi • Full furnished • Dapur
                                    bersama
                                </p>
                            </div>
                        </div>
                        {{-- END INFORMASI KAMAR --}}

                        {{-- PERIODE SEWA --}}
                        <div class="flex flex-wrap gap-2 mt-2">
                            <span
                                class="inline-flex items-center px-3 py-1 text-xs font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                @if($booking->room->period === 'day')
                                1 Hari
                                @elseif($booking->room->period === 'month')
                                1 Bulan
                                @elseif($booking->room->period === 'year')
                                1 Tahun
                                @endif
                            </span>
                            <span
                                class="inline-flex items-center px-3 py-1 text-xs font-medium text-gray-600 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                @if($booking->room->period === 'month')
                                {{ now()->startOfMonth()->format('d F Y') }} - {{ now()->endOfMonth()->format('d F Y')
                                }}
                                @elseif($booking->room->period === 'year')
                                {{ now()->startOfYear()->format('d F Y') }} - {{ now()->endOfYear()->format('d F Y') }}
                                @endif
                            </span>
                        </div>
                        {{-- ------------ --}}
                        {{-- END PERIODE SEWA --}}
                        {{-- ------------ --}}
                    </div>
                </div>
            </div>
            <div
                class="p-6 bg-white border border-gray-200 rounded-2xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                    <span class="bg-blue-900 rounded-xl p-4">
                        <svg class="w-5 h-5 text-blue-300" fill="currentColor" stroke=""
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M224 248a120 120 0 1 0 0-240 120 120 0 1 0 0 240zm-29.7 56C95.8 304 16 383.8 16 482.3 16 498.7 29.3 512 45.7 512l356.6 0c16.4 0 29.7-13.3 29.7-29.7 0-98.5-79.8-178.3-178.3-178.3l-59.4 0z" />
                        </svg>
                    </span>
                    Informasi Penyewa
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-gray-500 uppercase">Nama Lengkap</label>
                        <p class="text-base font-semibold text-gray-900 dark:text-white mt-1">{{
                            $booking->user->full_name }}</p>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-500 uppercase">Email</label>
                        <p class="text-base font-semibold text-gray-900 dark:text-white mt-1">{{ $booking->user->email
                            }}</p>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-500 uppercase">Nomor HP</label>
                        <p class="text-base font-semibold text-gray-900 dark:text-white mt-1">{{ $booking->user->phone
                            }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-4">
            <div
                class="sticky top-32 p-6 bg-white border border-gray-200 rounded-2xl shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Ringkasan Biaya</h3>
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-sm text-gray-600 dark:text-gray-300">
                        <span>Periode Sewa</span>
                        <span class="font-medium">{{ $period }}</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-600 dark:text-gray-300">
                        <span>Tanggal Pembayaran</span>
                        <span class="font-medium">{{ now()->format('d F Y') }}</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-600 dark:text-gray-300">
                        <span>Biaya Sewa</span>
                        <div class="flex gap-2">
                            <span class="font-medium">
                                {{ $booking->room->price_formatted }}
                            </span>
                        </div>
                    </div>
                    <div class="border-t border-dashed border-gray-300 dark:border-gray-600 my-4"></div>
                    <div class="flex justify-between items-center">
                        <span class="text-base font-bold text-gray-900 dark:text-white">Total Tagihan</span>
                        <div class="text-xl font-extrabold text-blue-600 dark:text-blue-400">
                            <span class="font-medium">
                                {{ $booking->room->price_formatted }}
                            </span>
                        </div>
                    </div>
                </div>
                <button id="pay-button"
                    class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-bold py-3.5 px-4 rounded-xl transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5 focus:ring-2 focus:ring-green-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    Bayar Sekarang
                </button>
                <div>
                    <div class="mt-4 flex items-center justify-center gap-2 text-xs text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                        <span>Pembayaran Aman & Terenkripsi by Midtrans</span>
                    </div>
                    <span class="text-xs text-gray-400 text-center flex justify-center mt-2">
                        Pembayaran akan expire dalam 1 x 24 jam setelah tombol bayar diklik.
                    </span>
                </div>
            </div>
        </div>
    </div>
    @else
    {{-- EMPTY STATE: PEMBAYARAN --}}
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-start">
        {{-- Sisi Kiri --}}
        <div class="lg:col-span-7 space-y-6">
            <div
                class="p-8 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl shadow-sm transition-colors">
                <div
                    class="w-16 h-16 bg-red-100 dark:bg-red-900/40 text-red-600 dark:text-red-400 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>

                <h2 class="text-2xl font-extrabold text-slate-900 dark:text-white mb-3">
                    Tidak Ada Tagihan Aktif
                </h2>
                <p class="text-slate-600 dark:text-slate-300 leading-relaxed text-base">
                    Halaman ini digunakan untuk menyelesaikan pembayaran sewa. Saat ini sistem tidak menemukan riwayat
                    pengajuan kamar yang siap untuk dibayar atau sedang diproses. Silakan klik tombol "Form Pendaftaran"
                    dibawah untuk melakuan pendaftaran baru.
                </p>
                <br>
                <p class="text-slate-600 dark:text-slate-300 leading-relaxed text-base">
                    jika terjadi kendala pada saat melakuan pendaftaran, silakan tekan "Hubungi Admin" atau pihak kost
                    untu
                    lebih lanjut.
                </p>

                <div class=" mt-8 pt-7  border-t border-slate-100 dark:border-slate-700 w">
                    <a href="#"
                        class="inline-flex items-center px-6 py-3.5 bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold rounded-xl transition-all shadow-md shadow-yellow-500/20 active:scale-95 text-sm">
                        Form Pendaftaran
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            {{-- Help Center --}}
            <div
                class="mt-5 p-5 flex items-center justify-between bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl shadow-sm transition-colors">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-yellow-50 dark:bg-yellow-900/30 rounded-lg text-yellow-600 dark:text-yellow-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-slate-600 dark:text-slate-300">Butuh bantuan?</span>
                </div>
                <a href="#"
                    class="text-sm font-bold text-yellow-600 dark:text-yellow-400 hover:text-yellow-700 dark:hover:text-yellow-300 transition-colors">Hubungi
                    Admin</a>
            </div>
        </div>
        {{-- Sisi Kanan --}}
        <div class="lg:col-span-5">
            <div
                class="p-8 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl shadow-inner h-full">
                <h3 class="text-md font-bold text-slate-900 dark:text-white mb-8 flex items-center gap-2">
                    <span class="w-1.5 h-6 bg-yellow-600 rounded-full"></span>
                    Cara Melakukan Pemesanan
                </h3>
                <div class="space-y-10 relative">
                    {{-- Garis Putus-putus Vertical --}}
                    <div
                        class="absolute left-4 top-2 bottom-2 w-0.5 border-l-2 border-dashed border-slate-300 dark:border-yellow-600/40">
                    </div>
                    {{-- Step 1 --}}
                    <div class="relative pl-12">
                        <div
                            class="absolute left-0 w-8 h-8 bg-yellow-600 text-white rounded-full flex items-center justify-center font-bold text-sm shadow-lg shadow-yellow-500/40">
                            1</div>
                        <h4 class="font-bold text-slate-900 dark:text-slate-100">Isi Form Pendaftaran</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mt-1.5 leading-relaxed">Masukkan biodata
                            sesuai dengan data yang diminta.</p>
                    </div>
                    {{-- Step 2 --}}
                    <div class="relative pl-12">
                        <div
                            class="absolute left-0 w-8 h-8 bg-white dark:bg-slate-800 border-2 border-yellow-600 text-yellow-600 dark:yellow-blue-400 rounded-full flex items-center justify-center font-bold text-sm">
                            2</div>
                        <h4 class="font-bold text-slate-900 dark:text-slate-100">Klik "Ajukan Sekarang"</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mt-1.5 leading-relaxed">Isi periode sewa
                            yang diinginkan.</p>
                    </div>
                    {{-- Step 3 --}}
                    <div class="relative pl-12">
                        <div
                            class="absolute left-0 w-8 h-8 bg-white dark:bg-slate-800 border-2 border-yellow-600 text-yellow-600 dark:yellow-blue-400 rounded-full flex items-center justify-center font-bold text-sm">
                            3</div>
                        <h4 class="font-bold text-slate-900 dark:text-slate-100">Verifikasi Admin</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mt-1.5 leading-relaxed">Admin akan
                            memverifikasi ketersediaan kamar Anda.</p>
                    </div>
                    {{-- Step 4 --}}
                    <div class="relative pl-12">
                        <div
                            class="absolute left-0 w-8 h-8 bg-white dark:bg-slate-800 border-2 border-yellow-600 text-yellow-600 dark:text-yellow-400 rounded-full flex items-center justify-center font-bold text-sm">
                            4</div>
                        <h4 class="font-bold text-slate-900 dark:text-slate-100">Selesaikan Pembayaran</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mt-1.5 leading-relaxed">Setelah disetujui,
                            tombol bayar akan muncul di sini.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@push('scripts')
<script>
    {{--  document.getElementById('pay-button').addEventListener('click', function () {
            fetch("{{ route('payment.checkout') }}")
                .then(response => response.json())
                .then(data => {
                    snap.pay(data.snap_token);
                });

        });  --}}
    const payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
    const originalText = payButton.innerHTML;
        // Loading tombol (Disable)
        payButton.disabled = true;
        payButton.innerHTML = `
            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Memproses...
        `;
        fetch("{{ route('payment.checkout') }}")
            .then(response => {
                if (!response.ok) {
                    throw new Error('Gagal mengambil data pembayaran');
                }
                return response.json();
            })
            .then(data => {
                // Popup Midtrans
                window.snap.pay(data.snap_token, {
                    onClose: function() {
                        payButton.disabled = false;
                        payButton.innerHTML = originalText;
                        // alert('Anda menutup popup pembayaran.');
                    },
                });
                // tombol aktif lagi setelah popup muncul:
                // payButton.disabled = false;
                // payButton.innerHTML = originalText;
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan koneksi.');
                payButton.disabled = false;
                payButton.innerHTML = originalText;
            });
    });
</script>
@endpush

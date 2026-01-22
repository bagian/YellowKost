<div class="mt-20 mb-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">
            Halo, <span class="text-yellow-600">{{ Auth::user()->name }}!</span>
        </h1>
        <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Selamat datang kembali di area penyewa.</p>
    </div>
    <div class="px-4 py-2 bg-white dark:bg-gray-100 rounded-xl shadow-sm border border-gray-200 dark:border-gray-300">
        <span class="text-sm font-medium text-gray-600">
            {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
        </span>
    </div>
</div>

@php
    use Carbon\Carbon;

    $dueDateDate = Carbon::createFromFormat('d F Y', $dueDate);
@endphp
@if(now()->greaterThan($dueDateDate))
{{-- ---------------------------------------------------------------------- --}}
{{--                          Melewati Jatuh Tempo                          --}}
{{-- ---------------------------------------------------------------------- --}}
@elseif(now()->diffInDays($dueDateDate) <= 7)
{{-- ---------------------------------------------------------------------- --}}
{{--                          1 Minggu Jatuh Tempo                          --}}
{{-- ---------------------------------------------------------------------- --}}s
<div
    class="w-full bg-gradient-to-r from-red-900 to-red-600 rounded-2xl shadow-lg p-6 text-white mb-8 relative overflow-hidden">
    <div class="relative flex flex-col sm:flex-row justify-between items-center gap-6 z-10">
        <div>
            <span
                class="bg-red-100 bg-opacity-30 text-xs font-semibold px-6 py-2 rounded-full uppercase tracking-wider">
                Belum Lunas
            </span>
            <h2 class="text-3xl font-bold mt-6">Rp {{ number_format($nominalTagihan ?? 1500000, 0, ',', '.') }}</h2>
            <span class="text-red-100 text-sm inline-block ">Anda memiliki Tagihan yang mendekati jatuh tempo pada tanggal 
                <span class="font-semibold">
                    {{ $dueDate }}
                </span>
            </span>
        </div>
        <a href="{{ route('booking.payment') }}"
            class="px-6 py-3 bg-white/20 backdrop-blur-md text-white font-bold rounded-xl shadow-md hover:bg-gray-100/30 transition transform hover:scale-105">
            Bayar Sekarang
        </a>
    </div>
    <svg class="absolute right-0 bottom-0 h-48 w-48 text-white opacity-10 transform translate-x-8 translate-y-8"
        fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" />
    </svg>
</div>
@endif

{{-- ---------------------------------------------------------------------- --}}
{{--                           Pembayaran Berhasil                          --}}
{{-- ---------------------------------------------------------------------- --}}
@if($paymentStatus === 'payment_success')
<div
    class="w-full bg-gradient-to-r from-green-900 to-green-600 rounded-2xl shadow-lg p-6 text-green-50 mb-8 relative overflow-hidden">
    <div class="relative z-10">
        <div class="flex items-center gap-3">
            <div class="p-2 bg-white bg-opacity-40 rounded-full">
                <svg class="w-6 h-6 text-green-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <div class="flex flex-col">
                <h2 class="text-xl font-bold">Terima kasih, pembayaran Anda lunas!</h2>
                <p class="text-green-50 text-sm">Tagihan selanjutnya akan muncul pada 01 {{
                    \Carbon\Carbon::now()->addMonth()->translatedFormat('M Y') }}</p>
            </div>
        </div>
    </div>
</div>
@endif

{{-- ---------------------------------------------------------------------- --}}
{{--                            Pembayaran Gagal                            --}}
{{-- ---------------------------------------------------------------------- --}}
@if($paymentStatus === 'payment_failed')
<div
    class="w-full bg-gradient-to-r from-rose-900 to-rose-600 rounded-2xl shadow-lg p-6 text-rose-50 mb-8 relative overflow-hidden">
    <div class="relative z-10">
        <div class="flex items-center gap-3">
            <div class="p-2 bg-white bg-opacity-40 rounded-full">
                <svg class="w-6 h-6 text-rose-50" fill="currentColor" stroke="" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 384 512">
                    <path
                        d="M55.1 73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L147.2 256 9.9 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192.5 301.3 329.9 438.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.8 256 375.1 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192.5 210.7 55.1 73.4z" />
                </svg>
            </div>
            <div class="flex flex-col">
                <h2 class="text-xl font-bold">Oops, pembayaran Anda gagal!</h2>
                <p class="text-rose-50 text-sm">Silakan cek riwayat pembayaran Anda</p>
            </div>
        </div>
    </div>
</div>
@endif

{{-- ---------------------------------------------------------------------- --}}
{{--                           Pembayaran Pending                           --}}
{{-- ---------------------------------------------------------------------- --}}
@if($paymentStatus === 'payment_pending')
<div
    class="w-full bg-gradient-to-r from-orange-900 to-orange-600 rounded-2xl shadow-lg p-6 text-orange-50 mb-8 relative overflow-hidden">
    <div class="relative z-10">
        <div class="flex items-center gap-3">
            <div class="p-2 bg-white bg-opacity-40 rounded-full">
                <svg class="w-6 h-6 text-orange-50" fill="currentColor" stroke="" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 128 512">
                    <path
                        d="M64 432c22.1 0 40 17.9 40 40s-17.9 40-40 40-40-17.9-40-40c0-22.1 17.9-40 40-40zM64 0c26.5 0 48 21.5 48 48 0 .6 0 1.1 0 1.7l-16 304c-.9 17-15 30.3-32 30.3S33 370.7 32 353.7L16 49.7c0-.6 0-1.1 0-1.7 0-26.5 21.5-48 48-48z" />
                </svg>
            </div>
            <div class="flex flex-col">
                <h2 class="text-xl font-bold">Mohon ditunggu!</h2>
                <p class="text-orange-50 text-sm">Pembayaran Anda sedang diproses</p>
            </div>
        </div>
    </div>
</div>
@endif

@if($payments->isEmpty())
<div
    class="w-full bg-gradient-to-r from-blue-900 to-blue-600 rounded-2xl shadow-lg p-6 text-blue-50 mb-8 relative overflow-hidden">
    <div class="relative z-10">
        <div class="flex items-center gap-3">
            <div class="p-2 bg-white bg-opacity-40 rounded-full">
                <svg class="w-6 h-6 text-blue-50" fill="currentColor" stroke="" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path
                        d="M64 160c0-53 43-96 96-96s96 43 96 96c0 42.7-27.9 78.9-66.5 91.4-28.4 9.2-61.5 35.3-61.5 76.6l0 24c0 17.7 14.3 32 32 32s32-14.3 32-32l0-24c0-1.7 .6-4.1 3.5-7.3 3-3.3 7.9-6.5 13.7-8.4 64.3-20.7 110.8-81 110.8-152.3 0-88.4-71.6-160-160-160S0 71.6 0 160c0 17.7 14.3 32 32 32s32-14.3 32-32zm96 352c22.1 0 40-17.9 40-40s-17.9-40-40-40-40 17.9-40 40 17.9 40 40 40z" />
                </svg>
            </div>
            <div class="flex flex-col">
                <h2 class="text-xl font-bold">Anda belum memiliki transaksi!</h2>
                <p class="text-blue-50 text-sm">Silakan lakukan perpanjangan sewa atau pemesanan baru</p>
            </div>
        </div>
    </div>
</div>
@endif

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2 space-y-6">
        <div class="p-6 border border-gray-200 rounded-2xl shadow-lg  bg-white dark:bg-gray-100 dark:border-gray-300">
            @include('partials.dashboardUser._dashKamarUser', ['bookings' => $bookings, 'dueDate' => $dueDate])
        </div>
        <div>
            @include('partials.dashboardUser._dashRiwayatTable', ['payments' => $payments])
        </div>
    </div>
    <div class="space-y-6">
        <div class="p-6 border border-gray-200 rounded-2xl shadow-lg  bg-white dark:bg-gray-100 dark:border-gray-300">
            <h3 class="text-sm font-bold text-gray-900  uppercase mb-4 tracking-wider items-center gap-2 flex">
                <svg class="w-5 h-5 text-rose-500" fill="currentColor" stroke="" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path
                        d="M338.8-9.9c11.9 8.6 16.3 24.2 10.9 37.8L271.3 224 416 224c13.5 0 25.5 8.4 30.1 21.1s.7 26.9-9.6 35.5l-288 240c-11.3 9.4-27.4 9.9-39.3 1.3s-16.3-24.2-10.9-37.8L176.7 288 32 288c-13.5 0-25.5-8.4-30.1-21.1s-.7-26.9 9.6-35.5l288-240c11.3-9.4 27.4-9.9 39.3-1.3z" />
                </svg>
                Aksi Cepat
            </h3>
            <div class="grid grid-cols-2 gap-3">
                @php
                $adminNumber = '6285174295981';
                $message = "Halo, saya ingin melaporkan permasalahan.\n\n";
                $message .= "Nama: " . Auth::user()->name . "\n";
                // Jika ada relasi ke kamar, bisa dibuka komentar di bawah ini:
                // $message .= "Kamar: " . (Auth::user()->kamar->nomor_kamar ?? '-') . "\n";
                $message .= "Tanggal: " . date('d M Y') . "\n";
                $message .= "--------------------------------\n";
                $message .= "Isi Laporan: \n";
                $whatsappUrl = "https://wa.me/{$adminNumber}?text=" . urlencode($message);
                @endphp

                <a href="{{ $whatsappUrl }}" target="_blank"
                    class="flex flex-col items-center justify-center p-4 bg-orange-50 hover:bg-orange-100 rounded-xl transition group border border-rose-100 dark:bg-rose-900 dark:border-rose-500 dark:hover:bg-rose-600">

                    <svg class="w-8 h-8 text-rose-50 mb-2 group-hover:scale-110 transition-transform dark:text-rose-200"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                        </path>
                    </svg>

                    <span
                        class="text-xs font-medium text-gray-700 dark:text-rose-200 group-hover:text-rose-600 dark:group-hover:text-white transition">
                        Lapor Masalah
                    </span>
                </a>
                <a href="{{ route('terms.conditions') }}"
                    class="flex flex-col items-center justify-center p-4 bg-blue-50 hover:bg-blue-100 rounded-xl transition group border border-blue-100 dark:bg-blue-700 dark:blue-gray-600 dark:hover:bg-blue-600">
                    <svg class="w-8 h-8 text-blue-50 mb-2 group-hover:scale-110 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    <span
                        class="text-xs font-medium text-gray-700 dark:text-blue-200 group-hover:text-blue-600 dark:group-hover:text-white transition">Tata
                        Tertib</span>
                </a>
            </div>
        </div>
        <div class="bg-gradient-to-br from-yellow-600 to-yellow-700 rounded-2xl shadow-lg p-6 text-white text-center">
            <h3 class="font-bold text-lg mb-2">Butuh Bantuan?</h3>
            <p class="text-indigo-100 text-sm mb-4">Hubungi admin jika Anda mengalami kendala darurat.</p>
            <a href="https://wa.me/6281234567890" target="_blank"
                class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-yellow-700 font-bold rounded-lg hover:bg-gray-100 transition">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.008-.57-.008-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                </svg>
                Chat WhatsApp
            </a>
        </div>
    </div>
</div>
@extends('default')

@section('content')
@include ('components._breadcrumbLink')
<div class="justify-center max-w-7xl p-4 pt-20 mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Jurnal <span class="text-yellow-500">Harian</span></h1>
        <p class="mt-1 text-gray-500 dark:text-gray-400">Catat transaksi harian di sini.</p>
    </div>
    <div class="w-full mx-auto">
        <div class="bg-white border border-gray-200 drop-shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
            <div class="w-full p-6 border-b border-gray-600 shadow-sm">
                {{-- ------------------------------------------------------------------- --}}
                {{-- EXPORT FILE OPTION --}}
                {{-- ------------------------------------------------------------------- --}}
                <div class="flex flex-col items-center justify-between gap-6 md:flex-row">
                    <div class="flex items-center w-full gap-4 md:w-auto">
                        <div>
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white">Rekapitulasi Jurnal Harian</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Pantau dan ekspor data jurnal harian
                                Anda dalam
                                format PDF atau Excel.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col w-full gap-3 sm:flex-row md:w-auto">
                        <a href="{{ route('journal.report', ['type' => 'pdf']) }}" target="_blank"
                            class="group relative flex items-center justify-center px-5 py-2.5 text-sm font-bold text-red-600 bg-red-50 border border-red-100 rounded-xl hover:bg-red-900/50 hover:border-red-900/50 dark:bg-red-900/20 dark:text-red-400 dark:border-red-900/90 transition-all w-full sm:w-auto">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                            Export PDF
                        </a>
                        <a href="{{ route('journal.report', ['type' => 'excel']) }}" target="_blank"
                            class="group relative flex items-center justify-center px-5 py-2.5 text-sm font-bold text-green-600 bg-green-50 border border-green-100 rounded-xl hover:bg-green-900/50 hover:border-green-900/50 dark:bg-green-900/20 dark:text-green-400 dark:border-green-900/50 transition-all w-full sm:w-auto">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            Export Excel
                        </a>
                    </div>
                </div>
            </div>
            {{-- ------------------------------------------------------------------- --}}
            {{-- END EXPORT FILE OPTION --}}
            {{-- ------------------------------------------------------------------- --}}
            {{-- FORM START --}}
            <form action="{{ route('journal.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-5 space-y-6 sm:p-6">
                    <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-12">
                        <div class="col-span-6">
                            <label for="transaction_type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Transaksi</label>
                            <div class="relative">
                                <select id="transaction_type" name="type"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white appearance-none cursor-pointer">
                                    <option value="payment">Pembayaran Sewa (Pemasukan)</option>
                                    <option value="earnings">Pendapatan Lainnya</option>
                                    <option value="expends">Pengeluaran</option>
                                </select>
                                <span
                                    class="absolute right-0 z-10 block pr-3 -translate-y-1/2 pointer-events-none top-1/2 dark:text-gray-400">
                                    <svg class="w-4 h-4 stroke-current" viewBox="0 0 20 20" fill="none">
                                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-6">
                            <label for="date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                Transaksi</label>
                            <div class="relative">
                                <input type="date" id="date" name="date" value="{{ now()->format('Y-m-d') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white cursor-pointer"
                                    onclick="this.showPicker()">
                            </div>
                        </div>
                        <div class="col-span-6">
                            <label for="payment_method"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode
                                Pembayaran</label>
                            <div class="relative">
                                <select id="payment_method" name="payment_method_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white appearance-none cursor-pointer">
                                    @foreach($paymentMethods as $method)
                                    <option value="{{ $method->id }}">{{ $method->name }}</option>
                                    @endforeach
                                </select>
                                <span
                                    class="absolute right-0 z-10 block pr-3 -translate-y-1/2 pointer-events-none top-1/2 dark:text-gray-400">
                                    <svg class="w-4 h-4 stroke-current" viewBox="0 0 20 20" fill="none">
                                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-6">
                            <label for="amount"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total (Rp)</label>
                            <div class="relative">
                                <input type="number" id="amount" name="amount" min="0"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-14 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                    placeholder="0">
                                <div
                                    class="absolute inset-y-0 left-0 flex items-center justify-center px-3 text-sm font-bold text-gray-500 bg-gray-200  border-r-0 border-gray-300 rounded-l-lg pointer-events-none dark:bg-gray-600 dark:text-gray-400">
                                    Rp</div>
                            </div>
                        </div>
                    </div>
                    {{-- --------------------------------------- --}}
                    {{-- AREA DINAMIS --}}
                    {{-- --------------------------------------- --}}
                    {{-- GROUP 1: PEMBAYARAN SEWA --}}
                    <div id="payment-fields" class="grid w-full grid-cols-1 gap-4 md:grid-cols-12">
                        {{-- MODIFIKASI: KAMAR PENYEWA (TANPA BORDER) --}}
                        <div class="col-span-6">
                            <label for="id_booking"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kamar
                                Penyewa</label>
                            <div class="relative">
                                {{-- Tambahkan class 'border-none shadow-none bg-gray-100' --}}
                                {{-- focus:ring-0 agar saat diklik tidak muncul garis biru outline --}}
                                <select name="id_booking" id="id_booking"
                                    class="border-none bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-0 block w-full p-2.5 dark:bg-gray-700 dark:text-white cursor-pointer">
                                    @foreach($confirmedBookings as $booking)
                                    <option value="{{ $booking->id }}" @if($booking->id === $bookingId) selected @endif>
                                        {{ $booking->room->room_name }} - {{ $booking->user->full_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- <div class="col-span-6 flex items-center pt-8">
                            <input type="checkbox" id="is_dp" name="is_dp"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600" />
                            <label for="is_dp" class="ml-2 text-sm font-medium text-gray-900 dark:text-white">Ini adalah
                                Tanda Jadi (DP)</label>
                        </div> --}}
                    </div>

                    {{-- GROUP 2: PENGELUARAN --}}
                    <div id="expend-fields" class="grid w-full grid-cols-1 gap-4 md:grid-cols-12"
                        style="display: none;">
                        <div class="col-span-6">
                            <label for="category_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori
                                Pengeluaran</label>
                            <select name="category_id" id="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white">
                                <option value="listrik">Tagihan Listrik</option>
                                <option value="air">Tagihan Air</option>
                                <option value="wifi">Internet / WiFi</option>
                                <option value="maintenance">Perbaikan / Maintenance</option>
                                <option value="cleaning">Kebersihan</option>
                                <option value="lainnya">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    {{-- --------------------------------------- --}}
                    {{-- GENERAL FIELDS --}}
                    {{-- --------------------------------------- --}}

                    <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-12">
                        {{-- MODIFIKASI: DETAIL (TANPA BORDER) --}}
                        <div class="col-span-6">
                            <label for="detail"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail /
                                Keterangan</label>
                            {{-- Tambahkan class 'border-none bg-gray-100 focus:ring-0' --}}
                            <input type="text" id="detail" name="detail"
                                class="border-none bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-0 block w-full p-2.5 dark:bg-gray-700 dark:text-white placeholder-gray-400"
                                placeholder="Contoh: Pembayaran Lunas...">
                        </div>
                        <div class="col-span-6">
                            <label for="proof"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Bukti
                                Transaksi</label>
                            <input type="file" id="proof" name="proof"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:bg-gray-600 file:text-white hover:file:bg-gray-800 ">
                        </div>
                    </div>
                    <div class="pt-2">
                        <label for="notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan
                            Tambahan</label>
                        <textarea id="notes" name="notes" rows="3"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            placeholder="..."></textarea>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            class="flex items-center justify-center gap-2 px-6 py-2.5 font-semibold text-white transition-colors duration-200 bg-green-600 rounded-lg hover:bg-green-700">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 640 640">
                                <path
                                    d="M160 96C124.7 96 96 124.7 96 160L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 237.3C544 220.3 537.3 204 525.3 192L448 114.7C436 102.7 419.7 96 402.7 96L160 96zM192 192C192 174.3 206.3 160 224 160L384 160C401.7 160 416 174.3 416 192L416 256C416 273.7 401.7 288 384 288L224 288C206.3 288 192 273.7 192 256L192 192zM320 352C355.3 352 384 380.7 384 416C384 451.3 355.3 480 320 480C284.7 480 256 451.3 256 416C256 380.7 284.7 352 320 352z" />
                            </svg>
                            <span>Simpan Transaksi</span>
                        </button>
                    </div>
                </div>
            </form>
            {{-- FORM END --}}

        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        // Cache selectors agar performa lebih cepat
        const $typeSelect = $('#transaction_type');
        const $paymentFields = $('#payment-fields');
        const $expendFields = $('#expend-fields');
        function toggleFields() {
            const selectedType = $typeSelect.val();

            if (selectedType === 'payment') {
                $paymentFields.slideDown(300); // Efek animasi slide
                $expendFields.slideUp(300);
            } else if (selectedType === 'expends') {
                // Jika Pengeluaran: Sembunyikan Pilih Kamar, Tampilkan Kategori Pengeluaran
                $paymentFields.slideUp(300);
                $expendFields.slideDown(300);
            } else {
                // Jika Pendapatan Lainnya: Sembunyikan Keduanya
                $paymentFields.slideUp(300);
                $expendFields.slideUp(300);
            }
        }

        // 1. Jalankan saat user mengubah pilihan dropdown
        $typeSelect.on('change', function() {
            toggleFields();
        });
        toggleFields();
    });
</script>
@endpush
@endsection

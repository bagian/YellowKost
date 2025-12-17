@extends('default')

@section('content')
@include ('components._breadcrumbLink')
<div class="justify-center max-w-5xl p-4 pt-20 mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Jurnal <span class="text-yellow-500">Harian</span></h1>
        <p class="mt-1 text-gray-500 dark:text-gray-400">
            Catat transaksi harian di sini.
        </p>
    </div>
    <div class="w-full mx-auto">
        <div class="bg-white border border-gray-200 drop-shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
            <div class="w-full p-6 border-b border-gray-600 shadow-sm">
                {{-- ------------------------------------------------------------------- --}}
                {{-- EXPORT FILE OPTION --}}
                {{-- ------------------------------------------------------------------- --}}
                <div class="flex flex-col items-center justify-between gap-6 md:flex-row">
                    <div class="flex items-center w-full gap-4 md:w-auto">
                        <div
                            class="items-center justify-center hidden w-12 h-12 text-yellow-600 bg-yellow-100 rounded-full sm:flex dark:bg-yellow-900/30 dark:text-yellow-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white">Download Laporan</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Simpan rekap jurnal harian ke perangkat.
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
            <form action="{{ route('journal.create') }}">
                <div class="p-5 space-y-6 sm:p-6">
                    <!-- Form Input -->
                    <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-12">
                        <!-- Transaction Type -->
                        <div class="col-span-6">
                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Transaksi</label>
                            <div class="relative">
                                <select id="type" name="type"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 cursor-pointer dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none">
                                    <option value="payment">Pembayaran Sewa</option>
                                    <option value="earnings">Pendapatan</option>
                                    <option value="expends">Pengeluaran</option>
                                </select>
                                <span
                                    class="absolute right-0 z-10 block pr-3 -translate-y-1/2 pointer-events-none top-1/2 dark:text-gray-400">
                                    <svg class="w-4 h-4 stroke-current" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <!-- Date Input -->
                        <div class="col-span-6">
                            <label for="date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                Transaksi</label>
                            <div class="relative">
                                <input type="date" id="date" name="date" value="{{ now()->format('Y-m-d') }}"
                                    class="[&::-webkit-calendar-picker-indicator]:hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer"
                                    onclick="this.showPicker()">
                            </div>
                        </div>

                        {{-- Payment Method --}}
                        <div class="col-span-6">
                            <label for="type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode
                                Pembayaran</label>
                            <div class="relative">
                                <select id="type" name="type"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none cursor-pointer">
                                    @foreach($paymentMethods as $method)
                                    <option value="{{ $method->id }}">{{ $method->name }}</option>
                                    @endforeach
                                </select>
                                <span
                                    class="absolute right-0 z-10 block pr-3 -translate-y-1/2 pointer-events-none top-1/2 dark:text-gray-400">
                                    <svg class="w-4 h-4 stroke-current" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-6">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Total (Rp)
                            </label>
                            <div class="relative">
                                <input type="text" id="amount" name="amount"
                                    class="peer block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-14 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="Contoh: 100.000...">
                                <div
                                    class="absolute inset-y-0 left-0 flex items-center justify-center px-3 text-sm font-bold text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-lg pointer-events-none peer-focus:border-blue-500 peer-focus:bg-gray-500 peer-focus:text-white dark:border-gray-600 dark:bg-gray-600 dark:text-gray-400 dark:peer-focus:bg-gray-600">
                                    Rp
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="payment">
                        <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-12">
                            {{-- Booking --}}
                            <div class="col-span-6">
                                <label for="id_booking"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kamar
                                    Penyewa</label>
                                <div class="relative">
                                    <select name="id_booking" id="id_booking"
                                        class="bg-gray-50 cursor-pointer border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach($confirmedBookings as $booking)
                                        <option value="{{ $booking->id }}" @if($booking->id === $bookingId) selected
                                            @endif>{{ $booking->room->room_name }} - {{ $booking->user->full_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <span
                                        class="absolute right-0 z-10 block pr-3 -translate-y-1/2 pointer-events-none top-1/2 dark:text-gray-400">
                                        <svg class="w-4 h-4 stroke-current" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            {{-- is dp --}}
                            <div class="col-span-6">
                                <label for="is_dp"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanda
                                    Jadi (DP)</label>
                                <div class="relative">
                                    <input type="checkbox" id="is_dp" name="is_dp"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="non-payment">
                        <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-12">
                            {{-- Detail --}}
                            <div class="col-span-6">
                                <label for="detail"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail
                                    transaksi</label>
                                <input type="text" id="detail" name="detail"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <!-- Notes -->
                        <div class="pt-6 pb-5 border-b border-gray-200 dark:border-gray-700">
                            <label for="notes"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                            <textarea id="notes" x-model="notes" rows="3"
                                placeholder="Tambahkan catatan untuk transaksi ini..."
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="flex justify-end gap-2 mt-6">
                        <span>
                            <button type="submit"
                                class="flex items-center justify-center gap-2 px-4 py-2 font-semibold text-white align-middle transition-colors duration-200 bg-green-600 rounded-lg hover:bg-green-700 disabled:bg-gray-400 disabled:cursor-not-allowed dark:bg-green-700 dark:hover:bg-green-800">

                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 640 640">
                                    <path
                                        d="M160 96C124.7 96 96 124.7 96 160L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 237.3C544 220.3 537.3 204 525.3 192L448 114.7C436 102.7 419.7 96 402.7 96L160 96zM192 192C192 174.3 206.3 160 224 160L384 160C401.7 160 416 174.3 416 192L416 256C416 273.7 401.7 288 384 288L224 288C206.3 288 192 273.7 192 256L192 192zM320 352C355.3 352 384 380.7 384 416C384 451.3 355.3 480 320 480C284.7 480 256 451.3 256 416C256 380.7 284.7 352 320 352z" />
                                </svg>
                                <span>Simpan</span>
                            </button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        const amountInput = document.getElementById('amount');

        amountInput.addEventListener('input', function(e) {
            let value = e.target.value;
            value = value.replace(/[^0-9]/g, '');
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            e.target.value = value;
        });

        $(document).ready(function() {
            // Hide payment and non-payment sections initially
            $('.payment').hide();
            $('.non-payment').hide();

            // Show/hide sections based on transaction type selection
            $('#type').change(function() {
                var selectedType = $(this).val();
                if (selectedType === 'payment') {
                    $('.payment').show();
                    $('.non-payment').hide();

                    $('.non-payment input').attr('disabled', true);
                    $('.payment input').attr('disabled', false);
                } else {
                    $('.payment').hide();
                    $('.non-payment').show();

                    $('.payment input').attr('disabled', true);
                    $('.non-payment input').attr('disabled', false);
                }
            });

            // Trigger change event on page load to set the correct visibility
            $('#type').trigger('change');
        });
    </script>
    @endpush
    @endsection

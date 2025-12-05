@extends('default')

@section('content')
@include('components._accordionLink')
<div class="justify-center max-w-4xl pt-20 mx-auto">
    <div class="w-full mx-auto">
        <div class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
            <div class="px-5 py-4 border-b border-gray-200 dark:border-gray-700 sm:px-6 sm:py-5">
                <h3 class="text-base font-semibold text-center text-gray-800 uppercase dark:text-white/90">
                    Jurnal Harian / Point of Sale
                </h3>
                <p class="mt-1 text-sm text-center text-gray-500 dark:text-gray-400">
                    Catat transaksi harian di sini.
                </p>
            </div>

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
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none">
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
                                    class="[&::-webkit-calendar-picker-indicator]:hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none">
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

                        <!-- Price -->
                        <div class="col-span-6">
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                (Rp)</label>
                            <input type="text" id="amount" name="amount"
                                class="price bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Contoh 100.000">
                        </div>
                    </div>

                    <div class="payment">
                        <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-12">
                            {{-- Booking --}}
                            <div class="col-span-6">
                                <label for="id_booking"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kamar
                                    Penyewa</label>
                                <select name="id_booking" id="id_booking"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($confirmedBookings as $booking)
                                    <option value="{{ $booking->id }}" @if($booking->id === $bookingId) selected
                                        @endif>{{ $booking->room->room_name }} - {{ $booking->user->full_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Status --}}
                            {{-- <div class="col-span-6">
                                <label for="type"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                    Pembayaran</label>
                                <div class="relative">
                                    <select id="type" name="type"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none">
                                        <option value="confirmed">Konfirmasi</option>
                                        <option value="pending">Pending</option>
                                        <option value="failed">Gagal</option>
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
                            </div> --}}

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
                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            class="flex items-center justify-center gap-2 px-4 py-2 font-semibold text-white align-middle transition-colors duration-200 bg-green-600 rounded-lg hover:bg-green-700 disabled:bg-gray-400 disabled:cursor-not-allowed dark:bg-green-700 dark:hover:bg-green-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5"
                                fill="currentColor">
                                <path
                                    d="M128 0C92.7 0 64 28.7 64 64v64H36c-13.3 0-24 10.7-24 24s10.7 24 24 24h28v24H36c-13.3 0-24 10.7-24 24s10.7 24 24 24h28v24H36c-13.3 0-24 10.7-24 24s10.7 24 24 24h28v48c0 35.3 28.7 64 64 64h64v32c0 17.7 14.3 32 32 32s32-14.3 32-32v-32h32c17.7 0 32-14.3 32-32s-14.3-32-32-32h-32v-32h32c17.7 0 32-14.3 32-32s-14.3-32-32-32h-32v-32h32c17.7 0 32-14.3 32-32s-14.3-32-32-32h-32V64c0-35.3-28.7-64-64-64H128zM384 64c-26.5 0-48 21.5-48 48v64h48V64zM384 224v64h48c26.5 0 48-21.5 48-48s-21.5-48-48-48h-48zm0 160v64h48c26.5 0 48-21.5 48-48s-21.5-48-48-48h-48z" />
                            </svg>
                            <span>Simpan Transaksi</span>
                        </button>
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

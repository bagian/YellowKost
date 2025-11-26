@extends('default')

@section('content')
    @include('components._accordionLink')

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
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                Transaksi</label>
                            <div class="relative">
                                <input type="date" id="date" name="date" value="{{ now()->format('Y-m-d') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onclick="this.showPicker()">
                                <span
                                    class="absolute text-gray-500 -translate-y-1/2 pointer-events-none top-1/2 right-3 dark:text-gray-400">
                                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        {{-- Payment Method --}}
                        <div class="col-span-6">
                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode Pembayaran</label>
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
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                (Rp)</label>
                            <input type="text" id="amount" name="amount"
                                class="price bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>

                    <div class="payment">
                        <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-12">
                            {{-- Booking --}}
                            <div class="col-span-6">
                                <label for="id_booking" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kamar Penyewa</label>
                                <select name="id_booking" id="id_booking"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value=""></option>
                                </select>
                            </div>

                            {{-- Status --}}
                            <div class="col-span-6">
                                <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Pembayaran</label>
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
                            </div>

                            {{-- is dp --}}
                            <div class="col-span-6">
                                <label for="is_dp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanda
                                    Jadi (DP)</label>
                                <div class="relative">
                                    <input type="checkbox" id="is_dp" name="is_dp"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="non-payment">
                        <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-12">
                            {{-- Detail --}}
                            <div class="col-span-6">
                                <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail
                                    transaksi</label>
                                <input type="text" id="detail" name="detail"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                        </div>
                        
                        <!-- Notes -->
                        <div class="pb-5 border-b border-gray-200 dark:border-gray-700">
                            <label for="notes"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                            <textarea id="notes" x-model="notes" rows="3" placeholder="Tambahkan catatan untuk transaksi ini..."
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
        
                    </div>
                    <!-- Submit Button -->
                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            class="flex items-center justify-center gap-2 px-4 py-2 font-semibold text-white align-middle transition-colors duration-200 bg-green-600 rounded-lg hover:bg-green-700 disabled:bg-gray-400 disabled:cursor-not-allowed dark:bg-green-700 dark:hover:bg-green-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5" fill="currentColor">
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

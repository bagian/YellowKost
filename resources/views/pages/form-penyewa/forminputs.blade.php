@extends('default')

@section('content')

<div>
    @include('components._accordionLink')
    @include('pages.form-penyewa._tablesPenyewa')
    <div class="form-detail space-y-6">
        <form action="" id="penyewa-form" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" name="id_user" value="">
            <div class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3 class="text-base font-semibold text-gray-800 dark:text-white/90">
                        Informasi Data Penyewa Kost
                    </h3>
                </div>
                <div class="p-5 space-y-6 border-t border-gray-100 sm:p-6 dark:border-gray-500">
                    <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Foto KTP Penyewa
                            </label>
                            <div data-modal-target="ktp-photo-modal" data-modal-toggle="ktp-photo-modal"
                                class="relative group w-full !h-[14.2rem] overflow-hidden bg-gray-700 rounded-lg cursor-pointer">
                                <img src="{{ asset('img_handler/error_img_handler/main_error_foto_ktp_el.jpg') }}"
                                    class="image-ktp absolute top-0 left-0 object-cover w-full h-full blur-sm"
                                    alt="Foto KTP Background" />
                                <img id="ktp-preview-image"
                                    src="{{ asset('img_handler/error_img_handler/main_error_foto_ktp_el.jpg') }}"
                                    class="image-ktp relative object-contain w-full h-full pointer-events-none" alt="Foto KTP" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- KTP Photo Modal -->
                        <div id="ktp-photo-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full p-4">
                                <!-- Modal content -->
                                <div class="relative rounded-lg">
                                    <!-- Modal header -->
                                    <div class="relative">
                                        <button type="button"
                                            class="absolute inline-flex items-center justify-center w-8 h-8 text-sm text-white bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white top-2 right-2"
                                            data-modal-hide="ktp-photo-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="h-[45rem] w-full rounded-lg p-4 md:p-0">
                                        <img src="{{ asset('img_handler/error_img_handler/main_error_foto_ktp_el.jpg') }}"
                                            class="image-ktp object-contain w-full h-full" alt="Foto KTP" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Bukti Pembyaran Penyewa
                            </label>
                            <div data-modal-target="payment-proof-modal" data-modal-toggle="payment-proof-modal"
                                class="relative group w-full !h-[14.2rem] overflow-hidden bg-gray-700 rounded-lg cursor-pointer">
                                <img src="{{ asset('img_handler/error_img_handler/main_proved_paid.webp') }}"
                                    class="image-pembayaran absolute top-0 left-0 object-cover w-full h-full blur-sm"
                                    alt="Bukti Pembayaran Background" />
                                <img id="payment-preview-image"
                                    src="{{ asset('img_handler/error_img_handler/main_proved_paid.webp') }}"
                                    class="image-pembayaran relative object-contain w-full h-full pointer-events-none"
                                    alt="Bukti Pembayaran" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Payment Proof Modal -->
                        <div id="payment-proof-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative max-h-full">
                                <!-- Modal content -->
                                <div class="relative rounded-lg">
                                    <!-- Modal header -->
                                    <div class="relative">
                                        <button type="button"
                                            class="absolute inline-flex items-center justify-center w-8 h-8 text-sm text-white bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white top-2 right-2"
                                            data-modal-hide="payment-proof-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="h-[45rem] w-full rounded-lg p-4 md:p-0">
                                        <img src="{{ asset('img_handler/error_img_handler/main_proved_paid.jpg') }}"
                                            class="image-pembayaran object-contain w-full h-full" alt="Bukti Pembayaran" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Kamar yang tersedia
                            </label>
                            <div class="relative z-20 bg-transparent">
                                <select name="id_room"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none">
                                    <option value="">
                                        Pilih Kamar
                                    </option>
                                    @foreach($room as $row)
                                    <option value="{{ $row->id }}">
                                        {{ $row->room_name }}
                                    </option>
                                    @endforeach
                                </select>
                                <span
                                    class="absolute right-0 z-30 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
                                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Nama Penyewa
                            </label>
                            <input type="text" placeholder="Masukkan Nama Penyewa" name="tenant"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                KTP
                            </label>
                            <input type="text" placeholder="Masukkan Nomor KTP" maxlength="16" name="nik"
                                placeholder="Masukkan nomor KTP" inputmode="numeric" pattern="[0-9]*"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Nomor Telepon Penyewa
                            </label>
                            <input type="text" placeholder="Masukkan Nomor Telp" maxlength="12" name="phone"
                                placeholder="Masukkan nomor KTP" inputmode="numeric" pattern="[0-9]*"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Nomor Telepon Orang Tua
                            </label>
                            <input type="text" placeholder="Masukkan Nomor Telp" maxlength="12" name="parent_phone"
                                placeholder="Masukkan nomor KTP" inputmode="numeric" pattern="[0-9]*"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Tanggal Masuk
                            </label>
                            <div class="relative">
                                <input type="date" placeholder="Tanggal Masuk Penyewa" name="check_in"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onclick="this.showPicker()">
                                <span
                                    class="absolute text-gray-500 -translate-y-1/2 pointer-events-none top-1/2 right-3 dark:text-gray-400">
                                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z"
                                            fill="" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Status Pembayaran
                            </label>
                            <div class="relative z-20 bg-transparent">
                                <select name="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none">
                                    <option value="">
                                        Pilih Status Pembayaran
                                    </option>
                                    <option value="paid">
                                        Lunas
                                    </option>
                                    <option value="dp">
                                        DP
                                    </option>
                                    <option value="not_paid">
                                        Belum Lunas
                                    </option>
                                </select>
                                <span
                                    class="absolute right-0 z-30 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
                                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Status Pengajuan Sewa
                            </label>
                            <div class="relative z-20 bg-transparent">
                                <select name="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none">
                                    <option value="">
                                        Pilih Status
                                    </option>
                                    <option value="confirmed">
                                        Diterima
                                    </option>
                                    <option value="cancelled">
                                        Ditolak (Refund)
                                    </option>
                                </select>
                                <span
                                    class="absolute right-0 z-30 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
                                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <button type="submit"
                        class="flex items-center justify-center w-full gap-2 px-4 py-2 text-xs font-semibold text-white align-middle transition-colors duration-200 bg-green-600 rounded-lg hover:bg-green-700 dark:bg-green-700 dark:hover:bg-green-800 md:text-base">
                        <span class="block">Simpan</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-5 h-5 text-white"
                            fill="currentColor">
                            <path
                                d="M160 96C124.7 96 96 124.7 96 160L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 237.3C544 220.3 537.3 204 525.3 192L448 114.7C436 102.7 419.7 96 402.7 96L160 96zM192 192C192 174.3 206.3 160 224 160L384 160C401.7 160 416 174.3 416 192L416 256C416 273.7 401.7 288 384 288L224 288C206.3 288 192 273.7 192 256L192 192zM320 352C355.3 352 384 380.7 384 416C384 451.3 355.3 480 320 480C284.7 480 256 451.3 256 416C256 380.7 284.7 352 320 352z" />
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('.form-detail').hide();
    });

    $('.edit').on('click', function() {
        const href = $(this).data('href');
        const id_user = $(this).data('id_user');
        const ktp = $(this).data('ktp');
        const name = $(this).data('name');
        const nik = $(this).data('nik');
        const address = $(this).data('address');
        const phone = $(this).data('phone');
        const parent_phone = $(this).data('parent_phone');
        const check_in = $(this).data('check_in');
        
        $('#penyewa-form').attr('action', href);
        $('.image-ktp').attr('src', ktp);
        $('input[name="id_user"]').val(id_user);
        $('input[name="tenant"]').val(name);
        $('input[name="nik"]').val(nik);
        $('input[name="address"]').val(address);
        $('input[name="phone"]').val(phone);
        $('input[name="parent_phone"]').val(parent_phone);
        $('input[name="check_in"]').val(check_in);

        $('.form-detail').show();
        $('html, body').animate({
            scrollTop: $(".form-detail").offset().top
        }, 500);
    });
</script>
@endpush
@endsection
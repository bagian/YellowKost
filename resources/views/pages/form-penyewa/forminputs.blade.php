@extends('default')
@section('content')
@include('components._accordionLink')
<div class="flex flex-col justify-center max-w-5xl pt-20 mx-auto">
    @include('pages.form-penyewa._tablesPenyewa')
    <div class="space-y-6 form-detail pt-8">
        <form action="" id="penyewa-form" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" name="id_user" value="">
            <div class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
                <div class="px-5 py-4 sm:px-6 sm:py-5 flex justify-between items-center">
                    <h3 class="text-base font-semibold text-gray-800 dark:text-white/90">
                        Informasi Data Penyewa Kost
                    </h3>
                    <button type="button" onclick="$('.form-detail').slideUp();"
                        class="text-gray-400 bg-white/80 hover:bg-red-50 hover:text-red-500 rounded-full p-2 focus:outline-none transition-colors shadow-sm dark:bg-gray-700/80 dark:hover:bg-gray-100 dark:text-gray-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
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
                                    class="absolute top-0 left-0 object-cover w-full h-full image-ktp blur-sm"
                                    alt="Foto KTP Background" />
                                <img id="ktp-preview-image"
                                    src="{{ asset('img_handler/error_img_handler/main_error_foto_ktp_el.jpg') }}"
                                    class="relative object-contain w-full h-full pointer-events-none image-ktp"
                                    alt="Foto KTP" />
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
                        <div id="ktp-photo-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full p-4">
                            <div class="relative max-h-full">
                                <!-- Modal content -->
                                <div
                                    class="relative bg-white rounded-2xl shadow-2xl overflow-hidden dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
                                    <div class="absolute top-4 right-4 z-10">
                                        <button type="button"
                                            class="text-gray-400 bg-white/80 hover:bg-red-50 hover:text-red-500 rounded-full p-2 focus:outline-none transition-colors shadow-sm dark:bg-gray-700/80 dark:hover:bg-gray-100 dark:text-gray-300"
                                            data-modal-hide="ktp-photo-modal">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <div
                                        class="p-1 bg-gray-50 dark:bg-gray-900 flex flex-col items-center justify-center min-h-[300px] ">
                                        <div
                                            class="w-full text-center py-4 px-6 border-b border-gray-100 dark:border-gray-700 bg-white dark:bg-gray-800 rounded-t-xl">
                                            <h3 class="text-md md:text-lg font-bold text-gray-800 dark:text-white">
                                                Dokumen KTP</h3>
                                        </div>
                                        <div
                                            class="relative w-full p-6 flex justify-center bg-[url('https://www.transparenttextures.com/patterns/grid-noise.png')] bg-gray-100 dark:bg-gray-900/50">
                                            <img id="ktp-preview-image"
                                                src="{{ asset('img_handler/error_img_handler/main_error_foto_ktp_el.jpg') }}"
                                                alt="KTP "
                                                class="max-w-full max-h-[30vh] h-auto object-contain rounded-xl shadow-lg border-4 border-white dark:border-gray-700 hover:scale-[1.02] transition-transform duration-300 image-ktp">
                                        </div>
                                    </div>
                                    <div
                                        class="px-6 py-4 bg-white border-t border-gray-100 dark:bg-gray-800 dark:border-gray-700 flex justify-end">
                                        <a href="" download="KTP" id="btn-download-ktp"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600 transition-colors">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4">
                                                </path>
                                            </svg>
                                            Unduh Bukti KTP
                                        </a>
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
                                    class="image-payment_proof absolute top-0 left-0 object-cover w-full h-full image-pembayaran blur-sm"
                                    alt="Bukti Pembayaran Background" />
                                <img id="payment-preview-image"
                                    src="{{ asset('img_handler/error_img_handler/main_proved_paid.webp') }}"
                                    class="image-payment_proof relative object-contain w-full h-full pointer-events-none image-pembayaran"
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
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full p-4">
                            <div class="relative max-h-full">
                                <!-- Modal content -->
                                <div id="payment-proof-modal"
                                    class="relative bg-white rounded-2xl shadow-2xl overflow-hidden dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
                                    <div class="absolute top-4 right-4 z-10">
                                        <button type="button"
                                            class="text-gray-400 bg-white/80 hover:bg-red-50 hover:text-red-500 rounded-full p-2 focus:outline-none transition-colors shadow-sm dark:bg-gray-700/80 dark:hover:bg-gray-100 dark:text-gray-300"
                                            data-modal-hide="payment-proof-modal">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <div
                                        class="p-1 bg-gray-50 dark:bg-gray-900 flex flex-col items-center justify-center min-h-[300px] ">
                                        <div
                                            class="w-full text-center py-4 px-6 border-b border-gray-100 dark:border-gray-700 bg-white dark:bg-gray-800 rounded-t-xl">
                                            <h3 class="text-md md:text-lg font-bold text-gray-800 dark:text-white">
                                                Bukti
                                                Pembayaran</h3>
                                        </div>
                                        <div
                                            class="relative w-full p-6 flex justify-center bg-[url('https://www.transparenttextures.com/patterns/grid-noise.png')] bg-gray-100 dark:bg-gray-900/50">
                                            <img id="pembayaran-preview-image"
                                                src="{{ asset('img_handler/error_img_handler/main_proved_paid.jpg') }}"
                                                class="image-payment_proof max-w-full max-h-[55vh] h-auto object-contain rounded-xl shadow-lg border-4 border-white dark:border-gray-700 hover:scale-[1.02] transition-transform duration-300 image-bt-pembayaran"
                                                alt="Bukti Pembayaran" />
                                        </div>
                                    </div>
                                    <div
                                        class="px-6 py-4 bg-white border-t border-gray-100 dark:bg-gray-800 dark:border-gray-700 flex justify-end">
                                        <a href="" download="bukti-pembayaran" id="bt-pembayaran"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600 transition-colors">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4">
                                                </path>
                                            </svg>
                                            Unduh Bukti Pembayaran
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Kamar yang tersedia
                            </label>
                            <div class="relative">
                                <select name="id_room"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white border-transparent focus:border-transparent focus:ring-0">
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
                                    class="absolute right-0 z-10 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
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
                            <div class="relative mb-4">
                                <input type="text" placeholder="Masukkan Nama Penyewa" name="tenant" disabled
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 pr-28 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white border-transparent focus:border-transparent focus:ring-0">
                                <button type="button"
                                    class="edit-field absolute top-0 bottom-0 right-0 px-5 text-sm font-semibold text-white rounded-r-lg bg-slate-600 hover:bg-slate-500">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                KTP
                            </label>
                            <div class="relative mb-4">
                                <input type="text" placeholder="Masukkan Nomor KTP" maxlength="16" name="nik" disabled
                                    placeholder="Masukkan nomor KTP" inputmode="numeric" pattern="[0-9]*"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                    onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white border-transparent focus:border-transparent focus:ring-0">
                                <button type="button"
                                    class="edit-field absolute top-0 bottom-0 right-0 px-5 text-sm font-semibold text-white rounded-r-lg bg-slate-600 hover:bg-slate-500">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Nomor Telepon Penyewa
                            </label>
                            <div class="relative mb-4">
                                <input type="text" placeholder="Masukkan Nomor Telp" maxlength="12" name="phone"
                                    disabled placeholder="Masukkan nomor KTP" inputmode="numeric" pattern="[0-9]*"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                    onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white border-transparent focus:border-transparent focus:ring-0">
                                <button type="button"
                                    class="edit-field absolute top-0 bottom-0 right-0 px-5 text-sm font-semibold text-white rounded-r-lg bg-slate-600 hover:bg-slate-500">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Nomor Telepon Orang Tua
                            </label>
                            <div class="relative mb-4">
                                <input type="text" placeholder="Masukkan Nomor Telp" maxlength="12" name="parent_phone"
                                    disabled placeholder="Masukkan nomor KTP" inputmode="numeric" pattern="[0-9]*"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                    onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white border-transparent focus:border-transparent focus:ring-0 ">

                                <button type="button"
                                    class="edit-field absolute top-0 bottom-0 right-0 px-5 text-sm font-semibold text-white rounded-r-lg bg-slate-600 hover:bg-slate-500">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Tanggal Masuk
                            </label>
                            <div class="relative">
                                <input type="date" placeholder="Tanggal Masuk Penyewa" name="check_in" disabled
                                    class="bg-gray-50 no-calendar border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white appearance-none
                                [&::-webkit-calendar-picker-indicator]:!hidden
                                [&::-webkit-calendar-picker-indicator]:!bg-none
                                [&::-webkit-calendar-picker-indicator]:opacity-0border-transparent focus:border-transparent focus:ring-0" onclick="this.showPicker()"
                                    min="{{ now()->format('Y-m-d') }}">

                                <button type="button"
                                    class="edit-field absolute top-0 bottom-0 right-0 px-5 text-sm font-semibold text-white rounded-r-lg bg-slate-600 hover:bg-slate-500">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Status Pembayaran
                            </label>
                            <div class="relative">
                                <select name="payment_status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white appearance-none border-transparent focus:border-transparent focus:ring-0">
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
                                    class="absolute right-0 z-10 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
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
                            <div class="relative">
                                <select name="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white appearance-none border-transparent focus:border-transparent focus:ring-0">
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
                                    class="absolute right-0 z-10 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
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
        const payment_proof = $(this).data('payment_proof');
        const name = $(this).data('name');
        const nik = $(this).data('nik');
        const address = $(this).data('address');
        const phone = $(this).data('phone');
        const parent_phone = $(this).data('parent_phone');
        const check_in = $(this).data('check_in');

        const ktpUrl = $(this).data('ktp');
        const btPembayaranUrl =$(this).data('bukti-pembayaran')

        $('#penyewa-form').attr('action', href);
        $('.image-ktp').attr('src', ktpUrl);
        $('.image-payment_proof').attr('src', payment_proof);
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

        $('#btn-download-ktp')
        .attr('href', ktpUrl)
        .attr('download', `KTP-${name}.jpg`);

        $('#bt-pembayaran')
        .attr('href', btPembayaranUrl)
        .attr('download', `bukti-pembayaran-${name}.jpg`);
    });

    $('.edit-field').on('click', function() {
        const inputField = $(this).siblings('input, select');
        inputField.prop('disabled', false);
        inputField.focus();
    });
</script>
@endpush
@endsection

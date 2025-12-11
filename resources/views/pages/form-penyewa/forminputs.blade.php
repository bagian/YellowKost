@extends('default')
@section('content')
@include ('components._breadcrumbLink')
{{-- <div class="flex flex-col justify-center max-w-5xl p-4 pt-20 mx-auto">
    @include('pages.form-penyewa._tablesPenyewa')
    <div class="pt-8 space-y-6 form-detail">
        <form action="" id="penyewa-form" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" name="id_user" value="">
            <div class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
                <div class="flex items-center justify-between px-5 py-4 sm:px-6 sm:py-5">
                    <h3 class="text-base font-semibold text-gray-800 dark:text-white/90">
                        Informasi Data Penyewa Kost
                    </h3>
                    <button type="button" onclick="$('.form-detail').slideUp();"
                        class="p-2 text-gray-400 transition-colors rounded-full shadow-sm bg-white/80 hover:bg-red-50 hover:text-red-500 focus:outline-none dark:bg-gray-700/80 dark:hover:bg-gray-100 dark:text-gray-300">
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
                                    class="relative overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-2xl dark:bg-gray-800 dark:border-gray-700">
                                    <div class="absolute z-10 top-4 right-4">
                                        <button type="button"
                                            class="p-2 text-gray-400 transition-colors rounded-full shadow-sm bg-white/80 hover:bg-red-50 hover:text-red-500 focus:outline-none dark:bg-gray-700/80 dark:hover:bg-gray-100 dark:text-gray-300"
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
                                            class="w-full px-6 py-4 text-center bg-white border-b border-gray-100 dark:border-gray-700 dark:bg-gray-800 rounded-t-xl">
                                            <h3 class="font-bold text-gray-800 text-md md:text-lg dark:text-white">
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
                                        class="flex justify-end px-6 py-4 bg-white border-t border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                        <a href="" download="KTP" id="btn-download-ktp"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 transition-colors bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600">
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
                                    class="absolute top-0 left-0 object-cover w-full h-full image-payment_proof image-pembayaran blur-sm"
                                    alt="Bukti Pembayaran Background" />
                                <img id="payment-preview-image"
                                    src="{{ asset('img_handler/error_img_handler/main_proved_paid.webp') }}"
                                    class="relative object-contain w-full h-full pointer-events-none image-payment_proof image-pembayaran"
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
                        <div id="payment-proof-modal" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full p-4">
                            <div class="relative max-h-full">
                                <!-- Modal content -->
                                <div id="payment-proof-modal"
                                    class="relative overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-2xl dark:bg-gray-800 dark:border-gray-700">
                                    <div class="absolute z-10 top-4 right-4">
                                        <button type="button"
                                            class="p-2 text-gray-400 transition-colors rounded-full shadow-sm bg-white/80 hover:bg-red-50 hover:text-red-500 focus:outline-none dark:bg-gray-700/80 dark:hover:bg-gray-100 dark:text-gray-300"
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
                                            class="w-full px-6 py-4 text-center bg-white border-b border-gray-100 dark:border-gray-700 dark:bg-gray-800 rounded-t-xl">
                                            <h3 class="font-bold text-gray-800 text-md md:text-lg dark:text-white">
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
                                        class="flex justify-end px-6 py-4 bg-white border-t border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                        <a href="" download="bukti-pembayaran" id="bt-pembayaran"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 transition-colors bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600">
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
                                    class="absolute top-0 bottom-0 right-0 px-5 text-sm font-semibold text-white rounded-r-lg edit-field bg-slate-600 hover:bg-slate-500">
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
                                    class="absolute top-0 bottom-0 right-0 px-5 text-sm font-semibold text-white rounded-r-lg edit-field bg-slate-600 hover:bg-slate-500">
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
                                    class="absolute top-0 bottom-0 right-0 px-5 text-sm font-semibold text-white rounded-r-lg edit-field bg-slate-600 hover:bg-slate-500">
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
                                    class="absolute top-0 bottom-0 right-0 px-5 text-sm font-semibold text-white rounded-r-lg edit-field bg-slate-600 hover:bg-slate-500">
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
                                    class="absolute top-0 bottom-0 right-0 px-5 text-sm font-semibold text-white rounded-r-lg edit-field bg-slate-600 hover:bg-slate-500">
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-5 h-5 text-white"
                            fill="currentColor">
                            <path
                                d="M160 96C124.7 96 96 124.7 96 160L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 237.3C544 220.3 537.3 204 525.3 192L448 114.7C436 102.7 419.7 96 402.7 96L160 96zM192 192C192 174.3 206.3 160 224 160L384 160C401.7 160 416 174.3 416 192L416 256C416 273.7 401.7 288 384 288L224 288C206.3 288 192 273.7 192 256L192 192zM320 352C355.3 352 384 380.7 384 416C384 451.3 355.3 480 320 480C284.7 480 256 451.3 256 416C256 380.7 284.7 352 320 352z" />
                        </svg>
                        <span class="block">Simpan</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div> --}}


<div class="flex flex-col justify-center max-w-5xl p-4 pt-20 mx-auto">
    @include('pages.form-penyewa._tablesPenyewa')
    <div class="pt-8 mb-16 space-y-6 form-detail drop-shadow-lg" id="form-detail-section" style="display: none;">
        <form action="" id="penyewa-form" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" name="id_user" id="input_id_user" value="">
            <div
                class="overflow-hidden bg-white border border-gray-200 shadow-xl rounded-3xl dark:border-gray-700 dark:bg-gray-800">
                {{-- ----------------------------------------------------------------------- --}}
                {{-- -- Header Card -- --}}
                {{-- ----------------------------------------------------------------------- --}}
                <div
                    class="flex flex-col items-start justify-between gap-4 px-6 py-5 border-b border-gray-100 md:flex-row md:items-center bg-gray-50/50 dark:bg-gray-700/30 dark:border-gray-700">
                    <div class="flex items-center gap-2">
                        <span class="p-2 text-yellow-600 bg-yellow-100 rounded-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </span>
                        <div class="flex flex-col">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">
                                Detail Data Penyewa
                            </span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Mode: <span id="mode-status"
                                    class="font-bold text-blue-400">Lihat Saja (Read-Only)</span></span>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------- --}}
                    {{-- -- Header Action-- --}}
                    {{-- ----------------------------------------------------------------------- --}}
                    <div class="flex items-center justify-between w-full gap-3 md:w-auto md:justify-end">
                        <!-- Tombol Toggle Edit -->
                        <button type="button" id="btn-toggle-edit" onclick="toggleEditMode()" disabled
                            class="flex items-center gap-2 px-4 py-2 text-sm font-bold text-gray-400 transition-all bg-gray-100 border border-gray-200 rounded-full cursor-not-allowed">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                </path>
                            </svg>
                            <span>Ubah Data</span>
                        </button>
                        {{-- ----------------------------------------------------------------------- --}}
                        {{-- -- Button Close Form-- --}}
                        {{-- ----------------------------------------------------------------------- --}}
                        <button type="button" onclick="closeFormDetail()"
                            class="p-2 text-gray-400 transition-colors bg-white border border-gray-200 rounded-full hover:bg-red-50 hover:text-red-500 hover:border-red-200 dark:bg-gray-800 dark:border-gray-600 dark:hover:bg-gray-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6 md:p-8">
                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                        {{-- ----------------------------------------------------------------------- --}}
                        {{-- -- KTP -- --}}
                        {{-- ----------------------------------------------------------------------- --}}
                        <div class="space-y-2">
                            <label class="text-xs font-bold tracking-wide text-gray-400 uppercase">Dokumen KTP</label>
                            <div
                                class="relative h-48 overflow-hidden bg-gray-100 border-2 border-gray-300 border-dashed dark:bg-gray-900 rounded-2xl dark:border-gray-600 group">
                                <img id="ktp-preview" src="{{ asset('img_handler/error_img_handler/no_image.png') }}"
                                    class="object-contain w-full h-full p-2" alt="KTP">
                                {{-- ----------------------------------------------------------------------- --}}
                                {{-- -- Trigger Modal-- --}}
                                {{-- ----------------------------------------------------------------------- --}}
                                <div onclick="openImageModal('ktp')"
                                    class="absolute inset-0 flex items-center justify-center transition-opacity opacity-0 cursor-pointer bg-black/50 group-hover:opacity-100">
                                    <span
                                        class="px-4 py-3 text-xs font-bold text-white transition-transform bg-gray-900 border border-gray-600 rounded-full shadow-lg hover:scale-105">
                                        Lihat & Download
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- ----------------------------------------------------------------------- --}}
                        {{-- -- Bukti Pembayaran-- --}}
                        {{-- ----------------------------------------------------------------------- --}}
                        <div class="space-y-2">
                            <label class="text-xs font-bold tracking-wide text-gray-400 uppercase">Bukti
                                Pembayaran</label>
                            <div
                                class="relative h-48 overflow-hidden bg-gray-100 border-2 border-gray-300 border-dashed dark:bg-gray-900 rounded-2xl dark:border-gray-600 group">
                                <img id="payment-preview"
                                    src="{{ asset('img_handler/error_img_handler/no_image.png') }}"
                                    class="object-contain w-full h-full p-2" alt="Bukti">
                                {{-- ----------------------------------------------------------------------- --}}
                                {{-- -- Trigger Modal-- --}}
                                {{-- ----------------------------------------------------------------------- --}}
                                <div onclick="openImageModal('payment')"
                                    class="absolute inset-0 flex items-center justify-center transition-opacity opacity-0 cursor-pointer bg-black/50 group-hover:opacity-100">
                                    <span
                                        class="px-4 py-3 text-xs font-bold text-white transition-transform bg-gray-900 border border-gray-600 rounded-full shadow-lg hover:scale-105">
                                        Lihat & Download
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--
                    <hr class="mb-8 border-gray-100 dark:border-gray-700"> --}}

                    {{-- ----------------------------------------------------------------------- --}}
                    {{-- -- FORM INPUT (Disabled by Default)-- --}}
                    {{-- ----------------------------------------------------------------------- --}}
                    <fieldset id="form-fieldset" disabled class="border-t border-gray-700">
                        <div class="grid grid-cols-1 gap-6 pt-5 md:grid-cols-2">
                            <div class="md:col-span-2">
                                <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Pilih
                                    Kamar</label>
                                <div class="relative">
                                    <select name="id_room" id="input_id_room"
                                        class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 cursor-pointer rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                        <option value="">-- Pilih Kamar --</option>
                                        @foreach($room as $r)
                                        <option value="{{ $r->id }}">{{ $r->room_name }}</option>
                                        @endforeach
                                    </select>
                                    <span
                                        class="absolute right-0 z-10 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
                                        <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Nama
                                    Lengkap</label>
                                <input type="text" name="full_name" id="input_tenant"
                                    class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Nomor KTP
                                    / NIK</label>
                                <input type="text" name="nik" id="input_nik"
                                    class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">No. HP
                                    Penyewa</label>
                                <input type="text" name="phone" id="input_phone"
                                    class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">No. HP
                                    Orang Tua</label>
                                <input type="text" name="parent_phone" id="input_parent_phone"
                                    class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Tanggal
                                    Masuk</label>
                                <input type="date" name="check_in" id="input_check_in" onclick="this.showPicker()"
                                    class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 cursor-pointer rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            </div>
                            <div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">
                                            Status Pengajuan Sewa
                                        </label>
                                        <div class="relative">
                                            <select name="status" id="input_status"
                                                class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 cursor-pointer rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                                <option value="" disabled selected hidden>
                                                    <span class="text-xs">
                                                        -- Pengajuan --
                                                    </span>
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
                                                <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">
                                            Status Pembayaran
                                        </label>
                                        <div class="relative">
                                            <select name="payment_status" id="input_payment_status"
                                                class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 cursor-pointer rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                                <option value="" disabled selected hidden>
                                                    -- Pembayaran --
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
                                                <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    {{-- ----------------------------------------------------------------------- --}}
                    {{-- -- Tombol Simpan (Hidden Awal)-- --}}
                    {{-- ----------------------------------------------------------------------- --}}
                    <div id="btn-save-container" class="hidden pt-6 mt-8 border-t border-gray-100 dark:border-gray-700">
                        <button type="submit"
                            class="flex items-center justify-center w-full gap-2 px-6 py-4 font-bold text-black transition-all transform bg-yellow-400 shadow-lg hover:bg-yellow-500 rounded-xl active:scale-95">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Simpan Perubahan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

{{---- ========================================================= ----}}
{{---- MODAL GAMBAR & DOWNLOAD (Static Backdrop) ----}}
{{---- ========================================================= ----}}
<div id="image-modal-download" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
    class="hidden fixed inset-0 z-[99] flex items-center justify-center w-full h-full bg-gray-900/90 backdrop-blur-sm transition-opacity duration-300">

    <div class="relative w-full max-w-4xl max-h-[90vh] p-4">
        {{---- ========================================================= ----}}
        {{---- MODAL KONTEN ----}}
        {{---- ========================================================= ----}}
        <div class="relative flex flex-col items-center bg-transparent">
            <div
                class="relative overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-2xl dark:bg-gray-800 dark:border-gray-700">
                <div class="absolute z-10 top-4 right-4">
                    <button type="button" onclick="closeImageModal()"
                        class="p-2 text-gray-400 transition-colors rounded-full shadow-sm bg-white/80 hover:bg-red-50 hover:text-red-500 focus:outline-none dark:bg-gray-700/80 dark:hover:bg-gray-100 dark:text-gray-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-1 bg-gray-50 dark:bg-gray-900 flex flex-col items-center justify-center min-h-[300px] ">
                    <div
                        class="w-full px-6 py-4 text-center bg-white border-b border-gray-100 dark:border-gray-700 dark:bg-gray-800 rounded-t-xl">
                        <h3 class="font-bold text-gray-800 text-md md:text-lg dark:text-white">
                            Berkas Pendukung Penyewa Kos</h3>
                    </div>
                    <div
                        class="relative w-full p-6 flex justify-center bg-[url('https://www.transparenttextures.com/patterns/grid-noise.png')] bg-gray-100 dark:bg-gray-900/50">
                        <img id="modal-img-full" src="" alt="Preview"
                            src="{{ asset('img_handler/error_img_handler/main_error_foto_ktp_el.jpg') }}"
                            class="max-w-full max-h-[30vh] h-auto object-contain rounded-xl shadow-lg border-4 border-white dark:border-gray-700 hover:scale-[1.02] transition-transform duration-300 image-ktp">
                    </div>
                </div>
                <div
                    class="flex justify-end px-6 py-4 bg-white border-t border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                    <a id="btn-download-action" href="#" download="Dokumen_YellowKost"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 transition-colors bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4">
                            </path>
                        </svg>
                        Download Gambar Ini
                    </a>
                </div>
            </div>
        </div>
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
<script>
    let isEditMode = false;
    let currentKtpUrl = '';
    let currentPaymentUrl = '';

    // 1. LOGIKA BUKA TUTUP MODAL GAMBAR
    function openImageModal(type) {
        const modal = document.getElementById('image-modal-download');
        const img = document.getElementById('modal-img-full');
        const btnDownload = document.getElementById('btn-download-action');

        let targetUrl = (type === 'ktp') ? currentKtpUrl : currentPaymentUrl;
        let fileName = (type === 'ktp') ? 'KTP_Penyewa.jpg' : 'Bukti_Bayar.jpg';

        // Validasi jika gambar kosong/error
        if(!targetUrl || targetUrl == "#" || targetUrl.includes('No+Image') || targetUrl == "") {
            alert("Gambar tidak tersedia atau belum diupload.");
            return;
        }

        img.src = targetUrl;
        btnDownload.href = targetUrl;
        btnDownload.setAttribute('download', fileName);

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Stop scroll belakang
    }

    function closeImageModal() {
        const modal = document.getElementById('image-modal-download');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto'; // Enable scroll
    }

    function closeFormDetail() {
        $('#form-detail-section').slideUp();
        resetFormState();
    }

    // 2. FUNGSI KLIK TOMBOL EDIT DI TABEL
    // (Mengisi data ke form)
    $(document).on('click', '.edit', function() {
        resetFormState(); // Pastikan bersih dan terkunci dulu

        const data = $(this).data();

        // Update Form Action
        $('#penyewa-form').attr('action', data.href);

        // Simpan URL Gambar ke Variable Global
        currentKtpUrl = data.ktp;
        // Gunakan placeholder jika bukti pembayaran kosong
        currentPaymentUrl = data.bukti_pembayaran ? data.bukti_pembayaran : 'img_handler/error_img_handler/no_image.png';

        // Update Preview Kecil di Form
        $('#ktp-preview').attr('src', currentKtpUrl);
        $('#payment-preview').attr('src', currentPaymentUrl);

        // Isi Input
        $('#input_id_user').val(data.id_user);
        $('#input_tenant').val(data.name);
        $('#input_nik').val(data.nik);
        $('#input_phone').val(data.phone);
        $('#input_parent_phone').val(data.parent_phone);
        $('#input_check_in').val(data.check_in);

        // Isi Select (dengan jeda sedikit agar UI select ter-render)
        $('#input_id_room').val(data.id_room).change();
        $('#input_status').val(data.status).change();
        // Anda mungkin perlu menambahkan data-payment_status di tombol tabel jika ingin mengisi ini juga

        // Tampilkan Form
        $('#form-detail-section').slideDown();
        $('html, body').animate({ scrollTop: $("#form-detail-section").offset().top - 100 }, 500);

        // Aktifkan Tombol "Ubah Data" (karena data sudah dimuat)
        $('#btn-toggle-edit').prop('disabled', false)
            .removeClass('cursor-not-allowed text-gray-400 bg-gray-100 border-gray-200')
            .addClass('text-yellow-700 bg-yellow-50 border-yellow-300 cursor-pointer hover:bg-yellow-100');
    });

    // 3. LOGIKA TOGGLE EDIT MODE (READ ONLY <-> EDITABLE)
    function toggleEditMode() {
        const fieldset = document.getElementById('form-fieldset');
        const btnToggle = document.getElementById('btn-toggle-edit');
        const btnSave = document.getElementById('btn-save-container');
        const statusLabel = document.getElementById('mode-status');
        const inputs = document.querySelectorAll('#form-fieldset input, #form-fieldset select');

        if (!isEditMode) {
            // -> Masuk Mode Edit
            isEditMode = true;
            fieldset.disabled = false; // Buka kunci fieldset
            btnSave.classList.remove('hidden');

            // Style Input: HANYA ubah background jadi putih dan teks jadi hitam
            // Border kuning akan muncul otomatis karena class 'focus:border-yellow-500' di HTML
            inputs.forEach(el => {
                el.classList.remove('bg-gray-50', 'text-gray-500', 'cursor-not-allowed');
                el.classList.add('bg-white', 'text-gray-900');
            });

            // Ubah Status Label
            statusLabel.innerText = "Mode Edit";
            statusLabel.className = "font-bold text-yellow-400 animate-pulse";

            // Ubah tombol jadi "Batal"
            btnToggle.innerHTML = `<span class="font-bold text-red-600">Batal Edit</span>`;
            btnToggle.classList.remove('bg-yellow-50', 'border-yellow-300');
            btnToggle.classList.add('border-red-200', 'bg-red-50');

        } else {
            // -> Kembali ke Read Only (Reset)
            resetFormState();

            // Kembalikan style tombol Ubah Data agar tetap aktif
            $('#btn-toggle-edit').prop('disabled', false)
                .removeClass('cursor-not-allowed text-gray-400 bg-gray-100 border-gray-200')
                .addClass('text-yellow-700 bg-yellow-50 border-yellow-300 cursor-pointer');
        }
    }

    function resetFormState() {
        isEditMode = false;
        const fieldset = document.getElementById('form-fieldset');
        const btnSave = document.getElementById('btn-save-container');
        const btnToggle = document.getElementById('btn-toggle-edit');
        const statusLabel = document.getElementById('mode-status');
        const inputs = document.querySelectorAll('#form-fieldset input, #form-fieldset select');

        fieldset.disabled = true; // Kunci fieldset
        btnSave.classList.add('hidden');

        // Style Input kembali Abu-abu (Disabled)
        inputs.forEach(el => {
            el.classList.add('bg-gray-500', 'text-gray-500', 'cursor-not-allowed');
            el.classList.remove('bg-gray-500', 'text-gray-900');
            // Kita tidak perlu menghapus border kuning secara manual,
            // karena saat disabled browser otomatis mengabaikan state focus
        });

        statusLabel.innerText = "Lihat Saja (Read-Only)";
        statusLabel.className = "font-bold text-yellow-400";

        // Kembalikan Tombol Toggle ke default
        btnToggle.innerHTML = `
            <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
            <span class="text-yellow-700">Ubah Data</span>
        `;
        btnToggle.classList.remove('border-red-200', 'bg-red-50');
    }
</script>
<script>
    window.onload = function() {
        // Cari elemen berdasarkan ID
        var selectElement = document.getElementById('input_payment_status', 'input_status');

        // Paksa reset ke index pertama (opsi "Pilih metode...")
        if (selectElement) {
            selectElement.selectedIndex = 0;
            // Atau bisa juga dengan mereset valuenya ke kosong
            // selectElement.value = "";
        }
    }
</script>
@endpush
@endsection

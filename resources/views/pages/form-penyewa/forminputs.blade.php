@extends('default')

@section('content')
<!-- ====== Form Elements Section Start -->
<div class="mx-auto">
    @include('components._accordionLink')
    @include('pages.form-penyewa._tablesPenyewa')
    <form action="">
        <div class="space-y-6">
            <div x-data="{
                    fotoKtp: null,
                    photoPreview: null,
                    photoError: null,

                    handlePhotoChange(event) {
                        const file = event.target.files[0];
                        if (!file) {
                            this.fotoKtp = null;
                            return;
                        };

                        const allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
                        const maxSize = 10 * 1024 * 1024; // 3MB

                        this.photoError = null;

                        if (!allowedTypes.includes(file.type)) {
                            this.photoError = 'Format file harus PNG, JPG, atau JPEG.';
                            this.$refs.photo.value = null;
                            this.fotoKtp = null;
                        } else if (file.size > maxSize) {
                            this.photoError = 'Ukuran file tidak boleh lebih dari 3MB.';
                            this.$refs.photo.value = null;
                            this.fotoKtp = null;
                        } else {
                            this.fotoKtp = file;
                            const reader = new FileReader();
                            reader.onload = (e) => { this.photoPreview = e.target.result; };
                            reader.readAsDataURL(file);
                        }
                    }
                }" class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3 class="text-base font-semibold text-gray-800 dark:text-white/90">
                        Informasi Data Penyewa Kost
                    </h3>
                </div>
                <div class="p-5 space-y-6 border-t border-gray-100 sm:p-6 dark:border-gray-500">
                    <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
                        <!-- Elements -->
                        <div class="flex-1 mb-0">
                            <label for="base-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Kamar</label>
                            <input type="text" placeholder="Masukkan Nama Kamar" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <!-- Elements -->
                        <div class="flex-1 mb-0">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Nomor Kamar
                            </label>
                            <input type="text" placeholder="Masukkan Nomor Kamar" inputmode="numeric" pattern="[0-9]*"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                Status Kamar
                            </label>
                            <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                                <select name="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none"
                                    :class="isOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="isOptionSelected = true">
                                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Pilih Status Kamar
                                    </option>
                                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Tersewa
                                    </option>
                                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Belum Tersewa
                                    </option>
                                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Bersatus DP
                                    </option>
                                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Dibatalkan
                                    </option>
                                </select>
                                <span
                                    class="absolute right-0 z-30 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
                                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke=""
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
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
                        <div class="col-span-1 md:col-span-2">
                            <label for="foto_ktp"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                                Foto KTP</label>

                            <input class="hidden" type="file" id="foto_ktp" name="foto_ktp" x-ref="photo"
                                @change="handlePhotoChange($event)" accept="image/png, image/jpeg, image/jpg" />

                            <div class="mt-2" x-show="photoPreview">
                                <div class="relative w-full h-48 overflow-hidden bg-gray-700 rounded-lg">
                                    <img :src="photoPreview" class="object-contain w-full h-full">
                                    <button type="button"
                                        @click="fotoKtp = null; photoPreview = null; $refs.photo.value = null;"
                                        class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1.5 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <button type="button" x-show="!photoPreview" @click="$refs.photo.click()"
                                class="flex items-center justify-center w-full p-2.5 mt-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4 4-4-4h3V3h2v8z" />
                                </svg>
                                Upload Foto KTP
                            </button>
                            <span class="text-gray-500/60 dark:text-white/60 text-[0.72rem] pt-3 block">
                                Format yang didukung adalah JPEG, JPG, PNG. Ukuran maksimal 3MB.
                            </span>
                            <div x-show="photoError" x-text="photoError"
                                class="mt-2 text-sm text-red-500 dark:text-red-400"></div>
                        </div>
                    </div>
                    <!-- Elements -->
                    <!-- Elements -->
                    <div class="mb-4">
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                            Harga Sewa Bulanan
                        </label>

                        <div class="relative">
                            <input type="text" placeholder="Masukkan Harga Sewa Bulanan"
                                class="w-full text-sm text-gray-800 bg-transparent border border-gray-300 rounded-lg dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 bg-none placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                style="padding-left: 40px;" />
                            <span
                                class="absolute left-0 flex items-center justify-center w-8 -translate-y-1/2 border-r border-gray-200 top-1/2 h-11 dark:border-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20" height="20">
                                    <defs>
                                        <style>
                                            .cls-6 {
                                                fill: #edebf2
                                            }
                                        </style>
                                    </defs>
                                    <g id="Credit_Card_allow" data-name="Credit Card allow">
                                        <path
                                            d="M43 8c0 26.28.06 24.24-.13 24.87A3 3 0 0 1 40 35H4a3 3 0 0 1-3-3V8a3 3 0 0 1 3-3h36a3 3 0 0 1 3 3z"
                                            style="fill:#6fabe6" />
                                        <path
                                            d="M43 8c0 25.11.06 23.24-.13 23.87C42.23 32.06 45 32 7 32a3 3 0 0 1-3-3c0-25.11-.06-23.24.13-23.87C4.77 4.94 2 5 40 5a3 3 0 0 1 3 3z"
                                            style="fill:#82bcf4" />
                                        <path style="fill:#374f68" d="M1 11h42v5H1z" />
                                        <path d="M43 11v3H7a3 3 0 0 1-3-3z" style="fill:#425b72" />
                                        <path style="fill:#dad7e5" d="M5 21h20v4H5z" />
                                        <path class="cls-6"
                                            d="M25 21v2H10a2 2 0 0 1-2-2zM9 32H5a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2zM17 32h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2zM25 32h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z" />
                                        <path d="M47 35a7.86 7.86 0 0 1-1.44 4.56A8 8 0 1 1 47 35z"
                                            style="fill:#9dcc6b" />
                                        <path d="M45.94 39c-7 4-14.89-3.89-10.9-10.9C42 24 50 32 45.94 39z"
                                            style="fill:#b5e08c" />
                                        <path class="cls-6"
                                            d="M35.29 35.71a1 1 0 0 1 1.42-1.42l1.29 1.3 3.29-3.3a1 1 0 0 1 1.42 1.42c-5.45 5.44-4.17 5.29-7.42 2z" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <button
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
        </div>
    </form>
</div>
<!-- ====== Form Elements Section End -->
@endsection
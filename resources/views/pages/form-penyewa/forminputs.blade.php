@extends('default')

@section('content')
<div class="mx-auto">
    <!-- ====== Form Elements Section Start -->
    <form action="">
        <div class="space-y-6">
            <div class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
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
                            <input type="text" placeholder="Masukkan Nama Kamar"
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
                            <input type="text" placeholder="Masukkan Nama Penyewa"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                KTP
                            </label>
                            <input type="text" placeholder="Masukkan Nomor KTP" maxlength="16"
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
                            <input type="text" placeholder="Masukkan Nomor Telp" maxlength="12"
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
                            <input type="text" placeholder="Masukkan Nomor Telp" maxlength="12"
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
                                <select
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
                                <input type="date" placeholder="Tanggal Masuk Penyewa"
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
                        <div class="flex flex-col">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="nik_user">Upload Foto KTP</label>
                            <input
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 cursor-pointer"
                                type="file">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300">A profile
                                picture is useful to confirm your are logged into your account</div>
                        </div>
                        <div class="relative w-full h-40 overflow-hidden bg-gray-400 rounded-lg">
                            <p class="pt-16 text-center text-white">Preview Foto KTP</p>
                            <button
                                class="absolute bottom-0 p-2.5 text-red-800 dark:text-gray-700 bg-gray-100 dark:bg-gray-200 w-full text-center rounded-b-lg hover:bg-gray-200 dark:hover:bg-gray-300 justify-center flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 7h12M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2m2 0v12a2 2 0 01-2 2H8a2 2 0 01-2-2V7h12z" />
                                </svg></button>
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
                        class="flex items-center justify-center w-full gap-2 px-4 py-2 font-semibold text-white align-middle transition-colors duration-200 bg-green-600 rounded-lg hover:bg-green-700 dark:bg-green-700 dark:hover:bg-green-800">
                        <span class="block">Simpan</span>
                        <!-- Icon Plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>


<!-- ====== Form Elements Section End -->
@endsection

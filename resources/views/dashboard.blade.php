@extends('default')

@push('style')
@endpush

@section('content')
<!-- Welcome Section -->
<div class="mb-6 text-center sm:mb-8">
    <h1 class="mb-2 text-2xl font-bold text-gray-900 sm:text-3xl dark:text-gray-900">Selamat Datang di
        YellowKost</h1>
    <p class="text-sm text-gray-600 sm:text-base dark:text-gray-400">Platform manajemen kost yang modern
        dan mudah digunakan</p>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 gap-3 mb-6 sm:grid-cols-2 lg:grid-cols-4 sm:gap-4 sm:mb-8">
    <div
        class="p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6 bg-blue-50 dark:bg-blue-100 dark:border-blue-300">
        <div class="flex items-center">
            <div class="p-2 bg-blue-500 rounded-lg dark:bg-blue-900">
                <svg class="w-5 h-5 text-blue-200 sm:w-6 sm:h-6 dark:text-blue-400" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zM12 14a8 8 0 0 0-8 8h16a8 8 0 0 0-8-8z" />
                </svg>
            </div>
            <div class="ml-3 sm:ml-4">
                <p class="text-xs font-medium text-gray-600 sm:text-sm dark:text-gray-900">Total Penyewa
                </p>
                <p class="text-xl font-semibold text-gray-900 sm:text-2xl dark:tex-gray-900">1,234</p>
            </div>
        </div>
    </div>

    <div
        class="p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6 bg-green-50 dark:bg-green-100 dark:border-green-300">
        <div class="flex items-center">
            <div class="p-2 bg-green-200 rounded-lg dark:bg-green-900">
                <svg class="w-5 h-5 text-green-600 sm:w-6 sm:h-6 dark:text-green-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                    </path>
                </svg>
            </div>
            <div class="ml-3 sm:ml-4">
                <p class="text-xs font-medium text-gray-600 sm:text-sm dark:text-gray-900">Kamar Tersedia
                </p>
                <p class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-gray-900">45</p>
            </div>
        </div>
    </div>

    <div
        class="p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6 bg-yellow-50 dark:bg-yellow-100 dark:border-yellow-300">
        <div class="flex items-center">
            <div class="p-2 bg-yellow-200 rounded-lg dark:bg-yellow-900">
                <svg class="w-5 h-5 text-yellow-600 sm:w-6 sm:h-6 dark:text-yellow-400" fill="currentColor"
                    viewBox="0 0 24 24">
                    <text x="3" y="17" font-size="14" font-family="Arial, sans-serif" font-weight="bold"
                        fill="currentColor">Rp</text>
                </svg>
            </div>
            <div class="ml-3 sm:ml-4">
                <p class="text-xs font-medium text-gray-600 sm:text-sm dark:text-gray-900">Pendapatan Bulan
                    Ini</p>
                <p class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-gray-900">Rp 45.2M</p>
            </div>
        </div>
    </div>

    <div class="p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6 bg-red-50 dark:bg-red-50 dark:border-red-300">
        <div class="flex items-center">
            <div class="p-2 bg-red-200 rounded-lg dark:bg-red-900">
                <svg class="w-5 h-5 text-red-600 sm:w-6 sm:h-6 dark:text-red-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="ml-3 sm:ml-4">
                <p class="text-xs font-medium text-gray-600 sm:text-sm dark:text-gray-900">Tingkat Hunian
                </p>
                <p class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-gray-900">92%</p>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="grid grid-cols-1 gap-3 mb-6 sm:grid-cols-2 lg:grid-cols-3 sm:gap-4 sm:mb-8">
    <div
        class="p-4 transition-shadow bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:bg-blue-900 dark:border-blue-700 hover:shadow-md">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="mb-1 text-base font-semibold text-gray-900 sm:text-lg dark:text-white sm:mb-2">
                    Lihat Pemesanan Masuk</h3>
                <p class="text-xs text-gray-600 dark:text-gray-300 sm:text-sm">Lihat semua data penyewa kos</p>
            </div>
            <a href="{{ route('form.penyewa') }}"
                class="inline-flex items-center justify-center p-2 transition-colors bg-blue-100 rounded-lg dark:bg-blue-300 hover:bg-blue-200 dark:hover:bg-blue-400"
                title="Tambah Penyewa Baru">
                <svg class="w-5 h-5 text-blue-600 sm:w-6 sm:h-6 dark:text-blue-700" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </a>
            </a>
        </div>
    </div>
    <div
        class="p-4 transition-shadow bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:bg-green-900 dark:border-green-700 hover:shadow-md">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="mb-1 text-base font-semibold text-gray-900 sm:text-lg dark:text-white sm:mb-2">
                    Kelola Pembayaran</h3>
                <p class="text-xs text-gray-600 dark:text-gray-300 sm:text-sm">Lihat dan kelola pembayaran
                    sewa</p>
            </div>
            <a href="#"
                class="p-2 transition-colors bg-green-100 rounded-lg dark:bg-green-300 hover:bg-green-200 dark:hover:bg-green-400">
                <svg class="w-5 h-5 text-green-600 sm:w-6 sm:h-6 dark:text-green-700" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                    </path>
                </svg>
            </a>
        </div>
    </div>

    <div
        class="p-4 transition-shadow bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:bg-purple-700 dark:border-purple-700 hover:shadow-md">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="mb-1 text-base font-semibold text-gray-900 sm:text-lg dark:text-white sm:mb-2">
                    Laporan Bulanan</h3>
                <p class="text-xs text-gray-600 dark:text-gray-300 sm:text-sm">Generate laporan keuangan
                    bulanan</p>
            </div>
            <button
                class="p-2 transition-colors bg-purple-100 rounded-lg dark:bg-purple-300 hover:bg-purple-200 dark:hover:bg-purple-400">
                <svg class="w-5 h-5 text-purple-600 sm:w-6 sm:h-6 dark:text-purple-700" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</div>
<!-- Recent Activity -->
<div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 sm:p-6">
    <h3 class="mb-3 text-base font-semibold text-gray-900 sm:text-lg dark:text-white sm:mb-4">Aktivitas
        Terbaru</h3>
    <div class="space-y-3 sm:space-y-4">
        <!--- Modal Activity -->
        <div>
            <!-- Modal toggle -->
            <div id="openPaymentModalBtn"
                class="flex items-center p-3 transition-all duration-200 ease-out rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-900 hover:bg-gray-100">
                <div class="w-2 h-2 mr-3 bg-green-500 rounded-full"></div>
                <div class="flex-1 min-w-0">
                    <p class="text-xs font-medium text-gray-900 truncate sm:text-sm dark:text-white">
                        Pembayaran dari Kamar 101</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">2 menit yang lalu</p>
                </div>
                <span class="ml-2 text-xs font-semibold text-green-600 sm:text-sm dark:text-green-400">Rp
                    2.500.000</span>
            </div>
            <!-- Backdrop -->
            <div id="payment-modal-backdrop"
                class="fixed inset-0 z-[60] hidden bg-gray-900 bg-opacity-50 dark:bg-opacity-80">
            </div>
            <!-- Main modal -->
            <div id="payment-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[99999] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full p-4">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-600">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 border-b border-gray-200 rounded-t md:p-5 dark:border-gray-700">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Informasi Pembayaran
                            </h3>
                            <button type="button"
                                class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                                id="payment-closeModalBtn">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 space-y-4 md:p-5">
                            <div class="grid grid-cols-1 gap-2.5 md:grid-cols-2">
                                <div class="relative">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Penyewa</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0 2c-3.314 0-6 1.343-6 3v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-1c0-1.657-2.686-3-6-3z" />
                                            </svg>
                                        </div>
                                        <div
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                            <span class="block text-gray-500 truncate dark:text-gray-400">Lorem
                                                ipsum dolor sit amet, consectetur adipisicing elit.
                                                Corrupti, ab!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative">
                                    <label for="email-address-icon"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                            <!-- SVG KTP (Kartu Tanda Penduduk) -->
                                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-300" fill="none"
                                                viewBox="0 0 24 24" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2" y="4" width="20" height="16" rx="2" fill="currentColor"
                                                    class="text-gray-200 dark:text-gray-700" />
                                                <rect x="4" y="7" width="8" height="2" rx="1" fill="currentColor"
                                                    class="text-gray-400 dark:text-gray-500" />
                                                <rect x="4" y="11" width="6" height="2" rx="1" fill="currentColor"
                                                    class="text-gray-400 dark:text-gray-500" />
                                                <circle cx="17" cy="13" r="3" fill="currentColor"
                                                    class="text-blue-400 dark:text-blue-500" />
                                                <rect x="13" y="17" width="8" height="2" rx="1" fill="currentColor"
                                                    class="text-gray-400 dark:text-gray-500" />
                                            </svg>
                                        </div>
                                        <div
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full ps-12 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                            <span class="block text-gray-500 truncate dark:text-gray-400">Lorem
                                                ipsum dolor sit amet, consectetur adipisicing elit.
                                                Corrupti, ab!</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-700">
                            <button id="payment-acceptBtn" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lihat
                                Semua</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Modal Activity -->

        <div
            class="flex items-center p-3 transition-all duration-200 ease-out rounded-lg bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-900 hover:bg-gray-100">
            <div class="w-2 h-2 mr-3 bg-yellow-500 rounded-full"></div>
            <div class="flex-1 min-w-0">
                <p class="text-xs font-medium text-gray-900 truncate sm:text-sm dark:text-white">
                    Maintenance selesai</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">1 jam yang lalu</p>
            </div>
            <span class="ml-2 text-xs font-medium text-yellow-600 sm:text-sm dark:text-yellow-400">AC Kamar
                103</span>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush
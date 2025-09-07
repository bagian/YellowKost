@extends('default')

@section('content')
@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

<!-- ====== Form Elements Section Start -->
<div class="mx-auto">
    <form action="">
        <div class="space-y-6">
            <div class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3 class="text-base font-semibold text-center text-gray-800 uppercase dark:text-white/90">
                        Informasi Kamar
                    </h3>
                </div>
                <div class="p-5 space-y-6 border-t border-gray-100 sm:p-6 dark:border-gray-500">
                    <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
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
                                Harga Sewa Kamar
                            </label>
                            <input type="text" placeholder="Harga Sewa" maxlength="16" placeholder="Harga Sewa"
                                inputmode="numeric" pattern="[0-9]*"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <!-- Elements -->
                        <div class="col-span-1 mb-4 md:col-span-2">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Periode Sewa
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
                                        Harian
                                    </option>
                                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Bulanan
                                    </option>
                                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Tahunan
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
                        <div class="flex flex-col gap-2 col-span-0 md:col-span-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Foto
                                Kamar</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer"
                                type="file">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300">A profile
                                picture is useful to confirm your are logged into your account</div>
                        </div>
                        <div
                            class="relative flex items-center justify-center w-full h-64 col-span-1 overflow-hidden align-middle bg-gray-400 rounded-lg dark:bg-gray-600 md:col-span-2">
                            <p class="absolute z-10 font-light text-center text-white">Foto kamar akan tampil disini</p>
                            <!-- Slider main container -->
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="relative overflow-hidden swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80"
                                            alt="Kamar 1" class="object-cover" />
                                        <button
                                            class="absolute bottom-0 z-20 flex items-center justify-center w-full p-2.5 text-center text-gray-700 hover:text-red-700 transition-all duration-150 ease-in-out bg-white/30 backdrop-blur-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3m-7 0h10" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=600&q=80"
                                            alt="Kamar 2" class="object-cover" />
                                        <button
                                            class="absolute bottom-0 z-20 flex items-center justify-center w-full p-2.5 text-center text-gray-700 hover:text-red-700 transition-all duration-150 ease-in-out bg-white/30 backdrop-blur-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3m-7 0h10" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80"
                                            alt="Kamar 3" class="object-cover" />
                                        <button
                                            class="absolute bottom-0 z-20 flex items-center justify-center w-full p-2.5 text-center text-gray-700 hover:text-red-700 transition-all duration-150 ease-in-out bg-white/30 backdrop-blur-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3m-7 0h10" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=600&q=80"
                                            alt="Kamar 4" class="object-cover" />
                                        <button
                                            class="absolute bottom-0 z-20 flex items-center justify-center w-full p-2.5 text-center text-gray-700 hover:text-red-700 transition-all duration-150 ease-in-out bg-white/30 backdrop-blur-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3m-7 0h10" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=600&q=80"
                                            alt="Kamar 5" class="object-cover" />
                                        <button
                                            class="absolute bottom-0 z-20 flex items-center justify-center w-full p-2.5 text-center text-gray-700 hover:text-red-700 transition-all duration-150 ease-in-out bg-white/30 backdrop-blur-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3m-7 0h10" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center swiper-button-prev">
                                    <svg class="w-16 h-16 text-yellow-600 transition-all duration-300 ease-in-out hover:text-yellow-300 drop-shadow-lg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center swiper-button-next">
                                    <svg class="w-16 h-16 text-yellow-600 transition-all duration-300 ease-in-out hover:text-yellow-300 drop-shadow-lg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Elements -->
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

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.swiper', {
            loop: true,
            slidesPerView: 1, // default untuk mobile
            spaceBetween: 10,
            breakpoints: {
                640: { // >= 640px (tablet)
                    slidesPerView: 3
                },
                1024: { // >= 1024px (desktop)
                    slidesPerView: 4
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    });
</script>
@endpush
@endsection
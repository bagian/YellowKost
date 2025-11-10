@extends('default')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush
@section('content')
<!-- ====== Form Elements Section Start -->
<div class="mx-auto">
    @include('partials._errors')
    <form action="{{ route('kamar.update', $room->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
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
                            <input type="text" name="room_name" placeholder="Masukkan Nomor Kamar"
                                value="{{ $room->room_name }}" inputmode="numeric" pattern="[0-9]*"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <!-- Elements -->
                        <div class="mb-4">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Harga Sewa Kamar
                            </label>
                            <input type="text" id="harga_sewa" placeholder="Harga Sewa" maxlength="16"
                                value="{{ $room->price }}" placeholder="Harga Sewa" inputmode="numeric" pattern="[0-9]*"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <input type="number" name="price" hidden value="{{ $room->price ?? ''}}">
                        </div>
                        <!-- Elements -->
                        <div class="col-span-1 mb-4 md:col-span-2">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Periode Sewa
                            </label>
                            <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                                <select name="period"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none"
                                    :class="isOptionSelected && 'text-gray-800 dark:text-white/90'"
                                    @change="isOptionSelected = true">
                                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Pilih Status Kamar
                                    </option>
                                    <option @if ($room->period == 'day') selected @endif value="day"
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Harian
                                    </option>
                                    <option @if ($room->period == 'month') selected @endif value="month"
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Bulanan
                                    </option>
                                    <option @if ($room->period == 'year') selected @endif value="year"
                                        class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
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
                                type="file" id="pictures" multiple accept="image/*">
                            <input type="file" name="pictures[]" hidden />
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300">A profile
                                picture is useful to confirm your are logged into your account</div>
                        </div>
                        <div x-show="error" x-text="error" class="mt-2 text-sm text-red-500 dark:text-red-400">
                        </div>
                        <div
                            class="relative flex items-center justify-center w-full h-64 col-span-1 overflow-hidden align-middle rounded-lg  md:col-span-2">
                            <!-- Slider main container -->
                            <div class="swiper edit-swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    @foreach ($room->pictures as $row)
                                    <div
                                        class="@if ($loop->first) relative overflow-hidden @endif swiper-slide !h-64 !w-64">
                                        <img src="{{ Storage::url($row->url) }}" alt="{{ $row->name }}"
                                            class="object-cover w-64 h-64" />
                                        <button data-id="{{ $row->id }}" data-tempid="" type="button"
                                            class="delete-image absolute bottom-0 z-20 flex items-center justify-center w-full p-2.5 text-center text-gray-700 hover:text-red-700 transition-all duration-150 ease-in-out bg-white/30 backdrop-blur-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3m-7 0h10" />
                                            </svg>
                                        </button>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-prev edit-swiper-button-prev">
                                    <svg class="w-16 h-16 text-yellow-600 transition-all duration-300 ease-in-out hover:text-yellow-300 drop-shadow-lg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </div>
                                <div class="swiper-button-next edit-swiper-button-next">
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
                        <span class="block">Simpan Perubahan</span>
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
@push('scripts')
<script id="previewImage" type="text/template">
    <div class="swiper-slide">
                <img src=""
                alt="" class="object-cover !h-64 !w-64" />
                <button data-tempid="" data-id="" type="button"
                class="delete-image absolute bottom-0 z-20 flex items-center justify-center w-full p-2.5 text-center text-gray-700 hover:text-red-700 transition-all duration-150 ease-in-out bg-white/30 backdrop-blur-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3m-7 0h10" />
                    </svg>
                </button>
            </div>
        </script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
                let swiper = new Swiper('.swiper', {
                    loop: false,
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                    breakpoints: {
                        640: {
                            slidesPerView: 3
                        },
                        1024: {
                            slidesPerView: 4
                        }
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.edit-swiper-button-next',
                        prevEl: '.edit-swiper-button-prev',
                    },
                    scrollbar: {
                        el: '.swiper-scrollbar',
                    },
                });

                initImagePreview({
                    input: '#pictures',
                    hidden: '[name="pictures[]"]',
                    target: '[class="swiper-wrapper"]',
                    template: '#previewImage',
                    swiper: swiper
                });
            });

            $('#harga_sewa').on('change', function() {
                let $price = $('[name="price"]');
                let val = $(this).val();
                let clean = val.replace(/\./g, '');
                let num = parseInt(clean, 10);
                $price.val(num);
            });
</script>
@endpush
@endsection
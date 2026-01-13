@extends('default')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush
@section('content')
<!-- ====== Form Elements Section Start -->
@include ('components._breadcrumbLink')
<div class="flex flex-col justify-center max-w-7xl pt-24 mx-auto">
    <div class="w-full max-w-7xl mx-auto">
        <div class="pb-8">
            <h1 class="text-3xl font-bold text-gray-900">Edit <span class="text-yellow-500">
                    Informasi Kamar</span></h1>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Pantau status penyewa, status pembayaran, dan masa
                aktif sewa.</p>
        </div>
        @include('partials._errors')
        <form action="{{ route('kamar.update', $room->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="max-w-7xl space-y-6">
                <div
                    class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
                    <div class="p-5 space-y-6 border-gray-100 sm:p-6 dark:border-gray-500">
                        <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
                            <!-- Elements -->
                            <div class="flex-1 mb-0">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                    Nomor Kamar
                                </label>
                                <input type="text" name="room_name" placeholder="Masukkan Nomor Kamar"
                                    value="{{ $room->room_name }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <!-- Elements -->
                            <div class="mb-4">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                    Harga Sewa Kamar
                                </label>
                                <input type="text" id="harga_sewa" placeholder="Harga Sewa" value="{{ $room->price }}"
                                    placeholder="Harga Sewa" inputmode="numeric"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <input type="number" name="price" hidden value="{{ $room->price ?? ''}}">
                            </div>
                            <!-- Elements -->
                            <div class="col-span-1 mb-4 md:col-span-2">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                    Periode Sewa
                                </label>
                                <div x-data="{ isOptionSelected: false }" class="relative">
                                    <select name="period"
                                        class="bg-gray-50 cursor-pointer border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none"
                                        :class="isOptionSelected && 'text-gray-800 dark:text-white/90'"
                                        @change="isOptionSelected = true">
                                        <option value="" class="text-gray-700 dark:text-gray-400">
                                            Pilih Status Kamar
                                        </option>
                                        <option @if ($room->period == 'day') selected @endif value="day"
                                            class="text-gray-700 dark:text-gray-400">
                                            Harian
                                        </option>
                                        <option @if ($room->period == 'month') selected @endif value="month"
                                            class="text-gray-700 dark:text-gray-400">
                                            Bulanan
                                        </option>
                                        <option @if ($room->period == 'year') selected @endif value="year"
                                            class="text-gray-700 dark:text-gray-400">
                                            Tahunan
                                        </option>
                                    </select>
                                    <span
                                        class="absolute right-0 z-30 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
                                        <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke=""
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Elements -->
                            <div class="flex flex-col gap-2 col-span-0 md:col-span-2">
                                <label for="pictures"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Foto
                                    Kamar</label>
                                <input type="file" id="pictures" name="pictures[]" multiple accept="image/*"
                                    class="hidden">
                                <button type="button" id="btn-uploadImage"
                                    class="flex items-center justify-center w-full p-2.5 text-xs text-gray-900 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4 4-4-4h3V3h2v8z" />
                                    </svg>
                                    <span id="upload-text">Pilih Foto Kamar (Bisa lebih dari satu)</span>
                                </button>
                                <div class="mt-1 text-xs text-gray-500 dark:text-gray-300">
                                    Format yang didukung adalah JPEG, JPG, PNG. Ukuran maksimal 5MB per file.
                                </div>
                                <div id="upload-error" class="hidden mt-2 text-sm text-red-500 dark:text-red-400"></div>
                            </div>
                        </div>
                        <div
                            class="relative flex items-center justify-center w-full col-span-1 overflow-hidden align-middle rounded-lg h-80 md:col-span-2">
                            <!-- Slider main container -->
                            <div class="swiper edit-swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    @foreach ($room->pictures as $row)
                                    <div
                                        class="swiper-slide !w-70 !h-80 md:!w-[244px] md:!h-auto lg:!w-[237px] lg:!h-auto relative shrink-0">
                                        <img src="{{ Storage::url($row->url) }}" alt="{{ $row->name }}"
                                            class="object-cover w-full !h-80 rounded-2xl" />
                                        <button data-id="{{ $row->id }}" data-tempid="" type="button"
                                            class="delete-image absolute top-3 right-3 z-10 p-1.5 bg-red-500 text-white rounded-full hover:bg-red-600 focus:outline-none shadow-md transition-transform hover:scale-110">
                                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 640">
                                                <path
                                                    d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                    @endforeach
                                </div>
                                <div
                                    class="p-8 border rounded-full shadow-xl swiper-button-prev edit-swiper-button-prev dash-button-prev border-white/20 bg-white/10 backdrop-blur-lg drop-shadow-4xl">
                                </div>
                                <div
                                    class="p-8 border rounded-full shadow-xl swiper-button-next edit-swiper-button-next dash-button-next border-white/20 bg-white/10 backdrop-blur-lg drop-shadow-4xl">
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
    </div>
    </form>
</div>
</div>
<!-- ====== Form Elements Section End -->
@push('scripts')
<script id="previewImage" type="text/template">
    <div class="swiper-slide relative shrink-0 !w-70 !h-80 md:!w-[244px] md:!h-[auto] lg:!w-[237px] lg:!h-[auto]">
        <img src="" alt="" class="object-cover w-full shadow-sm h-80 rounded-2xl" />
        <button data-tempid="" data-id="" type="button"
        class="delete-image absolute top-2 right-2 z-10 p-1.5 bg-red-500 text-white rounded-full hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
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
            let swiper = new Swiper('.edit-swiper', {
            loop: false,
            slidesPerView: 'auto',
            spaceBetween: 8,
            grabCursor: false,
            allowTouchMove: false,

            navigation: {
                nextEl: '.edit-swiper-button-next',
                prevEl: '.edit-swiper-button-prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: false,
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
</script>
<script>
    {{--  $('#harga_sewa').on('change', function() {
        let $price = $('[name="price"]');
        let val = $(this).val();
        let clean = val.replace(/\./g, '');
        let num = parseInt(clean, 10);
        $price.val(num);
    });  --}}
    $('#harga_sewa').on('input', function() {
            let val = $(this).val().replace(/[^0-9]/g, '');
            if (val) {
                $(this).val(new Intl.NumberFormat('id-ID').format(val));
            } else {
                $(this).val('');
            }
        });
</script>
<script>
    $(document).ready(function() {
        $('#btn-uploadImage').on('click', function() {
            $('#pictures').click();
        });
        $('#pictures').on('change', function() {
            var files = $(this)[0].files;
            var $textLabel = $('#upload-text');
            var $errorLabel = $('#upload-error');
            $errorLabel.addClass('hidden').text('');

            if (files.length > 0) {
                $textLabel.text(files.length + " foto dipilih");
            } else {
                $textLabel.text("Pilih Foto Kamar (Bisa lebih dari satu)");
            }
        });

    });
</script>
@endpush
@endsection

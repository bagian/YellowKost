@extends('default')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush
@section('content')
<!-- ====== Form Elements Section Start -->
<div class="mx-auto">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div id="alert-2"
        class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
        role="alert">
        <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">
            {{ $error }}
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
            data-dismiss-target="#alert-2" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @endforeach
    @endif
    <form action="{{ route('kamar.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="space-y-6">
            <div x-data="imageUploader()"
                class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3 class="text-base font-semibold text-center text-gray-800 uppercase dark:text-white/90">
                        Informasi Kamar
                    </h3>
                </div>
                <div class="p-5 space-y-6 border-t border-gray-100 dark:border-gray-500">
                    <div class="grid grid-cols-1 gap-4 mb-3 md:grid-cols-2">
                        <!-- Elements -->
                        <div class="flex-1 mb-3">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Nomor Kamar
                            </label>
                            <input type="text" name="room_name" placeholder="Masukkan Nomor Kamar" inputmode="numeric"
                                pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16)"
                                onkeydown="if(event.key === 'e' || event.key === 'E') event.preventDefault();"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <!-- Elements -->
                        <div class="mb-3">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Harga Sewa Kamar
                            </label>
                            <input type="text" id="harga_sewa" name="harga_sewa" placeholder="Harga Sewa"
                                x-model="hargaSewa" @input="formatHarga"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                inputmode="numeric">
                        </div>
                        <!-- Elements -->
                        <div class="col-span-1 mb-3 md:col-span-2">
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
                                    <option value="day" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Harian
                                    </option>
                                    <option value="month" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                        Bulanan
                                    </option>
                                    <option value="year" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
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
                        <div class="col-span-1 mb-3 md:col-span-2">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-white">
                                Status Sewa
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
                                        Berstatus DP
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
                        <div class="flex flex-col gap-2 col-span-0 md:col-span-2">
                            <label for="pictures"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Foto
                                Kamar</label>
                            <input id="pictures" name="pictures[]" type="file" @change="handleFileChange" multiple
                                accept="image/png, image/jpeg, image/jpg" class="hidden" x-ref="picturesInput">
                            <button type="button" @click="$refs.picturesInput.click()"
                                class="flex items-center justify-center w-full p-2.5 text-xs text-gray-900 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4 4-4-4h3V3h2v8z" />
                                </svg>
                                Pilih Foto Kamar (Bisa lebih dari satu)
                            </button>
                            <div class="mt-1 text-xs text-gray-500 dark:text-gray-300">
                                Format yang didukung adalah JPEG, JPG, PNG. Ukuran maksimal 10MB per file.
                            </div>
                            <div x-show="error" x-text="error" class="mt-2 text-sm text-red-500 dark:text-red-400">
                            </div>
                        </div>
                        <div x-show="previews.length > 0"
                            class="relative flex items-center justify-center w-full h-64 col-span-1 overflow-hidden align-middle rounded-lg md:col-span-2">
                            <!-- Slider main container -->
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <template x-for="(preview, index) in previews" :key="index">
                                        <div class="relative swiper-slide !h-64">
                                            <img :src="preview" class="object-cover w-full h-full rounded-lg" />
                                            <button @click.prevent="removePicture(index)"
                                                class="absolute top-2 right-2 z-10 p-1.5 bg-red-500 text-white rounded-full hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </template>
                                </div>
                                <div class="flex items-center justify-center swiper-button-prev">
                                    <svg class="w-16 h-16 text-yellow-600 transition-all duration-300 ease-in-out drop-shadow-lg hover:text-yellow-400"
                                        fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </div>
                                <div class="flex items-center justify-center swiper-button-next">
                                    <svg class="w-16 h-16 text-yellow-600 transition-all duration-300 ease-in-out drop-shadow-lg hover:text-yellow-400"
                                        fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Elements -->
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
@push('scripts')
<script id="previewImage" type="text/template">
    <div class="swiper-slide relative overflow-hidden">
        <img src="" alt="" class="object-cover" />
            <button data-tempid="" data-id= "" type="button" class="delete-image absolute bottom-0 z-20 flex items-center justify-center w-full p-2.5 text-center text-gray-700 hover:text-red-700 transition-all duration-150 ease-in-out bg-white/30 backdrop-blur-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3m-7 0h10" />
                </svg>
            </button>
        </div>
</script>
<script id="imagePlaceHolder" type="text/template">
    <p class="absolute z-10 font-light text-center text-white">Foto kamar akan tampil disini</p>
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    function imageUploader() {
        return {
            pictures: [],
            previews: [],
            error: null,
            swiper: null,
            hargaSewa: '',

            init() {
                this.swiper = new Swiper('.swiper', {
                    loop: false, // Loop dinonaktifkan untuk preview dinamis
                    slidesPerView: 1,
                    spaceBetween: 10,
                    breakpoints: {
                        640: {
                            slidesPerView: 3
                        },
                        1024: {
                            slidesPerView: 4
                        }
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });

                this.$watch('previews', () => {
                    this.$nextTick(() => this.swiper.update());
                });
            },
            handleFileChange(event) {
                this.error = null;
                const files = Array.from(event.target.files);
                const maxSize = 10 * 1024 * 1024; // 10MB
                const allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];

                files.forEach(file => {
                    if (!allowedTypes.includes(file.type)) {
                        this.error = 'Format file harus PNG, JPG, atau JPEG.';
                        return;
                    }
                    if (file.size > maxSize) {
                        this.error = 'Ukuran file tidak boleh lebih dari 10MB.';
                        return;
                    }
                    this.pictures.push(file);
                    this.previews.push(URL.createObjectURL(file));
                });
            },
            removePicture(index) {
                this.pictures.splice(index, 1);
                this.previews.splice(index, 1);
            },
            formatHarga() {
                let value = this.hargaSewa.replace(/[^0-9]/g, '');
                if (value) {
                    this.hargaSewa = parseInt(value, 10).toLocaleString('id-ID');
                }
            }
        }
    }
</script>
@endpush
@endsection
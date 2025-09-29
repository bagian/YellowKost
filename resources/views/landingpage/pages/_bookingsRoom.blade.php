@extends('landingpage.index')
@section('content')
<div class="relative w-full p-4">
    <div>
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
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        @endforeach
        @endif
    </div>
    <div class="max-w-4xl p-8 mx-auto bg-white border border-yellow-300 rounded-xl drop-shadow-2xl">
        <span class="block pb-8 text-xl font-bold text-center border-b border-gray-200 text-stone-600">
            Formulir Data Diri Pemesanan Kamar Kos
        </span>

        {{-- SEMUA LOGIKA DIPUSATKAN DI SINI --}}
        <form x-data="{
            namaLengkap: '{{ Auth::user()->full_name ?? old('full_name', $bookingData['full_name'] ?? '') }}',
            email: '{{ Auth::user()->email ?? old('email', $bookingData['email'] ?? '')}}',
            nik: '{{ Auth::user()->nik ?? old('nik', $bookingData['nik'] ?? '')}}',
            alamat: '{{ Auth::user()->address ?? old('address', $bookingData['address'] ?? '')}}',
            noTelp: '{{ Auth::user()->phone ?? old('phone', $bookingData['phone'] ?? '')}}',
            noTelpOrtu: '{{ Auth::user()->parent_phone ?? old('parent_phone', $bookingData['parent_phone'] ?? '')}}',
            checkIn: '{{ old('check_in', $bookingData['check_in'] ?? '') }}'
            setuju: false,

            fotoKtp: null,
            photoPreview: null,
            photoError: null,

            isFormValid() {
                return this.namaLengkap && this.nik && this.alamat && this.noTelp && this.noTelpOrtu && this.fotoKtp && this.setuju;
            },

            handlePhotoChange(event) {
                const file = event.target.files[0];
                if (!file) {
                    this.fotoKtp = null;
                    return;
                };

                const allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
                const maxSize = 3 * 1024 * 1024; // 3MB

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
                    // Logika yang disederhanakan, 'this' sekarang merujuk ke x-data utama
                    this.fotoKtp = file;
                    const reader = new FileReader();
                    reader.onload = (e) => { this.photoPreview = e.target.result; };
                    reader.readAsDataURL(file);
                }
            },

            clearPhoto() {
                this.fotoKtp = null;
                this.photoPreview = null;
                this.$refs.photo.value = null;
            }
        }" enctype="multipart/form-data" action="{{ route('booking.submit') }}" method="post">

            <div class="grid gap-6 mt-8 mb-6 md:grid-cols-1">
                {{-- Input fields (nama, NIK, dll) tidak berubah --}}
                @csrf
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                        Lengkap</label>
                    <input type="text" id="full_name" name="full_name"
                        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="Suhadi Akbar" required x-model="namaLengkap" :value="namaLengkap" />
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="text" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="xxxxxxxxxxx@gmail.com" required x-model="email" :value="email"
                        @if(isset(Auth::user()->email)) readonly @endif/>
                </div>
                <div>
                    <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                    <input type="text" id="nik" name="nik"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="Contoh: 3509xxxxxxxxxxxx" required maxlength="16" inputmode="numeric"
                        pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                        x-model="nik" :value="nik" />
                </div>
                <div>
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                    <input type="text" id="alamat" name="address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="Contoh: Jl. Cendana Blok AAA NO.89" required x-model="alamat" :value="address" />
                </div>
                <div>
                    <label for="noTelp" class="block mb-2 text-sm font-medium text-gray-900 ">No
                        Telp</label>
                    <input type="text" id="telp" name="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="Contoh: 0812xxxxxxxx" required maxlength="13" inputmode="numeric" pattern="[0-9]*"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 13)" x-model="noTelp"
                        :value="noTelp" />
                </div>
                <div>
                    <label for="noTelpOrtu" class="block mb-2 text-sm font-medium text-gray-900 ">No Telp
                        Ortu</label>
                    <input type="text" id="telpOrtu" name="parent_phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="Contoh: 0812xxxxxxxx" required maxlength="13" inputmode="numeric" pattern="[0-9]*"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 13)" x-model="noTelpOrtu"
                        :value="noTelpOrtu" />
                </div>
                <div class="mb-4">
                    <label for="noTelpOrtu" class="block mb-2 text-sm font-medium text-gray-900 ">Tanggal Masuk</label>
                    <div class="relative">
                        <input type="date" name="check_in" placeholder="Tanggal Masuk Penyewa"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                            onclick="this.showPicker()" min="{{ now()->format('Y-m-d') }}" :value="checkIn">
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
                {{-- Bagian file input, sekarang tanpa x-data sendiri --}}
                <div>
                    <div>
                        <label for="foto_ktp" class="block mb-2 text-sm font-medium text-gray-900 ">Foto
                            KTP</label>
                        <input class="hidden" type="file" id="foto_ktp" name="ktp" x-ref="photo"
                            @change="handlePhotoChange($event)" accept="image/png, image/jpeg, image/jpg" />

                        <div class="mt-2" x-show="photoPreview">
                            <div
                                class="relative w-full h-48 overflow-hidden border border-gray-300 rounded-lg bg-gray-50">
                                <img :src="photoPreview" class="object-contain w-full h-full">
                                <button type="button" @click="clearPhoto()"
                                    class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1.5 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <button type="button" x-show="!photoPreview" @click="$refs.photo.click()"
                            class="flex items-center justify-center  p-2.5 mt-2 text-sm text-gray-900 bg-gray-50 border border-gray-300  rounded-lg focus:ring-yellow-300 focus:border-yellow-300w-full p-2.50 w-full">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4 4-4-4h3V3h2v8z" />
                            </svg>
                            Upload Foto KTP
                        </button>
                        <span class="text-gray-500 text-[0.72rem] pt-3 block">
                            Format yang didukung adalah JPEG, JPG, PNG. Ukuran maksimal 3MB.
                        </span>
                        <div x-show="photoError" x-text="photoError"
                            class="mt-2 text-sm text-red-500 dark:text-red-400"></div>
                    </div>
                </div>
            </div>

            <div class="flex items-start pt-8 mb-6 border-t border-gray-200">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                        class="w-4 h-4 transition duration-200 border border-yellow-300 rounded bg-yellow-50 focus:ring-2 focus:ring-yellow-300 focus:outline-none checked:bg-yellow-500 checked:text-yellow-500"
                        required x-model="setuju" />
                </div>
                <label for="remember" class="text-sm font-medium text-gray-900 ms-2">Dengan ini
                    menyatakan bahwa saya telah menyampaikan data sudah sesuai dengan yang sebenarnya, dan saya telah
                    membaca dan menyetujui <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Tata
                        Tertib</a> yang berlaku di kost.
                </label>
            </div>

            <button type="submit" :disabled="!isFormValid()"
                class="text-black bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 shadow-lg font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:opacity-50 disabled:cursor-not-allowed">
                Kirim Data Diri
            </button>
        </form>
    </div>
</div>
@endsection
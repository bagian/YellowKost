@extends('landingpage.index')

@section('content')
<div class="relative w-full p-4">
    <div class="p-8 max-w-4xl mx-auto bg-gray-900 rounded-xl drop-shadow-2xl">
        <span class="block font-bold text-white text-xl text-center border-b border-gray-700 pb-8">
            Formulir Data Diri Pemesanan Kamar Kos
        </span>

        {{-- SEMUA LOGIKA DIPUSATKAN DI SINI --}}
        <form x-data="{
            namaLengkap: '',
            nik: '',
            alamat: '',
            noTelp: '',
            noTelpOrtu: '',
            setuju: false,

            // State untuk file upload, dipindahkan ke sini
            fotoKtp: null,
            photoPreview: null,
            photoError: null,

            // Method untuk validasi form
            isFormValid() {
                return this.namaLengkap && this.nik && this.alamat && this.noTelp && this.noTelpOrtu && this.fotoKtp && this.setuju;
            },

            // Method untuk menangani perubahan file, dipindahkan ke sini
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

            // Method untuk membersihkan file
            clearPhoto() {
                this.fotoKtp = null;
                this.photoPreview = null;
                this.$refs.photo.value = null;
            }
        }" @submit.prevent="console.log('Form submitted!')">

            <div class="grid gap-6 mb-6 md:grid-cols-1 mt-8">
                {{-- Input fields (nama, NIK, dll) tidak berubah --}}
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Lengkap</label>
                    <input type="text" id="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Suhadi Akbar" required x-model="namaLengkap" />
                </div>
                <div>
                    <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
                    <input type="text" id="nik" name="nik"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Contoh: 3509xxxxxxxxxxxx" required maxlength="16" inputmode="numeric"
                        pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                        x-model="nik" />
                </div>
                <div>
                    <label for="alamat"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" id="alamat" name="alamat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Contoh: Jl. Cendana Blok AAA NO.89" required x-model="alamat" />
                </div>
                <div>
                    <label for="noTelp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                        Telp</label>
                    <input type="text" id="telp" name="telp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Contoh: 0812xxxxxxxx" required maxlength="13" inputmode="numeric" pattern="[0-9]*"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 13)" x-model="noTelp" />
                </div>
                <div>
                    <label for="noTelpOrtu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telp
                        Ortu</label>
                    <input type="text" id="telpOrtu" name="telpOrtu"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Contoh: 0812xxxxxxxx" required maxlength="13" inputmode="numeric" pattern="[0-9]*"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 13)" x-model="noTelpOrtu" />
                </div>

                {{-- Bagian file input, sekarang tanpa x-data sendiri --}}
                <div>
                    <div>
                        <label for="foto_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                            KTP</label>

                        <input class="hidden" type="file" id="foto_ktp" name="foto_ktp" x-ref="photo"
                            @change="handlePhotoChange($event)" accept="image/png, image/jpeg, image/jpg" />

                        <div class="mt-2" x-show="photoPreview">
                            <div class="relative w-full h-48 overflow-hidden bg-gray-700 rounded-lg">
                                <img :src="photoPreview" class="w-full h-full object-contain">
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
                            class="flex items-center justify-center w-full p-2.5 mt-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4 4-4-4h3V3h2v8z" />
                            </svg>
                            Upload Foto KTP
                        </button>
                        <span class="text-white/60 text-[0.72rem] pt-3 block">
                            Format yang didukung adalah JPEG, JPG, PNG. Ukuran maksimal 3MB.
                        </span>
                        <div x-show="photoError" x-text="photoError"
                            class="mt-2 text-sm text-red-500 dark:text-red-400"></div>
                    </div>
                </div>
            </div>

            <div class="flex items-start mb-6 border-t border-gray-700 pt-8">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                        class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                        required x-model="setuju" />
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dengan ini
                    menyatakan bahwa saya telah menyampaikan data sudah sesuai dengan yang sebenarnya, dan saya telah
                    membaca dan menyetujui Tata Tertib yang berlaku di kost.
                    <span>
                        <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Tata tertib kos.</a>
                    </span>
                </label>
            </div>

            <button type="submit" :disabled="!isFormValid()"
                class="text-black bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 shadow-lg shadow-yellow-500/50 dark:shadow-lg dark:shadow-yellow-800/80 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:opacity-50 disabled:cursor-not-allowed">
                Kirim Data Diri
            </button>
        </form>
    </div>
</div>
@endsection
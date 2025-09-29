<div id="editPenyewa" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-gray-900 bg-opacity-50 dark:bg-opacity-50 py-20">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <!-- Modal header -->
            <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="editPenyewa">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
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
                                }">
                        <div class="p-5 space-y-6">
                            <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
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
                                            <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                            <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="relative w-full h-48 overflow-hidden bg-gray-800 rounded-lg">
                                            <img :src="photoPreview" class="object-contain w-full h-full">
                                            <button type="button"
                                                @click="fotoKtp = null; photoPreview = null; $refs.photo.value = null;"
                                                class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1.5 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
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
                                        Format yang didukung adalah JPEG, JPG, PNG. Ukuran
                                        maksimal 10MB.
                                    </span>
                                    <div x-show="photoError" x-text="photoError"
                                        class="mt-2 text-sm text-red-500 dark:text-red-400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="static-modal" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex gap-2 items-center">
                    <svg class="w-4 h-4" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640">
                        <path
                            d="M160 96C124.7 96 96 124.7 96 160L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 237.3C544 220.3 537.3 204 525.3 192L448 114.7C436 102.7 419.7 96 402.7 96L160 96zM192 192C192 174.3 206.3 160 224 160L384 160C401.7 160 416 174.3 416 192L416 256C416 273.7 401.7 288 384 288L224 288C206.3 288 192 273.7 192 256L192 192zM320 352C355.3 352 384 380.7 384 416C384 451.3 355.3 480 320 480C284.7 480 256 451.3 256 416C256 380.7 284.7 352 320 352z" />
                    </svg>
                    Simpan
                </button>
            </div>
        </div>
    </div>
</div>
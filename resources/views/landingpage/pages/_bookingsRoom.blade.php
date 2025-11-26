@extends('landingpage.index')
@section('content')
@push('scripts')
<div class="relative w-full p-4">
    @include('components.sweet_alert')
    @include('partials._errors')
    <div class="max-w-4xl p-8 mx-auto bg-white border border-yellow-300 rounded-xl drop-shadow-2xl">
        <span class="block pb-8 text-xl text-center border-b border-gray-200 text-stone-900">
            Formulir Data Diri Pemesanan Kamar Kos
        </span>

        {{-- SEMUA LOGIKA DIPUSATKAN DI SINI --}}
        <form id="booking-form" enctype="multipart/form-data" action="{{ route('booking.submit') }}" method="post">

            <div class="grid gap-6 mt-8 mb-6 md:grid-cols-1">
                {{-- Input fields (nama, NIK, dll) tidak berubah --}}
                @csrf
                <div>
                    <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                        Lengkap</label>
                    <input type="text" id="full_name" name="full_name"
                        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="Suhadi Akbar" required
                        value="@if(Auth::check() && Auth::user()->role->slug != 'admin'){{ Auth::user()->full_name ?? old('full_name', $bookingData['full_name'] ?? '') }}@endif" />
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="text" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="xxxxxxxxxxx@gmail.com" required
                        value="@if(Auth::check() && Auth::user()->role->slug != 'admin'){{ Auth::user()->email ?? old('email', $bookingData['email'] ?? '') }}@endif"
                        @if(Auth::check() && Auth::user()->role->slug != 'admin') readonly @endif/>
                </div>
                <div>
                    <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                    <input type="text" id="nik" name="nik"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="Contoh: 3509xxxxxxxxxxxx" required maxlength="16" inputmode="numeric"
                        pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)"
                        value="@if(Auth::check() && Auth::user()->role->slug != 'admin'){{ Auth::user()->nik ?? old('nik', $bookingData['nik'] ?? '') }}@endif" />
                </div>
                <div>
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                    <input type="text" id="alamat" name="address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="Contoh: Jl. Cendana Blok AAA NO.89" required
                        value="@if(Auth::check() && Auth::user()->role->slug != 'admin'){{ Auth::user()->address ?? old('address', $bookingData['address'] ?? '') }}@endif" />
                </div>
                <div>
                    <label for="noTelp" class="block mb-2 text-sm font-medium text-gray-900 ">No
                        Telp</label>
                    <input type="text" id="telp" name="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="Contoh: 0812xxxxxxxx" required maxlength="13" inputmode="numeric" pattern="[0-9]*"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 13)"
                        value="@if(Auth::check() && Auth::user()->role->slug != 'admin'){{ Auth::user()->phone ?? old('phone', $bookingData['phone'] ?? '') }}@endif" />
                </div>
                <div>
                    <label for="noTelpOrtu" class="block mb-2 text-sm font-medium text-gray-900 ">No Telp
                        Ortu</label>
                    <input type="text" id="telpOrtu" name="parent_phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                        placeholder="Contoh: 0812xxxxxxxx" required maxlength="13" inputmode="numeric" pattern="[0-9]*"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 13)"
                        value="@if(Auth::check() && Auth::user()->role->slug != 'admin'){{ Auth::user()->parent_phone ?? old('parent_phone', $bookingData['parent_phone'] ?? '') }}@endif" />
                </div>
                <div>
                    <label for="noTelpOrtu" class="block mb-2 text-sm font-medium text-gray-900 ">Tanggal Masuk</label>
                    <div class="relative">
                        <input type="date" name="check_in" placeholder="Tanggal Masuk Penyewa"
                            class="[&::-webkit-calendar-picker-indicator]:hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                            onclick="this.showPicker()" min="{{ now()->format('Y-m-d') }}"
                            value="{{ old('check_in', $bookingData['check_in'] ?? '') }}">
                    </div>
                </div>
                {{-- Bagian file input, sekarang tanpa x-data sendiri --}}
                <div>
                    <div>
                        <label for="foto_ktp" class="block mb-2 text-sm font-medium text-gray-900 ">Foto
                            KTP</label>
                        <input class="hidden" type="file" id="foto_ktp" name="ktp"
                            accept="image/png, image/jpeg, image/jpg" />

                        <div id="photo-preview-container" class="hidden mt-2">
                            <div
                                class="relative w-full h-48 overflow-hidden border border-gray-300 rounded-lg bg-gray-50">
                                <img id="photo-preview" src="" class="object-contain w-full h-full">
                                <button type="button" id="clear-photo-button"
                                    class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1.5 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <button type="button" id="upload-photo-button"
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
                        <div id="photo-error" class="mt-2 text-sm text-red-500 dark:text-red-400"></div>
                    </div>
                </div>
            </div>

            <div class="flex items-start pt-8 mb-6 border-t border-gray-200">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                        class="w-4 h-4 transition duration-200 border border-yellow-300 rounded bg-yellow-50 focus:ring-2 focus:ring-yellow-300 focus:outline-none checked:bg-yellow-500 checked:text-yellow-500"
                        required />
                </div>
                <label for="remember" class="text-sm font-medium text-gray-900 ms-2">Dengan ini
                    menyatakan bahwa saya telah menyampaikan data sudah sesuai dengan yang sebenarnya, dan saya telah
                    membaca dan menyetujui <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Tata
                        Tertib</a> yang berlaku di kost.
                </label>
            </div>

            <button type="submit" id="submit-button"
                class="text-black bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 shadow-lg font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:opacity-50 disabled:cursor-not-allowed">
                Kirim Data Diri
            </button>
        </form>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        const $form = $('#booking-form');
        const $submitButton = $('#submit-button');
        const $photoInput = $('#foto_ktp');
        const $photoPreviewContainer = $('#photo-preview-container');
        const $photoPreview = $('#photo-preview');
        const $uploadButton = $('#upload-photo-button');
        const $clearPhotoButton = $('#clear-photo-button');
        const $photoError = $('#photo-error');

        // --- Form Validation ---
        function validateForm() {
            let isValid = true;
            // Check all required text/date/checkbox inputs
            $form.find('input[required]').each(function() {
                if ($(this).is(':checkbox')) {
                    if (!$(this).is(':checked')) {
                        isValid = false;
                    }
                } else {
                    if (!$(this).val()) {
                        isValid = false;
                    }
                }
            });

            // Specifically check if the file input has a file
            if ($photoInput[0].files.length === 0) {
                isValid = false;
            }

            $submitButton.prop('disabled', !isValid);
        }

        // Initial validation check
        validateForm();

        // Re-validate on any input change
        $form.on('input change', 'input', validateForm);


        // --- Photo Upload Logic ---
        $uploadButton.on('click', function() {
            $photoInput.click();
        });

        $photoInput.on('change', function(event) {
            const file = event.target.files[0];
            if (!file) {
                return;
            }

            const allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
            const maxSize = 3 * 1024 * 1024; // 3MB

            $photoError.text(''); // Clear previous errors

            if (!allowedTypes.includes(file.type)) {
                $photoError.text('Format file harus PNG, JPG, atau JPEG.');
                $photoInput.val(''); // Clear the invalid file
                validateForm();
                return;
            }

            if (file.size > maxSize) {
                $photoError.text('Ukuran file tidak boleh lebih dari 3MB.');
                $photoInput.val(''); // Clear the invalid file
                validateForm();
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                $photoPreview.attr('src', e.target.result);
                $photoPreviewContainer.removeClass('hidden');
                $uploadButton.addClass('hidden');
                validateForm();
            };
            reader.readAsDataURL(file);
        });

        $clearPhotoButton.on('click', function() {
            $photoInput.val(''); // Clear the file input
            $photoPreview.attr('src', '');
            $photoPreviewContainer.addClass('hidden');
            $uploadButton.removeClass('hidden');
            $photoError.text('');
            validateForm(); // Re-validate the form
        });
    });
</script>
@endpush
@endsection
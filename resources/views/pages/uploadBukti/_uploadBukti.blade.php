@extends('default')

@push('style')
<style>
    .drag-over {
        border-color: #3b82f6;
        /* blue-500 */
        background-color: rgb(43, 56, 75);
        /* blue-50/50 */
        color: #fff;

    }
</style>
@endpush

@section('content')
@include('components._breadcrumbLink')
<div class="flex flex-col max-w-5xl p-4 mx-auto">
    <div class="pt-20 mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Unggah <span class="text-yellow-500">Bukti Pembayaran</span></h1>
        <p class="mt-1 text-gray-500 dark:text-gray-600">Unggah bukti pembayaran Anda untuk memproses transaksi
            lebih lanjut.</p>
    </div>
    <div class="max-w-5xl min-h-screen mx-auto text-gray-800 dark:text-gray-200">
        <div
            class="overflow-hidden bg-white border border-gray-200 shadow-lg dark:border-gray-700 dark:bg-gray-800 rounded-xl">
            <div class="p-6 text-xs bg-gray-300/30 line-clamp-2">
                <div class="flex flex-row gap-2">
                    <span>
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"
                            fill="currentColor">
                            <path
                                d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM288 224C288 206.3 302.3 192 320 192C337.7 192 352 206.3 352 224C352 241.7 337.7 256 320 256C302.3 256 288 241.7 288 224zM280 288L328 288C341.3 288 352 298.7 352 312L352 400L360 400C373.3 400 384 410.7 384 424C384 437.3 373.3 448 360 448L280 448C266.7 448 256 437.3 256 424C256 410.7 266.7 400 280 400L304 400L304 336L280 336C266.7 336 256 325.3 256 312C256 298.7 266.7 288 280 288z" />
                        </svg>
                    </span>
                    <span class="block pt-0 m-0 text-white">
                        Silakan unggah bukti pembayaran Anda untuk memproses transaksi lebih lanjut. Pastikan file yang
                        diunggah
                        dalam format PNG, JPG, atau JPEG dengan ukuran maksimal 5MB. Harap unggah bukti pembayaran yang
                        jelas
                        dan
                        dapat dibaca agar proses verifikasi dapat berjalan lancar.
                    </span>
                </div>
            </div>
            <div class="flex items-center justify-center w-full max-w-lg px-6 py-8 mx-auto">
                <form action="{{ route('booking.payment.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label id="drop-zone" for="paymentProof"
                            class="relative flex flex-col items-center justify-center w-full p-2 transition-colors border-2 border-gray-300 border-dashed rounded-lg cursor-pointer dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700/50">
                            {{-- Initial State --}}
                            <div id="initial-state" class="text-center">
                                <svg class="w-10 h-10 mx-auto mb-3 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                    </path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                    <span class="font-semibold">Klik untuk mengunggah</span> atau seret dan lepas
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, atau JPEG (MAX. 5MB)
                                </p>
                            </div>

                            {{-- Preview State --}}
                            <div id="preview-state" class="relative z-20 hidden w-full text-center">
                                <!-- Tambah relative z-20 -->
                                <div class="relative group">
                                    <img id="image-preview"
                                        class="object-contain h-48 mx-auto mb-4 rounded-lg shadow-sm"
                                        alt="Pratinjau Gambar" />
                                </div>

                                <p id="file-name"
                                    class="px-4 overflow-hidden text-sm font-medium text-gray-800 dark:text-gray-200 text-ellipsis whitespace-nowrap">
                                </p>
                                <p id="file-size" class="mb-3 text-xs text-gray-500 dark:text-gray-400"></p>

                                <!-- TOMBOL HAPUS FILE -->
                                <button type="button" id="remove-file"
                                    class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-red-600 bg-red-50 rounded-full hover:bg-red-100 border border-red-200 transition-colors focus:outline-none z-50 relative">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Hapus / Ganti Foto
                                </button>
                            </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit"
                            class="w-full px-4 py-2.5 text-sm font-semibold text-white bg-yellow-600 rounded-lg hover:bg-yellow-700 focus:outline-none focus:ring-4 focus:ring-gray-300 disabled:bg-gray-400 disabled:cursor-not-allowed"
                            disabled>
                            Unggah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        const $dropZone = $('#drop-zone');
        const $fileInput = $('#paymentProof');
        const $initialState = $('#initial-state');
        const $previewState = $('#preview-state');
        const $imagePreview = $('#image-preview');
        const $fileName = $('#file-name');
        const $fileSize = $('#file-size');
        const $errorMessage = $('#error-message');
        const $submitButton = $('button[type="submit"]');
        const $removeButton = $('#remove-file');

        const MAX_SIZE = 5 * 1024 * 1024;
        const ALLOWED_TYPES = ['image/jpeg', 'image/png', 'image/jpg'];

        function handleFile(file) {
            $errorMessage.text('');
            if (!ALLOWED_TYPES.includes(file.type)) {
                $errorMessage.text('Tipe file tidak valid. Harap unggah PNG, JPG, atau JPEG.');
                resetForm();
                return;
            }

            if (file.size > MAX_SIZE) {
                $errorMessage.text('Ukuran file terlalu besar. Maksimal 5MB.');
                resetForm();
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                $imagePreview.attr('src', e.target.result);
                $fileName.text(file.name);
                $fileSize.text((file.size / 1024 / 1024).toFixed(2) + ' MB');

                $initialState.addClass('hidden');
                $previewState.removeClass('hidden');

                // Aktifkan tombol submit
                $submitButton.prop('disabled', false)
                    .removeClass('bg-gray-400 cursor-not-allowed')
                    .addClass('bg-yellow-600 hover:bg-yellow-700');
            }
            reader.readAsDataURL(file);
        }

        function resetForm() {
            $fileInput.val('');
            $imagePreview.attr('src', '');
            $fileName.text('');
            $fileSize.text('');

            $previewState.addClass('hidden');
            $initialState.removeClass('hidden');

            $submitButton.prop('disabled', true)
                .addClass('bg-gray-400 cursor-not-allowed')
                .removeClass('bg-yellow-600 hover:bg-yellow-700');
        }

        $removeButton.on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            resetForm();
        });

        // Drag & Drop Events
        $dropZone.on('dragover', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass('drag-over');
        });

        $dropZone.on('dragleave', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass('drag-over');
        });

        $dropZone.on('drop', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass('drag-over');

            const files = e.originalEvent.dataTransfer.files;
            if (files.length) {
                $fileInput.prop('files', files);
                handleFile(files[0]);
            }
        });

        $fileInput.on('change', function() {
            if (this.files.length) {
                handleFile(this.files[0]);
            }
        });
    });
</script>
@endpush

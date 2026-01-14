@extends('default')

@push('styles')
<style>
    /* Animasi Simpel agar munculnya halus */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.3s ease-out forwards;
    }
</style>
@endpush

@section('content')
@include ('components._breadcrumbLink')
<div class="flex flex-col justify-center max-w-7xl p-4 pt-20 mx-auto">
    @include('pages.form-penyewa._tablesPenyewa')
    <div class="pt-8 mb-16 space-y-6 form-detail drop-shadow-lg" id="form-detail-section" style="display: none;">
        <form action="" id="penyewa-form" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" name="id_user" id="input_id_user" value="">
            <div
                class="overflow-hidden bg-white border border-gray-200 shadow-xl rounded-3xl dark:border-gray-700 dark:bg-gray-800">
                {{-- ----------------------------------------------------------------------- --}}
                {{-- -- Header Card -- --}}
                {{-- ----------------------------------------------------------------------- --}}
                <div
                    class="flex flex-col items-start justify-between gap-4 px-6 py-5 border-b border-gray-100 md:flex-row md:items-center bg-gray-50/50 dark:bg-gray-700/30 dark:border-gray-700">
                    <div class="flex items-center gap-2">
                        <span class="p-2 text-yellow-600 bg-yellow-100 rounded-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </span>
                        <div class="flex flex-col">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">
                                Detail Data Penyewa
                            </span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Mode: <span id="mode-status"
                                    class="font-bold text-blue-400">Lihat Saja (Read-Only)</span></span>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------- --}}
                    {{-- -- Header Action-- --}}
                    {{-- ----------------------------------------------------------------------- --}}
                    <div class="flex items-center justify-between w-full gap-3 md:w-auto md:justify-end">
                        <!-- Tombol Toggle Edit -->
                        <button type="button" id="btn-toggle-edit" onclick="toggleEditMode()" disabled
                            class="flex items-center gap-2 px-4 py-2 text-sm font-bold text-gray-400 transition-all bg-gray-100 border border-gray-200 rounded-full cursor-not-allowed">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                </path>
                            </svg>
                            <span>Manajemen Kamar</span>
                        </button>
                        {{-- ----------------------------------------------------------------------- --}}
                        {{-- -- Button Close Form-- --}}
                        {{-- ----------------------------------------------------------------------- --}}
                        <button type="button" onclick="closeFormDetail()"
                            class="p-2 text-gray-400 transition-colors bg-white border border-gray-200 rounded-full hover:bg-red-50 hover:text-red-500 hover:border-red-200 dark:bg-gray-800 dark:border-gray-600 dark:hover:bg-gray-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-6 md:p-8">
                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                        {{-- ----------------------------------------------------------------------- --}}
                        {{-- -- KTP -- --}}
                        {{-- ----------------------------------------------------------------------- --}}
                        <div class="space-y-2">
                            <label class="text-xs font-bold tracking-wide text-gray-400 uppercase">Dokumen KTP</label>
                            <div
                                class="relative h-48 overflow-hidden bg-gray-100 border-2 border-gray-300 border-dashed dark:bg-gray-900 rounded-2xl dark:border-gray-600 group">
                                <img id="ktp-preview" src="{{ asset('img_handler/error_img_handler/no_image.png') }}"
                                    class="object-contain w-full h-full p-2" alt="KTP">
                                {{-- ----------------------------------------------------------------------- --}}
                                {{-- -- Trigger Modal-- --}}
                                {{-- ----------------------------------------------------------------------- --}}
                                <div onclick="openImageModal('ktp')"
                                    class="absolute inset-0 flex items-center justify-center transition-opacity opacity-0 cursor-pointer bg-black/50 group-hover:opacity-100">
                                    <span
                                        class="px-4 py-3 text-xs font-bold text-white transition-transform bg-gray-900 border border-gray-600 rounded-full shadow-lg hover:scale-105">
                                        Lihat & Download
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- ----------------------------------------------------------------------- --}}
                        {{-- -- Bukti Pembayaran-- --}}
                        {{-- ----------------------------------------------------------------------- --}}
                        <div class="space-y-2">
                            <label class="text-xs font-bold tracking-wide text-gray-400 uppercase">Bukti
                                Pembayaran</label>
                            <div
                                class="relative h-48 overflow-hidden bg-gray-100 border-2 border-gray-300 border-dashed dark:bg-gray-900 rounded-2xl dark:border-gray-600 group">
                                <img id="payment-preview"
                                    src="{{ asset('img_handler/error_img_handler/no_image.png') }}"
                                    class="object-contain w-full h-full p-2" alt="Bukti">
                                {{-- ----------------------------------------------------------------------- --}}
                                {{-- -- Trigger Modal-- --}}
                                {{-- ----------------------------------------------------------------------- --}}
                                <div onclick="openImageModal('payment')"
                                    class="absolute inset-0 flex items-center justify-center transition-opacity opacity-0 cursor-pointer bg-black/50 group-hover:opacity-100">
                                    <span
                                        class="px-4 py-3 text-xs font-bold text-white transition-transform bg-gray-900 border border-gray-600 rounded-full shadow-lg hover:scale-105">
                                        Lihat & Download
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------- --}}
                    {{-- -- FORM INPUT PENYEWA KAMAR (Disabled by Default)-- --}}
                    {{-- ----------------------------------------------------------------------- --}}
                    @include('pages.form-penyewa.partials._fieldsetForm')
                </div>
            </div>
        </form>
    </div>
</div>

{{---- ========================================================= ----}}
{{---- MODAL GAMBAR & DOWNLOAD (Static Backdrop) ----}}
{{---- ========================================================= ----}}
<div id="image-modal-download" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
    class="hidden fixed inset-0 z-[99] flex items-center justify-center w-full h-full bg-gray-900/90 backdrop-blur-sm transition-opacity duration-300">

    <div class="relative w-full max-w-4xl max-h-[90vh] p-4">
        {{---- ========================================================= ----}}
        {{---- MODAL KONTEN ----}}
        {{---- ========================================================= ----}}
        <div class="relative flex flex-col items-center bg-transparent">
            <div
                class="relative overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-2xl dark:bg-gray-800 dark:border-gray-700">
                <div class="absolute z-10 top-4 right-4">
                    <button type="button" onclick="closeImageModal()"
                        class="p-2 text-gray-400 transition-colors rounded-full shadow-sm bg-white/80 hover:bg-red-50 hover:text-red-500 focus:outline-none dark:bg-gray-700/80 dark:hover:bg-gray-100 dark:text-gray-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-1 bg-gray-50 dark:bg-gray-900 flex flex-col items-center justify-center min-h-[300px] ">
                    <div
                        class="w-full px-6 py-4 text-center bg-white border-b border-gray-100 dark:border-gray-700 dark:bg-gray-800 rounded-t-xl">
                        <h3 class="font-bold text-gray-800 text-md md:text-lg dark:text-white">
                            Berkas Pendukung Penyewa Kos</h3>
                    </div>
                    <div
                        class="relative w-full p-6 flex justify-center bg-[url('https://www.transparenttextures.com/patterns/grid-noise.png')] bg-gray-100 dark:bg-gray-900/50">
                        <img id="modal-img-full" src="" alt="Preview"
                            src="{{ asset('img_handler/error_img_handler/main_error_foto_ktp_el.jpg') }}"
                            class="max-w-full max-h-[30vh] h-auto object-contain rounded-xl shadow-lg border-4 border-white dark:border-gray-700 hover:scale-[1.02] transition-transform duration-300 image-ktp">
                    </div>
                </div>
                <div
                    class="flex justify-end px-6 py-4 bg-white border-t border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                    <a id="btn-download-action" href="#" download="Dokumen_YellowKost"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 transition-colors bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4">
                            </path>
                        </svg>
                        Download Gambar Ini
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')

<script>
    // Button Spinner Loading
    $(document).ready(function() {
    // Definisi Elemen
    const $form = $('#penyewa-form');
    const $btnSubmit = $('#btn-submit-penyewa');
    const $textNormal = $('#btn-text-normal');
    const $textLoading = $('#btn-text-loading');
    if ($form.length > 0) {
        $form.on('submit', function(e) {
            if (!this.checkValidity()) {
                return;
            }
            $btnSubmit.prop('disabled', true);
            $textNormal.addClass('hidden');
            $textLoading.removeClass('hidden').addClass('flex');
        });
    }
});
</script>

<script>
    $(document).ready(function() {
        $('.form-detail').hide();
    });

    $('.edit').on('click', function() {
        const href = $(this).data('href');
        const id_user = $(this).data('id_user');
        const ktp = $(this).data('ktp');
        const payment_proof = $(this).data('payment_proof');
        const name = $(this).data('name');
        const nik = $(this).data('nik');
        const address = $(this).data('address');
        const phone = $(this).data('phone');
        const parent_phone = $(this).data('parent_phone');
        const check_in = $(this).data('check_in');

        const ktpUrl = $(this).data('ktp');
        const btPembayaranUrl =$(this).data('bukti-pembayaran')

        $('#penyewa-form').attr('action', href);
        $('.image-ktp').attr('src', ktpUrl);
        $('.image-payment_proof').attr('src', payment_proof);
        $('input[name="id_user"]').val(id_user);
        $('input[name="tenant"]').val(name);
        $('input[name="nik"]').val(nik);
        $('input[name="address"]').val(address);
        $('input[name="phone"]').val(phone);
        $('input[name="parent_phone"]').val(parent_phone);
        $('input[name="check_in"]').val(check_in);

        $('.form-detail').show();
        $('html, body').animate({
            scrollTop: $(".form-detail").offset().top
        }, 500);

        $('#btn-download-ktp')
        .attr('href', ktpUrl)
        .attr('download', `KTP-${name}.jpg`);

        $('#bt-pembayaran')
        .attr('href', btPembayaranUrl)
        .attr('download', `bukti-pembayaran-${name}.jpg`);
    });

    $('.edit-field').on('click', function() {
        const inputField = $(this).siblings('input, select');
        inputField.prop('disabled', false);
        inputField.focus();
    });
</script>
<script>
    let isEditMode = false;
    let currentKtpUrl = '';
    let currentPaymentUrl = '';

    // 1. LOGIKA BUKA TUTUP MODAL GAMBAR
    function openImageModal(type) {
        const modal = document.getElementById('image-modal-download');
        const img = document.getElementById('modal-img-full');
        const btnDownload = document.getElementById('btn-download-action');

        let targetUrl = (type === 'ktp') ? currentKtpUrl : currentPaymentUrl;
        let fileName = (type === 'ktp') ? 'KTP_Penyewa.jpg' : 'Bukti_Bayar.jpg';

        // Validasi jika gambar kosong/error
        if(!targetUrl || targetUrl == "#" || targetUrl.includes('No+Image') || targetUrl == "") {
            alert("Gambar tidak tersedia atau belum diupload.");
            return;
        }

        img.src = targetUrl;
        btnDownload.href = targetUrl;
        btnDownload.setAttribute('download', fileName);

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Stop scroll belakang
    }

    function closeImageModal() {
        const modal = document.getElementById('image-modal-download');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto'; // Enable scroll
    }

    function closeFormDetail() {
        $('#form-detail-section').slideUp();
        resetFormState();
    }

    // 2. FUNGSI KLIK TOMBOL EDIT DI TABEL
    // (Mengisi data ke form)
    $(document).on('click', '.edit', function() {
        resetFormState(); // Pastikan bersih dan terkunci dulu

        const data = $(this).data();

        // Update Form Action
        $('#penyewa-form').attr('action', data.href);

        // Simpan URL Gambar ke Variable Global
        currentKtpUrl = data.ktp;
        // Gunakan placeholder jika bukti pembayaran kosong
        currentPaymentUrl = data.bukti_pembayaran ? data.bukti_pembayaran : 'img_handler/error_img_handler/no_image.png';

        // Update Preview Kecil di Form
        $('#ktp-preview').attr('src', currentKtpUrl);
        $('#payment-preview').attr('src', currentPaymentUrl);

        // Isi Input
        $('#input_id_user').val(data.id_user);
        $('#input_tenant').val(data.name);
        $('#input_nik').val(data.nik);
        $('#input_phone').val(data.phone);
        $('#input_parent_phone').val(data.parent_phone);
        $('#input_check_in').val(data.check_in);

        // Isi Select (dengan jeda sedikit agar UI select ter-render)
        $('#input_id_room').val(data.id_room).change();
        $('#input_status').val(data.status).change();
        // Anda mungkin perlu menambahkan data-payment_status di tombol tabel jika ingin mengisi ini juga

        // Tampilkan Form
        $('#form-detail-section').slideDown();
        $('html, body').animate({ scrollTop: $("#form-detail-section").offset().top - 100 }, 500);

        // Aktifkan Tombol "Ubah Data" (karena data sudah dimuat)
        $('#btn-toggle-edit').prop('disabled', false)
            .removeClass('cursor-not-allowed text-gray-400 bg-gray-100 border-gray-200')
            .addClass('text-yellow-700 bg-yellow-50 border-yellow-300 cursor-pointer hover:bg-yellow-100');
    });

    // 3. LOGIKA TOGGLE EDIT MODE (READ ONLY <-> EDITABLE)
    function toggleEditMode() {
        const fieldset = document.getElementById('form-fieldset');
        const btnToggle = document.getElementById('btn-toggle-edit');
        const btnSave = document.getElementById('btn-save-container');
        const statusLabel = document.getElementById('mode-status');
        const inputs = document.querySelectorAll('#form-fieldset input, #form-fieldset select');

        if (!isEditMode) {
            // -> Masuk Mode Edit
            isEditMode = true;
            fieldset.disabled = false; // Buka kunci fieldset
            btnSave.classList.remove('hidden');

            // Style Input: HANYA ubah background jadi putih dan teks jadi hitam
            // Border kuning akan muncul otomatis karena class 'focus:border-yellow-500' di HTML
            inputs.forEach(el => {
                el.classList.remove('bg-gray-50', 'text-gray-500', 'cursor-not-allowed');
                el.classList.add('bg-white', 'text-gray-900');
            });

            // Ubah Status Label
            statusLabel.innerText = "Mode Edit";
            statusLabel.className = "font-bold text-yellow-400 animate-pulse";

            // Ubah tombol jadi "Batal"
            btnToggle.innerHTML = `<span class="font-bold text-red-600">Batal Edit</span>`;
            btnToggle.classList.remove('bg-yellow-50', 'border-yellow-300');
            btnToggle.classList.add('border-red-200', 'bg-red-50');

        } else {
            // -> Kembali ke Read Only (Reset)
            resetFormState();

            // Kembalikan style tombol Ubah Data agar tetap aktif
            $('#btn-toggle-edit').prop('disabled', false)
                .removeClass('cursor-not-allowed text-gray-400 bg-gray-100 border-gray-200')
                .addClass('text-yellow-700 bg-yellow-50 border-yellow-300 cursor-pointer');
        }
    }

    function resetFormState() {
        isEditMode = false;
        const fieldset = document.getElementById('form-fieldset');
        const btnSave = document.getElementById('btn-save-container');
        const btnToggle = document.getElementById('btn-toggle-edit');
        const statusLabel = document.getElementById('mode-status');
        const inputs = document.querySelectorAll('#form-fieldset input, #form-fieldset select');

        fieldset.disabled = true; // Kunci fieldset
        btnSave.classList.add('hidden');

        // Style Input kembali Abu-abu (Disabled)
        inputs.forEach(el => {
            el.classList.add('bg-gray-500', 'text-gray-500', 'cursor-not-allowed');
            el.classList.remove('bg-gray-500', 'text-gray-900');
            // Kita tidak perlu menghapus border kuning secara manual,
            // karena saat disabled browser otomatis mengabaikan state focus
        });

        statusLabel.innerText = "Lihat Saja (Read-Only)";
        statusLabel.className = "font-bold text-yellow-400";

        // Kembalikan Tombol Toggle ke default
        btnToggle.innerHTML = `
            <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
            <span class="text-yellow-700">Manajemen Kamar</span>
        `;
        btnToggle.classList.remove('border-red-200', 'bg-red-50');
    }
</script>
<script>
    window.onload = function() {
        // Cari elemen berdasarkan ID
        var selectElement = document.getElementById('input_payment_status', 'input_status');

        // Paksa reset ke index pertama (opsi "Pilih metode...")
        if (selectElement) {
            selectElement.selectedIndex = 0;
            // Atau bisa juga dengan mereset valuenya ke kosong
            // selectElement.value = "";
        }
    }
</script>

<script>
    {{--  function toggleRejectionReason(selectElement) {
        const rejectionContainer = document.getElementById('rejection-container');
        const rejectionInput = document.getElementById('input_rejection_note');

        if (selectElement.value === 'cancelled') {
            rejectionContainer.classList.remove('hidden');
            rejectionInput.setAttribute('required', 'required');
            setTimeout(() => rejectionInput.focus(), 100);
        } else {
            rejectionContainer.classList.add('hidden');
            rejectionInput.removeAttribute('required');
            rejectionInput.value = '';
        }
    }  --}}

    // Tambahan: Pastikan saat mode Edit dibuka, cek status awal (jika data lama statusnya rejected)
    // Panggil fungsi ini di dalam fungsi toggleEditMode() Anda yang sudah ada
    {{--  function checkInitialStatus() {
        const statusSelect = document.getElementById('input_status');
        toggleRejectionReason(statusSelect);
    }  --}}

</script>
@endpush
@endsection
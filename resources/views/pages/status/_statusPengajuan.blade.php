@extends('default')

@section('content')
@include('components._breadcrumbLink')
<div class="top max-w-7xl min-h-screen p-4 mx-auto text-gray-800  dark:text-gray-200">
    <!-- Header -->
    <div class="pt-20 mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Status <span class="text-yellow-500">Pengajuan
                Sewa</span></h1>
        <p class="mt-1 text-gray-500 dark:text-gray-400">Pantau proses verifikasi dan riwayat pemesanan kamar Anda.</p>
    </div>

    @if ($booking->isEmpty())
    {{-- ---------------------------------------------------------------------- --}}
    {{-- STATE KOSONG (Jika tidak ada pengajuan aktif) --}}
    {{-- ---------------------------------------------------------------------- --}}
    <div
        class="p-12 mb-12 text-center bg-white border-2 border-gray-300 border-dashed shadow-sm dark:bg-gray-800 rounded-3xl dark:border-gray-700">
        <svg class="w-12 h-12 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
        </svg>
        <h3 class="mt-2 text-sm font-semibold text-gray-900 dark:text-white">Tidak ada pengajuan aktif</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Anda belum melakukan pemesanan kamar baru-baru ini.
        </p>
        <div class="mt-6">
            <a href="{{ route('booking.form') }}"
                class="inline-flex items-center px-5 py-3 text-sm font-bold text-black transition-colors bg-yellow-400 shadow-sm rounded-xl hover:bg-yellow-500">
                <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                </svg>
                Sewa Kamar Baru
            </a>
        </div>
    </div>
    @else
    {{-- ---------------------------------------------------------------------- --}}
    {{-- SECTION 1: STATUS PENGAJUAN AKTIF --}}
    {{-- ---------------------------------------------------------------------- --}}
    <div
        class="status-card mb-12 overflow-hidden transition-all bg-white border border-gray-100 shadow-lg dark:bg-gray-800 rounded-3xl dark:border-gray-700 hover:shadow-xl">
        <!-- Header Card: ID & Status Badge -->
        <div
            class="flex flex-col items-start justify-between gap-4 px-6 py-5 border-b border-gray-100 badge-container bg-gray-50 dark:bg-gray-700/50 dark:border-gray-700 md:flex-row md:items-center">
            <div>
                <p class="text-xs tracking-wider text-gray-500 uppercase dark:text-gray-400">ID Pemesanan</p>
                <h3 id="id_booking" class="font-mono text-xl font-bold text-gray-900 dark:text-white">-</h3>
            </div>

        </div>
        {{-- ------------------------------------------------------------------ --}}
        {{-- Body Card --}}
        {{-- ------------------------------------------------------------------ --}}
        <div class="p-6 md:p-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

                <!-- Kolom Kiri: Detail Data -->
                <div class="description-container space-y-6 md:col-span-2">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <p class="mb-1 text-xs font-semibold text-gray-400 uppercase">Kamar Pilihan</p>
                            <p id="room_name" class="text-lg font-medium text-gray-900 dark:text-white">
                                -
                            </p>
                        </div>
                        <div>
                            <p class="mb-1 text-xs font-semibold text-gray-400 uppercase">Tanggal Masuk</p>
                            <p id="check_in" class="text-lg font-medium text-gray-900 dark:text-white">-
                            </p>
                        </div>
                        <div>
                            <p class="mb-1 text-xs font-semibold text-gray-400 uppercase">Total Biaya</p>
                            <p id="total_paid" class="text-lg font-medium text-gray-900 dark:text-white">Rp -
                            </p>
                        </div>
                        <div>
                            <p class="mb-1 text-xs font-semibold text-gray-400 uppercase">Tanggal Pengajuan</p>
                            <p id="created_at" class="text-lg font-medium text-gray-900 dark:text-white">
                                -
                            </p>
                        </div>
                    </div>

                </div>
                {{-- ------------------------------------------------------------------------ --}}
                {{-- Kolom Kanan: Status Visual --}}
                {{-- ------------------------------------------------------------------------ --}}
                <div
                    class="items-center justify-center hidden p-6 border border-gray-100 md:flex bg-gray-50 dark:bg-gray-700/30 rounded-2xl dark:border-gray-700">
                    <div class="visual-container text-center">
                        <div class="pb-6">
                            <span
                                class="p-3 px-4 font-bold border border-gray-100 rounded-full dark:bg-gray-700/80 dark:border-gray-700">Status
                                Pengajuan Anda</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- ---------------------------------------------------------------------- --}}
    {{-- SECTION 2: RIWAYAT PENGAJUAN --}}
    {{-- ---------------------------------------------------------------------- --}}
    @include('pages.status._riwayatPengajuan')
</div>
@endsection

@push('scripts')
<script type="text/html" id="listBadge">
    <div>
        <!-- Logika Badge Status -->
        <span
            class="badge badge-pending inline-flex items-center px-4 py-2 text-sm font-bold text-yellow-700 bg-yellow-100 border border-yellow-200 rounded-full">
            <svg class="w-4 h-4 mr-2 animate-spin" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            Menunggu Verifikasi
        </span>
        <span
            class="badge badge-confirmed inline-flex items-center px-4 py-2 text-sm font-bold text-green-700 bg-green-100 border border-green-200 rounded-full">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Disetujui
        </span>
        <span
            class="badge badge-completed inline-flex items-center px-4 py-2 text-sm font-bold text-green-700 bg-green-100 border border-green-200 rounded-full">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Selesai
        </span>
        <span
            class="badge badge-cancelled inline-flex items-center px-4 py-2 text-sm font-bold text-red-700 bg-red-100 border border-red-200 rounded-full">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
            Ditolak / Batal
        </span>
        <div>
</script>
<script type="text/html" id="detailDescription">
    <div>
        <div
            class="description description-cancelled p-5 mt-6 border-l-4 border-red-500 bg-red-50 dark:bg-red-900/20 rounded-r-xl animate-fade-in">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <!-- Icon Warning -->
                    <svg class="w-6 h-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <div class="w-full ml-4">
                    <h3 class="text-lg font-bold text-red-800 dark:text-red-400">Pengajuan Ditolak</h3>
                    <div
                        class="p-3 mt-2 text-sm text-red-700 border border-red-100 rounded-lg dark:text-red-200 bg-white/60 dark:bg-black/20 dark:border-red-800/50">
                        <span class="block mb-1 font-semibold">Alasan dari Admin:</span>
                    </div>
                    <div class="mt-4">
                        <p class="mb-3 text-sm text-red-600 dark:text-red-300">
                            Silakan perbaiki data atau pilih kamar lain, lalu ajukan ulang.
                        </p>
                        <a href="{{ route('booking.form') }}"
                            class="inline-flex items-center px-5 py-2.5 bg-red-600 hover:bg-red-700 text-white text-sm font-bold rounded-xl shadow-lg shadow-red-500/30 transition-all transform active:scale-95 focus:ring-4 focus:ring-red-300">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                </path>
                            </svg>
                            Ajukan Ulang Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="description description-confirmed p-5 mt-6 border-l-4 border-green-500 bg-green-50 dark:bg-green-900/20 rounded-r-xl">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-green-700 dark:text-green-300">
                        Selamat! Pengajuan diterima. Silakan hubungi admin atau cek menu tagihan.
                    </p>
                </div>
            </div>
        </div>
        <div>
</script>
<script type="text/html" id="statusVisual">
    <div>
        <div class="visual visual-completed flex flex-col">
            <div
                class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-green-100 rounded-full dark:bg-green-900/30">
                <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h4 class="font-bold text-gray-900 dark:text-white">Selesai</h4>
        </div>
        <div class="visual visual-confirmed flex flex-col">
            <div
                class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-green-100 rounded-full dark:bg-green-900/30">
                <svg class="w-12 h-12 text-green-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 640">
                    <path
                        d="M144 224C161.7 224 176 238.3 176 256L176 512C176 529.7 161.7 544 144 544L96 544C78.3 544 64 529.7 64 512L64 256C64 238.3 78.3 224 96 224L144 224zM334.6 80C361.9 80 384 102.1 384 129.4L384 133.6C384 140.4 382.7 147.2 380.2 153.5L352 224L512 224C538.5 224 560 245.5 560 272C560 291.7 548.1 308.6 531.1 316C548.1 323.4 560 340.3 560 360C560 383.4 543.2 402.9 521 407.1C525.4 414.4 528 422.9 528 432C528 454.2 513 472.8 492.6 478.3C494.8 483.8 496 489.8 496 496C496 522.5 474.5 544 448 544L360.1 544C323.8 544 288.5 531.6 260.2 508.9L248 499.2C232.8 487.1 224 468.7 224 449.2L224 262.6C224 247.7 227.5 233 234.1 219.7L290.3 107.3C298.7 90.6 315.8 80 334.6 80z" />
                </svg>
            </div>
            <h4 class="font-bold text-gray-900 dark:text-white">Siap Huni</h4>
        </div>
        <div class="visual visual-cancelled flex flex-col">
            <div
                class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-red-100 rounded-full dark:bg-red-900/30">
                <svg class="w-12 h-12 text-red-500 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h4 class="font-bold text-gray-900 dark:text-white">Ditolak</h4>
        </div>
        <div class="visual visual-pending flex flex-col">
            <div
                class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-yellow-100 rounded-full dark:bg-yellow-900/30">
                <svg class="w-12 h-12 text-yellow-600 animate-spin" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M272 112C272 85.5 293.5 64 320 64C346.5 64 368 85.5 368 112C368 138.5 346.5 160 320 160C293.5 160 272 138.5 272 112zM272 528C272 501.5 293.5 480 320 480C346.5 480 368 501.5 368 528C368 554.5 346.5 576 320 576C293.5 576 272 554.5 272 528zM112 272C138.5 272 160 293.5 160 320C160 346.5 138.5 368 112 368C85.5 368 64 346.5 64 320C64 293.5 85.5 272 112 272zM480 320C480 293.5 501.5 272 528 272C554.5 272 576 293.5 576 320C576 346.5 554.5 368 528 368C501.5 368 480 346.5 480 320zM139 433.1C157.8 414.3 188.1 414.3 206.9 433.1C225.7 451.9 225.7 482.2 206.9 501C188.1 519.8 157.8 519.8 139 501C120.2 482.2 120.2 451.9 139 433.1zM139 139C157.8 120.2 188.1 120.2 206.9 139C225.7 157.8 225.7 188.1 206.9 206.9C188.1 225.7 157.8 225.7 139 206.9C120.2 188.1 120.2 157.8 139 139zM501 433.1C519.8 451.9 519.8 482.2 501 501C482.2 519.8 451.9 519.8 433.1 501C414.3 482.2 414.3 451.9 433.1 433.1C451.9 414.3 482.2 414.3 501 433.1z" />
                </svg>
            </div>
            <h4 class="font-bold text-gray-900 dark:text-white">Sedang Diproses</h4>
        </div>
    </div>
</script>
<script>
    let badgeContainer, badgePending, badgeConfirmed, badgeCancelled, badgeCompleted;
        let descriptionContainer, descriptionPending, descriptionConfirmed, descriptionCancelled, descriptionCompleted;
        let visualContainer, visualPending, visualConfirmed, visualCancelled, visualCompleted;

        function detailPengajuan(idBooking) {
            $.post("{{ route('booking.status.detail') }}", {
                id_booking: idBooking,
                _token: '{{ csrf_token() }}'
            }, function(response) {
                clearDetail();
                let room_name = '';

                if (response.status === 'pending') {

                    badgeContainer.append(badgePending);
                    descriptionContainer.append(descriptionPending);
                    visualContainer.append(visualPending);

                } else if (response.status === 'confirmed') {

                    badgeContainer.append(badgeConfirmed);
                    descriptionContainer.append(descriptionConfirmed);
                    visualContainer.append(visualConfirmed);

                } else if (response.status === 'cancelled') {

                    badgeContainer.append(badgeCancelled);
                    descriptionContainer.append(descriptionCancelled);
                    visualContainer.append(visualCancelled);

                } else if (response.status === 'completed') {

                    badgeContainer.append(badgeCompleted);
                    descriptionContainer.append(descriptionCompleted);
                    visualContainer.append(visualCompleted);

                }
                if (response.id_room === null) {
                    room_name = "-";
                } else {
                    room_name = response.room.room_name;
                }

                $('#id_booking').text(response.id + ' (07-2025-K-15)');
                $('#room_name').text(room_name);
                $('#check_in').text(formatDate(response.check_in));
                $('#total_paid').text(response.total_paid ?? '-');
                $('#created_at').text(formatDate(response.created_at));
            });
        }

        function clearDetail() {
            badgeContainer.find('.badge').remove();
            descriptionContainer.find('.description').remove();
            visualContainer.find('.visual').remove();

            $('[name="id_booking"]').text('-');
            $('#room_name').text('-');
            $('#check_in').text('-');
            $('#total_paid').text('-');
            $('#created_at').text('-');
        }

        $(document).ready(function() {
            const listBadgeHtml = $('#listBadge').html();
            const detailDescriptionHtml = $('#detailDescription').html();
            const statusVisualHtml = $('#statusVisual').html();

            const $listBadgeFragment = $('<div>').html(listBadgeHtml);
            const $detailDescriptionFragment = $('<div>').html(detailDescriptionHtml);
            const $statusVisualFragment = $('<div>').html(statusVisualHtml);

            badgeContainer = $('.badge-container');
            badgePending = $listBadgeFragment.find('.badge-pending').prop('outerHTML');
            badgeConfirmed = $listBadgeFragment.find('.badge-confirmed').prop('outerHTML');
            badgeCancelled = $listBadgeFragment.find('.badge-cancelled').prop('outerHTML');
            badgeCompleted = $listBadgeFragment.find('.badge-completed').prop('outerHTML');

            descriptionContainer = $('.description-container');
            descriptionPending = $detailDescriptionFragment.find('.description-pending').prop('outerHTML');
            descriptionConfirmed = $detailDescriptionFragment.find('.description-confirmed').prop('outerHTML');
            descriptionCancelled = $detailDescriptionFragment.find('.description-cancelled').prop('outerHTML');
            descriptionCompleted = $detailDescriptionFragment.find('.description-completed').prop('outerHTML');

            visualContainer = $('.visual-container');
            visualPending = $statusVisualFragment.find('.visual-pending').prop('outerHTML');
            visualConfirmed = $statusVisualFragment.find('.visual-confirmed').prop('outerHTML');
            visualCancelled = $statusVisualFragment.find('.visual-cancelled').prop('outerHTML');
            visualCompleted = $statusVisualFragment.find('.visual-completed').prop('outerHTML');

            $('[name="btnDetail"]:first').trigger('click');
        });

        $('[name="btnDetail"]').on('click', function() {
            const idBooking = $(this).data('id');
            detailPengajuan(idBooking);

            $('html, body').animate({
                scrollTop: $(".top").offset().top
            }, 0);
        });
</script>
@endpush

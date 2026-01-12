@extends('default')

@push('style')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
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
        <button id="pay-button">Bayar Sekarang</button>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        document.getElementById('pay-button').addEventListener('click', function () {
            fetch("{{ route('payment.checkout') }}")
                .then(response => response.json())
                .then(data => {
                    snap.pay(data.snap_token);
                });
        });
    </script>
@endpush
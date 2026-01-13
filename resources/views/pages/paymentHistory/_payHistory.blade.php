@extends('default')
@section('content')
@include('components._breadcrumbLink')
<div class="pt-20 mb-8 p-4">
    <h1 class="text-3xl font-bold text-gray-900">History <span class="text-yellow-500">Bukti Pembayaran</span></h1>
    <p class="mt-1 text-gray-500 dark:text-gray-600">Lihat history bukti pembayaran Anda.</p>
    <div class="pt-6">
        <div class="overflow-hidden bg-gray-100 drop-shadow-lg rounded-3xl dark:bg-gray-800">
            <div class="flex flex-col items-center justify-between gap-4 p-5 md:flex-row">
                {{-- Filter --}}
                <div class="flex flex-col w-full gap-3 sm:flex-row md:w-auto ">
                    <div class="relative w-full sm:w-auto">
                        <input type="date" id="date-filter" onchange="filterDate()"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-xl  block w-full sm:w-40 p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:text-white cursor-pointer focus:outline-none focus:ring-0 focus:border-yellow-600"
                            onclick="this.showPicker()">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-3 sm:flex-row md:w-auto">
                    <a href="{{ route('payment.history', ['type' => 'cetak history pembayaran']) }}" target="_blank"
                        class="group relative flex items-center justify-center px-5 py-2.5 text-sm font-bold text-lime-600 bg-lime-50 border border-lime-100 rounded-xl hover:bg-lime-900/50 hover:border-lime-900/50 dark:bg-lime-900/20 dark:text-lime-400 dark:border-lime-900/50 transition-all w-full sm:w-auto">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                        </svg>
                        Cetak History
                    </a>
                </div>
                {{-- End Filter --}}
            </div>
            <div class="relative overflow-x-auto">
                <table class="relative w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-bold">No.</th>
                            <th scope="col" class="px-6 py-4 font-bold whitespace-nowrap">
                                Nomor Kamar
                            </th>
                            <th scope="col" class="px-6 py-4 font-bold whitespace-nowrap">
                                Harga Sewa
                            </th>
                            <th scope="col" class="px-6 py-4 font-bold whitespace-nowrap">
                                Tanggal Pembayaran
                            </th>
                            <th scope="col" class="px-6 py-4 font-bold whitespace-nowrap">
                                Periode
                            </th>
                            <th scope="col" class="px-6 py-4 font-bold whitespace-nowrap">
                                Metode Pembayaran
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($history as $row)
                        <tr
                            class="text-white transition-all duration-300 ease-in-out bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 hover:text-gray-300">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}.
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->booking->room->room_name }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="font-bold">Rp</span>
                                    {{ number_format($row->amount, 0, ',', '.') }}
                                </div>
                            </td>
                            <td class="px-6 py-4 ">
                                {{ $row->date->format('d-m-Y') }}
                            </td>
                            <td class="px-6 py-4 ">
                                {{ $row->period }}
                            </td>
                            <td class="px-6 py-4 ">
                                {{ $row->payMethod->name }}
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            {{-- PAGINATION --}}
            @include('partials._pagination', ['data' => $history])
            {{-- PAGINATION --}}
        </div>
    </div>
</div>

@endsection

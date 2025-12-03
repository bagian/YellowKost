<div class="flex flex-col justify-center max-w-5xl pt-20 mx-auto ">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900 dark:text-text-gray-900">Manajemen <span
                    class="text-yellow-500">Kamar</span></h1>
            <p class="text-gray-500 dark:text-gray-400 mt-1">Pantau status kamar, harga sewa, dan foto kamar.</p>
        </div>
        <a href="{{ route('kamar.create') }}" class="group">
            <button type="button"
                class="flex items-center gap-2 text-gray-900 bg-yellow-400 hover:bg-yellow-500  font-bold rounded-xl text-sm px-6 py-3 transition-all duration-300 shadow-md hover:shadow-lg transform active:scale-95 ">
                <svg class="w-5 h-5 transition-transform group-hover:rotate-90" fill="currentColor"
                    viewBox="0 0 640 640">
                    <path
                        d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z" />
                </svg>
                <span>Tambahkan Data</span>
            </button>
        </a>
    </div>
    {{-- TABLE COMPONENT --}}
    <div class="rounded-3xl bg-gray-100 shadow-lg dark:bg-gray-800 overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-4 p-5">
            {{-- Filter --}}
            <div class="relative w-full md:w-1/3">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-white dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-0 focus:border-yellow-600"
                    placeholder="Cari Nomor Kamar/Tanggal..." onkeyup="searchTable()">
            </div>
            {{-- End Filter --}}
            <div class="flex flex-col sm:flex-row w-full md:w-auto gap-3">
                <div class="relative w-full sm:w-auto">
                    <input type="date" id="date-filter" onchange="filterDate()"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-xl  block w-full sm:w-40 p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:text-white cursor-pointer focus:outline-none focus:ring-0 focus:border-yellow-600"
                        onclick="this.showPicker()">
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto">
            <table class="relative w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-bold">No.</th>
                        <th scope="col" class="px-6 py-4 font-bold whitespace-nowrap">
                            Nomor Kamar
                            {{-- <a href="#">
                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a> --}}
                        </th>
                        <th scope="col" class="px-6 py-4 font-bold">
                            Harga Sewa
                        </th>
                        <th scope="col" class="px-6 py-4 font-bold">
                            Periode Sewa
                        </th>
                        <th scope="col" class="px-6 py-4 font-bold whitespace-nowrap">
                            Penghuni Kamar
                        </th>
                        <th scope="col" class="px-6 py-4 font-bold">
                            Tanggal Masuk
                        </th>
                        <th scope="col" class="px-6 py-4 font-bold">
                            Foto Kamar
                        </th>
                        <th scope="col" class="px-6 py-4 font-bold">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($room as $row)
                    <tr
                        class="text-white transition-all duration-300 ease-in-out bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 hover:text-gray-300">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}.
                        </td>
                        <td class="px-6 py-4">
                            {{ $row->room_name }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="font-bold">Rp</span>
                                {{ number_format($row->price, 0, ',', '.') }}
                            </div>
                        </td>
                        <td class="px-6 py-4 ">
                            {{ $row->period }}
                        </td>
                        <td class="px-6 py-4">
                            @if($row->is_available)
                            <div class="text-md">
                                Kosong
                            </div>
                            @else
                            <button data-modal-target="userView-payment" data-modal-toggle="userView-payment"
                                class="bg-blue-600/30 border border-blue-700 hover:bg-blue-800 hover:text-white transition-colors duration-300 p-2 px-4 rounded-full text-xs whitespace-nowrap text-center flex flex-row items-center justify-content-center gap-2">
                                <span class="text-white">
                                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M192 96L224 96C241.7 96 256 110.3 256 128L256 160L160 160L160 128C160 110.3 174.3 96 192 96zM256 192L256 512C256 529.7 241.7 544 224 544L96 544C78.3 544 64 529.7 64 512L64 452.9C64 418.3 73.4 384.3 91.2 354.6C104.9 331.8 113.7 306.4 117 280L124.5 220C126.5 204 140.1 192 156.3 192L256.1 192zM483.8 192C499.9 192 513.6 204 515.6 220L523 280C526.3 306.4 535.1 331.8 548.8 354.6C566.6 384.3 576 418.3 576 452.9L576 512C576 529.7 561.7 544 544 544L416 544C398.3 544 384 529.7 384 512L384 192L483.8 192zM384 128C384 110.3 398.3 96 416 96L448 96C465.7 96 480 110.3 480 128L480 160L384 160L384 128zM352 192L352 352L288 352L288 192L352 192z" />
                                    </svg>
                                </span>
                                <span>
                                    {{ $row->confirmedBooking->first()->user->full_name}}
                                </span>
                            </button>
                            @endif
                            {{-- MODAL --}}
                            <div id="userView-payment" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full bg-gray-900/60 backdrop-blur-sm">
                                <div class="relative w-full max-w-2xl max-h-full p-4">
                                    <!-- Modal Content -->
                                    <div
                                        class="relative bg-white rounded-2xl shadow-2xl dark:bg-gray-800 border border-gray-100 dark:border-gray-700 transform transition-all">
                                        <!-- Modal Header -->
                                        <div
                                            class="flex items-center justify-between p-4 border-b border-gray-100 dark:border-gray-700 rounded-t-2xl bg-gray-50 dark:bg-gray-800">
                                            <h3
                                                class="text-md font-bold text-gray-900 dark:text-white flex items-center gap-2">
                                                <span
                                                    class="p-2 bg-green-100 text-green-600 rounded-lg dark:bg-green-900/30">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                NAMA TAMPIL SINI
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                                data-modal-hide="userView-payment">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="space-y-5 p-5">
                                            <table
                                                class="relative w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                                                <thead
                                                    class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-4 font-bold">Tanggal Pembayaran
                                                        </th>
                                                        <th scope="col" class="px-6 py-4 font-bold">Periode Pembayaran
                                                        </th>
                                                        <th scope="col" class="px-6 py-4 font-bold">Total Pembayaran
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr
                                                        class="text-white transition-all duration-300 ease-in-out bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 hover:text-gray-300">
                                                        <td class="px-6 py-4">
                                                            Tanggal Pembayaran
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            Periode Pembayaran
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            Total Pembayaran
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            {{-- PAGINATION --}}
                                            <div
                                                class="flex flex-col md:flex-row items-center justify-between py-5 border-t border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800">
                                                @if ($room->hasPages() || $room->total() > 0)
                                                <span
                                                    class="block mb-4 text-sm text-gray-700 dark:text-gray-400 md:mb-0">
                                                    Menampilkan <span class="mx-1 font-semibold text-white">{{
                                                        $room->firstItem() ?? 0 }}</span> sampai
                                                    <span class="mx-1 font-semibold text-white">{{ $room->lastItem() ??
                                                        0 }}</span> dari total <span
                                                        class="mx-1 font-semibold text-white">{{ $room->total()
                                                        }}</span>
                                                    Barisan
                                                </span>
                                                @endif
                                                <div class="inline-flex">
                                                    {{-- TOMBOL PREVIOUS --}}
                                                    @if ($room->onFirstPage())
                                                    <span
                                                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                                                        Prev
                                                    </span>
                                                    @else
                                                    <a href="{{ $room->previousPageUrl() }}"
                                                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white shadow-sm">
                                                        Prev
                                                    </a>
                                                    @endif
                                                    {{-- TOMBOL NEXT --}}
                                                    @if ($room->hasMorePages())
                                                    <a href="{{ $room->nextPageUrl() }}"
                                                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-t border-b border-r border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white shadow-sm">
                                                        Next
                                                    </a>
                                                    @else
                                                    <span
                                                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border-t border-b border-r border-gray-300 rounded-r-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                                                        Next
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            {{-- END PAGINATION --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 ">
                            Tanggal Masuk
                        </td>
                        <td class="px-6 py-4">
                            <!-- Modal toggle -->
                            <button data-modal-target="default-modal-{{ $row->id }}"
                                data-modal-toggle="default-modal-{{ $row->id }}"
                                class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-0 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-xs xl:text-normal px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-900 flex gap-2 items-center transition-all duration-300 ease-in-out dark:hover:focus:ring-gray-200 border border-1 border-gray-300 whitespace-nowrap"
                                type="button">
                                <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640">
                                    <path
                                        d="M320 96C239.2 96 174.5 132.8 127.4 176.6C80.6 220.1 49.3 272 34.4 307.7C31.1 315.6 31.1 324.4 34.4 332.3C49.3 368 80.6 420 127.4 463.4C174.5 507.1 239.2 544 320 544C400.8 544 465.5 507.2 512.6 463.4C559.4 419.9 590.7 368 605.6 332.3C608.9 324.4 608.9 315.6 605.6 307.7C590.7 272 559.4 220 512.6 176.6C465.5 132.9 400.8 96 320 96zM176 320C176 240.5 240.5 176 320 176C399.5 176 464 240.5 464 320C464 399.5 399.5 464 320 464C240.5 464 176 399.5 176 320zM320 256C320 291.3 291.3 320 256 320C244.5 320 233.7 317 224.3 311.6C223.3 322.5 224.2 333.7 227.2 344.8C240.9 396 293.6 426.4 344.8 412.7C396 399 426.4 346.3 412.7 295.1C400.5 249.4 357.2 220.3 311.6 224.3C316.9 233.6 320 244.4 320 256z" />
                                </svg>
                                Lihat Foto Kamar
                            </button>
                            <!-- Main modal -->
                            <div id="default-modal-{{ $row->id }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm"
                                data-modal-backdrop="static">
                                <div class="relative w-full max-w-4xl max-h-full p-4">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-3xl shadow-sm dark:bg-gray-800">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 border-b border-gray-200 rounded-t md:p-5 dark:border-gray-600">
                                            <span class="text-md md:text-xl">Foto Kamar</span>
                                            <button type="button"
                                                class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-3xl hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="default-modal-{{ $row->id }}">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="space-y-4 md:p-5 swiper-container-{{ $row->id }} p-4">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    @foreach($row->pictures as $picture)
                                                    <div
                                                        class="rounded-xl h-80 swiper-slide relative w-full p-2 flex justify-center bg-[url('https://www.transparenttextures.com/patterns/grid-noise.png')]">
                                                        <img src="{{ Storage::url($picture->url) }}"
                                                            alt="{{ $picture->name }}"
                                                            class="object-cover w-full h-96 rounded-xl">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <!-- Tombol Navigasi Swiper -->
                                                <div
                                                    class="swiper-button-prev dash-button-prev important border border-white/20 bg-white/10 backdrop-blur-lg drop-shadow-4xl shadow-xl p-8 rounded-full swiper-button-prev-{{ $row->id }} md:ml-6">

                                                </div>
                                                <div
                                                    class="swiper-button-next dash-button-next important border border-white/20 bg-white/10 backdrop-blur-lg drop-shadow-4xl shadow-xl p-8 rounded-full swiper-button-next-{{ $row->id }} md:mr-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <!-- Modal toggle -->
                                <a href="{{ route('kamar.show', $row->id) }}"
                                    class="p-2 text-yellow-600 bg-yellow-50 rounded-3xl hover:bg-yellow-100 border border-yellow-200 transition-all shadow-sm edit">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M100.4 417.2C104.5 402.6 112.2 389.3 123 378.5L304.2 197.3L338.1 163.4C354.7 180 389.4 214.7 442.1 267.4L476 301.3L442.1 335.2L260.9 516.4C250.2 527.1 236.8 534.9 222.2 539L94.4 574.6C86.1 576.9 77.1 574.6 71 568.4C64.9 562.2 62.6 553.3 64.9 545L100.4 417.2zM156 413.5C151.6 418.2 148.4 423.9 146.7 430.1L122.6 517L209.5 492.9C215.9 491.1 221.7 487.8 226.5 483.2L155.9 413.5zM510 267.4C493.4 250.8 458.7 216.1 406 163.4L372 129.5C398.5 103 413.4 88.1 416.9 84.6C430.4 71 448.8 63.4 468 63.4C487.2 63.4 505.6 71 519.1 84.6L554.8 120.3C568.4 133.9 576 152.3 576 171.4C576 190.5 568.4 209 554.8 222.5C551.3 226 536.4 240.9 509.9 267.4z" />
                                    </svg>
                                </a>
                                <button type="button" name="delete" data-href="{{ route('kamar.destroy' , $row->id) }}"
                                    data-name="Kamar {{ $row->room_name }}"
                                    class="p-2 text-red-600 bg-red-50 rounded-3xl hover:bg-red-100 border border-red-200 transition-all shadow-sm ">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M232.7 69.9L224 96L128 96C110.3 96 96 110.3 96 128C96 145.7 110.3 160 128 160L512 160C529.7 160 544 145.7 544 128C544 110.3 529.7 96 512 96L416 96L407.3 69.9C402.9 56.8 390.7 48 376.9 48L263.1 48C249.3 48 237.1 56.8 232.7 69.9zM512 208L128 208L149.1 531.1C150.7 556.4 171.7 576 197 576L443 576C468.3 576 489.3 556.4 490.9 531.1L512 208z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        {{-- PAGINATION --}}
        <div
            class="flex flex-col md:flex-row items-center justify-between p-5 border-t border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800">
            @if ($room->hasPages() || $room->total() > 0)
            <span class="block mb-4 text-sm text-gray-700 dark:text-gray-400 md:mb-0">
                Menampilkan <span class="mx-1 font-semibold text-white">{{ $room->firstItem() ?? 0 }}</span> sampai
                <span class="mx-1 font-semibold text-white">{{ $room->lastItem() ?? 0 }}</span> dari total <span
                    class="mx-1 font-semibold text-white">{{ $room->total() }}</span>
                Barisan
            </span>
            @endif
            <div class="inline-flex">
                {{-- TOMBOL PREVIOUS --}}
                @if ($room->onFirstPage())
                <span
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                    Prev
                </span>
                @else
                <a href="{{ $room->previousPageUrl() }}"
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white shadow-sm">
                    Prev
                </a>
                @endif
                {{-- TOMBOL NEXT --}}
                @if ($room->hasMorePages())
                <a href="{{ $room->nextPageUrl() }}"
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-t border-b border-r border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white shadow-sm">
                    Next
                </a>
                @else
                <span
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border-t border-b border-r border-gray-300 rounded-r-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                    Next
                </span>
                @endif
            </div>
        </div>
        {{-- END PAGINATION --}}
    </div>
    {{-- PAGINATION --}}
    {{-- <div class="flex flex-col items-start justify-between md:flex-row pb-14 md:items-end">
        @if ($room->hasPages() || $room->total() > 0)
        <span class="block mb-4 text-sm text-gray-700 dark:text-gray-400 md:mb-0">
            Menampilkan <span class="mx-1 font-semibold text-gray-900">{{ $room->firstItem() ?? 0 }}</span> sampai <span
                class="mx-1 font-semibold text-gray-900">{{ $room->lastItem() ?? 0 }}</span> dari total <span
                class="mx-1 font-semibold text-gray-900">{{ $room->total() }}</span>
            Barisan
        </span>
        @endif
        @if ($room->hasPages())
        <nav aria-label="Page navigation example">
            <ul class="flex items-center h-8 -space-x-px text-sm">
                <li>
                    <a href="{{ $room->previousPageUrl() }}"
                        class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 ms-0 border-e-0 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                    </a>
                </li>

                @php($active = "text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700
                dark:border-gray-700 dark:bg-gray-700 dark:text-white z-10")
                @php($inactive = "text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700
                dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white")

                @for($i = 1; $i <= $room->lastPage(); $i++)
                    <li>
                        <a href="{{ $room->url($i) }}"
                            class="flex items-center justify-center h-8 px-3 leading-tight @if($i === $room->currentPage()) {{ $active }} @else {{ $inactive }} @endif">{{
                            $i }}</a>
                    </li>
                    @endfor

                    <li>
                        <a href="{{ $room->nextPageUrl() }}"
                            class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
            </ul>
        </nav>
        @endif
    </div> --}}
</div>

@push('scripts')
<script>
    function formatRupiah(input) {
        // Hapus karakter selain angka
        let value = input.value.replace(/[^0-9]/g, '');

        // Format ke rupiah
        if (value) {
            value = new Intl.NumberFormat('id-ID').format(value);
        }

        input.value = value;
    }
</script>
@endpush

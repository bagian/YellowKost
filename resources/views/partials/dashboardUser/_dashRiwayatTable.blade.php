<div
    class="border border-gray-200 rounded-2xl  bg-white dark:bg-gray-100 dark:border-gray-300 overflow-hidden shadow-lg">
    <div class="flex items-center justify-between p-6">
        <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
            <svg class="w-5 h-5 text-blue-500" fill="currentColor" stroke="" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <path
                    d="M256 141.3l0 309.3 .5-.2C311.1 427.7 369.7 416 428.8 416l19.2 0 0-320-19.2 0c-42.2 0-84.1 8.4-123.1 24.6-16.8 7-33.4 13.9-49.7 20.7zM230.9 61.5L256 72 281.1 61.5C327.9 42 378.1 32 428.8 32L464 32c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-35.2 0c-50.7 0-100.9 10-147.7 29.5l-12.8 5.3c-7.9 3.3-16.7 3.3-24.6 0l-12.8-5.3C184.1 490 133.9 480 83.2 480L48 480c-26.5 0-48-21.5-48-48L0 80C0 53.5 21.5 32 48 32l35.2 0c50.7 0 100.9 10 147.7 29.5z" />
            </svg>
            Riwayat Terakhir

        </h3>
        <a href="{{ route('payment.history') }}"
            class="group text-sm text-blue-600 hover:underline flex gap-2 items-center justify-center">

            Lihat History Pembayaran

            <svg class="w-3 h-3 transition-transform duration-300 group-hover:translate-x-1" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path
                    d="M566.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L466.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l434.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
            </svg>
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-500 dark:text-gray-100 w-full">
                <tr>
                    <th scope="col" class="px-4 py-3 rounded-l-lg">Tanggal</th>
                    <th scope="col" class="px-4 py-3">Nominal</th>
                    <th scope="col" class="px-4 py-3">Metode Pembayaran</th>
                    <th scope="col" class="px-4 py-3 rounded-r-lg text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="bg-white dark:bg-gray-300 border-b border-gray-500 hover:bg-gray-200 text-gray-900 transition duration-300 ease-in-out">
                    <td class="px-4 py-3 font-medium whitespace-nowrap">14 Jan
                        2024</td>
                    <td class="px-4 py-3 whitespace-nowrap">Rp 1.500.000</td>
                    <td class="px-4 py-3 whitespace-nowrap">Bank Transfer</td>
                    <td class="px-4 py-3 text-center whitespace-nowrap">
                        <span
                            class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Lunas</span>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
    {{-- PAGINATION --}}
    <div class="flex flex-col items-center justify-between py-5 border-t border-gray-200 md:flex-row p-4">
        <span class="flex mb-4 text-sm text-gray-700 md:mb-0 items-start justify-center">
            Menampilkan <span class="mx-1 font-semibold text-gray-900" id="pagination-firstItem">2</span>
            sampai
            <span class="mx-1 font-semibold text-gray-900" id="pagination-lastItem">1</span> dari total
            <span class="mx-1 font-semibold text-gray-900" id="pagination-total">1</span>
            Barisan
        </span>
        <div class="inline-flex" id="pagination-list">
            {{-- TOMBOL PREVIOUS --}}
            <span
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-500 dark:border-gray-600 dark:text-gray-100">
                Prev
            </span>
            <a href="#"
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-500 dark:border-gray-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                Prev
            </a>
            {{-- TOMBOL NEXT --}}
            <a href="#"
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-t border-b border-r border-gray-300 rounded-r-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-500 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                Next
            </a>
            <span
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border-t border-b border-r border-gray-300 rounded-r-lg cursor-not-allowed dark:bg-gray-500 dark:border-gray-600 dark:text-gray-100">
                Next
            </span>
        </div>
    </div>
    {{-- END PAGINATION --}}
</div>
    <div
        class="flex flex-col items-center justify-between p-5 border-t border-gray-200 md:flex-row dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800">
        @if($data->hasPages() || $data->total() > 0)
        <span class="mb-4 text-sm text-gray-500 dark:text-gray-400 md:mb-0">
            Menampilkan <span class="font-bold text-gray-900 dark:text-white">{{ $data->firstItem() ?? 0 }}</span>
            sampai <span class="font-bold text-gray-900 dark:text-white">{{ $data->lastItem() ?? 0 }}</span> dari
            <span class="font-bold text-gray-900 dark:text-white">{{ $data->total() }}</span> data
        </span>
        @endif
        <div class="inline-flex">
            {{-- ----------------------------- Tombol Prev ---------------------------- --}}
            @if ($data->onFirstPage())
            <span
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                Prev
            </span>
            @else
            <a href="{{ $data->previousPageUrl() }}"
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                Prev
            </a>
            @endif
            {{-- ---------------------------------------------------------------------- --}}

            {{-- ----------------------------- Tombol Next ---------------------------- --}}
            @if ($data->hasMorePages())
            <a href="{{ $data->nextPageUrl() }}"
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-t border-b border-r border-gray-300 rounded-r-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                Next
            </a>
            @else
            <span
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border-t border-b border-r border-gray-300 rounded-r-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                Next
            </span>
            @endif
            {{-- ---------------------------------------------------------------------- --}}
        </div>
    </div>

    {{-- <div class="flex flex-col items-start justify-between md:flex-row pb-14 md:items-end">
        @if ($data->hasPages() || $data->total() > 0)
        <span class="block mb-4 text-sm text-gray-700 dark:text-gray-400 md:mb-0">
            Menampilkan <span class="mx-1 font-semibold text-gray-900">{{ $data->firstItem() ?? 0 }}</span> sampai <span
                class="mx-1 font-semibold text-gray-900">{{ $data->lastItem() ?? 0 }}</span> dari total <span
                class="mx-1 font-semibold text-gray-900">{{ $data->total() }}</span>
            Barisan
        </span>
        @endif
        @if ($data->hasPages())
        <nav aria-label="Page navigation example">
            <ul class="flex items-center h-8 -space-x-px text-sm">
                <li>
                    <a href="{{ $data->previousPageUrl() }}"
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

                @for($i = 1; $i <= $data->lastPage(); $i++)
                    <li>
                        <a href="{{ $data->url($i) }}"
                            class="flex items-center justify-center h-8 px-3 leading-tight @if($i === $data->currentPage()) {{ $active }} @else {{ $inactive }} @endif">{{
                            $i }}</a>
                    </li>
                    @endfor

                    <li>
                        <a href="{{ $data->nextPageUrl() }}"
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

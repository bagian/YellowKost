<div class="ajax-paginated" id="testimonials-area">
    <div class="relative p-8 w-full bg-gray-50 dark:bg-gray-700">
        <div
            class="text-gray-700 dark:text-gray-300 pl-4 p-3 font-semibold absolute inset-y-0 left-0 flex items-center top-0">
            History Testimonial
        </div>
    </div>
    <div class="ajax-table transition-all duration-200 ease-out bg-gray-50 dark:bg-gray-700 overflow-x-auto">
        <table class="relative w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-900 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-4 font-bold">No.</th>
                <th scope="col" class="px-6 py-4 font-bold">
                    Nama
                </th>
                <th scope="col" class="px-6 py-4 font-bold">
                    Pekerjaan
                </th>
                <th scope="col" class="px-6 py-4 font-bold whitespace-nowrap">
                    Ratting
                </th>
                <th scope="col" class="px-6 py-4 font-bold">
                    Deskripsi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $row => $value)
            <tr
                class="text-white transition-all duration-300 ease-in-out bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 hover:text-gray-300">
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                    {{ $loop->iteration + ($testimonials->currentPage() - 1) * $testimonials->perPage() }}
                </td>
                <td class="px-6 py-4 max-w-xs w-40">
                    {{ $value->user->full_name }}
                </td>
                <td class="px-6 py-4">
                    {{ $value->user->occupation }}
                </td>
                <td class="px-6 py-4 ">
                    <div
                        class="text-yellow-500 bg-yellow-100/20 border border-yellow-100/20 inline-block px-2 py-1 rounded-full">
                        @for($i = 0; $i < 5; $i++)
                            @if($i < $value->rating)
                                ★
                            @else
                                ☆
                            @endif
                        @endfor
                    </div>
                </td>
                <td class="px-6 py-4 min-w-[300px]">
                    <p class="line-clamp-2 text-gray-600 dark:text-gray-300">
                        {{ $value->comment }}
                    </p>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    {{-- PAGINATION --}}
    @include('partials._pagination', ['data' => $testimonials])
    {{-- END PAGINATION --}}
</div>
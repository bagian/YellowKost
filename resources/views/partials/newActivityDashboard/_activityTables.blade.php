<div class="relative p-8 w-full bg-gray-50 dark:bg-gray-700">
    <div
        class="text-gray-700 dark:text-gray-300 pl-4 p-3 font-semibold absolute inset-y-0 left-0 flex items-center top-0">
        History Testimonial
    </div>
</div>
<div class="transition-all duration-200 ease-out bg-gray-50 dark:bg-gray-700 overflow-x-auto">
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
            <tr
                class="text-white transition-all duration-300 ease-in-out bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 hover:text-gray-300">
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                    1
                </td>
                <td class="px-6 py-4 max-w-xs w-40">
                    John Doe Yulianto Asep
                </td>
                <td class="px-6 py-4">
                    Web Developer
                </td>
                <td class="px-6 py-4 ">
                    <div
                        class="text-yellow-500 bg-yellow-100/20 border border-yellow-100/20 inline-block px-2 py-1 rounded-full">
                        ★★★★☆
                    </div>
                </td>
                <td class="px-6 py-4 min-w-[300px]">
                    <p class="line-clamp-2 text-gray-600 dark:text-gray-300">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat et facere iure
                        molestias porro dolorem deleniti accusantium ab voluptatem? Obcaecati non
                        voluptas
                        deleneiti numquam dicta soluta error? Voluptatum, ad veritatis!
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- ------------------------------------- --}}
{{-- PAGINATION --}}
{{-- ------------------------------------- --}}
<div
    class="flex flex-col items-center justify-between py-5 border-t border-gray-200 md:flex-row dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800 p-4">
    <span class="block mb-4 text-sm text-gray-700 dark:text-gray-400 md:mb-0">
        Menampilkan <span class="mx-1 font-semibold text-white" id="pagination-firstItem"></span>
        sampai
        <span class="mx-1 font-semibold text-white" id="pagination-lastItem"></span> dari total
        <span class="mx-1 font-semibold text-white" id="pagination-total"></span>
        Barisan
    </span>
    <div class="inline-flex" id="pagination-list">
        {{-- TOMBOL PREVIOUS --}}
        <span
            class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
            Prev
        </span>
        <a href="#"
            class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
            Prev
        </a>
        {{-- TOMBOL NEXT --}}
        <a href="#"
            class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-t border-b border-r border-gray-300 rounded-r-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
            Next
        </a>
        <span
            class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border-t border-b border-r border-gray-300 rounded-r-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
            Next
        </span>
    </div>
</div>
{{-- END PAGINATION --}}

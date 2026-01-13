<div class="mt-12">
    <div
        class="overflow-x-auto bg-white border border-gray-200 shadow-sm dark:bg-gray-800 rounded-2xl dark:border-gray-700">
        <!-- Header -->
        <div class="p-6">
            <div class="flex items-center gap-3">
                <svg class="w-6 h-6 text-gray-900 dark:text-white" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h1 class="text-xl font-bold text-gray-900 dark:text-white">Riwayat <span class="text-yellow-500">
                        Pengajuan</span>
                </h1>
            </div>
            <p class="mt-1 text-gray-500 dark:text-gray-400">Lihat semua riwayat pengajuan sewa kamar.</p>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs text-gray-700 uppercase border-b bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-4">ID Booking</th>
                    <th scope="col" class="px-6 py-4">Tanggal</th>
                    <th scope="col" class="px-6 py-4">Kamar</th>
                    <th scope="col" class="px-6 py-4 text-center">Status</th>
                    <th scope="col" class="px-6 py-4">Catatan</th>
                    <th scope="col" class="px-6 py-4">Detail</th>
                </tr>
            </thead>
            <tbody>
                @if ($booking->isEmpty())
                <tr>
                    <td colspan="5" class="px-6 py-10 text-center text-gray-400 dark:text-gray-500">
                        Belum ada riwayat pengajuan sebelumnya.
                    </td>
                </tr>
                @else
                @foreach ($booking as $row)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors align-top">
                    <td class="px-6 py-4 font-mono font-medium text-gray-900 dark:text-white">
                        {{ $row->id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->created_at->format('d M Y') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->room->room_name ?? "-" }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        @if ($row->status == 'confirmed')
                        <div
                            class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1.5  dark:bg-green-900 dark:text-green-300 border border-green-200 dark:border-green-900 rounded-full max-w-max mx-auto">
                            <span class="flex items-center gap-1">
                                <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640">
                                    <path
                                        d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM450.7 372.9C462.6 369.2 474.6 379.2 470.3 391C447.9 452.3 389 496.1 320 496.1C251 496.1 192.1 452.2 169.7 390.9C165.4 379.1 177.4 369.1 189.3 372.8C228.5 385 273 391.9 320 391.9C367 391.9 411.5 385 450.7 372.8zM272 256C272 291.3 257.7 320 240 320C222.3 320 208 291.3 208 256C208 220.7 222.3 192 240 192C257.7 192 272 220.7 272 256zM400 320C382.3 320 368 291.3 368 256C368 220.7 382.3 192 400 192C417.7 192 432 220.7 432 256C432 291.3 417.7 320 400 320z" />
                                </svg>
                                <span class="block">
                                    Diterima
                                </span>
                            </span>
                        </div>
                        @elseif($row->status == 'completed')
                        <div
                            class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1.5  dark:bg-green-900 dark:text-green-300 border border-green-200 dark:border-green-900 rounded-full max-w-max mx-auto">
                            <span class="flex items-center gap-1">
                                <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640">
                                    <path
                                        d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                </svg>
                                <span>
                                    Selesai
                                </span>
                            </span>
                        </div>
                        @elseif($row->status == 'cancelled')
                        <div
                            class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-1.5  dark:bg-red-900 dark:text-red-300 border border-red-200 dark:border-red-900 rounded-full  max-w-max mx-auto">
                            <span class="flex items-center gap-1">
                                <svg class="w-5 h-5 animate-pulse" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path
                                        d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM231 231C240.4 221.6 255.6 221.6 264.9 231L319.9 286L374.9 231C384.3 221.6 399.5 221.6 408.8 231C418.1 240.4 418.2 255.6 408.8 264.9L353.8 319.9L408.8 374.9C418.2 384.3 418.2 399.5 408.8 408.8C399.4 418.1 384.2 418.2 374.9 408.8L319.9 353.8L264.9 408.8C255.5 418.2 240.3 418.2 231 408.8C221.7 399.4 221.6 384.2 231 374.9L286 319.9L231 264.9C221.6 255.5 221.6 240.3 231 231z" />
                                </svg>
                                <span>
                                    Ditolak
                                </span>
                            </span>
                        </div>
                        @elseif($row->status == 'pending')
                        <div
                            class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-1.5  dark:bg-yellow-900 dark:text-yellow-300 border border-yellow-200 dark:border-yellow-900 rounded-full max-w-max mx-auto">
                            <span class="flex items-center gap-1">
                                <svg class="w-5 h-5 animate-spin" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640">
                                    <path
                                        d="M272 112C272 85.5 293.5 64 320 64C346.5 64 368 85.5 368 112C368 138.5 346.5 160 320 160C293.5 160 272 138.5 272 112zM272 528C272 501.5 293.5 480 320 480C346.5 480 368 501.5 368 528C368 554.5 346.5 576 320 576C293.5 576 272 554.5 272 528zM112 272C138.5 272 160 293.5 160 320C160 346.5 138.5 368 112 368C85.5 368 64 346.5 64 320C64 293.5 85.5 272 112 272zM480 320C480 293.5 501.5 272 528 272C554.5 272 576 293.5 576 320C576 346.5 554.5 368 528 368C501.5 368 480 346.5 480 320zM139 433.1C157.8 414.3 188.1 414.3 206.9 433.1C225.7 451.9 225.7 482.2 206.9 501C188.1 519.8 157.8 519.8 139 501C120.2 482.2 120.2 451.9 139 433.1zM139 139C157.8 120.2 188.1 120.2 206.9 139C225.7 157.8 225.7 188.1 206.9 206.9C188.1 225.7 157.8 225.7 139 206.9C120.2 188.1 120.2 157.8 139 139zM501 433.1C519.8 451.9 519.8 482.2 501 501C482.2 519.8 451.9 519.8 433.1 501C414.3 482.2 414.3 451.9 433.1 433.1C451.9 414.3 482.2 414.3 501 433.1z" />
                                </svg>
                                <span>
                                    Pending
                                </span>
                            </span>
                        </div>
                        @endif
                    </td>
                    <td class="px-4 py-4 text-gray-500">
                        <div class="text-gray-500 max-w-xs whitespace-normal line-clamp-3">
                            {{ $row->notes }}
                        </div>
                    </td>
                    <td class="px-6 py-4 text-gray-500 truncate max-w-xs">
                        <button data-id="{{ $row->id }}" name="btnDetail"
                            class="flex gap-1 bg-blue-600 text-blue-100 p-2.5 px-2.5 rounded-full text-xs items-center justify-center hover:bg-blue-700 transition-color duration-300">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 640">
                                <path
                                    d="M320 96C239.2 96 174.5 132.8 127.4 176.6C80.6 220.1 49.3 272 34.4 307.7C31.1 315.6 31.1 324.4 34.4 332.3C49.3 368 80.6 420 127.4 463.4C174.5 507.1 239.2 544 320 544C400.8 544 465.5 507.2 512.6 463.4C559.4 419.9 590.7 368 605.6 332.3C608.9 324.4 608.9 315.6 605.6 307.7C590.7 272 559.4 220 512.6 176.6C465.5 132.9 400.8 96 320 96zM176 320C176 240.5 240.5 176 320 176C399.5 176 464 240.5 464 320C464 399.5 399.5 464 320 464C240.5 464 176 399.5 176 320zM320 256C320 291.3 291.3 320 256 320C244.5 320 233.7 317 224.3 311.6C223.3 322.5 224.2 333.7 227.2 344.8C240.9 396 293.6 426.4 344.8 412.7C396 399 426.4 346.3 412.7 295.1C400.5 249.4 357.2 220.3 311.6 224.3C316.9 233.6 320 244.4 320 256z" />
                            </svg>
                            <span>Tampilkan Status</span>
                        </button>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        {{-- ------------------------------------------------------------ --}}
        {{-- PAGINATION --}}
        {{-- ------------------------------------------------------------ --}}
        <div
            class="flex flex-col items-center justify-between p-5 border-t border-gray-200 md:flex-row dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800">
            <span class="block mb-4 text-sm text-gray-700 dark:text-gray-400 md:mb-0">
                Menampilkan <span class="mx-1 font-semibold text-white">{{ $booking->firstItem() ?? 0 }}</span>
                sampai
                <span class="mx-1 font-semibold text-white">{{ $booking->lastItem() ?? 0 }}</span> dari total <span
                    class="mx-1 font-semibold text-white">{{ $booking->total() }}</span>
                Barisan
            </span>
            <div class="inline-flex">
                {{-- ------------------------------------------------------------ --}}
                {{-- TOMBOL PREVIOUS --}}
                {{-- ------------------------------------------------------------ --}}
                @if ($booking->onFirstPage())
                <span
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500">
                    Prev
                </span>
                @else
                <a href="{{ $booking->previousPageUrl() }}"
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                    Prev
                </a>
                @endif
                {{-- ------------------------------------------------------------ --}}
                {{-- TOMBOL NEXT --}}
                {{-- ------------------------------------------------------------ --}}
                @if( $booking->hasMorePages())
                <a href="{{ $booking->nextPageUrl() }}"
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-t border-b border-r border-gray-300 rounded-r-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
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
        {{-- ---------------------------------------------------------- --}}
        {{-- END PAGINATION --}}
        {{-- ---------------------------------------------------------- --}}
    </div>
</div>

{{-- ------------------------------------------------------------------- --}}
{{-- Side Bar --}}
{{-- ------------------------------------------------------------------- --}}
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r border-gray-200 bg-gray-50 lg:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <div class=" border-b border-gray-200 dark:border-gray-700 py-6">
                <x-sidebar-link route="dashboard" title="Dashboard">
                    <svg class="w-full h-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                </x-sidebar-link>
            </div>
            <span class="block px-2 text-xs text-gray-500 uppercase">Menu</span>
            @if(Auth::user()->role->slug === 'admin' || Auth::user()->role->slug === 'superadmin')
            <x-sidebar-link route="penyewa.index" title="Pengajuan Penyewa">
                <svg class="w-full h-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 18">
                    <path
                        d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                </svg>
            </x-sidebar-link>
            <x-sidebar-link route="kamar.index" title="Kamar">
                <svg class="w-full h-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        d="M21 10.5V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3.5A2.5 2.5 0 0 0 0 13v6a1 1 0 0 0 2 0v-1h20v1a1 1 0 0 0 2 0v-6a2.5 2.5 0 0 0-3-2.5ZM5 7h14v3H5V7Zm-3 6a.5.5 0 0 1 .5-.5H21.5a.5.5 0 0 1 .5.5V15H2v-2Z" />
                </svg>
            </x-sidebar-link>
            <x-sidebar-link route="journal.pos" title="Jurnal Harian">
                <svg class="w-full h-full" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M192 576L512 576C529.7 576 544 561.7 544 544C544 526.3 529.7 512 512 512L512 445.3C530.6 438.7 544 420.9 544 400L544 112C544 85.5 522.5 64 496 64L192 64C139 64 96 107 96 160L96 480C96 533 139 576 192 576z" />
                </svg>
            </x-sidebar-link>
            @endif
            @if(Auth::user()->role->slug === 'user' || Auth::user()->role->slug === 'superadmin')
            <x-sidebar-link route="booking.payment" title="Unggah Pembayaran">
                <svg class="w-full h-full" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M176 544C96.5 544 32 479.5 32 400C32 336.6 73 282.8 129.9 263.5C128.6 255.8 128 248 128 240C128 160.5 192.5 96 272 96C327.4 96 375.5 127.3 399.6 173.1C413.8 164.8 430.4 160 448 160C501 160 544 203 544 256C544 271.7 540.2 286.6 533.5 299.7C577.5 320 608 364.4 608 416C608 486.7 550.7 544 480 544L176 544zM337 255C327.6 245.6 312.4 245.6 303.1 255L231.1 327C221.7 336.4 221.7 351.6 231.1 360.9C240.5 370.2 255.7 370.3 265 360.9L296 329.9L296 432C296 445.3 306.7 456 320 456C333.3 456 344 445.3 344 432L344 329.9L375 360.9C384.4 370.3 399.6 370.3 408.9 360.9C418.2 351.5 418.3 336.3 408.9 327L336.9 255z" />
                </svg>
            </x-sidebar-link>
            <x-sidebar-link route="testimonial.index" title="Testimonial"> <svg class="w-full h-full"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M576 304C576 436.5 461.4 544 320 544C282.9 544 247.7 536.6 215.9 523.3L97.5 574.1C88.1 578.1 77.3 575.8 70.4 568.3C63.5 560.8 62 549.8 66.8 540.8L115.6 448.6C83.2 408.3 64 358.3 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304z" />
                </svg>
            </x-sidebar-link>
            <x-sidebar-link route="booking.status" title="Pengajuan Sewa">
                <svg class="w-full h-full" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM320 240C302.3 240 288 254.3 288 272C288 285.3 277.3 296 264 296C250.7 296 240 285.3 240 272C240 227.8 275.8 192 320 192C364.2 192 400 227.8 400 272C400 319.2 364 339.2 344 346.5L344 350.3C344 363.6 333.3 374.3 320 374.3C306.7 374.3 296 363.6 296 350.3L296 342.2C296 321.7 310.8 307 326.1 302C332.5 299.9 339.3 296.5 344.3 291.7C348.6 287.5 352 281.7 352 272.1C352 254.4 337.7 240.1 320 240.1zM288 432C288 414.3 302.3 400 320 400C337.7 400 352 414.3 352 432C352 449.7 337.7 464 320 464C302.3 464 288 449.7 288 432z" />
                </svg>
            </x-sidebar-link>
            <x-sidebar-link route="payment.history" title="History Pembayaran">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>


            </x-sidebar-link>
            @endif
            <div class="pt-5">
                <span
                    class="block px-2 py-3 pt-4 text-xs text-gray-500 uppercase border-t border-gray-200 dark:border-gray-700">Support</span>
                @if(Auth::user()->role->slug === 'admin' || Auth::user()->role->slug === 'superadmin')
                <x-sidebar-link route="activity" title="Maintenance">
                    <svg class="w-full h-full" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640">

                        <path
                            d="M102.8 57.3C108.2 51.9 116.6 51.1 123 55.3L241.9 134.5C250.8 140.4 256.1 150.4 256.1 161.1L256.1 210.7L346.9 301.5C380.2 286.5 420.8 292.6 448.1 320L574.2 446.1C592.9 464.8 592.9 495.2 574.2 514L514.1 574.1C495.4 592.8 465 592.8 446.2 574.1L320.1 448C292.7 420.6 286.6 380.1 301.6 346.8L210.8 256L161.2 256C150.5 256 140.5 250.7 134.6 241.8L55.4 122.9C51.2 116.6 52 108.1 57.4 102.7L102.8 57.3zM247.8 360.8C241.5 397.7 250.1 436.7 274 468L179.1 563C151 591.1 105.4 591.1 77.3 563C49.2 534.9 49.2 489.3 77.3 461.2L212.7 325.7L247.9 360.8zM416.1 64C436.2 64 455.5 67.7 473.2 74.5C483.2 78.3 485 91 477.5 98.6L420.8 155.3C417.8 158.3 416.1 162.4 416.1 166.6L416.1 208C416.1 216.8 423.3 224 432.1 224L473.5 224C477.7 224 481.8 222.3 484.8 219.3L541.5 162.6C549.1 155.1 561.8 156.9 565.6 166.9C572.4 184.6 576.1 203.9 576.1 224C576.1 267.2 558.9 306.3 531.1 335.1L482 286C448.9 253 403.5 240.3 360.9 247.6L304.1 190.8L304.1 161.1L303.9 156.1C303.1 143.7 299.5 131.8 293.4 121.2C322.8 86.2 366.8 64 416.1 63.9z" />
                    </svg>
                </x-sidebar-link>
                @endif
                <div class="mt-2">
                    <x-sidebar-link route="help" title="Bantuan">
                        <svg class="w-full h-full" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640">
                            <path
                                d="M320 128C241 128 175.3 185.3 162.3 260.7C171.6 257.7 181.6 256 192 256L208 256C234.5 256 256 277.5 256 304L256 400C256 426.5 234.5 448 208 448L192 448C139 448 96 405 96 352L96 288C96 164.3 196.3 64 320 64C443.7 64 544 164.3 544 288L544 456.1C544 522.4 490.2 576.1 423.9 576.1L336 576L304 576C277.5 576 256 554.5 256 528C256 501.5 277.5 480 304 480L336 480C362.5 480 384 501.5 384 528L384 528L424 528C463.8 528 496 495.8 496 456L496 435.1C481.9 443.3 465.5 447.9 448 447.9L432 447.9C405.5 447.9 384 426.4 384 399.9L384 303.9C384 277.4 405.5 255.9 432 255.9L448 255.9C458.4 255.9 468.3 257.5 477.7 260.6C464.7 185.3 399.1 127.9 320 127.9z" />
                        </svg>
                    </x-sidebar-link>
                </div>
                <span class="block px-2 pt-4 text-xs text-gray-500 uppercase md:hidden">Pesan Masuk</span>
                <div class="mt-2">
                    <x-sidebar-link route="#" title="Pesan Masuk" class="block md:hidden">
                        <svg class="w-full h-full" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640">
                            <path
                                d="M320 64C302.3 64 288 78.3 288 96L288 99.2C215 114 160 178.6 160 256L160 277.7C160 325.8 143.6 372.5 113.6 410.1L103.8 422.3C98.7 428.6 96 436.4 96 444.5C96 464.1 111.9 480 131.5 480L508.4 480C528 480 543.9 464.1 543.9 444.5C543.9 436.4 541.2 428.6 536.1 422.3L526.3 410.1C496.4 372.5 480 325.8 480 277.7L480 256C480 178.6 425 114 352 99.2L352 96C352 78.3 337.7 64 320 64zM258 528C265.1 555.6 290.2 576 320 576C349.8 576 374.9 555.6 382 528L258 528z" />
                        </svg>
                        <x-slot:badge>
                            <span
                                class="inline-flex items-center justify-center px-2 py-1.5  text-xs font-medium text-red-800 bg-red-100 rounded-full dark:bg-red-900 dark:text-red-100">
                                9+
                            </span>
                        </x-slot:badge>
                    </x-sidebar-link>
                </div>
            </div>
        </ul>
    </div>
</aside>
{{-- ------------------------------------------------------------------- --}}
{{-- End Sidebar --}}
{{-- ------------------------------------------------------------------- --}}

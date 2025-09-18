@extends('landingpage.index')

@section('content')
<div class="grid max-w-6xl grid-cols-1 gap-6 p-10 xl:p-0 xl:gap-20 md:grid-cols-1 lg:grid-cols-2" id="beranda">
    <div class="relative">
        <div class="flex flex-col md:gap-6 md:flex-row">
            <span class="flex items-center mb-4">
                {{-- star icon --}}
                <svg class="w-4 h-4 text-yellow-400 xl:w-6 xl:h-6" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-400 xl:w-6 xl:h-6" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-400 xl:w-6 xl:h-6" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-400 xl:w-6 xl:h-6" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-400 xl:w-6 xl:h-6" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                </svg>
                <p class="pl-2 text-xs font-normal text-gray-500 xl:text-base">Rating 4.9 dari 150+ review
                </p>
            </span>
            <span class="flex items-center mb-4 whitespace-nowrap">
                {{-- location icon --}}
                <svg class="w-4 h-4 text-yellow-400 xl:w-6 xl:h-6" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
                </svg>
                <h1 class="text-xs font-normal text-gray-500 xl:text-base">Jember, Jawa Timur</h1>
            </span>
        </div>
        <div class="relative py-8">
            {{-- title --}}
            <div>
                <h1 class="text-5xl font-bold text-gray-800 md:text-6xl xl:text-[3.8rem]">Kost
                    <span class="text-yellow-400">
                        Modern
                    </span>
                    &
                    <span class="text-yellow-400">
                        Nyaman
                    </span>
                    di Pusat Kota
                </h1>
                <p class="mt-10 text-xs text-gray-600 xl:text-base">Temukan hunian ideal untuk mahasiswa dan
                    pekerja
                    muda. Fasilitas
                    lengkap, lokasi strategis, dan lingkungan yang aman dan bersih.</p>
            </div>
            <div class="mt-6">
                <div class="grid grid-cols-2 gap-2 md:grid-cols-3 xl:grid-cols-3">
                    <span class="flex flex-row items-center">
                        <svg class="w-6 h-6 text-yellow-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640">
                            <path
                                d="M80 259.8L289.2 345.9C299 349.9 309.4 352 320 352C330.6 352 341 349.9 350.8 345.9L593.2 246.1C602.2 242.4 608 233.7 608 224C608 214.3 602.2 205.6 593.2 201.9L350.8 102.1C341 98.1 330.6 96 320 96C309.4 96 299 98.1 289.2 102.1L46.8 201.9C37.8 205.6 32 214.3 32 224L32 520C32 533.3 42.7 544 56 544C69.3 544 80 533.3 80 520L80 259.8zM128 331.5L128 448C128 501 214 544 320 544C426 544 512 501 512 448L512 331.4L369.1 390.3C353.5 396.7 336.9 400 320 400C303.1 400 286.5 396.7 270.9 390.3L128 331.4z" />
                        </svg>
                        <p class="pl-2 text-xs font-light text-gray-900 xl:text-base">8min Kampus UIN</p>
                    </span>
                    <span class="flex flex-row items-center">
                        <svg class="w-6 h-6 text-yellow-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640">
                            <path
                                d="M64 96C81.7 96 96 110.3 96 128L96 352L320 352L320 224C320 206.3 334.3 192 352 192L512 192C565 192 608 235 608 288L608 512C608 529.7 593.7 544 576 544C558.3 544 544 529.7 544 512L544 448L96 448L96 512C96 529.7 81.7 544 64 544C46.3 544 32 529.7 32 512L32 128C32 110.3 46.3 96 64 96zM144 256C144 220.7 172.7 192 208 192C243.3 192 272 220.7 272 256C272 291.3 243.3 320 208 320C172.7 320 144 291.3 144 256z" />
                        </svg>
                        <p class="pl-2 text-xs font-light text-gray-900 xl:text-base">20+ Kamar Kost</p>
                    </span>
                    <span class="flex flex-row items-center">
                        <svg class="w-6 h-6 text-yellow-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640">
                            <path
                                d="M320 128C426 128 512 214 512 320C512 426 426 512 320 512C254.8 512 197.1 479.5 162.4 429.7C152.3 415.2 132.3 411.7 117.8 421.8C103.3 431.9 99.8 451.9 109.9 466.4C156.1 532.6 233 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C234.3 64 158.5 106.1 112 170.7L112 144C112 126.3 97.7 112 80 112C62.3 112 48 126.3 48 144L48 256C48 273.7 62.3 288 80 288L104.6 288C105.1 288 105.6 288 106.1 288L192.1 288C209.8 288 224.1 273.7 224.1 256C224.1 238.3 209.8 224 192.1 224L153.8 224C186.9 166.6 249 128 320 128zM344 216C344 202.7 333.3 192 320 192C306.7 192 296 202.7 296 216L296 320C296 326.4 298.5 332.5 303 337L375 409C384.4 418.4 399.6 418.4 408.9 409C418.2 399.6 418.3 384.4 408.9 375.1L343.9 310.1L343.9 216z" />
                        </svg>
                        <p class="pl-2 text-xs font-light text-gray-900 xl:text-base">24 Jam Akses</p>
                    </span>
                </div>
                <div class="flex flex-col gap-2 mt-8 xl:gap-2 lg:flex-row">
                    <span class="block mt-2">
                        <button type="button" id="btnPesanSekarang"
                            class="px-6 py-2 text-sm font-medium text-center text-black bg-[#E7B008] hover:bg-[#ffc003] rounded-md focus:ring-4 focus:outline-none md:text-base transition-all duration-300 ease-in-out whitespace-nowrap w-full flex gap-2 items-center justify-center">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path
                                    d="M300.9 149.2L184.3 278.8C179.7 283.9 179.9 291.8 184.8 296.7C215.3 327.2 264.8 327.2 295.3 296.7L327.1 264.9C331.3 260.7 336.6 258.4 342 258C348.8 257.4 355.8 259.7 361 264.9L537.6 440L608 384L608 96L496 160L472.2 144.1C456.4 133.6 437.9 128 418.9 128L348.5 128C347.4 128 346.2 128 345.1 128.1C328.2 129 312.3 136.6 300.9 149.2zM148.6 246.7L255.4 128L215.8 128C190.3 128 165.9 138.1 147.9 156.1L144 160L32 96L32 384L188.4 514.3C211.4 533.5 240.4 544 270.3 544L286 544L279 537C269.6 527.6 269.6 512.4 279 503.1C288.4 493.8 303.6 493.7 312.9 503.1L353.9 544.1L362.9 544.1C382 544.1 400.7 539.8 417.7 531.8L391 505C381.6 495.6 381.6 480.4 391 471.1C400.4 461.8 415.6 461.7 424.9 471.1L456.9 503.1L474.4 485.6C483.3 476.7 485.9 463.8 482 452.5L344.1 315.7L329.2 330.6C279.9 379.9 200.1 379.9 150.8 330.6C127.8 307.6 126.9 270.7 148.6 246.6z" />
                            </svg>
                            Pesan
                            Sekarang</button>
                    </span>
                    <span class="block mt-2">
                        <a href="#"
                            class="flex items-center justify-center w-full gap-2 px-6 py-2 text-sm font-medium text-center text-white transition-all duration-300 ease-in-out bg-green-900 rounded-md hover:bg-green-700 focus:outline-none md:text-base whitespace-nowrap">
                            <i class="fa-brands fa-whatsapp"></i>
                            Konsultasi Sekarang</a>
                    </span>
                </div>
                {{-- <div class="mt-4">
                    <div
                        class="p-4 text-xs text-justify text-gray-600 bg-yellow-500 border border-yellow-600 rounded-lg drop-shadow-md">
                        <span class="block p-1.5">Mulai dari</span>
                        <div class="flex justify-between p-1.5">
                            <span class="text-lg font-bold text-white md:text-2xl xl:text-4xl">Rp
                                1.500.000</span>
                            <span class="flex items-center font-light text-gray-800 xl:items-end">/bulan</span>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Video Section -->
    <div class="relative h-60 md:h-[23rem] xl:h-[36rem] 2xl:h-[40rem] w-full ">
        {{-- video --}}
        <div class="w-full h-full overflow-hidden md:h-full rounded-3xl">
            <video class="relative object-cover w-full h-full" src="{{ asset('video/yellowKost-promotion-video.mp4') }}"
                autoplay muted loop lazyload></video>
        </div>
        <div class="absolute lg:-top-10 lg:-right-8 -right-6 -top-6 lg:block">
            <div
                class="flex flex-col p-2.5 items-center justify-center bg-white border border-yellow-300 shadow-lg lg:p-4  rounded-xl">
                {{-- icon --}}
                <span class="block text-lg font-bold text-yellow-400 md:text-md 2xl:text-2xl ">100%</span>
                <span class="text-xs">Nyaman</span>
            </div>
        </div>
        <div class="absolute lg:-bottom-10 lg:-left-14 -left-6 -bottom-6 lg:block">
            <div
                class="flex flex-col items-center justify-center p-2.5 bg-white border border-yellow-300 shadow-lg rounded-xl lg:p-4">
                {{-- icon --}}
                <span class="block text-lg font-bold text-yellow-400 md:text-md 2xl:text-2xl">150+</span>
                <span class="text-xs">Penghuni puas</span>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Video Section -->
<div class="py-10 pb-28 bg-gradient-to-b to-[hsl(48_96%_89%)] from-[hsl(48_100%_96%)] scroll-behavior-smooth"
    id="fasilitas">
    <span class="flex flex-col items-center justify-center py-8 m-4 text-gray-800">
        <h1 class="text-4xl font-bold md:text-5xl">Fasilitas
            <span class="text-yellow-400">
                Kami
            </span>
        </h1>
        <p class="max-w-xl my-4 text-sm text-center text-yellow-600 ">Nikmati berbagai fasilitas
            modern yang telah kami
            sediakan
            untuk
            kenyamanan dan
            kemudahan hidup anda.
        </p>
    </span>
    <div class="container grid grid-cols-1 gap-4 p-6 mx-auto md:grid-cols-3 xl:grid-cols-4 max-w-7xl">
        <div
            class="flex flex-col p-6 transition-all duration-300 ease-in-out bg-white border border-yellow-300 shadow-lg group rounded-xl hover:scale-105 hover:shadow-xl">
            {{-- icon --}}
            <span
                class="block p-4 mb-4 transition-colors duration-300 bg-yellow-100 rounded-md w-fit group-hover:bg-yellow-200"
                style="filter: drop-shadow(0 2px 4px rgba(231, 176, 8, 0.4));">
                <svg class="w-6 h-6 text-yellow-500 transition-colors duration-300" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M320 160C229.1 160 146.8 196 86.3 254.6C73.6 266.9 53.3 266.6 41.1 253.9C28.9 241.2 29.1 220.9 41.8 208.7C113.7 138.9 211.9 96 320 96C428.1 96 526.3 138.9 598.3 208.7C611 221 611.3 241.3 599 253.9C586.7 266.5 566.4 266.9 553.8 254.6C493.2 196 410.9 160 320 160zM272 496C272 469.5 293.5 448 320 448C346.5 448 368 469.5 368 496C368 522.5 346.5 544 320 544C293.5 544 272 522.5 272 496zM200 390.2C188.3 403.5 168.1 404.7 154.8 393C141.5 381.3 140.3 361.1 152 347.8C193 301.4 253.1 272 320 272C386.9 272 447 301.4 488 347.8C499.7 361.1 498.4 381.3 485.2 393C472 404.7 451.7 403.4 440 390.2C410.6 356.9 367.8 336 320 336C272.2 336 229.4 356.9 200 390.2z" />
                </svg>
            </span>

            <span class="flex flex-col transition-colors duration-300">
                <h1 class="font-bold xl:text-lg">WiFi Gratis</h1>
                <p class="mt-4 text-sm text-yellow-700">
                    Internet cepat 24 jam untuk kebutuhan belajar dan kerja
                </p>
            </span>
        </div>
        <div
            class="flex flex-col p-6 transition-all duration-300 ease-in-out bg-white border border-yellow-300 shadow-lg group rounded-xl hover:scale-105 hover:shadow-xl">
            {{-- icon --}}
            <span
                class="block p-4 mb-4 transition-colors duration-300 bg-yellow-100 rounded-md w-fit group-hover:bg-yellow-200"
                style="filter: drop-shadow(0 2px 4px rgba(231, 176, 8, 0.4));">
                <svg class="w-6 h-6 text-yellow-500 transition-colors duration-300" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M147 106.7l-29.8 85.3 122.9 0 0-96-77.9 0c-6.8 0-12.9 4.3-15.1 10.7zM48.6 193.9L86.5 85.6C97.8 53.5 128.1 32 162.1 32L360 32c25.2 0 48.9 11.9 64 32l96.2 128.3C587.1 196.5 640 252.1 640 320l0 16c0 35.3-28.7 64-64 64l-16.4 0c-4 44.9-41.7 80-87.6 80s-83.6-35.1-87.6-80l-144.7 0c-4 44.9-41.7 80-87.6 80s-83.6-35.1-87.6-80l-.4 0c-35.3 0-64-28.7-64-64l0-80c0-30.1 20.7-55.3 48.6-62.1zM440 192l-67.2-89.6c-3-4-7.8-6.4-12.8-6.4l-72 0 0 96 152 0zM152 432a40 40 0 1 0 0-80 40 40 0 1 0 0 80zm360-40a40 40 0 1 0 -80 0 40 40 0 1 0 80 0z" />
                </svg>
            </span>

            <span class="flex flex-col transition-colors duration-300">
                <h1 class="font-bold xl:text-lg">Parkir Luas</h1>
                <p class="mt-4 text-sm text-yellow-700">
                    Area parkir motor dan mobil yang aman dan tertata
                </p>
            </span>
        </div>
        <div
            class="flex flex-col p-6 transition-all duration-300 ease-in-out bg-white border border-yellow-300 shadow-lg group rounded-xl hover:scale-105 hover:shadow-xl">
            {{-- icon --}}
            <span
                class="block p-4 mb-4 transition-colors duration-300 bg-yellow-100 rounded-md w-fit group-hover:bg-yellow-200"
                style="filter: drop-shadow(0 2px 4px rgba(231, 176, 8, 0.4));">
                <svg class="w-6 h-6 text-yellow-500 transition-colors duration-300" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z" />
                </svg>
            </span>

            <span class="flex flex-col transition-colors duration-300">
                <h1 class="font-bold xl:text-lg">Keamanan 24 Jam</h1>
                <p class="mt-4 text-sm text-yellow-700">
                    Terdapat CCTV untuk menjamin keamanan penghuni
                </p>
            </span>
        </div>
        <div
            class="flex flex-col p-6 transition-all duration-300 ease-in-out bg-white border border-yellow-300 shadow-lg group rounded-xl hover:scale-105 hover:shadow-xl">
            {{-- icon --}}
            <span
                class="block p-4 mb-4 transition-colors duration-300 bg-yellow-100 rounded-md w-fit group-hover:bg-yellow-200"
                style="filter: drop-shadow(0 2px 4px rgba(231, 176, 8, 0.4));">
                <svg class="w-6 h-6 text-yellow-500 transition-colors duration-300" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M320 128C426 128 512 214 512 320C512 426 426 512 320 512C254.8 512 197.1 479.5 162.4 429.7C152.3 415.2 132.3 411.7 117.8 421.8C103.3 431.9 99.8 451.9 109.9 466.4C156.1 532.6 233 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C234.3 64 158.5 106.1 112 170.7L112 144C112 126.3 97.7 112 80 112C62.3 112 48 126.3 48 144L48 256C48 273.7 62.3 288 80 288L104.6 288C105.1 288 105.6 288 106.1 288L192.1 288C209.8 288 224.1 273.7 224.1 256C224.1 238.3 209.8 224 192.1 224L153.8 224C186.9 166.6 249 128 320 128zM344 216C344 202.7 333.3 192 320 192C306.7 192 296 202.7 296 216L296 320C296 326.4 298.5 332.5 303 337L375 409C384.4 418.4 399.6 418.4 408.9 409C418.2 399.6 418.3 384.4 408.9 375.1L343.9 310.1L343.9 216z" />
                </svg>
            </span>
            <span class="flex flex-col transition-colors duration-300">
                <h1 class="font-bold xl:text-lg">Akses 24 Jam</h1>
                <p class="mt-4 text-sm text-yellow-700">
                    Bebas keluar masuk kapan saja tanpa batasan waktu
                </p>
            </span>
        </div>
        <div
            class="flex flex-col p-6 transition-all duration-300 ease-in-out bg-white border border-yellow-300 shadow-lg group rounded-xl hover:scale-105 hover:shadow-xl">
            {{-- icon --}}
            <span
                class="block p-4 mb-4 transition-colors duration-300 bg-yellow-100 rounded-md w-fit group-hover:bg-yellow-200"
                style="filter: drop-shadow(0 2px 4px rgba(231, 176, 8, 0.4));">
                <svg class="w-6 h-6 text-yellow-500 transition-colors duration-300" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M474.6 188.1C495.3 203.7 520.6 218.8 548.8 222.6C561.9 224.4 574 215.1 575.8 202C577.6 188.9 568.3 176.8 555.2 175C539.3 172.9 522 163.7 503.5 149.8C465.1 120.8 413 120.8 374.5 149.8C350.5 167.9 333.8 176.1 320 176.1C306.2 176.1 289.5 167.9 265.5 149.8C227.1 120.8 175 120.8 136.5 149.8C118 163.7 100.7 172.9 84.8 175C71.7 176.8 62.4 188.8 64.2 202C66 215.2 78 224.4 91.2 222.6C119.4 218.8 144.8 203.7 165.4 188.1C186.7 172 215.3 172 236.6 188.1C260.8 206.4 288.9 224 320 224C351.1 224 379.1 206.3 403.4 188.1C424.7 172 453.3 172 474.6 188.1zM474.6 332.1C495.3 347.7 520.6 362.8 548.8 366.6C561.9 368.4 574 359.1 575.8 346C577.6 332.9 568.3 320.8 555.2 319C539.3 316.9 522 307.7 503.5 293.8C465.1 264.8 413 264.8 374.5 293.8C350.5 311.9 333.8 320.1 320 320.1C306.2 320.1 289.5 311.9 265.5 293.8C227.1 264.8 175 264.8 136.5 293.8C118 307.7 100.7 316.9 84.8 319C71.7 320.7 62.4 332.8 64.2 346C66 359.2 78 368.4 91.2 366.6C119.4 362.8 144.8 347.7 165.4 332.1C186.7 316 215.3 316 236.6 332.1C260.8 350.4 288.9 368 320 368C351.1 368 379.1 350.3 403.4 332.1C424.7 316 453.3 316 474.6 332.1zM403.4 476.1C424.7 460 453.3 460 474.6 476.1C495.3 491.7 520.6 506.8 548.8 510.6C561.9 512.4 574 503.1 575.8 490C577.6 476.9 568.3 464.8 555.2 463C539.3 460.9 522 451.7 503.5 437.8C465.1 408.8 413 408.8 374.5 437.8C350.5 455.9 333.8 464.1 320 464.1C306.2 464.1 289.5 455.9 265.5 437.8C227.1 408.8 175 408.8 136.5 437.8C118 451.7 100.7 460.9 84.8 463C71.7 464.8 62.4 476.8 64.2 490C66 503.2 78 512.4 91.2 510.6C119.4 506.8 144.8 491.7 165.4 476.1C186.7 460 215.3 460 236.6 476.1C260.8 494.4 288.9 512 320 512C351.1 512 379.1 494.3 403.4 476.1z" />
                </svg>
            </span>
            <span class="flex flex-col transition-colors duration-300">
                <h1 class="font-bold xl:text-lg">Air Bersih</h1>
                <p class="mt-4 text-sm text-yellow-700">
                    Pasokan air bersih yang tidak pernah putus
                </p>
            </span>
        </div>
        <div
            class="flex flex-col p-6 transition-all duration-300 ease-in-out bg-white border border-yellow-300 shadow-lg group rounded-xl hover:scale-105 hover:shadow-xl">
            {{-- icon --}}
            <span
                class="block p-4 mb-4 transition-colors duration-300 bg-yellow-100 rounded-md w-fit group-hover:bg-yellow-200"
                style="filter: drop-shadow(0 2px 4px rgba(231, 176, 8, 0.4));">
                <svg class="w-6 h-6 text-yellow-500 transition-colors duration-300" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M434.8 54.1C446.7 62.7 451.1 78.3 445.7 91.9L367.3 288L512 288C525.5 288 537.5 296.4 542.1 309.1C546.7 321.8 542.8 336 532.5 344.6L244.5 584.6C233.2 594 217.1 594.5 205.2 585.9C193.3 577.3 188.9 561.7 194.3 548.1L272.7 352L128 352C114.5 352 102.5 343.6 97.9 330.9C93.3 318.2 97.2 304 107.5 295.4L395.5 55.4C406.8 46 422.9 45.5 434.8 54.1z" />
                </svg>
            </span>
            <span class="flex flex-col transition-colors duration-300">
                <h1 class="font-bold xl:text-lg">Listrik Besar</h1>
                <p class="mt-4 text-sm text-yellow-700">
                    Pasokan listrik 900 watt untuk kebutuhan sehari-hari
                </p>
            </span>
        </div>
        <div
            class="flex flex-col p-6 transition-all duration-300 ease-in-out bg-white border border-yellow-300 shadow-lg group rounded-xl hover:scale-105 hover:shadow-xl">
            {{-- icon --}}
            <span
                class="block p-4 mb-4 transition-colors duration-300 bg-yellow-100 rounded-md w-fit group-hover:bg-yellow-200"
                style="filter: drop-shadow(0 2px 4px rgba(231, 176, 8, 0.4));">
                <svg class="w-6 h-6 text-yellow-500 transition-colors duration-300" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M64 96C81.7 96 96 110.3 96 128L96 352L320 352L320 224C320 206.3 334.3 192 352 192L512 192C565 192 608 235 608 288L608 512C608 529.7 593.7 544 576 544C558.3 544 544 529.7 544 512L544 448L96 448L96 512C96 529.7 81.7 544 64 544C46.3 544 32 529.7 32 512L32 128C32 110.3 46.3 96 64 96zM144 256C144 220.7 172.7 192 208 192C243.3 192 272 220.7 272 256C272 291.3 243.3 320 208 320C172.7 320 144 291.3 144 256z" />
                </svg>
            </span>
            <span class="flex flex-col transition-colors duration-300">
                <h1 class="font-bold xl:text-lg">Kasur & Lemari</h1>
                <p class="mt-4 text-sm text-yellow-700">
                    Kamar sudah furnished dengan kasur nyaman dan lemari
                </p>
            </span>
        </div>
        <div
            class="flex flex-col p-6 transition-all duration-300 ease-in-out bg-white border border-yellow-300 shadow-lg group rounded-xl hover:scale-105 hover:shadow-xl">
            {{-- icon --}}
            <span
                class="block p-4 mb-4 transition-colors duration-300 bg-yellow-100 rounded-md w-fit group-hover:bg-yellow-200"
                style="filter: drop-shadow(0 2px 4px rgba(231, 176, 8, 0.4));">
                <svg class="w-6 h-6 text-yellow-500 transition-colors duration-300" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M127.9 78.4C127.1 70.2 120.2 64 112 64C103.8 64 96.9 70.2 96 78.3L81.9 213.7C80.6 219.7 80 225.8 80 231.9C80 277.8 115.1 315.5 160 319.6L160 544C160 561.7 174.3 576 192 576C209.7 576 224 561.7 224 544L224 319.6C268.9 315.5 304 277.8 304 231.9C304 225.8 303.4 219.7 302.1 213.7L287.9 78.3C287.1 70.2 280.2 64 272 64C263.8 64 256.9 70.2 256.1 78.4L242.5 213.9C241.9 219.6 237.1 224 231.4 224C225.6 224 220.8 219.6 220.2 213.8L207.9 78.6C207.2 70.3 200.3 64 192 64C183.7 64 176.8 70.3 176.1 78.6L163.8 213.8C163.3 219.6 158.4 224 152.6 224C146.8 224 142 219.6 141.5 213.9L127.9 78.4zM512 64C496 64 384 96 384 240L384 352C384 387.3 412.7 416 448 416L480 416L480 544C480 561.7 494.3 576 512 576C529.7 576 544 561.7 544 544L544 96C544 78.3 529.7 64 512 64z" />
                </svg>
            </span>
            <span class="flex flex-col transition-colors duration-300">
                <h1 class="font-bold xl:text-lg">Dapur Bersama</h1>
                <p class="mt-4 text-sm text-yellow-700">
                    Dapur lengkap dengan peralatan masak yang bisa digunakan
                </p>
            </span>
        </div>
    </div>
</div>
<div class="bg-gradient-to-l to-[hsl(48,86%,89%)] from-[hsl(48_100%_96%)] scroll-behavior-smooth">
    <div class="p-6 mx-auto md:p-0" id="gallery">
        <div class="mx-auto md:p-0">
            <span class="flex flex-col items-center justify-center py-8 text-gray-800">
                <h1 class="text-4xl font-bold md:text-5xl">Galeri
                    <span class="text-yellow-400">
                        Foto
                    </span>
                </h1>
                <p class="max-w-xl my-4 text-sm text-center text-yellow-600">Lihat langsung fasilitas dan
                    ruangan yang tersedia di kost kami. Semua foto diambil secara real dan terbaru.
                </p>
            </span>
            <!-- Swiper -->
            @include('landingpage._galleryData')
        </div>
    </div>
    <div class="bg-gradient-to-r from-[hsl(48,86%,89%)] to-[hsl(48_100%_96%)] pb-20">
        <div class="p-6 mx-auto md:p-6">
            <div class="flex flex-col items-center justify-center py-8  text-gray-800" id="kontak">
                <h1 class="text-4xl font-bold md:text-5xl">Hubungi
                    <span class="text-yellow-400">
                        Kami
                    </span>
                </h1>
                <Siap class="max-w-xl my-4 text-sm text-center text-yellow-600">Siap untuk bergabung dengan kami?
                    Hubungi
                    sekarang untuk reservasi atau konsultasi tentang kebutuhan hunian Anda. </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 pb-10 max-w-7xl mx-auto pt-10">
                <div class="flex flex-col gap-4">
                    <h1 class="text-2xl font-bold text-stone-700">Informasi Kontak</h1>
                    <div class="bg-white border border-gray-300 p-6 rounded-lg drop-shadow-2xl flex flex-row">
                        <span
                            class="bg-gradient-to-r from-[hsl(44,88%,20%)] to-[hsl(52,40%,34%)] rounded-md p-3 block px-4">
                            <i class="fa-solid fa-phone text-white text-lg"></i>
                        </span>
                        <div class="flex flex-col pl-4 justify-center">
                            <span class="font-semibold ">Telepone</span>
                            <a href="tel:+6281234567890" class="text-stone-500">+62
                                812-3456-7890</a>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-300 p-6 rounded-lg drop-shadow-2xl flex flex-row">
                        <span
                            class="bg-gradient-to-r from-[hsl(115,95%,35%)] to-[hsl(114,88%,42%)] rounded-md p-3 block px-4">
                            <i class="fa-solid fa-message text-white text-lg"></i>
                        </span>
                        <div class="flex flex-row justify-between w-full">
                            <div class="flex flex-col pl-4 justify-center">
                                <span class="font-semibold">WhatsApp</span>
                                <a href="https://wa.me/628123498743" class="text-stone-500">+62
                                    812-349-8743</a>
                            </div>
                            <div class="flex flex-col justify-center text-xs text-stone-400">
                                <span>WhatsApp Only.</span>
                                <span class="text-end">No Call.</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <div class="flex flex-row md:flex-row gap-4">
                            <span class="block">
                                <i
                                    class="fa-solid fa-location-dot text-orange-400 text-2xl bg-yellow-200 rounded-md p-4 px-6"></i>
                            </span>
                            <div class="flex flex-col">
                                <span class="font-semibold">Alamat</span>
                                <span class="text-stone-500 mt-2.5 md:text-base text-[0.875rem]">
                                    Perum Griya Mangli Indah No.AG 22, Wonosari, Mangli, Kec. Kaliwates, Kabupaten
                                    Jember,
                                    Jawa
                                    Timur</span>
                            </div>
                        </div>
                        <div class="flex flex-row gap-4 md:flex-row mt-6">
                            <span class="block">
                                <i
                                    class="fa-solid fa-clock-rotate-left text-orange-400 text-xl bg-yellow-200 rounded-md p-4 px-6"></i>
                            </span>
                            <div class="flex flex-col">
                                <span class="font-semibold">Jam Operasioal</span>
                                <div class="text-[0.875rem] mt-2.5 flex flex-col">
                                    <span class="text-stone-500 text-md md:text-base">
                                        Senin - Jumat : 08:00 - 17:00 WIB
                                    </span>
                                    <span class="text-stone-500 text-md md:text-base">
                                        Sabtu - Minggu : 08:00 - 23:00 WIB
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white border border-gray-300 rounded-lg drop-shadow-2xl">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.23112287711!2d113.6400199748866!3d-8.17989599185013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6910059ab683f%3A0xb67df6d404026d30!2sPerum%20Griya%20Mangli%20Indah%20No.AG%2022!5e0!3m2!1sid!2sid!4v1717057312345!5m2!1sid!2sid"
                        class="w-full h-full min-h-[600px] border-0" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Section -->
<div class="bg-gradient-to-b to-[hsl(48_96%_89%)] from-[hsl(48_100%_96%)] pb-20 pt-20">
    <div class="max-w-4xl p-6 mx-auto md:p-0">
        <div class="flex flex-col items-center justify-center py-8 text-gray-800">
            <h1 class="text-4xl font-bold md:text-5xl">Pertanyaan Sering Diajukan
                <span class="text-yellow-400">(FAQ)</span>
            </h1>
            <p class="max-w-xl my-4 text-sm text-center text-yellow-600">
                Temukan jawaban cepat untuk pertanyaan umum tentang YellowKost.
            </p>
        </div>
        <div id="accordion-faq" data-accordion="collapse">
            @php
            $faqs = [
            ['question' => 'Apa saja fasilitas yang didapat di setiap kamar?', 'answer' => 'Setiap kamar di
            YellowKost
            sudah dilengkapi dengan fasilitas lengkap seperti kasur yang nyaman, lemari pakaian, meja belajar,
            kursi,
            dan kamar mandi dalam dengan shower. Kami juga menyediakan AC dan akses WiFi gratis berkecepatan tinggi
            di
            setiap kamar.'],
            ['question' => 'Bagaimana sistem pembayaran sewa kost?', 'answer' => 'Pembayaran sewa dapat dilakukan
            setiap
            bulan melalui transfer bank atau pembayaran tunai langsung ke manajemen. Kami akan memberikan notifikasi
            pengingat beberapa hari sebelum tanggal jatuh tempo.'],
            ['question' => 'Apakah ada jam malam atau batasan akses?', 'answer' => 'YellowKost memberikan akses 24
            jam
            bagi para penghuninya. Setiap penghuni akan diberikan kunci gerbang sendiri sehingga bebas keluar masuk
            kapan saja, namun tetap wajib menjaga ketertiban dan keamanan lingkungan.'],
            ['question' => 'Apakah hewan peliharaan diizinkan?', 'answer' => 'Untuk menjaga kenyamanan bersama dan
            kebersihan fasilitas, saat ini kami belum mengizinkan penghuni untuk membawa hewan peliharaan.'],
            ['question' => 'Bagaimana cara mengajukan keluhan atau permintaan perbaikan?', 'answer' => 'Anda dapat
            langsung menghubungi manajer kost atau melalui grup WhatsApp penghuni yang telah kami sediakan. Tim kami
            akan segera menindaklanjuti setiap keluhan atau permintaan perbaikan secepat mungkin.'],
            ];
            @endphp

            @foreach ($faqs as $index => $faq)
            <h2 id="accordion-faq-heading-{{ $index + 1 }}">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-800 border {{ $index == 0 ? 'border-b-0 rounded-t-xl' : 'border-b-0' }} border-gray-200 focus:ring-4 focus:ring-yellow-100 hover:bg-yellow-400 transition-all duration-300 ease-in-out"
                    data-accordion-target="#accordion-faq-body-{{ $index + 1 }}"
                    aria-expanded="{{ $index == 0 ? 'true' : 'false' }} dark:bg-yellow-400"
                    aria-controls="accordion-faq-body-{{ $index + 1 }}">
                    <span class="text-gray-800">{{ $faq['question'] }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-faq-body-{{ $index + 1 }}" class="{{ $index == 0 ? '' : 'hidden' }}"
                aria-labelledby="accordion-faq-heading-{{ $index + 1 }}">
                <div class="p-5 border border-b-0 border-gray-200">
                    <p class="mb-2 text-gray-500">{{ $faq['answer'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@push('script')
@endpush
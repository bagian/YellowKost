@extends('landingpage.index')
@section('content')
<div class="grid max-w-[75rem] grid-cols-1 gap-6 p-10 xl:p-0 xl:gap-20 md:grid-cols-1 lg:grid-cols-2">
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
                <p class="pl-2 text-xs font-normal text-gray-500 xl:text-base">Rating 4.9</p>
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
                <h1 class="text-5xl font-extrabold text-gray-800 md:text-6xl xl:text-[4.3rem]">Kost
                    <span class="text-yellow-400">
                        Pria, Bersih &
                    </span>
                    <span class="inline-block my-2 text-yellow-400">
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
                                d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM370.7 389.1L226.4 444.6C207 452.1 187.9 433 195.4 413.6L250.9 269.3C254.2 260.8 260.8 254.2 269.3 250.9L413.6 195.4C433 187.9 452.1 207 444.6 226.4L389.1 370.7C385.9 379.2 379.2 385.8 370.7 389.1zM352 320C352 302.3 337.7 288 320 288C302.3 288 288 302.3 288 320C288 337.7 302.3 352 320 352C337.7 352 352 337.7 352 320z" />
                        </svg>
                        <p class="pl-2 text-xs font-light text-gray-900 xl:text-base">Lokasi Strategis</p>
                    </span>
                    <span class="flex flex-row items-center">
                        <svg class="w-6 h-6 text-yellow-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">

                            <path
                                d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z" />
                        </svg>
                        <p class="pl-2 text-xs font-light text-gray-900 xl:text-base">Keamanan Terjaga</p>
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
                <div class="flex flex-col items-center w-full gap-2 py-16 xl:gap-2 lg:flex-row">
                    <span class="block w-full">
                        <a href="{{ route('booking.form') }}"
                            class="px-6 py-2 text-sm font-medium text-center text-stone-800 bg-[#E7B008] hover:bg-[#ffc003] rounded-full focus:ring-4 focus:outline-none md:text-base transition-all duration-300 ease-in-out whitespace-nowrap w-full flex gap-2 items-center justify-center">
                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 640">
                                <path
                                    d="M224 64C241.7 64 256 78.3 256 96L256 128L384 128L384 96C384 78.3 398.3 64 416 64C433.7 64 448 78.3 448 96L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 96C192 78.3 206.3 64 224 64zM160 304L160 336C160 344.8 167.2 352 176 352L208 352C216.8 352 224 344.8 224 336L224 304C224 295.2 216.8 288 208 288L176 288C167.2 288 160 295.2 160 304zM288 304L288 336C288 344.8 295.2 352 304 352L336 352C344.8 352 352 344.8 352 336L352 304C352 295.2 344.8 288 336 288L304 288C295.2 288 288 295.2 288 304zM432 288C423.2 288 416 295.2 416 304L416 336C416 344.8 423.2 352 432 352L464 352C472.8 352 480 344.8 480 336L480 304C480 295.2 472.8 288 464 288L432 288zM160 432L160 464C160 472.8 167.2 480 176 480L208 480C216.8 480 224 472.8 224 464L224 432C224 423.2 216.8 416 208 416L176 416C167.2 416 160 423.2 160 432zM304 416C295.2 416 288 423.2 288 432L288 464C288 472.8 295.2 480 304 480L336 480C344.8 480 352 472.8 352 464L352 432C352 423.2 344.8 416 336 416L304 416zM416 432L416 464C416 472.8 423.2 480 432 480L464 480C472.8 480 480 472.8 480 464L480 432C480 423.2 472.8 416 464 416L432 416C423.2 416 416 423.2 416 432z" />
                            </svg>
                            Pesan
                            Sekarang</a>
                    </span>
                    <span class="hidden text-gray-900 lg:block">atau</span>
                    <span class="block w-full">
                        <button onclick="surveyWA()"
                            class="flex items-center justify-center w-full px-6 py-2 text-sm font-medium text-center text-white transition-all duration-300 ease-in-out bg-green-900 rounded-full hover:bg-green-700 focus:ring-4 focus:outline-none md:text-base whitespace-nowrap">
                            <svg class="w-5 h-5 mr-2 " fill=" currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                            Jadwalkan Kunjungan
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Section -->
    <div class="relative h-[25rem] md:h-[28rem] xl:h-[36rem] 2xl:h-[40rem] w-full ">
        {{-- video --}}
        <div class="w-full h-full overflow-hidden md:h-full rounded-3xl">
            <video class="relative object-cover w-full h-full" src="{{ asset('video/yellowKost-promotion-video.mp4') }}"
                autoplay muted loop lazyload></video>
        </div>
        <div class="absolute lg:-top-10 lg:-right-8 -right-6 -top-6 lg:block">
            <div
                class="flex flex-col p-2.5 items-center justify-center bg-white/40 border border-gray-200 shadow-lg lg:p-4 rounded-xl backdrop-blur-lg">
                {{-- icon --}}
                <span class="block text-lg font-bold text-gray-900 md:text-md 2xl:text-2xl">100%</span>
                <span class="text-xs">Nyaman</span>
            </div>
        </div>
        <div class="absolute lg:-bottom-10 lg:-left-14 -left-6 -bottom-6 lg:block">
            <div
                class="flex flex-col items-center justify-center p-2.5 bg-white/40 border border-gray-200 backdrop-blur-lg shadow-lg rounded-xl lg:p-4">
                {{-- icon --}}
                <span class="block text-lg font-bold text-gray-900 md:text-md 2xl:text-2xl">150+</span>
                <span class="text-xs">Penghuni puas</span>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Video Section -->
<div class="py-10 pb-28 bg-gradient-to-b to-[hsl(48_96%_89%)] from-[hsl(48_100%_96%)]">
    <span class="flex flex-col items-center justify-center py-8 m-4 text-gray-800">
        <h1 class="text-4xl font-bold md:text-5xl">Fasilitas
            <span class="text-yellow-400">
                Kami
            </span>
        </h1>
        <p class="max-w-xl my-4 text-center text-gray-700 ">Nikmati berbagai fasilitas
            modern yang telah kami
            sediakan
            untuk
            kenyamanan dan
            kemudahan hidup anda.
        </p>
    </span>
    <div class="container grid grid-cols-1 gap-4 p-6 mx-auto md:grid-cols-3 xl:grid-cols-4 max-w-7xl">
        <div
            class="flex flex-col p-6 transition-all duration-300 ease-in-out border border-yellow-300 shadow-lg bg-white/70 group rounded-xl hover:scale-105 hover:shadow-xl backdrop-blur-lg">
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
            class="flex flex-col p-6 transition-all duration-300 ease-in-out border border-yellow-300 shadow-lg bg-white/70 group rounded-xl hover:scale-105 hover:shadow-xl backdrop-blur-lg">
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
            class="flex flex-col p-6 transition-all duration-300 ease-in-out border border-yellow-300 shadow-lg bg-white/70 group rounded-xl hover:scale-105 hover:shadow-xl backdrop-blur-lg">
            {{-- icon --}}
            <span
                class="block p-4 mb-4 transition-colors duration-300 bg-yellow-100 rounded-md w-fit group-hover:bg-yellow-200"
                style="filter: drop-shadow(0 2px 4px rgba(231, 176, 8, 0.4));">
                <svg class="w-6 h-6 text-yellow-500 transition-colors duration-300" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">

                    <path
                        d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z" />
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
            class="flex flex-col p-6 transition-all duration-300 ease-in-out border border-yellow-300 shadow-lg bg-white/70 group rounded-xl hover:scale-105 hover:shadow-xl backdrop-blur-lg">
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
            class="flex flex-col p-6 transition-all duration-300 ease-in-out border border-yellow-300 shadow-lg bg-white/70 group rounded-xl hover:scale-105 hover:shadow-xl backdrop-blur-lg">
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
            class="flex flex-col p-6 transition-all duration-300 ease-in-out border border-yellow-300 shadow-lg bg-white/70 group rounded-xl hover:scale-105 hover:shadow-xl backdrop-blur-lg">
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
            class="flex flex-col p-6 transition-all duration-300 ease-in-out border border-yellow-300 shadow-lg bg-white/70 group rounded-xl hover:scale-105 hover:shadow-xl backdrop-blur-lg">
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
            class="flex flex-col p-6 transition-all duration-300 ease-in-out border border-yellow-300 shadow-lg bg-white/70 group rounded-xl hover:scale-105 hover:shadow-xl backdrop-blur-lg">
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
<section>
    <div class="p-6 mx-auto max-w-7xl md:p-0 lg:p-6">
        <div class="mx-auto mt-20 md:p-0">
            <span class="flex flex-col items-center justify-center py-8 text-gray-800">
                <h1 class="text-4xl font-bold md:text-5xl">Galeri
                    <span class="text-yellow-400">
                        Foto
                    </span>
                </h1>
                <p class="max-w-xl my-4 text-center text-gray-500">Lihat langsung fasilitas dan
                    ruangan yang tersedia di kost kami. Semua foto diambil secara real dan terbaru.
                </p>
            </span>
            <!-- Swiper -->
            @include('landingpage._galleryData')
        </div>
    </div>
</section>
<!-- Testimonial Section -->
<section>
    <div class="pt-20 pb-20 mx-auto max-w-7xl">
        <div class="p-6 mx-auto lg:px-6 xl:px-0">
            <div class="flex flex-col items-center justify-center py-8 text-gray-800">
                <h1 class="text-4xl font-bold md:text-5xl">Testimoni
                    <span class="text-yellow-400">Penghuni</span>
                </h1>
                <p class="max-w-xl my-4 text-center text-gray-500">
                    Dengarkan apa kata mereka yang telah merasakan kenyamanan tinggal di YellowKost.
                </p>
            </div>
            <!-- Swiper -->
            <div class="mt-10 mb-10 swiper testimonial-swiper testimonialFade-sides ">
                <div class="h-full swiper-wrapper">
                    @php
                    $testimonials = [
                    ['name' => 'Aulia Rahman', 'jobs' => 'Mahasiswa', 'image' => 'https://i.pravatar.cc/150?u=aulia',
                    'comment' => 'Kostnya bersih banget dan fasilitasnya lengkap. WiFi kenceng, jadi nugas lancar.
                    Lokasinya
                    juga deket banget sama kampus, hemat waktu dan ongkos.', 'rating' => 5],
                    ['name' => 'Bima Saputra', 'jobs' => 'Karyawan Swasta', 'image' =>
                    'https://i.pravatar.cc/150?u=bima',
                    'comment' => 'Akses 24 jam bener-bener ngebantu buat yang pulangnya malem. Lingkungannya aman dan
                    tenang, cocok buat istirahat setelah seharian kerja. Recommended!', 'rating' => 5],
                    ['name' => 'Citra Lestari', 'jobs' => 'Mahasiswi', 'image' => 'https://i.pravatar.cc/150?u=citra',
                    'comment' => 'Suka banget sama dapurnya, bersih dan peralatannya lengkap. Ibu kostnya juga ramah dan
                    fast response kalau ada masalah. Betah banget di sini!', 'rating' => 5],
                    ['name' => 'Doni Setiawan', 'jobs' => 'Freelancer', 'image' => 'https://i.pravatar.cc/150?u=doni',
                    'comment' => 'Tempatnya nyaman buat kerja dari kost. Suasananya tenang dan inspiratif. Parkirannya
                    juga
                    luas, jadi nggak khawatir soal kendaraan.', 'rating' => 4],
                    ['name' => 'Eka Putri', 'jobs' => 'Mahasiswi', 'image' => 'https://i.pravatar.cc/150?u=eka',
                    'comment'
                    => 'Kamar mandinya bersih dan airnya lancar. Harganya juga worth it banget dengan semua fasilitas
                    yang
                    didapat. Nggak nyesel pilih YellowKost.', 'rating' => 5],
                    ];
                    @endphp
                    @foreach ($testimonials as $testimonial)
                    <div class="flex h-auto swiper-slide">
                        <div class="flex flex-col w-full h-full p-6 bg-white border border-gray-200 rounded-2xl">
                            <div class="flex-grow">
                                <span class="relative block text-gray-600">
                                    <svg class="w-10 h-10 text-gray-300" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path
                                            d="M96 280C96 213.7 149.7 160 216 160L224 160C241.7 160 256 174.3 256 192C256 209.7 241.7 224 224 224L216 224C185.1 224 160 249.1 160 280L160 288L224 288C259.3 288 288 316.7 288 352L288 416C288 451.3 259.3 480 224 480L160 480C124.7 480 96 451.3 96 416L96 280zM352 280C352 213.7 405.7 160 472 160L480 160C497.7 160 512 174.3 512 192C512 209.7 497.7 224 480 224L472 224C441.1 224 416 249.1 416 280L416 288L480 288C515.3 288 544 316.7 544 352L544 416C544 451.3 515.3 480 480 480L416 480C380.7 480 352 451.3 352 416L352 280z" />
                                    </svg>
                                    {{ $testimonial['comment'] }}
                                </span>
                            </div>
                            <div class="flex flex-col items-center mt-6">
                                {{-- <img class="object-cover rounded-full" src="{{ $testimonial['image'] }}"
                                    alt="{{ $testimonial['name'] }}"> --}}
                                <div class="flex flex-col items-center h-full">
                                    <div class="flex items-center mb-4">
                                        @for ($i = 0; $i < 5; $i++) <svg
                                            class="w-5 h-5 {{ $i < $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-300' }}"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.27l-6.18 3.6 1.18-6.88L2 9.27l6.91-1.01L12 2z" />
                                            </svg>
                                            @endfor
                                    </div>
                                    <span class="font-semibold text-gray-800">{{ $testimonial['name'] }}</span>
                                    <span class="text-sm text-gray-500">{{ $testimonial['jobs'] }}</span>
                                </div>
                            </div>
                            <div class="absolute bg-red "></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section id="kontak" class="py-16 mx-6">
    <div class="container mx-auto max-w-7xl">
        <div class="mb-12 text-center">
            <h2 class="text-4xl font-bold text-gray-900 md:text-5xl">
                Lokasi & <span class="text-yellow-500">Kontak</span>
            </h2>
            <p class="mt-4 text-gray-500 ">
                Kunjungi lokasi kami atau hubungi admin untuk informasi ketersediaan kamar.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-6">
            <div class="flex flex-col justify-start space-y-6">
                <div class="flex items-start p-6 transition-transform duration-300 bg-gray-800 rounded-2xl">
                    <div class="flex-shrink-0">
                        <span
                            class="inline-flex items-center justify-center w-12 h-12 text-yellow-500 bg-yellow-900/30 rounded-xl ">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-lg font-bold text-white ">Alamat Lengkap</h3>
                        <p class="mt-2 text-gray-400">
                            Perum Griya Mangli Indah No. AG 22,<br>
                            Wonosari, Mangli, Kec. Kaliwates,<br>
                            Kabupaten Jember, Jawa Timur.
                        </p>
                        <a href="https://maps.google.com/?q=Rumah+Kost+Yellow+Partners+Jember" target="_blank"
                            class="inline-block mt-3 text-sm font-medium text-yellow-600 hover:text-yellow-500 hover:underline">
                            Buka di Google Maps &rarr;
                        </a>
                    </div>
                </div>

                <div class="flex items-start p-6 transition-transform duration-300 bg-gray-800 rounded-2xl">
                    <div class="flex-shrink-0">
                        <span
                            class="inline-flex items-center justify-center w-12 h-12 text-yellow-500 bg-yellow-900/30 rounded-xl ">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-lg font-bold text-white">Hubungi Admin</h3>
                        <p class="mt-2 text-gray-400">
                            Ingin survey lokasi atau booking kamar?
                            <br>
                            Hubungi kami via WhatsApp.
                        </p>
                        <button onclick="surveyWA()"
                            class="flex items-center gap-2 px-4 py-2 mt-4 text-sm font-medium text-white transition-colors bg-green-600 rounded-lg hover:bg-green-700">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                            Chat WhatsApp
                        </button>
                    </div>
                </div>
                <div
                    class="flex items-start h-full p-6 transition-transform bg-gray-800 border border-gray-700 rounded-2xl">
                    <div class="flex-shrink-0">
                        <span
                            class="inline-flex items-center justify-center w-12 h-12 text-yellow-500 rounded-xl bg-yellow-900/30">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-lg font-bold text-white">Jam Operasional</h3>
                        <div class="mt-2 space-y-1 text-gray-400">
                            <div class="grid w-full grid-cols-2 gap-3">
                                <span>Layanan Admin:</span>
                                <span class="font-medium text-white">08.00 - 20.00</span>
                            </div>
                            <div class="grid w-full grid-cols-2 gap-3">
                                <span>Akses Penghuni:</span>
                                <span class="font-medium text-green-600">24 Jam</span>
                            </div>
                            <div class="grid w-full grid-cols-2 gap-3">
                                <span>Hari Besar:</span>
                                <span class="font-medium text-gray-400">Harap konsultasikan kepihak
                                    pengelolah untuk janji temu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative w-full min-h-[600px] rounded-2xl overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.23112287711!2d113.6400199748866!3d-8.17989599185013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6910059ab683f%3A0xb67df6d404026d30!2sPerum%20Griya%20Mangli%20Indah%20No.AG%2022!5e0!3m2!1sid!2sid!4v1717057312345!5m2!1sid!2sid"
                    class="w-full h-[calc(100%+500px)] -mt-[180px]" style="border:0;" allowfullscreen="none"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div
                    class="absolute px-4 py-2 text-xs font-semibold text-gray-800 border border-gray-100 rounded-full pointer-events-none bottom-4 left-4 bg-white/10 backdrop-blur-sm drop-shadow-md [text-shadow:_0_1px_10px_rgba(0,0,0,0.6)]">
                    <div class="flex flex-row items-center justify-center gap-2 algin">
                        <svg class="w-5 h-5 text-red-800 [text-shadow:_0_1px_10px_rgba(0,0,0,0.6)]" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>
                            YellowKost Area
                        </span>
                    </div>
                </div>
                <div
                    class="absolute p-5 transition-transform transform translate-y-0 border border-gray-200 shadow-2xl top-4 left-4 right-4 md:left-4 md:right-auto md:w-80 bg-white/20 backdrop-blur-sm rounded-xl">
                    <div class="flex items-start justify-between">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 [text-shadow:_0_1px_16px_rgba(0,0,0,0.6)]">
                                YellowKost & Partner</h3>
                            <p class="text-xs leading-4 text-gray-800 [text-shadow:_0_1px_16px_rgba(0,0,0,0.6)] py-3">
                                Perum
                                Griya Mangli Indah No. AG 22,
                                Wonosari, Mangli, Kec. Kaliwates,
                                Kabupaten Jember, Jawa Timur. </p>
                        </div>
                        <div
                            class="bg-yellow-500 p-1.5 rounded-lg text-black shadow-lg [text-shadow:_0_1px_16px_rgba(0,0,0,0.6)]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center mt-3 mb-4">
                        <span
                            class="text-sm font-bold text-yellow-600 [text-shadow:_0_1px_16px_rgba(0,0,0,0.6)]">4.9</span>
                        <div class="flex mx-2 text-yellow-600 [text-shadow:_0_1px_16px_rgba(0,0,0,0.6)]">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        {{-- <span class="text-xs text-gray-400">(120 Ulasan)</span> --}}
                    </div>
                    <a href="https://maps.app.goo.gl/En63A3Q37W7aBnRH6" target="_blank"
                        class="block w-full py-2 text-sm font-semibold text-center text-black transition-colors bg-yellow-500 rounded-lg hover:bg-yellow-400 shadown-lg">
                        Buka di Google Maps
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- FAQ Section -->
<section id="faq-section" class="py-16">
    <div class="p-6 pb-20">
        <div class="mx-auto max-w-7xl md:p-0">
            <div class="flex flex-col items-center justify-center py-8 text-gray-800">
                <h1 class="text-4xl font-bold text-center md:text-5xl">Pertanyaan Sering Diajukan
                    <span class="text-yellow-400">(FAQ)</span>
                </h1>
                <p class="max-w-xl my-4 text-center text-gray-500">
                    Temukan jawaban cepat untuk pertanyaan umum tentang YellowKost.
                </p>
            </div>
            @php
            $faqs = [
            ['id' => 'Harga Sewa',
            'question' => 'Apakah harga sewa sudah termasuk listrik?',
            'answer' => 'Tidak. Harga
            sewa belum termasuk biaya listrik. Setiap kamar menggunakan meteran listrik sistem token (prabayar) dengan
            daya 900 Watt yang diisi mandiri oleh penghuni.'],
            ['id' => 'Fasilitas',
            'question' => 'Apakah harga sewa sudah termasuk air dan Wi-Fi?',
            'answer' => 'Ya,
            biaya sewa sudah termasuk pemakaian air bersih dan akses internet (Wi-Fi) gratis.'],
            ['id' => 'Fasilitas Kamar',
            'question' => 'Apa saja fasilitas yang ada di dalam kamar?',
            'answer' => 'Setiap kamar sudah full furnished, dilengkapi dengan kasur (springbed), lemari pakaian, meja
            belajar, kursi, dan gorden.'],
            ['id' => 'Fasilitas Dapum',
            'question' => 'Apakah tersedia dapur umum?',
            'answer' => 'Ya, kami menyediakan dapur bersama yang dilengkapi dengan kompor dan wastafel cuci piring.
            Tersedia juga kulkas umum untuk menyimpan makanan/minuman.'],
            ['id' => 'Fasilitas Parkir',
            'question' => 'Bagaimana dengan area parkir?',
            'answer' => 'Kami menyediakan area parkir motor yang luas dan berkanopi (teduh), serta area parkir mobil
            yang aman di dalam lingkungan perumahan.'],
            ['id' => 'Hewan Peliharaan',
            'question' => 'Apakah boleh membawa hewan peliharaan (kucing/anjing)?',
            'answer' => 'Mohon maaf, demi kenyamanan dan kebersihan bersama, penghuni dilarang membawa hewan peliharaan
            jenis apapun ke dalam lingkungan kost.'],
            ['id' => 'Jam Malam',
            'question' => 'Apakah kost ini bebas jam malam?',
            'answer' => 'Penghuni yang memegang kunci gerbang memiliki akses 24 jam. Namun, kami menghimbau agar tetap
            menjaga ketenangan di atas pukul 22.00 WIB karena lokasi berada di dalam komplek perumahan warga.'],
            ['id' => 'Tamu Lawan Jenis',
            'question' => 'Apakah boleh menerima tamu lawan jenis di dalam kamar?',
            'answer' => 'Tidak diperbolehkan. Tamu lawan jenis hanya boleh diterima di ruang tamu/teras umum. Pintu
            kamar harus tetap terbuka jika ada tamu sesama jenis yang berkunjung.'],
            ['id' => 'Tamu Pasutri',
            'question' => 'Apakah pasangan suami istri (Pasutri) diperbolehkan menyewa?',
            'answer' => 'Ya, Pasutri diperbolehkan dengan syarat wajib menunjukkan Buku Nikah Asli atau sertifikat
            pernikahan resmi saat pendaftaran. Kami tidak menerima pasangan tanpa ikatan resmi.'],
            ['id' => 'Sistem Pembaayaran',
            'question' => 'Bagaimana sistem pembayarannya?',
            'answer' => 'Pembayaran sewa dilakukan di muka (setiap tanggal masuk/check-in). Pembayaran bisa dilakukan
            secara tunai atau transfer bank ke rekening pengelola dengan cara mengakses akun masing-masing melalui
            sistem yang ada di YellowKost & Partner.'],
            ['id' => 'Sistem Deposit',
            'question' => 'Apakah ada deposit atau uang jaminan?',
            'answer' => 'Ya, dikenakan uang deposit di awal masa sewa sebagai jaminan kerusakan atau tunggakan. Uang ini
            akan dikembalikan penuh saat check-out jika tidak ada masalah.'],
            ['id' => 'Anggota Baru',
            'question' => 'Apa saja syarat untuk menjadi penghuni baru?',
            'answer' => 'Calon penghuni wajib menyerahkan fotokopi KTP/Identitas diri yang masih berlaku dan nomor
            telepon keluarga yang bisa dihubungi (untuk keadaan darurat).'],
            ['id' => 'Lokasi Kos',
            'question' => 'Apakah lokasi kost jauh dari kampus/pusat kota?',
            'answer' => 'Lokasi kami sangat strategis di Perumahan Griya Mangli Indah. Dekat dengan Jember Roxy Square,
            Pasar Mangli, dan akses mudah menuju kampus UIN KHAS atau Unmuh Jember.'],
            ['id' => 'Keamanan Kos',
            'question' => 'Apakah lingkungan kost aman?',
            'answer' => 'Sangat aman. Karena berada di dalam komplek perumahan, lingkungan relatif tenang dan diawasi.
            Kami juga memasang CCTV 24 jam di beberapa titik area kost.'],

            ];
            @endphp
            <div id="faq-accordion" class="overflow-hidden border border-gray-900 rounded-xl">
                @foreach ($faqs as $index => $faq)
                <div class="border-b border-gray-900 last:border-b-0">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-900 transition-colors duration-300 focus:outline-none faq-btn {{ $index == 0 ? 'bg-yellow-500 text-gray-900  hover:bg-yellow-600' : '' }}"
                        onclick="toggleAccordion('faq-body-{{ $faq['id'] }}', this)">

                        <span class="font-bold text-gray-900">{{ $faq['question'] }}</span>

                        <svg class="w-4 h-4 shrink-0 transition-transform duration-300 {{ $index == 0 ? 'rotate-180 text-gray-900 ' : '' }}"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>

                    <div id="faq-body-{{ $faq['id'] }}"
                        class="overflow-hidden transition-[max-height] duration-500 ease-in-out "
                        style="max-height: {{ $index == 0 ? '1000px' : '0px' }}">
                        <div class="p-5 text-gray-700 border-t border-gray-200">
                            {{ $faq['answer'] }}
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    function toggleAccordion(targetId, button) {
        const content = document.getElementById(targetId);
        const icon = button.querySelector('svg');
        const isExpanded = content.style.maxHeight !== '0px';

        // 1. Tutup SEMUA accordion lain dulu (Opsional, biar rapih kayak accordion beneran)
        document.querySelectorAll('[id^="faq-body-"]').forEach(el => {
            el.style.maxHeight = '0px'; // Tutup konten
            // Reset style tombol lain
            const btn = el.parentElement.querySelector('button');
            if(btn) {
                btn.classList.remove('bg-yellow-500', 'text-white', 'hover:bg-yellow-600');
                btn.classList.add('bg-white');
                const icn = btn.querySelector('svg');
                if(icn) {
                    icn.classList.remove('rotate-180', 'text-white');
                }
            }
        });

        // 2. Jika yang diklik tadi tertutup, maka BUKA sekarang
        if (!isExpanded) {
            content.style.maxHeight = content.scrollHeight + "px"; // Set tinggi sesuai konten

            // Ubah style tombol jadi aktif
            button.classList.remove('bg-white');
            button.classList.add('bg-yellow-500', 'text-white', 'hover:bg-yellow-600');

            // Putar icon
            icon.classList.add('rotate-180', 'text-white');
        }
    }
</script>
@endpush

@extends('landingpage.index')
@section('content')
<section id="fasilitas" class="py-16 ">
    <div class="container px-6 mx-auto max-w-7xl lg:max-w-6xl">
        <div class="max-w-2xl mx-auto mb-16 text-center">
            <span
                class="inline-block px-3 py-1 mb-4 text-sm font-semibold text-yellow-900 border rounded-full bg-yellow-500/20 border-yellow-500/30">
                Fasilitas Unggulan
            </span>
            <h2 class="text-4xl font-bold text-gray-900 sm:text-5xl">
                Fasilitas <span class="text-yellow-500">Premium</span>
            </h2>
            <p class="mt-6 text-gray-500 text-md">
                Nikmati kenyamanan maksimal dengan fasilitas lengkap yang kami sediakan khusus untuk menunjang aktivitas
                dan istirahat Anda.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4">
            <div
                class="p-6 transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-xl hover:-translate-y-2 dark:bg-gray-800 dark:border-gray-700 group">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 mb-4 text-yellow-500 transition-colors duration-300 bg-yellow-100 rounded-lg dark:bg-yellow-900/30 group-hover:bg-yellow-500 group-hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path
                            d="M144 336C144 288.7 109.8 249.4 64.8 241.5C72 177.6 126.2 128 192 128L448 128C513.8 128 568 177.6 575.2 241.5C530.2 249.5 496 288.7 496 336L496 368L144 368L144 336zM0 448L0 336C0 309.5 21.5 288 48 288C74.5 288 96 309.5 96 336L96 416L544 416L544 336C544 309.5 565.5 288 592 288C618.5 288 640 309.5 640 336L640 448C640 483.3 611.3 512 576 512L64 512C28.7 512 0 483.3 0 448z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Full Furnished</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Kamar siap huni dengan kasur springbed, lemari pakaian, dan meja belajar yang nyaman.
                </p>
            </div>
            <div
                class="p-6 transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-xl hover:-translate-y-2 dark:bg-gray-800 dark:border-gray-700 group">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 mb-4 text-yellow-500 transition-colors duration-300 bg-yellow-100 rounded-lg dark:bg-yellow-900/30 group-hover:bg-yellow-500 group-hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path
                            d="M547.9 304L528 304L528 448C528 483.3 499.3 512 464 512L327 512C303 420.3 233.5 347 144 317.7L144 304L124.1 304C108.6 304 96 291.4 96 275.9C96 268.3 99.1 261 104.6 255.7L308.5 59.1C315.9 52 325.7 48 336 48C346.3 48 356.1 52 363.5 59.1L567.4 255.7C572.9 261 576 268.3 576 275.9C576 291.4 563.4 304 547.9 304zM312 256C298.7 256 288 266.7 288 280L288 328C288 341.3 298.7 352 312 352L360 352C373.3 352 384 341.3 384 328L384 280C384 266.7 373.3 256 360 256L312 256zM56 352C184.1 352 288 455.9 288 584C288 597.3 277.3 608 264 608C250.7 608 240 597.3 240 584C240 482.4 157.6 400 56 400C42.7 400 32 389.3 32 376C32 362.7 42.7 352 56 352zM64 544C81.7 544 96 558.3 96 576C96 593.7 81.7 608 64 608C46.3 608 32 593.7 32 576C32 558.3 46.3 544 64 544zM32 472C32 458.7 42.7 448 56 448C131.1 448 192 508.9 192 584C192 597.3 181.3 608 168 608C154.7 608 144 597.3 144 584C144 535.4 104.6 496 56 496C42.7 496 32 485.3 32 472z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Free Wi-Fi</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Koneksi internet cepat dan stabil untuk menunjang tugas kuliah atau WFH Anda.
                </p>
            </div>
            <div
                class="p-6 transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-xl hover:-translate-y-2 dark:bg-gray-800 dark:border-gray-700 group">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 mb-4 text-yellow-500 transition-colors duration-300 bg-yellow-100 rounded-lg dark:bg-yellow-900/30 group-hover:bg-yellow-500 group-hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path
                            d="M224 208C224 128.5 288.5 64 368 64C376.8 64 384 71.2 384 80L384 232.2C399 226.9 415.2 224 432 224C511.5 224 576 288.5 576 368C576 376.8 568.8 384 560 384L407.8 384C413.1 399 416 415.2 416 432C416 511.5 351.5 576 272 576C263.2 576 256 568.8 256 560L256 407.8C241 413.1 224.8 416 208 416C128.5 416 64 351.5 64 272C64 263.2 71.2 256 80 256L232.2 256C226.9 241 224 224.8 224 208zM320 352C337.7 352 352 337.7 352 320C352 302.3 337.7 288 320 288C302.3 288 288 302.3 288 320C288 337.7 302.3 352 320 352z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">AC & Non-AC</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Tersedia pilihan tipe kamar ber-AC atau Non-AC (Kipas) sesuai dengan kebutuhan budget Anda.
                </p>
            </div>
            <div
                class="p-6 transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-xl hover:-translate-y-2 dark:bg-gray-800 dark:border-gray-700 group">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 mb-4 text-yellow-500 transition-colors duration-300 bg-yellow-100 rounded-lg dark:bg-yellow-900/30 group-hover:bg-yellow-500 group-hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path
                            d="M160 141.3C160 134 165.9 128 173.3 128C176.8 128 180.2 129.4 182.7 131.9L197.6 146.8C194 155.9 192.1 165.7 192.1 176C192.1 195.9 199.3 214 211.3 228C206 237.2 207.3 249.1 215.1 257C224.5 266.4 239.7 266.4 249 257L353 153C362.4 143.6 362.4 128.4 353 119.1C345.2 111.2 333.2 110 324 115.3C310 103.3 291.9 96.1 272 96.1C261.7 96.1 251.8 98.1 242.8 101.6L227.9 86.6C213.4 72.1 193.7 64 173.3 64C130.6 64 96 98.6 96 141.3L96 320C78.3 320 64 334.3 64 352C64 369.7 78.3 384 96 384L96 432C96 460.4 108.4 486 128 503.6L128 544C128 561.7 142.3 576 160 576C177.7 576 192 561.7 192 544L192 528L448 528L448 544C448 561.7 462.3 576 480 576C497.7 576 512 561.7 512 544L512 503.6C531.6 486 544 460.5 544 432L544 384C561.7 384 576 369.7 576 352C576 334.3 561.7 320 544 320L160 320L160 141.3z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Kamar Mandi</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Opsi kamar mandi dalam atau luar yang bersih, dilengkapi shower dan closet duduk/jongkok.
                </p>
            </div>
            <div
                class="p-6 transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-xl hover:-translate-y-2 dark:bg-gray-800 dark:border-gray-700 group">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 mb-4 text-yellow-500 transition-colors duration-300 bg-yellow-100 rounded-lg dark:bg-yellow-900/30 group-hover:bg-yellow-500 group-hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path
                            d="M272 208C272 155 229 112 176 112C123 112 80 155 80 208C80 261 123 304 176 304C229 304 272 261 272 208zM316.4 240C301.9 304.1 244.5 352 176 352C96.5 352 32 287.5 32 208C32 128.5 96.5 64 176 64C244.5 64 301.9 111.9 316.4 176L388.2 176C397 166.2 409.8 160 424 160L528 160C554.5 160 576 181.5 576 208C576 234.5 554.5 256 528 256L424 256C409.8 256 397 249.8 388.2 240L316.4 240zM176 144C211.3 144 240 172.7 240 208C240 243.3 211.3 272 176 272C140.7 272 112 243.3 112 208C112 172.7 140.7 144 176 144zM432 304C445.3 304 456 314.7 456 328L456 336L552 336C565.3 336 576 346.7 576 360C576 373.3 565.3 384 552 384L312 384C298.7 384 288 373.3 288 360C288 346.7 298.7 336 312 336L408 336L408 328C408 314.7 418.7 304 432 304zM320 528L320 416L544 416L544 528C544 554.5 522.5 576 496 576L368 576C341.5 576 320 554.5 320 528zM80 384L208 384C234.5 384 256 405.5 256 432C256 458.5 234.5 480 208 480L192 480C192 497.7 177.7 512 160 512L96 512C78.3 512 64 497.7 64 480L64 400C64 391.2 71.2 384 80 384zM208 448C216.8 448 224 440.8 224 432C224 423.2 216.8 416 208 416L192 416L192 448L208 448zM56 528L232 528C245.3 528 256 538.7 256 552C256 565.3 245.3 576 232 576L56 576C42.7 576 32 565.3 32 552C32 538.7 42.7 528 56 528z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Dapur & Kulkas</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Tersedia dapur umum, kompor, dan kulkas bersama untuk menyimpan stok makanan.
                </p>
            </div>
            <div
                class="p-6 transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-xl hover:-translate-y-2 dark:bg-gray-800 dark:border-gray-700 group">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 mb-4 text-yellow-500 transition-colors duration-300 bg-yellow-100 rounded-lg dark:bg-yellow-900/30 group-hover:bg-yellow-500 group-hover:text-white">
                    <svg class="w-10 h-10" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path
                            d="M160 96C124.7 96 96 124.7 96 160L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 160C544 124.7 515.3 96 480 96L160 96zM288 320L336 320C353.7 320 368 305.7 368 288C368 270.3 353.7 256 336 256L288 256L288 320zM336 384L288 384L288 416C288 433.7 273.7 448 256 448C238.3 448 224 433.7 224 416L224 232C224 209.9 241.9 192 264 192L336 192C389 192 432 235 432 288C432 341 389 384 336 384z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Parkir Aman</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Area parkir motor berkanopi dan akses parkir mobil di dalam perumahan yang aman.
                </p>
            </div>
            <div
                class="p-6 transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-xl hover:-translate-y-2 dark:bg-gray-800 dark:border-gray-700 group">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 mb-4 text-yellow-500 transition-colors duration-300 bg-yellow-100 rounded-lg dark:bg-yellow-900/30 group-hover:bg-yellow-500 group-hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path
                            d="M128 64C92.7 64 64 92.7 64 128L64 512C64 547.3 92.7 576 128 576L329.2 576C316.7 561.3 306 545.2 297.4 528L207.9 528L207.9 448C207.9 430.3 222.2 416 239.9 416L271.9 416L271.9 389.3C271.9 371.2 278 354.1 288.5 340.5C288.1 339.1 287.9 337.6 287.9 336L287.9 304C287.9 295.2 295.1 288 303.9 288L335.9 288C344.7 288 351.9 295.2 351.9 304L351.9 305L438.6 276.1C441.7 275.1 444.8 274.3 447.9 273.6L448 128C448 92.7 419.3 64 384 64L128 64zM160 176C160 167.2 167.2 160 176 160L208 160C216.8 160 224 167.2 224 176L224 208C224 216.8 216.8 224 208 224L176 224C167.2 224 160 216.8 160 208L160 176zM304 160L336 160C344.8 160 352 167.2 352 176L352 208C352 216.8 344.8 224 336 224L304 224C295.2 224 288 216.8 288 208L288 176C288 167.2 295.2 160 304 160zM160 304C160 295.2 167.2 288 176 288L208 288C216.8 288 224 295.2 224 304L224 336C224 344.8 216.8 352 208 352L176 352C167.2 352 160 344.8 160 336L160 304zM477.3 552.5L464 558.8L464 370.7L560 402.7L560 422.3C560 478.1 527.8 528.8 477.3 552.6zM453.9 323.5L341.9 360.8C328.8 365.2 320 377.4 320 391.2L320 422.3C320 496.7 363 564.4 430.2 596L448.7 604.7C453.5 606.9 458.7 608.1 463.9 608.1C469.1 608.1 474.4 606.9 479.1 604.7L497.6 596C565 564.3 608 496.6 608 422.2L608 391.1C608 377.3 599.2 365.1 586.1 360.7L474.1 323.4C467.5 321.2 460.4 321.2 453.9 323.4z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">CCTV 24 Jam</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Keamanan terpantau CCTV 24 jam di berbagai titik untuk ketenangan penghuni.
                </p>
            </div>
            <div
                class="p-6 transition-all duration-300 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-xl hover:-translate-y-2 dark:bg-gray-800 dark:border-gray-700 group">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 mb-4 text-yellow-500 transition-colors duration-300 bg-yellow-100 rounded-lg dark:bg-yellow-900/30 group-hover:bg-yellow-500 group-hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path
                            d="M341.8 72.6C329.5 61.2 310.5 61.2 298.3 72.6L74.3 280.6C64.7 289.6 61.5 303.5 66.3 315.7C71.1 327.9 82.8 336 96 336L112 336L112 512C112 547.3 140.7 576 176 576L464 576C499.3 576 528 547.3 528 512L528 336L544 336C557.2 336 569 327.9 573.8 315.7C578.6 303.5 575.4 289.5 565.8 280.6L341.8 72.6zM304 384L336 384C362.5 384 384 405.5 384 432L384 528L256 528L256 432C256 405.5 277.5 384 304 384z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Lingkungan Asri</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Berada di dalam Griya Mangli Indah yang bebas bising dan bebas banjir.
                </p>
            </div>
        </div>
        @include('landingpage._ctaFormulir')
    </div>
</section>
@endsection
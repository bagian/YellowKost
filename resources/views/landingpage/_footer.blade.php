<!-- Footer -->
<footer class="bg-gray-900">
    <div class="container px-6 py-12 mx-auto lg:py-16 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-4">
            <div>
                <span
                    class="flex items-center self-center gap-2 text-2xl font-semibold whitespace-nowrap dark:text-yellow-500">
                    <span class="bg-[#f3c610] p-2 rounded-xl">
                        <svg class="w-8 h-8 text-yellow-100" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 140 140.00201412747876">
                            <g transform="translate(-15.712888556813203, -15.710884238396837) scale(1.7142579019237627)"
                                class="css-1mun45u" fill="currentColor">
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M86.834,90.834H33.166c-2.209,0-4-1.791-4-4V61.5c0-1.013,0.384-1.988,1.076-2.729l28.06-30.066l-8.326-9.499   l-32.81,36.819v30.809c0,2.209-1.791,4-4,4s-4-1.791-4-4V54.502c0-0.981,0.361-1.929,1.014-2.661l36.834-41.336   c0.763-0.856,1.816-1.368,3.002-1.339c1.147,0.005,2.236,0.501,2.992,1.363l36.834,42.02c0.64,0.729,0.992,1.667,0.992,2.637   v31.648C90.834,89.043,89.043,90.834,86.834,90.834z M37.166,82.834h45.668V56.69L63.602,34.75L37.166,63.076V82.834z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </span>
                    YellowKost
                </span>
                <p class="max-w-xs mt-4 text-sm text-gray-400">
                    Hunian modern, nyaman, dan terjangkau di pusat kota.
                </p>
            </div>
            <div class="col-span-2 py-6 xl:py-0">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-3">
                    <div>
                        <h3 class="font-semibold tracking-wider text-white uppercase">Jelajahi</h3>
                        <ul class="mt-4 space-y-2">
                            <li><a href="#fasilitas"
                                    class="text-gray-400 transition-colors hover:text-yellow-400">Fasilitas</a>
                            </li>
                            <li><a href="#" class="text-gray-400 transition-colors hover:text-yellow-400">Galeri</a>
                            </li>
                            <li><a href="#" class="text-gray-400 transition-colors hover:text-yellow-400">Tipe
                                    Kamar</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold tracking-wider text-white uppercase">Perusahaan</h3>
                        <ul class="mt-4 space-y-2">
                            <li><a href="#" class="text-gray-400 transition-colors hover:text-yellow-400">Tentang
                                    Kami</a></li>
                            <li><a href="#" class="text-gray-400 transition-colors hover:text-yellow-400">Blog</a>
                            </li>
                            <li><a href="#" class="text-gray-400 transition-colors hover:text-yellow-400">Kontak</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold tracking-wider text-white uppercase">Legal</h3>
                        <ul class="mt-4 space-y-2">
                            <li><a href="#" class="text-gray-400 transition-colors hover:text-yellow-400">Syarat
                                    &
                                    Ketentuan</a></li>
                            <li><a href="#" class="text-gray-400 transition-colors hover:text-yellow-400">Kebijakan
                                    Privasi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-full col-span-2 sm:col-span-1">
                <h3 class="font-semibold tracking-wider text-white uppercase">Langganan Info Promo</h3>
                <p class="mt-4 text-sm text-gray-400">Dapatkan penawaran dan promo terbaru langsung di email
                    Anda.
                </p>
                <form id="newsletter-form" class="w-full mt-4" action="{{ route('newsletter.subscribe') }}"
                    method="POST">
                    @csrf
                    <div class="flex flex-col w-full space-y-6 sm:space-y-0 sm:flex-row sm:items-center">
                        <input id="newsletter-email" name="email" type="email"
                            class="w-full px-4 py-2 text-gray-300 bg-gray-800 border border-gray-700 rounded-md focus:border-yellow-400 focus:ring-yellow-300 focus:ring-opacity-40 focus:outline-none focus:ring"
                            placeholder="Alamat Email" required>
                        <button type="submit"
                            class="w-full px-4 py-2 text-sm font-medium tracking-wide text-black transition-colors duration-300 transform bg-yellow-400 rounded-md sm:w-auto sm:mx-4 hover:bg-yellow-500 focus:outline-none focus:ring focus:ring-yellow-300 focus:ring-opacity-80">
                            Langganan
                        </button>
                    </div>
                </form>
                <div id="newsletter-message" class="mt-2 text-sm"></div>
            </div>
        </div>
        <hr class="my-8 border-gray-800">
        <div class="flex flex-col items-center justify-between sm:flex-row">
            <p class="text-sm text-gray-400">© Copyright {{ date('Y') }}. All Rights Reserved.</p>
            <div class="flex mt-4 -mx-2 sm:mt-0">
                <a href="https://www.tiktok.com/@yellow_434_kostan" target="_blank"
                    class="mx-2 text-gray-400 transition-colors duration-300 hover:text-yellow-400" aria-label="Tiktok">
                    <i class="fa-brands fa-tiktok fa-lg"></i>
                </a>
                <a href="https://www.instagram.com/yellow_434_kostpartners/" target="_blank"
                    class="mx-2 text-gray-400 transition-colors duration-300 hover:text-yellow-400"
                    aria-label="Instagram">
                    <i class="fa-brands fa-instagram fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
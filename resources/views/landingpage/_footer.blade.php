<!-- Footer -->
<footer class="bg-gray-900">
    <div class="container px-6 py-12 mx-auto lg:py-16 max-w-7xl">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">
            <div>
                <h1 class="text-2xl font-bold text-yellow-400">YellowKost</h1>
                <p class="max-w-xs mt-4 text-sm text-gray-400">
                    Hunian modern, nyaman, dan terjangkau di pusat kota.
                </p>
            </div>
            <div class="col-span-2">
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
            <div>
                <h3 class="font-semibold tracking-wider text-white uppercase">Langganan Info Promo</h3>
                <p class="mt-4 text-sm text-gray-400">Dapatkan penawaran dan promo terbaru langsung di email
                    Anda.
                </p>
                <form id="newsletter-form" class="mt-4" action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <div class="flex flex-col space-y-3 sm:space-y-0 sm:flex-row sm:items-center w-full">
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
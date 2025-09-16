<!-- Navbar -->
<nav class="fixed top-0 z-20 w-full bg-[#fef3c8] start-0 border-b border-[#f4e9bc]">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-yellow-500">YellowKost</span>
        </a>
        <div class="flex space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
            <div class="flex gap-2">
                <button type="button"
                    class="hidden px-4 py-2 text-sm font-medium text-center text-white bg-[#E7B008]  hover:bg-[#ffc003] rounded-full focus:ring-4 focus:outline-none lg:block transition-all duration-300 ease-in-out">Pesan
                    Sekarang</button>
                <a href="{{ route('login') }}"
                    class="flex px-5 py-1.5 dark:text-[#121212] text-[#1b1b18] border border-yellow-700 hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 text-sm leading-normal rounded-full items-center justify-center">
                    Log in
                </a>
            </div>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-black transition-all duration-300 ease-in-out rounded-lg md:hidden hover:bg-yellow-600 hover:text-white focus:outline-none"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 mt-4 font-medium md:p-0 md:space-x-2 rtl:space-x-reverse md:flex-row md:mt-0 border-t border-[#f4e9bc] md:border-none">
                <li>
                    <a href="/"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm md:bg-transparent hover:text-[#E7B008]"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm md:bg-transparent hover:text-[#E7B008]"
                        aria-current="page">Tentang</a>
                </li>
                <li>
                    <a href="#fasilitas"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm md:bg-transparent hover:text-[#E7B008]"
                        aria-current="page">Fasilitas</a>
                </li>
                <li>
                    <a href="#gallery"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm md:bg-transparent hover:text-[#E7B008]"
                        aria-current="page">Gallery</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm md:bg-transparent hover:text-[#E7B008]"
                        aria-current="page">Kontak</a>
                </li>
                <button type="button"
                    class="block px-4 py-2 text-sm font-medium text-center text-white bg-[#E7B008]  hover:bg-[#c69606] rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600  dark:focus:ring-blue-800 md:hidden">Pesan
                    Sekarang</button>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<!-- Navbar -->
<nav class="fixed top-0 z-20 w-full bg-[#f9edbd] start-0 border-b border-[#e7dcb1] drop-shadow-sm">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <div
                class="flex items-center self-center gap-2 text-2xl font-semibold whitespace-nowrap dark:text-yellow-500">
                <span class="bg-[#f3c610] p-2 rounded-xl">
                    <svg class="w-6 h-6 text-yellow-100 md:w-8 md:h-8" xmlns="http://www.w3.org/2000/svg"
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
                <span class="md:text-2xl text-md">
                    YellowKost
                </span>
            </div>
        </a>
        <div class="flex gap-2 space-x-2 lg:order-2 md:space-x-0 rtl:space-x-reverse">
            <div class="flex flex-row gap-2">
                <a href="#"
                    class="hidden text-black bg-gradient-to-r from-yellow-200 via-yellow-400 to-yellow-400 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:opacity-50 md:block transition-all duration-300 ease-in-out border border-yellow-300">
                    Pesan Sekarang
                </a>
                @guest
                <a href="{{ route('login') }}"
                    class="flex px-6 py-1 dark:text-[#121212] text-[#1b1b18] border border-yellow-700 hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 text-sm leading-normal rounded-full items-center justify-center">
                    Log in
                </a>
                @endguest
                @auth
                <a href="{{ route('dashboard') }}"
                    class="flex px-3 py-1 dark:text-[#121212] text-[#1b1b18] border border-yellow-700 hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 md:text-sm text-[0.75rem] leading-normal rounded-full items-center justify-center">
                    My Dashboard
                </a>
                @endauth
            </div>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-black transition-all duration-300 ease-in-out rounded-lg lg:hidden hover:bg-yellow-600 hover:text-white focus:outline-none"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 mt-4 font-medium lg:p-0 lg:space-x-2 rtl:space-x-reverse lg:flex-row lg:mt-0 border-t border-[#f4e9bc] lg:border-none">
                <li>
                    <a href="/"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm lg:bg-transparent hover:text-[#E7B008]"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm lg:bg-transparent hover:text-[#E7B008]"
                        aria-current="page">Tentang</a>
                </li>
                <li>
                    <a href="#fasilitas"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm lg:bg-transparent hover:text-[#E7B008]">Fasilitas</a>
                </li>
                <li>
                    <a href="#gallery"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm lg:bg-transparent hover:text-[#E7B008]">Gallery</a>
                </li>
                <li>
                    <a href="#kontak"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm lg:bg-transparent hover:text-[#E7B008]">Kontak</a>
                </li>
                <a href="#"
                    class="block lg:hidden px-4 py-2 text-sm font-medium text-center text-white bg-[#E7B008]  hover:bg-[#ffc003] rounded-full focus:ring-4 focus:outline-none transition-all duration-300 ease-in-out mt-10">Pesan
                    Sekarang
                </a>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
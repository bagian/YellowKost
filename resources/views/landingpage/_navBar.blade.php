<!-- Navbar -->
{{-- <nav
    class="fixed top-0 z-50 w-full border-b bg-white/40 backdrop-blur-lg start-0 border-gray-100/20 drop-shadow-sm">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto lg:max-w-6xl xl:max-w-7xl">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <div class="flex items-center self-center gap-2 text-2xl font-semibold whitespace-nowrap">
                <span class="bg-[#f3c610] p-2 rounded-xl">
                    <svg class="w-6 h-6 text-yellow-100 md:w-8 md:h-8" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 140 140.00201412747876">
                        <g transform="translate(-15.712888556813203, -15.710884238396837) scale(1.7142579019237627)"
                            fill="currentColor">
                            <g xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M86.834,90.834H33.166c-2.209,0-4-1.791-4-4V61.5c0-1.013,0.384-1.988,1.076-2.729l28.06-30.066l-8.326-9.499 l-32.81,36.819v30.809c0,2.209-1.791,4-4,4s-4-1.791-4-4V54.502c0-0.981,0.361-1.929,1.014-2.661l36.834-41.336 c0.763-0.856,1.816-1.368,3.002-1.339c1.147,0.005,2.236,0.501,2.992,1.363l36.834,42.02c0.64,0.729,0.992,1.667,0.992,2.637 v31.648C90.834,89.043,89.043,90.834,86.834,90.834z M37.166,82.834h45.668V56.69L63.602,34.75L37.166,63.076V82.834z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </span>
                <span id="brand-text" class="md:text-2xl text-md text-[#E7B008] transition-colors duration-300">
                    YellowKost
                </span>
            </div>
        </a>
        <div class="flex gap-2 space-x-2 lg:order-2 md:space-x-0 rtl:space-x-reverse">
            <div class="flex flex-row gap-2">
                <a href="{{ route('booking.form') }}"
                    class="px-5 py-3  text-[#1d1d1d] bg-gray-900 hover:bg-gray-800 transition-all ease-in-out duration-300 text-sm leading-normal rounded-full items-center justify-center hidden md:flex">
                    <span class="font-semibold text-gray-200">
                        Pesan Sekarang
                    </span>
                </a>
                <div class="hidden md:block">
                    @guest
                    <a href="{{ route('login') }}"
                        class="flex px-8 py-3  border border-gray-900 hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 text-sm leading-normal rounded-full items-center justify-center">
                        <span class="font-semibold text-gray-800 [text-shadow:_0_1px_25px_rgba(0,0,0,0.6)]">
                            Masuk
                        </span>
                    </a>
                    @endguest
                    @auth
                    <a href="{{ route('dashboard') }}"
                        class="flex px-5 py-3 border border-[#ffbb00] hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 md:text-sm text-[0.75rem] leading-normal rounded-full items-center justify-center">
                        My Dashboard
                    </a>
                    @endauth
                </div>
            </div>
            <button id="navbar-toggle" data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex flex-col items-center justify-center w-10 h-10 p-2 text-sm transition-all duration-300 ease-in-out rounded-lg group lg:hidden"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <span id="line-1"
                    class="block w-6 h-0.5 bg-black rounded-full transition-all duration-300 ease-in-out group-hover:bg-gray-800 mb-1.5"></span>
                <span id="line-2"
                    class="block w-6 h-0.5 bg-black rounded-full transition-all duration-300 ease-in-out group-hover:bg-gray-800 mb-1.5"></span>
                <span id="line-3"
                    class="block w-6 h-0.5 bg-black rounded-full transition-all duration-300 ease-in-out group-hover:bg-gray-800"></span>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 mt-4 font-medium lg:p-0 lg:space-x-2 rtl:space-x-reverse lg:flex-row lg:mt-0 border-t border-[#f4e9bc] lg:border-none">
                <li>
                    <a href="/"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm lg:bg-transparent hover:text-yellow-900"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('about.us') }}"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm lg:bg-transparent hover:text-yellow-900"
                        aria-current="page">Tentang Kami</a>
                </li>
                <li>
                    <a href="{{ route('facilities') }}"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm lg:bg-transparent hover:text-yellow-900">Fasilitas</a>
                </li>
                <li>
                    <a href="{{ route('gallery') }}"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm lg:bg-transparent hover:text-yellow-900">Gallery</a>
                </li>
                <li>
                    <a href="{{ route('contact.us') }}"
                        class="block px-3 py-2 font-medium text-black transition-all duration-300 ease-in-out rounded-sm lg:bg-transparent hover:text-yellow-900">Kontak</a>
                </li>
                <li class="py-4">
                    <a href="{{ route('booking.form') }}"
                        class="px-5 py-3  text-[#1d1d1d] bg-yellow-400 hover:bg-[#ffbb00]  transition-all ease-in-out duration-300 text-sm leading-normal rounded-full items-center justify-center block md:hidden text-center">
                        Pesan Sekarang
                    </a>
                </li>
                <li class="block md:hidden">
                    @guest
                    <a href="{{ route('login') }}"
                        class="flex px-8 py-3 dark:text-[#121212] text-[#1b1b18] border border-[#ffbb00] hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 text-sm leading-normal rounded-full items-center justify-center">
                        Masuk
                    </a>
                    @endguest
                    @auth
                    <a href="{{ route('dashboard') }}"
                        class="flex px-5 py-3 dark:text-[#121212] text-[#1b1b18] border border-[#ffbb00] hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 md:text-sm text-[0.75rem] leading-normal rounded-full items-center justify-center">
                        My Dashboard
                    </a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav> --}}

<nav class="fixed top-0 z-50 w-full border-b bg-white/40 backdrop-blur-lg start-0 border-gray-100/20 drop-shadow-sm">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto lg:max-w-6xl xl:max-w-7xl ">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <div class="flex items-center self-center gap-2 text-2xl font-semibold whitespace-nowrap">
                <span class="bg-[#f3c610] p-2 rounded-xl">
                    <svg class="w-6 h-6 text-yellow-100 md:w-8 md:h-8" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 140 140.00201412747876">
                        <g transform="translate(-15.712888556813203, -15.710884238396837) scale(1.7142579019237627)"
                            fill="currentColor">
                            <g xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M86.834,90.834H33.166c-2.209,0-4-1.791-4-4V61.5c0-1.013,0.384-1.988,1.076-2.729l28.06-30.066l-8.326-9.499 l-32.81,36.819v30.809c0,2.209-1.791,4-4,4s-4-1.791-4-4V54.502c0-0.981,0.361-1.929,1.014-2.661l36.834-41.336 c0.763-0.856,1.816-1.368,3.002-1.339c1.147,0.005,2.236,0.501,2.992,1.363l36.834,42.02c0.64,0.729,0.992,1.667,0.992,2.637 v31.648C90.834,89.043,89.043,90.834,86.834,90.834z M37.166,82.834h45.668V56.69L63.602,34.75L37.166,63.076V82.834z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </span>
                <span id="brand-text" class="md:text-2xl text-md text-[#E7B008] transition-colors duration-300">
                    YellowKost
                </span>
            </div>
        </a>
        <div class="flex gap-2 space-x-2 lg:order-2 md:space-x-0 rtl:space-x-reverse">
            <div class="flex flex-row gap-2">
                <a href="{{ route('booking.form') }}"
                    class="px-5 py-3  text-[#1d1d1d] bg-gray-900 hover:bg-gray-800 transition-all ease-in-out duration-300 text-sm leading-normal rounded-full items-center justify-center hidden md:flex">
                    <span class="font-semibold text-gray-200">
                        Pesan Sekarang
                    </span>
                </a>
                <div class="hidden md:block">
                    @guest
                    <a href="{{ route('login') }}"
                        class="flex px-8 py-3  border border-gray-900 hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 text-sm leading-normal rounded-full items-center justify-center">
                        <span class="font-semibold text-gray-800 [text-shadow:_0_1px_25px_rgba(0,0,0,0.6)]">
                            Masuk
                        </span>
                    </a>
                    @endguest
                    @auth
                    <a href="{{ route('dashboard') }}"
                        class="flex px-5 py-3 border border-[#ffbb00] hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 md:text-sm text-[0.75rem] leading-normal rounded-full items-center justify-center">
                        My Dashboard
                    </a>
                    @endauth
                </div>
            </div>
            <button id="navbar-toggle" data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex flex-col items-center justify-center w-10 h-10 p-2 text-sm transition-all duration-300 ease-in-out rounded-lg group lg:hidden"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <span id="line-1"
                    class="block w-6 h-0.5 bg-black rounded-full transition-all duration-300 ease-in-out group-hover:bg-gray-800 mb-1.5"></span>
                <span id="line-2"
                    class="block w-6 h-0.5 bg-black rounded-full transition-all duration-300 ease-in-out group-hover:bg-gray-800 mb-1.5"></span>
                <span id="line-3"
                    class="block w-6 h-0.5 bg-black rounded-full transition-all duration-300 ease-in-out group-hover:bg-gray-800"></span>
            </button>
        </div>

        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1 drop-shadow-sm"
            id="navbar-sticky">
            <ul
                class="flex flex-col p-4 mt-4 font-medium lg:p-0 lg:space-x-2 rtl:space-x-reverse lg:flex-row lg:mt-0 border-t border-[#f4e9bc] lg:border-none">

                @php
                function getNavLinkClass($routeName) {
                $isActive = request()->routeIs($routeName);

                $classes = "relative block px-3 py-2 font-medium transition-all duration-300 ease-in-out rounded-sm
                lg:bg-transparent ";

                $classes .= "after:content-[''] after:absolute after:bg-[#E7B008] after:transition-all
                after:duration-300 ";

                if ($isActive) {

                $classes .= "text-yellow-600 " .
                "after:hidden lg:after:block " .
                "lg:after:w-1.5 lg:after:h-1.5 lg:after:rounded-full lg:after:-bottom-1 " .
                // Bentuk Dot
                "lg:after:left-1/2 lg:after:-translate-x-1/2"; // Posisi Center

                } else {
                // === INACTIVE STATE ===
                // Mobile & Desktop : Garis slide hover
                $classes .= "text-black hover:text-yellow-900 after:left-0 after:bottom-0 after:w-full after:h-[2px]
                after:scale-x-0 hover:after:scale-x-100 after:origin-center";
                }

                return $classes;
                }
                @endphp
                <li>
                    <a href="{{ route('home') }}" class="{{ getNavLinkClass('home') }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('about.us') }}" class="{{ getNavLinkClass('about.us') }}">
                        Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="{{ route('facilities') }}" class="{{ getNavLinkClass('facilities') }}">
                        Fasilitas
                    </a>
                </li>
                <li>
                    <a href="{{ route('gallery') }}" class="{{ getNavLinkClass('gallery') }}">
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact.us') }}" class="{{ getNavLinkClass('contact.us') }}">
                        Kontak
                    </a>
                </li>
                <li class="py-4 lg:hidden md:hidden">
                    <a href="{{ route('booking.form') }}"
                        class="px-5 py-3  text-[#1d1d1d] bg-yellow-400 hover:bg-[#ffbb00]  transition-all ease-in-out duration-300 text-sm leading-normal rounded-full items-center justify-center block md:hidden text-center">
                        Pesan Sekarang
                    </a>
                </li>
                <li class="block md:hidden">
                    @guest
                    <a href="{{ route('login') }}"
                        class="flex px-8 py-3 dark:text-[#121212] text-[#1b1b18] border border-[#ffbb00] hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 text-sm leading-normal rounded-full items-center justify-center">
                        Masuk
                    </a>
                    @endguest
                    @auth
                    <a href="{{ route('dashboard') }}"
                        class="flex px-5 py-3 dark:text-[#121212] text-[#1b1b18] border border-[#ffbb00] hover:bg-[#ffcc00] dark:hover:border-[#ffcc00] transition-all ease-in-out duration-300 md:text-sm text-[0.75rem] leading-normal rounded-full items-center justify-center">
                        My Dashboard
                    </a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
@push('scripts')
<script>
    const brandText = document.getElementById('brand-text');
    const navbar = document.querySelector('nav');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            brandText.classList.remove('text-[#E7B008]');
            brandText.classList.add('text-black');

            navbar.classList.remove('bg-white/30');
            navbar.classList.add('bg-white/10');
        } else {
            brandText.classList.remove('text-black');
            brandText.classList.add('text-[#E7B008]');

            navbar.classList.add('bg-white/60');
            navbar.classList.remove('bg-white/95');
        }
    });
</script>
<script>
    const navToggle = document.getElementById('navbar-toggle');
    const line1 = document.getElementById('line-1');
    const line2 = document.getElementById('line-2');
    const line3 = document.getElementById('line-3');
    let isMenuOpen = false;

    navToggle.addEventListener('click', function() {
        isMenuOpen = !isMenuOpen;

        if (isMenuOpen) {
            line1.classList.add('rotate-45', 'translate-y-2');
            line2.classList.add('opacity-0', '-translate-x-full');
            line3.classList.add('-rotate-45', '-translate-y-2');
        } else {
            line1.classList.remove('rotate-45', 'translate-y-2');
            line2.classList.remove('opacity-0', '-translate-x-full');
            line3.classList.remove('-rotate-45', '-translate-y-2');
        }
    });
</script>
@endpush
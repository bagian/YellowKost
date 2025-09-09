<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login YellowKost</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Theme initialization script to prevent FOUC -->
    {{-- <script src="{{ asset('js/components/themeInit.js') }}"></script> --}}

    <!-- Dark Mode Script -->
    <script src="{{ asset('js/components/darkMode.js') }}"></script>

    {{-- jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Styles / Scripts -->
    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="grid min-h-screen grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
        <div
            class="relative flex flex-col items-center justify-center w-full h-screen p-8 overflow-hidden bg-gray-900 md:flex-col">
            <div class="w-full p-6 m-3 bg-gray-800 rounded-lg lg:w-5/6">
                <span class="block py-6 my-4 text-white border-b border-gray-700">
                    <h1 class="text-2xl font-bold">Welcome Back.</h1>
                    <p class="text-xs text-gray-400">Sistem pemantauan kost berbasis website (YellowKost).</p>
                </span>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="my-10 mb-6">
                        <div class="relative z-0">
                            <input type="text" id="email" name="email" required
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer focus:bg-transparent important"
                                placeholder="" />
                            <label for="email"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email</label>
                        </div>
                        <p id="emailError" class="hidden mt-2 text-sm text-red-600 dark:text-red-500">
                            <span class="font-medium">Oops!</span> Email wajib diisi.
                        </p>
                    </div>
                    <div>
                        <div class="relative z-0">
                            <input type="password" id="password" name="password" required
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="password"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Password</label>
                            <!-- Eye Icon Button -->
                            <button type="button" id="togglePassword"
                                class="absolute text-gray-400 -translate-y-1/2 right-2 top-1/2 hover:text-gray-700 dark:hover:text-white">
                                <!-- Eye SVG (show) -->
                                <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <!-- Eye Off SVG (hide), hidden by default -->
                                <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" class="hidden w-5 h-5"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.293-3.95m3.362-2.568A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.973 9.973 0 01-4.043 5.306M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3l18 18" />
                                </svg>
                            </button>
                        </div>
                        <p id="passwordError" class="hidden mt-2 text-sm text-red-600 dark:text-red-500">
                            <span class="font-medium">Oops!</span> Password wajib diisi.
                        </p>
                    </div>
                    <div class="py-6">
                        <button type="submit"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 w-full">Login</button>
                    </div>
                    <div class="realtive">
                        <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">Lupa Password? <button
                                data-popover-target="popover-description" data-popover-placement="bottom-end"
                                type="button"><svg class="w-4 h-4 text-gray-400 ms-2 hover:text-gray-500"
                                    aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg><span class="sr-only">Show information</span></button></p>
                        <div data-popover id="popover-description" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <h3 class="font-semibold text-gray-900 dark:text-white">Info Lupa Password
                                </h3>
                                <p>Untuk bisa melakukan *lupa password segera <a href="https://wa.me/085174295981"
                                        target="_blank" class="text-blue-600 hover:underline dark:text-blue-500">Hubungi
                                        Super
                                        Admin!
                                    </a>
                                </p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="absolute bottom-0 p-6 text-xs text-center text-gray-400">
                <div class="flex items-center justify-center gap-4 mt-4">
                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@yellow_434_kostan" target="_blank"
                        class="flex items-center gap-2 px-4 py-2 text-sm font-semibold text-white transition bg-black rounded-lg hover:bg-gray-800">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 48 48">
                            <path
                                d="M41.5 17.5c-3.6 0-6.5-2.9-6.5-6.5V6h-6.5v27.5c0 2.1-1.7 3.8-3.8 3.8s-3.8-1.7-3.8-3.8 1.7-3.8 3.8-3.8c.7 0 1.3.2 1.9.5v-6.7c-.6-.1-1.3-.2-1.9-.2-5.8 0-10.5 4.7-10.5 10.5S18.2 44 24 44s10.5-4.7 10.5-10.5V20c1.9 1.2 4.1 2 6.5 2v-4.5z" />
                        </svg>
                        TikTok
                    </a>
                    <div class="h-5 border border-l border-gray-600 "></div>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/yellow_434_kostpartners/" target="_blank"
                        class="flex items-center gap-2 px-4 py-1.5 text-sm font-semibold text-white transition rounded-lg bg-gradient-to-tr from-pink-500 via-red-500 to-yellow-500 hover:from-pink-600 hover:to-yellow-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5A4.25 4.25 0 0 0 20.5 16.25v-8.5A4.25 4.25 0 0 0 16.25 3.5zm4.25 3.25a5.25 5.25 0 1 1 0 10.5 5.25 5.25 0 0 1 0-10.5zm0 1.5a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5zm5.25.75a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        Instagram
                    </a>
                </div>
            </div>
        </div>
        <!-- Sisi Kanan: Form Login -->
        <div class="hidden md:hidden lg:block">
            <div class="relative flex items-center justify-center h-screen overflow-hidden bg-gray-50 dark:bg-gray-400">
                <video class="absolute inset-0 object-cover w-full h-full"
                    src="{{ asset('video/yellowKost-promotion-video.mp4') }}" autoplay muted loop></video>
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Toggle password
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClosed = document.getElementById('eyeClosed');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            eyeOpen.classList.toggle('hidden');
            eyeClosed.classList.toggle('hidden');
        });

        // Popover logic
        const $popover = document.getElementById('popover-description');
        const $popoverBtn = document.querySelector('[data-popover-target="popover-description"]');

        $popoverBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            $popover.classList.toggle('invisible');
            $popover.classList.toggle('opacity-0');
        });

        // Hide popover when clicking outside
        document.addEventListener('click', function (e) {
            if (!$popover.contains(e.target) && !$popoverBtn.contains(e.target)) {
                $popover.classList.add('invisible');
                $popover.classList.add('opacity-0');
            }
        });

        // Validasi form
        const form = document.querySelector('form');
        const emailInput = document.getElementById('email');
        const passwordError = document.getElementById('passwordError');
        const emailError = document.getElementById('emailError');

        form.addEventListener('submit', function (e) {
            let valid = true;

            // Email
            if (!emailInput.value.trim()) {
                emailError.classList.remove('hidden');
                valid = false;
            } else {
                emailError.classList.add('hidden');
            }

            // Password
            if (!passwordInput.value.trim()) {
                passwordError.classList.remove('hidden');
                valid = false;
            } else {
                passwordError.classList.add('hidden');
            }

            if (!valid) {
                e.preventDefault();
            }
        });

        // Sembunyikan error saat user mulai mengetik
        emailInput.addEventListener('input', function () {
            if (emailInput.value.trim()) emailError.classList.add('hidden');
        });
        passwordInput.addEventListener('input', function () {
            if (passwordInput.value.trim()) passwordError.classList.add('hidden');
        });
    });
    </script>
</body>

</html>
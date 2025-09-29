<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcom To YellowKost</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Theme initialization script to prevent FOUC -->
    {{-- <script src="{{ asset('js/components/themeInit.js') }}"></script> --}}

    <!-- Dark Mode Script -->
    <script src="{{ asset('js/components/darkMode.js') }}"></script>

    {{-- jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
        {{-- <div
            class="absolute flex items-center justify-center h-screen overflow-hidden bg-gray-50 dark:bg-gray-400">
            <video class="relative inset-0 bottom-0 object-cover w-screen h-screen lg:hidden"
                src="{{ asset('video/yellowKost-promotion-video-2.mp4') }}" autoplay muted loop></video>
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div> --}}
        <div class="relative flex flex-col items-center justify-center w-full h-screen p-4 bg-white md:flex-col ">
            <div class="w-full max-w-lg p-4 mt-24 xl:mt-0 max-w-auto">
                <div class="flex flex-row items-center justify-between">
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
                    <a href="#">
                        <span class="flex items-center gap-2">
                            <svg class="p-2 text-black transition-all duration-300 ease-in-out bg-yellow-400 rounded-full w-7 h-7 hover:bg-yellow-300"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path
                                    d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
                            </svg>
                        </span>
                    </a>
                </div>
                <span class="block mt-10 text-black">
                    <h1 class="text-2xl font-semibold lg:text-3xl">Buat Akun.</h1>
                </span>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mt-4 xl:mt-6">
                        <div class="relative z-0 flex items-center">
                            <input type="text" id="email" name="email" required
                                class="block py-3 xl:py-4 w-full text-sm !text-black bg-transparent border-2 border-gray-300 group-focus:outline-none group-focus:ring-0 group-focus:appearance-none focus:ring-0 rounded-full pr-10 pl-4 mails"
                                placeholder="Masukkan email anda" />
                            <svg class="absolute w-6 h-6 text-gray-400 right-3 group-focus:outline-none group-hover:hover-text-gray-200"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path
                                    d="M125.4 128C91.5 128 64 155.5 64 189.4C64 190.3 64 191.1 64.1 192L64 192L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 192L575.9 192C575.9 191.1 576 190.3 576 189.4C576 155.5 548.5 128 514.6 128L125.4 128zM528 256.3L528 448C528 456.8 520.8 464 512 464L128 464C119.2 464 112 456.8 112 448L112 256.3L266.8 373.7C298.2 397.6 341.7 397.6 373.2 373.7L528 256.3zM112 189.4C112 182 118 176 125.4 176L514.6 176C522 176 528 182 528 189.4C528 193.6 526 197.6 522.7 200.1L344.2 335.5C329.9 346.3 310.1 346.3 295.8 335.5L117.3 200.1C114 197.6 112 193.6 112 189.4z" />
                            </svg>
                        </div>
                        <p id="emailError" class="hidden mt-2 text-sm text-red-600 dark:text-red-500">
                            <span class="font-medium">Oops!</span> Email wajib diisi.
                        </p>
                    </div>
                    <div class="mt-4 xl:mt-6">
                        <div class="relative z-0 flex items-center">
                            <input type="password" id="password" name="password" required
                                class="block py-3 xl:py-4 w-full text-sm !text-black bg-transparent border-2 border-gray-300 group-focus:outline-none group-focus:ring-0 group-focus:appearance-none focus:ring-0 rounded-full pr-10 pl-4 mails"
                                placeholder="Masukkan kata sandi anda" />
                            <!-- Eye Icon Button -->
                            <button type="button" id="togglePassword"
                                class="absolute text-gray-400 -translate-y-1/2 right-3 top-1/2 hover:text-gray-500">
                                <!-- Eye SVG (show) -->
                                <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <!-- Eye Off SVG (hide), hidden by default -->
                                <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" class="hidden w-6 h-6"
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
                    <div class="mt-4 xl:mt-6">
                        <div class="relative z-0 flex items-center">
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                class="block py-3 xl:py-4 w-full text-sm !text-black bg-transparent border-2 border-gray-300 group-focus:outline-none group-focus:ring-0 group-focus:appearance-none focus:ring-0 rounded-full pr-10 pl-4 mails"
                                placeholder="Konfirmasi kata sandi anda" />
                            <!-- Eye Icon Button -->
                            <button type="button" id="toggleConfirmPassword"
                                class="absolute text-gray-400 -translate-y-1/2 right-3 top-1/2 hover:text-gray-500">
                                <!-- Eye SVG (show) -->
                                <svg id="eyeOpenConfirm" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <!-- Eye Off SVG (hide), hidden by default -->
                                <svg id="eyeClosedConfirm" xmlns="http://www.w3.org/2000/svg" class="hidden w-6 h-6"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.293-3.95m3.362-2.568A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.973 9.973 0 01-4.043 5.306M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3l18 18" />
                                </svg>
                            </button>
                        </div>
                        <p id="confirmPasswordError" class="hidden mt-2 text-sm text-red-600 dark:text-red-500">
                            <span class="font-medium">Oops!</span> Konfirmasi password wajib diisi.
                        </p>
                    </div>
                    <div class="flex items-start mt-6">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox"
                                class="w-4 h-4 transition duration-200 border border-yellow-300 rounded bg-yellow-50 focus:ring-2 focus:ring-yellow-300 focus:outline-none checked:bg-yellow-500 checked:text-yellow-500"
                                required="">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms"
                                class="text-xs font-light text-gray-500 sm:text-xs md:text-[0.75rem]">Saya
                                menyetujui <a class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                                    href="#">Terms and Conditions</a> yang berlaku.</label>
                        </div>
                    </div>
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div id="alert-{{ $loop->index }}"
                        class="flex items-center p-4 mt-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <svg class="w-4 h-4 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="text-sm font-medium ms-3">
                            {{ $error }}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-{{ $loop->index }}" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    @endforeach
                    @endif
                    <div class="py-4 xl:py-6 mt-2.5">
                        <button type="submit"
                            class="w-full px-5 py-3 mb-2 text-xs font-medium text-center text-gray-900 transition-all duration-300 ease-in-out bg-yellow-300 rounded-full shadow-lg xl:py-4 hover:bg-yellow-400 me-2 xl:text-base">Buat
                            Akun</button>
                        <div class="relative flex items-center py-1">
                            <div class="flex-grow border-t border-gray-300"></div>
                            <span class="flex-shrink mx-4 my-2 text-xs text-gray-400">atau</span>
                            <div class="flex-grow border-t border-gray-300"></div>
                        </div>
                        <div class="w-full mt-3">
                            <button type="submit"
                                class="w-full px-5 py-2 transition-all duration-300 ease-in-out border border-gray-400 rounded-full border-1 xl:py-4 hover:bg-red-600 group hover:border-red-600">
                                <span class="flex items-center justify-center gap-2">
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <svg class="w-5 h-5" fill="none" viewBox="-3 0 262 262"
                                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                                        <path class="text-[#4285f4] group-hover:text-white"
                                            d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"
                                            fill="currentColor" />
                                        <path class="text-[#34A853] group-hover:text-white"
                                            d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
                                            fill="currentColor" />
                                        <path class="text-[#FBBC05] group-hover:text-white"
                                            d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"
                                            fill="currentColor" />
                                        <path class="text-[#EB4335] group-hover:text-white"
                                            d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"
                                            fill="currentColor" />
                                    </svg>
                                    <span
                                        class="text-xs font-medium text-gray-900 xl:text-base group-hover:text-white">Daftar
                                        dengan
                                        Google</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <!-- Additional Options -->
                    <div
                        class="flex flex-col lg:gap-3.5 realtive md:flex-col md:justify-between xl:flex-row items-center">
                        <div class="relative flex flex-col items-center md:flex-row">
                            <span class="items-center text-sm text-gray-500">
                                Sudah punya akun?
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-transparent text-yellow-500 transition-all duration-300 ease-in-out hover:text-yellow-300 ms-1">
                                    Masuk sekarang.
                                </a>
                            </span>
                        </div>
                    </div>
                </form>
                <div class="text-xs text-center text-gray-400 ">
                    <div class="flex items-center justify-center gap-4 pt-10">
                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@yellow_434_kostan" target="_blank"
                            class="flex items-center gap-2 px-4 py-2 text-sm font-semibold text-white transition bg-black rounded-lg hover:bg-gray-800">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 48 48">
                                <path
                                    d="M41.5 17.5c-3.6 0-6.5-2.9-6.5-6.5V6h-6.5v27.5c0 2.1-1.7 3.8-3.8 3.8s-3.8-1.7-3.8-3.8 1.7-3.8 3.8-3.8c.7 0 1.3.2 1.9.5v-6.7c-.6-.1-1.3-.2-1.9-.2-5.8 0-10.5 4.7-10.5 10.5S18.2 44 24 44s10.5-4.7 10.5-10.5V20c1.9 1.2 4.1 2 6.5 2v-4.5z" />
                            </svg>
                            TikTok
                        </a>
                        <div class="h-5 border border-l border-gray-60"></div>
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
        </div>
        <div class="hidden overflow-hidden md:hidden lg:block">
            <div class="relative flex items-center justify-center h-screen overflow-hidden">
                <video class="absolute inset-0 object-cover w-full h-full rounded-[3rem] p-3"
                    src="{{ asset('video/yellowKost-promotion-video.mp4') }}" autoplay muted loop>
                </video>
                {{-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> --}}
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password_confirmation');
        const togglePassword = document.getElementById('togglePassword');
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClosed = document.getElementById('eyeClosed');
        const eyeOpenConfirm = document.getElementById('eyeOpenConfirm');
        const eyeClosedConfirm = document.getElementById('eyeClosedConfirm');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            eyeOpen.classList.toggle('hidden');
            eyeClosed.classList.toggle('hidden');
        });

        toggleConfirmPassword.addEventListener('click', function () {
            const type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
            confirmPasswordInput.type = type;
            eyeOpenConfirm.classList.toggle('hidden');
            eyeClosedConfirm.classList.toggle('hidden');
        });

        const form = document.querySelector('form');
        const emailInput = document.getElementById('email');
        const passwordError = document.getElementById('passwordError');
        const confirmPasswordError = document.getElementById('confirmPasswordError');
        const emailError = document.getElementById('emailError');

        form.addEventListener('submit', function (e) {
            let valid = true;

            if (!emailInput.value.trim()) {
                emailError.classList.remove('hidden');
                valid = false;
            } else {
                emailError.classList.add('hidden');
            }

            if (!passwordInput.value.trim()) {
                passwordError.classList.remove('hidden');
                valid = false;
            } else {
                passwordError.classList.add('hidden');
            }

            if (!confirmPasswordInput.value.trim()) {
                confirmPasswordError.classList.remove('hidden');
                valid = false;
            } else {
                confirmPasswordError.classList.add('hidden');
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
        confirmPasswordInput.addEventListener('input', function () {
            if (confirmPasswordInput.value.trim()) confirmPasswordError.classList.add('hidden');
        });
    });
    </script>
</body>

</html>
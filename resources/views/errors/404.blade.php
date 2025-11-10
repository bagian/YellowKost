<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 Not Found - Halaman Tidak Ditemukan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div
        class="flex flex-col items-center justify-center min-h-screen text-gray-800 bg-gray-100 dark:bg-gray-900 dark:text-gray-200">
        <div class="p-8 text-center">
            <h1 class="font-bold text-indigo-600 text-8xl md:text-[16rem] dark:text-indigo-400">404</h1>
            <h2 class="mt-4 text-2xl font-semibold tracking-tight md:text-4xl">Halaman Tidak Ditemukan</h2>
            <p class="mt-2 text-base text-gray-600 dark:text-gray-400">
                Maaf, halaman yang Anda cari tidak dapat ditemukan.
            </p>
            <a href="{{ url('/') }}"
                class="inline-block px-6 py-3 mt-8 text-sm font-semibold text-white transition-colors duration-200 bg-indigo-600 rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                Kembali ke Halaman Awal
            </a>
        </div>
    </div>
</body>

</html>
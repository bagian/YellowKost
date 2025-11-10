<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>504 Gateway Timeout - Waktu Tunggu Habis</title>

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
            <h1 class="font-bold text-indigo-600 text-8xl md:text-[16rem] dark:text-indigo-400">504</h1>
            <h2 class="mt-4 text-2xl font-semibold tracking-tight md:text-4xl">Gateway Timeout</h2>
            <p class="max-w-lg mt-2 text-base text-gray-600 dark:text-gray-400">
                Maaf, server kami tidak menerima respons tepat waktu dari server lain. Ini bisa terjadi karena beban
                lalu lintas yang tinggi. Silakan coba lagi sesaat lagi.
            </p>
            <div class="flex flex-col items-center justify-center gap-4 mt-8 sm:flex-row">
                <a href="javascript:location.reload();"
                    class="inline-block w-full px-6 py-3 text-sm font-semibold text-white transition-colors duration-200 bg-indigo-600 rounded-md shadow-md sm:w-auto hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                    Coba Muat Ulang
                </a>
                <a href="{{ url('/') }}"
                    class="inline-block w-full px-6 py-3 text-sm font-semibold text-gray-700 transition-colors duration-200 bg-gray-200 rounded-md shadow-md sm:w-auto hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                    Kembali ke Halaman Awal
                </a>
            </div>
        </div>
    </div>
</body>

</html>
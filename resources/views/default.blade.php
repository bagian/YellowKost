<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard YellowKost - Kelola Kost Anda dengan Mudah</title>
    <meta name="description"
        content="Pantau dan kelola semua aspek bisnis kost Anda: penyewa, kamar, keuangan, dan lainnya. Semuanya terpusat di Dashboard YellowKost.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Dashboard YellowKost - Kelola Kost Anda dengan Mudah">
    <meta property="og:description"
        content="Pantau dan kelola semua aspek bisnis kost Anda: penyewa, kamar, keuangan, dan lainnya. Semuanya terpusat di Dashboard YellowKost.">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Theme initialization script to prevent FOUC -->
    <script src="{{ asset('js/components/themeInit.js') }}"></script>

    <!-- Dark Mode Script -->
    <script src="{{ asset('js/components/darkMode.js') }}"></script>

    {{-- jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Styles / Scripts -->
    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/_dashboardSwiper.css'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @stack('style')

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <!-- Main application script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Modal Handler Script -->
    <script src="{{ asset('js/components/modalHandler.js') }}"></script>

    {{-- topbar / navbar top --}}
    @include('partials._topbar')

    {{-- sidebar --}}
    @include('partials._sidebar')

    <!-- Main Content -->
    <div class="p-2.5 py-8 lg:ml-64">
        <div class="rounded-lg dark:border-gray-700 mt-14">
            @yield('content')
        </div>
    </div>
    <!-- End Main Content -->

    <form action="{{ route('logout') }}" method="post" id="formLogout">
        @csrf
    </form>
    <script>
        $('#logout').on('click', function() {
            $('#formLogout').submit();
        });
    </script>

    @stack('scripts')
</body>

</html>
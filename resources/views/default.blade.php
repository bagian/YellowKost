<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yellow Kost</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Theme initialization script to prevent FOUC -->
    <script src="{{ asset('js/components/themeInit.js') }}"></script>

    <!-- Dark Mode Script -->
    <script src="{{ asset('js/components/darkMode.js') }}"></script>

    <!-- Styles / Scripts -->
    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('style')
</head>

<body>
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
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
            @yield('content')
        </div>
    </div>
    <!-- End Main Content -->

    @stack('scripts')
</body>

</html>

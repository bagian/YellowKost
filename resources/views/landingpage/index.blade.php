<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags -->
    <title>YellowKost - Kost Modern & Nyaman di Pusat Kota Jember</title>
    <meta name="description"
        content="Temukan hunian ideal di YellowKost. Kost modern, nyaman, dan strategis di Jember untuk mahasiswa dan pekerja muda. Fasilitas lengkap, keamanan 24 jam, dan harga terjangkau.">
    <meta name="keywords"
        content="kost jember, kost modern jember, yellowkost, kost dekat kampus uin jember, kost mahasiswa jember, kost pekerja jember, hunian nyaman jember">
    <meta name="author" content="YellowKost">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="YellowKost - Kost Modern & Nyaman di Pusat Kota Jember">
    <meta property="og:description"
        content="Temukan hunian ideal di YellowKost. Kost modern, nyaman, dan strategis di Jember untuk mahasiswa dan pekerja muda.">
    <meta property="og:image" content="{{ asset('templates/image/gallery/01.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="YellowKost - Kost Modern & Nyaman di Pusat Kota Jember">
    <meta property="twitter:description"
        content="Temukan hunian ideal di YellowKost. Kost modern, nyaman, dan strategis di Jember untuk mahasiswa dan pekerja muda.">
    <meta property="twitter:image" content="{{ asset('templates/image/gallery/01.jpg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://kit.fontawesome.com/b87f3ad2d2.js" crossorigin="anonymous"></script>
    <!-- Theme initialization script to prevent FOUC -->
    <script src="{{ asset('js/components/themeInit.js') }}"></script>

    <!-- Dark Mode Script -->
    <script src="{{ asset('js/components/darkMode.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    {{-- jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/_index.css'])

</head>

<body>
    @include('landingpage._navBar')
    <!-- Main Header -->
    <div class="pt-10">
        <div
            class="relative flex items-center justify-center bg-gradient-to-b from-[hsl(48_96%_89%)] to-[hsl(48_100%_96%)] pt-24 pb-28">
            @yield('content')
        </div>
    </div>
    @include('landingpage._footer')
</body>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('newsletter-form');
        const messageDiv = document.getElementById('newsletter-message');
        const emailInput = document.getElementById('newsletter-email');

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        messageDiv.textContent = data.success;
                        messageDiv.className = 'mt-2 text-sm text-green-400';
                        form.reset();
                    } else if (data.errors) {
                        messageDiv.textContent = data.errors;
                        messageDiv.className = 'mt-2 text-sm text-red-400';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    messageDiv.textContent = 'Terjadi kesalahan. Silakan coba lagi.';
                    messageDiv.className = 'mt-2 text-sm text-red-400';
                });
        });
    });
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Swiper Gallery
    var swiper = new Swiper(".mySwiper", {
        effect: "slide",
        grabCursor: false,
        loop: true,
        spaceBetween: 20,
        centeredSlides: true,
        slidesPerView: 1,
        speed: 1200,
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            648: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });
</script>

</html>
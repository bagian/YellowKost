<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

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
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include('landingpage._navBar')
    <!-- Main Header -->
    <div class="pt-20">
        <div class="relative flex flex-col items-center justify-center pt-10 lg:pt-16 pb-28">
            @yield('content')
        </div>
        <button id="backToTopBtn" onclick="scrollToTop()"
            class="fixed z-40 invisible p-3 text-black transition-all duration-300 transform translate-y-10 bg-yellow-400 rounded-full shadow-lg opacity-0 bottom-16 right-5 hover:bg-yellow-500 hover:scale-110 focus:outline-none group">
            <svg class="w-6 h-6 transition-transform duration-300 group-hover:-translate-y-1" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18">
                </path>
            </svg>
        </button>
    </div>
    @include('landingpage._footer')

    <form action="{{ route('logout') }}" method="post" id="formLogout">
        @csrf
    </form>
    <script>
        $('#logout').on('click', function() {
            $('#formLogout').submit();
        });
    </script>
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
        spaceBetween: 8,
        centeredSlides: true,
        slidesPerView: 1,
        allowTouchMove: false,
        speed: 1000,
        loop: true,
        autoplay: {
            delay: 4000,
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
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    // Swiper Testimonial
    var testimonialSwiper = new Swiper(".testimonial-swiper", {
        loop: true,
        grabCursor: true,
        spaceBetween: 8,
        centeredSlides: true,
        allowTouchMove: false,
        grabCursor: false,
        slidesPerView: 1,
        speed: 19200,
        pagination: {
            el: ".testimonial-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 0,
            pauseOnMouseEnter: false,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });


    document.addEventListener('DOMContentLoaded', function () {
        // Fungsi untuk handle toggle password
        function setupPasswordToggle(toggleButtonId, passwordInputId, openIconId, closedIconId) {
            const toggleButton = document.getElementById(toggleButtonId);
            const passwordInput = document.getElementById(passwordInputId);
            const openIcon = document.getElementById(openIconId);
            const closedIcon = document.getElementById(closedIconId);

            if (toggleButton && passwordInput && openIcon && closedIcon) {
                toggleButton.addEventListener('click', function () {
                    // Ganti tipe input
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);

                    // Ganti ikon mata
                    openIcon.classList.toggle('hidden');
                    closedIcon.classList.toggle('hidden');
                });
            }
        }
        // Setup untuk input password
        setupPasswordToggle('togglePassword', 'password', 'eyeOpen', 'eyeClosed');
    });
</script>
<script>
    function surveyWA() {
    var phoneNumber = "628123498743";
    var message = "Halo Admin YellowKost, saya tertarik dengan kos ini dan ingin mendapatkan informasi lebih lanjut. Apakah bisa untuk dilakukan kunjungan untuk meninjau langsung kamarnya?. Terima kasih.";
    var encodedMessage = encodeURIComponent(message);
    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    var targetUrl = "";

    if (isMobile) {
        targetUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
    } else {
        targetUrl = `https://web.whatsapp.com/send?phone=${phoneNumber}&text=${encodedMessage}`;
    }
    window.open(targetUrl, '_blank');
}
</script>
{{-- Gallery Script --}}
<script>
    function openModal(element) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');

        const clickedImg = element.querySelector('img');
        const captionText = element.querySelector('p').innerText;

        modalImg.src = clickedImg.src;
        modalCaption.innerText = captionText;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
</script>
<script>
    const backToTopBtn = document.getElementById("backToTopBtn");
    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

            backToTopBtn.classList.remove("translate-y-10", "opacity-0", "invisible");
            backToTopBtn.classList.add("translate-y-0", "opacity-100", "visible");
        } else {

            backToTopBtn.classList.add("translate-y-10", "opacity-0", "invisible");
            backToTopBtn.classList.remove("translate-y-0", "opacity-100", "visible");
        }
    };

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
</script>
@stack('scripts')

</html>

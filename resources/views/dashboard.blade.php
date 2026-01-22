@extends('default')

@push('style')
@endpush

@section('content')
@include ('components._breadcrumbLink')
<div class="justify-center pt-20 mx-auto max-w-7xl p-4">
    @if(auth()->user()->role->slug === 'admin' || auth()->user()->role->slug === 'superadmin')
    {{-- ------------------------------------- --}}
    {{-- -- Admin Dashboard Section --}}
    {{-- ------------------------------------- --}}
    <section class="mb-6 flex flex-col sm:flex-row justify-between items-center sm:mb-8">
        <div class="text-center sm:text-start">
            <h1 class="mb-2 text-2xl font-bold text-gray-900 sm:text-3xl dark:text-gray-900">
                Selamat Datang
                <span class="text-yellow-600">
                    {{ auth()->user()->name }}
                </span>
            </h1>
            <p class="text-sm text-gray-500">Semoga harimu menyenangkan!</p>
        </div>
        <div class="bg-gray-900 rounded-lg shadow-sm p-2.5 w-full sm:w-auto mt-4 sm:mt-0">
            <div class="text-right flex flex-col sm:flex-row items-center gap-2 mt-2 sm:mt-0">
                <div id="weather-box" class="hidden flex-row items-center gap-2 bg-gray-800 px-4 py-2 rounded-lg">
                    <img id="weather-icon" src="" alt="Weather Icon" class="w-8 h-8">
                    <div class="flex flex-col items-end">
                        <span id="weather-temp" class="text-sm font-bold text-white leading-none">--°C</span>
                        <span id="weather-city" class="text-[10px] text-white font-medium">Mendeteksi...</span>
                    </div>
                </div>
                <div id="weather-error" class="hidden text-xs text-red-400 mb-1">
                    Izin lokasi diperlukan
                </div>
                <div class="flex flex-col items-center sm:items-end">
                    <div id="date-part" class="text-sm font-medium text-gray-300">
                        Memuat tanggal...
                    </div>
                    <div id="time-part" class="sm:text-2xl text-md font-bold text-gray-300 font-mono tracking-wider">
                        00:00:00
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ------------------------- --}}
    {{-- -- Stats Data Information --}}
    {{-- ------------------------- --}}
    <section>
        @include('partials.dataInformation._statsInformation')
    </section>
    {{-- ------------------------- --}}
    {{-- -- End Stats Data Information --}}
    {{-- ------------------------- --}}

    {{-- ------------------------- --}}
    {{-- -- Stats Cards -- --}}
    {{-- ------------------------- --}}
    <section>
        @include('partials.statsCard._statsCards')
    </section>
    {{-- ------------------------- --}}
    {{-- -- End Stats Cards --}}
    {{-- ------------------------- --}}

    {{-- ------------------------------------- --}}
    {{-- -- Revenue Chart --}}
    {{-- ------------------------------------- --}}
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-4">
        @include('partials.chartInformation._statsChart')
        @include('partials.chartInformation._statsDonut')
    </section>

    {{-- ------------------------------------- --}}
    {{-- -- Recent Activity --}}
    {{-- ------------------------------------- --}}
    <section
        class="p-4 bg-white border border-gray-200 rounded-2xl shadow-sm dark:bg-gray-800 dark:border-gray-700 sm:p-6">
        <div class="mb-3 text-base font-normal text-gray-900 sm:text-lg dark:text-white sm:mb-4 ">
            <span class="inline-flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M133.8 36.3c10.9 7.6 13.5 22.6 5.9 33.4l-56 80c-4.1 5.8-10.5 9.5-17.6 10.1S52 158 47 153L7 113C-2.3 103.6-2.3 88.4 7 79S31.6 69.7 41 79l19.8 19.8 39.6-56.6c7.6-10.9 22.6-13.5 33.4-5.9zm0 160c10.9 7.6 13.5 22.6 5.9 33.4l-56 80c-4.1 5.8-10.5 9.5-17.6 10.1S52 318 47 313L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l19.8 19.8 39.6-56.6c7.6-10.9 22.6-13.5 33.4-5.9zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM64 376a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                </svg>
                <span class="font-semibold text-gray-900 dark:text-white text-sm">
                    Aktivitas Terbaru
                </span>
            </span>
        </div>
        <div class="space-y-3 sm:space-y-4">
            {{-- ------------------------- --}}
            {{-- -- History Testimonial Data -- --}}
            {{-- ------------------------- --}}
            <div
                class="overflow-hidden bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700 rounded-2xl drop-shadow-lg">
                @include('partials.newActivityDashboard._activityTables')
            </div>
            {{-- ------------------------- --}}
            {{-- -- End History Testimonial Data --}}
            {{-- ------------------------- --}}
        </div>
        <div class="mt-4">
            @include('partials.tagihanReminder._tagihanPenghuni')
        </div>
    </section>
    {{-- ------------------------------------- --}}
    {{-- -- End Recent Activity --}}
    {{-- ------------------------------------- --}}
    @endif

    @if(auth()->user()->role->slug === 'user' || auth()->user()->role->slug === 'superadmin')
    {{-- ------------------------------------- --}}
    {{-- -- User Dashboard Section --}}
    {{-- ------------------------------------- --}}
    <section>
        @include('partials.dashboardUser._dashUser', ['payments' => $payments, 'bookings' => $bookings, 'dueDate' => $dueDate, 'paymentStatus' => $paymentStatus])
    </section>
    @endif
</div>
@push('scripts')
<script>
    function updateClock() {
        const now = new Date();
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        const dayName = days[now.getDay()];
        const dayDate = now.getDate();
        const monthName = months[now.getMonth()];
        const year = now.getFullYear();

        let h = now.getHours();
        let m = now.getMinutes();
        let s = now.getSeconds();

        h = h < 10 ? "0" + h : h;
        m = m < 10 ? "0" + m : m;
        s = s < 10 ? "0" + s : s;

        const dateString = `${dayName}, ${dayDate} ${monthName} ${year}`;
        const timeString = `${h}:${m}:${s}`;

        document.getElementById('date-part').innerText = dateString;
        document.getElementById('time-part').innerText = timeString;
    }
    setInterval(updateClock, 1000);
    updateClock();

    function getWeather() {
        const weatherBox = document.getElementById('weather-box');
        const weatherError = document.getElementById('weather-error');

        // Cek Support Browser
        if (!navigator.geolocation) {
            showError("Browser tidak support lokasi");
            return;
        }

        navigator.geolocation.getCurrentPosition(
            (position) => {
                const lat = position.coords.latitude;
                const lon = position.coords.longitude;

                const weatherUrl = `https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current_weather=true&timezone=auto`;
                const cityUrl = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lon}&localityLanguage=id`;

                // Jalankan kedua request secara paralel
                Promise.all([
                    fetch(weatherUrl).then(res => res.json()),
                    fetch(cityUrl).then(res => res.json())
                ]).then(([weatherData, cityData]) => {

                    // Ambil data
                    const temp = Math.round(weatherData.current_weather.temperature);
                    const city = cityData.locality || cityData.city || "Lokasi Anda";
                    const wmoCode = weatherData.current_weather.weathercode;

                    // Update HTML
                    document.getElementById('weather-temp').innerText = `${temp}°C`;
                    document.getElementById('weather-city').innerText = city;
                    document.getElementById('weather-icon').src = getWmoIcon(wmoCode); // Fungsi icon di bawah

                    // Tampilkan Widget
                    if(weatherBox) {
                        weatherBox.classList.remove('hidden');
                        weatherBox.classList.add('flex');
                    }
                    if(weatherError) weatherError.classList.add('hidden');

                }).catch(err => {
                    console.error(err);
                    showError("Gagal memuat data");
                });
            },
            (error) => {
                if(error.code === 1) showError("Izin lokasi ditolak");
                else showError("Gagal deteksi lokasi");
            }
        );

        function showError(msg) {
            if(weatherError) {
                weatherError.innerText = msg;
                weatherError.classList.remove('hidden');
            }
            if(weatherBox) weatherBox.classList.add('hidden');
        }

        function getWmoIcon(code) {
            // Mapping Kode WMO Open-Meteo
            // Sumber: https://open-meteo.com/en/docs

            // 0: Langit Cerah
            if (code === 0) return 'https://openweathermap.org/img/wn/01d@2x.png';

            // 1, 2, 3: Berawan sebagian - mendung
            if (code == 1) return 'https://openweathermap.org/img/wn/02d@2x.png';
            if (code == 2) return 'https://openweathermap.org/img/wn/03d@2x.png';
            if (code == 3) return 'https://openweathermap.org/img/wn/04d@2x.png';

            // 45, 48: Kabut
            if (code == 45 || code == 48) return 'https://openweathermap.org/img/wn/50d@2x.png';

            // 51, 53, 55: Gerimis (Drizzle) -> Sering dianggap cerah kalau salah map
            if (code >= 51 && code <= 55) return 'https://openweathermap.org/img/wn/09d@2x.png';

            // 61, 63, 65: Hujan (Rain)
            if (code >= 61 && code <= 65) return 'https://openweathermap.org/img/wn/10d@2x.png';

            // 80, 81, 82: Hujan Deras (Showers)
            if (code >= 80 && code <= 82) return 'https://openweathermap.org/img/wn/09d@2x.png';

            // 95, 96, 99: Badai Petir (Thunderstorm)
            if (code >= 95) return 'https://openweathermap.org/img/wn/11d@2x.png';

            return 'https://openweathermap.org/img/wn/01d@2x.png'; // Default
        }
    }

    getWeather();
</script>
@endpush
@endsection
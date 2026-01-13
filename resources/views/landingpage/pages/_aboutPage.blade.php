@extends('landingpage.index')
@section('content')

<section class="py-12 lg:py-24">
    <div class="px-6 mx-auto max-w-7xl lg:max-w-6xl">
        <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-20">
            <div class="relative group">
                <div class="absolute w-2/3 border-4 border-yellow-400 -left-4 -top-4 h-2/3 rounded-2xl -z-10"></div>
                <div
                    class="absolute w-2/3 bg-yellow-100 -right-4 -bottom-4 h-2/3 dark:bg-yellow-900/20 rounded-2xl -z-10">
                </div>
                <div class="overflow-hidden rounded-2xl shadow-xl aspect-[4/3]">
                    <img class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                        src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=2070&auto=format&fit=crop"
                        alt="Suasana Kamar YellowKost">
                </div>
            </div>
            <div>
                <h2 class="tracking-tight  text-4xl font-bold text-gray-900 sm:text-5xl">
                    Tentang <span class="text-yellow-500">YellowKost</span>
                </h2>
                <p class="mt-4 text-lg font-medium text-gray-800">
                    Hunian modern, nyaman, dan strategis di Perum Griya Mangli Indah.
                </p>
                <div class="mt-6 space-y-6 leading-relaxed text-justify text-gray-800">
                    <p>
                        Selamat datang di <strong>Rumah Kost Yellow & Partners</strong>, solusi hunian modern di Jember
                        yang memadukan kenyamanan rumah pribadi dengan privasi yang terjaga.
                    </p>
                    <p>
                        Berlokasi strategis di Kompleks Perumahan <strong>Griya Mangli Indah No. AG 22</strong>, kami
                        menawarkan suasana lingkungan yang asri, tenang, dan jauh dari kebisingan jalan raya utama.
                        Meskipun begitu, lokasi kami tetap sangat dekat dengan pusat keramaian seperti <strong>Jember
                            Roxy Square</strong>, Pasar Mangli, serta akses mudah menuju berbagai kampus ternama di
                        Jember.
                    </p>
                    <p>
                        Kami berdedikasi menyediakan fasilitas terbaik dengan standar kebersihan tinggi dan keamanan 24
                        jam. Baik Anda seorang mahasiswa yang membutuhkan ketenangan untuk belajar, maupun profesional
                        yang mendambakan istirahat berkualitas setelah bekerja, YellowKost adalah "rumah kedua" yang
                        tepat untuk Anda.
                    </p>
                </div>
                <div class="mt-8">
                    <button onclick="openWhatsApp()"
                        class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold text-white transition-all duration-200 bg-gray-900 rounded-lg hover:bg-gray-700 dark:bg-yellow-500 dark:text-gray-900 dark:hover:bg-yellow-400 group">

                        <svg class="w-5 h-5 mr-2 transition-transform duration-300 group-hover:scale-110"
                            fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                        Hubungi via WhatsApp
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-8 mt-20 md:grid-cols-3">
            <div
                class="relative p-8 overflow-hidden transition-colors duration-200 bg-gray-800 cursor-default rounded-2xl group hover:bg-yellow-500">
                <div
                    class="absolute -top-6 w-48 h-[20rem] transition-all duration-500 ease-in-out bg-slate-200/20 -right-56 rotate-12 group-hover:right-[30rem] -z-0 blur-md">
                </div>
                <div
                    class="relative z-20 inline-flex items-center justify-center w-12 h-12 mb-6 text-yellow-400 bg-yellow-900/30 rounded-xl group-hover:text-yellow-200">
                    <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M477.9 75.5c4.5-11.8 1.7-25.2-7.2-34.1s-22.3-11.8-34.1-7.2l-416 160C7.9 199-.3 211.2 0 224.7s9.1 25.4 21.9 29.6l176.8 58.9 58.9 176.8c4.3 12.8 16.1 21.6 29.6 21.9s25.7-7.9 30.6-20.5l160-416z" />
                    </svg>
                </div>
                <h3 class="relative z-20 mb-3 text-xl font-bold text-yellow-100 group-hover:text-gray-900">Lokasi
                    Strategis</h3>
                <p class="relative z-20 text-white/80 group-hover:text-gray-900">
                    Akses mudah ke Jember Roxy Square, Pasar Mangli, dan transportasi umum.
                </p>
            </div>
            <div
                class="relative p-8 overflow-hidden transition-colors duration-200 bg-gray-800 cursor-default rounded-2xl group hover:bg-yellow-500">
                <div
                    class="absolute -top-6 w-48 h-[20rem] transition-all duration-500 ease-in-out bg-slate-200/20 -right-56 rotate-12 group-hover:right-[30rem] -z-0 blur-md">
                </div>
                <div
                    class="relative z-20 inline-flex items-center justify-center w-12 h-12 mb-6 text-yellow-400 bg-yellow-900/30 rounded-xl group-hover:text-yellow-200">
                    <svg class="w-7 h-7" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M256 512a256 256 0 1 0 0-512 256 256 0 1 0 0 512zM165.4 321.9c20.4 28 53.4 46.1 90.6 46.1s70.2-18.1 90.6-46.1c7.8-10.7 22.8-13.1 33.5-5.3s13.1 22.8 5.3 33.5C356.3 390 309.2 416 256 416s-100.3-26-129.4-65.9c-7.8-10.7-5.4-25.7 5.3-33.5s25.7-5.4 33.5 5.3zM144 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                    </svg>
                </div>
                <h3 class="relative z-20 mb-3 text-xl font-bold text-yellow-100 group-hover:text-gray-900">Suasana
                    Tenang</h3>
                <p class="relative z-20 text-white/80 group-hover:text-gray-900">
                    Berada di dalam perumahan Griya Mangli Indah, menjamin istirahat yang berkualitas.
                </p>
            </div>
            <div
                class="relative p-8 overflow-hidden transition-all duration-300 ease-in-out bg-gray-800 cursor-default rounded-2xl group hover:bg-yellow-500">
                <div
                    class="absolute -top-6 w-48 h-[20rem] transition-all duration-500 ease-in-out bg-slate-200/20 -right-56 rotate-12 group-hover:right-[30rem] -z-0 blur-md">
                </div>
                <div
                    class="relative z-20 inline-flex items-center justify-center w-12 h-12 mb-6 text-yellow-400 bg-yellow-900/30 rounded-xl group-hover:text-yellow-200">
                    <svg class="w-7 h-7" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l201.2 0c-12.5-14.7-23.2-30.8-31.8-48l-89.5 0 0-80c0-17.7 14.3-32 32-32l32 0 0-26.7c0-18.1 6.1-35.2 16.6-48.8-.4-1.4-.6-2.9-.6-4.5l0-32c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 1 86.7-28.9c3.1-1 6.2-1.8 9.3-2.5L416 64c0-35.3-28.7-64-64-64L96 0zm32 112c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32zM272 96l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16zM128 240c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32zM445.3 488.5l-13.3 6.3 0-188.1 96 32 0 19.6c0 55.8-32.2 106.5-82.7 130.3zM421.9 259.5l-112 37.3c-13.1 4.4-21.9 16.6-21.9 30.4l0 31.1c0 74.4 43 142.1 110.2 173.7l18.5 8.7c4.8 2.2 10 3.4 15.2 3.4s10.5-1.2 15.2-3.4l18.5-8.7C533 500.3 576 432.6 576 358.2l0-31.1c0-13.8-8.8-26-21.9-30.4l-112-37.3c-6.6-2.2-13.7-2.2-20.2 0z" />
                    </svg>
                </div>
                <h3 class="relative z-20 mb-3 text-xl font-bold text-yellow-100 group-hover:text-gray-900">Aman & Nyaman
                </h3>
                <p class="relative z-20 text-white/80 group-hover:text-gray-900">
                    Lingkungan aman untuk kendaraan dan privasi penghuni yang sangat terjaga.
                </p>
            </div>
        </div>
        @include('landingpage._ctaFormulir')
    </div>
</section>

</div>
@endsection
@push('scripts')
<script>
    function openWhatsApp() {
    var phoneNumber = "628123498743";
    var message = "Halo Admin YellowKost, saya tertarik dengan kos ini dan ingin menanyakan ketersediaan kamar. Jika add, saya juga ingin mengetahui informasi lebih lanjut mengenai fasilitas dan harga sewa. Terima Kasih!.";
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
@endpush
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
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
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
                    class="relative z-20 inline-flex items-center justify-center w-12 h-12 mb-6 text-yellow-600 bg-yellow-900/30 rounded-xl group-hover:text-yellow-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
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
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
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

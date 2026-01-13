@extends('landingpage.index')
@section('content')
<div class="px-6 mx-auto max-w-7xl lg:max-w-6xl">
    <section id="gallery" class="xl:py-16">
        <div class="mb-12 text-center">
            <span
                class="inline-block px-3 py-1 mb-4 text-sm font-semibold text-yellow-900 border rounded-full bg-yellow-500/20 border-yellow-500/30">
                Galeri Foto
            </span>
            <h2 class="text-4xl font-bold text-gray-900 sm:text-5xl">
                Galeri <span class="text-yellow-500">YellowKost</span>
            </h2>
            <p class="mt-6 text-gray-500 text-md">
                Intip suasana nyaman dan fasilitas modern di setiap sudut kost kami.
            </p>
        </div>
        <div class="gap-4 space-y-4 columns-2 md:columns-3 lg:columns-4">
            {{-- GALLERY IMAGE ITEMS --}}
            <div class="relative mb-4 overflow-hidden rounded-md break-inside-avoid group cursor-zoom-in"
                onclick="galleryOpenModal(this)">
                <img src="https://plus.unsplash.com/premium_photo-1687960116497-0dc41e1808a2?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Lorem Ipsum Dolor Sit"
                    class="object-cover w-full h-auto transition-transform duration-500 transform group-hover:scale-110">
                <div
                    class="absolute inset-0 flex items-end p-4 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/70 via-transparent to-transparent group-hover:opacity-100">
                    <p class="text-sm font-semibold text-white">Lorem Ipsum Dolor Sit </p>
                </div>
            </div>
            <div class="relative mb-4 overflow-hidden rounded-md break-inside-avoid group cursor-zoom-in"
                onclick="galleryOpenModal(this)">
                <img src="https://plus.unsplash.com/premium_photo-1686090449342-f8f94e6cbb9d?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Lorem Ipsum Dolor Sit"
                    class="object-cover w-full h-auto transition-transform duration-500 transform group-hover:scale-110">
                <div
                    class="absolute inset-0 flex items-end p-4 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/70 via-transparent to-transparent group-hover:opacity-100">
                    <p class="text-sm font-semibold text-white">Lorem Ipsum Dolor Sit </p>
                </div>
            </div>
            {{-- END GALLERY IMAGE ITEMS --}}
        </div>
    </section>
    @include('landingpage._ctaFormulir')

    {{-- IMAGE GALLERY CONTROL --}}

    <div id="galleryImageModal" class="fixed inset-0 z-50 hidden bg-black/50 backdrop-blur-sm">
        <button class="absolute text-white top-4 right-4 hover:text-yellow-500 focus:outline-none"
            onclick="closeModal()">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="flex items-center justify-center h-full p-4">
            <img id="galleryModalImage" src="" alt="Full Size"
                class="max-w-full max-h-[75vh] rounded-lg shadow-2xl object-contain">
        </div>
        {{-- DATA IMAGE CAPTION --}}
        <div id="galleryModalCaption"
            class="absolute left-0 right-0 p-4 mx-auto font-semibold tracking-wide text-center text-white border rounded-full shadow-inner bottom-52 text-md lg:text-lg bg-white/10 backdrop-blur-lg drop-shadow-xl border-white/20 shadow-gray-500/20 lg:max-w-md max-w-xl">
        </div>
        {{-- DATA IMAGE CAPTION --}}
    </div>
    {{-- END IMAGE GALLERY CONTROL --}}
</div>
@endsection
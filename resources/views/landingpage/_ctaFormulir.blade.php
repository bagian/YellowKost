<section>
    <div class="relative mt-20 overflow-hidden bg-yellow-400 rounded-3xl dark:bg-yellow-500">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 0 L50 100 L100 0 Z" />
            </svg>
        </div>
        <div class="relative px-6 py-12 md:py-16 md:px-12 lg:flex lg:items-center lg:justify-between">
            <div class="lg:w-2/3">
                <h2 class="text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl">
                    Tertarik untuk bergabung?
                </h2>
                <p class="mt-4 text-lg leading-8 text-gray-800">
                    Jangan sampai kehabisan kamar! Isi formulir pendaftaran sekarang untuk mengamankan unit kamar
                    pilihan Anda di YellowKost.
                </p>
            </div>

            <div class="flex mt-8 lg:mt-0 lg:ml-8 lg:w-1/3 lg:justify-end">
                <a href="{{ route('booking.form') }}"
                    class="inline-flex items-center justify-center w-full px-8 py-4 text-lg font-bold text-yellow-500 transition-all duration-200 bg-gray-900 shadow-lg rounded-xl hover:bg-gray-800 hover:scale-105 sm:w-auto">
                    <span>Isi Formulir Sewa</span>
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
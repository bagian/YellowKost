@extends('default')

@section('content')
@include('components._accordionLink')
<div class="max-w-2xl pt-20 mx-auto">
    <form action="" method="POST">
        @csrf
        <div class="space-y-6">
            <div class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3 class="text-base font-semibold text-center text-gray-800 uppercase dark:text-white/90">
                        Bagikan Pengalaman Anda
                    </h3>
                    <p class="mt-1 text-sm text-center text-gray-500 dark:text-gray-400">
                        Feedback Anda sangat berarti untuk kami.
                    </p>
                </div>
                <div class="p-5 space-y-6 border-t border-gray-100 sm:p-6 dark:border-gray-700">
                    <!-- Nama Pengguna -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nama Anda
                        </label>
                        <input type="text" id="name" name="name" placeholder="Masukkan nama Anda"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Pekerjaan Anda
                        </label>
                        <input type="text" id="jobs" name="jobs" placeholder="Contoh: Karyawan Swasta"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <!-- Rating Bintang -->
                    <div x-data="{ rating: 0, hoverRating: 0 }">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Berikan Rating
                        </label>
                        <div class="flex items-center space-x-1">
                            <template x-for="star in [1, 2, 3, 4, 5]" :key="star">
                                <button type="button" @click="rating = star" @mouseenter="hoverRating = star"
                                    @mouseleave="hoverRating = 0"
                                    class="text-gray-300 transition-colors duration-150 hover:text-yellow-400 focus:outline-none">
                                    <svg class="w-6 h-6 md:w-8 md:h-8" fill="currentColor" viewBox="0 0 24 24"
                                        :class="{ 'text-yellow-400': hoverRating >= star || rating >= star }">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.27l-6.18 3.6 1.18-6.88L2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                </button>
                            </template>
                        </div>
                        <input type="hidden" name="rating" x-model="rating">
                    </div>
                    <!-- Pesan Testimonial -->
                    <div>
                        <label for="testimonial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Testimonial atau Feedback Anda
                        </label>
                        <textarea id="testimonial" name="testimonial" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tuliskan pengalaman Anda menginap di YellowKost..." required></textarea>
                    </div>
                    <button type="submit"
                        class="flex items-center justify-center w-full gap-2 px-4 py-2 font-semibold text-white align-middle transition-colors duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800">
                        Kirim Testimonial
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
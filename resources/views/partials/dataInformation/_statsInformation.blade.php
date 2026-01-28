<div class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 lg:grid-cols-4">
    <div
        class="p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6 bg-blue-50 dark:bg-blue-100 dark:border-blue-300">
        <div class="flex items-center">
            <div class="p-3 bg-blue-500 rounded-lg dark:bg-blue-900">
                <svg class="w-5 h-5 text-blue-200 sm:w-6 sm:h-6 dark:text-blue-400" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zM12 14a8 8 0 0 0-8 8h16a8 8 0 0 0-8-8z" />
                </svg>
            </div>
            <div class="ml-3 sm:ml-4">
                <p class="text-xs font-medium text-gray-600 sm:text-sm dark:text-gray-900">Total Penyewa
                </p>
                <p class="text-xl font-semibold text-gray-900 sm:text-2xl dark:tex-gray-900">{{ $roomAll - $roomAvailable }}</p>
            </div>
        </div>
    </div>
    <div
        class="p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6 bg-green-50 dark:bg-green-100 dark:border-green-300">
        <div class="flex items-center">
            <div class="p-3 bg-green-200 rounded-lg dark:bg-green-900">
                <svg class="w-5 h-5 text-green-600 sm:w-6 sm:h-6 dark:text-green-400" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M32 64C32 28.7 60.7 0 96 0L352 0c35.3 0 64 28.7 64 64l0 384c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 512c-17.7 0-32-14.3-32-32s14.3-32 32-32L32 64zM320 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                </svg>
            </div>
            <div class="ml-3 sm:ml-4">
                <p class="text-xs font-medium text-gray-600 sm:text-sm dark:text-gray-900">Kamar Tersedia
                </p>
                <p class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-gray-900">{{ $roomAvailable }}</p>
            </div>
        </div>
    </div>
    <div
        class="p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6 bg-yellow-50 dark:bg-yellow-100 dark:border-yellow-300">
        <div class="flex items-center">
            <div class="p-3 bg-yellow-200 rounded-lg dark:bg-yellow-900">
                <svg class="w-5 h-5 text-yellow-600 sm:w-6 sm:h-6 dark:text-yellow-400" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M192 80c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-352zM0 272c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 160c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48L0 272zM432 96l32 0c26.5 0 48 21.5 48 48l0 288c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48z" />
                </svg>
            </div>
            <div class="ml-3 sm:ml-4">
                <p class="text-xs font-medium text-gray-600 sm:text-sm dark:text-gray-900">Pendapatan Bulan
                    Ini</p>
                <p class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-gray-900">{{ $payments->where('month', now()->month)->first()->earning_formatted ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="p-4 border border-gray-200 rounded-lg shadow-sm sm:p-6 bg-red-50 dark:bg-red-50 dark:border-red-300">
        <div class="flex items-center">
            <div class="p-3 bg-red-200 rounded-lg dark:bg-red-900">
                <svg class="w-5 h-5 text-red-600 sm:w-6 sm:h-6 dark:text-red-100" fill="currentColor" stroke=""
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M264.3 24a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm-8 181.3l-22.6 22.6c-6 6-9.4 14.1-9.4 22.6l0 37.5c0 12.3-7 23-17.2 28.4-.9 4.2-2.4 8.4-4.3 12.3l-69 138.1-.8-.4-27.7 55.3c-9.9 19.8-33.9 27.8-53.7 17.9L14.6 521c-19.8-9.9-27.8-33.9-17.9-53.7L47.3 366.3c9.9-19.8 33.9-27.8 53.7-17.9l30.7 15.3 28.3-56.6c.3-.6 .4-1.2 .4-1.8l0-16.9c0-.2 0-.3 0-.5l0-37.5c0-25.5 10.1-49.9 28.1-67.9l35.1-35.1c22.8-22.8 53.6-35.6 85.8-35.6 36.9 0 71.8 16.8 94.8 45.6L422.1 180c6.1 7.6 15.3 12 25 12l33.2 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-33.2 0c-29.2 0-56.7-13.3-75-36l-3.8-4.7 0 115.2 34.5 29.6c17.7 15.2 29.3 36.2 32.6 59.3L448 507.5c2.5 17.5-9.7 33.7-27.2 36.2s-33.7-9.7-36.2-27.2L372 428.4c-1.1-7.7-5-14.7-10.9-19.8l-71.4-61.2c-21.3-18.2-33.5-44.9-33.5-72.9l0-69.3zm.1 165.8c2.4 2.3 4.8 4.6 7.4 6.8l46 39.4-2.2 7.6c-4.5 15.7-12.9 30-24.4 41.5l-68.3 68.3c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L238 421.1c3.8-3.8 6.6-8.6 8.1-13.8L256.4 371z" />
                </svg>
            </div>
            <div class="ml-3 sm:ml-4">
                <p class="text-xs font-medium text-gray-600 sm:text-sm dark:text-gray-900">Tingkat Hunian
                </p>
                <p class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-gray-900">{{ floor(($roomAll - $roomAvailable) / $roomAll * 100) }}%</p>
            </div>
        </div>
    </div>
</div>

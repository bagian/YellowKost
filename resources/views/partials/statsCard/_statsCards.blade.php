<!-- Quick Actions -->
<div class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 lg:grid-cols-3">
    <div
        class="p-4 transition-shadow bg-white border border-gray-200 rounded-2xl shadow-sm sm:p-6 dark:bg-blue-900 dark:border-blue-700 hover:shadow-md">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="mb-1 text-base font-semibold text-gray-900 sm:text-lg dark:text-white sm:mb-2">
                    Daftar Pengajuan</h3>
                <p class="text-xs text-gray-600 dark:text-gray-300 sm:text-sm">Lihat semua data pengajuan
                    penyewa
                    kos</p>
            </div>
            <a href="{{ route('penyewa.index') }}"
                class="inline-flex items-center justify-center p-2 transition-colors bg-blue-100 rounded-lg dark:bg-blue-300 hover:bg-blue-200 dark:hover:bg-blue-400"
                title="Lihat semua data penyewa kos">
                <svg class="w-5 h-5 text-blue-600 sm:w-6 sm:h-6 dark:text-blue-700" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path
                        d="M288 32c-80.8 0-145.5 36.8-192.6 80.6-46.8 43.5-78.1 95.4-93 131.1-3.3 7.9-3.3 16.7 0 24.6 14.9 35.7 46.2 87.7 93 131.1 47.1 43.7 111.8 80.6 192.6 80.6s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1 3.3-7.9 3.3-16.7 0-24.6-14.9-35.7-46.2-87.7-93-131.1-47.1-43.7-111.8-80.6-192.6-80.6zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64-11.5 0-22.3-3-31.7-8.4-1 10.9-.1 22.1 2.9 33.2 13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-12.2-45.7-55.5-74.8-101.1-70.8 5.3 9.3 8.4 20.1 8.4 31.7z" />
                </svg>
            </a>
        </div>
    </div>
    <div
        class="p-4 transition-shadow bg-white border border-gray-200 rounded-2xl shadow-sm sm:p-6 dark:bg-green-900 dark:border-green-700 hover:shadow-md">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="mb-1 text-base font-semibold text-gray-900 sm:text-lg dark:text-white sm:mb-2">
                    Kelola Kamar Kos</h3>
                <p class="text-xs text-gray-600 dark:text-gray-300 sm:text-sm">Lihat dan kelola kamar kos yang
                    di
                    sewa</p>
            </div>
            <a href="{{ route('kamar.index') }}"
                class="p-2 transition-colors bg-green-100 rounded-lg dark:bg-green-300 hover:bg-green-200 dark:hover:bg-green-400"
                title="Kelola Pembayaran">
                <svg class="w-5 h-5 text-green-600 sm:w-6 sm:h-6 dark:text-green-700" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 640 640">
                    <path
                        d="M334.3 51.4C325.3 46.9 314.7 46.9 305.7 51.4L49.7 179.4C33.9 187.3 27.5 206.5 35.4 222.3C43.3 238.1 62.5 244.5 78.3 236.6L320 115.8L561.7 236.6C577.5 244.5 596.7 238.1 604.6 222.3C612.5 206.5 606.1 187.3 590.3 179.4L334.3 51.4zM320 336C350.9 336 376 310.9 376 280C376 249.1 350.9 224 320 224C289.1 224 264 249.1 264 280C264 310.9 289.1 336 320 336zM320 384C267 384 224 427 224 480L224 512C224 529.7 238.3 544 256 544L384 544C401.7 544 416 529.7 416 512L416 480C416 427 373 384 320 384zM192 320C192 293.5 170.5 272 144 272C117.5 272 96 293.5 96 320C96 346.5 117.5 368 144 368C170.5 368 192 346.5 192 320zM544 320C544 293.5 522.5 272 496 272C469.5 272 448 293.5 448 320C448 346.5 469.5 368 496 368C522.5 368 544 346.5 544 320zM144 400C99.8 400 64 435.8 64 480L64 513.1C64 530.1 77.8 544 94.9 544L182.7 544C178.4 534.2 176 523.4 176 512L176 464C176 445.6 179.5 428 185.8 411.8C173.6 404.3 159.3 400 144 400zM457.4 544L545.2 544C562.2 544 576.1 530.2 576.1 513.1L576.1 480C576.1 435.8 540.3 400 496.1 400C480.8 400 466.5 404.3 454.3 411.8C460.6 428 464.1 445.6 464.1 464L464.1 512C464.1 523.4 461.7 534.2 457.4 544z" />
                </svg>
            </a>
        </div>
    </div>

    <div
        class="p-4 transition-shadow bg-white border border-gray-200 rounded-2xl shadow-sm sm:p-6 dark:bg-purple-700 dark:border-purple-700 hover:shadow-md">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="mb-1 text-base font-semibold text-gray-900 sm:text-lg dark:text-white sm:mb-2">
                    Laporan Harian</h3>
                <p class="text-xs text-gray-600 dark:text-gray-300 sm:text-sm">Generate laporan keuangan
                    bulanan</p>
            </div>
            <a href="{{ route('journal.pos') }}"
                class="p-2 transition-colors bg-purple-100 rounded-lg dark:bg-purple-300 hover:bg-purple-200 dark:hover:bg-purple-400"
                title="Laporan Bulanan">
                <svg class="w-5 h-5 text-purple-600 sm:w-6 sm:h-6 dark:text-purple-700" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</div>

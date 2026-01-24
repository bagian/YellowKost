<div class="flex items-center justify-between mb-4">
    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 576 512">
            <path
                d="M32 32c17.7 0 32 14.3 32 32l0 224 224 0 0-128c0-17.7 14.3-32 32-32l160 0c53 0 96 43 96 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64-448 0 0 64c0 17.7-14.3 32-32 32S0 465.7 0 448L0 64C0 46.3 14.3 32 32 32zm80 160a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z" />
        </svg>
        Kamar Saya
    </h3>
    {{-- Status --}}
    @if($bookings?->status === 'confirmed')
    <span
        class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">
        Diterima
    </span>
    @endif

    @if($bookings?->status === 'cancelled')
    <span
        class="px-3 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full dark:bg-red-900 dark:text-red-300">
        Ditolak
    </span>
    @endif

    @if($bookings?->status === 'pending')
    <span
        class="px-3 py-1 text-xs font-semibold text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-900 dark:text-yellow-300">
        Pending
    </span>
    @endif
    {{-- End Status --}}
</div>
<div class="flex flex-col sm:flex-row gap-6">
    @if(!empty($bookings?->room->pictures->first()->url))
    <img src="{{ Storage::url($bookings->room->pictures->first()->url) }}" alt="Room Image"
        class="sm:w-3h-36 sm:h-36  object-cover rounded-xl bg-gray-200">
    @else
    <div class="w-full sm:w-36 sm:h-36 h-36 rounded-xl bg-gray-300 flex items-center justify-center text-gray-900">
        <svg class="w-8 h-8 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
            </path>
        </svg>
    </div>
    @endif
    <div class="flex-1 grid grid-cols-2 sm:grid-cols-3 gap-3">
        <div>
            <p class="text-xs text-gray-500 uppercase">Nomor Kamar</p>
            <p class="font-semibold text-gray-900">{{ $bookings->room->room_name ?? '-'}}</p>
        </div>
        <div>
            <p class="text-xs text-gray-500 uppercase">Harga Sewa</p>
            <span class="flex items-center gap-1">
                <p class="font-semibold text-gray-900">{{ $bookings->room->price_formatted ?? '-'}}</p>
            </span>

        </div>
        <div>
            <p class="text-xs text-gray-500 uppercase">Periode Sewa</p>
            <p class="font-semibold text-gray-900">{{ $bookings?->room->period ? ($bookings->room->period === 'month' ?
                'Bulanan' : ($bookings->room->period === 'year' ? 'Tahunan' : 'Harian')) : '-' }}</p>
        </div>
        <div>
            <p class="text-xs text-gray-500 uppercase">Tanggal Masuk</p>
            <p class="font-semibold text-gray-900">{{ $bookings?->check_in->format('d F Y') ?? '-'}}</p>
        </div>
        <div>
            <p class="text-xs text-gray-500 uppercase">Tanggal Keluar</p>
            <p class="font-semibold text-gray-900">{{ $bookings?->check_out ? $bookings->check_out->format('d F Y') :
                '-'
                }}</p>
        </div>
        <div>
            <p class="text-xs text-gray-500 uppercase">Jatuh Tempo</p>
            <p class="font-semibold text-rose-900">{{ $dueDate ?? '-'}}</p>
        </div>
    </div>
</div>
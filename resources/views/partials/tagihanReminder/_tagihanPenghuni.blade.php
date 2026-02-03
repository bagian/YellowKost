<div class="col-span-12 lg:col-span-4">
    <div
        class="h-full p-4 bg-white border border-gray-200 rounded-2xl shadow-sm dark:bg-gray-800 dark:border-gray-700 sm:p-6">

        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                Jatuh Tempo
            </h3>
            <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                Lihat Kalender
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            @foreach($dueBookings['past_due'] as $row)
            <div class="p-3 bg-red-50 border border-red-100 rounded-xl dark:bg-red-900/20 dark:border-red-800">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-2">
                        <div class="relative">
                            <img class="w-8 h-8 rounded-full"
                                src="https://ui-avatars.com/api/?name=Rudi+Tabuti&background=EF4444&color=fff"
                                alt="User">
                            <span
                                class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                        </div>
                        <div class="text-sm font-semibold text-gray-900 dark:text-white">
                            {{ $row->get('booking')->user->full_name }}
                            <span class="block text-xs font-normal text-gray-500">Kamar {{ $row->get('booking')->room->room_name }}</span>
                        </div>
                    </div>
                    <span
                        class="bg-red-100 text-red-800 text-xs font-bold px-2.5 py-0.5 rounded border border-red-200 dark:bg-red-900 dark:text-red-300">
                        Telat {{ floor($row->get('days_until_due') * -1) }} Hari
                    </span>
                </div>

                <div class="flex items-center justify-between mt-3">
                    <div class="text-xs text-gray-500 dark:text-gray-400">
                        Tagihan: <span class="text-sm font-bold text-gray-900 dark:text-white">{{ $row->get('booking')->room->price_formatted }}</span>
                    </div>
                    <a href="https://wa.me/628123456789?text=Halo%20Mas%20Rudi,%20mengingatkan%20tagihan%20kost%20bulan%20ini%20sudah%20jatuh%20tempo.%20Mohon%20segera%20dibayar%20ya."
                        target="_blank"
                        class="flex items-center gap-1 px-3 py-1.5 text-xs font-medium text-white bg-green-500 rounded-lg hover:bg-green-600 transition-colors shadow-sm shadow-green-200">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.008-.57-.008-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                        Tagih
                    </a>
                </div>
            </div>
            @endforeach

            @foreach($dueBookings['due_today'] as $row)
            <div
                class="p-3 bg-yellow-50 border border-yellow-100 rounded-xl dark:bg-yellow-900/20 dark:border-yellow-800">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-2">
                        <div class="relative">
                            <img class="w-8 h-8 rounded-full"
                                src="https://ui-avatars.com/api/?name=Sinta+Nur&background=F59E0B&color=fff" alt="User">
                            <span
                                class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-yellow-500 border-2 border-white rounded-full dark:border-gray-800"></span>
                        </div>
                        <div class="text-sm font-semibold text-gray-900 dark:text-white">
                            {{ $row->get('booking')->user->full_name }}
                            <span class="block text-xs font-normal text-gray-500">Kamar {{ $row->get('booking')->room->room_name }}</span>
                        </div>
                    </div>
                    <span
                        class="bg-yellow-100 text-yellow-800 text-xs font-bold px-2.5 py-0.5 rounded border border-yellow-200 dark:bg-yellow-900 dark:text-yellow-300">
                        Hari Ini
                    </span>
                </div>

                <div class="flex items-center justify-between mt-3">
                    <div class="text-xs text-gray-500 dark:text-gray-400">
                        Tagihan: <span class="text-sm font-bold text-gray-900 dark:text-white">{{ $row->get('booking')->room->price_formatted }}</span>
                    </div>
                    <button
                        class="px-3 py-1.5 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-lg hover:bg-yellow-200 transition-colors">
                        Ingatkan
                    </button>
                </div>
            </div>
            @endforeach

            @foreach($dueBookings['due_soon'] as $row)
            <div class="p-3 bg-gray-50 border border-gray-100 rounded-xl dark:bg-gray-700/30 dark:border-gray-700">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8 rounded-full grayscale opacity-70"
                            src="https://ui-avatars.com/api/?name=Joko+Wi&background=random" alt="User">
                        <div class="text-sm font-semibold text-gray-600 dark:text-gray-300">
                            {{ $row->get('booking')->user->full_name }}
                            <span class="block text-xs font-normal text-gray-400">Kamar {{ $row->get('booking')->room->room_name }}</span>
                        </div>
                    </div>
                    <span
                        class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                        H-{{ $row->get('booking')->days_until_due }}
                    </span>
                </div>
                <div class="flex items-center justify-between mt-3">
                    <div class="text-xs text-gray-400">
                        Jatuh Tempo: {{ $row->get('booking')->due_date }}
                    </div>
                </div>
                </>

            </div>
            @endforeach
        </div>
    </div>

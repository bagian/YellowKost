<div class="flex flex-col justify-between gap-6 mb-8 md:flex-row md:items-center">
    <div>
        <h1 class="text-3xl font-bold text-gray-900">Manajemen <span class="text-yellow-500">Penyewa
                Kamar</span></h1>
        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Pantau status penyewa, status pembayaran, dan masa
            aktif sewa.</p>
    </div>
    <a href="{{ route('booking.form') }}" class="group">
        <button type="button"
            class="flex items-center gap-2 px-6 py-3 text-sm font-bold text-gray-900 transition-all duration-300 transform bg-yellow-400 shadow-md hover:bg-yellow-500 rounded-xl hover:shadow-lg active:scale-95 ">
            <svg class="w-5 h-5 transition-transform group-hover:rotate-90" fill="currentColor" viewBox="0 0 640 640">
                <path
                    d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z" />
            </svg>
            <span>Tambahkan Data</span>
        </button>
    </a>
</div>
<div
    class="overflow-hidden bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700 rounded-3xl drop-shadow-lg">
    <div class="flex flex-col items-center justify-between gap-4 p-5 mb-4 md:flex-row">
        <div class="relative w-full md:w-1/3">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="text" id="table-search"
                class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-white dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-0 focus:border-yellow-600"
                placeholder="Cari Nama, NIK..." onkeyup="searchTable()">
        </div>
        <div class="flex flex-col w-full gap-3 sm:flex-row md:w-auto">
            <div class="relative w-full sm:w-auto">
                <input type="date" id="date-filter" onchange="filterDate()"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-xl  block w-full sm:w-40 p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:text-white cursor-pointer focus:outline-none focus:ring-0 focus:border-yellow-600"
                    onclick="this.showPicker()">
            </div>
            <div class="relative w-full sm:w-auto group">
                <button id="sortDropdownButton" data-dropdown-toggle="dropdownSort"
                    class="text-gray-900 bg-white border border-gray-300 font-medium rounded-xl text-sm px-4 py-2.5 text-center inline-flex items-center justify-between w-full sm:w-48 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 focus:outline-none focus:ring-0 focus:border-yellow-600"
                    type="button">
                    <span id="currentSortLabel" class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12"></path>
                        </svg>
                        Urutkan Data
                    </span>
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdownSort"
                    class="absolute right-0 z-10 hidden w-48 mt-1 bg-white border border-gray-100 divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600 dark:border-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="sortDropdownButton">
                        <li>
                            <a href="#" onclick="triggerSort(1, 'text', 'Nama (A-Z)', this)"
                                class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white group">
                                Nama Penyewa <span class="text-xs text-gray-400">A-Z</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="triggerSort(2, 'text', 'KTP/NIK', this)"
                                class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                KTP / NIK <span class="text-xs text-gray-400">0-9</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="triggerSort(6, 'text', 'Status', this)"
                                class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Status <span class="text-xs text-gray-400">A-Z</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="triggerSort(7, 'date', 'Tanggal Masuk', this)"
                                class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Tanggal Masuk <span class="text-xs text-gray-400">Baru</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <table id="tenantTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs text-gray-700 uppercase border-b border-gray-100 bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700">
                <tr>
                    <th scope="col" class="w-16 px-6 py-4 font-bold text-center">No</th>
                    <th scope="col" class="px-6 py-4 font-bold">Nama Penyewa</th>
                    <th scope="col" class="px-6 py-4 font-bold">KTP/NIK</th>
                    <th scope="col" class="px-6 py-4 font-bold min-w-[250px]">Alamat</th>
                    <th scope="col" class="px-6 py-4 font-bold">No. HP</th>
                    <th scope="col" class="px-6 py-4 font-bold">No. Ortu</th>
                    <th scope="col" class="px-6 py-4 font-bold text-center">Status</th>
                    <th scope="col" class="px-6 py-4 font-bold text-center">Tgl Masuk</th>
                    <th scope="col" class="px-6 py-4 font-bold text-center">Dokumen</th>
                    <th scope="col" class="px-6 py-4 font-bold text-center">Aksi</th>
                </tr>
            </thead>
            <tbody id="taskTableBody" class="divide-y divide-gray-100 dark:divide-gray-700">
                @foreach($booking as $row)
                <tr
                    class="transition-colors duration-200 bg-white border-b border-gray-100 dark:bg-gray-800 hover:bg-yellow-50 dark:hover:bg-gray-700/50 dark:border-gray-700">

                    <td class="px-6 py-4 font-medium text-center text-gray-900 dark:text-white">
                        {{ $loop->iteration }}
                    </td>

                    <td class="px-6 py-4">
                        <div class="font-bold text-gray-900 dark:text-white">{{ $row->user->full_name }}</div>
                    </td>

                    <td class="px-6 py-4 text-gray-600 dark:text-gray-300">
                        {{ $row->user->nik }}
                    </td>

                    <td class="px-6 py-4">
                        <div class="max-w-xs text-sm leading-relaxed text-gray-600 break-words whitespace-normal dark:text-gray-300 line-clamp-2"
                            title="{{ $row->user->address }}">
                            {{ $row->user->address }}
                        </div>
                    </td>

                    <td class="px-6 py-4">{{ $row->user->phone }}</td>

                    <td class="px-6 py-4">{{ $row->user->parent_phone }}</td>

                    <td class="px-6 py-4 text-center">
                        <span class="inline-flex items-center px-3 py-3 rounded-full text-xs font-bold uppercase
                {{ $row->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $row->status }}
                        </span>
                    </td>

                    <td class="px-6 py-4 font-medium text-center date-col"
                        data-date="{{ $row->check_in->format('Y-m-d') }}">
                        {{ $row->check_in->format('d/m/Y') }}
                    </td>

                    <td class="px-6 py-4 text-center">
                        {{-- ------------------------------------------------------------------------- --}}
                        {{-- MODAL DATA --}}
                        {{-- ------------------------------------------------------------------------- --}}
                        <button data-modal-toggle="default-modal-{{ $row->id }}"
                            class="flex items-center justify-center gap-1 px-3 py-3 mx-auto text-xs font-medium text-blue-100 bg-blue-600 border border-blue-500 rounded-full"
                            type="button">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            KTP
                        </button>
                        {{-- ------------------------------------------------------------------------- --}}
                        {{-- MODAL DATA --}}
                        {{-- ------------------------------------------------------------------------- --}}
                        <div id="default-modal-{{ $row->id }}" tabindex="-1" aria-hidden="true"
                            data-modal-backdrop="static"
                            class="hidden overflow-y-auto overflow-x-hidden fixed  right-0 left-0 z-50 justify-center items-center w-full md:inset-0 top-0 h-[calc(100%-0rem)] max-h-full bg-gray-900/60 backdrop-blur-sm transition-opacity duration-300">
                            {{-- ------------------------------------------------------------------------- --}}
                            {{-- Modal Body --}}
                            {{-- ------------------------------------------------------------------------- --}}
                            <div class="relative w-full max-w-lg max-h-full p-4 transition-all transform scale-100">
                                <div
                                    class="relative overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-2xl dark:bg-gray-800 dark:border-gray-700">
                                    <div class="absolute z-10 top-4 right-4">
                                        <button type="button"
                                            class="p-2 text-gray-400 transition-colors rounded-full shadow-sm bg-white/80 hover:bg-red-50 hover:text-red-500 focus:outline-none dark:bg-gray-700/80 dark:hover:bg-gray-100 dark:text-gray-300"
                                            data-modal-hide="default-modal-{{ $row->id }}">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    {{-- ------------------------------------------------------------------------- --}}
                                    {{-- Modal Item --}}
                                    {{-- ------------------------------------------------------------------------- --}}
                                    <div
                                        class="p-1 bg-gray-50 dark:bg-gray-900 flex flex-col items-center justify-center min-h-[300px] ">
                                        <div
                                            class="w-full px-6 py-4 text-center bg-white border-b border-gray-100 dark:border-gray-700 dark:bg-gray-800 rounded-t-xl">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">Dokumen KTP</h3>
                                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $row->user->full_name
                                                }}</p>
                                        </div>
                                        <div
                                            class="relative w-full p-6 flex justify-center bg-[url('https://www.transparenttextures.com/patterns/grid-noise.png')] bg-gray-100 dark:bg-gray-900/50">
                                            <img src="{{ Storage::url($row->user->ktp) }}"
                                                alt="KTP {{ $row->user->full_name }}"
                                                class="max-w-full max-h-[60vh] h-auto object-contain rounded-xl shadow-lg border-4 border-white dark:border-gray-700 hover:scale-[1.02] transition-transform duration-300">
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-end px-6 py-4 bg-white border-t border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                        <a href="{{ Storage::url($row->user->ktp) }}"
                                            download="KTP-{{ $row->user->full_name }}"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 transition-colors bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-600">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4">
                                                </path>
                                            </svg>
                                            Unduh Gambar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center gap-2">
                            <button type="button"
                                class="p-2 text-yellow-600 transition-all border border-yellow-200 rounded-lg shadow-sm bg-yellow-50 hover:bg-yellow-100 edit"
                                data-href="{{ route('penyewa.update', $row->id) }}" data-id_user="{{ $row->id_user }}"
                                data-ktp="{{ Storage::url($row->user->ktp) }}" data-name="{{ $row->user->full_name }}"
                                data-nik="{{ $row->user->nik }}" data-address="{{ $row->user->address }}"
                                data-phone="{{ $row->user->phone }}" data-parent_phone="{{ $row->user->parent_phone }}"
                                data-check_in="{{ $row->check_in->format('Y-m-d') }}"
                                data-payment_proof="{{ Storage::url($row->payment_proof) }}">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button"
                                class="p-2 text-red-600 transition-all border border-red-200 rounded-lg shadow-sm bg-red-50 hover:bg-red-100 delete">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div
        class="flex flex-col items-center justify-between p-5 border-t border-gray-200 md:flex-row dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800">
        @if($booking->hasPages() || $booking->total() > 0)
        <span class="mb-4 text-sm text-gray-500 dark:text-gray-400 md:mb-0">
            Menampilkan <span class="font-bold text-gray-900 dark:text-white">{{ $booking->firstItem() ?? 0 }}</span>
            sampai <span class="font-bold text-gray-900 dark:text-white">{{ $booking->lastItem() ?? 0 }}</span> dari
            <span class="font-bold text-gray-900 dark:text-white">{{ $booking->total() }}</span> data
        </span>
        @endif
        <div class="inline-flex">
            {{-- ----------------------------- Tombol Prev ---------------------------- --}}
            @if ($booking->onFirstPage())
            <button
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Prev
            </button>
            @else
            <a href="{{ $booking->previousPageUrl() }}"
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Prev
            </a>
            @endif
            {{-- ---------------------------------------------------------------------- --}}

            {{-- ----------------------------- Tombol Next ---------------------------- --}}
            @if ($booking->hasMorePages())
            <a href="{{ $booking->nextPageUrl() }}"
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-t border-b border-r border-gray-300 rounded-r-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
            </a>
            @else
            <button
                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-t border-b border-r border-gray-300 rounded-r-lg shadow-sm hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
            </button>
            @endif
            {{-- ---------------------------------------------------------------------- --}}
        </div>
    </div>
</div>

@push('scripts')
<script>
    // State arah sort (Global)
    let sortDirection = {};

    // --- 1. SEARCH FUNCTION ---
    function searchTable() {
        var input = document.getElementById("table-search");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("tenantTable");
        var tr = table.getElementsByTagName("tr");

        for (var i = 1; i < tr.length; i++) {
            var tds = tr[i].getElementsByTagName("td");
            var found = false;
            // Cari di kolom Nama(1), NIK(2), Alamat(3)
            if(tds[1] && tds[1].textContent.toUpperCase().indexOf(filter) > -1) found = true;
            if(tds[2] && tds[2].textContent.toUpperCase().indexOf(filter) > -1) found = true;
            if(tds[3] && tds[3].textContent.toUpperCase().indexOf(filter) > -1) found = true;

            tr[i].style.display = found ? "" : "none";
        }
    }

    // --- 2. SORT FUNCTION (Triggered by Dropdown) ---
    function triggerSort(columnIndex, type, labelName, element) {
        // Update label tombol dropdown
        const btnLabel = document.getElementById('currentSortLabel');

        // Tentukan arah sort berikutnya
        let dir = 'asc';
        if (sortDirection[columnIndex] === 'asc') {
            dir = 'desc';
        }

        // Update Text Label dengan Icon Panah
        let iconArrow = dir === 'asc' ? '↑' : '↓';
        btnLabel.innerHTML = `<span class="font-bold text-yellow-600">${labelName} (${iconArrow})</span>`;

        // Simpan state
        sortDirection[columnIndex] = dir;

        // Jalankan logika sorting tabel
        sortTableLogic(columnIndex, type, dir);

        // Tutup dropdown (Opsional, jika pakai Flowbite biasanya otomatis tutup)
        document.getElementById('dropdownSort').classList.add('hidden');
    }

    function sortTableLogic(n, type, dir) {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("tenantTable");
        switching = true;

        while (switching) {
            switching = false;
            rows = table.rows;
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];

                var xContent, yContent;

                if (type === 'date') {
                    xContent = x.getAttribute('data-date') || "";
                    yContent = y.getAttribute('data-date') || "";
                } else if (type === 'number') {
                    xContent = parseFloat(x.innerHTML) || 0;
                    yContent = parseFloat(y.innerHTML) || 0;
                } else {
                    xContent = x.innerHTML.toLowerCase();
                    yContent = y.innerHTML.toLowerCase();
                }

                if (dir == "asc") {
                    if (xContent > yContent) { shouldSwitch = true; break; }
                } else if (dir == "desc") {
                    if (xContent < yContent) { shouldSwitch = true; break; }
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }

    // --- 3. DROPDOWN TOGGLE (Manual JS jika Flowbite tidak load) ---
    const dropBtn = document.getElementById('sortDropdownButton');
    const dropMenu = document.getElementById('dropdownSort');

    if(dropBtn && dropMenu){
        dropBtn.addEventListener('click', function() {
            dropMenu.classList.toggle('hidden');
        });
        // Close when clicking outside
        window.addEventListener('click', function(e) {
            if (!dropBtn.contains(e.target) && !dropMenu.contains(e.target)) {
                dropMenu.classList.add('hidden');
            }
        });
    }

    // --- 4. DATE FILTER ---
    function filterDate() {
        var inputDate = document.getElementById("date-filter").value;
        var table = document.getElementById("tenantTable");
        var tr = table.getElementsByTagName("tr");

        for (var i = 1; i < tr.length; i++) {
            var tdDate = tr[i].querySelector(".date-col");
            if (tdDate) {
                var rawDate = tdDate.getAttribute('data-date');
                if (!inputDate || rawDate === inputDate) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endpush

@extends('default')

@section('content')

<div class="min-h-screen p-6 md:p-10 max-w-7xl mx-auto text-gray-800 dark:text-gray-200">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Manajemen <span class="text-yellow-500">Maintenance</span></h1>
            <p class="text-gray-500 dark:text-gray-400 mt-1">Pantau perbaikan, kebersihan, dan aktivitas operasional
                kost.</p>
        </div>
        <button id="btnOpenModal"
            class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-bold text-black bg-yellow-400 rounded-xl hover:bg-yellow-500 transition-all shadow-lg shadow-yellow-400/20 active:scale-95 transform duration-200">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Catat Aktivitas Baru
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div
            class="bg-white dark:bg-gray-800 p-6 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm flex items-center justify-between hover:shadow-md transition-shadow">
            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Total
                    Aktivitas</p>
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white mt-1" id="statTotal">0</h3>
            </div>
            <div class="p-3 bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 rounded-xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                    </path>
                </svg>
            </div>
        </div>
        <div
            class="bg-white dark:bg-gray-800 p-6 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm flex items-center justify-between hover:shadow-md transition-shadow">
            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Belum Selesai
                </p>
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white mt-1" id="statPending">0</h3>
            </div>
            <div class="p-3 bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 rounded-xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
        <div
            class="bg-white dark:bg-gray-800 p-6 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm flex items-center justify-between hover:shadow-md transition-shadow">
            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Sedang Proses
                </p>
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white mt-1" id="statProgress">0</h3>
            </div>
            <div class="p-3 bg-yellow-50 dark:bg-yellow-900/20 text-yellow-600 dark:text-yellow-400 rounded-xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                    </path>
                </svg>
            </div>
        </div>
        <div
            class="bg-white dark:bg-gray-800 p-6 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm flex items-center justify-between hover:shadow-md transition-shadow">
            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Selesai</p>
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white mt-1" id="statCompleted">0</h3>
            </div>
            <div class="p-3 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded-xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
    </div>

    <div
        class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl shadow-sm overflow-hidden">
        <div
            class="flex flex-wrap items-center gap-2 p-4 border-b border-gray-100 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-900/50">
            <button
                class="filter-btn px-4 py-2 text-sm font-medium rounded-lg transition-all border border-transparent bg-gray-900 text-white dark:bg-gray-700 dark:text-white shadow-md"
                data-filter="all">
                Semua
            </button>
            <button
                class="filter-btn px-4 py-2 text-sm font-medium rounded-lg transition-all border border-transparent text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 bg-white dark:bg-gray-800"
                data-filter="pending">
                Perlu Tindakan
            </button>
            <button
                class="filter-btn px-4 py-2 text-sm font-medium rounded-lg transition-all border border-transparent text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 bg-white dark:bg-gray-800"
                data-filter="completed">
                Selesai
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs text-gray-700 dark:text-gray-300 uppercase bg-gray-50/80 dark:bg-gray-700/50 border-b border-gray-100 dark:border-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-4 rounded-tl-lg">Aktivitas / Kendala</th>
                        <th scope="col" class="px-6 py-4">Kategori</th>
                        <th scope="col" class="px-6 py-4">Biaya</th>
                        <th scope="col" class="px-6 py-4">Prioritas</th>
                        <th scope="col" class="px-6 py-4">Tanggal</th>
                        <th scope="col" class="px-6 py-4">Status</th>
                        <th scope="col" class="px-6 py-4 text-center rounded-tr-lg">Aksi</th>
                    </tr>
                </thead>
                <tbody id="taskTableBody" class="divide-y divide-gray-100 dark:divide-gray-700">
                </tbody>
            </table>
            <div id="emptyState"
                class="hidden flex flex-col items-center justify-center py-16 text-center text-gray-400 dark:text-gray-500">
                <div class="w-16 h-16 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-gray-300 dark:text-gray-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-500 dark:text-gray-400 font-medium">Tidak ada data aktivitas yang ditemukan.</p>
            </div>
        </div>
    </div>

    <div id="modalAdd"
        class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300">
        <div
            class="bg-white dark:bg-gray-800 rounded-lg shadow-2xl w-full max-w-lg mx-4 p-8 transform scale-95 transition-transform duration-300">
            <div class="flex justify-between items-center mb-6 border-b border-gray-100 dark:border-gray-700 pb-4">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Catat Aktivitas Baru</h3>
                <button id="btnCloseModal"
                    class="text-gray-400 hover:text-red-500 transition-colors bg-gray-50 dark:bg-gray-700 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg p-1">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <form id="formAddTask">
                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Nama Aktivitas
                            / Kendala</label>
                        <input type="text" name="title"
                            class="w-full rounded-xl border-gray-300 dark:border-gray-600 border p-3 focus:ring-yellow-500 focus:border-yellow-500 text-sm bg-white dark:bg-gray-700 dark:text-white"
                            placeholder="Contoh: Perbaikan AC Kamar 02" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Lokasi</label>
                        <input type="text" name="location"
                            class="w-full rounded-xl border-gray-300 dark:border-gray-600 border p-3 focus:ring-yellow-500 focus:border-yellow-500 text-sm bg-white dark:bg-gray-700 dark:text-white"
                            placeholder="Contoh: Lantai 2, Kamar 02" required>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Biaya / Harga
                            (Rp)</label>
                        <input type="text" id="inputPrice" inputmode="numeric"
                            class="w-full rounded-xl border-gray-300 dark:border-gray-600 border p-3 focus:ring-yellow-500 focus:border-yellow-500 text-sm bg-white dark:bg-gray-700 dark:text-white"
                            placeholder="Contoh: 150.000" required>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label
                                class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Kategori</label>
                            <div class="relative">
                                <select name="category"
                                    class="appearance-none w-full rounded-xl border-gray-300 dark:border-gray-600 border p-3 pr-10 bg-white dark:bg-gray-700 text-sm focus:ring-yellow-500 focus:border-yellow-500 shadow-sm dark:text-white cursor-pointer">
                                    <option value="Perbaikan">Perbaikan</option>
                                    <option value="Kebersihan">Kebersihan</option>
                                    <option value="Aset">Aset</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500 dark:text-gray-400">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label
                                class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Prioritas</label>
                            <div class="relative">
                                <select name="priority"
                                    class="appearance-none w-full rounded-xl border-gray-300 dark:border-gray-600 border p-3 pr-10 bg-white dark:bg-gray-700 text-sm focus:ring-yellow-500 focus:border-yellow-500 shadow-sm dark:text-white cursor-pointer">
                                    <option value="Low">Rendah</option>
                                    <option value="Medium" selected>Sedang</option>
                                    <option value="High">Tinggi</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500 dark:text-gray-400">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-end gap-3 pt-4 border-t border-gray-100 dark:border-gray-700">
                    <button type="button" id="btnCancelModal"
                        class="px-5 py-2.5 rounded-xl border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors text-sm">Batal</button>
                    <button type="submit"
                        class="px-5 py-2.5 rounded-xl bg-yellow-400 text-black font-bold hover:bg-yellow-500 shadow-md hover:shadow-lg transition-all text-sm transform active:scale-95">Simpan
                        Data</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {

        // --- 1. DATA DUMMY ---
        let tasks = [
            { id: 1, title: 'Servis AC Rutin', location: 'Kamar 101, 102, 103', category: 'Perbaikan', priority: 'Medium', date: '2025-12-01', status: 'pending', price: 250000 },
            { id: 2, title: 'Perbaikan Kran Bocor', location: 'Kamar Mandi Luar Lt.1', category: 'Perbaikan', priority: 'High', date: '2025-11-28', status: 'completed', price: 75000 },
            { id: 3, title: 'Pembelian Sapu & Pel', location: 'Gudang', category: 'Aset', priority: 'Low', date: '2025-12-02', status: 'progress', price: 45000 }
        ];

        let currentFilter = 'all';

        // --- 2. HELPER FUNCTIONS ---

        function formatRupiah(angka) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(angka);
        }

        function formatDate(dateString) {
            const options = { year: 'numeric', month: 'short', day: 'numeric' };
            return new Date(dateString).toLocaleDateString('id-ID', options);
        }

        function updateStats() {
            $('#statTotal').text(tasks.length);
            $('#statPending').text(tasks.filter(t => t.status === 'pending').length);
            $('#statProgress').text(tasks.filter(t => t.status === 'progress').length);
            $('#statCompleted').text(tasks.filter(t => t.status === 'completed').length);
        }

        function renderTasks() {
            const tbody = $('#taskTableBody');
            tbody.empty();

            let filteredTasks = tasks;
            if (currentFilter === 'pending') {
                filteredTasks = tasks.filter(t => t.status === 'pending' || t.status === 'progress');
            } else if (currentFilter === 'completed') {
                filteredTasks = tasks.filter(t => t.status === 'completed');
            }

            if (filteredTasks.length === 0) {
                $('#emptyState').removeClass('hidden');
            } else {
                $('#emptyState').addClass('hidden');

                filteredTasks.forEach(task => {
                    // Logic Warna Kategori
                    let catClass = '';
                    if(task.category === 'Perbaikan') catClass = 'bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 border-blue-200 dark:border-blue-800';
                    else if(task.category === 'Kebersihan') catClass = 'bg-purple-50 dark:bg-purple-900/20 text-purple-700 dark:text-purple-300 border-purple-200 dark:border-purple-800';
                    else catClass = 'bg-orange-50 dark:bg-orange-900/20 text-orange-700 dark:text-orange-300 border-orange-200 dark:border-orange-800';

                    // Logic Prioritas
                    let priorityHtml = '';
                    if(task.priority === 'High') priorityHtml = `<span class="flex items-center text-red-600 dark:text-red-400 font-bold text-xs"><span class="w-2 h-2 rounded-full bg-red-600 mr-2 animate-pulse"></span> Tinggi</span>`;
                    else if(task.priority === 'Medium') priorityHtml = `<span class="flex items-center text-yellow-600 dark:text-yellow-400 font-bold text-xs"><span class="w-2 h-2 rounded-full bg-yellow-500 mr-2"></span> Sedang</span>`;
                    else priorityHtml = `<span class="flex items-center text-gray-500 dark:text-gray-400 font-bold text-xs"><span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span> Rendah</span>`;

                    // Logic Status Badge
                    let statusHtml = '';
                    if(task.status === 'pending') statusHtml = `<div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 border border-red-200 dark:border-red-800">Belum Dikerjakan</div>`;
                    else if(task.status === 'progress') statusHtml = `<div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 border border-yellow-200 dark:border-yellow-800">Sedang Proses</div>`;
                    else statusHtml = `<div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 border border-green-200 dark:border-green-800">Selesai</div>`;

                    // Logic Action Buttons
                    let actionHtml = `<div class="flex items-center justify-center gap-2">`;
                    if(task.status !== 'completed') {
                        actionHtml += `<button class="btn-done p-2 text-green-600 bg-green-50 dark:bg-green-900/20 dark:text-green-400 rounded-lg hover:bg-green-100 dark:hover:bg-green-900/40 border border-green-200 dark:border-green-800 transition-all shadow-sm" data-id="${task.id}" title="Tandai Selesai"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></button>`;
                    }
                    if(task.status === 'pending') {
                        actionHtml += `<button class="btn-progress p-2 text-yellow-600 bg-yellow-50 dark:bg-yellow-900/20 dark:text-yellow-400 rounded-lg hover:bg-yellow-100 dark:hover:bg-yellow-900/40 border border-yellow-200 dark:border-yellow-800 transition-all shadow-sm" data-id="${task.id}" title="Proses"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></button>`;
                    }
                    actionHtml += `<button class="btn-delete p-2 text-gray-400 bg-white dark:bg-gray-700 rounded-lg hover:bg-red-50 hover:text-red-500 dark:hover:bg-red-900/20 dark:hover:text-red-400 border border-gray-200 dark:border-gray-600 hover:border-red-200 transition-all shadow-sm" data-id="${task.id}" title="Hapus"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>`;
                    actionHtml += `</div>`;

                    const row = `
                        <tr class="bg-white dark:bg-gray-800 hover:bg-yellow-50/50 dark:hover:bg-gray-700/50 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="font-bold text-gray-900 dark:text-white">${task.title}</div>
                                <div class="text-xs text-gray-400 dark:text-gray-400 mt-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    <span>${task.location}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border ${catClass}">${task.category}</span>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                ${formatRupiah(task.price)}
                            </td>
                            <td class="px-6 py-4">${priorityHtml}</td>
                            <td class="px-6 py-4 font-medium">${formatDate(task.date)}</td>
                            <td class="px-6 py-4">${statusHtml}</td>
                            <td class="px-6 py-4 text-center">${actionHtml}</td>
                        </tr>
                    `;
                    tbody.append(row);
                });
            }
            updateStats();
        }

        // --- 3. EVENT LISTENERS ---

        // Filter Buttons
        $('.filter-btn').click(function() {
            // Update UI Button
            $('.filter-btn').removeClass('bg-gray-900 text-white dark:bg-gray-700 dark:text-white shadow-md')
                            .addClass('text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 bg-white dark:bg-gray-800');

            $(this).removeClass('text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 bg-white dark:bg-gray-800')
                   .addClass('bg-gray-900 text-white dark:bg-gray-700 dark:text-white shadow-md');

            currentFilter = $(this).data('filter');
            renderTasks();
        });

        // Modal Logic
        function openModal() {
            $('#modalAdd').removeClass('hidden');
            setTimeout(() => $('#modalAdd').removeClass('opacity-0'), 10);
            $('#formAddTask')[0].reset();
        }
        function closeModal() {
            $('#modalAdd').addClass('opacity-0');
            setTimeout(() => $('#modalAdd').addClass('hidden'), 300);
        }

        $('#btnOpenModal').click(openModal);
        $('#btnCloseModal, #btnCancelModal').click(closeModal);

        // Form Submit
        $('#formAddTask').submit(function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const priceRaw = $('#inputPrice').val().replace(/[^0-9]/g, ''); // Ambil angka murni

            const newTask = {
                id: Date.now(),
                title: formData.get('title'),
                location: formData.get('location'),
                category: formData.get('category'),
                priority: formData.get('priority'),
                date: new Date().toISOString().split('T')[0],
                status: 'pending',
                price: priceRaw ? parseInt(priceRaw) : 0
            };

            tasks.unshift(newTask);
            renderTasks();
            closeModal();
        });

        // Format Input Rupiah
        $('#inputPrice').on('input', function() {
            let val = $(this).val().replace(/[^0-9]/g, '');
            if (val) {
                $(this).val(new Intl.NumberFormat('id-ID').format(val));
            } else {
                $(this).val('');
            }
        });

        // Task Actions (Delegation)
        $(document).on('click', '.btn-done', function() {
            const id = $(this).data('id');
            const task = tasks.find(t => t.id === id);
            if(task) {
                task.status = 'completed';
                renderTasks();
            }
        });

        $(document).on('click', '.btn-progress', function() {
            const id = $(this).data('id');
            const task = tasks.find(t => t.id === id);
            if(task) {
                task.status = 'progress';
                renderTasks();
            }
        });

        $(document).on('click', '.btn-delete', function() {
            const id = $(this).data('id');
            if(confirm('Hapus data aktivitas ini?')) {
                tasks = tasks.filter(t => t.id !== id);
                renderTasks();
            }
        });

        // Init
        renderTasks();
    });
</script>
@endpush

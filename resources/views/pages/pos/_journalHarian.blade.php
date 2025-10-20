@extends('default')

@section('content')
@include('components._accordionLink')

<div class="w-full mx-auto">
    <div class="bg-white border border-gray-200 shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
        <div class="px-5 py-4 border-b border-gray-200 dark:border-gray-700 sm:px-6 sm:py-5">
            <h3 class="text-base font-semibold text-center text-gray-800 uppercase dark:text-white/90">
                Jurnal Harian / Point of Sale
            </h3>
            <p class="mt-1 text-sm text-center text-gray-500 dark:text-gray-400">
                Catat transaksi harian di sini.
            </p>
        </div>

        <div class="p-5 space-y-6 sm:p-6" x-data="posForm()">
            <!-- Form Input -->
            <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-12">
                <!-- Item Selection -->
                <div class="col-span-4">
                    <label for="item" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                        Transaksi</label>
                    <div class="relative">
                        <select id="item" x-model="selectedItemId" @change="updateTransaksi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none">
                            <option value="">-- Pilih Jenis Transaksi --</option>
                            <template x-for="item in items" :key="item.id">
                                <option :value="item.id" x-text="item.name"></option>
                            </template>
                        </select>
                        <span
                            class="absolute right-0 z-10 block pr-3 -translate-y-1/2 pointer-events-none top-1/2 dark:text-gray-400">
                            <svg class="w-4 h-4 stroke-current" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </div>
                <!-- Price -->
                <div class="col-span-4">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                        (Rp)</label>
                    <input type="text" id="price" x-model="price" @input="formatInputPrice"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- Date Input -->
                <div class="col-span-4">
                    <label for="transaction_date"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Transaksi</label>
                    <div class="relative">
                        <input type="date" id="transaction_date" name="transaction_date"
                            value="{{ now()->format('Y-m-d') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            onclick="this.showPicker()">
                        <span
                            class="absolute text-gray-500 -translate-y-1/2 pointer-events-none top-1/2 right-3 dark:text-gray-400">
                            <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <!-- Notes -->
            <div class="pb-5 border-b border-gray-200 dark:border-gray-700">
                <label for="notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                <textarea id="notes" x-model="notes" rows="3" placeholder="Tambahkan catatan untuk transaksi ini..."
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
            </div>

            <!-- Add Button -->
            <div class="flex items-end md:col-span-3">
                <button @click="addItem"
                    class="flex items-center justify-center w-full gap-2 px-4 py-2 font-semibold text-white align-middle transition-colors duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800">
                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                    </svg>
                    <span>Tambah</span>
                </button>
            </div>
            <!-- Transaction Items Table -->
            <div class="mt-6">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Jenis Transaksi</th>
                                <th scope="col" class="px-6 py-3">Catatan</th>
                                <th scope="col" class="px-6 py-3 text-center">Tanggal</th>
                                <th scope="col" class="px-6 py-3 text-right">Harga Satuan</th>
                                <th scope="col" class="px-6 py-3 text-right">Subtotal</th>
                                <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-if="cart.length === 0">
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                        Belum ada item yang ditambahkan.
                                    </td>
                                </tr>
                            </template>
                            <template x-for="(item, index) in cart" :key="index">
                                <tr
                                    class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        x-text="item.name"></th>
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <p x-text="item.name"></p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400" x-text="item.notes"
                                            x-show="item.notes"></p>
                                    </td>
                                    <td class="px-6 py-4 text-center" x-text="item.quantity"></td>
                                    <td class="px-6 py-4 text-right" x-text="formatCurrency(item.price)"></td>
                                    <td class="px-6 py-4 text-right" x-text="formatCurrency(item.subtotal)"></td>
                                    <td class="px-6 py-4 text-center">
                                        <button @click="removeItem(index)"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                        <tfoot>
                            <tr class="font-semibold text-gray-900 dark:text-white">
                                <th scope="row" colspan="1"
                                    class="px-6 py-3 text-base text-right border-t dark:border-gray-700">Total</th>
                                <td class="px-6 py-3 text-base text-right border-t dark:border-gray-700"
                                    x-text="formatCurrency(total)"></td>
                                <td class="border-t dark:border-gray-700"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end mt-6">
                <button type="submit" :disabled="cart.length === 0"
                    class="flex items-center justify-center gap-2 px-4 py-2 font-semibold text-white align-middle transition-colors duration-200 bg-green-600 rounded-lg hover:bg-green-700 disabled:bg-gray-400 disabled:cursor-not-allowed dark:bg-green-700 dark:hover:bg-green-800">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5" fill="currentColor">
                        <path
                            d="M128 0C92.7 0 64 28.7 64 64v64H36c-13.3 0-24 10.7-24 24s10.7 24 24 24h28v24H36c-13.3 0-24 10.7-24 24s10.7 24 24 24h28v24H36c-13.3 0-24 10.7-24 24s10.7 24 24 24h28v48c0 35.3 28.7 64 64 64h64v32c0 17.7 14.3 32 32 32s32-14.3 32-32v-32h32c17.7 0 32-14.3 32-32s-14.3-32-32-32h-32v-32h32c17.7 0 32-14.3 32-32s-14.3-32-32-32h-32v-32h32c17.7 0 32-14.3 32-32s-14.3-32-32-32h-32V64c0-35.3-28.7-64-64-64H128zM384 64c-26.5 0-48 21.5-48 48v64h48V64zM384 224v64h48c26.5 0 48-21.5 48-48s-21.5-48-48-48h-48zm0 160v64h48c26.5 0 48-21.5 48-48s-21.5-48-48-48h-48z" />
                    </svg>
                    <span>Simpan Transaksi</span>
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function posForm() {
            return {
                items: [{
                        id: 1,
                        name: 'Pendapatan Penjualan',
                        price: 750000
                    },
                    {
                        id: 2,
                        name: 'Pembayaran',
                        price: 5000
                    },

                ],
                selectedItemId: '',
                quantity: 1,
                price: '0',
                notes: '',
                cart: [],
                total: 0,

                formatCurrency(value) {
                    return new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 0
                    }).format(value);
                },

                formatInputPrice() {
                    let value = this.price.replace(/[^0-9]/g, '');
                    this.price = value ? parseInt(value, 10).toLocaleString('id-ID') : '0';
                },

                updateTransaksi() {
                    if (!this.selectedItemId) {
                        this.price = '0';
                        return;
                    }
                    const selectedItem = this.items.find(item => item.id == this.selectedItemId);
                    this.price = selectedItem.price.toLocaleString('id-ID');
                },

                addItem() {
                    if (!this.selectedItemId || this.quantity < 1) {
                        // Bisa ditambahkan notifikasi error
                        return;
                    }
                    const selectedItem = this.items.find(item => item.id == this.selectedItemId);
                    const priceValue = parseInt(this.price.replace(/[^0-9]/g, ''), 10) || 0;

                    this.cart.push({
                        id: selectedItem.id,
                        name: selectedItem.name,
                        quantity: this.quantity,
                        notes: this.notes,
                        price: priceValue,
                        subtotal: this.quantity * priceValue,
                    });

                    this.calculateTotal();
                    this.resetForm();
                },

                removeItem(index) {
                    this.cart.splice(index, 1);
                    this.calculateTotal();
                },

                calculateTotal() {
                    this.total = this.cart.reduce((sum, item) => sum + item.subtotal, 0);
                },

                resetForm() {
                    this.selectedItemId = '';
                    this.quantity = 1;
                    this.price = '0';
                    this.notes = '';
                }
            }
        }
</script>
@endpush
@endsection
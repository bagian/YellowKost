<fieldset id="form-fieldset" disabled class="border-t border-gray-700">
    <div class="grid grid-cols-1 gap-6 pt-5 md:grid-cols-2">
        <div class="md:col-span-2">
            <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Pilih
                Kamar</label>
            <div class="relative">
                <select name="id_room" id="input_id_room"
                    class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 cursor-pointer rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                    <option value="">-- Pilih Kamar --</option>
                    @foreach($room as $r)
                    <option value="{{ $r->id }}">{{ $r->room_name }}</option>
                    @endforeach
                </select>
                <span
                    class="absolute right-0 z-10 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
        </div>
        <div>
            <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Nama
                Lengkap</label>
            <input type="text" name="full_name" id="input_tenant"
                class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
        </div>
        <div>
            <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Nomor KTP
                / NIK</label>
            <input type="text" name="nik" id="input_nik"
                class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
        </div>
        <div>
            <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">No. HP
                Penyewa</label>
            <input type="text" name="phone" id="input_phone"
                class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
        </div>
        <div>
            <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">No. HP
                Orang Tua</label>
            <input type="text" name="parent_phone" id="input_parent_phone"
                class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
        </div>
        <div>
            <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Tanggal
                Masuk</label>
            <input type="date" name="check_in" id="input_check_in" onclick="this.showPicker()"
                class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 cursor-pointer rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
        </div>
        <div>
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">
                        Status Pengajuan Sewa
                    </label>
                    <div class="relative">
                        <select name="status" id="input_status" {{-- onchange="toggleRejectionReason(this)" --}}
                            class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 cursor-pointer rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            <option value="" disabled selected hidden>
                                <span class="text-xs">
                                    -- Pengajuan --
                                </span>
                            </option>
                            <option value="confirmed">
                                Diterima
                            </option>
                            <option value="cancelled">
                                Ditolak (Refund)
                            </option>
                        </select>
                        <span
                            class="absolute right-0 z-10 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
                            <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">
                        Status Pembayaran
                    </label>
                    <div class="relative">
                        <select name="payment_status" id="input_payment_status"
                            class="w-full p-3 text-gray-600 transition-all duration-200 bg-gray-500 border border-gray-300 cursor-pointer rounded-xl focus:outline-none focus:border-yellow-500 focus:ring-yellow-200 disabled:cursor-not-allowed disabled:bg-gray-700 disabled:text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            <option value="" disabled selected hidden>
                                -- Pembayaran --
                            </option>
                            <option value="paid">
                                Lunas
                            </option>
                            <option value="dp">
                                DP
                            </option>
                            <option value="not_paid">
                                Belum Lunas
                            </option>
                        </select>
                        <span
                            class="absolute right-0 z-10 block pr-3 -translate-y-1/2 cursor-pointer top-1/2 dark:text-gray-400">
                            <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="rejection-container" class="hidden mt-4 animate-fade-in-down">
        <label class="block mb-2 text-sm font-bold text-red-500 dark:text-red-400">
            Alasan Penolakan <span class="text-red-600">*</span>
        </label>
        <textarea name="rejection_note" id="input_rejection_note" rows="3"
            placeholder="Contoh: Kamar sedang perbaikan / Data KTP buram..."
            oninvalid="this.setCustomValidity('Alasan penolakan wajib diisi jika status Ditolak!')"
            oninput="this.setCustomValidity('')"
            class="w-full p-3 text-gray-900 bg-red-50 border border-red-300 rounded-xl focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-red-500 dark:placeholder-gray-400 dark:text-white"></textarea>
        <p class="mt-1 text-xs text-red-500">Pesan ini akan dikirim ke penyewa.</p>
    </div> --}}
</fieldset>
{{-- ----------------------------------------------------------------------- --}}
{{-- -- Tombol Simpan (Hidden Awal)-- --}}
{{-- ----------------------------------------------------------------------- --}}
<div id="btn-save-container" class="hidden pt-6 mt-8 border-t border-gray-100 dark:border-gray-700">
    <button type="submit"
        class="flex items-center justify-center w-full gap-2 px-6 py-4 font-bold text-black transition-all transform bg-yellow-400 shadow-lg hover:bg-yellow-500 rounded-xl active:scale-95 disabled:opacity-70 disabled:cursor-not-allowed disabled:transform-none">
        <span id="btn-text-normal" class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Simpan Perubahan
        </span>

        <span id="btn-text-loading" class="hidden flex items-center gap-2">
            <svg class="w-5 h-5 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            Menyimpan...
        </span>
    </button>
</div>

{{-- <div id="btn-save-container" class="hidden pt-6 mt-8 border-t border-gray-100 dark:border-gray-700">
    <button type="submit" id="btn-submit-penyewa"
        class="flex items-center justify-center w-full gap-2 px-6 py-4 font-bold text-black transition-all transform bg-yellow-400 shadow-lg hover:bg-yellow-500 rounded-xl active:scale-95 disabled:opacity-70 disabled:cursor-not-allowed disabled:transform-none">

        <span id="btn-text-normal" class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Simpan Perubahan
        </span>

        <span id="btn-text-loading" class="hidden flex items-center gap-2">
            <svg class="w-5 h-5 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            Menyimpan...
        </span>
    </button>
</div> --}}
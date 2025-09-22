@extends('default')

@section('content')
<div
    class="grid grid-cols-1 xl:grid-cols-2 gap-2.5 rounded-2xl border-gray-300 dark:bg-gray-800 dark:border-gray-700 bg-white shadow-lg">
    <!-- Profile Information -->
    <div class="px-5">
        <div class="px-5 py-4 border-b border-gray-100 sm:px-6 sm:py-5 dark:border-gray-700">
            <h3 class="text-base font-semibold text-gray-800 dark:text-white/90">
                Informasi Profil
            </h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Perbarui informasi profil dan alamat email akun Anda.
            </p>
        </div>
        <form method="post" action="{{ route('profile.update') }}" class="p-5 space-y-6 sm:p-6">
            @csrf
            @method('patch')
            <div class="flex items-center justify-center">
                <div x-data="{
                        photoName: null,
                        photoPreview: null,
                        photoError: null,
                        updatePhotoPreview() {
                            const file = this.$refs.photo.files[0];
                            if (!file) return;

                            const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                            const maxSize = 10 * 1024 * 1024; // 10MB

                            this.photoError = null;

                            if (!allowedTypes.includes(file.type)) {
                                this.photoError = 'Format file harus JPG, JPEG, atau PNG.';
                                this.$refs.photo.value = null;
                                this.photoPreview = null;
                            } else if (file.size > maxSize) {
                                this.photoError = 'Ukuran file tidak boleh lebih dari 10MB.';
                                this.$refs.photo.value = null;
                                this.photoPreview = null;
                            } else {
                                this.photoName = file.name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    this.photoPreview = e.target.result;
                                };
                                reader.readAsDataURL(file);
                            };
                        }
                    }" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden" x-ref="photo" x-on:change="updatePhotoPreview()">
                    <div class="flex flex-col items-center justify-center mt-2">
                        <!-- Current Profile Photo -->
                        <div class="relative inline-block" x-show="!photoPreview">
                            <img src="{{ Auth::user()->photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&color=7F9CF5&background=EBF4FF' }}"
                                alt="Current Profile Photo" class="object-cover w-32 h-32 rounded-full">
                            <div x-on:click.prevent="$refs.photo.click()"
                                class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 bg-black rounded-full opacity-0 cursor-pointer bg-opacity-40 hover:opacity-100">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <!-- New Profile Photo Preview -->
                        <div class="relative inline-block" x-show="photoPreview">
                            <span class="block object-cover w-32 h-32 bg-center bg-no-repeat bg-cover rounded-full"
                                x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                            </span>
                            <div x-on:click.prevent="$refs.photo.click()"
                                class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 bg-black rounded-full opacity-0 cursor-pointer bg-opacity-40 hover:opacity-100">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div x-show="photoError" x-text="photoError"
                            class="mt-2.5 text-sm text-red-600 dark:text-red-400">
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Nama
                </label>
                <input type="text" id="name" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{--
                <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Email
                </label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <div class="mt-2">
                    <p class="text-sm text-gray-800 dark:text-gray-200">
                        Alamat email Anda belum terverifikasi.
                        <button form="send-verification"
                            class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            Klik di sini untuk mengirim ulang email verifikasi.
                        </button>
                    </p>
                    <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-400">
                        Tautan verifikasi baru telah dikirim ke alamat email Anda.
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button type="submit"
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Simpan</button>

                @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">Tersimpan.</p>
                @endif
            </div>
        </form>
    </div>
    <!-- Update Password -->
    <div class="px-5">
        <div class="px-5 py-4 border-b border-gray-100 sm:px-6 sm:py-5 dark:border-gray-700">
            <h3 class="text-base font-semibold text-gray-800 dark:text-white/90">
                Perbarui Kata Sandi
            </h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.
            </p>
        </div>
        <form method="post" action="{{ route('password.update') }}" class="p-5 space-y-6 sm:p-6">
            @csrf
            @method('put')

            <div x-data="{ show: false }">
                <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata
                    Sandi Saat
                    Ini</label>
                <div class="relative">
                    <input :type="show ? 'text' : 'password'" name="current_password" id="current_password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        autocomplete="current-password">
                    <button type="button" @click="show = !show"
                        class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-500">
                        <svg x-show="!show" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <svg x-show="show" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.293-3.95m3.362-2.568A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.973 9.973 0 01-4.043 5.306M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                        </svg>
                    </button>
                </div>
            </div>
            <div x-data="{ show: false }">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Sandi
                    Baru</label>
                <div class="relative">
                    <input :type="show ? 'text' : 'password'" name="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        autocomplete="new-password">
                    <button type="button" @click="show = !show"
                        class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-500">
                        <svg x-show="!show" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <svg x-show="show" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.293-3.95m3.362-2.568A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.973 9.973 0 01-4.043 5.306M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                        </svg>
                    </button>
                </div>
            </div>
            <div x-data="{ show: false }">
                <label for="password_confirmation"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Kata
                    Sandi</label>
                <div class="relative">
                    <input :type="show ? 'text' : 'password'" name="password_confirmation" id="password_confirmation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        autocomplete="new-password">
                    <button type="button" @click="show = !show"
                        class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-500">
                        <svg x-show="!show" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <svg x-show="show" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.293-3.95m3.362-2.568A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.973 9.973 0 01-4.043 5.306M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button type="submit"
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Simpan</button>

                @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">Tersimpan.</p>
                @endif
            </div>
        </form>
    </div>
    <!-- Delete Account -->
    <div class="px-5">
        <div class="px-5 py-4 border-b border-gray-100 sm:px-6 sm:py-5 dark:border-gray-700">
            <h3 class="text-base font-semibold text-gray-800 dark:text-white/90">
                Hapus Akun
            </h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen.
            </p>
        </div>
        <div class="p-5 sm:p-6">
            <button type="button" data-modal-target="confirm-user-deletion" data-modal-toggle="confirm-user-deletion"
                class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                Hapus Akun
            </button>
        </div>
    </div>
</div>
@endsection
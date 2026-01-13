@extends('landingpage.index')
@section('content')
<div class="max-w-7xl px-6 mx-auto">
    <section class="relative xl:py-20 overflow-hidden">
        <div class="relative container px-6 mx-auto text-center max-w-4xl">
            <span
                class="inline-block py-1 px-3 rounded-full bg-yellow-500/20 text-yellow-900 text-sm font-semibold mb-4 border border-yellow-500/30">
                Hubungi Kami
            </span>
            <h1 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-5xl">
                Kami Siap <span class="text-yellow-500">Membantu</span> Anda
            </h1>
            <p class="mt-6 text-md text-gray-500">
                Punya pertanyaan seputar ketersediaan kamar, harga, atau fasilitas? Jangan ragu untuk menghubungi tim
                YellowKost.
            </p>
        </div>
    </section>
    <section class="py-16 -mt-10 relative z-10 rounded-t-[3rem]">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-5">
            <div class="flex flex-col gap-5 h-full">
                <div class="bg-gray-800 rounded-xl border border-gray-700 shadow-sm">
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-6">Informasi Kontak</h3>
                        <div class="flex items-start mb-6">
                            <div
                                class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-md font-semibold text-white">Alamat Kost</h4>
                                <p class="mt-1 text-[.9rem] text-gray-400">Perum Griya Mangli Indah No. AG 22,
                                    Jember, Jawa Timur.</p>
                            </div>
                        </div>
                        <div class="flex items-start mb-6">
                            <div
                                class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-green-900/30 text-green-600 rounded-lg">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-md font-semibold text-white">WhatsApp</h4>
                                <p class="mt-1 text-[.9rem] text-gray-400">+62 812-3498-743</p>
                                <button onclick="openWhatsApp()"
                                    class="text-xs font-semibold text-green-600 hover:text-green-700 mt-1">Chat Sekarang
                                    →</button>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-blue-900/30 text-blue-600 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-semibold text-white">Email</h4>
                                <p class="mt-1 text-[.9rem] text-gray-400">admin@yellowkost.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ----------- --}}
                {{-- GOOGLE MAPS --}}
                {{-- ----------- --}}
                <div class="rounded-xl overflow-hidden shadow-lg border border-gray-700 flex-grow min-h-[300px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.23112287711!2d113.6400199748866!3d-8.17989599185013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6910059ab683f%3A0xb67df6d404026d30!2sPerum%20Griya%20Mangli%20Indah%20No.AG%2022!5e0!3m2!1sid!2sid!4v1717057312345!5m2!1sid!2sid"
                        class="h-full w-full" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="lg:col-span-2">
                <div class="bg-gray-800 p-8 md:p-20 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-white mb-2">Kirim Pesan ke Email</h3>
                    <p class="text-gray-300 mb-8">
                        Silakan isi formulir di bawah ini. Pesan akan langsung diarahkan ke aplikasi email Anda.
                    </p>
                    <form id="contactForm" onsubmit="sendToEmail(event)">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-white">Nama Lengkap</label>
                                <input type="text" id="name" name="name"
                                    class="border border-gray-600 text-sm rounded-xl focus:ring-yellow-500 focus:border-yellow-500 block w-full p-4 bg-gray-700 placeholder-gray-400 text-white"
                                    placeholder="Masukkan nama Anda" required>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-white">Alamat
                                    Email</label>
                                <input type="email" id="email" name="email"
                                    class="border border-gray-600 text-sm rounded-xl focus:ring-yellow-500 focus:border-yellow-500 block w-full p-4 bg-gray-700 placeholder-gray-400 text-white"
                                    placeholder="nama@email.com" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-white">Nomor
                                    WhatsApp</label>
                                <input type="tel" id="phone" name="phone" inputmode="numeric" pattern="[0-9]*"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                    class="border border-gray-600 text-sm rounded-xl focus:ring-yellow-500 focus:border-yellow-500 block w-full p-4 bg-gray-700 placeholder-gray-400 text-white"
                                    placeholder="0812xxxx">
                            </div>
                            <div>
                                <label for="subject"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perihal</label>
                                <div class="relative">
                                    <select id="subject" name="subject"
                                        class="appearance-none bg-gray-700 border border-gray-600 text-white text-sm rounded-xl focus:ring-yellow-500 focus:border-yellow-500 block w-full p-4 pr-10 placeholder-gray-400 cursor-pointer">
                                        <option value="Tanya Ketersediaan">Tanya Ketersediaan Kamar</option>
                                        <option value="Booking">Ingin Booking</option>
                                        <option value="Komplain">Komplain Fasilitas</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-white">Pesan Anda</label>
                        <div class="pb-8">
                            <textarea id="message" name="message" rows="5"
                                class="border border-gray-600 text-sm rounded-xl focus:ring-yellow-500 focus:border-yellow-500 block w-full p-4 bg-gray-700 placeholder-gray-400 text-white"
                                placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" id="submitBtn"
                            class="w-full flex items-center justify-center text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-bold rounded-xl text-md px-5 py-4 text-center transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1 disabled:opacity-70 disabled:cursor-not-allowed">

                            <svg id="loadingSpinner" aria-hidden="true" role="status"
                                class="hidden w-5 h-5 mr-3 text-black animate-spin" viewBox="0 0 100 101" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="#E5E7EB" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentColor" />
                            </svg>

                            <span id="btnText" class="text-md font-normal">Kirim Pesan (Buka Email)</span>
                        </button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <div>
        @include('landingpage._ctaFormulir')
    </div>
</div>
@push('scripts')
<script>
    function sendToEmail(event) {
        event.preventDefault();

        // 1. Ambil Elemen Tombol & Spinner
        const submitBtn = document.getElementById('submitBtn');
        const loadingSpinner = document.getElementById('loadingSpinner');
        const btnText = document.getElementById('btnText');
        const originalText = btnText.innerText;

        // 2. Aktifkan Loading State
        submitBtn.disabled = true;           // Matikan tombol biar ga diklik 2x
        loadingSpinner.classList.remove('hidden'); // Munculkan spinner
        btnText.innerText = "Membuka Email...";    // Ubah teks

        // 3. Ambil Data Form
        const adminEmail = "gilangramaddhann@gmail.com";
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const subjectInput = document.getElementById('subject').value;
        const messageInput = document.getElementById('message').value;

        const finalSubject = `[YellowKost] ${subjectInput} - dari ${name}`;
        const body = `Halo Admin YellowKost,%0D%0A%0D%0ASaya ingin mengirim pesan melalui website:%0D%0A%0D%0A` +
                     `Nama: ${name}%0D%0A` +
                     `Email: ${email}%0D%0A` +
                     `WhatsApp: ${phone}%0D%0A` +
                     `Perihal: ${subjectInput}%0D%0A%0D%0A` +
                     `Pesan:%0D%0A${messageInput}%0D%0A%0D%0A` +
                     `Terima Kasih.`;

        // 4. Delay sedikit (opsional, biar usernya "sadar" ada proses loading) lalu buka email
        setTimeout(() => {
            window.location.href = `mailto:${adminEmail}?subject=${finalSubject}&body=${body}`;

            // 5. Reset Tombol (Karena halaman tidak reload)
            setTimeout(() => {
                submitBtn.disabled = false;
                loadingSpinner.classList.add('hidden');
                btnText.innerText = originalText;
                document.getElementById('contactForm').reset();
            }, 2000); // Reset setelah 2 detik
        }, 800); // Delay awal 0.8 detik sebelum buka email
    }
</script>
@endpush
@endsection
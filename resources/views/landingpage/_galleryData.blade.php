<div class="relative pt-0 pb-0 swiper mySwiper md:mx-6 lg:mx-0">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="https://plus.unsplash.com/premium_photo-1687960114927-fa6bac0a63a7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEwfHx8ZW58MHx8fHx8"
                class="object-cover w-full h-full" />
        </div>
        <div class="swiper-slide">
            <img src="https://plus.unsplash.com/premium_photo-1687960116696-d1e38565140f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDh8fHxlbnwwfHx8fHw%3D"
                class="object-cover w-full h-full" />
        </div>
        <div class="swiper-slide">
            <img src="https://plus.unsplash.com/premium_photo-1687960116592-b7373fb65f12?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDI4fHx8ZW58MHx8fHx8"
                class="object-cover w-full h-full" />
        </div>
        <div class="swiper-slide">
            <img src="https://plus.unsplash.com/premium_photo-1687960116497-0dc41e1808a2?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="object-cover w-full h-full" />
        </div>
        <div class="swiper-slide">
            <img src="https://plus.unsplash.com/premium_photo-1687960116574-782d09070294?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fHw%3D"
                class="object-cover w-full h-full" />
        </div>
        <div class="swiper-slide">
            <img src="https://plus.unsplash.com/premium_photo-1687960116909-096420a63d5a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE3fHx8ZW58MHx8fHx8"
                class="object-cover w-full h-full" />
        </div>
        <div class="swiper-slide">
            <img src="https://plus.unsplash.com/premium_photo-1687960116833-f96f224aabea?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fHw%3D"
                class="object-cover w-full h-full" />
        </div>
        <div class="swiper-slide">
            <img src="https://plus.unsplash.com/premium_photo-1723489682171-763c15cd79e3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDl8fHxlbnwwfHx8fHw%3D"
                class="object-cover w-full h-full" />
        </div>
        <div class="swiper-slide">
            <img src="https://plus.unsplash.com/premium_photo-1687960116947-11ecc22f45c0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3D"
                class="object-cover w-full h-full" />
        </div>
        {{-- DEFAULT IF NOT IMAGE NOT RENDERED --}}
        <div class="swiper-slide">
            <img src="{{ asset('img_handler/room/default_yellowkost_gallery.png') }}"
                class="object-cover w-full h-full" />
        </div>
        {{-- END DEFAULT IF NOT IMAGE NOT RENDERED --}}
    </div>

    <div class="relative mx-auto max-w-[14rem]">
        <div class="swiper-pagination absolute items-center justify-center p-2 px-6 rounded-full bg-white/10 backdrop-blur-sm drop-shadow-3xl border border-white/20
        [&_.swiper-pagination-bullet]:bg-white/50
        [&_.swiper-pagination-bullet]:opacity-100
        [&_.swiper-pagination-bullet-active]:!bg-yellow-400">
        </div>
    </div>
    <div
        class="mx-auto xl:mr-16 swiper-button-next important border border-white/20 bg-white/10 backdrop-blur-sm drop-shadow-4xl p-8 rounded-full transition-all duration-300 ease-in-out [text-shadow:_0_1px_10px_rgba(0,0,0,0.6)]">
    </div>
    <div
        class="p-8 mx-auto transition-all duration-300 ease-in-out border rounded-full xl:ml-16 swiper-button-prev important border-white/20 bg-white/10 backdrop-blur-sm drop-shadow-4xl [text-shadow:_0_1px_10px_rgba(0,0,0,0.6)]">
    </div>
</div>

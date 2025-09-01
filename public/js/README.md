# JavaScript Structure Documentation

## Overview

Struktur JavaScript untuk aplikasi YellowKost telah dipisahkan ke dalam folder terpisah untuk memudahkan maintenance dan pengembangan.

## File Structure

```
public/js/
├── app.js                 # Main application script (includes all components)
└── README.md             # This documentation
```

## Components

### app.js

File utama yang menginisialisasi semua komponen aplikasi:

-   **Dark Mode Toggle**: Toggle antara mode terang dan gelap
-   **Sidebar Toggle**: Fungsi untuk membuka/menutup sidebar
-   **Dropdown Menu**: Fungsi untuk dropdown menu
-   **Event Listeners**: Setup semua event listener

## Features

### Dark Mode Toggle

-   ✅ Toggle antara mode terang dan gelap
-   ✅ Menyimpan preferensi di localStorage
-   ✅ Mendeteksi preferensi sistem
-   ✅ Keyboard shortcut (Ctrl/Cmd + J)
-   ✅ Animasi smooth saat klik
-   ✅ Notification feedback
-   ✅ Tooltip informatif dalam bahasa Indonesia
-   ✅ Responsive design untuk mobile dan desktop
-   ✅ Mencegah FOUC (Flash of Unstyled Content)

### Icons

-   Menggunakan icon dari Hugeicons
-   Icon bulan untuk dark mode
-   Icon matahari untuk light mode
-   Responsive sizing (w-4 h-4 di mobile, w-5 h-5 di desktop)

## Usage

### Di Blade Template

```html
<!-- Theme initialization (di head) -->
<script src="{{ asset('js/components/themeInit.js') }}"></script>

<!-- Main application script (di body) -->
<script src="{{ asset('js/app.js') }}"></script>
```

### Toggle Button HTML

```html
<button
    id="theme-toggle"
    type="button"
    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2 sm:p-2.5 transition-all duration-200 relative group"
>
    <!-- Dark mode icon (moon) -->
    <svg
        id="theme-toggle-dark-icon"
        class="hidden w-4 h-4 sm:w-5 sm:h-5"
        fill="currentColor"
        viewBox="0 0 24 24"
    >
        <path
            d="M12.43 2.3c-2.38-.59-4.68-.27-6.63.64-.35.16-.41.64-.1.86C8.3 5.6 10 8.6 10 12c0 3.4-1.7 6.4-4.3 8.2-.32.22-.26.7.09.86 1.28.6 2.71.94 4.21.94 6.05 0 10.85-5.38 9.87-11.6-.61-3.92-3.59-7.16-7.44-8.1z"
        />
    </svg>
    <!-- Light mode icon (sun) -->
    <svg
        id="theme-toggle-light-icon"
        class="hidden w-4 h-4 sm:w-5 sm:h-5"
        fill="currentColor"
        viewBox="0 0 24 24"
    >
        <path
            d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z"
        />
    </svg>
    <!-- Tooltip - hidden on mobile -->
    <span
        class="hidden sm:block absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 dark:bg-gray-700 text-white text-xs rounded py-1 px-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap z-50"
    >
        <span id="theme-tooltip-text">Toggle dark mode</span>
    </span>
</button>
```

## Browser Support

-   Modern browsers dengan ES6+ support
-   LocalStorage support
-   CSS custom properties support
-   Tailwind CSS dark mode classes

## Dependencies

-   Tailwind CSS (untuk styling)
-   Flowbite (untuk komponen UI)
-   Hugeicons (untuk icon)

## Maintenance

-   Script terorganisir dalam satu file utama
-   Mudah untuk menambah fitur baru
-   Struktur yang jelas dan terorganisir
-   Dokumentasi lengkap

## Troubleshooting

### Toggle tidak berfungsi

1. Pastikan semua ID element ada dan benar
2. Periksa console browser untuk error
3. Pastikan file JavaScript dimuat dengan benar
4. Periksa apakah localStorage tersedia

### Icon tidak muncul

1. Pastikan path SVG benar
2. Periksa class `hidden` pada icon
3. Pastikan viewBox dan fill attribute benar

### Dark mode tidak tersimpan

1. Periksa localStorage di browser developer tools
2. Pastikan tidak ada error JavaScript
3. Periksa apakah localStorage tersedia di browser

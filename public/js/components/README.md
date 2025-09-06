# JavaScript Components

Koleksi komponen JavaScript untuk aplikasi YellowKost.

## File yang Tersedia

### 1. `themeInit.js`

Script untuk mencegah FOUC (Flash of Unstyled Content) dengan mengatur tema sebelum halaman di-render.

**Fitur:**

-   Mengatur tema berdasarkan localStorage atau preferensi sistem
-   Mencegah flash saat halaman dimuat
-   Eksekusi langsung tanpa menunggu DOM ready

### 2. `darkMode.js`

Class untuk mengelola dark mode toggle dan persistensi tema.

**Fitur:**

-   Toggle dark/light mode
-   Persistensi tema di localStorage
-   Deteksi perubahan preferensi sistem
-   Update icon toggle otomatis
-   API publik untuk kontrol programmatik

**Penggunaan:**

```javascript
// Instance tersedia di window.darkMode setelah DOM loaded
window.darkMode.setThemeProgrammatically("dark");
window.darkMode.getCurrentTheme(); // 'dark' atau 'light'
```

### 3. `modalHandler.js`

Class untuk mengelola modal dan interaksi backdrop.

**Fitur:**

-   Multiple modal support
-   Backdrop click to close
-   Escape key to close
-   Prevent body scroll saat modal terbuka
-   API publik untuk kontrol programmatik

**Penggunaan:**

```javascript
// Instance tersedia di window.modalHandler setelah DOM loaded
window.modalHandler.openModalProgrammatically("payment");
window.modalHandler.closeModalProgrammatically("tenant");
window.modalHandler.isModalOpen("payment"); // true/false
```

## Konfigurasi Modal

Modal dikonfigurasi dengan ID yang unik:

-   **Payment Modal**: `openPaymentModalBtn` → `payment-modal`
-   **Tenant Modal**: `openTenantModalBtn` → `tenant-modal`

Setiap modal memiliki:

-   Open button dengan ID `open{ModalName}ModalBtn`
-   Modal container dengan ID `{modalName}-modal`
-   Backdrop dengan ID `{modalName}-modal-backdrop`
-   Close button dengan ID `{modalName}-closeModalBtn`
-   Accept/Decline buttons dengan ID `{modalName}-acceptBtn`/`{modalName}-declineBtn`

## Dependencies

-   Tailwind CSS untuk styling
-   Flowbite untuk komponen UI
-   Browser support untuk localStorage dan matchMedia

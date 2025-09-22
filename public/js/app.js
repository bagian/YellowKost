// Main Application JavaScript
// This file loads all components and initializes the application

// Load dark mode component
document.addEventListener("DOMContentLoaded", function () {
    // Dark Mode Toggle Component
    // class DarkModeToggle {
    //     constructor() {
    //         this.themeToggleBtn = document.getElementById("theme-toggle");
    //         this.themeToggleDarkIcon = document.getElementById(
    //             "theme-toggle-dark-icon"
    //         );
    //         this.themeToggleLightIcon = document.getElementById(
    //             "theme-toggle-light-icon"
    //         );
    //         this.themeTooltipText =
    //             document.getElementById("theme-tooltip-text");

    //         this.init();
    //     }

    //     init() {
    //         // Initialize theme on page load
    //         this.setInitialTheme();
    //         this.updateTooltipText();
    //         this.setupEventListeners();
    //     }

    //     setInitialTheme() {
    //         // Check localStorage or system preference
    //         if (
    //             localStorage.getItem("color-theme") === "dark" ||
    //             (!("color-theme" in localStorage) &&
    //                 window.matchMedia("(prefers-color-scheme: dark)").matches)
    //         ) {
    //             document.documentElement.classList.add("dark");
    //             this.themeToggleLightIcon.classList.remove("hidden");
    //         } else {
    //             document.documentElement.classList.remove("dark");
    //             this.themeToggleDarkIcon.classList.remove("hidden");
    //         }
    //     }

    //     updateTooltipText() {
    //         if (this.themeTooltipText) {
    //             if (document.documentElement.classList.contains("dark")) {
    //                 this.themeTooltipText.textContent = "Aktifkan mode terang";
    //             } else {
    //                 this.themeTooltipText.textContent = "Aktifkan mode gelap";
    //             }
    //         }
    //     }

    //     setupEventListeners() {
    //         if (this.themeToggleBtn) {
    //             this.themeToggleBtn.addEventListener("click", () =>
    //                 this.toggleTheme()
    //             );
    //         }

    //         // Keyboard shortcut (Ctrl/Cmd + J)
    //         document.addEventListener("keydown", (e) => {
    //             if ((e.ctrlKey || e.metaKey) && e.key === "j") {
    //                 e.preventDefault();
    //                 this.toggleTheme();
    //             }
    //         });
    //     }

    //     toggleTheme() {
    //         // Add click animation
    //         if (this.themeToggleBtn) {
    //             this.themeToggleBtn.style.transform = "scale(0.95)";
    //             setTimeout(() => {
    //                 this.themeToggleBtn.style.transform = "scale(1)";
    //             }, 150);
    //         }

    //         // Toggle icons
    //         this.themeToggleDarkIcon.classList.toggle("hidden");
    //         this.themeToggleLightIcon.classList.toggle("hidden");

    //         // Toggle theme
    //         if (localStorage.getItem("color-theme")) {
    //             if (localStorage.getItem("color-theme") === "light") {
    //                 document.documentElement.classList.add("dark");
    //                 localStorage.setItem("color-theme", "dark");
    //             } else {
    //                 document.documentElement.classList.remove("dark");
    //                 localStorage.setItem("color-theme", "light");
    //             }
    //         } else {
    //             if (document.documentElement.classList.contains("dark")) {
    //                 document.documentElement.classList.remove("dark");
    //                 localStorage.setItem("color-theme", "light");
    //             } else {
    //                 document.documentElement.classList.add("dark");
    //                 localStorage.setItem("color-theme", "dark");
    //             }
    //         }

    //         // Update tooltip
    //         this.updateTooltipText();

    //         // Show notification
    //         this.showNotification();
    //     }

    //     showNotification() {
    //         const notification = document.createElement("div");
    //         notification.className =
    //             "fixed top-20 right-2 sm:right-4 bg-green-500 text-white px-3 py-2 sm:px-4 sm:py-2 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 z-50 text-sm sm:text-base";
    //         notification.textContent =
    //             document.documentElement.classList.contains("dark")
    //                 ? "Mode gelap diaktifkan"
    //                 : "Mode terang diaktifkan";

    //         document.body.appendChild(notification);

    //         // Animate in
    //         setTimeout(() => {
    //             notification.style.transform = "translateX(0)";
    //         }, 100);

    //         // Remove notification after 3 seconds
    //         setTimeout(() => {
    //             notification.style.transform = "translateX(full)";
    //             setTimeout(() => {
    //                 if (document.body.contains(notification)) {
    //                     document.body.removeChild(notification);
    //                 }
    //             }, 300);
    //         }, 3000);
    //     }
    // }

    // Initialize dark mode toggle
    // new DarkModeToggle();

    // Main App functionality
    console.log("YellowKost App initialized");

    // Setup sidebar functionality
    const sidebarToggle = document.querySelector(
        '[data-drawer-toggle="logo-sidebar"]'
    );
    const sidebar = document.getElementById("logo-sidebar");

    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });
    }

    // Setup dropdown functionality
    const dropdownToggles = document.querySelectorAll("[data-dropdown-toggle]");

    dropdownToggles.forEach((toggle) => {
        toggle.addEventListener("click", (e) => {
            e.preventDefault();
            const targetId = toggle.getAttribute("data-dropdown-toggle");
            const dropdown = document.getElementById(targetId);

            if (dropdown) {
                dropdown.classList.toggle("hidden");
            }
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener("click", (e) => {
        if (!e.target.closest("[data-dropdown-toggle]")) {
            dropdownToggles.forEach((toggle) => {
                const targetId = toggle.getAttribute("data-dropdown-toggle");
                const dropdown = document.getElementById(targetId);
                if (dropdown && !dropdown.classList.contains("hidden")) {
                    dropdown.classList.add("hidden");
                }
            });
        }
    });
});

/**
 * Dark Mode Toggle Functionality
 * Handles theme switching between light and dark modes
 */

class DarkMode {
    constructor() {
        this.themeToggle = document.getElementById("theme-toggle");
        this.themeToggleDarkIcon = document.getElementById(
            "theme-toggle-dark-icon"
        );
        this.themeToggleLightIcon = document.getElementById(
            "theme-toggle-light-icon"
        );
        this.htmlElement = document.documentElement;

        this.init();
    }

    init() {
        // Set initial theme based on localStorage or system preference
        this.setInitialTheme();

        // Add event listener for theme toggle button
        if (this.themeToggle) {
            this.themeToggle.addEventListener("click", () =>
                this.toggleTheme()
            );
        }

        // Listen for system theme changes
        window
            .matchMedia("(prefers-color-scheme: dark)")
            .addEventListener("change", (e) => {
                if (!("color-theme" in localStorage)) {
                    this.setTheme(e.matches ? "dark" : "light");
                }
            });
    }

    setInitialTheme() {
        const savedTheme = localStorage.getItem("color-theme");
        const systemPrefersDark = window.matchMedia(
            "(prefers-color-scheme: dark)"
        ).matches;

        if (savedTheme === "dark" || (!savedTheme && systemPrefersDark)) {
            this.setTheme("dark");
        } else {
            this.setTheme("light");
        }
    }

    setTheme(theme) {
        if (theme === "dark") {
            this.htmlElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
            this.updateIcons("dark");
        } else {
            this.htmlElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
            this.updateIcons("light");
        }
    }

    toggleTheme() {
        const isDark = this.htmlElement.classList.contains("dark");
        this.setTheme(isDark ? "light" : "dark");
    }

    updateIcons(theme) {
        if (theme === "dark") {
            // Show sun icon (light mode icon) when in dark mode
            this.themeToggleDarkIcon?.classList.add("hidden");
            this.themeToggleLightIcon?.classList.remove("hidden");
        } else {
            // Show moon icon (dark mode icon) when in light mode
            this.themeToggleDarkIcon?.classList.remove("hidden");
            this.themeToggleLightIcon?.classList.add("hidden");
        }
    }

    // Public method to get current theme
    getCurrentTheme() {
        return this.htmlElement.classList.contains("dark") ? "dark" : "light";
    }

    // Public method to set theme programmatically
    setThemeProgrammatically(theme) {
        this.setTheme(theme);
    }
}

// Initialize dark mode when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
    window.darkMode = new DarkMode();
});

// Export for module usage if needed
if (typeof module !== "undefined" && module.exports) {
    module.exports = DarkMode;
}

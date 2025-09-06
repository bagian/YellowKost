/**
 * Theme Initialization Script
 * Prevents FOUC (Flash of Unstyled Content) by setting theme before page renders
 */

(function () {
    "use strict";

    // Get theme from localStorage or system preference
    function getInitialTheme() {
        const savedTheme = localStorage.getItem("color-theme");
        const systemPrefersDark = window.matchMedia(
            "(prefers-color-scheme: dark)"
        ).matches;

        return savedTheme === "dark" || (!savedTheme && systemPrefersDark)
            ? "dark"
            : "light";
    }

    // Set theme immediately to prevent FOUC
    function setInitialTheme() {
        const theme = getInitialTheme();

        if (theme === "dark") {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    }

    // Initialize theme immediately
    setInitialTheme();
})();

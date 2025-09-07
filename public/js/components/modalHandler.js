/**
 * Modal Handler Functionality
 * Handles modal opening, closing, and backdrop interactions
 */

class ModalHandler {
    constructor() {
        this.modals = new Map();
        this.init();
    }

    init() {
        // Initialize payment modal
        this.initModal(
            "payment",
            "openPaymentModalBtn",
            "payment-modal",
            "payment-modal-backdrop"
        );

        // Initialize tenant modal
        this.initModal(
            "tenant",
            "openTenantModalBtn",
            "tenant-modal",
            "tenant-modal-backdrop"
        );
    }

    initModal(modalName, openBtnId, modalId, backdropId) {
        const openBtn = document.getElementById(openBtnId);
        const modal = document.getElementById(modalId);
        const backdrop = document.getElementById(backdropId);
        const closeBtn = modal?.querySelector('[id$="closeModalBtn"]');
        const acceptBtn = modal?.querySelector('[id$="acceptBtn"]');
        const declineBtn = modal?.querySelector('[id$="declineBtn"]');

        if (!openBtn || !modal || !backdrop) {
            console.warn(`Modal ${modalName} elements not found`);
            return;
        }

        // Store modal configuration
        this.modals.set(modalName, {
            openBtn,
            modal,
            backdrop,
            closeBtn,
            acceptBtn,
            declineBtn,
        });

        // Add event listeners
        openBtn.addEventListener("click", () => this.openModal(modalName));

        if (closeBtn) {
            closeBtn.addEventListener("click", () =>
                this.closeModal(modalName)
            );
        }

        if (acceptBtn) {
            acceptBtn.addEventListener("click", () =>
                this.closeModal(modalName)
            );
        }

        if (declineBtn) {
            declineBtn.addEventListener("click", () =>
                this.closeModal(modalName)
            );
        }

        backdrop.addEventListener("click", () => this.closeModal(modalName));

        // Close modal on Escape key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && !modal.classList.contains("hidden")) {
                this.closeModal(modalName);
            }
        });
    }

    openModal(modalName) {
        const modalConfig = this.modals.get(modalName);
        if (!modalConfig) return;

        const { modal, backdrop } = modalConfig;

        // Show modal
        modal.classList.remove("hidden");
        modal.classList.add("flex");
        backdrop.classList.remove("hidden");

        // Focus on modal for accessibility
        // modal.focus();

        // Prevent body scroll
        document.body.style.overflow = "hidden";
    }

    closeModal(modalName) {
        const modalConfig = this.modals.get(modalName);
        if (!modalConfig) return;

        const { modal, backdrop } = modalConfig;

        // Hide modal
        modal.classList.add("hidden");
        modal.classList.remove("flex");
        backdrop.classList.add("hidden");

        // Restore body scroll
        document.body.style.overflow = "";
    }

    // Public method to open modal programmatically
    openModalProgrammatically(modalName) {
        this.openModal(modalName);
    }

    // Public method to close modal programmatically
    closeModalProgrammatically(modalName) {
        this.closeModal(modalName);
    }

    // Public method to check if modal is open
    isModalOpen(modalName) {
        const modalConfig = this.modals.get(modalName);
        return modalConfig
            ? !modalConfig.modal.classList.contains("hidden")
            : false;
    }
}

// Initialize modal handler when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
    window.modalHandler = new ModalHandler();
});

// Export for module usage if needed
if (typeof module !== "undefined" && module.exports) {
    module.exports = ModalHandler;
}

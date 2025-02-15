class ToastNotification {
    constructor() {
        this.initializeToasts();
    }

    initializeToasts() {
        const toasts = document.querySelectorAll('.custom-toast');
        if (toasts.length > 0) {
            toasts.forEach((toast, index) => {
                // Ajouter un délai croissant pour chaque toast
                setTimeout(() => {
                    toast.classList.add('show');
                }, index * 200);

                this.setupToastDismiss(toast);
            });
        }
    }

    setupToastDismiss(toast) {
        // Bouton de fermeture
        const closeBtn = toast.querySelector('.toast-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', () => this.dismissToast(toast));
        }

        // Auto-dismiss après 5 secondes
        setTimeout(() => {
            this.dismissToast(toast);
        }, 5000);

        // Gestion du swipe sur mobile
        let touchstartX = 0;
        let touchendX = 0;

        toast.addEventListener('touchstart', e => {
            touchstartX = e.changedTouches[0].screenX;
        });

        toast.addEventListener('touchend', e => {
            touchendX = e.changedTouches[0].screenX;
            if (touchendX > touchstartX + 50) {
                this.dismissToast(toast);
            }
        });
    }

    dismissToast(toast) {
        if (toast && !toast.classList.contains('dismissing')) {
            toast.classList.add('dismissing');
            setTimeout(() => {
                if (toast.parentElement) {
                    toast.parentElement.removeChild(toast);
                }
            }, 500);
        }
    }
}

// Initialiser les toasts au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
    new ToastNotification();
});

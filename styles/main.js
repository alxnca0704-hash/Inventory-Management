function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
}

// Close on outside click
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
}

// Simple hover micro-interaction for bars (if any)
document.querySelectorAll('.group\\/bar').forEach(bar => {
    bar.addEventListener('mouseenter', () => {
        bar.classList.add('scale-105');
    });
    bar.addEventListener('mouseleave', () => {
        bar.classList.remove('scale-105');
    });
});

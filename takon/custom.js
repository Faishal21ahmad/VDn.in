

let activeModal = null; // Track active modal
let activeButton = null; // Track button that triggered modal

document.addEventListener('click', function (e) {
    // Open modal
    if (e.target.hasAttribute('modal-catat-open')) {
        const modalId = e.target.getAttribute('modal-catat-open');
        const modal = document.getElementById(modalId);
        const button = e.target;

        activeModal = modal; // Store active modal
        activeButton = button; // Store active button

        updateModalPosition(modal, button); // Update position
        modal.classList.remove('hidden'); // Show modal
    }

    // Close modal
    if (e.target.hasAttribute('modal-catat-close')) {
        const modalId = e.target.getAttribute('modal-catat-close');
        const modal = document.getElementById(modalId);

        modal.classList.add('hidden'); // Hide modal
        activeModal = null; // Clear active modal
        activeButton = null; // Clear active button
    }
});

// Update modal position dynamically
function updateModalPosition(modal, button) {
    modal.style.width = `${button.offsetWidth}px`;
    modal.style.top = `${button.getBoundingClientRect().bottom + window.scrollY}px`;
    modal.style.left = `${button.getBoundingClientRect().left}px`;
}

// Adjust modal when window resizes
window.addEventListener('resize', function () {
    if (activeModal && activeButton) {
        updateModalPosition(activeModal, activeButton);
    }
});


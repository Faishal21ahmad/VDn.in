// Mendapatkan elemen tombol dan sidebar mini
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebarMini = document.getElementById('sidebarMini');

// Menambahkan event listener untuk toggle sidebar mini
sidebarToggle.addEventListener('click', function() {
    sidebarMini.classList.toggle('hidden');
});




function openModal(modalId, data = {}) {
    const modal = document.getElementById(modalId);
    if (modal) {
        // Isi input dalam modal berdasarkan atribut data
        Object.keys(data).forEach(key => {
            const input = modal.querySelector(`[name="${key}"]`);
            if (input) input.value = data[key];
        });

        // Khusus untuk teks non-input seperti konfirmasi delete
        const textElements = modal.querySelectorAll("[data-text]");
        textElements.forEach(el => {
            const textKey = el.getAttribute("data-text");
            if (data[textKey]) el.textContent = data[textKey];
        });

        modal.classList.remove("hidden");
        modal.classList.add("flex");
    } else {
        console.error(`Modal dengan ID "${modalId}" tidak ditemukan.`);
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    }
}

// Event listener global untuk membuka dan menutup modal
document.querySelectorAll("[modal-open]").forEach(button => {
    button.addEventListener("click", function () {
        const modalId = this.getAttribute("modal-open");
        const modalData = JSON.parse(this.getAttribute("modal-data") || "{}");
        openModal(modalId, modalData);
    });
});

document.querySelectorAll("[modal-close]").forEach(button => {
    button.addEventListener("click", function () {
        const modalId = this.getAttribute("modal-close");
        closeModal(modalId);
    });
});



///////////////////////////////////////////////
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







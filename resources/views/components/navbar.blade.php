@props(['data'])

<!-- Navbar -->
<header class="bg-[#4A55A2] h-16 w-full shadow-md fixed top-0 z-10">
    <div class="max-w-[1722px] mx-auto h-full flex items-center justify-between px-6">
        <!-- Title App -->
        <div class="text-white text-xl font-semibold w-[250px] flex ">
            <!-- Tombol untuk membuka sidebar mini -->
            <button id="sidebarToggle" class="lg:hidden pl-0 pr-5 ">
                <img src="{{ asset('storage/icon/menu.png') }}" alt="" class="w-6 h-6">
            </button>
            <a href="{{ url('/') }}" class="text-white font-bold pl-2">VDn.in</a>
        </div>
        <!-- User Info -->
        <div class="flex items-center space-x-4 relative">
            @if ( $data )
                {{-- Jika data user ada --}}
                <button navgas-bt="navigasi">
                    <span class="text-white font-bold">Hai {{ $data }}</span>
                </button>
                <div id="navigasi" class="hidden absolute p-2 bg-[#4A55A2] top-[46px] right-0 flex-none text-white font-bold rounded-lg">
                    <a href="{{ url('/dashboard') }}">
                        <p class="w-full px-5 hover:bg-[#5e6cd8] rounded-md p-1">Dashboard</p>
                    </a>
                    <a href="{{ url('/logout') }}">
                        <p class="w-full px-5 hover:bg-[#5e6cd8] rounded-md p-1">Logout</p>
                    </a>
                </div>





            @else
                {{-- Jika data user tidak ada --}}
                <span class="text-white font-bold">Hai bolo</span>
                <a href="{{ url('/login') }}" class="text-white font-bold">login dulu</a>
            @endif

            

        </div>
    </div>
    <script>

document.addEventListener("DOMContentLoaded", function () {
    // Ambil semua tombol dengan atribut "modal-open"
    const modalOpenButtons = document.querySelectorAll("[navgas-bt]");
    
    modalOpenButtons.forEach(button => {
        const modalId = button.getAttribute("navgas-bt");
        const modalElement = document.getElementById(modalId);

        if (!modalElement) return;

        // Tambahkan event klik pada tombol untuk toggle modal
        button.addEventListener("click", (event) => {
            event.stopPropagation(); // Mencegah event bubbling
            modalElement.classList.toggle("hidden");
        });

        // Tutup modal jika klik di luar modal
        document.addEventListener("click", (event) => {
            if (!modalElement.contains(event.target) && event.target !== button) {
                modalElement.classList.add("hidden");
            }
        });
    });
});


    </script>
</header>


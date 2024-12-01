<!-- Navbar -->
<header class="bg-[#4A55A2] h-16 w-full shadow-md fixed top-0 z-10">
    <div class="max-w-[1722px] mx-auto h-full flex items-center justify-between px-6">
        <!-- Title App -->
        <div class="text-white text-xl font-semibold w-[250px] flex ">
            <!-- Tombol untuk membuka sidebar mini -->
            <button id="sidebarToggle" class="lg:hidden pl-0 pr-5 ">
                <img src="{{ asset('storage/icon/menu.png') }}" alt="" class="w-6 h-6">
            </button>
            <p class="pl-2">VDn.in</p>
        </div>
        <!-- User Info -->
        <div class="flex items-center space-x-4">
            <span class="text-white font-bold">Hai {{ $slot }}</span>
        </div>
    </div>
</header>
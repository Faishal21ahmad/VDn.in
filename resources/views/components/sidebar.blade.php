<!-- Sidebar Normal (desktop) -->
<aside id="sidebarNormal" class="mt-[7px] max-h-[600px] bg-[#C5DFF8] rounded-lg p-2 w-2/12 min-w-[170px] hidden lg:block">
    <nav class="space-y-2 font-bold text-xl">
        <button modal-open="addVideo" class="w-full py-5 mb-7 bg-white text-[#4A55A2] rounded-lg">
            Add Video +
        </button>
        <a href="{{ url('/dashboard') }}" class="block py-3 px-4 rounded-lg text-[#4A55A2] hover:bg-white">Dashboard</a>
        <a href="{{ url('/video') }}" class="block py-3 px-4 rounded-lg text-[#4A55A2] hover:bg-white">Video</a>
        <a href="{{ url('/playlist') }}" class="block py-3 px-4 rounded-lg text-[#4A55A2] hover:bg-white">Playlist</a>
        <a href="{{ url('/profile') }}" class="block py-3 px-4 rounded-lg text-[#4A55A2] hover:bg-white">Profile</a>
        <br><br><br>
        <a href="{{ url('/logout') }}" class="block py-3 px-4 rounded-lg text-[#4A55A2] hover:bg-white">Logout</a>
    </nav>
</aside>

<!-- Sidebar Mini (mobile) -->
<div id="sidebarMini" class="w-full h-full bg-[#4A55A2] top-[64px] right-0 p-3 fixed z-20 bg-opacity-30 backdrop-blur-sm lg:hidden hidden ">
    <aside class="max-h-[600px] bg-[#C5DFF8] rounded-lg p-2 min-w-[94px] max-w-[94px]  op-16 left-0 z-20 w-full  shadow-sm">
        <nav class="space-y-2">
            <button modal-open="addVideo" class="w-full py-5 mb-7 bg-white rounded-lg flex justify-center items-center">
                <img src="{{ asset('storage/icon/addVideo.png') }}" alt="" class="w-7 h-7">
            </button>
    
            <a href="{{ url('/dashboard') }}" class="py-2.5 px-4 rounded-lg hover:bg-white flex justify-center items-center">
                <img src="{{ asset('storage/icon/dashboard.png') }}" alt="" class="w-7 h-7">
            </a>
            <a href="{{ url('/video') }}" class="py-2.5 px-4 rounded-lg hover:bg-white flex justify-center items-center">
                <img src="{{ asset('storage/icon/videoList.png') }}" alt="" class="w-7 h-7">
            </a>
            <a href="{{ url('/playlist') }}" class="py-2.5 px-4 rounded-lg hover:bg-white flex justify-center items-center">
                <img src="{{ asset('storage/icon/playlist.png') }}" alt="" class="w-7 h-7">
            </a>
            <a href="{{ url('/profile') }}" class="py-2.5 px-4 rounded-lg hover:bg-white flex justify-center items-center">
                <img src="{{ asset('storage/icon/profile.png') }}" alt="" class="w-7 h-7">
            </a>
            <br><br><br>
            <a href="{{ url('/logout') }}" class="py-2.5 px-4 rounded-lg hover:bg-white flex justify-center items-center">
                <img src="{{ asset('storage/icon/logout.png') }}" alt="" class="w-7 h-7">
            </a>
        </nav>
    </aside>
</div>


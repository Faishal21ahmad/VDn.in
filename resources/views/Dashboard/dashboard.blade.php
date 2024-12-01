<x-layoutdb>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:user>{{ $user->name }}</x-slot:user>
    <x-modals :playlists="$playlists" />
   
    <div class="rounded-lg h-28 flex gap-2 mt-2 mb-2">
        <div class="w-full bg-[#C5DFF8] h-full rounded-lg shadow flex">
            <div class="min-w-[90px] w-1/5 h-full p-2 hidden lg:block">
                <div class="w-full h-full rounded-lg bg-white"></div>
            </div>
            <div class="w-4/5 h-full p-2">
                <h1 class="h-1/2 py-3 px-2 font-bold text-2xl text-[#4A55A2]">{{ $countvideos }}</h1>
                <h1 class="h-1/2 py-2 px-2 font-bold text-[#4A55A2] overflow-clip">Video</h1>
            </div>
        </div>
        <div class="w-full bg-[#C5DFF8] h-full rounded-lg shadow flex">
            <div class="min-w-[90px] w-1/5 h-full p-2 hidden lg:block">
                <div class="w-full h-full rounded-lg bg-white"></div>
            </div>
            <div class="w-4/5 h-full p-2">
                <h1 class="h-1/2 py-3 px-2 font-bold text-2xl text-[#4A55A2]">{{ $countplaylists }}</h1>
                <h1 class="h-1/2 py-2 px-2 font-bold text-[#4A55A2]">Playlist</h1>
            </div>
        </div>
    </div>

    <x-batas>Playlist</x-batas>

    <div id="list-PlayList" class="w-full h-auto mt-2 mb-3 grid grid-cols-[repeat(auto-fill,minmax(250px,1fr))] gap-2">
        <x-cardvidplaylist1 :playlists="$playlists" />
    </div>
    <x-batas>Video</x-batas>
    
    <div id="list-video" class="w-full h-auto mt-2 grid grid-cols-[repeat(auto-fill,minmax(250px,1fr))] gap-2">
        {{-- {{ $videos }} --}}
        <x-cardvid1 :videos="$videos"  />
    </div>

  

 


</x-layoutdb>
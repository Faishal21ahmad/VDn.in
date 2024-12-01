<x-layoutdb>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:user>{{ $user->name }}</x-slot:user>
    
    <x-batas >{{ $title }}</x-batas>
    <x-modals :playlists="$playlists" />
    <div id="list-Video" class="w-full mt-2 grid grid-cols-[repeat(auto-fill,minmax(352px,1fr))] gap-2">
        <x-cardvid2 :videos="$videos" :playlists="$playlists" />
    </div>

</x-layoutdb>
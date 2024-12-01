@props(['videos','playlists'])

@foreach ( $videos as $video )
    <div class="h-[102px] w-full  rounded-lg bg-[#C5DFF8] p-2 flex">
        <div class="min-w-fit h-full rounded-md overflow-hidden border flex">
            <img src="https://i.ytimg.com/vi/{{ $video['codevideo'] }}/hqdefault.jpg" class="my-[-14px] object-fit-cover" />
        </div>
        <div class="w-full overflow-hidden text-ellipsis ">
            <div class="w-full flex items-center justify-between">
                <h1 class="ml-2 max-w-[75%] text-md font-bold text-[#4A55A2] whitespace-nowrap text-ellipsis overflow-hidden">  {{ Str::limit($video['namevideo'], 50) }}</h1>
                <button 
                    type="button" 
                    modal-open="editVideo-{{ $video['id'] }}"
                    modal-data="{{ json_encode($video) }}" 
                    class="w-10 h-10 my-[2px]">
                <img src="{{ asset('storage/icon/edit.png') }}" alt=""></button>
                <x-editvideo :video="$video" :playlists="$playlists" modal-id="editVideo-{{ $video['id'] }}" />
            </div>
            <div class="w-full flex items-center justify-between">
                <p class="ml-2 test-sm text-[#4A55A2]"> {{ $video['playlist']['nameplaylist'] ?? 'No Playlist' }}</p>
                <button 
                    type="button" 
                    modal-open="kondeda-{{ $video['id'] }}" 
                    class="w-10 h-10 my-[2px]">
                    <img src="{{ asset('storage/icon/delete.png') }}" class="" alt="">
                </button>
                <x-kondeda :data="$video" :playlists="$playlists" modal-id="kondeda-{{ $video['id'] }}"/>
            </div>
        </div>
    </div>
@endforeach





@props(['videos', 'playlist_id'])
<div class="w-full h-[100px] flex mt-2 gap-2">
    <button class="w-8 h-full bg-[#C5DFF8] rounded-lg flex items-center justify-center font-bold text-[#4A55A2]">
        &lt;
    </button>
    <div class="w-full h-full flex  gap-2 overflow-auto scrollbar-hide rounded-lg">
        @foreach ($videos as $video)
            @if ($playlist_id == null)
            <a href="/playvid/{{ $video->codevideo }}">
            @else
            <a href="/playvid/{{ $video->codevideo }}/{{ $video->playlist_id }}">
            @endif
                <div class="h-full flex max-w-[350px] bg-[#C5DFF8] rounded-md p-1.5">
                    <div class="min-w-[44%] h-full bg-white rounded-md overflow-hidden flex aspect-video">
                        <img src="https://i.ytimg.com/vi/{{ $video->codevideo }}/hqdefault.jpg" 
                class="my-[-15px] aspect-video" 
                alt="" />
                    </div>
                    <div class="w-[56%] p-2 flex flex-col my-auto">
                        <h1 class="py-1 text-lg font-semibold text-[#4A55A2] whitespace-nowrap text-ellipsis overflow-hidden">
                            {{ $video->namevideo }}
                        </h1>
                        @if ($video->playlist_id)
                            <a class="py-1 text-[#4A55A2]" href="/playvid/{{ $video->codevideo }}/{{ $video->playlist_id }}">
                                {{ $video->playlist->nameplaylist }}
                            </a>
                        @else
                            <a class="py-1 text-[#4A55A2]" href="/playvid/{{ $video->codevideo }}">
                                No Playlist
                            </a>
                        @endif
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <button class="w-8 h-full bg-[#C5DFF8] rounded-lg flex items-center justify-center font-bold text-[#4A55A2]">
        &gt;
    </button>
</div>
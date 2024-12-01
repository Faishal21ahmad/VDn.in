@foreach ( $videos as $video )
<a href="/playvid/{{ $video['codevideo'] }}">
    <div class="rounded-lg bg-[#C5DFF8] p-2 shadow-md">
        <div class="aspect-video rounded-md overflow-hidden mb-2">
            <img src="https://i.ytimg.com/vi/{{ $video['codevideo'] }}/hqdefault.jpg" 
                 class="w-full h-full object-cover" 
                 alt="{{ $video['namevideo'] }}" />
        </div>
        <div class="space-y-1 px-1">
            <h2 class="text-lg font-bold text-[#4A55A2] truncate">
                {{ $video['namevideo'] }}
            </h2>
            <p class="text-sm text-[#4A55A2] opacity-80">
                {{ $video['playlist']['nameplaylist'] ?? 'No Playlist' }}
            </p>
        </div>
    </div>
</a>
 
@endforeach
   
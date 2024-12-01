@foreach ( $playlists as $playlist )
<a href="/playvid/{{ $playlist['codevideo'] }}/{{ $playlist['id'] }}">
    <div class="rounded-lg bg-[#C5DFF8] p-2 shadow-md flex flex-col">
        <div class="aspect-video rounded-md overflow-hidden mb-2 flex-grow">
            <img src="https://i.ytimg.com/vi/{{ $playlist['codevideo'] }}/hqdefault.jpg" 
                 class="w-full h-full object-cover" 
                 alt="{{ $playlist['nameplaylist'] }}" 
                 loading="lazy">
        </div>
        <h2 class="px-1 text-lg font-bold text-[#4A55A2] truncate">
            {{ $playlist['nameplaylist'] }}
        </h2>
    </div>    
</a>

@endforeach
<x-layoutvd>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:user>{{ $user->name }}</x-slot:user>

    <x-batas><a href="/dashboard" class="font-fold pl-2 pr-3"> &lt;</a>{{ $title }}</x-batas>

    <div id="row-content" class="w-full flex flex-col lg:flex-row gap-2 mt-2">
        <!-- Content Video -->
        <div id="main-content" class="bg-[#C5DFF8] rounded-lg aspect-video w-full lg:w-[70.5%] overflow-hidden">
            <iframe 
                id="youtubePlayer" 
                class="w-full h-full" 
                src="https://www.youtube.com/embed/{{ $video[0]['codevideo'] }}" 
                title="{{ $video[0]['namevideo'] }}" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen>
            </iframe>
        </div>
        
        <!-- Content Catat -->
      
        <x-catat :catats="$catats" />
    </div>
    
    <x-cardvid3 :videos="$videos" :playlist_id="$playlist_id" />

</x-layoutvd>
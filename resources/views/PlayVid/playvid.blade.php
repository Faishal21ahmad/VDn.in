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
                src="https://www.youtube.com/embed/{{ $video[0]['codevideo'] }}?enablejsapi=1" 
                title="{{ $video[0]['namevideo'] }}" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen>
            </iframe>

        </div>
        
        <!-- Content Catat -->
      
        <x-catat :catats="$catats" :video="$video[0]['id']"/>
    </div>
    
    <x-cardvid3 :videos="$videos" :playlist_id="$playlist_id" />


<script>
    let player;

// Load YouTube Iframe API
function onYouTubeIframeAPIReady() {
    player = new YT.Player('youtubePlayer', {
        events: {
            'onReady': onPlayerReady,
        }
    });
}

// Add the YouTube iframe API script dynamically
(function addYouTubeIframeAPI() {
    const tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
})();

// When the player is ready
function onPlayerReady(event) {
    console.log("YouTube Player is ready");
}

// Capture time and display in the input field
function captureTimeForNote() {
    if (player && typeof player.getCurrentTime === "function") {
        const currentTime = Math.floor(player.getCurrentTime()); // Get current time in seconds
        const formattedTime = `${Math.floor(currentTime / 60)}:${currentTime % 60}`; // Format as MM:SS
        document.getElementById("time").value = formattedTime; // Set value to input field
    } else {
        console.error("YouTube Player is not initialized");
    }
}

// Seek to the time when clicking on a catat
function seekToTime(time) {
    if (player && typeof player.seekTo === "function") {
        player.seekTo(time); // Seek to the specific time in the video
    } else {
        console.error("YouTube Player is not initialized");
    }
}

</script>
</x-layoutvd>
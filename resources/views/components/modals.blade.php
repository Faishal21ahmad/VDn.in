@props(['playlists','codevideoE','namevideoE','playlistE','thumbnailE'])
<div id="addVideo" class="fixed inset-0 z-50 hidden items-center justify-center bg-[#4A55A2] bg-opacity-30 backdrop-blur-sm">
    <div class="w-full max-w-4xl bg-[#ffffff] rounded-lg shadow-lg p-8 mx-auto">
        <form action="{{ route('video.post') }}" method="POST">
        @csrf
            <!-- Form Title -->
            <h1 class="text-2xl font-bold text-center text-[#4A55A2] mb-6">
                Add YouTube Video Form
            </h1>
            <div class="flex flex-col md:flex-row md:space-x-6">
                <!-- Thumbnail Section -->
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <div class="w-full h-60  rounded-md overflow-hidden flex items-center justify-center">
                        <img id="thumbnail" src="{{ asset('storage/icon/ply.png') }}" alt="Thumbnail" class="w-full h-full object-cover bg-[#C5DFF8]">
                    </div>
                </div>
                <!-- Form Section -->
                <div class="w-full md:w-1/2 space-y-4 text-[#4A55A2] font-bold">
                    <!-- Video Code Input -->
                    <div>
                        <label for="videoCode" class="block text-sm">Video Code</label>
                        <input type="text" id="videoCode" name="videoCode" class="mt-1 block w-full px-4 py-2 bg-[#C5DFF8] rounded-md font-semibold focus:outline-none focus:ring-0" oninput="fetchYouTubeData()">
                    </div>
                    <!-- Video Title Input -->
                    <div>
                        <label for="videoTitle" class="block text-sm ">Video Title</label>
                        <input type="text" id="videoTitle" name="videoTitle" class="mt-1 block w-full px-4 py-2 bg-[#C5DFF8] rounded-md font-semibold focus:outline-none focus:ring-0">
                    </div>
                    <!-- Playlist Input -->
                    <div>
                        <label for="playlist" class="block text-sm">Playlist</label>
                        <select id="playlist" name="playlist" class="mt-1 block w-full px-4 py-3 bg-[#C5DFF8] rounded-md focus:outline-none focus:ring-0">
                            <option value="" selected>None</option>
                            @foreach ($playlists as $playlist)
                            <option value="{{ $playlist['id'] }}">{{ $playlist['nameplaylist'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="mt-6 text-center">
                <button type="button" modal-close="addVideo" class="w-40 px-4 py-2 font-bold text-[#4A55A2] bg-yellow-300 rounded-md hover:bg-yellow-400">
                    Cencel
                </button>
                <button type="submit" class="w-40 px-4 py-2 font-bold text-white bg-[#4A55A2] rounded-md hover:bg-blue-700 ">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

<img class="hidden" id="imghidden" src="{{ asset('storage/icon/ply.png') }}" alt="">






<script>
 











    function fetchYouTubeData() {
        const videoCode = document.getElementById('videoCode').value;
        const titleInput = document.getElementById('videoTitle');
        const thumbnail = document.getElementById('thumbnail');
        const urldevault = document.getElementById('imghidden');

            if (videoCode) {
            const titleUrl = `https://noembed.com/embed?url=https://www.youtube.com/watch?v=${videoCode}`;
            fetch(titleUrl)
                .then(response => response.json())
                .then(data => {
                titleInput.value = data.title || "Title not found";
                thumbnail.src = data.thumbnail_url || urldevault.src;
                })
                .catch(error => {
                titleInput.value = "Error fetching title";
                thumbnail.src = "";
                console.error("Error:", error);
                });
            } else {
            titleInput.value = "";
            thumbnail.src = "";
            }
        }

    
    
       




</script>

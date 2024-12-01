@props(['video', 'playlists', 'modalId'])
<div id="{{ $modalId }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-[#4A55A2] bg-opacity-30 backdrop-blur-sm">
    <div class="w-full max-w-4xl bg-[#ffffff] rounded-lg shadow-lg p-8 mx-auto">
        <form action="{{ route('video.update', ['id'=>$video['id']]) }}" method="POST">
        @csrf
        @method('put')
            <!-- Form Title -->
            <h1 class="text-2xl font-bold text-center text-[#4A55A2] mb-6">
                Edit Form
            </h1>
            <div class="flex flex-col md:flex-row md:space-x-6">
                <!-- Thumbnail Section -->
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <div class="w-full h-60  rounded-md overflow-hidden flex items-center justify-center">
                        <img id="thumbnail" src="https://i.ytimg.com/vi/{{ $video['codevideo'] }}/hqdefault.jpg" alt="Thumbnail" class="w-full h-full object-cover bg-[#C5DFF8]">
                    </div>
                </div>
                <!-- Form Section -->
                <div class="w-full md:w-1/2 space-y-4 text-[#4A55A2] font-bold">
                    <!-- Video Code Input -->
                    <div>
                        <label for="videoCode" class="block text-sm">Kode Video</label>
                        <input 
                            type="text" 
                            id="videoCode" 
                            name="videoCode" 
                            value="{{ $video['codevideo'] }}" 
                            class="mt-1 block w-full px-4 py-2 bg-[#C5DFF8] rounded-md focus:outline-none focus:ring-0">
                    </div>
                    <!-- Video Title Input -->
                    <div>
                        <label for="videoTitle" class="block text-sm">Judul Video</label>
                        <input 
                            type="text" 
                            id="videoTitle"
                            name="videoTitle" 
                            value="{{ $video['namevideo'] }}"
                            class="mt-1 block w-full px-4 py-2 bg-[#C5DFF8] rounded-md focus:outline-none focus:ring-0">
                    </div>
                    <!-- Playlist Category Input -->
                    <div>
                        <label for="playlist" class="block text-sm">Playlist</label>
                        <select id="playlist" name="playlist" class="mt-1 block w-full px-4 py-3 bg-[#C5DFF8] rounded-md focus:outline-none focus:ring-0">
                            <option value="" {{ is_null($video['playlist_id']) ? 'selected' : '' }}>No Playlist</option>
                            @foreach ($playlists as $playlist)
                                <option value="{{ $playlist['id'] }}" 
                                        {{ $playlist['id'] == 1 ? 'selected' : ($video['playlist_id'] == $playlist['id'] ? 'selected' : '') }}>
                                    {{ $playlist['nameplaylist'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="mt-6 text-center">
                <!-- Cancel Button -->
                <button type="button" modal-close="{{ $modalId }}" 
                    class="w-40 px-4 py-2 font-bold text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-400">
                    Cancel
                </button>
                <!-- Submit Button -->
                <button type="submit" 
                    class="w-40 px-4 py-2 font-bold text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

<div id="addplaylist" class="fixed inset-0 z-50 hidden items-center justify-center bg-[#4A55A2] bg-opacity-30 backdrop-blur-sm">>
    <div class="w-full max-w-3xl bg-[#ffffff] rounded-lg shadow-lg p-8 mx-auto">
        <form action="{{ route('playlist.post') }}" method="POST">
        @csrf
            <div class="w-full">
                <h1 class="text-2xl font-bold text-center text-[#4A55A2] mb-6">
                    Tambah Playlist
                </h1>
                <div>
                    <label for="playlist" class="block text-sm font-semibold ">Playlist</label>
                    <input type="text" id="playlist" name="playlist" class="mt-1 block w-full px-4 py-2 bg-[#C5DFF8] rounded-md font-semibold focus:outline-none focus:ring-0">
                </div>
            </div>
            <!-- Submit Button -->
            <div class="mt-10 text-center">
                <!-- Cancel Button -->
                <button type="button" modal-close="addplaylist" 
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



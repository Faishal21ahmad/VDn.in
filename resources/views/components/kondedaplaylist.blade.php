@props(['data', 'playlists', 'modalId'])

<div id="{{ $modalId }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-[#4A55A2] bg-opacity-30 backdrop-blur-sm ">
    <div class="w-full max-w-4xl bg-[#ffffff] rounded-lg shadow-lg p-8 mx-auto">
        <form action="{{ route('playlist.delete', ['id'=>$data['id']]) }}" method="POST">
        @csrf
        @method('delete')
            <div class="w-full">
                <h1 class="text-2xl font-bold text-center text-[#4A55A2] p-5">Yakin ingin menghapus ??</h1>
                <p class="text-1xl font-bold text-center text-[#4A55A2] p-5">{{ $data['nameplaylist'] }}</p>
            </div>
            <!-- Submit Button -->
            <div class="mt-10 text-center">
                <!-- Cancel Button -->
                <button type="button" modal-close="{{ $modalId }}" 
                    class="w-40 px-4 py-2 font-bold text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-400">
                    Cancel
                </button>
                <!-- Submit Button -->
                <button type="submit" 
                    class="w-40 px-4 py-2 font-bold text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Delete
                </button>
            </div>
        </form>
    </div>
</div>

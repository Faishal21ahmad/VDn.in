<div id="catats" class="bg-[#C5DFF8] rounded-lg lg:w-[29.5%] min-h-[648px] p-2">
    <h1 class="text-xl text-[#4A55A2] font-bold w-full p-2 text-center">Catat</h1>
    
    <div id="container" class="w-full">
        <!-- Button -->
        <button 
            id="catatbutton"
            modal-catat-open="inputcatat"
            class="w-full h-[40px] bg-white rounded-lg mb-4"
            onclick="captureTimeForNote()"
        >
            Tambah Catat
        </button>
    
        <!-- Modal-catat -->
        <div 
            id="inputcatat" 
            class="hidden z-10 bg-white shadow-lg rounded-lg p-4 mt-2 absolute"
        >
            <div class="w-full">
                <form id="catatForm" action="{{ route('catat.post') }}" method="post">
                    {{-- action="{{ route('catat.post') }}" method="post" --}}
                    @csrf
                    @method('post')
                    <h2 class="text-lg font-bold mb-3 text-center">Tambah Catat</h2>
                    <div>
                        <input 
                            type="text" 
                            id="time" 
                            name="time" 
                            value=""
                            class="mt-1 block w-full px-4 py-2 bg-[#C5DFF8] rounded-md font-semibold focus:outline-none focus:ring-0">
                        <input 
                            type="number" 
                            id="video" 
                            name="video" 
                            value="{{ $video }}"
                            class="hidden">

                        <textarea 
                            name="catat-input" 
                            id="catat-input" 
                            rows="8" 
                            class="mt-1 block w-full px-4 py-2 bg-[#C5DFF8] rounded-md font-semibold focus:outline-none focus:ring-0"
                            placeholder="Tulis catatan Anda..."
                        ></textarea>
                    </div>
                    <div class="flex pt-2">
                        <button 
                            id="catat-close"
                            type="button" 
                            class="px-4 py-2 w-full bg-gray-200 rounded-md mr-2" 
                            modal-catat-close="inputcatat"
                        >
                            Batal
                        </button>
                        <button 
                            type="submit" 
                            class="px-4 py-2 w-full bg-blue-500 text-white rounded-md"
                        >
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
    <!-- List Catat -->
    <div class="w-full max-h-[630px] overflow-hidden overflow-y-scroll scrollbar-hide relative">
        @foreach ($catats as $catat)
            <div id="catat-{{ $loop->index }}" class="w-full px-4 static">
                <div class="w-full flex">
                    <h2 
                        id="timecatat" 
                        class="w-full cursor-pointer text-blue-500"
                        onclick="seekToTime({{ $catat->timevid }})"
                    >
                        Time: {{ floor($catat->timevid / 60) }}:{{ $catat->timevid % 60 }} Menit
                    </h2>
                    <div class="flex gap-2">
                        <button 
                            id="button-catat-edit"
                            modal-open="modal-catat-{{ $loop->index }}"
                            class="py-0.5 px-2 bg-yellow-400 rounded-md">Edit</button>
                        <button 
                            modal-open="delet-catat-{{ $loop->index }}"
                            class="py-0.5 px-2 bg-red-500 rounded-md">Delete</button>
                    </div>
                </div>
        
                <p class="w-full text-justify">{{ $catat->catat }}</p>
                <div class="h-1 w-full my-2 bg-slate-100"></div>
            </div>
            <x-deletecatat :catat="$catat" modal-id="delet-catat-{{ $loop->index }}" />
            <x-modalcatatedit :catat="$catat" modal-id="modal-catat-{{ $loop->index }}" />
    
        @endforeach
    </div>
</div>


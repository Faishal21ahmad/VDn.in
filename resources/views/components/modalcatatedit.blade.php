@props(['catat','modalId'])

 <!-- Modal-catat -->
 <div id="x1234"  class="w-full top-0 bottom-0 sticky">
     <div id="{{ $modalId }}"
     class="hidden w-full  bg-white shadow-lg rounded-lg p-4">
        <div class="w-full">
            <form id="catatForm" action="{{ route('catat.update', ['id'=>$catat['id']]) }}" method="post">
                {{-- action="{{ route('catat.post') }}" method="post" --}}
                @csrf
                @method('put')
                <h2 class="text-lg font-bold mb-3 text-center">Edit Catat</h2>
                <div>
                    <input 
                        type="text" 
                        id="" 
                        name="" 
                        value="{{ floor($catat->timevid / 60) }}:{{ $catat->timevid % 60 }}"
                        readonly
                        class="mt-1 block w-full px-4 py-2 bg-[#C5DFF8] rounded-md font-semibold focus:outline-none focus:ring-0">

                    <input 
                        type="text" 
                        id="time" 
                        name="time" 
                        value="{{ $catat->timevid }}"
                        class="mt-1 hidden w-full px-4 py-2 bg-[#C5DFF8] rounded-md font-semibold focus:outline-none focus:ring-0">
                    <input 
                        type="number" 
                        id="video" 
                        name="video" 
                        value="{{ $catat->video_id }}"
                        class="hidden">
    
                    <textarea 
                        name="catat-input" 
                        id="catat-input" 
                        rows="8" 
                        class="scrollbar-hide mt-1 block w-full px-4 py-2 bg-[#C5DFF8] rounded-md focus:outline-none focus:ring-0"
                        placeholder="Tulis catatan Anda..."
                    >{{ $catat->catat }}</textarea>
                </div>
                <div class="flex pt-2">
                    <button 
                        id="catat-close"
                        type="button" 
                        class="px-4 py-2 w-full bg-gray-200 rounded-md mr-2" 
                        modal-catat-close="{{ $modalId }}"
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

<script>

</script>
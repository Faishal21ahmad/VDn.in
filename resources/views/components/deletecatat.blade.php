@props(['catat','modalId'])

 <!-- Modal-catat -->
 <div id="" class="w-full top-0 bottom-0 sticky">
     <div id="{{ $modalId }}"
     class="hidden w-full  bg-white shadow-lg rounded-lg p-4">
        <div class="w-full">
            <form id="catatForm" action="{{ route('catat.delete', ['id'=>$catat['id']]) }}" method="post">
                {{-- action="{{ route('catat.post') }}" method="post" --}}
                @csrf
                @method('delete')
                <h2 class="text-lg font-bold mb-3 text-center">Delete Catat</h2>
                <h1 class="text-center"> Yakin ingin Menghapus catatan</h1>
                <h1 class="text-center">Time: {{ floor($catat->timevid / 60) }}:{{ $catat->timevid % 60 }} Menit
                </h1>
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
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
 </div>


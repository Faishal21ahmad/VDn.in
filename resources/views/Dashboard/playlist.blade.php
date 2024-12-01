<x-layoutdb>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:user>{{ $user->name }}</x-slot:user>
    <div class="flex bg-[#C5DFF8] mt-2 rounded-lg">
        <x-batas>{{ $title }}</x-batas>
        <div class="w-1/4 min-w-52 h-full bg-slate-2000 flex p-1.5">
            {{-- <input class="w-full h-full rounded-lg p-4" placeholder="Search playlist" type="text" name="" id=""> --}}
            <button 
                type="button" 
                modal-open = "addplaylist"
                class="w-full py-2 rounded-md bg-white mx-auto text-center font-semibold">Tambah Playlist</button>
        </div>
    </div>
    <x-addplaylist />
    <x-modals :playlists="$playlists" />
    
    <div class="w-full h-full bg-[#C5DFF8] rounded-lg mt-2 p-2">
        <table class="w-full rounded-lg text-[#4A55A2] font-bold">
            <thead class="border-b-4 border-white">
                <tr>
                    <th class="py-2 px-4">No</th>
                    <th class="py-2 px-4">Nama Playlist</th>
                    <th class="py-2 px-4">Jumlah Video</th>
                    <th class="py-2 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $totplaylists as $playlist )
                <tr class="hover-row">
                    <td class="py-2 px-4 text-center">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4">{{ $playlist['nameplaylist'] }}</td>
                    <td class="py-2 px-4 text-center">{{ $playlist['count'] }}</td>
                    <td class="py-2 px-4 text-center">
                        <button
                            type="button"
                            modal-open="editplaylist-{{ $playlist['id'] }}" 
                            modal-data="{{ json_encode($playlist) }}"
                            class="bg-white py-1 px-3 rounded-lg mr-2 hover:bg-gray-100">Edit</button>
                        <button 
                            type="button"   
                            modal-open="kondedaplaylist-{{ $playlist['id'] }}" 
                            modal-data="{{ json_encode($playlist) }}" 
                            class="bg-red-500 text-white py-1 px-3 rounded-lg hover:bg-red-600">Delete</button>
                    </td>
                </tr>
                <x-editplaylist :playlist="$playlist"
                modal-id="editplaylist-{{ $playlist['id'] }}" />
                <x-kondedaplaylist :data="$playlist" modal-id="kondedaplaylist-{{ $playlist['id'] }}"/>
                
                @endforeach
                
               
            </tbody>
        </table>
        
    </div>
    




</x-layoutdb>
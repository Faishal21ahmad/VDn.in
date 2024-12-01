<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Playlist as ModelsPlaylist;

class PlayList extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dasar()
    {
        $playlists = ModelsPlaylist::where('user_id', Auth::user()->id)->get();
        $videos = Video::where('user_id', Auth::user()->id)->get();
        //dd(ModelsPlaylist::countVideo($videos, $playlists));
        // dd($playlists);
        $data = [
            'title' => 'Playlist',
            'user' => Auth::user(),
            'playlists' => $playlists,
            'videos' => $videos,
            'totplaylists' => ModelsPlaylist::countVideo($videos, $playlists),
        ];
        return view('Dashboard.playlist', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input 
        $request->validate([
            'playlist' => 'required', 
            
        ], [  // Penyesuaian Error 
            'playlist.required' => 'Playlist Wajib Disi',
        ]);

        $data = [
            'nameplaylist' => $request->input('playlist'),
            'user_id' => Auth::user()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        // dd($data);

        ModelsPlaylist::create($data);
        return redirect()->back()->with('success', 'Playlist Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

         // validasi input 
        $request->validate([
            'playlist' => 'required', 
            
        ], [  // Penyesuaian Error 
            'playlist.required' => 'Playlist Wajib Disi',
        ]);

         // Periksa apakah video dengan ID terkait ada
        $playlist = ModelsPlaylist::find($id);

        if (!$playlist) {
            return redirect()->back()->withErrors(['message' => 'Playlist tidak ditemukan.']);
        }

        $data = [
            'nameplaylist' => $request->input('playlist'),
            'user_id' => Auth::user()->id,
            'updated_at' => now(),
        ];
        // dd($data);

        $playlist->update($data);
        return redirect()->back()->with('success', 'Playlist Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Cari data playlist berdasarkan ID
            $playlist = ModelsPlaylist::find($id);
    
            // Cek apakah playlist ditemukan
            if (!$playlist) {
                return back()->withErrors('Playlist tidak ditemukan!');
            }
    
            // Hapus playlist
            $playlist->delete();
    
            // Kirimkan response sukses
            return back()->with('success', 'Playlist berhasil dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            // Tangani error jika ada relasi yang mencegah penghapusan
            if ($e->getCode() == '23000') { // Kode error untuk foreign key constraint
                return back()->withErrors('Playlist gagal dihapus, Masih terdapat video terkait');
            }
    
            // Tangani error lainnya
            return back()->withErrors('Terjadi kesalahan saat menghapus playlist!');
        }
    }
}

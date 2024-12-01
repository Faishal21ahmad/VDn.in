<?php

namespace App\Http\Controllers;

use App\Models\Catat;
use App\Models\Video;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayVid extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dasar($codevideo, $id)
    {
        // $videos = Video::where('user_id', Auth::user()->id,)->get();
        // $playlists = Playlist::where('user_id', Auth::user()->id, '')->get();
        $videos = Video::where('user_id', Auth::user()->id)->where('playlist_id', $id)->get();
        $video = Video::where('user_id', Auth::user()->id)->where('codevideo', $codevideo)->get(); 
        $catats = Catat::where('video_id', $video[0]['id'])->orderBy('timevid', 'asc')->get();
        $playlists = Playlist::where('user_id', Auth::user()->id)->get();
    
        $data = [
            'title' => 'Play Video',
            'user' => Auth::user(),
            'playlist_id' => $id,
            'videos' => $videos,
            'video' => $video,
            'catats' => $catats,
            'playlists' => $playlists,
        ];
        return view('PlayVid.playvid', $data);
    }
    public function play($codevideo)
    {
        // $videos = Video::where('user_id', Auth::user()->id,)->get();
        // $playlists = Playlist::where('user_id', Auth::user()->id, '')->get();
        $videos = Video::where('user_id', Auth::user()->id)->inRandomOrder()->get();
        $video = Video::where('user_id', Auth::user()->id)->where('codevideo', $codevideo)->get(); 
        $catats = Catat::where('video_id', $video[0]['id'])->orderBy('timevid', 'asc')->get();
    
        $data = [
            'title' => 'Play Video',
            'user' => Auth::user(),
            'playlist_id' => null,
            'videos' => $videos,
            'video' => $video,
            'catats' => $catats,
        ];
        return view('PlayVid.playvid', $data);
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

        function convertTimeToSeconds($time) {
            $timeParts = explode(":", $time);  // Split the time by ":"
            $minutes = (int) $timeParts[0];  // Convert the minutes part to integer
            $seconds = (int) $timeParts[1];  // Convert the seconds part to integer
        
            return ($minutes * 60) + $seconds;  // Return the total time in seconds
        }
        // validasi input 
        $request->validate([
            'time' => 'required',
            'catat-input' => 'required', 
            'video' => 'required', 
            
        ], [  // Penyesuaian Error 
            'playlist.required' => 'Playlist Wajib Disi',
        ]);

        $data = [
            'timevid' => convertTimeToSeconds($request->input('time')),
            'catat' => $request->input('catat-input'),
            'video_id' => $request->input('video'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        // dd($data);

        Catat::create($data);
        // return response()->json(['success' => true]);
        return back()->with('success', 'Playlist Berhasil Ditambahkan');
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
            'catat-input' => 'required', 
            
        ], [  // Penyesuaian Error 
            'catat-input.required' => 'Catatan terkait Wajib Disi',
        ]);

         // Periksa apakah video dengan ID terkait ada
        $catat = Catat::find($id);

        if (!$catat) {
            return back()->withErrors(['message' => 'Playlist tidak ditemukan.']);
        }

        $data = [
            'timevid' => $request->input('time'),
            'catat' => $request->input('catat-input'),
            'video_id' => $request->input('video'),
            'updated_at' => now(),
        ];
        // dd($data);

        $catat->update($data);
        return back()->with('success', 'catat Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Cari data playlist berdasarkan ID
            $catat = Catat::find($id);
    
            // Cek apakah catat ditemukan
            if (!$catat) {
                return back()->withErrors('catat tidak ditemukan!');
            }
    
            // Hapus catat
            $catat->delete();
    
            // Kirimkan response sukses
            return back()->with('success', 'catat berhasil dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            // Tangani error jika ada relasi yang mencegah penghapusan
            if ($e->getCode() == '23000') { // Kode error untuk foreign key constraint
                return back()->withErrors('catat gagal dihapus, Masih terdapat video terkait');
            }
    
            // Tangani error lainnya
            return back()->withErrors('Terjadi kesalahan saat menghapus playlist!');
        }
    }
}

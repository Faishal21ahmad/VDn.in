<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class VideoList extends Controller
{
    /**
     * Display a listing of the resource.
     */   
    public function dasar()
    {
        $playlists = Playlist::where('user_id', Auth::user()->id)->get();


        $videos = Video::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $data = [
            'title' => 'Video List',
            'user' => Auth::user(),
            'videos' => $videos,
            'playlists' => $playlists,
        ];
        
        return view('Dashboard.video', $data);
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
            'videoCode' => 'required', 
            'videoTitle' => 'required',
            'playlist' => '',
            
        ], [  // Penyesuaian Error 
            'videoCode.required' => 'Code Video Wajib Disi',
            'videoTitle.required' => 'Title Video Wajib Disi',
        ]);

        $data = [
            'codevideo' => $request->input('videoCode'),
            'namevideo' => $request->input('videoTitle'),
            'user_id' => Auth::user()->id,
            'playlist_id' => $request->input('playlist'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        // dd($data);

        Video::create($data);
        return redirect()->back()->with('success', 'Video Berhasil Ditambahkan');
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
        // Validasi input
        $request->validate([
            'videoCode' => 'required', 
            'videoTitle' => 'required',
        ], [  
            'videoCode.required' => 'Code Video wajib diisi.',
            'videoTitle.required' => 'Title Video wajib diisi.',
        ]);

        // Periksa apakah video dengan ID terkait ada
        $video = Video::find($id);

        if (!$video) {
            return redirect()->back()->withErrors(['message' => 'Video tidak ditemukan.']);
        }

        // Persiapkan data untuk diupdate
        $data = [
            'codevideo' => $request->input('videoCode'),
            'namevideo' => $request->input('videoTitle'),
            'playlist_id' => $request->input('playlist'),
            'updated_at' => now(),
        ];
       

        // Update data video
        $video->update($data);
        return redirect()>back()->with('success', 'Video Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mencari video berdasarkan ID
        $video = Video::find($id);
        // Cek apakah video ada
        if (!$video) {
            // Jika video tidak ditemukan, kirimkan response error
            return redirect()->route('videos')->with('error', 'Video tidak ditemukan!');
        }
        $video->delete();

        // Kirimkan response sukses
        return redirect()->route('video')->with('success', 'Video berhasil dihapus!');
    }
}

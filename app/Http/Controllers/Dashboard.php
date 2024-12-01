<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dasar()
    {
       
        $user = Auth::user();
        $videos = Video::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $playlists = Playlist::where('user_id', Auth::user()->id)->get();
        $firstVideos = Video::getFirstVideoPerPlaylist(Auth::user()->id);
        $playlistvideo = Playlist::combinedata($playlists, $firstVideos);
       
        $data = [
            'title' => 'Dashboard',
            'user' => $user,
            'videos' => $videos,
            'playlists' => $playlistvideo,
            'countvideos' => count($videos),
            'countplaylists' => count($playlists),
        ];
        return view('Dashboard.dashboard', $data);
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
        


// {{ route('todo.post') }}
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

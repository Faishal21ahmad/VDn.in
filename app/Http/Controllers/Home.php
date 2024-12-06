<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public function dasar()
    {
        if (Auth::check()) {
            // Jika pengguna terautentikasi, ambil data pengguna
            $user = Auth::user();
        } else {
            // Jika tidak ada pengguna yang terautentikasi, buat objek kosong dengan properti 'name'
            $user = (object) ['name' => null];
        }
        
        $data = [
            'title' => 'home',
            'user' => $user->name, // Pastikan 'name' selalu ada
        ];
        
        return view('home', $data);
        
    }
}

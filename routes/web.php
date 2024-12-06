<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Home;
use App\Http\Controllers\PlayList;
use App\Http\Controllers\PlayVid;
use App\Http\Controllers\Profile;
use App\Http\Controllers\SesiAuth;
use App\Http\Controllers\VideoList;
use Illuminate\Support\Facades\Route;


Route::get('/', [Home::class, 'dasar']);

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiAuth::class, 'getpagelogin'])->name('login');
    Route::get('/register', [SesiAuth::class, 'getpageregister'])->name('register');


    Route::post('/login', [SesiAuth::class, 'axlogin'])->name('login');
    Route::post('/register', [SesiAuth::class, 'axregister'])->name('register');
});

Route::middleware(['auth'])->group(function(){ 
    Route::get('/dashboard', [Dashboard::class, 'dasar'])->name('dashboard');
    Route::get('/playlist', [PlayList::class, 'dasar'])->name('playlist');
    Route::post('/playlist', [PlayList::class, 'store'])->name('playlist.post');
    Route::put('/playlist/{id}', [PlayList::class, 'update'])->name('playlist.update');
    Route::delete('/playlist/{id}', [PlayList::class, 'destroy'])->name('playlist.delete');

    Route::get('/video', [VideoList::class, 'dasar'])->name('video');
    Route::post('/video', [VideoList::class, 'store'])->name('video.post');
    Route::put('/video/{id}', [VideoList::class, 'update'])->name('video.update');
    Route::delete('/video/{id}', [VideoList::class, 'destroy'])->name('video.delete');
    
    Route::get('/profile', [Profile::class, 'dasar'])->name('profile');
    
    Route::get('/playvid/{video:codevideo}/{playlist:id}', [PlayVid::class, 'dasar'])->name('playvid');
    Route::get('/playvid/{video:codevideo}', [PlayVid::class, 'play'])->name('playvid');
    Route::post('/playvid', [PlayVid::class, 'store'])->name('catat.post');
    Route::put('/playvid/{id}', [PlayVid::class, 'update'])->name('catat.update');
    Route::delete('/playvid/{id}', [PlayVid::class, 'destroy'])->name('catat.delete');
   

    Route::get('/logout', [SesiAuth::class, 'logout'])->name('logout'); 


});

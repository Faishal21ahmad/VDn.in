<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiAuth extends Controller
{
    public function getpagelogin()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('Auth.login', $data);
    }
    public function getpageregister()
    {
        $data = [
            'title' => 'Register'
        ];
        return view('Auth.register', $data);
    }

    public function dummp(){
        dd();
    }

    public function axlogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return  redirect()->route('dashboard')->with('success', 'Login Berhasil');
           
        }else{
            return redirect('/login')->withErrors('Email atau Password Salah')->withInput();
        }
     
    }
    public function axregister(Request $request){
        {
            $request->validate([
                'name' => 'required|string|max:255|unique:users',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required',
            ], [
                'name.required' => 'name tidak boleh kosong',
                'name.unique' => 'name sudah digunakan',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 8 karakter',
                'password.confirmed' => 'Konfirmasi password tidak cocok',
                'password_confirmation.required' => 'Konfirmasi password tidak boleh kosong',
            ]);
        
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'email_verified_at' => now(),
                'password' => Hash::make($request->password),
                'remember_token' => Str()->random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            Auth::login($user);
        
            return redirect()->route('dashboard')->with('success', 'Registrasi berhasil dan Anda telah login.');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}

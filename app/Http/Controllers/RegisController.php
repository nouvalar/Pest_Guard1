<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisController extends Controller
{
     // Menampilkan form registrasi
     public function showRegistrationForm()
     {
         return view('register');
     }

     // Proses registrasi
    public function register(Request $request)
    {
        // Validasi input registrasi    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:6', 
            'no_tlp' => 'required|string|min:10|max:15',
            'alamat' => 'required|string|max:500', 
        ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',  // Atur role default
            'password' => bcrypt($request->password),
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
        ]);

        // Redirect ke halaman login setelah registrasi sukses
        return redirect()->route('login')->with('pesan', 'Registrasi Berhasil. Silahkan login.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'

        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user(); // Dapatkan informasi pengguna yang berhasil login
            Session::put('user_role', $user->role); // Simpan hak akses pengguna dalam sesi

            if (Auth::user()->role == 'admin') {
                return redirect('/admin/base');
            } elseif (Auth::user()->role == 'user') {
                return redirect('/home');
            }
        } else {
            // jika gagal login
            return redirect()->back()->withErrors(['email' => 'Username dan password yang dimasukkan tidak sesuai'])->withInput();
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('notificationRead'); // Hapus session notifikasi
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil logout!');
    }
}

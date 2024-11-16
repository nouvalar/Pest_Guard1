<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'no_tlp' => 'nullable|string|max:15',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            'alamat' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        // Ambil data pengguna yang login
        $user = Auth::user();

        if ($user instanceof User) {
            $user->fill([
                'name' => $request->name,
                'no_tlp' => $request->no_tlp,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'password' => $request->password ? bcrypt($request->password) : $user->password,
            ]);
            $user->save();
        }

        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui!');
    }
}

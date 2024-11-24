<?php

namespace App\Http\Controllers;

use App\Models\PesticidePetunjuk;
use Illuminate\Http\Request;

class PesticidePetunjukController extends Controller
{
    // Untuk menampilkan halaman petunjuk untuk pengguna (user)
    public function index()
    {
        // Ambil semua petunjuk dari database
        $petunjuks = PesticidePetunjuk::all();
        // Kirim ke view dengan nama variabel petunjuks
        return view('petunjuk', compact('petunjuks'));
    }

    // Menampilkan detail petunjuk
    public function show($id)
    {
        // Cari petunjuk berdasarkan id
        $petunjuk = PesticidePetunjuk::find($id);
        // Kirim ke view detail dengan variabel petunjuk
        return view('petunjuk.detail', compact('petunjuk'));
    }

    // Admin: Menampilkan daftar petunjuk
    public function adminIndex()
    {
        // Ambil semua petunjuk dari database untuk admin
        $petunjuks = PesticidePetunjuk::all();
        // Kirim ke view admin_petunjuk dengan variabel petunjuks
        return view('admin.admin_petunjuk', compact('petunjuks'));
    }

    // Admin: Menambahkan petunjuk baru
    public function create()
    {
        // Menampilkan form untuk menambah petunjuk baru
        return view('admin.admin_addPetunjuk');
    }

    // Admin: Menyimpan petunjuk baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        try {
            PesticidePetunjuk::create($request->all());
            return redirect()->route('admin.petunjuk.index')->with('success', 'Petunjuk berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan petunjuk. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        $petunjuk = PesticidePetunjuk::find($id);
        if (!$petunjuk) {
            return redirect()->route('admin.petunjuk.index')->with('error', 'Petunjuk tidak ditemukan.');
        }

        try {
            $petunjuk->update($request->all());
            return redirect()->route('admin.petunjuk.index')->with('success', 'Petunjuk berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui petunjuk. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        $petunjuk = PesticidePetunjuk::find($id);
        if (!$petunjuk) {
            return redirect()->route('admin.petunjuk.index')->with('error', 'Petunjuk tidak ditemukan.');
        }

        try {
            $petunjuk->delete();
            return redirect()->route('admin.petunjuk.index')->with('success', 'Petunjuk berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('admin.petunjuk.index')->with('error', 'Gagal menghapus petunjuk. Silakan coba lagi.');
        }
    }

    // Admin: Menampilkan form edit petunjuk
    public function edit($id)
    {
        // Cari petunjuk berdasarkan ID
        $petunjuk = PesticidePetunjuk::find($id);
        if (!$petunjuk) {
            return redirect()->route('admin.petunjuk.index')->with('error', 'Petunjuk tidak ditemukan.');
        }
        // Tampilkan form edit dengan data petunjuk
        return view('admin.admin_editPetunjuk', compact('petunjuk'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesticideReport;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PesticideReportController extends Controller
{
    // Metode untuk menyimpan data laporan
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'nama_pestisida' => 'required|string|max:255',
            'jenis_pestisida' => 'required|string|max:255',
            'dosis' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'document' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only(['nama', 'tanggal', 'jam', 'nama_pestisida', 'jenis_pestisida', 'dosis', 'catatan']);

        // Jika ada file, simpan di storage
        if ($request->hasFile('document')) {
            $data['document_path'] = $request->file('document')->store('documents', 'public');
        }

        // Tambahkan user_id
        $data['user_id'] = Auth::id();

        // Tambahkan status_verifikasi awal
        $data['status_verifikasi'] = 'Belum Diverifikasi';

        // Simpan data ke database
        PesticideReport::create($data);

        return redirect()->back()->with('success', 'Laporan berhasil disimpan.');
    }

    // Metode untuk menampilkan pengingat
    public function showReminders()
    {
        $currentDate = Carbon::now();
        $reminders = PesticideReport::where('user_id', auth()->id()) // Filter berdasarkan user login
            ->get()
            ->map(function ($reminder) use ($currentDate) {
                $reminderDate = Carbon::parse($reminder->tanggal . ' ' . $reminder->jam);
                $reminder->status = $currentDate->greaterThanOrEqualTo($reminderDate->addMinutes(2))
                    ? 'Terlaksana'
                    : 'Belum Terlaksana';
                return $reminder;
            });

        return view('pengingat', compact('reminders'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PesticideReport;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan laporan yang belum diverifikasi
    public function showReports()
    {
        // Mengambil laporan berdasarkan status_verifikasi
        $pendingReports = PesticideReport::where('status_verifikasi', 'Belum Diverifikasi')->get();
        $verifiedReports = PesticideReport::where('status_verifikasi', 'Terlaksana')->get();

        // Kirim data ke view
        return view('admin.admin_reports', compact('pendingReports', 'verifiedReports'));
    }

    // Memverifikasi laporan
    public function verifyReport(Request $request, $id)
    {
        logger('verifyReport called'); // Debugging log
        logger($request->all()); // Debug data request

        // Validasi input
        $validated = $request->validate([
            'status_verifikasi' => 'required|string|in:Belum Diverifikasi,Terlaksana',
        ]);

        $report = PesticideReport::findOrFail($id);
        $report->status_verifikasi = $validated['status_verifikasi'];
        $report->save();

        return redirect()->route('admin.reports')->with('success', 'Status laporan berhasil diperbarui.');
    }
}

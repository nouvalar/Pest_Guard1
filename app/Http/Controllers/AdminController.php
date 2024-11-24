<?php

namespace App\Http\Controllers;

use App\Models\PesticideReport;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function admin()
    {
        return view('admin.base');
    }
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
    
    // fpdf function
    public function downloadPDF()
    {
        $pendingReports = PesticideReport::where('status_verifikasi', 'Belum Diverifikasi')->get();
        $verifiedReports = PesticideReport::where('status_verifikasi', 'Terlaksana')->get();

        // Create PDF instance
        $pdf = new \FPDF();
        $pdf->AddPage();

        // Set default font
        $pdf->SetFont('Arial', 'B', 16);

        // Title
        $pdf->Cell(0, 10, 'Kelola Laporan Pestisida', 0, 1, 'C');
        $pdf->Ln(10);

        // Laporan Belum Diverifikasi
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, 'Laporan Belum Diverifikasi', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);

        // Table headers
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 10, 'No', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Nama', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Tanggal', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Waktu', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Nama Pestisida', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Status Verifikasi', 1, 1, 'C');

        // Pending reports
        $pdf->SetFont('Arial', '', 10);
        $counter = 1;
        foreach ($pendingReports as $report) {
            $pdf->Cell(10, 10, $counter++, 1, 0, 'C');
            $pdf->Cell(40, 10, $report->nama, 1, 0, 'C');
            $pdf->Cell(30, 10, $report->tanggal, 1, 0, 'C');
            $pdf->Cell(30, 10, $report->jam, 1, 0, 'C');
            $pdf->Cell(40, 10, $report->nama_pestisida, 1, 0, 'C');
            $pdf->Cell(40, 10, $report->status_verifikasi, 1, 1, 'C');
        }

        $pdf->Ln(10);

        // Laporan Sudah Diverifikasi
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, 'Laporan Sudah Diverifikasi', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);

        // Table headers
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 10, 'No', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Nama', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Tanggal', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Waktu', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Nama Pestisida', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Status Verifikasi', 1, 1, 'C');

        // Verified reports
        $pdf->SetFont('Arial', '', 10);
        $counter = 1;
        foreach ($verifiedReports as $report) {
            $pdf->Cell(10, 10, $counter++, 1, 0, 'C');
            $pdf->Cell(40, 10, $report->nama, 1, 0, 'C');
            $pdf->Cell(30, 10, $report->tanggal, 1, 0, 'C');
            $pdf->Cell(30, 10, $report->jam, 1, 0, 'C');
            $pdf->Cell(40, 10, $report->nama_pestisida, 1, 0, 'C');
            $pdf->Cell(40, 10, $report->status_verifikasi, 1, 1, 'C');
        }

        // Output PDF
        $pdf->Output('D', 'laporan_pestisida.pdf');
        exit;
    }

}
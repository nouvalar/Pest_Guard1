@extends('layout.main2')

@section('title', 'reports')

@section('contents')
    <!-- Page Content -->
    <div class="container mt-4" style="margin-left: 250px;"> <!-- Menambahkan margin-left sesuai dengan lebar sidebar -->
        <h1 style="font-family: 'Poppins', sans-serif; font-weight: 500;" class="text-center mb-4">Kelola Laporan Pestisida</h1>
        <br>

        <!-- Laporan Belum Diverifikasi -->
        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 500;" class="mt-4">Laporan Belum Diverifikasi</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Nama Pestisida</th>
                        <th>Dokumen</th>
                        <th>Status Verifikasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pendingReports as $report)
                        <tr>
                            <td>{{ $report->nama }}</td>
                            <td>{{ $report->tanggal }}</td>
                            <td>{{ $report->jam }}</td>
                            <td>{{ $report->nama_pestisida }}</td>
                            <td>
                                @if ($report->document_path)
                                    <a href="{{ asset('storage/' . $report->document_path) }}" target="_blank"
                                        class="btn btn-link">Lihat Dokumen</a>
                                @else
                                    <span class="text-muted">Tidak ada dokumen</span>
                                @endif
                            </td>
                            <td>{{ ucfirst($report->status_verifikasi) }}</td>
                            <td>
                                <form action="{{ route('admin.reports.verify', $report->id) }}" method="POST">
                                    @csrf
                                    <label for="status_verifikasi">Pilih Status Verifikasi:</label>
                                    <select name="status_verifikasi" id="status_verifikasi" class="form-control">
                                        <option value="Belum Diverifikasi"
                                            {{ $report->status_verifikasi === 'Belum Diverifikasi' ? 'selected' : '' }}>
                                            Belum Diverifikasi
                                        </option>
                                        <option value="Terlaksana"
                                            {{ $report->status_verifikasi === 'Terlaksana' ? 'selected' : '' }}>
                                            Terlaksana
                                        </option>
                                    </select>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Simpan</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Tidak ada laporan yang belum diverifikasi.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Laporan Sudah Diverifikasi -->
        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 500;" class="mt-4">Laporan Sudah Diverifikasi</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Nama Pestisida</th>
                        <th>Dokumen</th>
                        <th>Status Verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($verifiedReports as $report)
                        <tr>
                            <td>{{ $report->nama }}</td>
                            <td>{{ $report->tanggal }}</td>
                            <td>{{ $report->jam }}</td>
                            <td>{{ $report->nama_pestisida }}</td>
                            <td>
                                @if ($report->document_path)
                                    <a href="{{ asset('storage/' . $report->document_path) }}" target="_blank"
                                        class="btn btn-link">Lihat Dokumen</a>
                                @else
                                    <span class="text-muted">Tidak ada dokumen</span>
                                @endif
                            </td>
                            <td>{{ ucfirst($report->status_verifikasi) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Tidak ada laporan yang sudah diverifikasi.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <style>
        /* Agar konten tidak tumpang tindih dengan navbar dan lebih teratur */
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Menyesuaikan margin untuk konten utama agar tidak tertutup sidebar */
        .container {
            margin-left: 250px; /* Pastikan nilai ini sesuai dengan lebar sidebar */
        }

        /* Jika perlu menyesuaikan margin agar lebih lebar atau lebih sempit */
        .table-responsive {
            margin-top: 20px;
        }

        /* Pastikan tampilan responsif pada semua ukuran layar */
        @media (max-width: 768px) {
            .container {
                margin-left: 0; /* Hilangkan margin pada perangkat kecil */
            }
        }
    </style>
@endsection

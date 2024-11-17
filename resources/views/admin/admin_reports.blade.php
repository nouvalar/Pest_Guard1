<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Laporan Pestisida</title>
    <link rel="stylesheet" href="{{ asset('tmplt/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Main Content -->
    <div class="main-content w-100">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C0E5B7;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Panel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container mt-4">
            <h1 class="text-center mb-4">Kelola Laporan Pestisida</h1>

            <!-- Laporan Belum Diverifikasi -->
            <h3 class="mt-4">Laporan Belum Diverifikasi</h3>
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
                                <td colspan="6" class="text-center text-muted">Tidak ada laporan yang belum
                                    diverifikasi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Laporan Sudah Diverifikasi -->
            <h3 class="mt-4">Laporan Sudah Diverifikasi</h3>
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
                                <td colspan="5" class="text-center text-muted">Tidak ada laporan yang sudah
                                    diverifikasi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

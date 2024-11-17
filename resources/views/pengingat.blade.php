@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="w-100" style="max-width: 800px;">
            <h1 class="text-center mb-4" style="color: black; font-weight: bold;">Jadwal Penyiraman Pestisida</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Nama Pestisida</th>
                            <th>Status</th>
                            <th>Documents</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reminders as $reminder)
                            <tr>
                                <td>{{ $reminder->tanggal }}</td>
                                <td>{{ $reminder->jam }}</td>
                                <td>{{ $reminder->nama_pestisida }}</td>
                                <td>
                                    @if ($reminder->status_verifikasi == 'Terlaksana')
                                        <span style="color: green;">✔</span> {{ $reminder->status_verifikasi }}
                                    @else
                                        <span style="color: red;">✘</span> {{ $reminder->status_verifikasi }}
                                    @endif
                                </td>
                                <td>
                                    @if ($reminder->document_path)
                                        <a href="{{ asset('storage/' . $reminder->document_path) }}" target="_blank">Lihat
                                            Dokumen</a>
                                    @else
                                        Tidak ada dokumen
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="bg-blur"></div>
    <div class="container d-flex justify-content-center" style="min-height: 100vh; margin-top: 95px; margin-left: 270px;">
        <div class="w-100" style="max-width: 800px;">
            <h1 class="text-center mb-4" style="color: white; font-weight: bold;">Riwayat Laporan Pestisida</h1>
            <div class="table-responsive" style="max-height: 500px; overflow-y: auto; border: 0px solid #ddd; border-radius: 8px;">
                <table class="table">
                    <thead style="background-color: #f8f9fa; position: sticky; top: 0; z-index: 100;">
                        <tr>
                            <th style="position: sticky; top: 0; background-color: #C0E5B7;">Nama</th>
                            <th style="position: sticky; top: 0; background-color: #C0E5B7;">Tanggal</th>
                            <th style="position: sticky; top: 0; background-color: #C0E5B7;">Waktu</th>
                            <th style="position: sticky; top: 0; background-color: #C0E5B7;">Nama Pestisida</th>
                            <th style="position: sticky; top: 0; background-color: #C0E5B7;">Status</th>
                            <th style="position: sticky; top: 0; background-color: #C0E5B7;">Catatan</th>
                            <th style="position: sticky; top: 0; background-color: #C0E5B7;">Documents</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reminders as $reminder)
                            <tr>
                                <td>{{ $reminder->nama }}</td>
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
                                <td>{{ $reminder->catatan }}</td>
                                <td>
                                    @if ($reminder->document_path)
                                        <a href="{{ asset('storage/' . $reminder->document_path) }}" target="_blank">Lihat Dokumen</a>
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

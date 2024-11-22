@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="container1">
        @if (session('success'))
            <div class="alert alert-success alert-fixed">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('pelaporan.store') }}" method="POST" enctype="multipart/form-data"
            class="p-4 bg-white rounded shadow">
            @csrf
            <h2 class="text-center mb-4" style="color: black; font-weight: bold;">Form Pelaporan</h2>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control"
                        placeholder="Masukkan Nama Anda">
                </div>
                <div class="col-md-6">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="jam" class="form-label">Jam Penggunaan</label>
                    <input type="time" id="jam" name="jam" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="nama_pestisida" class="form-label">Nama Pestisida</label>
                    <input type="text" id="nama_pestisida" name="nama_pestisida" class="form-control"
                        placeholder="Masukkan Nama Pestisida">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="jenis_pestisida" class="form-label">Jenis Pestisida</label>
                    <input type="text" id="jenis_pestisida" name="jenis_pestisida" class="form-control"
                        placeholder="Masukkan Jenis Pestisida">
                </div>
                <div class="col-md-6">
                    <label for="dosis" class="form-label">Dosis/Jumlah</label>
                    <input type="text" id="dosis" name="dosis" class="form-control"
                        placeholder="Masukkan Dosis/Jumlah">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="catatan" class="form-label">Catatan Tambahan</label>
                    <textarea id="catatan" name="catatan" rows="3" class="form-control" placeholder="Masukkan Catatan Jika Ada"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="document" class="form-label">Upload Dokumen</label>
                    <input type="file" id="document" name="document" class="form-control">
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

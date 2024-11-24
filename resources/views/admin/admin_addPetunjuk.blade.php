@extends('layout.main2')

@section('title', 'Tambah Petunjuk')

@section('contents')
    <div class="container2">
        <h1>Tambah Petunjuk</h1>
        <form action="{{ route('admin.petunjuk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group">
                <label for="subtitle">Subjudul</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle" required>
            </div>
            <div class="form-group">
                <label for="text">Deskripsi</label>
                <textarea name="text" class="form-control" id="text" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan Petunjuk</button>
        </form> 
    </div>
    <style>
        .container2 {
            margin-left: 250px;
            padding: 20px;
            max-width: 800px;
        }
    </style>
@endsection

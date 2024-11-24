@extends('layout.main2')

@section('title', 'Edit Petunjuk')

@section('contents')
    <div class="col-md-10">
        <div class="container1">
            <h1>Edit Petunjuk</h1>
            <form action="{{ route('admin.petunjuk.update', $petunjuk->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $petunjuk->title }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="subtitle">Subjudul</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle"
                        value="{{ $petunjuk->subtitle }}" required>
                </div>
                <div class="form-group">
                    <label for="text">Deskripsi</label>
                    <textarea name="text" class="form-control" id="text" rows="5" required>{{ $petunjuk->text }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
            </form>
        </div>
    </div>
    <style>
        .container1 {
            margin-left: 250px;
            padding: 20px;
            max-width: 800px;
        }
    </style>
@endsection

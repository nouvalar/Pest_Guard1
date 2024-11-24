@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">{{ $petunjuk->title }}</h1>
            <p class="card-text" style="text-align: justify;">
                <strong>Subjudul:</strong> {{ $petunjuk->subtitle }}<br><br>
                <strong>Deskripsi:</strong> {{ $petunjuk->text }}
            </p>
            <a href="/petunjuk" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection

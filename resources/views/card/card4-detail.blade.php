@extends('layout.main')

@section('content')
    <div class="bg-blur"></div>
    <div class="container mt-5 position-relative">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Card Title 4</h1>
                <p class="card-text">This is the detailed content for Card 4.</p>
                <a href="/petunjuk" class="btn btn-primary">Back to Cards</a>
            </div>
        </div>
    </div>

    <style>
        /* Mempastikan card tetap terlihat jelas */
        .container .card {
            background: white;
            border-radius: 8px;
            /* Opsional: sudut membulat */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Opsional: bayangan */
            z-index: 1;
            /* Pastikan di atas background */
            position: relative;
        }
    </style>
@endsection

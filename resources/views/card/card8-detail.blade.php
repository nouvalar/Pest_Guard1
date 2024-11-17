@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="bg-blur"></div>
    <div class="container mt-5 position-relative">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Card Title 8</h1>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Nisl tincidunt eget nullam non. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. 
                    Volutpat odio facilisis mauris sit amet massa. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Mi eget mauris pharetra et. 
                    Non tellus orci ac auctor augue. Elit at imperdiet dui accumsan sit. Ornare arcu dui vivamus arcu felis. 
                    Egestas integer eget aliquet nibh praesent. 
                    In hac habitasse platea dictumst quisque sagittis purus. Pulvinar elementum integer enim neque volutpat ac..</p>
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
            margin-left: 260px; /* Tambahkan jarak dari sidebar */
            padding: 20px; /* Opsional: jarak dalam */
        }
    </style>
@endsection

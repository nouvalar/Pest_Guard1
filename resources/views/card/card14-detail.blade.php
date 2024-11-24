@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="bg-blur"></div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                {{-- <h1 class="card-title">Insektisida</h1> --}}
                <p class="card-text" style="text-align: justify;">
                    <strong>Nama Pestisida:</strong> Asam Sulfat, Diquat<br><br>
                    <strong>Tujuan Penggunaan:</strong> Mempercepat pengeringan tanaman sebelum panen untuk memastikan hasil optimal, terutama pada tanaman seperti kedelai dan kapas.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Asam Sulfat:</strong> 10-15 liter per hektar.<br>
                    - <strong>Diquat:</strong> 2-4 liter per hektar.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Larutkan desikan sesuai dosis dalam tangki semprot.<br>
                    - Semprotkan larutan secara merata ke seluruh tanaman sebelum panen.<br>
                    - Lakukan aplikasi pada pagi atau sore hari.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Gunakan alat pelindung diri selama aplikasi.<br>
                    - Hindari aplikasi saat cuaca buruk.<br>
                    - Ikuti petunjuk label untuk keamanan dan efektivitas penggunaan.<br>
                </p>
                
                
                <a href="/petunjuk" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

    <style>
        /* Flexbox untuk memusatkan card */
        .container {
            display: flex;
            justify-content: right;
            align-items: center;
            min-height: 100vh; /* Tinggi minimal 100% layar */
        }

        .container .card {
            background: white;
            border-radius: 12px; /* Opsional: sudut membulat */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Opsional: bayangan */
            z-index: 1; /* Pastikan di atas background */
            width: 970px; /* Lebar card tetap */
            padding: 30px; /* Opsional: jarak dalam */
        }
    </style>
@endsection






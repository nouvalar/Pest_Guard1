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
                    <strong>Nama Pestisida:</strong> Asam Trikloroasetat, Diquat<br><br>
                    <strong>Tujuan Penggunaan:</strong> Digunakan untuk merontokkan daun tanaman sebelum panen, mempermudah proses panen mekanis pada tanaman seperti kapas dan kedelai.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Asam Trikloroasetat:</strong> 1-2 liter per hektar.<br>
                    - <strong>Diquat:</strong> 2-4 liter per hektar.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Larutkan defoliant sesuai dosis dalam tangki semprot.<br>
                    - Semprotkan larutan secara merata ke daun tanaman sebelum panen.<br>
                    - Lakukan aplikasi pada pagi atau sore hari untuk menghindari penguapan berlebihan.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Gunakan alat pelindung diri seperti masker dan sarung tangan selama aplikasi.<br>
                    - Hindari aplikasi pada cuaca buruk seperti hujan atau angin kencang.<br>
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






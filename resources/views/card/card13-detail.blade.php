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
                    <strong>Nama Pestisida:</strong> Tembaga Sulfat, Tributilin<br><br>
                    <strong>Tujuan Penggunaan:</strong> Digunakan untuk mencegah pertumbuhan organisme laut, seperti teritip dan alga, pada permukaan kapal atau struktur yang terendam air.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Tembaga Sulfat:</strong> 2-5 gram per meter persegi permukaan.<br>
                    - <strong>Tributilin:</strong> 1-2 gram per meter persegi permukaan.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Larutkan antifouling sesuai dosis dalam cat atau larutan pelapis.<br>
                    - Aplikasikan pada permukaan yang membutuhkan perlindungan, seperti lambung kapal.<br>
                    - Biarkan kering sebelum kontak dengan air.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Gunakan alat pelindung diri selama aplikasi untuk mencegah kontak langsung.<br>
                    - Hindari penggunaan di lingkungan sensitif ekologis.<br>
                    - Ikuti petunjuk label untuk efektivitas penggunaan.<br>
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






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
                    <strong>Nama Pestisida:</strong> Asam Gibberelat, Etefon<br><br>
                    <strong>Tujuan Penggunaan:</strong> Memodifikasi pertumbuhan tanaman untuk mempercepat pembungaan, meningkatkan kualitas buah, atau mempercepat pemasakan pada tanaman hortikultura.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Asam Gibberelat:</strong> 10-20 ppm (part per million) dalam larutan semprot.<br>
                    - <strong>Etefon:</strong> 100-200 ppm untuk mempercepat pemasakan buah.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Larutkan regulator sesuai dosis dalam tangki semprot.<br>
                    - Semprotkan larutan secara merata ke bagian tanaman yang membutuhkan, seperti bunga atau buah.<br>
                    - Aplikasi sebaiknya dilakukan pada pagi hari untuk hasil terbaik.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Hindari aplikasi berlebih yang dapat merusak tanaman.<br>
                    - Gunakan alat pelindung diri saat mencampur dan menyemprot.<br>
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






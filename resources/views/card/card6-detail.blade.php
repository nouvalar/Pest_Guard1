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
                    <strong>Nama Pestisida:</strong> Abamektin, Propargit<br><br>
                    <strong>Tujuan Penggunaan:</strong> Mengendalikan tungau atau mite yang menyerang daun tanaman. Tungau dapat menyebabkan kerusakan dengan menghisap cairan daun, mengakibatkan daun menguning, mengerut, atau rontok.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Abamektin:</strong> 0.5-1 ml per liter air.<br>
                    - <strong>Propargit:</strong> 2 ml per liter air.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Larutkan akarisida sesuai dosis dalam tangki semprot.<br>
                    - Semprotkan larutan secara merata ke daun tanaman, terutama bagian bawah daun tempat tungau biasanya hidup.<br>
                    - Lakukan penyemprotan pada pagi atau sore hari untuk menghindari penguapan berlebihan.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Gunakan alat pelindung diri seperti masker, sarung tangan, dan pelindung mata saat mencampur atau menyemprot.<br>
                    - Hindari penyemprotan saat angin kencang atau sebelum hujan.<br>
                    - Pastikan untuk mengikuti petunjuk label untuk keamanan dan efektivitas penggunaan.<br>
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






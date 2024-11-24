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
                    <strong>Nama Pestisida:</strong> Mankozeb, Propikonazol<br><br>
                    <strong>Tujuan Penggunaan:</strong> Mengendalikan penyakit jamur pada tanaman seperti tomat, kentang, cabai, dan pepaya.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong> 2-3 ml per liter air.<br><br>
                    <strong>Cara Aplikasi:</strong> Larutkan ke dalam air dan semprotkan merata pada daun, batang, dan buah.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Gunakan alat pelindung diri.<br>
                    - Hindari penyemprotan saat hujan atau angin kencang.<br>
                    - Ikuti petunjuk dosis dan masa tunggu pada label.<br>
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

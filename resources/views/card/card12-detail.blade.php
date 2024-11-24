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
                    <strong>Nama Pestisida:</strong> Minyak Neem, Metil Antranilat<br><br>
                    <strong>Tujuan Penggunaan:</strong> Digunakan untuk mengusir serangga, burung, atau mamalia kecil yang dapat merusak tanaman, tanpa membunuhnya.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Minyak Neem:</strong> 2-3 ml per liter air.<br>
                    - <strong>Metil Antranilat:</strong> 50-100 ppm sebagai semprotan daun.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Larutkan repelen sesuai dosis dalam tangki semprot.<br>
                    - Semprotkan larutan ke bagian tanaman yang sering diserang hama.<br>
                    - Aplikasi dilakukan secara berkala sesuai kebutuhan.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Hindari aplikasi saat hujan untuk mencegah pencucian larutan.<br>
                    - Simpan repelen di tempat aman dan jauh dari jangkauan anak-anak.<br>
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






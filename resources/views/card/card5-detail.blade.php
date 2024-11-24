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
                    <strong>Nama Pestisida:</strong> Aldikarb, Fenamifos<br><br>
                    <strong>Tujuan Penggunaan:</strong> Mengendalikan nematoda yang menyerang akar tanaman, yang dapat menyebabkan kerusakan pada sistem perakaran dan mengurangi produktivitas tanaman.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Aldikarb:</strong> 10-20 kg per hektar.<br>
                    - <strong>Fenamifos:</strong> 5-10 liter per hektar.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Taburkan Aldikarb ke tanah di sekitar tanaman secara merata.<br>
                    - Larutkan Fenamifos sesuai dosis dalam air, kemudian semprotkan ke tanah di sekitar akar tanaman.<br>
                    - Lakukan aplikasi pada pagi atau sore hari untuk menghindari penguapan yang berlebihan.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Gunakan alat pelindung diri seperti masker dan sarung tangan saat menangani pestisida.<br>
                    - Hindari aplikasi pada saat tanah sangat basah atau saat hujan.<br>
                    - Ikuti petunjuk pada label untuk memastikan keamanan dan efektivitas penggunaan.<br>
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






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
                    <strong>Nama Pestisida:</strong> Metil Bromida, Fosfin<br><br>
                    <strong>Tujuan Penggunaan:</strong> Digunakan untuk mengendalikan hama pada tempat penyimpanan, seperti gudang atau silo. Fumigan bekerja dengan menghasilkan gas beracun yang mampu menembus ke dalam bahan atau ruang tertutup untuk membunuh hama yang tersembunyi.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Metil Bromida:</strong> 20-30 gram per meter kubik ruang tertutup.<br>
                    - <strong>Fosfin:</strong> 3-5 tablet per ton bahan yang disimpan.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Pastikan ruangan atau silo tempat aplikasi benar-benar tertutup rapat.<br>
                    - Tempatkan fumigan di lokasi strategis dalam ruang penyimpanan.<br>
                    - Biarkan ruang tertutup selama waktu yang disarankan pada label (biasanya 24-48 jam).<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Gunakan alat pelindung diri seperti respirator selama penanganan fumigan.<br>
                    - Jangan masuk ke ruang yang telah difumigasi sebelum ventilasi menyeluruh dilakukan.<br>
                    - Ikuti petunjuk label untuk keselamatan dan efektivitas penggunaan.<br>
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






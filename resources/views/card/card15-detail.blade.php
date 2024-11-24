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
                    <strong>Nama Pestisida:</strong> Feromon, Lure<br><br>
                    <strong>Tujuan Penggunaan:</strong> Digunakan untuk menarik hama atau serangga ke perangkap tertentu. Atraktan membantu mengurangi populasi hama secara efektif tanpa membunuh langsung, sehingga sering digunakan dalam program pengelolaan hama terpadu.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Feromon:</strong> 1-2 kapsul per perangkap.<br>
                    - <strong>Lure:</strong> 10-20 ml per perangkap.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Pasang perangkap di lokasi strategis seperti sekitar lahan pertanian yang banyak hama.<br>
                    - Letakkan kapsul atau cairan atraktan di dalam perangkap.<br>
                    - Periksa dan kosongkan perangkap secara berkala untuk mempertahankan efektivitas.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Atraktan tidak beracun tetapi tetap gunakan sesuai petunjuk untuk efektivitas maksimal.<br>
                    - Tempatkan perangkap jauh dari area aktivitas manusia untuk menghindari gangguan.<br>
                    - Simpan atraktan di tempat yang sejuk dan kering untuk menjaga kualitas.<br>
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






@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="bg-blur"></div>
    <div class="container mt-5 position-relative">
        <div class="card">
            <div class="card-body">
                {{-- <h1 class="card-title">Card Title 2</h1> --}}
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
        /* Mempastikan card tetap terlihat jelas */
        .container .card {
            background: white;
            border-radius: 8px;
            /* Opsional: sudut membulat */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Opsional: bayangan */
            z-index: 1;
            /* Pastikan di atas background */
            position: relative;
            margin-left: 260px; /* Tambahkan jarak dari sidebar */
            padding: 20px; /* Opsional: jarak dalam */
        }
    </style>
@endsection

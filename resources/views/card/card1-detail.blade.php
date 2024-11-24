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
                    <strong>Nama Pestisida:</strong> Imidakloprid, Deltametrin<br><br>
                    <strong>Tujuan Penggunaan:</strong> Digunakan untuk membasmi hama seperti kutu daun, wereng, ulat api,
                    dan lalat buah pada tanaman seperti padi, cabai, jeruk, dan kakao.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Imidakloprid:</strong> 2 ml per liter air, efektif untuk hama penghisap.<br>
                    - <strong>Deltametrin:</strong> 0.5 ml per liter air, efektif untuk ulat dan penggerek batang.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Campurkan insektisida sesuai dosis ke dalam air bersih.<br>
                    - Semprotkan larutan secara merata ke bagian tanaman, terutama daun dan batang.<br>
                    - Lakukan penyemprotan pada pagi atau sore hari untuk hasil maksimal.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Gunakan alat pelindung diri seperti masker dan sarung tangan saat mencampur atau menyemprot.<br>
                    - Hindari penyemprotan saat angin kencang atau sebelum hujan.<br>
                    - Perhatikan masa tunggu sebelum panen sesuai petunjuk label untuk keamanan pangan.<br>
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

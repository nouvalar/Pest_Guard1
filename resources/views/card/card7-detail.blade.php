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
                    <strong>Nama Pestisida:</strong> Tembaga Oksiklorida, Streptomisin<br><br>
                    <strong>Tujuan Penggunaan:</strong> Mengendalikan penyakit bakteri pada tanaman, seperti hawar bakteri, yang dapat menyebabkan kerusakan pada daun, batang, dan buah tanaman. Penyakit ini sering kali mengurangi hasil panen dan kualitas produk.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Tembaga Oksiklorida:</strong> 3 gram per liter air.<br>
                    - <strong>Streptomisin:</strong> 0.5 gram per liter air.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Larutkan bakterisida sesuai dosis dalam tangki semprot.<br>
                    - Semprotkan larutan secara merata ke seluruh bagian tanaman yang terkena bakteri, termasuk daun, batang, dan buah.<br>
                    - Lakukan aplikasi pada pagi atau sore hari untuk hasil maksimal.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Gunakan alat pelindung diri seperti masker dan sarung tangan selama penanganan.<br>
                    - Hindari penyemprotan saat cuaca buruk, seperti hujan atau angin kencang.<br>
                    - Pastikan mengikuti petunjuk label untuk keamanan dan efektivitas penggunaan.<br>
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






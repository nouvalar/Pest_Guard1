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
                    <strong>Nama Pestisida:</strong> Metaldehida, Mesurol<br><br>
                    <strong>Tujuan Penggunaan:</strong> Mengendalikan moluska seperti siput atau bekicot yang sering merusak tanaman dengan memakan daun, batang, atau bagian tanaman lainnya. Kehadiran moluska dapat mengurangi hasil panen dan merusak kualitas tanaman.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Metaldehida:</strong> 3-5 kg per hektar.<br>
                    - <strong>Mesurol:</strong> 4 kg per hektar.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Taburkan butiran moluskisida di sekitar tanaman yang rentan atau di area tempat siput banyak ditemukan.<br>
                    - Hindari penempatan butiran terlalu dekat dengan batang tanaman untuk mencegah risiko kerusakan tanaman.<br>
                    - Aplikasi sebaiknya dilakukan pada pagi atau sore hari untuk meningkatkan efektivitas.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Simpan moluskisida di tempat yang aman dan jauh dari jangkauan anak-anak atau hewan peliharaan.<br>
                    - Gunakan alat pelindung diri seperti sarung tangan selama aplikasi.<br>
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






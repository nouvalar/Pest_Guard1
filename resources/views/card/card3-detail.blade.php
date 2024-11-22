@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="bg-blur"></div>
    <div class="container mt-5 position-relative">
        <div class="card">
            <div class="card-body">
                {{-- <h1 class="card-title">Card Title 3</h1> --}}
                <p class="card-text" style="text-align: justify;">
                    <strong>Nama Pestisida:</strong> Glifosat, Parakuat<br><br>
                    <strong>Tujuan Penggunaan:</strong> Digunakan untuk mengendalikan gulma atau tumbuhan pengganggu di lahan pertanian, melindungi tanaman utama, dan meningkatkan hasil pertanian.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Glifosat:</strong> 2-4 liter per hektar.<br>
                    - <strong>Parakuat:</strong> 2-3 liter per hektar.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Larutkan herbisida sesuai dosis dalam tangki semprot.<br>
                    - Semprotkan langsung ke gulma yang tumbuh di sekitar tanaman utama.<br>
                    - Lakukan penyemprotan pada pagi atau sore hari untuk hasil maksimal.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Gunakan alat pelindung diri seperti masker, sarung tangan, dan pelindung mata.<br>
                    - Hindari penyemprotan saat cuaca buruk, seperti hujan atau angin kencang.<br>
                    - Pastikan untuk mengikuti petunjuk dosis dan masa tunggu pada label untuk keamanan hasil panen.<br>
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

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
                    <strong>Nama Pestisida:</strong> Glifosat, Parakuat<br><br>
                    <strong>Tujuan Penggunaan:</strong> Digunakan untuk mengendalikan gulma atau tumbuhan pengganggu di lahan pertanian, melindungi tanaman utama, dan meningkatkan hasil pertanian.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Glifosat:</strong> 2-4 liter per hektar.<br>
                    - <strong>Parakuat:</strong> 2-3 liter per hektar.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    @extends('layout.main')

                    @section('sidebar')
                        @include('partials.sidebar')
                    @endsection
                    
                    @section('content')
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">{{ $petunjuk->title }}</h1>
                                <p class="card-text" style="text-align: justify;">
                                    <strong>Subjudul:</strong> {{ $petunjuk->subtitle }}<br><br>
                                    <strong>Deskripsi:</strong> {{ $petunjuk->text }}
                                </p>
                                <a href="/petunjuk" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                    @endsection
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

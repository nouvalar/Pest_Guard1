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
                    <strong>Nama Pestisida:</strong> Brodifakum, Warfarin<br><br>
                    <strong>Tujuan Penggunaan:</strong> Digunakan untuk membasmi tikus yang merusak tanaman atau hasil panen, seperti tanaman padi, jagung, dan kedelai. Selain itu, digunakan untuk melindungi hasil panen yang disimpan di gudang dari serangan tikus.<br><br>
                    <strong>Dosis yang Direkomendasikan:</strong><br>
                    - <strong>Brodifakum:</strong> 10-20 gram umpan beracun per titik.<br>
                    - <strong>Warfarin:</strong> 15 gram umpan beracun per titik.<br><br>
                    <strong>Cara Aplikasi:</strong><br>
                    - Tempatkan umpan beracun di jalur tikus atau di sekitar sarangnya.<br>
                    - Gunakan umpan di lokasi yang sering dilalui tikus untuk hasil maksimal.<br>
                    - Hindari kontak langsung dengan umpan menggunakan alat pelindung seperti sarung tangan.<br><br>
                    <strong>Catatan Penting:</strong><br>
                    - Simpan rodentisida di tempat yang aman dan jauh dari jangkauan anak-anak atau hewan peliharaan.<br>
                    - Gunakan alat pelindung diri seperti masker dan sarung tangan selama penanganan.<br>
                    - Ikuti petunjuk pada label untuk keamanan dan efektivitas penggunaan.<br>
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

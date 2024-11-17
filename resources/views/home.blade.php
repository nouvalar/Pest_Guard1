@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <!-- Main Content -->
    <div class="container-fluid d-flex justify-content-center" style="height: 100vh; margin-top: 70px;">
        <div class="text-center">
            <h1 class="mb-4">Selamat Datang, Petani!</h1>
            <div class="main-content bg-secondary text-white mx-auto p-4" style="width: 800px; height: auto; border-radius: 20px;">
                <p style="text-align: justify;">
                    Selamat datang di platform digital kami yang dirancang khusus untuk membantu petani dalam meningkatkan efisiensi penggunaan pestisida. 
                    Dengan alat dan panduan yang inovatif, kami berkomitmen untuk mendukung keberlanjutan pertanian dan melindungi hasil panen Anda dari hama secara efektif.
                </p>
                <p style="text-align: justify;">
                    Pastikan untuk memanfaatkan semua fitur yang kami sediakan, mulai dari pengingat jadwal hingga pelaporan penggunaan pestisida. Mari bersama-sama mewujudkan pertanian yang lebih cerdas dan ramah lingkungan.
                </p>
            </div>
        </div>
    </div>
@endsection

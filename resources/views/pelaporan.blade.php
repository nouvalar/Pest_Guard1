@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('pelaporan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Slider Container -->
        <div class="page-pelaporan" style="margin-top: -130px; min-height: 100vh;">
            <div class="swiper form-container-pelaporan">
                <!-- Wrapper untuk Slide -->
                <div class="swiper-wrapper">
                    <!-- Slide Pertama -->
                    <div class="swiper-slide">
                        <h2 style="color: black; font-weight: bold;">Nama</h2>
                        <hr>
                        <input type="text" id="nama" name="nama">
                        <div class="navigation-buttons">
                            <button class="swiper-button-next next-btn"></button>
                        </div>
                    </div>

                    <!-- Slide Kedua -->
                    <div class="swiper-slide">
                        <h2 style="color: black; font-weight: bold;">Pelaporan Penggunaan Pestisida</h2>
                        <hr>
                        <input type="date" id="tanggal" name="tanggal">
                        <div class="navigation-buttons">
                            <button class="swiper-button-prev prev-btn"></button>
                            <button class="swiper-button-next next-btn"></button>
                        </div>
                    </div>

                    <!-- Slide Ketiga -->
                    <div class="swiper-slide">
                        <h2 style="color: black; font-weight: bold;">Jam Penggunaan</h2>
                        <hr>
                        <input type="time" id="jam" name="jam">
                        <div class="navigation-buttons">
                            <button class="swiper-button-prev prev-btn"></button>
                            <button class="swiper-button-next next-btn"></button>
                        </div>
                    </div>

                    <!-- Slide Keempat -->
                    <div class="swiper-slide">
                        <h2 style="color: black; font-weight: bold;">Nama Pestisida</h2>
                        <hr>
                        <input type="text" id="nama_pestisida" name="nama_pestisida">
                        <div class="navigation-buttons">
                            <button class="swiper-button-prev prev-btn"></button>
                            <button class="swiper-button-next next-btn"></button>
                        </div>
                    </div>

                    <!-- Slide Kelima -->
                    <div class="swiper-slide">
                        <h2 style="color: black; font-weight: bold;">Jenis Pestisida</h2>
                        <hr>
                        <input type="text" id="jenis_pestisida" name="jenis_pestisida">
                        <div class="navigation-buttons">
                            <button class="swiper-button-prev prev-btn"></button>
                            <button class="swiper-button-next next-btn"></button>
                        </div>
                    </div>

                    <!-- Slide Keenam -->
                    <div class="swiper-slide">
                        <h2 style="color: black; font-weight: bold;">Dosis/Jumlah</h2>
                        <hr>
                        <input type="text" id="dosis" name="dosis">
                        <div class="navigation-buttons">
                            <button class="swiper-button-prev prev-btn"></button>
                            <button class="swiper-button-next next-btn"></button>
                        </div>
                    </div>

                    <!-- Slide Ketujuh -->
                    <div class="swiper-slide">
                        <h2 style="color: black; font-weight: bold;">Catatan Tambahan</h2>
                        <hr>
                        <input type="text" id="catatan" name="catatan">
                        <div class="navigation-buttons">
                            <button class="swiper-button-prev prev-btn"></button>
                            <button class="swiper-button-next next-btn"></button>
                        </div>
                    </div>

                    <!-- Slide kedelapan -->
                    <div class="swiper-slide">
                        <h2 style="color: black; font-weight: bold;">Upload Dokumen</h2>
                        <hr>
                        <input type="file" id="document" name="document">
                        <div class="navigation-buttons">
                            <button class="swiper-button-prev prev-btn"></button>
                            <button type="submit" class="submit-btn">Submit</button>
                        </div>
                    </div>

                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </form>

    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: false,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoHeight: true,
            allowTouchMove: false,
        });
    </script>
@endsection

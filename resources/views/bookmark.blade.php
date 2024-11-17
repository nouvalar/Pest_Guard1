@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="bg-blur"></div>

    <!-- Main Content Wrapper (Scrollable) -->
    <div class="scrollable-content">
        <!-- Card Layout Wrapper -->
        <div class="card-wrapper">
            <div class="card-container">

                @php
                    $cards = [
                        [
                            'title' => 'News Update 1',
                            'text' => 'Berita 3 Pilgub saling senggol!.',
                            'img' => asset('/assets/img/image.png'),
                            'link' => 'https://20.detik.com/detikupdate/20241117-241117122/video-debat-pramono-rk-soal-pemindahan-balai-kota-singgung-imajinasi-ikn'
                        ],
                        [
                            'title' => 'News Update 2',
                            'text' => 'Perkembangan politik terkini di tanah air.',
                            'img' => asset('/assets/img/bgshort.jpeg'),
                            'link' => 'https://www.detik.com'
                        ],
                        [
                            'title' => 'News Update 3',
                            'text' => 'Informasi terbaru mengenai kesehatan dan gaya hidup.',
                            'img' => asset('/assets/img/bgshort.jpeg'),
                            'link' => 'https://www.kompas.com'
                        ],
                        [
                            'title' => 'News Update 4',
                            'text' => 'Berita seputar olahraga dan hasil pertandingan terbaru.',
                            'img' => asset('/assets/img/bgshort.jpeg'),
                            'link' => 'https://www.bbc.com/sport'
                        ],
                        [
                            'title' => 'News Update 5',
                            'text' => 'Berita ekonomi dan analisis pasar terkini.',
                            'img' => asset('/assets/img/bgshort.jpeg'),
                            'link' => 'https://www.bloomberg.com'
                        ],
                        [
                            'title' => 'News Update 6',
                            'text' => 'Berita ekonomi dan analisis pasar terkini.',
                            'img' => asset('/assets/img/bgshort.jpeg'),
                            'link' => 'https://www.bloomberg.com'
                        ],
                        [
                            'title' => 'News Update 7',
                            'text' => 'Berita ekonomi dan analisis pasar terkini.',
                            'img' => asset('/assets/img/bgwide.jpeg'),
                            'link' => 'https://www.bloomberg.com'
                        ],
                        [
                            'title' => 'News Update 8',
                            'text' => 'Berita ekonomi dan analisis pasar terkini.',
                            'img' => asset('/assets/img/bgwide.jpeg'),
                            'link' => 'https://www.bloomberg.com'
                        ],
                        [
                            'title' => 'News Update 9',
                            'text' => 'Berita hiburan dan gosip selebriti terkini.',
                            'img' => asset('/assets/img/bgwide.jpeg'),
                            'link' => 'https://www.ew.com'
                        ]
                    ];
                @endphp

                <!-- Render Card -->
                @foreach ($cards as $card)
                    <div class="card">
                        <img src="{{ asset($card['img']) }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $card['title'] }}</h5>
                            <p class="card-text">{{ $card['text'] }}</p>
                            <a href="{{ $card['link'] }}" class="btn btn-primary" target="_blank">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="bg-blur"></div>
    <div class="custom-container mt-5">
        <div class="custom-card-grid row row-cols-1 row-cols-md-3 g-4">
            @php
                $cards = [
                    1 => [
                        'title' => 'Card title 1',
                        'subtitle' => 'Subtitle 1',
                        'text' => 'This is the text for card 1.',
                    ],
                    2 => [
                        'title' => 'Card title 2',
                        'subtitle' => 'Subtitle 2',
                        'text' => 'This is the text for card 2.',
                    ],
                    3 => [
                        'title' => 'Card title 3',
                        'subtitle' => 'Subtitle 3',
                        'text' => 'This is the text for card 3.',
                    ],
                    4 => [
                        'title' => 'Card title 4',
                        'subtitle' => 'Subtitle 4',
                        'text' => 'This is the text for card 4.',
                    ],
                    5 => [
                        'title' => 'Card title 5',
                        'subtitle' => 'Subtitle 5',
                        'text' => 'This is the text for card 5.',
                    ],
                    6 => [
                        'title' => 'Card title 6',
                        'subtitle' => 'Subtitle 6',
                        'text' => 'This is the text for card 6.',
                    ],
                    7 => [
                        'title' => 'Card title 7',
                        'subtitle' => 'Subtitle 7',
                        'text' => 'This is the text for card 7.',
                    ],
                    8 => [
                        'title' => 'Card title 8',
                        'subtitle' => 'Subtitle 8',
                        'text' => 'This is the text for card 8.',
                    ],
                    9 => [
                        'title' => 'Card title 9',
                        'subtitle' => 'Subtitle 9',
                        'text' => 'This is the text for card 9.',
                    ],
                ];

            @endphp

            @foreach ($cards as $index => $card)
                <div class="col">
                    <div class="custom-card h-100">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">{{ $card['title'] }}</h5>
                            <h6 class="custom-card-subtitle mb-2 text-muted">{{ $card['subtitle'] }}</h6>
                            <p class="custom-card-text">{{ $card['text'] }}</p>
                            <a href="/card/{{ $loop->index + 1 }}" class="custom-card-link">Another link</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

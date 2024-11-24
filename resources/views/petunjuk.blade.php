@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar') 
@endsection

@section('content')
    <div class="bg-blur"></div>
    <div class="custom-container mt-5">
        <h2 class="text-center">Petunjuk Penggunaan Pestisida</h2>
        <div class="custom-card-grid row row-cols-1 row-cols-md-3 g-4">
            @foreach ($petunjuks as $petunjuk)
                <div class="col">
                    <div class="custom-card h-100">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title" style="font-size: 26px; font-weight: bold; color: #29593D;">
                                {{ $petunjuk->title }}
                            </h5>
                            <h6 class="custom-card-subtitle mb-2 text-muted">{{ $petunjuk->subtitle }}</h6>
                            <p class="custom-card-text" style="text-align: justify;">
                                {{ $petunjuk->text }}
                            </p>
                            <a href="{{ route('card.detail', $petunjuk->id) }}" class="custom-card-link">Cek Detailnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

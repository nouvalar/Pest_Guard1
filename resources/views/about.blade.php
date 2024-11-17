@extends('layout.app')

@section('title', 'About Us')

@section('content')
    <div class="about-section">
        <div class="about-text">
            <h1>About Us</h1>
            <p>
                PestGuard adalah platform digital inovatif yang bertujuan untuk membantu petani dalam
                mengelola penggunaan pestisida secara lebih bijaksana dan bertanggung jawab.
            </p>
            <!-- Button "See More" -->
            <a href="{{ route('login') }}" class="btn btn-success" style="padding: 10px 20px; border-radius: 5px; font-weight: bold;">
                See More
            </a>
        </div>
    </div>
@endsection

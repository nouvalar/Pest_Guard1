@extends('layout.app')

@section('header')
    <!-- Sidebar -->
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="main-content">
        @yield('main-content')
    </div>
@endsection

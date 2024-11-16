@extends('layout.app')

@section('content')
    <div class="register-page">
        <div class="form-box">
            <h2>Create an account</h2>
            <p>Already have an account? <a href="/login">Log in</a></p>

            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="name" required>
                </div>

                <div class="input-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="register-btn">Create an account</button>
            </form>
        </div>
    </div>
@endsection

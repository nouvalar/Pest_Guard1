@extends('layout.app')

@section('content')

    <body class="login-body">
        <div class="login-wrapper">
            <div class="login-box">
                <h2>Log in</h2>
                <p class="signup-link">Don't have an account? <a href="/register">Sign up</a></p>
                @if (Session::has('pesan'))
                    <script>
                        Swal.fire('Berhasil Register, Silahkan login!');
                    </script>
                @endif
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="login-btn">Log in</button>
                </form>
            </div>
        </div>

        @if (Session::has('failed'))
            <script>
                Swal.fire('Username dan password yang dimasukkan tidak sesuai');
            </script>
        @endif

        @if (Session::has('success'))
            <script>
                Swal.fire("Anda telah berhasil logout.");
            </script>
        @endif
    </body>
@endsection

@extends('layout.app')

@section('content')

<head>
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h2, strong {
            font-weight: 600; /* Semi-Bold */
        }
    </style>
</head>

    <body class="login-body">
        <div class="login-wrapper">
            <div class="login-box">
                <div style="text-align: center;"><h2><strong>Masuk</strong></h2></div>
                
                {{-- <p class="signup-link">Belum memiliki akun?<a href="/register"> Klik untuk Daftar</a></p> --}} 
                @if (Session::has('pesan'))
                    <script>
                        Swal.fire('Berhasil Register, Silahkan login!');
                    </script>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" value="{{ old('email') }}" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <p class="signup-link">Belum memiliki akun?<a href="/register"> Klik untuk Daftar</a></p>
                    <button type="submit" class="login-btn">Masuk Sekarang</button>
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

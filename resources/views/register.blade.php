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
            font-weight: 600; 
        }
    </style>
</head>

    <body class="register-body">
        <div class="register-page">
            <div class="login-box">
                <div style="text-align: center;"><h2><strong>Daftar</strong></h2></div>

                <form action="{{ route('register.submit') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="name" required
                            style="width: 100%; padding: 10px; box-sizing: border-box;">
                    </div>

                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required
                            style="width: 100%; padding: 10px; box-sizing: border-box;">
                    </div>

                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required
                            style="width: 100%; padding: 10px; box-sizing: border-box;">
                    </div>

                    <div class="input-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            style="width: 100%; padding: 10px; box-sizing: border-box;">
                    </div>

                    <div class="input-group">
                        <label for="no_tlp">Nomor Telepon</label>
                        <input type="text" id="no_tlp" name="no_tlp" placeholder="Contoh: 081272453356" required
                            style="width: 100%; padding: 10px; box-sizing: border-box;">
                    </div>

                    <div class="input-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap Anda"
                            required style="width: 100%; padding: 10px; box-sizing: border-box;">
                    </div>
                    <button type="submit" class="register-btn"
                        style="width: 100%; padding: 10px; background-color: #8AC184; color: white; border: none; border-radius: 5px; cursor: pointer;">Buat Akun</button>
                </form>
            </div>
        </div>
    </body>
@endsection

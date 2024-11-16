@extends('layout.app')

@section('content')
<body class="register-body">
    <div class="register-page">
        <div class="form-box">
            <h2>Create an account</h2>

            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="name" required>
                </div>
                
                <div class="input-group">   
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                
                <div class="input-group">
                    <label for="no_tlp">Nomor Telepon</label>
                    <input type="text" id="no_tlp" name="no_tlp" placeholder="Contoh: 081234567890" required>
                </div>
                
                <div class="input-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap Anda" required>
                </div>                               
                <button type="submit" class="register-btn">Create an account</button>
            </form>
        </div>
    </div>
</body>
@endsection

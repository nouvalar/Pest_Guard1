{{ dd('edit.blade.php dirender') }}
@extends('layout.main')

@section('header')
    <!-- Navbar -->
    @include('partials.sidebar')
@endsection

@section('content')

    <body class="edit-body">
        <div class="edit-page">
            <div class="form-box">
                <h2>Edit Profile</h2>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (isset($user))
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <label for="name">Nama</label>
                            <input type="text" id="name" name="name" value="{{ old('name', $user->name ?? '') }}"
                                required>
                        </div>
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email"
                                value="{{ old('email', $user->email ?? '') }}" required>
                        </div>
                        <div class="input-group">
                            <label for="no_tlp">Nomor Telepon</label>
                            <input type="text" id="no_tlp" name="no_tlp"
                                value="{{ old('no_tlp', $user->no_tlp ?? '') }}" placeholder="Contoh: 081234567890">
                        </div>
                        <div class="input-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" id="alamat" name="alamat"
                                value="{{ old('alamat', $user->alamat ?? '') }}" placeholder="Masukkan alamat lengkap Anda">
                        </div>

                        <div class="input-group">
                            <label for="password">Password (Opsional)</label>
                            <input type="password" id="password" name="password"
                                placeholder="Kosongkan jika tidak ingin mengubah">
                        </div>

                        <button type="submit" class="edit-btn">Simpan Perubahan</button>
                    </form>
                @endif
            </div>
        </div>
    </body>
@endsection

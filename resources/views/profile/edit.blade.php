@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')

    <div class="edit-profile-container">
        <div class="form-box">
            <h2>Edit Profile</h2>

            @if (session('success'))
                <div class="alert alert-success edit-profile-alert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger edit-profile-alert">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger edit-profile-alert">
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
                    <div class="edit-profile-input-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name ?? '') }}"
                            required>
                    </div>
                    <div class="edit-profile-input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email ?? '') }}"
                            required>
                    </div>
                    <div class="edit-profile-input-group">
                        <label for="no_tlp">Nomor Telepon</label>
                        <input type="text" id="no_tlp" name="no_tlp" value="{{ old('no_tlp', $user->no_tlp ?? '') }}"
                            required>
                    </div>
                    <div class="edit-profile-input-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" value="{{ old('alamat', $user->alamat ?? '') }}"
                            placeholder="Masukkan alamat lengkap Anda">
                    </div>
                    <div class="edit-profile-input-group">
                        <label for="password">Password (Opsional)</label>
                        <input type="password" id="password" name="password"
                            placeholder="Kosongkan jika tidak ingin mengubah">
                    </div>
                    <button type="submit" class="edit-profile-btn">Update</button>
                </form>
            @endif
        </div>
    </div>
    <!-- End of Main Content -->
@endsection

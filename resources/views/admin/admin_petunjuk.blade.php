@extends('layout.main2')

@section('title', 'Daftar Petunjuk')

@section('contents')
<div class="content-wrapper">
    <h1 class="mb-4 mt-3">Daftar Petunjuk</h1>
    <hr class="mx-auto my-3">
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.petunjuk.create') }}" class="btn btn-primary">
            <i class="fa fa-plus pe-2"></i>Tambah Petunjuk Baru
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Subjudul</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($petunjuks->isEmpty())
                                    <tr>
                                        <td colspan="4" class="text-center">Tidak ada petunjuk yang tersedia.</td>
                                    </tr>
                                @else
                                    @foreach ($petunjuks as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->subtitle }}</td>
                                        <td>
                                            <a href="{{ route('admin.petunjuk.edit', $item->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                            <form action="{{ route('admin.petunjuk.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

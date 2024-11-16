@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100" style="padding-left: 420px;">
    <div class="container" style="margin-left: 50px; max-width: 800px;">
        <h1 class="text-center mb-4" style="color: black; font-weight: bold;">Jadwal Penyiraman Pestisida</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="text-center" style="background-color: #29593D; color: white;">
                    <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle text-center">10 November 2024</td>
                        <td class="align-middle text-center">08:00 WIB</td>
                        <td class="align-middle text-center">
                            <button class="btn btn-success btn-sm">
                                ✔ Tandai Dilaksanakan
                            </button>
                        </td>
                        <td class="align-middle text-center">Terlaksana</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">12 November 2024</td>
                        <td class="align-middle text-center">08:00 WIB</td>
                        <td class="align-middle text-center">
                            <button class="btn btn-warning btn-sm">
                                ✏️ Edit Pengingat
                            </button>
                        </td>
                        <td class="align-middle text-center">Belum Terlaksana</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

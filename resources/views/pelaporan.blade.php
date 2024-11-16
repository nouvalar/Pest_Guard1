@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar') 
@endsection

@section('content')
    <div class="page-report-custom">
        <div class="report-container-custom">
            <div class="report-header-custom">
                <h2>Pelaporan Penggunaan Pestisida</h2>
            </div>
            <form class="report-form-custom">
                <div class="form-group-custom">
                    <label for="date">Tanggal</label>
                    <div class="input-container">
                        <input type="date" id="date" name="date" placeholder="yyyy-mm-dd" />
                        <span class="icon-calendar">
                        </span>
                    </div>
                </div>
                <button type="submit" class="next-button-custom">NEXT</button>
            </form>
        </div>
    </div>
@endsection

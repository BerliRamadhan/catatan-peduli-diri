@extends('dashboard.layouts.main')

@section('container')
    <div class="row justify-content-end">
        <div class="col-md-10 border rounded-3 p-3">
            <p>Selamat Datang <strong>{{ auth()->user()->name }}</strong> di Aplikasi Peduli Diri</p>
        </div>
    </div>

    <a href="/catatan" class="btn btn-primary float-end mt-3">Lihat Catatan Perjalanan</a>
@endsection
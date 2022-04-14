@extends('layouts.main')

@section('container')
    
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Login Peduli Diri</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="nik" class="form-control rounded-top @error('nik') is-invalid @enderror" id="nik" placeholder="NIK" required value="{{ old('nik') }}">
                    <label for="nik">NIK</label>
                    @error('nik')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
                    <label for="username">Nama Lengkap</label>
                    @error('name')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3"><a href="#">Saya Pengguna Baru</a></small>
        </main>
    </div>
</div>

@endsection

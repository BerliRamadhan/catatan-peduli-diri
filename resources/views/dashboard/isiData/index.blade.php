@extends('dashboard.layouts.main')

@section('container')
    <div class="row justify-content-end">
        <div class="col-md-10 border rounded-3 p-5">

            <form action="/catat" method="POST">
                @csrf
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-3">
                        <label for="tanggal" class="col-form-label">Tanggal</label>
                    </div>
                    <div class="col-5">
                        <input type="text" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" aria-describedby="passwordHelpInline" value="{{ old('tanggal') }}">
                        @error('tanggal')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
    
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-3">
                        <label for="waktu" class="col-form-label">Waktu</label>
                    </div>
                    <div class="col-5">
                        <input type="text" id="waktu" name="waktu" class="form-control @error('waktu') is-invalid @enderror" aria-describedby="passwordHelpInline" value="{{ old('waktu') }}">
                        @error('waktu')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
    
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-3">
                        <label for="lokasi" class="col-form-label">Lokasi yang dikunjungi</label>
                    </div>
                    <div class="col-5">
                        <input type="text" id="lokasi" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" aria-describedby="passwordHelpInline" value="{{ old('lokasi') }}">
                        @error('lokasi')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
    
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-3">
                        <label for="suhu" class="col-form-label">Suhu Tubuh</label>
                    </div>
                    <div class="col-5">
                        <input type="text" id="suhu" name="suhu" class="form-control @error('suhu') is-invalid @enderror" aria-describedby="passwordHelpInline" value="{{ old('suhu') }}">
                        @error('suhu')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-end">Simpan</button>
            </form>


        </div>
    </div>
@endsection
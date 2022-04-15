@extends('dashboard.layouts.main')

@section('container')
    <div class="row justify-content-end">
        <div class="col-md-10 border rounded-3 p-5">

            <div class="row g-3 align-items-center mb-3">
                <div class="col-3">
                    <label for="tanggal" class="col-form-label">Tanggal</label>
                </div>
                <div class="col-5">
                    <input type="text" id="tanggal" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-3">
                    <label for="jam" class="col-form-label">Jam</label>
                </div>
                <div class="col-5">
                    <input type="text" id="jam" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-3">
                    <label for="lokasi" class="col-form-label">Lokasi yang dikunjungi</label>
                </div>
                <div class="col-5">
                    <input type="text" id="lokasi" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-3">
                    <label for="suhu" class="col-form-label">Suhu Tubuh</label>
                </div>
                <div class="col-5">
                    <input type="text" id="suhu" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <button type="submit" class="btn btn-primary float-end">Simpan</button>

        </div>
    </div>
@endsection
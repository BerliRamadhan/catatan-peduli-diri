@extends('dashboard.layouts.main')

@section('container')
    <div class="row justify-content-end">
        <div class="col-md-11 border rounded-3 p-3">

            <div class="row g-3">
                <div class="col-sm-3">
                    <label for="urut" class="col-form-label">Urutkan Berdasarkan</label>
                </div>
                <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" id="urut">
                        <option selected>Tanggal</option>
                        <option value="1">Waktu</option>
                        <option value="2">Lokasi</option>
                        <option value="3">Suhu Tubuh</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Urutkan</button>
                </div>
            </div>

        </div>
    </div>

    <div class="row justify-content-end mt-3">
        <div class="col-md-11 border rounded-3 p-3">
            <table class="table table-striped table-hover table-sm">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Suhu Tubuh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>13-09-2021</td>
                        <td>08:00</td>
                        <td>Toko Buku Hangat</td>
                        <td>36.2</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>13-09-2021</td>
                        <td>10:00</td>
                        <td>Bulan Dept Store</td>
                        <td>36.2</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>16-09-2021</td>
                        <td>15:00</td>
                        <td>Pagi Jogging Area</td>
                        <td>37:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <a href="/buat" class="btn btn-primary float-end mt-3">Isi Catatan Perjalanan</a>
@endsection
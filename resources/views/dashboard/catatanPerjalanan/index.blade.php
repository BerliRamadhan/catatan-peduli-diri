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

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <table class="table table-striped table-hover table-sm">
                <thead class="table-dark">
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Suhu Tubuh</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catatans as $catatan)
                    <tr>
                        {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                        <td>{{ $catatan->tanggal }}</td>
                        <td>{{ $catatan->waktu }}</td>
                        <td>{{ $catatan->lokasi }}</td>
                        <td>{{ $catatan->suhu }}</td>
                        <td>
                            <a href="#" class="badge bg-primary"><i class="fa fa-eye"></i></span></a>
                            <a href="#" class="badge bg-warning"><i class="fa fa-pencil"></i></span></a>
                            <form action="/catat/{{ $catatan->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge bg-danger border-0"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <a href="/buat" class="btn btn-primary float-end mt-3">Isi Catatan Perjalanan</a>
@endsection
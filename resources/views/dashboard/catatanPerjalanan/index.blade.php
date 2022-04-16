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
                            {{-- <a href="/catat/{{ $catatan->id }}" class="badge bg-primary"><i class="fa fa-eye"></i></span></a> --}}
                            <a href="/catat/{{ $catatan->id }}/edit" class="badge bg-warning"><i class="fa fa-pencil"></i></span></a>
                            <form action="/catat/{{ $catatan->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <a href="/buat" class="btn btn-primary float-end mt-3">Isi Catatan Perjalanan</a>



    {{-- Modal --}}
    <div class="modal fade" id="editCatatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModal">Edit Catatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="input-group mb-3 date" id="datepicker">
                            <input type="text" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" autocomplete="off" placeholder="Masukkan Tanggal">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white d-block">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                            @error('tanggal')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" id="waktu" name="waktu" class="form-control @error('waktu') is-invalid @enderror" value="{{ old('waktu') }}" placeholder="Masukkan Waktu">
                            @error('waktu')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group mb-3">
                            <input type="text" id="lokasi" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi') }}" placeholder="Masukkan Lokasi">
                            @error('lokasi')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" id="suhu" name="suhu" class="form-control @error('suhu') is-invalid @enderror" aria-describedby="passwordHelpInline" value="{{ old('suhu') }}" placeholder="Masukkan Suhu">
                            @error('suhu')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
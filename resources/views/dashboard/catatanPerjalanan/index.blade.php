@extends('dashboard.layouts.main')

@section('container')
    <div class="row justify-content-end">
        <div class="col-md-11 border rounded-3 p-3">

            <form action="/catatan" method="get">
                <div class="row g-3">
                    <div class="col-sm-3">
                        <label for="urut" class="col-form-label">Urutkan Berdasarkan</label>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-select" aria-label="Default select example" id="urut" name="urut">
                            <option value="tanggal" {{ request('urut') == 'tanggal' ? 'selected' : '' }}>Tanggal</option>
                            <option value="waktu" {{ request('urut') == 'waktu' ? 'selected' : '' }}>Waktu</option>
                            <option value="lokasi" {{ request('urut') == 'lokasi' ? 'selected' : '' }}>Lokasi</option>
                            <option value="suhu" {{ request('urut') == 'suhu' ? 'selected' : '' }}>Suhu Tubuh</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> Urutkan</button>
                    </div>
                </div>
            </form>

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
                            <a href="/catat/{{ $catatan->id }}" class="badge bg-primary modal-view" data-bs-toggle="modal" data-bs-target="#viewModal" data-id="{{ $catatan->id }}"><i class="fa fa-eye"></i></span></a>
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
    
    <a href="/buat" class="btn btn-primary float-end mt-3 mb-5"><i class="fa fa-plus"></i> Isi Catatan Perjalanan</a>



    {{-- Modal --}}
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lokasi-catatan"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <p>Pada tanggal <span id="tanggal-catatan" class="fw-bold"></span> saya pergi ke <span id="tempat-catatan" class="fw-bold"></span> pada jam <span id="waktu-catatan" class="fw-bold"></span> dengan suhu <span id="suhu-catatan" class="fw-bold"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                        {{-- <button type="submit" class="btn btn-primary">Edit</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
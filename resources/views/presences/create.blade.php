@extends('layouts.app', ['title' => 'Create New Presence'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Presensi</h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Presensi</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('presences.store') }}" method="post">
                            @csrf
                            <table class="table table-bordered table-hovered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Pelajar</th>
                                        <th>NIP</th>
                                        <th>Kehadiran</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->users->user_complements->name }}</td>
                                            <td>{{ $student->users->student_complements->nip_number }}</td>
                                            <td>
                                                <select class="form-select form-control" name="presence">
                                                    <option value="" selected disabled>Pilih Presensi</option>
                                                    <option value="A">Hadir</option>
                                                    <option value="B">Tidak Hadir</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-select form-control" name="notes">
                                                    <option value="" selected>Pilih Opsi</option>
                                                    <option value="A">Sakit</option>
                                                    <option value="B">Izin</option>
                                                    <option value="C">Tanpa Keterangan</option>
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

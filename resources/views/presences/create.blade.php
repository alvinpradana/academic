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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="semester" class="form-label">Pilih Semester</label>
                                    <select id="semester" class="form-select form-control text-capitalize" name="semester">
                                        <option value="0" selected disabled>Pilih Opsi</option>
                                        @foreach ($semesters as $semester)
                                            <option value="{{ $semester->id }}">{{ $semester->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="lesson" class="form-label">Pilih Kelas</label>
                                    <select id="lesson" class="form-select form-control" name="lesson">
                                        <option value="0" selected disabled>Pilih Opsi</option>
                                        @foreach ($class as $item)
                                            <option value="{{ $item->id }}">{{ $item->levels->level }} {{ $item->majors->title }} {{ $item->grades->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="lesson" class="form-label">Pilih Mata Pelajaran</label>
                                    <select id="lesson" class="form-select form-control" name="lesson">
                                        <option value="0" selected disabled>Pilih Opsi</option>
                                        @foreach ($lessons as $lesson)
                                            <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
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
                                            <td>
                                                <input type="text" class="form-control" name="student[{{ $index++ }}]" value="{{ $student->users->user_complements->name }}" disabled>
                                                <input type="hidden" class="form-control" name="student[{{ $index++ }}]" value="{{ $student->users->user_complements->name }}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="student[{{ $index++ }}]" value="{{ $student->users->student_complements->nip_number }}" disabled>
                                                <input type="hidden" class="form-control" name="student[{{ $index++ }}]" value="{{ $student->users->student_complements->nip_number }}">
                                            </td>
                                            <td>
                                                <select class="form-select form-control" name="presence[{{ $index++ }}]">
                                                    <option value="A">Hadir</option>
                                                    <option value="B">Tidak Hadir</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-select form-control" name="notes[{{ $index++ }}]">
                                                    <option value="" selected>-</option>
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

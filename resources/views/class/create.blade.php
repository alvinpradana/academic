@extends('layouts.app', ['title' => 'Create New Class'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Kelas</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Kelas</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('class.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="class-level" class="form-label">Level Kelas</label>
                                <select id="class-level" class="form-select form-control" name="level">
                                    <option value="0" selected disabled>Select level</option>
                                    @foreach ($levels as $level)
                                        <option value="{{ $level->id }}">{{ $level->level }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="class-major" class="form-label">Jurusan</label>
                                <select id="class-major" class="form-select form-control" name="major">
                                    <option value="0" selected disabled>Select major</option>
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}">{{ $major->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="class-grade" class="form-label">Grade Kelas</label>
                                <select id="class-grade" class="form-select form-control" name="grade">
                                    <option value="0" selected disabled>Select grade</option>
                                    @foreach ($grades as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="teacher-class" class="form-label">Teacher's Class</label>
                                <select id="teacher-class" class="form-select form-control" name="teacher">
                                    <option value="0" selected disabled>Select teacher</option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">{{ $teacher->user_complements->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="notes" name="notes" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

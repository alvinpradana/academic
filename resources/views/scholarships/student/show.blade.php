@extends('layouts.app', ['title' => 'Show Data Sholarship'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Data Penerima Beasiswa</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Detail Data Penerima Beasiswa</h6>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="mb-3">
                                <label for="student" class="form-label">Nama Siswa</label>
                                <input type="text" class="form-control" id="student" name="student" value="{{ $student_scholarship->users->user_complements->name }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="scholarship" class="form-label">Beasiswa</label>
                                <input type="text" class="form-control" id="scholarship" name="scholarship" value="{{ $student_scholarship->scholarships->title }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="notes" name="notes" rows="3" disabled>{{ $student_scholarship->notes }}</textarea>
                            </div>
                            <a class="btn btn-primary" href="{{ route('student-scholarship.edit', $student_scholarship->id) }}">
                                Edit Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

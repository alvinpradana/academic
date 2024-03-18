@extends('layouts.app', ['title' => 'Show Data Class'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Data Kelas</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Detail Data Kelas</h6>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Level Kelas</label>
                                <input type="text" class="form-control" id="level" name="level" value="{{ $class->levels->level }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="major" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" id="major" name="major" value="{{ $class->majors->title }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="grade" class="form-label">Grade Kelas</label>
                                <input type="text" class="form-control" id="grade" name="grade" value="{{ $class->grades->title }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="teacher" class="form-label">Wali Kelas</label>
                                <input type="text" class="form-control" id="teacher" name="teacher" value="{{ $class->users->user_complements->name }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="notes" name="notes" rows="3" disabled>{{ $class->notes }}</textarea>
                            </div>
                            <a class="btn btn-primary" href="{{ route('class.edit', $class->id) }}">
                                Edit Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

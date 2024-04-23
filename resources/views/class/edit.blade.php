@extends('layouts.app', ['title' => 'Create New Class'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Kelas</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Kelas</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('class.update', $class->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="class-level" class="form-label">Level Kelas</label>
                                <select id="class-level" class="form-select form-control @error('level') is-invalid @enderror" name="level">
                                    <option value="0" selected disabled>Select level</option>
                                    @foreach ($levels as $level)
                                        <option {{ old('level') == $level->id ? "selected" : "" }} value="{{ $level->id }}" @selected($level->id == $class->levels->id)>{{ $level->level }}</option>
                                    @endforeach
                                </select>
                                @error('level')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="class-major" class="form-label">Jurusan</label>
                                <select id="class-major" class="form-select form-control @error('major') is-invalid @enderror" name="major">
                                    <option value="0" selected disabled>Select major</option>
                                    @foreach ($majors as $major)
                                        <option {{ old('major') == $major->id ? "selected" : "" }} value="{{ $major->id }}" @selected($major->id == $class->majors->id)>{{ $major->title }}</option>
                                    @endforeach
                                </select>
                                @error('major')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="class-grade" class="form-label">Grade Kelas</label>
                                <select id="class-grade" class="form-select form-control @error('grade') is-invalid @enderror" name="grade">
                                    <option value="0" selected disabled>Select grade</option>
                                    @foreach ($grades as $grade)
                                        <option {{ old('grade') == $grade->id ? "selected" : "" }} value="{{ $grade->id }}" @selected($grade->id == $class->grades->id)>{{ $grade->title }}</option>
                                    @endforeach
                                </select>
                                @error('grade')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="teacher-class" class="form-label">Wali Kelas</label>
                                <select id="teacher-class" class="form-select form-control @error('teacher') is-invalid @enderror" name="teacher">
                                    <option value="0" selected disabled>Select teacher</option>
                                    @foreach ($teachers as $teacher)
                                        <option {{ old('teacher') == $teacher->id ? "selected" : "" }} value="{{ $teacher->id }}" @selected($teacher->id == $class->users->id)>{{ $teacher->user_complements->name }}</option>
                                    @endforeach
                                </select>
                                @error('teacher')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="notes" name="notes" rows="3">{{ $class->notes }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

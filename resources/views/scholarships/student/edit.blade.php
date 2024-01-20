@extends('layouts.app', ['title' => 'Update Scholarship'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Penerima Beasiswa</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Ubah Data Penerima Beasiswa</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('student-scholarship.update', $student_scholarship->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="student" class="form-label">Nama Siswa</label>
                                <select id="student" class="form-select form-control" name="student">
                                    <option value="0" selected disabled>Select student</option>
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}" @selected($student->id == $student_scholarship->student_id)>{{ $student->user_complements->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="scholarship" class="form-label">Beasiswa</label>
                                <select id="scholarship" class="form-select form-control" name="scholarship">
                                    <option value="0" selected disabled>Select scholarship</option>
                                    @foreach ($scholarships as $scholarship)
                                        <option value="{{ $scholarship->id }}" @selected($scholarship->id == $student_scholarship->scholarship_id)>{{ $scholarship->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="notes" name="notes" rows="3">{{ $student_scholarship->notes }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

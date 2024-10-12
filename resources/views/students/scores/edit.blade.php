@extends('layouts.app', ['title' => 'Edit Scores'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Nilai</h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Nilai</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('scores.update-score', ['class' => $class, 'score' => $score]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" class="form-control" name="class" value="{{ $class }}">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="semester" class="form-label">Semester</label>
                                        <input type="text" class="form-control" value="{{ $scores->semester_id }}" disabled>
                                        <input type="hidden" class="form-control" id="semester" name="semester" value="{{ $scores->semester_id }}">
                                        {{-- <select id="semester" name="semester" class="form-select form-control text-capitalize @error('semester') is-invalid @enderror">
                                            <option value="0" selected disabled>Pilih Opsi</option>
                                            @foreach ($semesters as $semester)
                                                <option value="{{ $semester->id }}" @selected($semester->id == $scores->semester_id)>{{ $semester->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('semester')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="lesson" class="form-label">Mata Pelajaran</label>
                                        <select id="lesson" name="lesson" class="form-select form-control @error('lesson') is-invalid @enderror">
                                            <option value="0" selected disabled>Pilih Opsi</option>
                                            @foreach ($lessons as $lesson)
                                                <option value="{{ $lesson->id }}" @selected($lesson->id == $scores->lesson_id)>{{ $lesson->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('lesson')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="task" class="form-label">Nama Tugas</label>
                                        <input type="text" class="form-control @error('task') is-invalid @enderror" id="task" name="task" value="{{ $scores->task_name }}">
                                        @error('task')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="teacher" class="form-label">Nama Pengajar</label>
                                        <input type="text" class="form-control" value="{{ $scores->teacher_name }}" disabled>
                                        <input type="hidden" class="form-control @error('teacher') is-invalid @enderror" id="teacher" name="teacher" value="{{ $scores->teacher_name }}">
                                        @error('teacher')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" id="count" name="count" value="{{ $students->count() }}">
                            <table class="table table-bordered table-hovered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Pelajar</th>
                                        <th>NIP</th>
                                        <th>Nilai</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student_scores as $key => $student)
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="student" value="{{ $student->students->user_complements->name }}" disabled>
                                                <input type="hidden" class="form-control" name="student[{{ $key }}]" value="{{ $student->students->id }}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="nip" value="{{ $student->students->student_complements->nip_number }}" disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control @error('score_'. $key) is-invalid @enderror" name="score_{{ $key }}" value={{ old('score_' . $key, $student->score) }}>
                                                @error('score_'. $key)
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="notes[{{ $key }}]" value={{ $student->notes }}>
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

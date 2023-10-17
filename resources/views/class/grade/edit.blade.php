@extends('layouts.app', ['title' => 'Edit Grade Class'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Grade Kelas</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Grade Kelas</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('grades.update', $grade->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="grade-title" class="form-label">Grade Kelas</label>
                                <input type="text" class="form-control" id="grade-title" name="title" value="{{ $grade->title }}" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="grade-notes" class="form-label">Keterangan</label>
                                <textarea id="grade-notes" type="text" class="form-control" name="notes" rows="3">{{ $grade->notes }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

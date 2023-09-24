@extends('layouts.app', ['title' => 'Edit Major'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Jurusan</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Jurusan</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('majors.update', $major->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="major-title" class="form-label">Nama Jurusan</label>
                                <input type="text" class="form-control" id="major-title" name="title" value="{{ $major->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="major-notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="major-notes" name="notes" rows="3">{{ $major->notes }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

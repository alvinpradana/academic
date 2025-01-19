@extends('layouts.app', ['title' => 'Show Data Academic Year'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Data Tahun Ajaran</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Detail Data Tahun Ajaran</h6>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Nama Tahun Ajaran</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $academic->title }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="description" name="description" rows="3" disabled>{{ $academic->description }}</textarea>
                            </div>
                            <a class="btn btn-primary" href="{{ route('academic-year.edit', $academic->id) }}">
                                Edit Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

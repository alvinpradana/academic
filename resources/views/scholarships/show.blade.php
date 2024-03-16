@extends('layouts.app', ['title' => 'Show Data Sholarship'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Data Beasiswa</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Detail Data Beasiswa</h6>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Nama Beasiswa</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $scholarship->title }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="notes" name="notes" rows="3" disabled>{{ $scholarship->notes }}</textarea>
                            </div>
                            <a class="btn btn-primary" href="{{ route('scholarships.edit', $scholarship->id) }}">
                                Edit Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app', ['title' => 'Update Data Academic Year'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Tahun Ajaran</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Ubah Data Tahun Ajaran</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('academic-year.update', $academic->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Nama Tahun Ajaran</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ $academic->title }}">
                                @error('title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="description" name="description" rows="3">{{ $academic->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app', ['title' => 'Create New Major'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Jurusan</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Jurusan</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('majors.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="major-title" class="form-label">Nama Jurusan</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="major-title" name="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="major-notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="major-notes" name="notes" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

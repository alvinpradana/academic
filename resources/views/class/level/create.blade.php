@extends('layouts.app', ['title' => 'Create Level Class'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Tingkat Kelas</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Tingkat Kelas</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('class-level.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="level-class" class="form-label">Tingkat Kelas</label>
                                <input type="number" class="form-control" id="level-class" name="level" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="notes" name="notes" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

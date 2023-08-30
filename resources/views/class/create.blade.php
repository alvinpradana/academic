@extends('layouts.app', ['title' => 'Create Class'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Kelas</h1>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Kelas</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="levelClass" class="form-label">Tingkat Kelas</label>
                            <input type="number" class="form-control" id="levelClass" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="notes" class="form-label">Grade Kelas</label>
                            <input type="text" class="form-control" id="notes">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

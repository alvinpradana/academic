@extends('layouts.app', ['title' => 'Create Scholarship'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Beasiswa</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Beasiswa</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="scholarship-title" class="form-label">Nama Beasiswa</label>
                                <input type="text" class="form-control" id="scholarship-title" name="scholarship-title">
                            </div>
                            <div class="mb-3">
                                <label for="scholarship-notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="scholarship-notes" name="scholarship-notes" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

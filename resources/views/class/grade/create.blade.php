@extends('layouts.app', ['title' => 'Create Grade Class'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Grade Kelas</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Grade Kelas</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="grade-title" class="form-label">Grade Kelas</label>
                                <input type="text" class="form-control" id="grade-title" name="grade-title">
                            </div>
                            <div class="mb-3">
                                <label for="grade-notes" class="form-label">Keterangan</label>
                                <textarea id="grade-notes" type="text" class="form-control" name="grade-notes" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

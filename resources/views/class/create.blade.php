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
                            <label for="levelClass" class="form-label">Level Kelas</label>
                            <select id="levelClass" class="form-select form-control" aria-label="Default select example">
                                <option value="0" selected disabled>Select level</option>
                                <option value="1">X</option>
                                <option value="2">XI</option>
                                <option value="3">XII</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="levelClass" class="form-label">Jurusan</label>
                            <select id="levelClass" class="form-select form-control" aria-label="Default select example">
                                <option value="0" selected disabled>Select level</option>
                                <option value="1">IPA</option>
                                <option value="2">IPS</option>
                                <option value="3">MAT</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gradeClass" class="form-label">Grade Kelas</label>
                            <select id="gradeClass" class="form-select form-control" aria-label="Default select example">
                                <option value="0" selected disabled>Select grade</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

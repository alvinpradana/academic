@extends('layouts.app', ['title' => 'Data Nilai Siswa'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Nilai Siswa</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
            </a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Nilai</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @component('components.table')
                        @slot('head')
                            <tr>
                                <th>NIP</th>
                                <th>Nama Pelajar</th>
                                <th>Nilai</th>
                                <th>Action</th>
                            </tr>
                        @endslot
                        @slot('body')
                            <tr>
                                <td>202300001</td>
                                <td>Siswa</td>
                                <td>80</td>
                                <td>
                                    <a href="{{ route('scores.view', ['class' => 1, 'id' => 1]) }}" class="btn btn-primary btn-sm px-3">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection
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
                                <th>Tanggal</th>
                                <th>Mata Pelajaran</th>
                                <th>Pengajar</th>
                                <th>Action</th>
                            </tr>
                        @endslot
                        @slot('body')
                            <tr>
                                <td>Selasa, 17 Dec 2023</td>
                                <td>IPA</td>
                                <td>Guru</td>
                                <td>
                                    <a href="{{ route('scores.show-scores', 1, 2) }}" class="btn btn-primary btn-sm btn-circle">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('scores.index') }}" class="btn btn-success btn-sm btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <form action="{{ route('scores.index') }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection
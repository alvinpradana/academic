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
                <h6 class="m-0 font-weight-bold text-primary">Tabel Data Nilai</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @component('components.table')
                        @slot('head')
                            <tr>
                                <th>Tanggal</th>
                                <th>Mata Pelajaran</th>
                                <th>Nama Tugas</th>
                                <th>Nama Pengajar</th>
                                <th>Action</th>
                            </tr>
                        @endslot
                        @slot('body')
                            <tr>
                                <td>Selasa, 17 Dec 2023</td>
                                <td>IPA</td>
                                <td>Tugas IPA 1</td>
                                <td>Guru</td>
                                <td>
                                    <a href="{{ route('scores.show-lessons', ['class' => 1, 'id' => 1]) }}" class="btn btn-primary btn-sm px-3">
                                        View
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
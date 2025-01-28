@extends('layouts.app', ['title' => 'Data Nilai Siswa'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Nilai Tugas dan Nilai Final</h1>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('scores.list', [$academic, $class, $semester]) }}" style="text-decoration: none; cursor: pointer;" class="cursor-pointer">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Data Nilai
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        Nilai Tugas
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('scores.list-of-final-task', [$academic, $class, $semester]) }}" style="text-decoration: none; cursor: pointer;" class="cursor-pointer">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Data Nilai
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        Nilai Final
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
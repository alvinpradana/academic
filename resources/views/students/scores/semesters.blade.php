@extends('layouts.app', ['title' => 'Data Nilai Siswa'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Nilai Semester & Rapor</h1>
            {{-- @if (Auth::user()->position_id != 2)
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Download Excel
                </a>
            @endif --}}
        </div>
        <div class="row">
            @if ($count > 0)
                @foreach ($semesters as $semester)
                    <div class="col-xl-3 col-md-6 mb-4">
                        {{-- <a href="{{ route('scores.list', [$academic, $class, $semester->id]) }}" style="text-decoration: none; cursor: pointer;" class="cursor-pointer"> --}}
                        <a href="{{ route('scores.list-of-task', [$academic, $class, $semester->id]) }}" style="text-decoration: none; cursor: pointer;" class="cursor-pointer">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Semester
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $semester->title }}
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
                @endforeach
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{ route('scores.rapor-scores', ['academic' => $academic, 'class' => $class]) }}" style="text-decoration: none; cursor: pointer;" class="cursor-pointer">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Data Nilai
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            Nilai Rapor
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
            @else
                <div class="col-12 text-center">
                    <p class="my-3">No Data Available.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
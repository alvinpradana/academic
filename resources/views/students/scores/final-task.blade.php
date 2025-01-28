@extends('layouts.app', ['title' => 'Data Nilai Akhir Siswa'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Nilai Akhir Siswa</h1>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Data Nilai Semester {{ $semester }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @component('components.table')
                        @slot('head')
                            <tr>
                                <th width="10%">No</th>
                                <th width="80%">Mata Pelajaran</th>
                                <th width="10%">Action</th>
                            </tr>
                        @endslot
                        @slot('body')
                            @if ($count == 0)
                                <tr>
                                    <td colspan="5" class="text-center">No data available.</td>
                                </tr>
                            @else
                                @foreach ($lessons as $lesson)    
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $lesson->title }}</td>
                                        <td>
                                            <a href="{{ route('scores.final-task-table', ['academic' => 1, 'class' => 1, 'semester' => 1, 'lesson' => $lesson->id]) }}" class="btn btn-primary btn-sm btn-circle">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        @endslot
                    @endcomponent
                </div>
                {{ $lessons->links() }}
            </div>
        </div>
    </div>
@endsection
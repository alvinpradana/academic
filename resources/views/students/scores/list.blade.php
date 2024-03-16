@extends('layouts.app', ['title' => 'Data Nilai Siswa'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Nilai Siswa</h1>
            <a href="{{ route('scores.add', $class) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm px-3">
                Create
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
                            @if ($count == 0)
                                <tr>
                                    <td colspan="5" class="text-center">No data available.</td>
                                </tr>
                            @else
                                @foreach ($scores as $score)    
                                    <tr>
                                        <td>{{ $score->created }}</td>
                                        <td>{{ $score->lesson->title }}</td>
                                        <td>{{ $score->task_name }}</td>
                                        <td>{{ $score->teacher_name }}</td>
                                        <td>
                                            <a href="{{ route('scores.view', ['class' => $class, 'id' => $score->id]) }}" class="btn btn-primary btn-sm btn-circle">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('scores.edit-score', ['class' => $class, 'id' => $score->id]) }}" class="btn btn-success btn-sm btn-circle">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <form action="{{ route('scores.destroy', $score->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection
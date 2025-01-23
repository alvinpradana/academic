@extends('layouts.app', ['title' => 'Data Nilai Siswa'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Nilai Siswa</h1>
            <a href="{{ route('scores.print', ['academic' => $academic, 'semester' => $semester, 'class' => $class, 'score' => $score_id]) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Download PDF
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
                                <th>Keterangan</th>
                            </tr>
                        @endslot
                        @slot('body')
                            @foreach ($student_scores as $key => $item)
                                <tr>
                                    <td>{{ $item->students->student_complements->nip_number }}</td>
                                    <td>{{ $item->students->user_complements->name }}</td>
                                    <td>{{ $item->score }}</td>
                                    <td>{{ $item->notes }}</td>
                                </tr>
                            @endforeach
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection
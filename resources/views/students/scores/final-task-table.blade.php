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
                <h6 class="m-0 font-weight-bold text-primary">Tabel Data Nilai Mata Pelajaran {{ $lesson }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @component('components.table')
                        @slot('head')
                            <tr>
                                <th width="10%">No</th>
                                <th width="25%">NIP</th>
                                <th width="50%">Nama Siswa</th>
                                <th width="15%">Nilai Akhir</th>
                            </tr>
                        @endslot
                        @slot('body')
                            @if ($final_scores == [])
                                <tr>
                                    <td colspan="5" class="text-center">No data available.</td>
                                </tr>
                            @else
                                @foreach ($final_scores as $item)    
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $item['nip'] }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['average_score'] }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endslot
                    @endcomponent
                </div>
                {{-- {{ $final_scores->links() }} --}}
            </div>
        </div>
    </div>
@endsection
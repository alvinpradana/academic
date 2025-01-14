<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="my-auto">Tabel berikut merupakan data mata pelajaran pada SMAN 9 MUKOMUKO.</p>
    @if (Auth::user()->position_id == 3)
        <a href="{{ route('lessons.create') }}" class="btn btn-primary">Tambah</a>
    @endif
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
        <h6 class="m-0 font-weight-bold text-primary">Data Mata Pelajaran</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @component('components.table')
                @slot('head')
                    <tr>
                        <th>Mata Pelajaran</th>
                        <th>Tingkat Kelas</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                @endslot
                @slot('body')
                    @if ($count == 0)
                        <tr>
                            <td colspan="6" class="text-center">No data available.</td>
                        </tr>
                    @else
                        
                        @foreach ($lessons as $lesson)
                            <tr>
                                <td>{{ $lesson->title }}</td>
                                <td>{{ $lesson->class }}</td>
                                <td>{{ $lesson->notes }}</td>
                                <td>
                                    @if (Auth::user()->position_id == 3)
                                        <a href="{{ route('lessons.show', $lesson->id) }}" class="btn btn-primary btn-sm btn-circle">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('lessons.edit', $lesson->id) }}" class="btn btn-success btn-sm btn-circle">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        @component('components.modal')
                                            @slot('id')
                                                {{ $lesson->id }}
                                            @endslot
                                            @slot('body')
                                                Are you sure you want to delete this data?
                                            @endslot
                                            @slot('route')
                                                {{ route('lessons.destroy', $lesson->id) }}
                                            @endslot
                                        @endcomponent
                                        <button type="button" class="btn btn-danger btn-sm btn-circle" data-toggle="modal" data-target="#modal_{{ $lesson->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @endslot
            @endcomponent
        </div>
    </div>
</div>
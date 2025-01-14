<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="my-auto">Tabel berikut merupakan data grade kelas pada SMA N 9 MUKOMUKO.</p>
    @if (Auth::user()->position_id == 3)
        <a href="{{ route('grades.create') }}" class="btn btn-primary">Tambah</a>
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
        <h6 class="m-0 font-weight-bold text-primary">Data Grade Kelas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @component('components.table')
                @slot('head')
                    <tr>
                        <th>Grade</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                @endslot
                @slot('body')
                    @if ($count == 0)
                        <tr>
                            <td colspan="3" class="text-center">No data available.</td>
                        </tr>
                    @else
                        @foreach ($grades as $grade)
                            <tr>
                                <td>{{ $grade->title }}</td>
                                <td>{{ $grade->notes }}</td>
                                <td>
                                    @if (Auth::user()->position_id == 3)
                                        <a href="{{ route('grades.show', $grade->id) }}" class="btn btn-primary btn-sm btn-circle">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-success btn-sm btn-circle">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        @component('components.modal')
                                            @slot('id')
                                                {{ $grade->id }}
                                            @endslot
                                            @slot('body')
                                                Are you sure you want to delete this data?
                                            @endslot
                                            @slot('route')
                                                {{ route('grades.destroy', $grade->id) }}
                                            @endslot
                                        @endcomponent
                                        <button type="button" class="btn btn-danger btn-sm btn-circle" data-toggle="modal" data-target="#modal_{{ $grade->id }}">
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
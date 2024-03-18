<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="my-auto">Tabel berikut merupakan data kelas pada SMK Crows Zero tahun ajaran 2023/2024.</p>
    <a href="{{ route('class-level.create') }}" class="btn btn-primary">Tambah</a>
</div>
@component('components.modal')
    @slot('body')
        <form>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
            </div>
        </form>
    @endslot
@endcomponent
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
        <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @component('components.table')
                @slot('head')
                    <tr>
                        <th>Kelas</th>
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
                        @foreach ($levels as $level)
                            <tr>
                                <td>{{ $level->level }}</td>
                                <td>{{ $level->notes }}</td>
                                <td>
                                    <a href="{{ route('class-level.show', $level->id) }}" class="btn btn-primary btn-sm btn-circle">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('class-level.edit', $level->id) }}" class="btn btn-success btn-sm btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    {{-- <form action="{{ route('class-level.destroy', $level->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form> --}}
                                    @component('components.modal')
                                        @slot('id')
                                            {{ $level->id }}
                                        @endslot
                                        @slot('body')
                                            Are you sure you want to delete this data?
                                        @endslot
                                        @slot('route')
                                            {{ route('class-level.destroy', $level->id) }}
                                        @endslot
                                    @endcomponent
                                    <button type="button" class="btn btn-danger btn-sm btn-circle" data-toggle="modal" data-target="#modal_{{ $level->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @endslot
            @endcomponent
        </div>
    </div>
</div>
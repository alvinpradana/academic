<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="my-auto">Tabel berikut merupakan data pengajar pada SMK Crows Zero tahun ajaran 2023/2024.</p>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary">Tambah</a>

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
        <h6 class="m-0 font-weight-bold text-primary">Data Pengajar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @component('components.table')
                @slot('head')
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Wali Kelas</th>
                        <th>Usia</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                @endslot
                @slot('body')
                    @if ($count == 0)
                        <tr>
                            <td colspan="6" class="text-center">No data available.</td>
                        </tr>
                    @else
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->user_complements->name }}</td>
                                <td>{{ $user->positions->title }}</td>
                                <td>IPA</td>
                                <td>{{ $user->user_complements->age }} Tahun</td>
                                <td>{{ $user->user_complements->phone_number }}</td>
                                <td>
                                    <a href="{{ route('teachers.show', $user->id) }}" class="btn btn-primary btn-sm btn-circle">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('teachers.edit', $user->id) }}" class="btn btn-success btn-sm btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    {{-- <form action="{{ route('teachers.destroy', $user->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form> --}}
                                    @component('components.modal')
                                        @slot('id')
                                            {{ $user->id }}
                                        @endslot
                                        @slot('body')
                                            Are you sure you want to delete this data?
                                        @endslot
                                        @slot('route')
                                            {{ route('teachers.destroy', $user->id) }}
                                        @endslot
                                    @endcomponent
                                    <button type="button" class="btn btn-danger btn-sm btn-circle" data-toggle="modal" data-target="#modal_{{ $user->id }}">
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
@extends('layouts.app', ['title' => 'All Data Class'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <p class="my-auto">Tabel berikut merupakan data kelas siswa pada SMK Crows Zero tahun ajaran 2023/2024.</p>
        <a href="/class-group/create/{{ $class_id }}" class="btn btn-primary">Tambah</a>
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
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa Kelas {{ $class }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @component('components.table')
                    @slot('head')
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jenis Kelamin</th>
                            <th>Usia</th>
                            <th>Action</th>
                        </tr>
                    @endslot
                    @slot('body')
                        @if ($count == 0)
                            <tr>
                                <td colspan="5" class="text-center">No data available.</td>
                            </tr>
                        @else
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->users->user_complements->name }}</td>
                                    <td>{{ $student->users->password }}</td>
                                    <td>
                                        @if ($student->users->user_complements->gender == 'A')
                                            Laki-laki
                                        @elseif($student->users->user_complements->gender == 'B')
                                            Perempuan
                                        @else
                                            Lainnya
                                        @endif
                                    </td>
                                    <td>{{ $student->users->user_complements->age }}</td>
                                    <td>
                                        <a href="{{ route('students.show', $student->users->id) }}" class="btn btn-primary btn-sm btn-circle">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('students.edit', $student->users->id) }}" class="btn btn-success btn-sm btn-circle">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <form action="{{ route('class-group.destroy', $student->users->id) }}" method="post" class="d-inline">
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
@endsection
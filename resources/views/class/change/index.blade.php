@extends('layouts.app', ['title' => 'Change Class'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <p class="my-auto">Tabel berikut merupakan data kelas siswa pada SMA N 9 MUKOMUKO.</p>
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
    <form action="{{ route('change-class.update') }}" method="post">
        @csrf
        @method('PUT')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form ubah kelas {{ $class }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @component('components.table')
                        @slot('head')
                            <tr>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jenis Kelamin</th>
                                <th>Pilih Kelas</th>
                            </tr>
                        @endslot
                        @slot('body')
                            @if ($count == 0)
                                <tr>
                                    <td colspan="5" class="text-center">No data available.</td>
                                </tr>
                            @else
                                @foreach ($students as $key => $student)
                                    <tr>
                                        <td>{{ $student->users->user_complements->name }}</td>
                                        <td>{{ $student->users->student_complements->nip_number }}</td>
                                        <td>
                                            @if ($student->users->user_complements->gender == 'A')
                                                Laki-laki
                                            @elseif($student->users->user_complements->gender == 'B')
                                                Perempuan
                                            @else
                                                Lainnya
                                            @endif
                                        </td>
                                        <td>
                                            <input type="hidden" name="student[{{ $key }}]" value="{{ $student->users->id }}" />
                                            <select class="form-select form-control" name="class_{{ $key }}">
                                                <option value="0" selected disabled>Select class</option>
                                                <option value="0" selected>Lulus Sekolah</option>
                                                @foreach ($all_class as $key => $item)
                                                    <option value="{{ $item->id }}" @selected($item->id == $class_id)>{{ $item->levels->level }} {{ $item->majors->title }} {{ $item->grades->title }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
@endsection
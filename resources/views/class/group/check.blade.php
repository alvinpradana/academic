@extends('layouts.app', ['title' => 'Add Student To Class'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Siswa</h1>
        </div>
        <form action="{{ route('class-group.store') }}" method="post">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Siswa</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('class-group.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="nip" class="form-label">NIP Siswa</label>
                                    <input type="text" class="form-control" id="nip" name="nip" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="class" class="form-label">Pilih Kelas</label>
                                    <select id="class" class="form-select form-control" name="class">
                                        <option value="0" selected disabled>Select class</option>
                                        @foreach ($class as $item)
                                            <option value="{{ $item->id }} ">{{ $item->levels->level }} {{ $item->majors->title }} {{ $item->grades->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

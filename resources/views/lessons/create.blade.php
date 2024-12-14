@extends('layouts.app', ['title' => 'Create New Lesson'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Mata Pelajaran</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Mata Pelajaran</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('lessons.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="class" class="form-label">Tingkat Kelas</label>
                                <select id="class" name="class" class="form-select form-control @error('class') is-invalid @enderror">
                                    <option value="0" selected disabled>Pilih Kelas</option>
                                    @foreach ($class as $item)
                                        <option value="{{ $item->level }}">Kelas {{ $item->level }}</option>
                                    @endforeach
                                </select>
                                @error('level')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" id="notes" name="notes" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

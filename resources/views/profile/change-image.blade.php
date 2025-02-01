@extends('layouts.app', ['title' => 'Change Profile Image'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Foto Profile</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
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
                        <h6 class="m-0 font-weight-bold text-primary">Pilih Foto Profile</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.store-image') }}" method="post" enctype="multipart/form-data" novalidate>
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="image-file" class="form-label">Pilih file</label>
                                <input class="form-control-file border border-primary rounded p-2 @error('image-file') is-invalid border-danger @enderror" type="file" id="image-file" name="image-file">
                                @error('image-file')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

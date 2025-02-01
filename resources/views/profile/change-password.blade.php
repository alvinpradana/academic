@extends('layouts.app', ['title' => 'Change Password'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Password User</h1>
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
                        <h6 class="m-0 font-weight-bold text-primary">Form Ubah Password</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.update-password') }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="current-password" class="form-label">Current Password</label>
                                <input type="text" class="form-control @error('current-password') is-invalid @enderror" id="current-password" name="current-password" value="{{ old('current-password') }}" autofocus>
                                @error('current-password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="new-password" class="form-label">New Password</label>
                                <input type="text" class="form-control @error('new-password') is-invalid @enderror" id="new-password" name="new-password" value="{{ old('new-password') }}" autofocus>
                                @error('new-password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirm-new-password" class="form-label">Confirm New Password</label>
                                <input type="text" class="form-control @error('confirm-new-password') is-invalid @enderror" id="confirm-new-password" name="confirm-new-password" value="{{ old('confirm-new-password') }}" autofocus>
                                @error('confirm-new-password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

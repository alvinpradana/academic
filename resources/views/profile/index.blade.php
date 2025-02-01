@extends('layouts.app', ['title' => 'Data Profile'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Profile</h1>
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
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Data Profile</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <div class="card" style="width: 16rem; height: 16rem;">
                                    <img class="card-img-top" src="..." alt="Profile photo">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
                                        <strong>Nama Lengkap</strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 mb-2 text-capitalize">
                                        <strong class="mr-2">:</strong> {{ Auth::user()->user_complements->name ?? '-' }}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
                                        <strong>Nomor Induk Pelajar (NIP)</strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                        <strong class="mr-2">:</strong> 
                                        @if (Auth::user()->position_id == 2)
                                            {{ Auth::user()->student_complements->nip_number }}
                                        @elseif (Auth::user()->position_id == 1)
                                            {{ Auth::user()->teacher_complements->nip_number }}
                                        @else
                                            -
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
                                        <strong>Tempat, Tanggal Lahir</strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 mb-2 text-capitalize">
                                        <strong class="mr-2">:</strong> {{ Auth::user()->user_complements->birth_date_place ?? '-' }}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
                                        <strong>Jenis Kelamin</strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                        <strong class="mr-2">:</strong> 
                                            @if (Auth::user()->user_complements->gender == 'A')
                                                Laki-laki
                                            @elseif (Auth::user()->user_complements->gender == 'B')
                                                Perempuan
                                            @else
                                                Lainnya
                                            @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
                                        <strong>Usia</strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                        <strong class="mr-2">:</strong> {{ Auth::user()->user_complements->age ?? '-' }} Tahun
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
                                        <strong>Agama</strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                        <strong class="mr-2">:</strong>
                                            @if (Auth::user()->user_complements->religion == 'A')
                                                Islam
                                            @elseif (Auth::user()->user_complements->religion == 'B')
                                                Kristen
                                            @elseif (Auth::user()->user_complements->religion == 'C')
                                                Budha
                                            @elseif (Auth::user()->user_complements->religion == 'D')
                                                Hindu
                                            @else
                                                Lainnya
                                            @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
                                        <strong>Nomor HP</strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                        <strong class="mr-2">:</strong> {{ Auth::user()->user_complements->phone_number ?? '-' }}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
                                        <strong>Email Aktif</strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                        <strong class="mr-2">:</strong> {{ Auth::user()->email }}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
                                        <strong>Alamat</strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 mb-2 text-capitalize">
                                        <strong class="mr-2">:</strong> {{ Auth::user()->user_complements->street ?? '-' }}, {{ Auth::user()->user_complements->subdistrict ?? '-' }}, {{ Auth::user()->user_complements->district ?? '-' }}, {{ Auth::user()->user_complements->zip_code ?? '-' }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="{{ route('profile.change-password')}}" class="btn btn-primary">Ubah Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

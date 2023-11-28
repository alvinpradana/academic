@extends('layouts.app', ['title' => 'View Data Student'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Data Karyawan</h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Data Karyawan</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Nama Lengkap</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2 text-capitalize">
                                <strong>:</strong> {{ $employee->user_complements->name }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>NIK</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2 text-capitalize">
                                <strong>:</strong> {{ $employee->user_complements->id_number }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Tempat, Tanggal Lahir</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2 text-capitalize">
                                <strong>:</strong> {{ $employee->user_complements->birth_date_place }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Jenis Kelamin</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                <strong>:</strong>
                                @if ($employee->user_complements->gender == 'A')
                                    Laki-laki
                                @elseif($employee->user_complements->gender == 'B')
                                    Perempuan
                                @else
                                    Lainnya
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Usia</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                <strong>:</strong> {{ $employee->user_complements->age }} Tahun
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Agama</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                <strong>:</strong>
                                @if ($employee->user_complements->religion == 'A')
                                    Islam
                                @elseif($employee->user_complements->religion == 'B')
                                    Kristen
                                @elseif($employee->user_complements->religion == 'C')
                                    Budha
                                @elseif($employee->user_complements->religion == 'D')
                                    Hindu
                                @else
                                    Lainnya
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Nomor HP</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                <strong>:</strong> {{ $employee->user_complements->phone_number }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Email Aktif</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                <strong>:</strong> {{ $employee->email }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Alamat</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2 text-capitalize">
                                <strong>:</strong> {{ $employee->user_complements->street }}, {{ $employee->user_complements->subdistrict }}, {{ $employee->user_complements->district }}, {{ $employee->user_complements->zip_code }}
                            </div>
                        </div>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary px-5 my-3">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
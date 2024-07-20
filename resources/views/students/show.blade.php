@extends('layouts.app', ['title' => 'View Data Student'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Data Pelajar</h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Data Pelajar</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Nama Lengkap</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2 text-capitalize">
                                <strong>:</strong> {{ $student->user_complements->name }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Nomor Induk Pelajar (NIP)</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                <strong>:</strong> {{ $student->student_complements->nip_number }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Tempat, Tanggal Lahir</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2 text-capitalize">
                                <strong>:</strong> {{ $student->user_complements->birth_date_place }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Jenis Kelamin</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                <strong>:</strong>
                                @if ($student->user_complements->gender == 'A')
                                    Laki-laki
                                @elseif($student->user_complements->gender == 'B')
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
                                <strong>:</strong> {{ $student->user_complements->age }} Tahun
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Agama</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                <strong>:</strong>
                                @if ($student->user_complements->religion == 'A')
                                    Islam
                                @elseif($student->user_complements->religion == 'B')
                                    Kristen
                                @elseif($student->user_complements->religion == 'C')
                                    Budha
                                @elseif($student->user_complements->religion == 'D')
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
                                <strong>:</strong> {{ $student->user_complements->phone_number }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Email Aktif</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2">
                                <strong>:</strong> {{ $student->email }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-3 col-lg-3 mb-2">
                                <strong>Alamat</strong>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 mb-2 text-capitalize">
                                <strong>:</strong> {{ $student->user_complements->street }}, {{ $student->user_complements->subdistrict }}, {{ $student->user_complements->district }}, {{ $student->user_complements->zip_code }}
                            </div>
                        </div>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary px-5 my-3">Edit</a>
                        <a href="{{ route('class-group.switch-class', $student->id) }}" class="btn btn-success px-5 my-3">Pindah Kelas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
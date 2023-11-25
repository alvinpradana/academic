@extends('layouts.app', ['title' => 'Edit Data Employee'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Karyawan</h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Karyawan</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.update', $employee->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="full-name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="full-name" name="full-name" value="{{ $employee->user_complements->name }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-10 col-lg-10">
                                            <div class="mb-3">
                                                <label for="birth-date-place" class="form-label">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="birth-date-place" name="birth-date-place" value="{{ $employee->user_complements->birth_date_place }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="age" class="form-label">Usia</label>
                                                <input type="text" class="form-control" id="age" name="age" value="{{ $employee->user_complements->age }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{ $employee->email }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                                <select id="gender" class="form-select form-control" name="gender">
                                                    <option value="0" disabled @selected($employee->user_complements->gender == null)>Select gender</option>
                                                    <option value="A" @selected($employee->user_complements->gender == 'A')>Laki-laki</option>
                                                    <option value="B" @selected($employee->user_complements->gender == 'B')>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="religion" class="form-label">Agama</label>
                                                <select id="religion" class="form-select form-control" name="religion">
                                                    <option value="0" disabled @selected($employee->user_complements->religion == null)>Select religion</option>
                                                    <option value="A" @selected($employee->user_complements->religion == 'A')>Islam</option>
                                                    <option value="B" @selected($employee->user_complements->religion == 'B')>Kristen</option>
                                                    <option value="C" @selected($employee->user_complements->religion == 'C')>Budha</option>
                                                    <option value="D" @selected($employee->user_complements->religion == 'D')>Hindu</option>
                                                    <option value="E" @selected($employee->user_complements->religion == 'E')>Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="marital-status" class="form-label">Status Pernikahan</label>
                                                <select id="marital-status" class="form-select form-control" name="marital-status">
                                                    <option value="0" disabled>Select status</option>
                                                    <option value="Y" @selected($employee->user_complements->marital_status == 'Y')>Menikah</option>
                                                    <option value="N" @selected($employee->user_complements->marital_status == 'N')>Belum Menikah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="position" class="form-label">Posisi Pekerjaan</label>
                                                <select id="position" class="form-select form-control" name="position">
                                                    <option value="0" disabled @selected($employee->positions->id == null)>Select position</option>
                                                    @foreach ($positions as $position)
                                                        <option value="{{ $position->id }}" @selected($employee->positions->id == $position->id)>{{ $position->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="id-number" class="form-label">NIK</label>
                                                <input type="text" class="form-control" id="id-number" name="id-number" value="{{ $employee->user_complements->id_number }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="phone-number" class="form-label">No. Telepon</label>
                                                <input type="text" class="form-control" id="phone-number" name="phone-number" value="{{ $employee->user_complements->phone_number }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address-street" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="address-street" name="address-street" value="{{ $employee->user_complements->street }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="address-sub-district" class="form-label">Kec.</label>
                                                <input type="text" class="form-control" id="address-sub-district" name="address-sub-district" value="{{ $employee->user_complements->subdistrict }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="address-district" class="form-label">Kab.</label>
                                                <input type="text" class="form-control" id="address-district" name="address-district" value="{{ $employee->user_complements->district }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="address-zip-code" class="form-label">ZIP</label>
                                                <input type="text" class="form-control" id="address-zip-code" name="address-zip-code" value="{{ $employee->user_complements->zip_code }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header py-3 border-0">
                                <h6 class="m-0 font-weight-bold text-primary">Form Kontak Darurat</h6>
                            </div>
                            <hr class="sidebar-divider">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="family-name" class="form-label">Nama Keluarga/Kerabat</label>
                                        <input type="text" class="form-control" id="family-name" name="family-name">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="family-status" class="form-label">Status Keluarga</label>
                                                <select id="family-status" class="form-select form-control" name="family-status">
                                                    <option value="0" selected disabled>Select status</option>
                                                    <option value="A">Suami/Istri</option>
                                                    <option value="B">Keluarga</option>
                                                    <option value="C">Kerabat</option>
                                                    <option value="D">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="family-contact" class="form-label">No. Telp Keluarga/Kerabat</label>
                                                <input type="text" class="form-control" id="family-contact" name="family-contact">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="family-address-street" class="form-label">Alamat Kerabat</label>
                                        <input type="text" class="form-control" id="family-address-street" name="family-address-street">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="family-address-sub-district" class="form-label">Kec.</label>
                                                <input type="text" class="form-control" id="family-address-sub-district" name="family-address-sub-district">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="family-address-district" class="form-label">Kab.</label>
                                                <input type="text" class="form-control" id="family-address-district" name="family-address-district">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="family-address-zip-code" class="form-label">ZIP</label>
                                                <input type="text" class="form-control" id="family-address-zip-code" name="family-address-zip-code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

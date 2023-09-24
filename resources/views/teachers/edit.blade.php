@extends('layouts.app', ['title' => 'Edit Teacher'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Pengajar</h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Pengajar</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('teachers.update', $user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="full-name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="full-name" name="name" value="{{ $user->user_complements->name }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-10 col-lg-10">
                                            <div class="mb-3">
                                                <label for="birth-date-place" class="form-label">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="birth-date-place" name="birth_date_place" value="{{ $user->user_complements->birth_date_place }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="age" class="form-label">Usia</label>
                                                <input type="text" class="form-control" id="age" name="age" value="{{ $user->user_complements->age }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                                <select id="gender" class="form-select form-control" name="gender">
                                                    <option value="0" disabled>Select gender</option>
                                                    <option value="A" @selected($user->user_complements->gender == 'A')>Laki-laki</option>
                                                    <option value="B" @selected($user->user_complements->gender == 'B')>Perempuan</option>
                                                    <option value="C" @selected($user->user_complements->gender == 'C')>Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                            <div class="mb-3">
                                                <label for="religion" class="form-label">Agama</label>
                                                <select id="religion" class="form-select form-control" name="religion">
                                                    <option value="0" disabled>Select religion</option>
                                                    <option value="A" @selected($user->user_complements->religion == 'A')>Islam</option>
                                                    <option value="B" @selected($user->user_complements->religion == 'B')>Kristen</option>
                                                    <option value="C" @selected($user->user_complements->religion == 'C')>Budha</option>
                                                    <option value="D" @selected($user->user_complements->religion == 'D')>Hindu</option>
                                                    <option value="E" @selected($user->user_complements->religion == 'E')>Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                            <div class="mb-3">
                                                <label for="marital-status" class="form-label">Status Pernikahan</label>
                                                <select id="marital-status" class="form-select form-control" name="marital_status">
                                                    <option value="0" disabled>Select status</option>
                                                    <option value="Y" @selected($user->user_complements->marital_status == 'Y')>Menikah</option>
                                                    <option value="N" @selected($user->user_complements->marital_status == 'N')>Belum Menikah</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Alamat Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="position" class="form-label">Jabatan</label>
                                                <select id="position" class="form-select form-control" name="position">
                                                    <option value="0" disabled>Select status</option>
                                                    @foreach ($positions as $position)
                                                        <option value="{{ $position->id }}" @selected($position->id == $user->user_complements->user_positions->id)>{{ $position->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="nip" class="form-label">NIP</label>
                                                <input type="text" class="form-control" id="nip" name="nip" value="{{ $user->user_complements->nip_number }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="phone-number" class="form-label">No. Telepon</label>
                                                <input type="text" class="form-control" id="phone-number" name="phone_number" value="{{ $user->user_complements->phone_number }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address-street" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="address-street" name="address" value="{{ $user->user_complements->address }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="address-sub-district" class="form-label">Kec.</label>
                                                <input type="text" class="form-control" id="address-sub-district" name="subdistrict" value="{{ $user->user_complements->subdistrict }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="address-regency" class="form-label">Kab.</label>
                                                <input type="text" class="form-control" id="address-regency" name="regency" value="{{ $user->user_complements->regency }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="address-zip-code" class="form-label">ZIP</label>
                                                <input type="text" class="form-control" id="address-zip-code" name="zip_code" value="{{ $user->user_complements->zip_code }}">
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
                                        <input type="text" class="form-control" id="family-name" name="family_name">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="family-status" class="form-label">Status Keluarga</label>
                                                <select id="family-status" class="form-select form-control" name="family_status">
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
                                                <input type="text" class="form-control" id="family-contact" name="family_contact">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="family-address-street" class="form-label">Alamat Kerabat</label>
                                        <input type="text" class="form-control" id="family-address-street" name="family_address">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="family-address-subdistrict" class="form-label">Kec.</label>
                                                <input type="text" class="form-control" id="family-address-subdistrict" name="family_subdistrict">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="family-address-regency" class="form-label">Kab.</label>
                                                <input type="text" class="form-control" id="family-address-regency" name="family_regency">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="family-zip-code" class="form-label">ZIP</label>
                                                <input type="text" class="form-control" id="family-zip-code" name="family_zip_code">
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

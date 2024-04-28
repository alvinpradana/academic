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
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="full-name" name="name" value="{{ old('name', $user->user_complements->name) }}">
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-10 col-lg-10">
                                            <div class="mb-3">
                                                <label for="birth-date-place" class="form-label">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control @error('birth_date_place') is-invalid @enderror" id="birth-date-place" name="birth_date_place" value="{{ old('birth_date_place', $user->user_complements->birth_date_place) }}">
                                                @error('birth_date_place')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="age" class="form-label">Usia</label>
                                                <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age', $user->user_complements->age) }}">
                                                @error('age')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                                <select id="gender" class="form-select form-control @error('gender') is-invalid @enderror" name="gender">
                                                    <option {{ old('gender') == '0' ? "selected" : "" }} value="0" disabled @selected($user->user_complements->gender == null)>Select gender</option>
                                                    <option {{ old('gender') == 'A' ? "selected" : "" }} value="A" @selected($user->user_complements->gender == 'A')>Laki-laki</option>
                                                    <option {{ old('gender') == 'B' ? "selected" : "" }} value="B" @selected($user->user_complements->gender == 'B')>Perempuan</option>
                                                    <option {{ old('gender') == 'C' ? "selected" : "" }} value="C" @selected($user->user_complements->gender == 'C')>Lainnya</option>
                                                </select>
                                                @error('gender')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                            <div class="mb-3">
                                                <label for="religion" class="form-label">Agama</label>
                                                <select id="religion" class="form-select form-control @error('religion') is-invalid @enderror" name="religion">
                                                    <option {{ old('religion') == '0' ? "selected" : "" }} value="0" disabled @selected($user->user_complements->religion == null)>Select status</option>
                                                    <option {{ old('religion') == 'A' ? "selected" : "" }} value="A" @selected($user->user_complements->religion == 'A')>Islam</option>
                                                    <option {{ old('religion') == 'B' ? "selected" : "" }} value="B" @selected($user->user_complements->religion == 'B')>Kristen</option>
                                                    <option {{ old('religion') == 'C' ? "selected" : "" }} value="C" @selected($user->user_complements->religion == 'C')>Budha</option>
                                                    <option {{ old('religion') == 'D' ? "selected" : "" }} value="D" @selected($user->user_complements->religion == 'D')>Hindu</option>
                                                    <option {{ old('religion') == 'E' ? "selected" : "" }} value="E" @selected($user->user_complements->religion == 'E')>Lainnya</option>
                                                </select>
                                                @error('religion')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                            <div class="mb-3">
                                                <label for="marital-status" class="form-label">Status Pernikahan</label>
                                                <select id="marital-status" class="form-select form-control @error('marital_status') is-invalid @enderror" name="marital_status">
                                                    <option {{ old('marital_status') == '0' ? "selected" : "" }} value="0" disabled @selected($user->teacher_complements->marital_status == null)>Select status</option>
                                                    <option {{ old('marital_status') == 'Y' ? "selected" : "" }} value="Y" @selected($user->teacher_complements->marital_status == 'Y')>Menikah</option>
                                                    <option {{ old('marital_status') == 'N' ? "selected" : "" }} value="N" @selected($user->teacher_complements->marital_status == 'N')>Belum Menikah</option>
                                                </select>
                                                @error('marital_status')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Alamat Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}">
                                                @error('email')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <label for="nik" class="form-label">NIK</label>
                                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik', $user->user_complements->id_number) }}">
                                                    @error('nik')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="nip" class="form-label">NIP</label>
                                                <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $user->teacher_complements->nip_number) }}">
                                                @error('nip')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">No. Telepon</label>
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $user->user_complements->phone_number) }}">
                                                @error('phone')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="street" class="form-label">Alamat</label>
                                        <input type="text" class="form-control @error('street') is-invalid @enderror" id="street" name="street" value="{{ old('street', $user->user_complements->street) }}">
                                        @error('street')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="subdistrict" class="form-label">Kec.</label>
                                                <input type="text" class="form-control" id="subdistrict" name="subdistrict" value="{{ $user->user_complements->subdistrict }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="district" class="form-label">Kab.</label>
                                                <input type="text" class="form-control" id="district" name="district" value="{{ $user->user_complements->district }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="zip" class="form-label">ZIP</label>
                                                <input type="text" class="form-control" id="zip" name="zip" value="{{ $user->user_complements->zip_code }}">
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
                                        <input type="text" class="form-control @error('family-name') is-invalid @enderror" id="family-name" name="family-name" value="{{ old('family-name', $user->families->name) }}">
                                        @error('family-name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="family-status" class="form-label">Status Keluarga</label>
                                                <select id="family-status" class="form-select form-control @error('family-status') is-invalid @enderror" name="family-status">
                                                    <option {{ old('family-status') == '0' ? "selected" : "" }} value="0" disabled @selected($user->families->status == null)>Select status</option>
                                                    <option {{ old('family-status') == 'A' ? "selected" : "" }} value="A" @selected($user->families->status == 'A')>Suami/Istri</option>
                                                    <option {{ old('family-status') == 'B' ? "selected" : "" }} value="B" @selected($user->families->status == 'B')>Keluarga</option>
                                                    <option {{ old('family-status') == 'C' ? "selected" : "" }} value="C" @selected($user->families->status == 'C')>Kerabat</option>
                                                    <option {{ old('family-status') == 'D' ? "selected" : "" }} value="D" @selected($user->families->status == 'D')>Lainnya</option>
                                                </select>
                                                @error('family-status')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="family-contact" class="form-label">No. Telp Keluarga/Kerabat</label>
                                                <input type="text" class="form-control @error('family-contact') is-invalid @enderror" id="family-contact" name="family-contact" value="{{ old('family-contact', $user->families->phone_number) }}">
                                                @error('family-contact')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="family-address-street" class="form-label">Alamat Kerabat</label>
                                        <input type="text" class="form-control @error('family-address-street') is-invalid @enderror" id="family-address-street" name="family-address-street" value="{{ old('family-address-street', $user->families->address) }}">
                                        @error('family-address-street')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="family-address-subdistrict" class="form-label">Kec.</label>
                                                <input type="text" class="form-control" id="family-address-subdistrict" name="family-subdistrict" value="{{ $user->families->subdistrict }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="family-address-regency" class="form-label">Kab.</label>
                                                <input type="text" class="form-control" id="family-address-regency" name="family-regency" value="{{ $user->families->regency }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="family-zip-code" class="form-label">ZIP</label>
                                                <input type="text" class="form-control" id="family-zip-code" name="family-zip-code" value="{{ $user->families->zip_code }}">
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

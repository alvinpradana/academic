@extends('layouts.app', ['title' => 'Add New Employee'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Karyawan</h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Karyawan</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="full-name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('full-name') is-invalid @enderror" id="full-name" name="full-name" value="{{ old('full-name') }}" autofocus>
                                        @error('full-name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-10 col-lg-10">
                                            <div class="mb-3">
                                                <label for="birth-date-place" class="form-label">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control @error('birth-date-place') is-invalid @enderror" id="birth-date-place" name="birth-date-place" value="{{ old('birth-date-place') }}">
                                                @error('birth-date-place')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="age" class="form-label">Usia</label>
                                                <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}">
                                                @error('age')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                                <select id="gender" class="form-select form-control @error('gender') is-invalid @enderror" name="gender">
                                                    <option {{ old('gender') == '0' ? "selected" : "" }} value="0" selected disabled>Select gender</option>
                                                    <option {{ old('gender') == 'A' ? "selected" : "" }} value="A">Laki-laki</option>
                                                    <option {{ old('gender') == 'B' ? "selected" : "" }} value="B">Perempuan</option>
                                                </select>
                                                @error('gender')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="religion" class="form-label">Agama</label>
                                                <select id="religion" class="form-select form-control @error('religion') is-invalid @enderror" name="religion">
                                                    <option {{ old('religion') == '0' ? "selected" : "" }} value="0" selected disabled>Select religion</option>
                                                    <option {{ old('religion') == 'A' ? "selected" : "" }} value="A">Islam</option>
                                                    <option {{ old('religion') == 'B' ? "selected" : "" }} value="B">Kristen</option>
                                                    <option {{ old('religion') == 'C' ? "selected" : "" }} value="C">Budha</option>
                                                    <option {{ old('religion') == 'D' ? "selected" : "" }} value="D">Hindu</option>
                                                    <option {{ old('religion') == 'E' ? "selected" : "" }} value="E">Lainnya</option>
                                                </select>
                                                @error('religion')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="marital-status" class="form-label">Status Pernikahan</label>
                                                <select id="marital-status" class="form-select form-control @error('marital-status') is-invalid @enderror" name="marital-status">
                                                    <option {{ old('marital-status') == '0' ? "selected" : "" }} value="0" selected disabled>Select status</option>
                                                    <option {{ old('marital-status') == 'Y' ? "selected" : "" }} value="Y">Menikah</option>
                                                    <option {{ old('marital-status') == 'N' ? "selected" : "" }} value="N">Belum Menikah</option>
                                                </select>
                                                @error('marital-status')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="position" class="form-label">Posisi Pekerjaan</label>
                                                <select id="position" class="form-select form-control @error('position') is-invalid @enderror" name="position">
                                                    <option value="0" selected disabled>Select position</option>
                                                    @foreach ($positions as $position)
                                                        <option {{ old('position') == $position->id ? "selected" : "" }} value="{{ $position->id }}">{{ $position->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('position')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="id-number" class="form-label">NIK</label>
                                                <input type="text" class="form-control @error('id-number') is-invalid @enderror" id="id-number" name="id-number" value="{{ old('id-number') }}">
                                                @error('id-number')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="phone-number" class="form-label">No. Telepon</label>
                                                <input type="text" class="form-control @error('phone-number') is-invalid @enderror" id="phone-number" name="phone-number" value="{{ old('phone-number') }}">
                                                @error('phone-number')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address-street" class="form-label">Alamat</label>
                                        <input type="text" class="form-control @error('address-street') is-invalid @enderror" id="address-street" name="address-street" value="{{ old('address-street') }}">
                                        @error('address-street')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="address-sub-district" class="form-label">Kec.</label>
                                                <input type="text" class="form-control" id="address-sub-district" name="address-sub-district">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="address-district" class="form-label">Kab.</label>
                                                <input type="text" class="form-control" id="address-district" name="address-district">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="address-zip-code" class="form-label">ZIP</label>
                                                <input type="text" class="form-control" id="address-zip-code" name="address-zip-code">
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
                                        <input type="text" class="form-control @error('family-name') is-invalid @enderror" id="family-name" name="family-name" value="{{ old('family-name') }}">
                                        @error('family-name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="family-status" class="form-label">Status Keluarga</label>
                                                <select id="family-status" class="form-select form-control @error('family-status') is-invalid @enderror" name="family-status">
                                                    <option {{ old('family-status') == '0' ? "selected" : "" }} value="0" selected disabled>Select status</option>
                                                    <option {{ old('family-status') == 'A' ? "selected" : "" }} value="A">Suami/Istri</option>
                                                    <option {{ old('family-status') == 'B' ? "selected" : "" }} value="B">Keluarga</option>
                                                    <option {{ old('family-status') == 'C' ? "selected" : "" }} value="C">Kerabat</option>
                                                    <option {{ old('family-status') == 'D' ? "selected" : "" }} value="D">Lainnya</option>
                                                </select>
                                                @error('family-status')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="family-contact" class="form-label">No. Telp Keluarga/Kerabat</label>
                                                <input type="text" class="form-control @error('family-contact') is-invalid @enderror" id="family-contact" name="family-contact" value="{{ old('family-contact') }}">
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
                                        <input type="text" class="form-control @error('family-address-street') is-invalid @enderror" id="family-address-street" name="family-address-street" value="{{ old('family-address-street') }}">
                                        @error('family-address-street')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="family-address-subdistrict" class="form-label">Kec.</label>
                                                <input type="text" class="form-control" id="family-address-subdistrict" name="family-address-subdistrict">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="family-address-regency" class="form-label">Kab.</label>
                                                <input type="text" class="form-control" id="family-address-regency" name="family-address-regency">
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

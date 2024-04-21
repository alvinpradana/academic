@extends('layouts.app', ['title' => 'Update Student'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Pelajar</h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Pelajar</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.update', $student->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $student->user_complements->name) }}" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-10 col-lg-10">
                                            <div class="mb-3">
                                                <label for="birth" class="form-label">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control @error('birth') is-invalid @enderror" id="birth" name="birth" value="{{ old('birth', $student->user_complements->birth_date_place) }}">
                                                @error('birth')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="age" class="form-label">Usia</label>
                                                <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age', $student->user_complements->age) }}">
                                                {{-- @error('age')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                                <select id="gender" class="form-select form-control @error('gender') is-invalid @enderror" name="gender">
                                                    <option value="0" disabled @selected($student->user_complements->gender == null)>Select gender</option>
                                                    <option {{ old('gender') == 'A' ? "selected" : "" }} value="A" @selected($student->user_complements->gender == 'A')>Laki-laki</option>
                                                    <option {{ old('gender') == 'B' ? "selected" : "" }} value="B" @selected($student->user_complements->gender == 'B')>Perempuan</option>
                                                    <option {{ old('gender') == 'C' ? "selected" : "" }} value="C" @selected($student->user_complements->gender == 'C')>Lainnya</option>
                                                </select>
                                                @error('gender')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $student->email) }}">
                                                @error('email')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">No. Telepon</label>
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $student->user_complements->phone_number) }}">
                                                @error('phone')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="religion" class="form-label">Agama</label>
                                                <select id="religion" class="form-select form-control @error('religion') is-invalid @enderror" name="religion">
                                                    <option value="0" disabled @selected($student->user_complements->religion == null)>Select religion</option>
                                                    <option {{ old('religion') == 'A' ? "selected" : "" }} value="A" @selected($student->user_complements->religion == 'A')>Islam</option>
                                                    <option {{ old('religion') == 'B' ? "selected" : "" }} value="B" @selected($student->user_complements->religion == 'B')>Kristen</option>
                                                    <option {{ old('religion') == 'C' ? "selected" : "" }} value="C" @selected($student->user_complements->religion == 'C')>Budha</option>
                                                    <option {{ old('religion') == 'D' ? "selected" : "" }} value="D" @selected($student->user_complements->religion == 'D')>Hindu</option>
                                                    <option {{ old('religion') == 'E' ? "selected" : "" }} value="E" @selected($student->user_complements->religion == 'E')>Lainnya</option>
                                                </select>
                                                @error('religion')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik', $student->user_complements->id_number) }}">
                                        @error('nik')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-8 col-lg-8">
                                            <div class="mb-3">
                                                <label for="alumnae" class="form-label">Asal Sekolah</label>
                                                <input type="text" class="form-control @error('alumnae') is-invalid @enderror" id="alumnae" name="alumnae" value="{{ old('alumnae', $student->student_complements->school_alumnae) }}">
                                                @error('alumnae')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                            <div class="mb-3">
                                                <label for="report" class="form-label">Nilai Rapor Terakhir</label>
                                                <input type="text" class="form-control" id="report" name="report" value="{{ $student->student_complements->last_report_value }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="street" class="form-label">Alamat</label>
                                        <input type="text" class="form-control @error('street') is-invalid @enderror" id="street" name="street" value="{{ old('street', $student->user_complements->street) }}">
                                        @error('street')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="subdistrict" class="form-label">Kec.</label>
                                                <input type="text" class="form-control" id="subdistrict" name="subdistrict" value="{{ $student->user_complements->subdistrict }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="mb-3">
                                                <label for="district" class="form-label">Kab.</label>
                                                <input type="text" class="form-control" id="district" name="district" value="{{ $student->user_complements->district }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="zip" class="form-label">ZIP</label>
                                                <input type="text" class="form-control" id="zip" name="zip" value="{{ $student->user_complements->zip_code }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header py-3 border-0">
                                <h6 class="m-0 font-weight-bold text-primary">Form Data Orang Tua</h6>
                            </div>
                            <hr class="sidebar-divider">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="father-name" class="form-label">Nama Ayah Kandung</label>
                                        <input type="text" class="form-control @error('father-name') is-invalid @enderror" id="father-name" name="father-name" value="{{ old('father-name', $student->parents->father_name) }}">
                                        @error('father-name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="mother-name" class="form-label">Nama Ibu Kandung</label>
                                        <input type="text" class="form-control @error('mother-name') is-invalid @enderror" id="mother-name" name="mother-name" value="{{ old('mother-name', $student->parents->mother_name) }}">
                                        @error('mother-name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="father-id-number" class="form-label">NIK Ayah</label>
                                                <input type="text" class="form-control @error('father-id-number') is-invalid @enderror" id="father-id-number" name="father-id-number" value="{{ old('father-id-number', $student->parents->father_id_number) }}">
                                                @error('father-id-number')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="mother-id-number" class="form-label">NIK Ibu</label>
                                                <input type="text" class="form-control @error('mother-id-number') is-invalid @enderror" id="mother-id-number" name="mother-id-number" value="{{ old('mother-id-number', $student->parents->mother_id_number) }}">
                                                @error('mother-id-number')
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
                                                <label for="father-phone" class="form-label">No. Telepon Ayah</label>
                                                <input type="text" class="form-control @error('father-phone') is-invalid @enderror" id="father-phone" name="father-phone"  value="{{ old('father-phone', $student->parents->father_phone_number) }}">
                                                @error('father-phone')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="mother-phone" class="form-label">No. Telepon Ibu</label>
                                                <input type="text" class="form-control @error('mother-phone') is-invalid @enderror" id="mother-phone" name="mother-phone" value="{{ old('mother-phone', $student->parents->mother_phone_number) }}">
                                                @error('mother-phone')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="father-work" class="form-label">Pekerjaan Ayah</label>
                                        <select id="father-work" class="form-select form-control" name="father-work">
                                            <option value="0" disabled @selected($student->user_complements->father_work == null)>Select work</option>
                                            <option value="A" @selected($student->parents->father_work == 'A')>Pengusaha</option>
                                            <option value="B" @selected($student->parents->father_work == 'B')>Wiraswasta</option>
                                            <option value="C" @selected($student->parents->father_work == 'C')>Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mother-work" class="form-label">Pekerjaan Ibu</label>
                                        <select id="mother-work" class="form-select form-control" name="mother-work">
                                            <option value="0" disabled @selected($student->user_complements->mother_work == null)>Select work</option>
                                            <option value="A" @selected($student->parents->mother_work == 'A')>Ibu Rumah Tangga</option>
                                            <option value="B" @selected($student->parents->mother_work == 'B')>Wiraswasta</option>
                                            <option value="C" @selected($student->parents->mother_work == 'C')>Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header py-3 border-0">
                                <h6 class="m-0 font-weight-bold text-primary">Form Data Beasiswa</h6>
                            </div>
                            <hr class="sidebar-divider">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="mb-3">
                                        <label for="scholarship" class="form-label">Nama Beasiswa</label>
                                        <select id="scholarship" class="form-select form-control" name="scholarship">
                                            <option value="0" selected disabled>Select scholarship</option>
                                            <option value="A">KIP</option>
                                            <option value="B">Bea</option>
                                            <option value="C">Siswa</option>
                                            <option value="D">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-8">
                                    <div class="mb-3">
                                        <label for="scholarship-notes" class="form-label">Keterangan</label>
                                        <input type="text" class="form-control" id="scholarship-notes" name="scholarship-notes">
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

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
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $student->user_complements->name }}" autofocus>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-10 col-lg-10">
                                            <div class="mb-3">
                                                <label for="birth" class="form-label">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="birth" name="birth" value="{{ $student->user_complements->birth_date_place }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="mb-3">
                                                <label for="age" class="form-label">Usia</label>
                                                <input type="text" class="form-control" id="age" name="age" value="{{ $student->user_complements->age }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                                <select id="gender" class="form-select form-control" name="gender">
                                                    <option value="0" disabled @selected($student->user_complements->gender == null)>Select gender</option>
                                                    <option value="A" @selected($student->user_complements->gender == 'A')>Laki-laki</option>
                                                    <option value="B" @selected($student->user_complements->gender == 'B')>Perempuan</option>
                                                    <option value="C" @selected($student->user_complements->gender == 'C')>Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">No. Telepon</label>
                                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $student->user_complements->phone_number }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="religion" class="form-label">Agama</label>
                                                <select id="religion" class="form-select form-control" name="religion">
                                                    <option value="0" disabled @selected($student->user_complements->religion == null)>Select religion</option>
                                                    <option value="A" @selected($student->user_complements->religion == 'A')>Islam</option>
                                                    <option value="B" @selected($student->user_complements->religion == 'B')>Kristen</option>
                                                    <option value="C" @selected($student->user_complements->religion == 'C')>Budha</option>
                                                    <option value="D" @selected($student->user_complements->religion == 'D')>Hindu</option>
                                                    <option value="E" @selected($student->user_complements->religion == 'E')>Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" value="{{ $student->user_complements->id_number }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-8 col-lg-8">
                                            <div class="mb-3">
                                                <label for="alumnae" class="form-label">Asal Sekolah</label>
                                                <input type="text" class="form-control" id="alumnae" name="alumnae" value="{{ $student->student_complements->school_alumnae }}">
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
                                        <input type="text" class="form-control" id="street" name="street" value="{{ $student->user_complements->street }}">
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
                                        <input type="text" class="form-control" id="father-name" name="father-name" value="{{ $student->parents->father_name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="mother-name" class="form-label">Nama Ibu Kandung</label>
                                        <input type="text" class="form-control" id="mother-name" name="mother-name" value="{{ $student->parents->mother_name }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="father-id-number" class="form-label">NIK Ayah</label>
                                                <input type="text" class="form-control" id="father-id-number" name="father-id-number" value="{{ $student->parents->father_id_number }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="mother-id-number" class="form-label">NIK Ibu</label>
                                                <input type="text" class="form-control" id="mother-id-number" name="mother-id-number" value="{{ $student->parents->mother_id_number }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="father-phone" class="form-label">No. Telepon Ayah</label>
                                                <input type="text" class="form-control" id="father-phone" name="father-phone"  value="{{ $student->parents->father_phone_number }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="mother-phone" class="form-label">No. Telepon Ibu</label>
                                                <input type="text" class="form-control" id="mother-phone" name="mother-phone" value="{{ $student->parents->mother_phone_number }}">
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

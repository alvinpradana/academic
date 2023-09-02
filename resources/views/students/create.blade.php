@extends('layouts.app', ['title' => 'Add New Student'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Pelajar</h1>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Pelajar</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="full-name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="full-name" name="full-name">
                                </div>
                                <div class="mb-3">
                                    <label for="id-number" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="id-number" name="id-number">
                                </div>
                                <div class="mb-3">
                                    <label for="phone-number" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control" id="phone-number" name="phone-number">
                                </div>
                                <div class="mb-3">
                                    <label for="from-school" class="form-label">Asal Sekolah</label>
                                    <input type="text" class="form-control" id="from-school" name="from-school">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea type="text" class="form-control" id="address" name="address" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="classroom" class="form-label">Kelas</label>
                                    <select id="classroom" class="form-select form-control" name="classroom">
                                        <option value="0" selected disabled>Select class</option>
                                        <option value="1">X</option>
                                        <option value="2">XI</option>
                                        <option value="3">XII</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="major" class="form-label">Kejuruan</label>
                                    <select id="major" class="form-select form-control" name="major">
                                        <option value="0" selected disabled>Select gender</option>
                                        <option value="1">IPA</option>
                                        <option value="2">IPS</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="grade" class="form-label">Grade</label>
                                    <select id="grade" class="form-select form-control" name="grade">
                                        <option value="0" selected disabled>Select grade</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="father-name" class="form-label">Nama Ayah Kandung</label>
                                    <input type="text" class="form-control" id="father-name" name="father-name">
                                </div>
                                <div class="mb-3">
                                    <label for="mother-name" class="form-label">Nama Ibu Kandung</label>
                                    <input type="text" class="form-control" id="mother-name" name="mother-name">
                                </div>
                                <div class="mb-3">
                                    <label for="father-id-number" class="form-label">NIK Ayah</label>
                                    <input type="text" class="form-control" id="father-id-number" name="father-id-number">
                                </div>
                                <div class="mb-3">
                                    <label for="mother-id-number" class="form-label">NIK Ibu</label>
                                    <input type="text" class="form-control" id="mother-id-number" name="mother-id-number">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="father-phone" class="form-label">No. Telepon Ayah</label>
                                    <input type="text" class="form-control" id="father-phone" name="father-phone">
                                </div>
                                <div class="mb-3">
                                    <label for="mother-phone" class="form-label">No. Telepon Ibu</label>
                                    <input type="text" class="form-control" id="mother-phone" name="mother-phone">
                                </div>
                                <div class="mb-3">
                                    <label for="father-work" class="form-label">Pekerjaan Ayah</label>
                                    <select id="father-work" class="form-select form-control" name="father-work">
                                        <option value="0" selected disabled>Select work</option>
                                        <option value="1">Pengusaha</option>
                                        <option value="2">Wiraswasta</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="father-work" class="form-label">Pekerjaan Ibu</label>
                                    <select id="father-work" class="form-select form-control" name="father-work">
                                        <option value="0" selected disabled>Select work</option>
                                        <option value="1">Ibu Rumah Tangga</option>
                                        <option value="2">Wiraswasta</option>
                                        <option value="2">Lainnya</option>
                                    </select>
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
@endsection

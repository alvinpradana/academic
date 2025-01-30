<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Print Nilai Rapor</title>
    </head>
    {{-- <body onload="window.print()"> --}}
    <body>
        <div class="container text-black fs-6 py-4 px-4">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="text-center border border-dark p-2 pb-1">
                        <h3><strong>NILAI RAPOR SMA N 9 MUKOMUKO</strong></h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row text-center mt-3">
                        <small>Alamat Sekolah :</small>
                        <small>Talang Sepakat, V Koto, Mukomuko Regency, Bengkulu 38767</small>
                    </div>
                </div>
            </div>
            <div class="card mt-3 mb-1">
                <div class="card-body py-1 bg-black"></div>
            </div>
            <hr class="border border-dark">
            <div class="row">
                <div class="col-md-3">
                    <label for="student" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" id="student" value="{{ $student->user_complements->name }}" disabled>
                </div>
                <div class="col-md-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" value="{{ $student->student_complements->nip_number }}" disabled>
                </div>
                <div class="col-md-3">
                    <label for="class" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="class" value="{{ $class->levels->level }} {{ $class->majors->title }} {{ $class->grades->title }}" disabled>
                </div>
                <div class="col-md-3">
                    <label for="academic" class="form-label">Tahun Ajaran</label>
                    <input type="text" class="form-control" id="academic" value="{{ $academic->title }}" disabled>
                </div>
            </div>
            <table class="table table-bordered border-dark my-3">
                <thead>
                    <tr class="text-center">
                        <th width="5%">No</th>
                        <th width="45%">Mata Pelajaran</th>
                        <th width="20%">Nilai</th>
                        <th width="30%">Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rapor_scores as $item)
                        <tr>
                            <td class="text-center">{{ $index++ }}</td>
                            <td class="text-center">{{ $item['nip'] }}</td>
                            <td class="text-center">{{ $item['average_score'] }}</td>
                            <td class="text-left">-</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row justify-content-between mt-4">
                <div class="col-md-5 text-center"><strong>Wali Kelas</strong></div>
                <div class="col-md-5 text-center"><strong>Kepala Sekolah</strong></div>
            </div>
            <div class="row justify-content-between mt-4">
                <div class="col-md-5 text-center mt-3"><strong>( ............................. )</strong></div>
                <div class="col-md-5 text-center mt-3"><strong>( ............................. )</strong></div>
            </div>
            <div class="row my-4">
                <div class="col-md-12 text-center">
                    <span class="badge rounded-pill bg-black"><i>"SMA N 9 Mukomuko"</i></span>
                </div>
            </div>
        </div>
    </body>
    </html>
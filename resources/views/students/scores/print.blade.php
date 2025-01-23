<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Print Nilai</title>
</head>
<body onload="window.print()">
    <div class="container text-black fs-6 py-4 px-4">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="text-center border border-dark p-2 pb-1">
                    <h3><strong>SMA N 9 MUKOMUKO</strong></h3>
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
            <div class="col-3">
                <label for="teacher" class="form-label">Nama Pengajar</label>
                <input type="text" class="form-control" id="teacher" value="{{ $score->teacher_name }}" disabled>
            </div>
            <div class="col-3">
                <label for="teacher" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="teacher" value="1 IPA A" disabled>
            </div>
            <div class="col-3">
                <label for="teacher" class="form-label">Semester</label>
                <input type="text" class="form-control" id="teacher" value="Semester 1" disabled>
            </div>
            <div class="col-3">
                <label for="teacher" class="form-label">Mata Pelajaran</label>
                <input type="text" class="form-control" id="teacher" value="IPA 1" disabled>
            </div>
        </div>
        <table class="table table-bordered border-dark my-3">
            <thead>
                <tr class="text-center">
                    <th width="5%">No</th>
                    <th width="20%">NIP</th>
                    <th width="35%">Nama Siswa</th>
                    <th width="15%">Nilai</th>
                    <th width="25%">Catatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scores as $item)
                    <tr>
                        <td class="text-center">{{ $index++ }}</td>
                        <td class="text-center">{{ $item->students->student_complements->nip_number }}</td>
                        <td class="text-left">{{ $item->students->user_complements->name }}</td>
                        <td class="text-center">{{ $item->score }}</td>
                        <td class="text-left">{{ $item->notes ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row justify-content-between mt-4">
            <div class="col-md-5 text-center"><strong>Pengajar</strong></div>
            <div class="col-md-5 text-center"><strong>Wali Kelas</strong></div>
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
<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="my-auto">Tabel berikut merupakan data mata pelajaran pada SMK Crows Zero tahun ajaran 2023/2024.</p>
    <button class="btn btn-primary" data-toggle="modal" data-target="#modal">Tambah</button>
</div>
@component('components.modal')
    @slot('body')
        <form>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
            </div>
        </form>
    @endslot
@endcomponent
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Mata Pelajaran</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @component('components.table')
                @slot('head')
                    <tr>
                        <th>Name</th>
                        <th>Semester</th>
                        <th>Kelas</th>
                        <th>Ketentuan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                @endslot
                @slot('body')
                    <tr>
                        <td>Ilmu Fisika</td>
                        <td>Genap</td>
                        <td>8</td>
                        <td>Wajib</td>
                        <td>Active</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td>Genap</td>
                        <td>7</td>
                        <td>Wajib</td>
                        <td>Active</td>
                        <td>$145,600</td>
                    </tr>
                @endslot
            @endcomponent
        </div>
    </div>
</div>
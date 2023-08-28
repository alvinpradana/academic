<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="my-auto">Tabel berikut merupakan data karyawan pada SMK Crows Zero tahun ajaran 2023/2024.</p>
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
        <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Posisi</th>
                        <th>Gender</th>
                        <th>Usia</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mas John</td>
                        <td>Office Boy</td>
                        <td>L</td>
                        <td>30</td>
                        <td>Active</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>Brodin</td>
                        <td>Security</td>
                        <td>L</td>
                        <td>35</td>
                        <td>Active</td>
                        <td>$145,600</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="my-auto">Tabel berikut merupakan data pengajar pada SMK Crows Zero tahun ajaran 2023/2024.</p>
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
        <h6 class="m-0 font-weight-bold text-primary">Data Pengajar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Kelas</th>
                        <th>Age</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Prof. Yanto</td>
                        <td>Rektor Bruhh</td>
                        <td>9A</td>
                        <td>46</td>
                        <td>Active</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>Mas Sudarmawan</td>
                        <td>Wakil Rektor</td>
                        <td>9B</td>
                        <td>50</td>
                        <td>Active</td>
                        <td>$145,600</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="my-auto">Tabel berikut merupakan data pelajar pada SMK Crows Zero tahun ajaran 2023/2024.</p>
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
        <h6 class="m-0 font-weight-bold text-primary">Data Pelajar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @component('components.table')
                @slot('head')
                    <tr>
                        <th>Name</th>
                        <th>Kejuruan</th>
                        <th>Kelas</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                @endslot
                @slot('body')
                    <tr>
                        <td>John Doe</td>
                        <td>Fisika</td>
                        <td>9A</td>
                        <td>L</td>
                        <td>Active</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>Mas Al</td>
                        <td>Komputer</td>
                        <td>9A</td>
                        <td>L</td>
                        <td>Active</td>
                        <td>$145,600</td>
                    </tr>
                @endslot
            @endcomponent
        </div>
    </div>
</div>
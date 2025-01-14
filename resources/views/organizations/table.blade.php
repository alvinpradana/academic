<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="my-auto">Tabel berikut merupakan data organisasi pelajar pada SMAN 9 MUKOMUKO.</p>
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
        <h6 class="m-0 font-weight-bold text-primary">Data Organisasi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @component('components.table')
                @slot('head')
                    <tr>
                        <th>Name</th>
                        <th>Bidang</th>
                        <th>Jumlah Anggota</th>
                        <th>Ketua</th>
                        <th>Action</th>
                    </tr>
                @endslot
                @slot('body')
                    <tr>
                        <td>KADOL</td>
                        <td>Percuanan</td>
                        <td>20 Orang</td>
                        <td>Yanto</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>AMCC</td>
                        <td>Komputer</td>
                        <td>15 Orang</td>
                        <td>Kalis</td>
                        <td>$145,600</td>
                    </tr>
                @endslot
            @endcomponent
        </div>
    </div>
</div>
<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="my-auto">Tabel berikut merupakan data pengajar pada SMK Crows Zero tahun ajaran 2023/2024.</p>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary">Tambah</a>

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
            @component('components.table')
                @slot('head')
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Wali Kelas</th>
                        <th>Usia</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                @endslot
                @slot('body')
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->user_complements->name }}</td>
                            <td>{{ $user->user_positions->positions->title }}</td>
                            <td>IPA</td>
                            <td>{{ $user->user_complements->age }} Tahun</td>
                            <td>{{ $user->user_complements->phone_number }}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm btn-circle">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('teachers.edit', $user->id) }}" class="btn btn-success btn-sm btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <form action="{{ route('teachers.destroy', $user->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endslot
            @endcomponent
        </div>
    </div>
</div>
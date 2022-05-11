@extends('layout.admin')
@section('dashboard')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>Admin Website Dayaku Raja</h5>
            </div>
            <div class="card-title mb-0 d-flex flex-row-reverse">
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#TambahUserModal">
                    <i class="bx bx-add-to-queue"></i>
                </button>
            </div>
        </div>
        <!-- Button trigger modal -->

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Unit</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($user as $p)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-0"></i> <strong>{{ $p->nama }}</strong></td>
                        <td>{{ $p->username }}</td>
                        <td>{{ $p->refruangan->deskripsi }}</td>
                        @if ($p->status == 1)
                            <td><span class="badge bg-label-primary me-1">Aktif</span></td>
                        @else
                            <td><span class="badge bg-label-danger me-1">Non Aktif</span></td>
                        @endif
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
<div class="modal fade" id="TambahUserModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/PegawaiInsert" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Admin Web</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Input Name" />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="username" class="form-label">username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            placeholder="Input Username" />
                    </div>
                </div>
                <div class="row lg-2">
                    <div class="col mb-0">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="xxxxxxxxx" />
                    </div>
                    <div class="col mb-0">
                        <label for="refruangan_id" class="form-label">Ruangan</label>
                        <select class="form-control" id="refruangan_id" name="refruangan_id">
                            <option selected disabled value="">Silahkan Pilih</option>
                            @foreach ($refruangan as $p)
                                <option value="{{ $p->id }}">{{ $p->deskripsi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Keluar
                </button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

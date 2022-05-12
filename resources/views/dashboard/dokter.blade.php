@extends('layout.admin')
@section('dashboard')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>Dokter</h5>
            </div>
            <div class="card-title mb-0 d-flex flex-row-reverse">
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#TambahDokterModal">
                    <i class="bx bx-add-to-queue"></i>
                </button>
            </div>
        </div>
        <!-- Button trigger modal -->

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Spesialis</th>
                    <th>Residen</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($Dokter as $p)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $p->nama }}</strong></td>
                        <td>{{ $p->refsmf->deskripsi }}</td>
                        @if ($p->residen == 0)
                            <td><span class="badge bg-label-primary me-1">Tidak</span></td>
                        @else
                            <td><span class="badge bg-label-primary me-1">YA</span></td>
                        @endif
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
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

<div class="modal fade" id="TambahDokterModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="" method="" enctype="">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Name" />
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col mb-0">
                        <label for="dobBackdrop" class="form-label">Pilih SMF</label>
                        <select class="form-control" id="refsmf_id" name="refsmf_id">
                            <option selected disabled value="">Silahkan Pilih</option>
                            @foreach ($smf as $p)
                                <option value="{{ $p->id }}">{{ $p->deskripsi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row ">
                    <div class="col mb-3">
                        <label for="formFile" class="form-label">Upload Foto Dokter [JPEG, Max 2MB]</label>
                        <input class="form-control" type="file" id="formFile" />
                    </div>
                </div>
                <div class="col-md">
                    <label class="">Residen</label>
                    <div class="form-check form-check-inline mt-3">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1" />
                        <label class="form-check-label" for="inlineRadio1">YA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2" />
                        <label class="form-check-label" for="inlineRadio2">TIDAK</label>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

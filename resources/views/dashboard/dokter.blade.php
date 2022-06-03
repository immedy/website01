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
                    <th style="text-align: right">Actions</th>
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
                        <td style="text-align: right">
                            <a href="#" class="bx bx-edit btn btn-icon btn-outline-primary" style="left:"></a>
                            <a href="#" class="bx bx-trash-alt btn btn-icon btn-outline-danger"></a>
                            <button type="button" class="bx bx-time btn btn-icon btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#TambahJadwalModal">
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<div class="modal fade" id="TambahDokterModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/DokterInsert" method="post" enctype="multipart/form-data">
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
                        <input class="form-control" type="file" id="foto" name="foto" />
                    </div>
                </div>
                <div class="col-md">
                    <label class="">Residen</label>
                    <div class="form-check form-check-inline mt-3">
                        <input class="form-check-input" type="radio" name="residen" id="residen" value="1" />
                        <label class="form-check-label" for="inlineRadio1">YA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="residen" id="residen" value="0" />
                        <label class="form-check-label" for="inlineRadio2">TIDAK</label>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="TambahJadwalModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/DokterJadwal{id}" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Input Jadwal Dokter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md">
                    <div class="form-check form-check-inline mt-3">
                        <input class="form-check-input" type="checkbox" id="senin" value="1" />
                        <label class="form-check-label" for="senin">Senin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="selasa" value="1" />
                        <label class="form-check-label" for="selasa">Selasa</label>
                    </div>
                    <div class="form-check form-check-inline mt-3">
                        <input class="form-check-input" type="checkbox" id="rabu" value="1" />
                        <label class="form-check-label" for="rabu">Rabu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="kamis" value="1" />
                        <label class="form-check-label" for="kamis">Kamis</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="jumat" value="1" />
                        <label class="form-check-label" for="jumat">Jumat</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

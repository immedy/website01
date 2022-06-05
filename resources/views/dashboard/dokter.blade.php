@extends('layout.admin')
@section('dashboard')
    <div class="card" >
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
                    <th style="width: 35%">Nama</th>
                    <th>Spesialis</th>
                    <th>Residen</th>
                    <th>Status</th>
                    <th style="text-align: center">Jadwal Dokter</th>
                    <th style="text-align: right">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($dokter as $p)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $p->nama }}</strong></td>
                        <td>{{ $p->refsmf->deskripsi }}</td>
                        @if ($p->residen == 0)
                            <td><span class="badge bg-label-primary me-1">Tidak</span></td>
                        @else
                            <td><span class="badge bg-label-primary me-1">YA</span></td>
                        @endif
                        @if ($p->status == 0)
                            <td><span class="badge bg-label-danger me-1">NonAktif</span></td>
                        @else
                            <td><span class="badge bg-label-success me-1">Aktif</span></td>
                        @endif
                        <td style="text-align: center">
                            <a href="/dokter/{{ $p->id }}" type="button" class="bx bx-time btn btn-icon btn-outline-success" ></a>
                        </td>
                        <td style="text-align: right">
                            <a href="#" class="bx bx-edit btn btn-icon btn-outline-primary" style="left:"></a>
                            <a href="#" class="bx bx-trash-alt btn btn-icon btn-outline-danger"></a>
                            
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
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="" />
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
                <div class="col-md mt-3">
                    <label class="">Jadwal Dokter</label>
                    <div>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="senin" id="senin" value="1" />
                            <label class="form-check-label" for="inlineCheckbox1">Senin</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="selasa" id="selasa" value="1" />
                            <label class="form-check-label" for="inlineCheckbox2">Selasa</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="rabu" id="rabu" value="1" />
                              <label class="form-check-label" for="inlineCheckbox2">Rabu</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="kamis" id="kamis" value="1" />
                              <label class="form-check-label" for="inlineCheckbox2">Kamis</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="jumat" id="jumat" value="1" />
                              <label class="form-check-label" for="inlineCheckbox2">Jumat</label>
                            </div>                   
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
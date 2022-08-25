@extends('layout.admin')
@section('dashboard')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>Pejabat</h5>
            </div>
            <div class="card-title mb-0 d-flex flex-row-reverse">
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#JabatanModal">
                    <i class="bx bx-add-to-queue"></i>
                </button>
            </div>
        </div>
        <!-- Button trigger modal -->

        <table class="table table-hover table-striped ">
            <thead>
                <tr>
                    <th style="width: 25%;">Nama</th>
                    <th>Jabatan</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th style="text-align: right">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($jabatan as $p)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $p->nama }}</strong></td>
                        <td>{{ $p->refjabatan->deskripsi }}</td>
                        <td><img class="img-fluid" src="{{ asset('storage/' . $p->foto) }}"
                                style="width: 50px; height: 50px; object-fit: cover;" alt=""></td>
                        @if ($p->status == 1)
                            <td><span class="badge bg-label-primary me-1">Aktif</span></td>
                        @else
                            <td><span class="badge bg-label-primary me-1">NonAktif</span></td>
                        @endif
                        <td style="text-align: right">
                            <a href="#" class="bx bx-edit btn btn-icon btn-outline-primary" style="left:"></a>
                            <form action="/jabatan/{{ $p->id }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="bx bx-trash-alt btn btn-icon btn-outline-danger"
                                    onclick="return confirm ('Apakah Anda Yakin Menghapus Berita Ini ?')"> </button>
                            </form>
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
<div class="modal fade" id="JabatanModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/jabatan" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nama" class="form-label">Nama Lengkap Dan Gelar</label>
                        <input type="text" name="" id="nama" class="form-control" placeholder="Enter Name" />
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col mb-0">
                        <label for="dobBackdrop" class="form-label">Pilih Jabatan</label>
                        <select class="form-control" id="refjabatan_id" name="refjabatan_id">
                            <option selected disabled value="">Silahkan Pilih</option>
                            @foreach ($refjabatan as $p)
                                <option value="{{ $p->id }}">{{ $p->deskripsi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row ">
                    <div class="col mb-3">
                        <label for="formFile" class="form-label">Upload Foto Pejabat [JPEG, Max 500kb]</label>
                        <input class="form-control" type="file" id="foto" name="foto" />
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

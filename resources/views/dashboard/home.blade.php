@extends('layout.admin')
@section('dashboard')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>Menu Website</h5>
            </div>
            <div class="card-title mb-0 d-flex flex-row-reverse">
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#InsertMenuWebsiteModal">
                    <i class="bx bx-add-to-queue"></i>
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 20%">Menu</th>
                        <th style="width: 40%">Index</th>
                        <th>Status</th>
                        <th style="text-align: right">Detail</th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($dashboard as $p)
                        <tr>
                            <td scope="col">1</td>
                            <td><i
                                    class="fab fa-angular fa-lg text-danger me"></i><strong>{{ $p->menu->deskripsi }}</strong>
                            </td>
                            <td>{{ $p->index }}</td>
                            <td><span class="badge bg-label-success me-1">Aktif</span></td>
                            <td style="text-align: right">
                                <a href="/berita//edit" class="bx bx-edit btn btn-icon btn-outline-primary"></a>
                                <form action="/berita/" method="post" class="d-inline">
                                    <button class="bx bx-trash-alt btn btn-icon btn-outline-danger"
                                        onclick="return confirm ('Apakah Anda Yakin Menghapus Berita Ini ?')"> </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
<div class="modal fade" id="InsertMenuWebsiteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Menu Website</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/Menu" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Index</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="index" name="index" value="" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Menu</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <select class="form-select" id="menu_id" name="menu_id"
                                    aria-label="Default select example">
                                    <option selected disabled value="">Pilih Instalasi</option>
                                    @foreach ($Menu as $p)
                                        <option value="{{ $p->id }}">{{ $p->deskripsi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Gambar</label>
                        <div class="col-sm-10">
                            <div class="col mb-3">
                                <input class="form-control" type="file" id="foto" name="foto" />
                                <label for="formFile" class="form-label">Upload Foto Berita [JPEG, Max 2MB]
                                    Hanya 1
                                    Gambar</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Isi</label>
                        <div class="col-sm-10">
                            <input id="isi" name="isi" class="form-control" type="hidden" value=""
                                aria-describedby="basic-icon-default-message2">
                            <trix-editor input="isi"></trix-editor>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

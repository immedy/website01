@extends('layout.admin')
@section('dashboard')
    <div class="row">
        <!-- Basic Layout -->
        <div class="card">
            <div class="card-header">
                <h5 class="modal-title" id="exampleModalLabel4">Menu Website</h5>
            </div>
            <form action="/Menu" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Index</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="index" name="index"
                                value="{{ $MenuInsert->index }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Menu</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <select class="form-select" id="menu_id" name="menu_id"
                                    aria-label="Default select example">
                                    <option selected disabled value="">{{ $MenuInsert->menu->deskripsi }}</option>
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
                            <input id="isi" name="isi" class="form-control" type="hidden" value="{{ $MenuInsert->isi }}"
                                aria-describedby="basic-icon-default-message2">
                            <trix-editor input="isi"></trix-editor>
                        </div>
                    </div>

                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button type="submit" class="btn btn-primary">Update Menu</button>
                </div>
            </form>
        </div>
        <!-- Basic with Icons -->
    </div>
@endsection

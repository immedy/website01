@extends('layout.admin')
@section('dashboard')
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Berita</h5>
                </div>
                <div class="card-body">
                    <form action="/berita/{{ $berita->id }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $berita->judul }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Kategori</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <select class="form-select" id="refkategori_id" name="refkategori_id"
                                        aria-label="Default select example">
                                        <option selected disabled value="">{{ $berita->refkategori->deskripsi }}
                                        </option>
                                        @foreach ($kategori as $p)
                                            <option value="{{ $p->id }}">{{ $p->deskripsi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Kategori</label>
                            <div class="col-sm-10">
                                <div class="col mb-3">
                                    <input class="form-control" type="file" id="foto" name="foto"
                                        value="{{ $p->foto }}" />
                                    <label for="formFile" class="form-label">Upload Foto Berita [JPEG, Max 2MB]</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Berita</label>
                            <div class="col-sm-10">
                                <input id="berita" name="berita" class="form-control" type="hidden"
                                    value="{{ $berita->berita }}" aria-describedby="basic-icon-default-message2">
                                <trix-editor input="berita"></trix-editor>
                            </div>
                        </div>

                        <div class=" row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Berita</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Basic with Icons -->
    </div>
@endsection

@extends('layout.admin')
@section('dashboard')
    <div class="row">
        {{-- Kategory Dokter --}}
        <div class=" col-md-6 mb-3 ">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
                    <div>
                        <h5>Kategori Dokter</h5>
                    </div>
                    <div class="card-title mb-0 d-flex flex-row-reverse">
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#KategoryDokterModal">
                            <i class="bx bx-add-to-queue"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 67%">Deskripsi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($smf as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><i class="fab fa-angular fa-lg">{{ $p->deskripsi }}</i></td>
                                    @if ($p->status == 1)
                                        <td><span class="badge rounded-pill bg-label-success"> aktif </span></td>
                                    @else
                                        <td><span class="badge rounded-pill bg-label-warning"> Non Aktif </span></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Kategory Dokter --}}

        {{-- Kategori Berita --}}
        <div class=" col-md-6 mb-3 ">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
                    <div>
                        <h5>Kategori Berita</h5>
                    </div>
                    <div class="card-title mb-0 d-flex flex-row-reverse">
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#KategoryBeritaModal">
                            <i class="bx bx-add-to-queue"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 67%">Deskripsi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($berita as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><i class="fab fa-angular fa-lg">{{ $p->deskripsi }}</i></td>
                                    @if ($p->status == 1)
                                        <td><span class="badge rounded-pill bg-label-success"> aktif </span></td>
                                    @else
                                        <td><span class="badge rounded-pill bg-label-warning"> Non Aktif </span></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Kategori Berita --}}
    </div>
    <div class="row">
        {{-- Kategory Ruangan --}}
        <div class=" col-md-6 mb-3 ">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
                    <div>
                        <h5>Kategori Ruangan</h5>
                    </div>
                    <div class="card-title mb-0 d-flex flex-row-reverse">
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#KategoryRuanganModal">
                            <i class="bx bx-add-to-queue"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 67%">Deskripsi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($ruangan as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><i class="fab fa-angular fa-lg">{{ $p->deskripsi }}</i></td>
                                    @if ($p->status == 1)
                                        <td><span class="badge rounded-pill bg-label-success"> aktif </span></td>
                                    @else
                                        <td><span class="badge rounded-pill bg-label-warning"> Non Aktif </span></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Kategory Ruangan --}}
        {{-- Kategory Jabatan --}}
        <div class=" col-md-6 mb-3 ">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
                    <div>
                        <h5>Kategori Jabatan</h5>
                    </div>
                    <div class="card-title mb-0 d-flex flex-row-reverse">
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#KategoryJabatanModal">
                            <i class="bx bx-add-to-queue"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 67%">Deskripsi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($jabatan as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><i class="fab fa-angular fa-lg">{{ $p->deskripsi }}</i></td>
                                    @if ($p->status == 1)
                                        <td><span class="badge rounded-pill bg-label-success"> aktif </span></td>
                                    @else
                                        <td><span class="badge rounded-pill bg-label-warning"> Non Aktif </span></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Kategori Jabatan --}}
    </div>
    <div class="row">
        {{-- kategori Poliklinik --}}
        <div class=" col-md-6 mb-3 ">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
                    <div>
                        <h5>Kategori Poliklinik</h5>
                    </div>
                    <div class="card-title mb-0 d-flex flex-row-reverse">
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#KategoryPoliklinikModal">
                            <i class="bx bx-add-to-queue"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 67%">Deskripsi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($poliklinik as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><i class="fab fa-angular fa-lg text-uppercase">{{ $p->deskripsi }}</i></td>
                                    @if ($p->status == 1)
                                        <td><span class="badge rounded-pill bg-label-success"> aktif </span></td>
                                    @else
                                        <td><span class="badge rounded-pill bg-label-warning"> Non Aktif </span></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- KLategori Poliklinik --}}
        {{-- kategori indikator capaian --}}
        <div class=" col-md-6 mb-3 ">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
                    <div>
                        <h5>Kategori Indikator Capaian</h5>
                    </div>
                    <div class="card-title mb-0 d-flex flex-row-reverse">
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#Kategoryindikatorcapaian">
                            <i class="bx bx-add-to-queue"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 67%">Deskripsi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($indikator as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><i class="fab fa-angular fa-lg text-uppercase">{{ $p->deskripsi }}</i></td>
                                    @if ($p->status == 1)
                                        <td><span class="badge rounded-pill bg-label-success"> aktif </span></td>
                                    @else
                                        <td><span class="badge rounded-pill bg-label-warning"> Non Aktif </span></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- kategori indikator capaian --}}
    </div>
    
@endsection
{{-- Kategori Dokter --}}
<div class="modal fade" id="KategoryDokterModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/kategorismf" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Jenis Dokter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="deskripsi" class="form-label">Jenis SMF</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Input Nama Dokter" />
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
{{-- Kategori Dokter --}}

{{-- Kategori Berita --}}
<div class="modal fade" id="KategoryBeritaModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/kategoriberita" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Jenis Kategory Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="deskripsi" class="form-label">Kategori Berita</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Enter Name" />
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
{{-- Kategori Berita --}}

{{-- Kategori Berita --}}
<div class="modal fade" id="KategoryRuanganModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/kategoriruangan" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Jenis Ruangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="deskripsi" class="form-label">deskripsi Ruangan</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Enter Name" />
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
{{-- Kategori Berita --}}
{{-- Kategori Jabatan --}}
<div class="modal fade" id="KategoryJabatanModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/kategorijabatan" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Jenis Jabatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="deskripsi" class="form-label">deskripsi jabatan</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Enter Name" />
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
{{-- Kategori Jabatan --}}
{{-- Kategori Poliklinik --}}
<div class="modal fade" id="KategoryPoliklinikModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/kategoripoliklinik" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Polikinik</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="deskripsi" class="form-label">deskripsi Poliklinik</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Enter Name" class="text-uppercase" />
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
{{-- Kategori Poliklinik --}}
{{-- kategori indikator capaian --}}
<div class="modal fade" id="Kategoryindikatorcapaian" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/kategoriindikator" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Indikator Capaian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="deskripsi" class="form-label">deskripsi Indikator Capaian</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Enter Name" class="text-uppercase" />
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
{{-- kategori indikator capaian --}}
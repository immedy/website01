@extends('layout.admin')
@section('dashboard')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>Kategori Berita</h5>
            </div>
            <div class="card-title mb-0 d-flex flex-row-reverse">
                <a href="/berita/insert" type="button" class="btn btn-outline-primary btn-sm">
                    <i class="bx bx-add-to-queue"></i>
                </a>
            </div>
        </div>
        <div class="table text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th>Judul</th>
                        <th>kategori</th>
                        <th>Ruangan</th>
                        <th>Status</th>
                        <th>Detail</th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($berita as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me"></i><strong>{{ $p->judul }}</strong>
                            </td>
                            <td>{{ $p->refkategori->deskripsi }}</td>
                            <td>{{ $p->refruangan->deskripsi }}</td>
                            @if ($p->status == 1)
                                <td><span class="badge bg-label-success me-1">Aktif</span></td>
                            @else
                                <td><span class="badge bg-label-warning me-1">NonAktif</span></td>
                            @endif
                            <td>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

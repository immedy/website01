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
        <div class="table-responsive">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th style="width: 40%">Judul</th>
                        <th style="width: 20%">kategori</th>
                        <th>Ruangan</th>
                        <th>Status</th>
                        <th style="text-align: right">Detail</th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($berita as $berita)
                        <tr>
                            <td scope="col">{{ $loop->iteration }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me"></i><strong>{{ $berita->judul }}</strong>
                            </td>
                            <td>{{ $berita->refkategori->deskripsi }}</td>
                            <td>{{ $berita->refruangan->deskripsi }}</td>
                            @if ($berita->status == 1)
                                <td><span class="badge bg-label-success me-1">Aktif</span></td>
                            @else
                                <td><span class="badge bg-label-warning me-1">NonAktif</span></td>
                            @endif
                            <td style="text-align: right">
                                <a href="/berita/{{ $berita->id }}/edit"
                                    class="bx bx-edit btn btn-icon btn-outline-primary"></a>
                                <form action="/berita/{{ $berita->id }}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
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

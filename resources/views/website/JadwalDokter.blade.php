@extends('layout.website')
@section('LayoutWebsite')
    <div class="container mt-5">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>Dokter Spesialis</h5>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 2%">NO</th>
                    <th style="width: 5%"></th>
                    <th style="width: 45%">Nama Dokter</th>
                    <th scope="col">Poliklinik</th>
                    <th style="width: 5%">Senin</th>
                    <th style="width: 5%">Selasa</th>
                    <th style="width: 5%">Rabu</th>
                    <th style="width: 5%">Kamis</th>
                    <th style="width: 5%">Jumat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($DokterSpesialis as $p)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td style="width: 5%"><img class="img-fluid" src="{{ asset('storage/' . $p->foto) }}"
                                style="width: 50px; height: 50px; object-fit: cover;" alt=""> </td>
                        <td>{{ $p->nama }}[SPESIALIS {{ $p->refsmf->deskripsi }}]</td>
                        <td style="text-justify: center">{{ $p->refpoliklinik->deskripsi }}</td>

                        @if ($p->senin == 1)
                            <td><i class="fa fa-check text-primary me-3"></i></td>
                        @else
                            <td><i class="fa fa-times text-primary me-3"></i></td>
                        @endif
                        @if ($p->selasa == 1)
                            <td><i class="fa fa-check text-primary me-3"></i></td>
                        @else
                            <td><i class="fa fa-times text-primary me-3"></i></td>
                        @endif
                        @if ($p->rabu == 1)
                            <td><i class="fa fa-check text-primary me-3"></i></td>
                        @else
                            <td><i class="fa fa-times text-primary me-3"></i></td>
                        @endif
                        @if ($p->kamis == 1)
                            <td><i class="fa fa-check text-primary me-3"></i></td>
                        @else
                            <td><i class="fa fa-times text-primary me-3"></i></td>
                        @endif
                        @if ($p->jumat == 1)
                            <td><i class="fa fa-check text-primary me-3"></i></td>
                        @else
                            <td><i class="fa fa-times text-primary me-3"></i></td>
                        @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="container mt-5">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>Dokter Spesialis (Residen)</h5>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 2%">NO</th>
                    <th style="width: 5%"></th>
                    <th style="width: 45%">Nama Dokter</th>
                    <th scope="col">Poliklinik</th>
                    <th style="width: 5%">Senin</th>
                    <th style="width: 5%">Selasa</th>
                    <th style="width: 5%">Rabu</th>
                    <th style="width: 5%">Kamis</th>
                    <th style="width: 5%">Jumat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($DokterResiden as $p)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td style="width: 5%"><img class="img-fluid" src="{{ asset('storage/' . $p->foto) }}"
                                style="width: 50px; height: 50px; object-fit: cover;" alt=""></td>
                        <td>{{ $p->nama }} [SPESIALIS {{ $p->refsmf->deskripsi }}]</td>
                        <td style="text-justify: center">{{ $p->refpoliklinik->deskripsi }}</td>
                        @if ($p->senin == 1)
                            <td><i class="fa fa-check text-primary me-3"></i></td>
                        @else
                            <td><i class="fa fa-times text-primary me-3"></i></td>
                        @endif
                        @if ($p->selasa == 1)
                            <td><i class="fa fa-check text-primary me-3"></i></td>
                        @else
                            <td><i class="fa fa-times text-primary me-3"></i></td>
                        @endif
                        @if ($p->rabu == 1)
                            <td><i class="fa fa-check text-primary me-3"></i></td>
                        @else
                            <td><i class="fa fa-times text-primary me-3"></i></td>
                        @endif
                        @if ($p->kamis == 1)
                            <td><i class="fa fa-check text-primary me-3"></i></td>
                        @else
                            <td><i class="fa fa-times text-primary me-3"></i></td>
                        @endif
                        @if ($p->jumat == 1)
                            <td><i class="fa fa-check text-primary me-3"></i></td>
                        @else
                            <td><i class="fa fa-times text-primary me-3"></i></td>
                        @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

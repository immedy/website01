@extends('layout.admin')
@section('dashboard')
    <div class="card ">
        <h5 class="card-header">Detail Indikator</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tahun</th>
                        <th>Menu Indikator</th>
                        <th>referensi Indikator</th>
                        
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($detail as $p)
                    <tr>
                        <td>{{ $p->menuindikator->tahun }}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $p->menuindikator->refindikator->deskripsi }}</strong></td>
                        <td>{{ $p->refjuduldetailindikator->deskripsi }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

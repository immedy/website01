@extends('layout.admin')
@section('dashboard')
<div class="card">
  <form action="/CapaianIndikator" method="post">
    @csrf
    <h5 class="card-header">{{ $JudulIndikator->refindikator->deskripsi }} Tahun {{ $JudulIndikator->tahun }}</h5>
    
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Judul Indikator</th>
            <th style="text-align: center">Bulan</th> 
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ( $menu as $p )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
              {{ $p->deskripsi }}
            </td>
           <td><label for="januari" class="form-label">Januari</label>
            <input id="januari" name="januari"  class="form-control form-control-sm" type="text" />
           </td>
           <td> </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <div class="modal-footer">
        <a href="/IndikatorMutu" type="button" class="btn btn-outline-secondary" >
            Kembali
        </a>
        <button type="submit" class="btn btn-primary" style="text-align: right">Simpan</button>
    </div>
    </div>
  </form>
</div>

@endsection
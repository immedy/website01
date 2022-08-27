@extends('layout.admin')
@section('dashboard')
<div class="card">
  <form action="/CapaianIndikator" method="post">
    @csrf
    <h5 class="card-header">{{ $JudulIndikator->refindikator->deskripsi }} Tahun {{ $JudulIndikator->tahun }}</h5>
    <input type="text" value="{{ $JudulIndikator->refindikator->deskripsi }}" id="refindikator_id" name="refindikator_id" hidden>
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
            <td>{{ $p->deskripsi}}</td>
           <td>
            <div class="container">
              <div class="row">
                <div class="col">
                  <label for="smallInput" class="form-label">Januari</label>
                  <input id="januari" name="januari" class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Februari</label>
                  <input id="februari" name="februari"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Maret</label>
                  <input id="maret" name="maret"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">April</label>
                  <input id="april" name="april"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Mei</label>
                  <input id="mei" name="mei"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Juni</label>
                  <input id="juni" name="juni"class="form-control form-control-sm" type="number" />
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="smallInput" class="form-label">Juli</label>
                  <input id="juli" name="juli"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Agustsus</label>
                  <input id="agustus" name="agustus"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">September</label>
                  <input id="oktober" name="oktober"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Oktober</label>
                  <input id="september" name="september" class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">November</label>
                  <input id="november" name="november" class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label" style="text-align: center">Desember</label>
                  <input id="desember" name="desember" class="form-control form-control-sm" type="number" />
                </div>
              </div>
            </div>
           </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <div class="modal-footer">
        <a href="/IndikatorMutu" type="button" class="btn btn-outline-secondary" >
            Kembali
        </a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </div>
  </form> 
  </div>

@endsection
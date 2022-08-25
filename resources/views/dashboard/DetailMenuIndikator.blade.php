@extends('layout.admin')
@section('dashboard')
<div class="card">
    <h5 class="card-header">Light Table head</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Judul Indikator</th>
            <th>Bulan</th> 
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td>1</td>
            <td>Albert Cook</td>
           <td>
            <div class="container">
              <div class="row">
                <div class="col">
                  <label for="smallInput" class="form-label">Januari</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Februari</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Maret</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">April</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="smallInput" class="form-label">Mei</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Juni</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Juli</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Agustsus</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="smallInput" class="form-label">September</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Oktober</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">November</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
                <div class="col">
                  <label for="smallInput" class="form-label">Desember</label>
                  <input id="smallInput"class="form-control form-control-sm" type="number" />
                </div>
              </div>
            </div>
           </td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>

@endsection
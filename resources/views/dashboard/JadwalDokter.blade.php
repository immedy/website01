@extends('layout.admin')
@section('dashboard')
<div class="card" >
    <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
        <div>
            <h5>Jadwal Dokter</h5>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 20%">Nama</th>
                <th>Poliklinik</th>
                <th>Senin</th>
                <th>Selasa</th>
                <th>Rabu</th>
                <th>Kamis</th>
                <th>Jumat</th>
                <th style="text-align: right">Actions</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $dokter->nama }}</strong></td>
                    
                    <td >Poli</td>
                    <td >Senin</td>
                    <td >Selasa</td>
                    <td >Rabu</td>
                    <td >Kamis</td>
                    <td >Jumat</td>
                    <td style="text-align: right">
                        <a href="#" class="bx bx-edit btn btn-icon btn-outline-primary" style="left:"></a>
                        <a href="#" class="bx bx-trash-alt btn btn-icon btn-outline-danger"></a>
                        
                    </td>
                </tr>
  
        </tbody>
    </table>
</div>
@endsection
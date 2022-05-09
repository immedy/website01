@extends('layout.admin')
@section('dashboard')
<div class="card">
    <h5 class="card-header">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal" >
            Tambah Pengguna
          </button>
    </h5>
          <!-- Button trigger modal -->
          
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Unit</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
           
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
            <td>Albert Cook</td>
            <td>PPDE</td>
            <td><span class="badge bg-label-primary me-1">Active</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
          <tr>
            
            <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
            <td>Barry Hunter</td>
            <td>PPDE</td>
            <td>
                <span class="badge bg-label-success me-1">Completed</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
@endsection

@extends('layout.admin')
@section('dashboard')
    {{--  --}}
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>INDIKATOR AREA KLINIS</h5>
            </div>
            <div class="card-title mb-0 d-flex flex-row-reverse">
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#INDIKATORAREAKLINIS">
                    <i class="bx bx-add-to-queue"></i>
                </button>
            </div>
        </div>
        <!-- Button trigger modal -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 10%">Tahun</th>
                    <th style="width: 50%">Judul</th>
                    <th>Foto</th>
                    <th style="text-align: right">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>1</td>
                    <td>1992</td>
                    <td><i class="fab fa-angular fa-lg text-danger"></i><strong>INDIKATOR AREA KESELAMTAN PASIEN</strong>
                    </td>
                    <td>111</td>
                    <td style="text-align: right">
                        <a href="#" class="bx bx-edit btn btn-icon btn-outline-primary" style="left:"></a>
                        <a href="#" class="bx bx-trash-alt btn btn-icon btn-outline-danger"></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{--  --}}
    <div class="card mt-3">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>INDIKATOR AREA MANAJEMEN</h5>
            </div>
            <div class="card-title mb-0 d-flex flex-row-reverse">
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#INDIKATORAREAMANAJEMEN">
                    <i class="bx bx-add-to-queue"></i>
                </button>
            </div>
        </div>
        <!-- Button trigger modal -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 10%">Tahun</th>
                    <th style="width: 50%">Judul</th>
                    <th>Foto</th>
                    <th style="text-align: right">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>1</td>
                    <td>1992</td>
                    <td><i class="fab fa-angular fa-lg text-danger"></i><strong>INDIKATOR AREA KESELAMTAN PASIEN</strong>
                    </td>
                    <td>111</td>
                    <td style="text-align: right">
                        <a href="#" class="bx bx-edit btn btn-icon btn-outline-primary" style="left:"></a>
                        <a href="#" class="bx bx-trash-alt btn btn-icon btn-outline-danger"></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{--  --}}
    <div class="card mt-3">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>INDIKATOR AREA KESELAMTAN PASIEN</h5>
            </div>
            <div class="card-title mb-0 d-flex flex-row-reverse">
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#INDIKATORAREAKESELAMTANPASIEN">
                    <i class="bx bx-add-to-queue"></i>
                </button>
            </div>
        </div>
        <!-- Button trigger modal -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 10%">Tahun</th>
                    <th style="width: 50%">Judul</th>
                    <th>Foto</th>
                    <th style="text-align: right">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>1</td>
                    <td>1992</td>
                    <td><i class="fab fa-angular fa-lg text-danger"></i><strong>INDIKATOR AREA KESELAMTAN PASIEN</strong>
                    </td>
                    <td>111</td>
                    <td style="text-align: right">
                        <a href="#" class="bx bx-edit btn btn-icon btn-outline-primary" style="left:"></a>
                        <a href="#" class="bx bx-trash-alt btn btn-icon btn-outline-danger"></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{--  --}}
@endsection

{{--  --}}
<div class="modal fade" id="INDIKATORAREAKLINIS" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">INDIKATOR AREA KLINIS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameLarge" class="form-label">Tahun</label>
                        <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" />
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="emailLarge" class="form-label">Judul</label>
                        <input type="text" id="emailLarge" class="form-control" placeholder="xxxx@xxx.xx" />
                    </div>
                    <div class="col mb-0">
                        <label for="dobLarge" class="form-label">Foto</label>
                        <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
{{--  --}}
<div class="modal fade" id="INDIKATORAREAMANAJEMEN" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">INDIKATOR AREA MANAJEMEN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameLarge" class="form-label">Name</label>
                        <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" />
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="emailLarge" class="form-label">Email</label>
                        <input type="text" id="emailLarge" class="form-control" placeholder="xxxx@xxx.xx" />
                    </div>
                    <div class="col mb-0">
                        <label for="dobLarge" class="form-label">DOB</label>
                        <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
{{--  --}}
<div class="modal fade" id="INDIKATORAREAKESELAMTANPASIEN" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">INDIKATOR AREA KESELAMTAN PASIEN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameLarge" class="form-label">Name</label>
                        <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" />
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="emailLarge" class="form-label">Email</label>
                        <input type="text" id="emailLarge" class="form-control" placeholder="xxxx@xxx.xx" />
                    </div>
                    <div class="col mb-0">
                        <label for="dobLarge" class="form-label">DOB</label>
                        <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

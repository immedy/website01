@extends('layout.admin')
@section('dashboard')
    {{--  --}}
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
            <div>
                <h5>Mutu Dan Prioritas</h5>
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
                    <th style="text-align: right">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($menuindikator as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->tahun }}</td>
                    <td><i class="fab fa-angular fa-lg text-danger"></i><strong>{{ $p->refindikator->deskripsi }}</strong>
                    </td>
                    <td style="text-align: right">
                        <a href="/IndikatorMutu/{{ $p->id }}" class="bx bx-bar-chart btn btn-icon btn-outline-primary" style="left:"></a>
                        <a href="#" class="bx bx-comment-detail btn btn-icon btn-outline-success"></a>
                        <a href="#" class="bx bx-trash-alt btn btn-icon btn-outline-danger"></a>
                    </td>
                </tr>    
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection

{{--  --}}
<div class="modal fade" id="INDIKATORAREAKLINIS" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/IndikatorMutu" method="post" class="modal-content">
                @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Mutu Dan Prioritas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-3 mb-1">
                        <label for="nameLarge" class="form-label">Tahun</label>
                        <select class="form-control" id="tahun" name="tahun"></select>
                    </div>
                    <div class="col mb-0">
                        <label for="emailLarge" class="form-label">Judul</label>
                        <select class="form-control" id="refindikator_id" name="refindikator_id">
                            <option selected disabled value="">Silahkan Pilih</option>
                            @foreach ($indikator as $p)
                                <option value="{{ $p->id }}">{{ $p->deskripsi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Keluar
                </button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{--  --}}
<script type="text/javascript">
    window.onload = function () {
        //Reference the DropDownList.
        var ddlYears = document.getElementById("tahun");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 2013; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
    };
</script>

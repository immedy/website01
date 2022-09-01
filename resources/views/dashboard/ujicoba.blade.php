@extends('layout.admin')
@section('dashboard')

<div class="card">
    <h5 class="card-header">Bordered Table</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered" id="dynamicAddRemove">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><select type="text" name="moreFields[0][title]" placeholder="Enter title" class="form-control" >
              @foreach ($p as $p )<option value="{{ $p->id }}">{{ $p->deskripsi }}</option>
              @endforeach  
              </select></td>
              <td>
                <button type="button" name="add" id="add-btn" class="btn btn-success">Add More</button>
              </td>
              <td><span class="badge bg-label-primary me-1">Active</span></td>
              <td>
                <div class="dropdown">
                  <button
                    type="button"
                    class="btn p-0 dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown"
                  >
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
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    
    var i = 0;
        
    $("#add-btn").click(function(){
    
        ++i;
    
        $("#dynamicAddRemove").append('<tr><td><select type="text" name="moreFields['+i+'][title]" value="{{ $p->id }}" class="form-control" ></select></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
    
</script>
@endsection
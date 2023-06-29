@extends('admin.master')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Not Connected Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('joEmployees.index')}}">Not Connected</a></li>
              <li class="breadcrumb-item active">Not Connected Employee Table</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container" style="margin:auto;">
      <div class="card col-lg-12" >
          @if ($message = Session::get('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{ $message }}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          @endif

          @if(Session::has('errmessage'))
                      <div class="alert alert-danger">
                          {{Session::get('errmessage')}}
                      </div>
          @endif
          <div class="table-responsive">
              <table class="display" id="table_perEmp">
                  <thead class="thead-dark">
                      <tr>
                          <th>Name</th>
                          <th>Status of Employement</th>
                          <th>Mode of Separation</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($separatedEmployees as $separatedEmployee)
                      <tr>
                          <td>{{ $separatedEmployee->id}}</td>
                          <td>{{ $separatedEmployee->emp_name}}</td>
                          <td style="color: red;"><strong>{{ $separatedEmployee->emp_type }}</strong></td>
                          <td>{{ $separatedEmployee->emp_remarks }}</td>
                          <td class="btn-group" role="group">
                            <form method="post" action="{{ route('separatedEmployees.destroy',$separatedEmployee->id)}}">
                              @csrf
                              @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete data?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                          </td>
                      </tr>

                      @endforeach
                  </tbody>
              </table>
      </div>
          </div>
      </div>
      </div>

<script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Employee data created successfully'
        })
      });

    });
</script>
<script>
    $(document).ready( function () {
        $('#table_perEmp').DataTable();
    } );
</script>
<script>
    $('.alert').alert();
</script>
@endsection




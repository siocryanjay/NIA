@extends('admin.master')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">JO/COS Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('joEmployees.index')}}">JO/COS</a></li>
              <li class="breadcrumb-item active">JO/COS Table</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container" style="margin:auto;">
      <div class="card col-lg-12" >
          <div class="row">

              <div class="card-body">
                  <a href="{{ route('casualEmployees.create') }}" class="btn btn-primary">Add Employee</a>
              </div>
          </div>
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
                          <th>ID</th>
                          <th>Name of Appointee</th>
                          <th>Position Title</th>
                          <th>SG</th>
                          <th>Division</th>
                          <th>IMO</th>
                          <th>Status of Employement</th>
                          <th>Charging</th>
                          <th>Monthly</th>
                          <th>Annual</th>
                          <th>Date of Birth</th>
                          <th>Age</th>
                          <th>Sex</th>
                          <th>Date of Assumption to Duty</th>
                          <th>Highest Educational Attainment</th>
                          <th>Eligibility</th>
                          <th>TOTAL</th>
                          <th>Remarks</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($joEmployees as $joEmployee)
                      <tr>
                          <td>{{ $joEmployee->id}}</td>
                          <td>{{ $joEmployee->emp_name}}</td>
                          <td>{{ $joEmployee->emp_title }}</td>
                          <td>{{ $joEmployee->emp_sg }}</td>
                          <td>{{ $joEmployee->emp_division }}</td>
                          <td>{{ $joEmployee->emp_imo }}</td>
                          <td style="color: red;"><strong>{{ $joEmployee->emp_status }}</strong></td>
                          <td><strong>{{ $joEmployee->emp_charging }}</strong></td>
                          <td>{{ $joEmployee->emp_monthly }}</td>
                          <td>{{ $joEmployee->emp_annual }}</td>
                          <td>{{ $joEmployee->emp_dateOfBirth }}</td>
                          <td>{{ $joEmployee->emp_age }}</td>
                          <td>{{ $joEmployee->emp_sex }}</td>
                          <td>{{ $joEmployee->emp_dateOfAssumption }}</td>
                          <td>{{ $joEmployee->emp_attainment}}</td>
                          <td>{{ $joEmployee->emp_eligible }}</td>
                          <td>{{ $joEmployee->emp_total }}</td>
                          <td>{{ $joEmployee->emp_remarks }}</td>
                          <td class="btn-group" role="group">
                                  <a class="btn btn-primary" href="{{ route('joEmployees.edit',$joEmployee->id) }}">
                                      <i class="fas fa-edit"></i>
                                  </a>

                                  <form action="{{ route('joEmployees.destroy',$joEmployee->id) }}" method="POST">
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




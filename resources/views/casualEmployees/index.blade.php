@extends('admin.master')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Casual Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Casual Employee</a></li>
              <li class="breadcrumb-item active">Casual Employee Table   </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="card col-lg-12">
    <div class="row">
        <div class="col-lg-12 margin-tb">

        </div>
        <div class="card-body">
            <a href="{{ route('casualEmployees.create') }}" class="btn btn-primary">Create new Casual Employee</a>
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
    <div class="table-responsive">
        <table class="display nowrap" id="table_perEmp">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name of Appointee</th>
                    <th>Position Title</th>
                    <th>SG</th>
                    <th>STEP</th>
                    <th>Division</th>
                    <th>IMO</th>
                    <th>Monthly</th>
                    <th>Annual</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Date of Original Appointment</th>
                    <th>Highest Educational Attainment</th>
                    <th>Eligibility</th>
                    <th>PERA</th>
                    <th>MIDYEAR AND YEAREND BONUS</th>
                    <th>UNIFORM/ CLOTHING ALLOWANCE</th>
                    <th>CASH GIFT</th>
                    <th>RATA</th>
                    <th>Anniversary Bonus</th>
                    <th>PEI</th>
                    <th>ECC</th>
                    <th>PAGIBIG</th>
                    <th>PHIC</th>
                    <th>GSIS</th>
                    <th>TOTAL</th>
                    <th>Remarks</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($casualEmployees as $casualEmployee)
                <tr>
                    <td>{{ $casualEmployee->id}}</td>
                    <td>{{ $casualEmployee->emp_name}}</td>
                    <td>{{ $casualEmployee->emp_title }}</td>
                    <td>{{ $casualEmployee->emp_sg }}</td>
                    <td>{{ $casualEmployee->emp_step }}</td>
                    <td>{{ $casualEmployee->emp_division }}</td>
                    <td>{{ $casualEmployee->emp_imo }}</td>
                    <td>{{ $casualEmployee->emp_monthly }}</td>
                    <td>{{ $casualEmployee->emp_annual }}</td>
                    <td>{{ $casualEmployee->emp_dateOfBirth }}</td>
                    <td>{{ $casualEmployee->emp_age }}</td>
                    <td>{{ $casualEmployee->emp_sex }}</td>
                    <td>{{ $casualEmployee->emp_dateOfApp }}</td>
                    <td>{{ $casualEmployee->emp_attainment}}</td>
                    <td>{{ $casualEmployee->emp_eligible }}</td>
                    <td>{{ $casualEmployee->emp_pera }}</td>
                    <td>{{ $casualEmployee->emp_midEndBonus }}</td>
                    <td>{{ $casualEmployee->emp_uniAllow }}</td>
                    <td>{{ $casualEmployee->emp_cashGift }}</td>
                    <td>{{ $casualEmployee->emp_rata }}</td>
                    <td>{{ $casualEmployee->emp_annivBonus }}</td>
                    <td>{{ $casualEmployee->emp_pei }}</td>
                    <td>{{ $casualEmployee->emp_ecc }}</td>
                    <td>{{ $casualEmployee->emp_pagibig }}</td>
                    <td>{{ $casualEmployee->emp_phic }}</td>
                    <td>{{ $casualEmployee->emp_gsis }}</td>
                    <td>{{ $casualEmployee->emp_total }}</td>
                    <td>{{ $casualEmployee->emp_remarks }}</td>
                    <td class="btn-group" role="group">

                        <a class="btn btn-sm btn-primary" href="{{ route('casualEmployees.edit',$casualEmployee->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('casualEmployees.destroy',$casualEmployee->id) }}" method="POST">
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
<script>
    $('.alert').alert();
</script>
@endsection




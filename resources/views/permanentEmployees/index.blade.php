@extends('admin.master')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Permanent Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('permanentEmployees.index')}}">Permanent Employee</a></li>
              <li class="breadcrumb-item active">Permanent Employee Table</li>
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
            <a href="{{ route('permanentEmployees.create') }}" class="btn btn-primary">Create new Permanent Employee</a>
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
                    <th>Item No.</th>
                    <th>Division</th>
                    <th>IMO</th>
                    <th>Monthly</th>
                    <th>Annual</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Date of Original Appointment</th>
                    <th>Date of Last Promotion </th>
                    <th>Highest Educational Attainment</th>
                    <th>Eligibility</th>
                    <th>PERA</th>
                    <th>MIDYEAR AND YEAREND BONUS</th>
                    <th>UNIFORM/ CLOTHING ALLOWANCE</th>
                    <th>CELLPHONE ALLOWANCE</th>
                    <th>CASH GIFT</th>
                    <th>RATA</th>
                    <th>Anniversary Bonus</th>
                    <th>No. of Dependents</th>
                    <th>Children's Allowance</th>
                    <th>Meal Subsidy</th>
                    <th>Medical</th>
                    <th>PEI</th>
                    <th>ECC</th>
                    <th>PAGIBIG</th>
                    <th>PHIC</th>
                    <th>GSIS</th>
                    <th>TOTAL</th>
                    <th>Remarks</th>
                    <th style="width: 100px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permanentEmployees as $permanentEmployee)
                <tr>
                    <td>{{ $permanentEmployee->id}}</td>
                    <td>{{ $permanentEmployee->emp_name}}</td>
                    <td>{{ $permanentEmployee->emp_title }}</td>
                    <td>{{ $permanentEmployee->emp_sg }}</td>
                    <td>{{ $permanentEmployee->emp_step }}</td>
                    <td>{{ $permanentEmployee->emp_itemNo }}</td>
                    <td>{{ $permanentEmployee->emp_division }}</td>
                    <td>{{ $permanentEmployee->emp_imo }}</td>
                    <td>{{ $permanentEmployee->emp_monthly }}</td>
                    <td>{{ $permanentEmployee->emp_annual }}</td>
                    <td>{{ $permanentEmployee->emp_dateOfBirth }}</td>
                    <td>{{ $permanentEmployee->emp_age }}</td>
                    <td>{{ $permanentEmployee->emp_sex }}</td>
                    <td>{{ $permanentEmployee->emp_dateOfApp }}</td>
                    <td>{{ $permanentEmployee->emp_dateOfLastProm }}</td>
                    <td>{{ $permanentEmployee->emp_attainment}}</td>
                    <td>{{ $permanentEmployee->emp_eligible }}</td>
                    <td>{{ $permanentEmployee->emp_pera }}</td>
                    <td>{{ $permanentEmployee->emp_midEndBonus }}</td>
                    <td>{{ $permanentEmployee->emp_uniAllow }}</td>
                    <td>{{ $permanentEmployee->emp_cellAllow }}</td>
                    <td>{{ $permanentEmployee->emp_cashGift }}</td>
                    <td>{{ $permanentEmployee->emp_rata }}</td>
                    <td>{{ $permanentEmployee->emp_annivBonus }}</td>
                    <td>{{ $permanentEmployee->emp_noOfDependent }}</td>
                    <td>{{ $permanentEmployee->emp_childrenAllow }}</td>
                    <td>{{ $permanentEmployee->emp_mealSubsi }}</td>
                    <td>{{ $permanentEmployee->emp_medical }}</td>
                    <td>{{ $permanentEmployee->emp_pei }}</td>
                    <td>{{ $permanentEmployee->emp_ecc }}</td>
                    <td>{{ $permanentEmployee->emp_pagibig }}</td>
                    <td>{{ $permanentEmployee->emp_phic }}</td>
                    <td>{{ $permanentEmployee->emp_gsis }}</td>
                    <td>{{ $permanentEmployee->emp_total }}</td>
                    <td>{{ $permanentEmployee->emp_remarks }}</td>
                    <td class="btn-group">
                            <a class="btn btn-primary" href="{{ route('permanentEmployees.edit',$permanentEmployee->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>

                        <form action="{{ route('permanentEmployees.destroy',$permanentEmployee->id) }}" method="POST">
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


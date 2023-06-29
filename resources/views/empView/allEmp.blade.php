@extends('admin.master')

@section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><strong>Employee Data Tables</strong></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Employees</a></li>
            <li class="breadcrumb-item active">Employee Data Tables</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="card col-lg-12">
  @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
  @endif

<div class="row">
    <div class="col">
      <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
          <ul class="nav nav-tabs" id="custom-tabs-five-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-five-normal-tab" data-toggle="pill" href="#permanent" role="tab" aria-controls="custom-tabs-five-normal" aria-selected="false">Permanent/Co-Terminus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-five-normal-tab" data-toggle="pill" href="#casual" role="tab" aria-controls="custom-tabs-five-normal" aria-selected="false">Casual</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-five-normal-tab" data-toggle="pill" href="#jocos" role="tab" aria-controls="custom-tabs-five-normal" aria-selected="false">JO/COS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-five-normal-tab" data-toggle="pill" href="#separated" role="tab" aria-controls="custom-tabs-five-normal" aria-selected="false">Separated</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-five-tabContent">

            <!--#permanent-->
            <div class="tab-pane fade show active" id="permanent" role="tabpanel" aria-labelledby="custom-tabs-five-normal-tab">
                <div class="table-responsive">
                    <table class="display nowrap" id="table_perEmp">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width: 100px;">Action</th>
                                <th>ID</th>
                                <th>Name of Employee</th>
                                <th>Position Title</th>
                                <th class="no-sort">SG</th>
                                <th>STEP</th>
                                <th>Item No.</th>
                                <th>IMO</th>
                                <th>Monthly</th>
                                <th>Annual</th>
                                <th>Birth Date</th>
                                <th>Age</th>
                                <th>Sex</th>
                                <th>Date of Appointment</th>
                                <th>Date of Last Promotion </th>
                                <th>Highest Educational Attainment</th>
                                <th>Eligibility</th>
                                <th>PERA</th>
                                <th>Mid-Yearend Bonus</th>
                                <th>Clothing Allowance</th>
                                <th>Cellphone Allowance</th>
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
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permanentEmployees as $permanentEmployee)
                            <tr>
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
                                <td>{{ $permanentEmployee->id}}</td>
                                <td>{{ $permanentEmployee->emp_name}}</td>
                                <td>{{ $permanentEmployee->emp_title }}</td>
                                <td>{{ $permanentEmployee->emp_sg }}</td>
                                <td>{{ $permanentEmployee->emp_step }}</td>
                                <td>{{ $permanentEmployee->emp_itemNo }}</td>
                                <td>{{ $permanentEmployee->emp_division }}</td>
                                <td>{{ $permanentEmployee->emp_imo}}</td>
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <!-- /.table-responsive -->
                </div>
            </div>
            <!--#permanent-->

            <!--#casual-->
        <div class="tab-pane fade show" id="casual" role="tabpanel" aria-labelledby="custom-tabs-five-normal-tab">
            <div class="table-responsive">
                <table class="display nowrap" id="table_casual">
                    <thead class="thead-dark">
                        <tr>
                            <th>Action</th>
                            <th>ID</th>
                            <th>Name of Employee</th>
                            <th>Position Title</th>
                            <th>SG</th>
                            <th>STEP</th>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($casualEmployees as $casualEmployee)
                        <tr>
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
                            <td>{{ $casualEmployee->emp_dateOfLastProm }}</td>
                            <td>{{ $casualEmployee->emp_attainment}}</td>
                            <td>{{ $casualEmployee->emp_eligible }}</td>
                            <td>{{ $casualEmployee->emp_pera }}</td>
                            <td>{{ $casualEmployee->emp_midEndBonus }}</td>
                            <td>{{ $casualEmployee->emp_uniAllow }}</td>
                            <td>{{ $casualEmployee->emp_cellAllow }}</td>
                            <td>{{ $casualEmployee->emp_cashGift }}</td>
                            <td>{{ $casualEmployee->emp_rata }}</td>
                            <td>{{ $casualEmployee->emp_annivBonus }}</td>
                            <td>{{ $casualEmployee->emp_noOfDependent }}</td>
                            <td>{{ $casualEmployee->emp_childrenAllow }}</td>
                            <td>{{ $casualEmployee->emp_mealSubsi }}</td>
                            <td>{{ $casualEmployee->emp_medical }}</td>
                            <td>{{ $casualEmployee->emp_pei }}</td>
                            <td>{{ $casualEmployee->emp_ecc }}</td>
                            <td>{{ $casualEmployee->emp_pagibig }}</td>
                            <td>{{ $casualEmployee->emp_phic }}</td>
                            <td>{{ $casualEmployee->emp_gsis }}</td>
                            <td>{{ $casualEmployee->emp_total }}</td>
                            <td>{{ $casualEmployee->emp_remarks }}</td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--#casual-->

        <!--#jo/cos-->
        <div class="tab-pane fade show" id="jocos" role="tabpanel" aria-labelledby="custom-tabs-five-normal-tab">
            <div class="table-responsive">
              <table class="display nowrap" id="table_joCos" style="width:100%">
                  <thead class="thead-dark">
                      <tr>
                          <th>Action</th>
                          <th>ID</th>
                          <th>Name of Employee</th>
                          <th>Position Title</th>
                          <th>SG</th>
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
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($joEmployees as $joEmployee)
                      <tr>
                          <td class="btn-group" role="group">
                                  <a class="btn btn-primary" href="{{ route('joEmployees.edit',$joEmployee->id) }}">
                                      <i class="fas fa-edit"></i>
                                  </a>
                                  <button type="button" class="btn btn-danger delete-user" data-toggle="modal" data-target="#modal-danger">
                                      <i class="fas fa-trash"></i>
                                  </button>
                          </td>
                          <td>{{ $joEmployee->id}}</td>
                          <td>{{ $joEmployee->emp_lName}}, {{$joEmployee->emp_fName}} {{ $joEmployee->emp_mName}}</td>
                          <td>{{ $joEmployee->emp_title }}</td>
                          <td>{{ $joEmployee->emp_sg }}</td>
                          <td>{{ $joEmployee->emp_imo }}</td>
                          <td style="color: red;"><strong>{{ $joEmployee->emp_status }}</strong></td>
                          <td><strong>{{ $joEmployee->emp_charging }}</strong></td>
                          <td>₱{{ number_format($joEmployee->emp_monthly,2) }}</td>
                          <td>₱{{ number_format($joEmployee->emp_annual,2) }}</td>
                          <td>{{ date('F j, Y', strtotime($joEmployee->emp_dateOfBirth)) }}</td>
                          <td>{{ Carbon\Carbon::createFromDate($joEmployee->emp_dateOfBirth)->age }}</td>
                          <td>{{ $joEmployee->emp_sex }}</td>
                          <td>{{ date('F j, Y', strtotime($joEmployee->emp_dateOfAssumption)) }}</td>
                          <td>{{ $joEmployee->emp_attainment}}</td>
                          <td>{{ $joEmployee->emp_eligible }}</td>
                          <td>₱{{ number_format($joEmployee->emp_total, 2) }}</td>
                          <td>{{ $joEmployee->emp_remarks }}</td>
                      </tr>
                      <div class="modal fade" id="modal-danger">
                          <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                              <div class="modal-header">
                                <h4 class="modal-title">Confirm to delete</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="{{ route('joEmployees.destroy',$joEmployee->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                      <input type="hidden" name="emp_id" id="emp_id">
                              <div class="modal-body">
                                <p>Are you sure you want to delete <strong>{{ $joEmployee->emp_lName}}, {{$joEmployee->emp_fName}} {{ $joEmployee->emp_mName}}</strong>?</p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-light">Delete</button>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                      </form>
                      </div>
                      <!-- /.modal -->
                      @endforeach
                  </tbody>
              </table>
        </div>
        </div>
        <!--#jo/cos-->

        <!--#separated-->
        <div class="tab-pane fade show" id="separated" role="tabpanel" aria-labelledby="custom-tabs-five-normal-tab">
            <div class="table-responsive">
              <table class="display nowrap" id="table_separated">
                  <thead class="thead-dark">
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Status of Appointment</th>
                          <th>Date of Separation</th>
                          <th>Mode of Separation</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($separatedEmployees as $separatedEmployee)
                      <tr>
                          <td>{{ $separatedEmployee->id}}</td>
                          <td>{{ $separatedEmployee->emp_name}}</td>
                          <td style="color: red;"><strong>{{ $separatedEmployee->emp_statOfAppoint}}</strong></td>
                          <td>{{ $separatedEmployee->emp_dateOfSeparation}}</td>
                          <td>{{ $separatedEmployee->emp_mos}}</td>
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
        <!--#separated-->




        <!-- /.card -->
    </div>
  </div>

  <script>
    $(function () {
    $('#table_casual').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
  });
</script>
<script>
    $(function () {
    $('#table_joCos').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "responsive": false,
    });
  });
</script>
<script>
    $(function () {
    $('#table_separated').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
  });
</script>
@endsection




@extends('admin.master')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Casual Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('casualEmployees.index')}}">Casual</a></li>
              <li class="breadcrumb-item active">Update Casual Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="card col-lg-12">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('casualEmployees.index') }}"> Back</a>
            </div>
            <br>
            <br>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('casualEmployees.update',$casualEmployee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- general form elements -->
<!-- /.card-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Update {{$casualEmployee->emp_name}}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <input type="hidden" value="{{$casualEmployee->id}}" name="id" class="form-control" placeholder="id">
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select1" name="emp_type" id="emp_type" required>
                        <option value="{{ $casualEmployee->emp_type}}" selected="selected">{{ $casualEmployee->emp_type}}</option>
                        <option value="PERMANENT">PERMANENT</option>
                        <option value="CO-TERMINUS">CO-TERMINUS</option>
                        <option value="SEPARATED">SEPARATED</option>
                        <option value="CASUAL">CASUAL</option>
                    </select>
                </div>
                    <!-- /.form-group -->
                <div class="form-group">
                    <label>Name of Appointee</label>
                    <input type="text" value="{{$casualEmployee->emp_name}}" name="emp_name" class="form-control" placeholder="{{$casualEmployee->emp_name}}">
                </div>
                <!-- /.form-group -->

                <!-- /.form-group -->
                <div class="form-group " id="soa">
                    <label>Status of Appointment</label>
                    <input type="text" name="emp_statOfAppoint" id="emp_statOfAppoint" value="{{ $casualEmployee->emp_type}}" class="form-control" placeholder="{{$casualEmployee->emp_type}}" readonly>
                </div>
                <!-- Date -->
                <div class="form-group " id="dos">
                    <label>Date of Separation</label>
                    <input type="date" class="form-control" name="emp_dateOfSeparation" id="emp_dateOfSeparation">
                </div>
                <!-- Date -->

                <!-- /.form-group -->
                <div class="form-group " id="mos">
                    <label>Mode of Separation</label>
                    <input type="text" name="emp_mos" id="emp_mos" class="form-control">
                </div>
                <!-- /.form-group -->

                <div class="form-group" id="pt">
                    <label>Position Title</label>
                    <select class="form-control select2" name="emp_title" id="emp_title">
                        <option value="{{$casualEmployee->emp_title}}" selected="selected">{{$casualEmployee->emp_title}}</option>
                        <option value="Utility worker B">Utility worker B</option>
                        <option value="Utility worker B">Utility worker B</option>
                        <option value="Utility worker A">Utility worker A</option>
                        <option value="Utility worker A/ Ditch Tender">Utility worker A/ Ditch Tender</option>
                        <option value="Admin Aide">Admin Aide</option>
                        <option value="WRFO B">WRFO B</option>
                        <option value="Survery Aide A">Survery Aide A</option>
                        <option value="Sr. Carpenter A">Sr. Carpenter A</option>
                        <option value="Data Encoder">Data Encoder</option>
                        <option value="Driver-Mechanic B">Driver-Mechanic B</option>
                        <option value="Driver Mechanic B">Driver Mechanic B</option>
                        <option value="Data Encode/ IDO">Data Encode/ IDO</option>
                        <option value="Engineering Assistant B">Engineering Assistant B</option>
                        <option value="Industrial Security Guard A">Industrial Security Guard A</option>
                        <option value="Accounting Processor A">Accounting Processor A</option>
                        <option value="Computer File Librarian 1">Computer File Librarian 1</option>
                        <option value="Welder A">Welder A</option>
                        <option value="Foreman B">Foreman B</option>
                        <option value="Draftsman">Draftsman</option>
                        <option value="Heavy Equipment Operator">Heavy Equipment Operator</option>
                        <option value="Driver Mechanic A">Driver Mechanic A</option>
                        <option value="Auto Mechanic A">Auto Mechanic A</option>
                        <option value="Heavy Equip Operator">Heavy Equip Operator</option>
                        <option value="Collective Representative A">Collective Representative A</option>
                        <option value="Foreman A">Foreman A</option>
                        <option value="Engineering Assistant A">Engineering Assistant A</option>
                        <option value="Plant Mechanic">Plant Mechanic</option>
                        <option value="Senior Draftsman">Senior Draftsman</option>
                        <option value="Procurement Analyst B">Procurement Analyst B</option>
                        <option value="Senior Accounting Processor A">Senior Accounting Processor A</option>
                        <option value="Property Officer B">Property Officer B</option>
                        <option value="SWRFT">SWRFT</option>
                        <option value="Engineer B">Engineer B</option>
                        <option value="Irrigator's Development Officer A">Irrigator's Development Officer A</option>
                        <option value="Economist A">Economist A</option>
                        <option value="Engineer A">Engineer A</option>
                        <option value="Cashier B">Cashier B</option>
                        <option value="Hydrologist">Hydrologist</option>
                        <option value="Sr. IDO">Sr. IDO</option>
                        <option value="Senior Corporate Accounts Analyst">Senior Corporate Accounts Analyst</option>
                        <option value="Administrative Services Officer A">Administrative Services Officer A</option>
                        <option value="Senior Engineer A">Senior Engineer A</option>
                        <option value="Supervising IDO">Supervising IDO</option>
                        <option value="Supervising Engineer A">Supervising Engineer A</option>
                        <option value="Administrative Services Chief C">Administrative Services Chief C</option>
                        <option value="Principal Engineer C">Principal Engineer C</option>
                        <option value="Principal Engineer A">Principal Engineer A</option>
                        <option value="Division Manager A">Division Manager A</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group" id="age">
                    <label>Age</label>
                    <input type="number" class="form-control" value="{{$casualEmployee->emp_age}}" name="emp_age" placeholder="Age" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group" id="dob">
                    <label>Date of Birth</label>
                          <input type="date" class="form-control" value="{{$casualEmployee->emp_dateOfBirth}}" name="emp_dateOfBirth" required/>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6" id="sg">
                <div class="form-group">
                <label>Salary Grade:</label>
                <select class="form-control select2" name="emp_sg" id="emp_sg">
                    <option selected="selected" value="{{$casualEmployee->emp_sg}}">{{$casualEmployee->emp_sg}}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Step:</label>
                    <select class="form-control select2" name="emp_step" id="emp_step">
                        <option selected="selected" value="{{$casualEmployee->emp_step}}">{{$casualEmployee->emp_step}}</option>
                        <option value="1">Step 1</option>
                        <option value="2">Step 2</option>
                        <option value="3">Step 3</option>
                        <option value="4">Step 4</option>
                        <option value="5">Step 5</option>
                        <option value="6">Step 6</option>
                        <option value="7">Step 7</option>
                        <option value="8">Step 8</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Division</label>
                    <input type="text" value="{{$casualEmployee->emp_division}}" class="form-control"  name="emp_division" placeholder="{{$casualEmployee->emp_division}}">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>IMO</label>
                    <input type="text" value="{{$casualEmployee->emp_imo}}" class="form-control"  name="emp_imo" placeholder="{{$casualEmployee->emp_imo}}">
                </div>
                <div class="form-group">
                    <label>Charging</label>
                    <select class="form-control select2" name="emp_charging" id="emp_charging">
                        <option selected="selected" value="{{$casualEmployee->emp_charging}}">{{$casualEmployee->emp_charging}}</option>
                        <option value="COB">COB</option>
                        <option value="INDIRECT">INDIRECT</option>
                        <option value="DIRECT">DIRECT</option>
                        <option value="MOOE">MOOE</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Sex</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="F" name="emp_sex" value="F" required>
                        <label for="F" class="form-check-label">Female</label>
                        <br>
                        <input class="form-check-input" type="radio" id="M" name="emp_sex" value="M">
                        <label for="M" class="form-check-label">Male</label>
                        <input type="radio" style="display: none;" name="emp_sex" value="{{$casualEmployee->emp_sex}}" checked="checked">
                    </div>
                </div>
                <!-- /.form-group -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->
<!--DATES -->
    <div class="row" id="doa">
        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dates</h3>
              </div>
              <div class="card-body">
                <!-- Date -->
                <div class="form-group">
                    <label>Date of Application</label>
                    <input type="date" value="{{$casualEmployee->emp_dateOfApp}}" class="form-control"  name="emp_dateOfApp" placeholder="{{$casualEmployee->emp_dateOfApp}}">
                </div>
                <!-- Date -->
            </div>
        </div>
    </div>
<!--Attainment & Eligibility-->
        <div class="col-md-6" id="eae">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Educational Attainment & Eligibility</h3>
              </div>
              <div class="card-body">
                <!--Attainment & Eligibility-->
                <div class="form-group">
                    <label>Highest Educational Attainement</label>
                    <input type="text" value="{{$casualEmployee->emp_attainment}}" class="form-control" name="emp_attainment" placeholder="{{$casualEmployee->emp_attainment}}">
                </div>
                <!--Attainment & Eligibility-->
                <!--Attainment & Eligibility-->
                <div class="form-group">
                    <label>Eligibility</label>
                    <input type="text" value="{{$casualEmployee->emp_eligible}}" class="form-control" name="emp_eligible" placeholder="{{$casualEmployee->emp_eligible}}">
                </div>
                <!--Attainment & Eligibility-->
            </div>
        </div>
        </div>
    </div>
<!--SALARY -->
<div class="row" id="salary">
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Salary</h3>
          </div>
          <div class="card-body">
            <!-- Monthly Salary -->
            <div class="form-group">
                <label>Monthly Salary</label>
                <input type="number" value="{{$casualEmployee->emp_monthly}}"  onchange="calculateAmount(this.value)" class="form-control"  name="emp_monthly" placeholder="{{$casualEmployee->emp_monthly}}">
            </div>
            <!-- Monthly Salary -->
            <!-- Annual Salary -->
            <div class="form-group">
                <label>Annual Salary</label>
                <input type="number" value="{{$casualEmployee->emp_annual}}" onblur="getTotal();" class="form-control input-filled" id="emp_annual"  name="emp_annual" placeholder="{{$casualEmployee->emp_annual}}">
            </div>
            <!-- Annual Salary -->
        </div>
    </div>

</div>
<!--SPECIFIC PURPOSE ALLOWANCE -->
<div class="col-md-6" id="spa">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">SPECIFIC PURPOSE ALLOWANCE</h3>
      </div>
      <div class="card-body">
        <!-- Date -->
        <div class="form-group">
              <!-- RATA -->
              <div class="form-group">
                <label>RATA</label>
                <input type="number" value="{{$casualEmployee->emp_rata}}" onblur="getTotal();" class="form-control input-filled" name="emp_rata" placeholder="{{$casualEmployee->emp_rata}}">
            </div>
            <!-- RATA -->
        </div>
        <!-- Date -->
    </div>
</div>
</div>
</div>
<!-- STANDARD ALLOWANCES -->
<div class="row" >
    <div class="col-md-6" id="sa">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Standard Allowances</h3>
          </div>
          <div class="card-body">
                <!-- PERA -->
                <div class="form-group">
                    <label>PERA</label>
                    <input type="number" value="{{$casualEmployee->emp_pera}}" onblur="getTotal();" class="form-control input-filled" name="emp_pera" placeholder="{{$casualEmployee->emp_pera}}">
                </div>
                <!-- PERA -->

                <!-- MIDYEAR AND YEAREND BONUS -->
                <div class="form-group">
                    <label>MIDYEAR AND YEAREND BONUS</label>
                    <input type="number" value="{{$casualEmployee->emp_midEndBonus}}" onblur="getTotal();" class="form-control input-filled" name="emp_midEndBonus" placeholder="{{$casualEmployee->emp_midEndBonus}}">
                </div>
                <!-- MIDYEAR AND YEAREND BONUS -->

                <!-- CLOTHING ALLOWANCE -->
                <div class="form-group">
                    <label>Clothing Allowance</label>
                    <input type="number" value="{{$casualEmployee->emp_uniAllow}}" onblur="getTotal();" class="form-control input-filled" name="emp_uniAllow" placeholder="{{$casualEmployee->emp_uniAllow}}">
                </div>
                <!-- CLOTHING ALLOWANCE -->

            <!-- Cellphone Allowance -->
            <div class="form-group">
                <label>Cellphone Allowance</label>
                <input type="number" value="{{$casualEmployee->emp_cellAllow}}" onblur="getTotal();" class="form-control input-filled" name="emp_cellAllow" placeholder="{{$casualEmployee->emp_cellAllow}}">
            </div>
            <!-- Cellphone Allowance -->

            <!-- Cash Gift -->
            <div class="form-group">
                <label>Cash Gift</label>
                <input type="number" value="{{$casualEmployee->emp_cashGift}}" onblur="getTotal();" class="form-control input-filled" name="emp_cashGift" placeholder="{{$casualEmployee->emp_cashGift}}">
            </div>
            <!-- Cash Gift -->
        </div>
    </div>
</div>
    <!-- INCENTIVES AND BENEFITS -->
    <div class="col-md-6" id="iab">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">INCENTIVES AND BENEFITS</h3>
          </div>
          <div class="card-body">
                <!-- Anniversary Bonus -->
                <div class="form-group">
                    <label>Anniversary Bonus</label>
                    <input type="number" value="{{$casualEmployee->emp_annivBonus}}" onblur="getTotal();" class="form-control input-filled" name="emp_annivBonus" placeholder="{{$casualEmployee->emp_annivBonus}}">
                </div>
                <!-- Anniversary Bonus -->

                <!-- PEI -->
                <div class="form-group">
                    <label>PEI</label>
                    <input type="number" value="{{$casualEmployee->emp_pei}}" onblur="getTotal();" class="form-control input-filled" name="emp_pei" placeholder="{{$casualEmployee->emp_pei}}">
                </div>
                <!-- PEI -->
        </div>
    </div>
     <!-- INCENTIVES AND BENEFITS -->
</div>

   <!-- FIXED EXPENDITURE -->
<div class="row" >
    <div class="col-md-6" id="fe" >
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">FIXED EXPENDITURE</h3>
          </div>
          <div class="card-body">
                <!-- ECCC -->
                <div class="form-group">
                    <label>ECC</label>
                    <input type="number" value="{{$casualEmployee->emp_medical}}" onblur="getTotal();" class="form-control input-filled" name="emp_ecc" placeholder="ecc">
                </div>
                <!-- ECC -->

                <!-- PAGIBIG -->
                <div class="form-group">
                    <label>PAGIBIG</label>
                    <input type="number" value="{{$casualEmployee->emp_pagibig}}" onblur="getTotal();" class="form-control input-filled" name="emp_pagibig" placeholder="{{$casualEmployee->emp_pagibig}}">
                </div>
                <!-- PAGIBIG -->

                <!-- PHIC -->
                <div class="form-group">
                    <label>PHIC</label>
                    <input type="number" value="{{$casualEmployee->emp_phic}}" onblur="getTotal();" class="form-control input-filled" name="emp_phic" placeholder="{{$casualEmployee->emp_phic}}">
                </div>
                <!-- PHIC -->

                <!-- GSIS -->
                <div class="form-group">
                    <label>GSIS</label>
                    <input type="number" value="{{$casualEmployee->emp_gsis}}" onblur="getTotal();" class="form-control input-filled" name="emp_gsis" placeholder="{{$casualEmployee->emp_gsis}}">
                </div>
                <!-- GSIS -->
        </div>
    </div>
</div>
    <!-- REMARKS -->
    <div class="col-md-6">
        <div class="card card-primary" id="remarks">
          <div class="card-header">
            <h3 class="card-title">Remarks</h3>
          </div>
          <div class="card-body">

               <!-- Remarks -->
               <div class="form-group">
                <label>Remarks</label>
                <input type="text" class="form-control" value="{{$casualEmployee->emp_remarks}}" name="emp_remarks" placeholder="Remarks">
            </div>
            <!-- Remarks -->
             <!-- Total -->
             <div class="form-group">
                <label>Total</label>
                <input type="number" class="form-control" name="emp_total" value="{{$casualEmployee->emp_total}}" id="total" placeholder="0" readonly>
            </div>
            <!-- Total -->

            </div>
        </div>
    <!-- REMARKS -->
<div class="row">
    <div class="col-md-12">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary swalDefaultSuccess">Update</button>
        </div>
    </div>
</div>

</form>


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Collapse method -->
<script>
    $('#emp_type').change(function(){
       var selected_item = $(this).val();
       if (selected_item == "SEPARATED") {
           $('#pt').hide("fast");
           $('#sg').hide("fast");
           $('#age').hide("fast");
           $('#dob').hide("fast");
           $('#doa').hide("fast");
           $('#eae').hide("fast");
           $('#salary').hide("fast");
           $('#remarks').hide("fast");
           $('#spa').hide("fast");
           $('#sa').hide("fast");
           $('#fe').hide("fast");
           $('#iab').hide("fast");
           $('#soa').show("fast");
           $('#dos').show("fast");
           $('#mos').show("fast");

       }else {
           $('#sg').show("fast");
           $('#pt').show("fast");
           $('#age').show("fast");
           $('#dob').show("fast");
           $('#doa').show("fast");
           $('#eae').show("fast");
           $('#salary').show("fast");
           $('#remarks').show("fast");
           $('#spa').show("fast");
           $('#sa').show("fast");
           $('#fe').show("fast");
           $('#iab').show("fast");
           $('#soa').hide("fast");
           $('#dos').hide("fast");
           $('#mos').hide("fast");
       }
   });
</script>
<!-- Collapse method -->

<script>
    //Auto Calculation of Annual Salary
        function calculateAmount(val) {
            var total = val * 12;
            var result = document.getElementById('emp_annual');
            result.value =total;
        }
        function getTotal(){
            var arr = document.querySelectorAll('.input-filled');
            var total = 0;
            for(var i = 0; i < arr.length; i++){
                if(parseInt(arr[i].value)){
                    total += parseInt(arr[i].value);
                }
            }
            document.getElementById('total').value = total;
        }
</script>
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
@endsection

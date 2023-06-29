@extends('admin.master')

@section('content')

<div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><strong>JO/COS Employee</strong></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('joEmployees.index')}}">JO/COS</a></li>
              <li class="breadcrumb-item active">JO/COS Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class ="card">
    <form action="{{ route('casualEmployees.create') }}" method="get" name="formWithAutoCal">
    @csrf
<!-- general form elements -->
<!-- /.card-header -->

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select1" name="emp_type" id="emp_type" required>
                        <option value="CASUAL">CASUAL EMPLOYEE</option>
                        <option value="PERMANENT">PERMANENT/CO-TERMINUS EMPLOYEE</option>
                        <option value="JO" selected="selected">JO/COS EMPLOYEE</option>
                    </select>
                </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary swalDefaultSuccess">Change Employee Type</button>
                    </div>
                </div>
            </div>
        </form>
</div>

<div class="card col-lg-12">
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
@if($message = Session::get('success'))
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

<form action="{{ route('joEmployees.store') }}" method="POST" name="formWithAutoCal">
    @csrf
<!-- general form elements -->
<!-- /.card-header -->
<br>
<br>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New JO/COS Employee</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select1" name="emp_type" id="emp_type" required>
                        <option value="JO">JOB ORDER</option>
                        <option value="COS">COS</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>First name of Appointee</label>
                    <input type="text" name="emp_fName" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label>Middle name of Appointee</label>
                    <input type="text" name="emp_mName" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label>Last name of Appointee</label>
                    <input type="text" name="emp_lName" class="form-control" placeholder="Name" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Position Title</label>
                    <select class="form-control select2" name="emp_title" id="emp_title" required>
                    <option value="" disabled selected hidden>Select Position Title</option>
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
                <div class="form-group">
                    <label>Date of Birth</label>
                          <input type="date" class="form-control" name="emp_dateOfBirth" required/>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                <label>Salary Grade:</label>
                <select class="form-control select2" name="emp_sg" id="emp_sg" required>
                    <option value="" disabled selected hidden>Select Salary Grade</option>
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
                    <label>IMO</label>
                    <input readonly type="text" class="form-control" name="emp_imo" value="Bukidnon IMO" >
                </div>

                <div class="form-group">
                    <label>Status of Employment</label>
                    <select class="form-control select2" name="emp_status" id="emp_status" style="width: 100%;" required>
                        <option value="" disabled selected hidden>Select Status of Employment</option>
                        <option value="JO">JO</option>
                        <option value="COS">COS</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Charging</label>
                    <select class="form-control select2" name="emp_charging" id="emp_charging" required>
                        <option value="" disabled selected hidden>Select Charging Status</option>
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
                    </div>
                </div>
                <!-- /.form-group -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->
<!--DATES -->
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Date of Assumption to Duty</h3>
              </div>
              <div class="card-body">
                <!-- Date -->
                <div class="form-group">
                    <label>Date of Assumption to Duty</label>
                          <input type="date" class="form-control" name="emp_dateOfAssumption" required/>
                </div>
                <!-- Date -->
            </div>
        </div>
    </div>
<!--Attainment & Eligibility-->
        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Educational Attainment & Eligibility</h3>
              </div>
              <div class="card-body">
                <!--Attainment & Eligibility-->
                <div class="form-group">
                    <label>Highest Educational Attainement</label>
                    <input type="text" class="form-control" name="emp_attainment" placeholder="Highest Educational Attainment" required>
                </div>
                <!--Attainment & Eligibility-->
                <!--Attainment & Eligibility-->
                <div class="form-group">
                    <label>Eligibility</label>
                    <input type="text" class="form-control" name="emp_eligible" placeholder="Eligibility" required>
                </div>
                <!--Attainment & Eligibility-->
            </div>
        </div>
        </div>
    </div>
<!--SALARY -->
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Salary</h3>
          </div>
          <div class="card-body">
            <!-- Monthly Salary -->
            <div class="form-group">
                <label>Monthly Salary</label>
                <input type="number" class="form-control" onchange="calculateAmount(this.value);" step=".01" name="emp_monthly" placeholder="Monthly Salary" required>
            </div>
            <!-- Monthly Salary -->
            <!-- Annual Salary -->
            <div class="form-group">
                <label>Annual Salary</label>
                <input type="number" class="form-control input-filled" onblur="getTotal();" step=".01" id="emp_annual" name="emp_annual" placeholder="Annual Salary" required>
            </div>
            <!-- Annual Salary -->
        </div>
    </div>

</div>
    <!-- REMARKS -->
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Remarks</h3>
          </div>
          <div class="card-body">

                 <!-- Remarks -->
                 <div class="form-group">
                    <label>Remarks</label>
                    <input type="text" class="form-control" name="emp_remarks" placeholder="Remarks">
                </div>
                <!-- Remarks -->
                 <!-- Total -->
                 <div class="form-group">
                    <label>Total</label>
                    <input type="number" class="form-control" name="emp_total" step=".01" id="total" placeholder="0" readonly>
                </div>
                <!-- Total -->
            </div>
        </div>
    <!-- REMARKS -->
<div class="row">
    <div class="col-md-12">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
        </div>
    </div>
</div>

</form>

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
                if(parseFloat(arr[i].value)){
                    total += parseFloat(arr[i].value);
                }
            }
            document.getElementById('total').value = total.toFixed(2);
        }
</script>

@endsection

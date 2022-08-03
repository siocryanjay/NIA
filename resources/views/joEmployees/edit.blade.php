@extends('admin.master')

@section('content')
<style>
</style>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update JO/COS Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">JO/COS</a></li>
              <li class="breadcrumb-item active">Update JO/COS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card col-lg-12">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('joEmployees.index') }}"> Back</a>
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

    <form action="{{ route('joEmployees.update',$joEmployee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- general form elements -->
<!-- /.card-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Update {{{$joEmployee->emp_name}}}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select1" name="emp_type" id="emp_type">
                        <option value="{{ $joEmployee->emp_type}}" selected="selected">{{ $joEmployee->emp_type}}</option>
                        <option value="COS">COS</option>
                        <option value="JO">COS</option>
                        <option value="CASUAL">CASUAL</option>
                        <option value="SEPARATED">SEPARATED</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                <label>Name of Appointee</label>
                <input type="text" name="emp_name" value="{{$joEmployee->emp_name}}" class="form-control" placeholder="{{$joEmployee->emp_name}}">
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                <div class="form-group " id="soa">
                    <label>Status of Appointment</label>
                    <input type="text" name="emp_statOfAppoint" id="emp_statOfAppoint" value="{{ $joEmployee->emp_type}}" class="form-control" placeholder="{{$joEmployee->emp_type}}" readonly>
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
                <div class="form-group show" id="pt">
                    <label>Position Title</label>
                    <select class="form-control select2" name="emp_title" id="emp_title">
                    <option value="{{$joEmployee->emp_title}}" selected="selected">{{$joEmployee->emp_title}}</option>
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
                    <input type="number" value="{{$joEmployee->emp_age}}" class="form-control" name="emp_age" id="emp_age" placeholder="{{$joEmployee->emp_age}}">
                </div>
                <!-- /.form-group -->
                <div class="form-group" id="dob">
                    <label>Date of Birth</label>
                          <input type="date" value="{{$joEmployee->emp_dateOfBirth}}" class="form-control" name="emp_dateOfBirth" id="emp_dateOfBirth" placeholder="{{$joEmployee->emp_dateOfBirth}}">
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6 " id="sg">
                <div class="form-group">
                <label>Salary Grade:</label>
                <select class="form-control select2" name="emp_sg" id="emp_sg">
                    <option selected="selected" value="{{$joEmployee->emp_sg}}">{{$joEmployee->emp_sg}}</option>
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
                <div class="form-group " id="tbd">
                    <label>Division</label>
                    <input type="text" value="{{$joEmployee->emp_division}}" class="form-control" name="emp_division" id="emp_division" placeholder="{{$joEmployee->emp_division}}">
                </div>
                <!-- /.form-group -->
                <div class="form-group " id="tbd">
                    <label>IMO</label>
                    <input type="text" value="{{$joEmployee->emp_imo}}" class="form-control" name="emp_imo" id="emp_imo" placeholder="{{$joEmployee->emp_division}}">
                </div>
                <div class="form-group " id="tbd">
                    <label>Status of Employment</label>
                    <select class="form-control select2" name="emp_status" id="emp_status">
                        <option selected="selected" value="{{$joEmployee->emp_status}}">{{$joEmployee->emp_division}}</option>
                        <option value="JO">JO</option>
                        <option value="COS">COS</option>
                    </select>
                </div>

                <div class="form-group " id="tbd">
                    <label>Charging</label>
                    <select class="form-control select2" name="emp_charging" id="emp_charging">
                        <option selected="selected" value="{{$joEmployee->emp_charging}}">{{$joEmployee->emp_division}}</option>
                        <option value="INDIRECT">INDIRECT</option>
                        <option value="DIRECT">DIRECT</option>
                        <option value="MOOE">MOOE</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group " id="tbd">
                    <label>Sex</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="F" name="emp_sex" value="F">
                        <label for="F" class="form-check-label">Female</label>
                        <br>
                        <input class="form-check-input" type="radio" id="M" name="emp_sex" value="M">
                        <label for="M" class="form-check-label">Male</label>
                        <input type="radio" style="display: none;" name="emp_sex" value="{{$joEmployee->emp_sex}}" checked="checked">
                    </div>
                </div>
                <!-- /.form-group -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->
<!--DATES -->
    <div class="row " id="doatd">
        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Date of Assumption to Duty</h3>
              </div>
              <div class="card-body">
                <!-- Date -->
                <div class="form-group">
                    <label>Date of Assumption to Duty</label>
                          <input type="date" value="{{$joEmployee->emp_dateOfAssumption}}" class="form-control" name="emp_dateOfAssumption" id="emp_dateOfAssumption" placeholder="{{$joEmployee->emp_dateOfAssumption}}">
                </div>
                <!-- Date -->
            </div>
        </div>
    </div>
<!--Attainment & Eligibility-->
        <div class="col-md-6 " id="eae">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Educational Attainment & Eligibility</h3>
              </div>
              <div class="card-body">
                <!--Attainment & Eligibility-->
                <div class="form-group">
                    <label>Highest Educational Attainement</label>
                    <input type="text" value="{{$joEmployee->emp_attainment}}" class="form-control" name="emp_attainment" id="emp_attainment" placeholder="{{$joEmployee->emp_attainment}}">
                </div>
                <!--Attainment & Eligibility-->
                <!--Attainment & Eligibility-->
                <div class="form-group">
                    <label>Eligibility</label>
                    <input type="text" value="{{$joEmployee->emp_eligible}}" class="form-control" name="emp_eligible" id="emp_eligible"  placeholder="{{$joEmployee->emp_eligible}}">
                </div>
                <!--Attainment & Eligibility-->
            </div>
        </div>
        </div>
    </div>
<!--SALARY -->
<div class="row ">
    <div class="col-md-6" id="salary">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Salary</h3>
          </div>
          <div class="card-body">
            <!-- Monthly Salary -->
            <div class="form-group">
                <label>Monthly Salary</label>
                <input type="number" value="{{$joEmployee->emp_monthly}}" class="form-control" onchange="calculateAmount(this.value);" name="emp_monthly" id="emp_monthly" placeholder="{{$joEmployee->emp_monthly}}">
            </div>
            <!-- Monthly Salary -->
            <!-- Annual Salary -->
            <div class="form-group">
                <label>Annual Salary</label>
                <input type="number" value="{{$joEmployee->emp_annual}}" class="form-control input-filled" onblur="getTotal();" id="emp_annual" name="emp_annual" placeholder="{{$joEmployee->emp_annual}}">
            </div>
            <!-- Annual Salary -->
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
                <input type="text" class="form-control" value="{{$joEmployee->emp_remarks}}" name="emp_remarks" id="emp_remarks" placeholder="Remarks">
            </div>
            <!-- Remarks -->
             <!-- Total -->
            <div class="form-group">
                <label>Total</label>
                <input type="number" class="form-control input-filled" name="emp_total" value="{{$joEmployee->emp_total}}" id="total" placeholder="0" readonly>
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


<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js')}}"></script>


<!-- Collapse method -->
<script>
     $('#emp_type').change(function(){
        var selected_item = $(this).val();
        if (selected_item == "SEPARATED") {
            $('#pt').hide("fast");
            $('#sg').hide("fast");
            $('#age').hide("fast");
            $('#dob').hide("fast");
            $('#doatd').hide("fast");
            $('#eae').hide("fast");
            $('#salary').hide("fast");
            $('#remarks').hide("fast");
            $('#soa').show("fast");
            $('#dos').show("fast");
            $('#mos').show("fast");

        }else {
            $('#sg').show("fast");
            $('#pt').show("fast");
            $('#age').show("fast");
            $('#dob').show("fast");
            $('#doatd').show("fast");
            $('#eae').show("fast");
            $('#salary').show("fast");
            $('#remarks').show("fast");
            $('#soa').hide("fast");
            $('#dos').hide("fast");
            $('#mos').hide("fast");
        }
    });
</script>
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

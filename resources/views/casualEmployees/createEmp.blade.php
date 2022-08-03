@extends('admin.master')

@section('content')
<script>
    //Auto Calculation of Annual Salary
        function calculateAmount(val) {
                    var total = val * 12;
                    var result = document.getElementById('emp_annual');
                    result.value =total;
                }
</script>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><strong>Add Employee</strong></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('casualEmployees.index')}}">Employee</a></li>
              <li class="breadcrumb-item active">Add Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="card col-lg-12">


<form action="{{ route('casualEmployees.create') }}" method="get" name="formWithAutoCal">
    @csrf
<!-- general form elements -->
<!-- /.card-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Employee Type</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select1" name="emp_type" id="emp_type" required>
                        <option value="CASUAL" selected="selected">CASUAL EMPLOYEE</option>
                        <option value="PERMANENT">PERMANENT/CO-TERMINUS EMPLOYEE</option>
                        <option value="JO">JO/COS EMPLOYEE</option>
                    </select>
                </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
                    </div>
                </div>
            </div>
</form>


<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
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
<script>
    $('.alert').alert();
</script>
@endsection

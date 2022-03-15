@extends('permanent.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Permanent Employoee</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('permanent.index') }}">Back</a>
        </div>
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

<form action="{{ route('permanent.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name of Appointee:</strong>
                <input type="text" name="perEmp_name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Position Title:</strong>
                <input type="text" name="perEmp_title" class="form-control" placeholder="Position Title">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Salary Grade:</strong>
                <select name="perEmp_sg" id="perEmp_sg" required>
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
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Step:</strong>
                <select name="perEmp_step" id="perEmp_step" required>
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
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Item no.:</strong>
                <input type="text" class="form-control" name="perEmp_itemNo" placeholder="Item Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Division:</strong>
                <input type="text" class="form-control"  name="perEmp_division" placeholder="Division">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IMO:</strong>
                <input type="text" class="form-control"  name="perEmp_imo" placeholder="IMO">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Monthly Salary:</strong>
                <input type="number" class="form-control"  name="perEmp_monthly" placeholder="Monthly Salary">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Annual Salary:</strong>
                <input type="number" class="form-control"  name="perEmp_annual" placeholder="Annula Salary">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Birth:</strong>
                <input type="date" class="form-control"  name="perEmp_dateOfBirth" placeholder="Position Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Age:</strong>
                <input type="number" class="form-control"  name="perEmp_age" placeholder="Age">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sex:</strong><br>
                <input type="radio" id="F" name="perEmp_sex" value="F">
                <label for="F">Female</label><br>
                <input type="radio"  id="M" name="perEmp_sex" value="M">
                <label for="M">Male</label><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Application:</strong>
                <input type="date" class="form-control"  name="perEmp_dateOfApp" placeholder="Date of Application">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Last Promotion:</strong>
                <input type="date" class="form-control"  name="perEmp_dateOfLastProm" placeholder="Date of Last Promotion">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Highest Educational Attainement:</strong>
                <input type="text" class="form-control" name="perEmp_attainment" placeholder="Highest Educational Attainment">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Eligibility:</strong>
                <input type="text" class="form-control" name="perEmp_eligible" placeholder="Eligibility">
            </div>
        </div>
        <br>
        <h4 class="text-center">------------------------------Standard Allowances------------------------------</h4>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PERA:</strong>
                <input type="number" class="form-control" name="perEmp_pera" placeholder="PERA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MIDYEAR AND YEAREND BONUS:</strong>
                <input type="number" class="form-control" name="perEmp_midEndBonus" placeholder="MIDYEAR AND YEAREND BONUS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Clothing Allowance:</strong>
                <input type="number" class="form-control" name="perEmp_uniAllow" placeholder="Clothing Allowance">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cellphone Allowance:</strong>
                <input type="number" class="form-control" name="perEmp_cellAllow" placeholder="Cellphone Allowance">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cash Gift:</strong>
                <input type="number" class="form-control" name="perEmp_cashGift" placeholder="Cash Gift">
            </div>
        </div>
        <br>
        <h4 class="text-center">------------------------------SPECIFIC PURPOSE ALLOWANCE------------------------------</h4>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RATA:</strong>
                <input type="number" class="form-control" name="perEmp_rata" placeholder="RATA">
            </div>
        </div>
        <br>
        <h4 class="text-center">------------------------------INCENTIVES AND BENEFITS------------------------------</h4>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anniversary Bonus:</strong>
                <input type="number" class="form-control" name="perEmp_annivBonus" placeholder="RATA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No. of Dependent:</strong>
                <input type="number" class="form-control" name="perEmp_noOfDependent" placeholder="No. of Dependent">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Children Allowance:</strong>
                <input type="number" class="form-control" name="perEmp_childrenAllow" placeholder="Children Allowance">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Meal Subsidy:</strong>
                <input type="number" class="form-control" name="perEmp_mealSubsi" placeholder="Meal Subsidy">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Medical:</strong>
                <input type="number" class="form-control" name="perEmp_medical" placeholder="Medical">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PEI:</strong>
                <input type="number" class="form-control" name="perEmp_pei" placeholder="PEI">
            </div>
        </div>
        <br>
        <h4 class="text-center">------------------------------FIXED EXPENDITURE------------------------------</h4>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ECC:</strong>
                <input type="number" class="form-control" name="perEmp_ecc" placeholder="ecc">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PAGIBIG:</strong>
                <input type="number" class="form-control" name="perEmp_pagibig" placeholder="PAGIBIG">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PHIC:</strong>
                <input type="number" class="form-control" name="perEmp_phic" placeholder="PHIC">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>GSIS:</strong>
                <input type="number" class="form-control" name="perEmp_gsis" placeholder="GSIS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Remarks:</strong>
                <input type="text" class="form-control" name="perEmp_remarks" placeholder="Remarks">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection

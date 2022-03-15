@extends('permanent.layout')

@section('content')
<div class="pull-left">
        <h2>Permanent Employee Database</h2>
</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">

        </div>
        <div class="pull-right">
            <a href="{{ route('permanentEmployees.create') }}" class="btn btn-success">Create new employee</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-boardered" id="table_perEmp">
            <thead>
                <tr>
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
                </tr>
            </thead>
            <tbody>
                @foreach ($permanentEmployees as $permanentEmployee)
                <tr>
                    <td>{{ $permanentEmployee->perEmp_id}}</td>
                    <td>{{ $permanentEmployee->perEmp_name}}</td>
                    <td>{{ $permanentEmployee->permEmp_title }}</td>
                    <td>{{ $permanentEmployee->permEmp_sg }}</td>
                    <td>{{ $permanentEmployee->permEmp_step }}</td>
                    <td>{{ $permanentEmployee->permEmp_itemNo }}</td>
                    <td>{{ $permanentEmployee->permEmp_division }}</td>
                    <td>{{ $permanentEmployee->permEmp_imo }}</td>
                    <td>{{ $permanentEmployee->permEmp_monthly }}</td>
                    <td>{{ $permanentEmployee->permEmp_annual }}</td>
                    <td>{{ $permanentEmployee->permEmp_dateOfbirth }}</td>
                    <td>{{ $permanentEmployee->permEmp_age }}</td>
                    <td>{{ $permanentEmployee->permEmp_sex }}</td>
                    <td>{{ $permanentEmployee->permEmp_dateOfApp }}</td>
                    <td>{{ $permanentEmployee->permEmp_dateOfLastProm }}</td>
                    <td>{{ $permanentEmployee->permEmp_attainement}}</td>
                    <td>{{ $permanentEmployee->permEmp_eligible }}</td>
                    <td>{{ $permanentEmployee->permEmp_pera }}</td>
                    <td>{{ $permanentEmployee->permEmp_midEndBonus }}</td>
                    <td>{{ $permanentEmployee->permEmp_uniAllow }}</td>
                    <td>{{ $permanentEmployee->permEmp_cellAllow }}</td>
                    <td>{{ $permanentEmployee->permEmp_cashGift }}</td>
                    <td>{{ $permanentEmployee->permEmp_rata }}</td>
                    <td>{{ $permanentEmployee->permEmp_annivBonus }}</td>
                    <td>{{ $permanentEmployee->permEmp_noOfDependent }}</td>
                    <td>{{ $permanentEmployee->permEmp_childrenAllow }}</td>
                    <td>{{ $permanentEmployee->permEmp_mealSubsi }}</td>
                    <td>{{ $permanentEmployee->permEmp_medical }}</td>
                    <td>{{ $permanentEmployee->permEmp_pei }}</td>
                    <td>{{ $permanentEmployee->permEmp_ecc }}</td>
                    <td>{{ $permanentEmployee->permEmp_pagibig }}</td>
                    <td>{{ $permanentEmployee->permEmp_phic }}</td>
                    <td>{{ $permanentEmployee->permEmp_gsis }}</td>
                    <td>{{ $permanentEmployee->permEmp_total }}</td>
                    <td>{{ $permanentEmployee->permEmp_remarks }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#table_perEmp').DataTable();
    } );
</script>


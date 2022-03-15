<?php

namespace App\Http\Controllers;

use App\Models\PermanentEmployee;
use Illuminate\Http\Request;

class PermanentEmployeeController extends Controller
{

    public function index()
    {
        $permanentEmployees = PermanentEmployee::latest()->paginate(5);
        return view('permanentEmployees.index', compact('permanentEmployees'));
    }

    public function create()
    {
        return view('permanentEmployees.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'perEmp_name' => 'required',
            'perEmp_title' => 'required',
            'perEmp_sg' => 'required',
            'perEmp_step' => 'required',
            'perEmp_itemNo' => 'required',
            'perEmp_division' => 'required',
            'perEmp_imo' => 'required',
            'perEmp_monthly' => 'required',
            'perEmp_annual' => 'required',
            'perEmp_dateOfBirth' => 'required',
            'perEmp_age' => 'required',
            'perEmp_sex' => 'required',
            'perEmp_dateOfApp' => 'required',
            'perEmp_dateOfLastProm' => '',
            'perEmp_attainment' => 'required',
            'perEmp_eligible' => 'required',
            'perEmp_pera' => 'required',
            'perEmp_midEndBonus' => 'required',
            'perEmp_uniAllow' => 'required',
            'perEmp_cellAllow' => '',
            'perEmp_cashGift' => 'required',
            'perEmp_rata' => '',
            'perEmp_annivBonus' => '',
            'perEmp_noOfDependent' => '',
            'perEmp_childrenAllow' => '',
            'perEmp_mealSubsi' => '',
            'perEmp_medical' => '',
            'perEmp_pei' => 'required',
            'perEmp_ecc' => 'required',
            'perEmp_pagibig' => 'required',
            'perEmp_phic' => 'required',
            'perEmp_gsis' => 'required',
            'perEmp_total' => '',
            'perEmp_remarks' => '',
        ]);
        PermanentEmployee::create($request->all());
        return redirect()->route('permanent.index')
                        ->with('success','Employee added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermanentEmployee  $permanentEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(PermanentEmployee $permanentEmployee)
    {
        return view('permanent.show',compact('permanentEmployees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermanentEmployee  $permanentEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit(PermanentEmployee $permanentEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermanentEmployee  $permanentEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermanentEmployee $permanentEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermanentEmployee  $permanentEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermanentEmployee $permanentEmployee)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class CasualEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $casualEmployees = Employee::oldest()
        ->where('emp_type', '=', 'CASUAL')
        ->get();
        return view('casualEmployees.index', compact('casualEmployees'));
    }


    public function create(Request $request)
    {
        $empType = $request->emp_type;

        if($empType == "JO"){
            return view('joEmployees.create');
        }
        elseif($empType == "PERMANENT"){
            return view('permanentEmployees.create');
        }
        elseif($empType == "CASUAL"){
            return view('casualEmployees.create');
        }

    }


    public function empType()
    {

        return view('casualEmployees.createEmp');
    }

    public function store(Request $request)
    {
        Employee::create($request->all());
        return redirect()->route('casualEmployees.index')
                        ->with('success','Employee added successfully.');
    }



    public function show(Employee $casualEmployee)
    {
        return view('casualEmployees.show',compact('casualEmployees'));
    }



    public function edit(Employee $casualEmployee)
    {
        return view('casualEmployees.edit',compact('casualEmployee',));
    }



    public function update(Request $request, Employee $casualEmployee)
    {
        $casualEmployee->update($request->all());
        return redirect()->route('casualEmployees.index')
                        ->with('success','Employee updated successfully');
    }



    public function destroy(Employee $casualEmployee)
    {

        $casualEmployee->delete();
        return redirect()->back()
                        ->with('success','Employee deleted successfully');
    }
}

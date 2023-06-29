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
<<<<<<< HEAD
        return view('casualEmployees.index', compact('casualEmployees'));
=======
        return view('empView.allEmp', compact('casualEmployees'));
>>>>>>> b73cde7795f3d65e5e8b47b019813dce2fda5864
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
<<<<<<< HEAD
        return redirect()->route('casualEmployees.index')
=======
        return redirect()->route('empView.index')
>>>>>>> b73cde7795f3d65e5e8b47b019813dce2fda5864
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

<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class PermanentEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$permanentEmployees = Employee::latest()->paginate(5);
        $permanentEmployees = Employee::oldest()
                    ->where('emp_type', '=', 'PERMANENT')
                    ->get();
        // $permanentEmployees = PermanentEmployee::all();
        // dd($permanentEmployees);
        return view('permanentEmployees.index', compact('permanentEmployees'));

    }


    public function create()
    {
        return view('permanentEmployees.create');
    }


    public function store(Request $request)
    {
<<<<<<< HEAD
        dd($request->all());
        $permanent = Employee::where('emp_fName', $request->emp_fName)
                    ->where('emp_lName', $request->emp_lName)->exists();
=======
        $permanent = Employee::where('emp_name', $request->emp_name)->exists();
>>>>>>> b73cde7795f3d65e5e8b47b019813dce2fda5864

        if($permanent){
          return redirect()->route('permanent.create')->with('errmessage','Employee already exist!');
        }else{
            Employee::create($request->all());
<<<<<<< HEAD
            return redirect()->route('empView.allEmp')
=======
            return redirect()->route('empView.index')
>>>>>>> b73cde7795f3d65e5e8b47b019813dce2fda5864
                            ->with('success','Employee added successfully');
        }

    }

    public function show(Employee $permanentEmployee)
    {
        return view('permanent.show',compact('permanentEmployees'));
    }


    public function edit(Employee $permanentEmployee)
    {
        return view('permanentEmployees.edit',compact('permanentEmployee',));
    }


    public function update(Request $request, Employee $permanentEmployee)
    {
        $permanentEmployee->update($request->all());
        return redirect()->route('permanentEmployees.index')
                        ->with('success','Employee updated successfully');
    }


    public function destroy(Employee $permanentEmployee)
    {

        $permanentEmployee->delete();
        return redirect()->back()
                        ->with('success','Employee deleted successfully');
    }
}

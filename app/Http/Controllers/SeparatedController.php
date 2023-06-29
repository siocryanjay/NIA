<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class SeparatedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $separatedEmployees = Employee::oldest()
        ->where('emp_type', '=', 'SEPARATED')
        ->get();

        return view('separatedEmployees.index', compact('separatedEmployees'));
    }


    public function create()
    {
        return view('separatedEmployees.index');
    }


    public function store(Request $request)
    {
        Employee::create($request->all());
<<<<<<< HEAD
        return redirect()->route('separatedEmployees.index')
=======
        return redirect()->route('empView.index')
>>>>>>> b73cde7795f3d65e5e8b47b019813dce2fda5864
            ->with('success', 'Employee successfully added');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Employee $separatedEmployee)
    {
        $separatedEmployee->delete();
        return redirect()->back()
                        ->with('success','Employee deleted successfully');
    }
}

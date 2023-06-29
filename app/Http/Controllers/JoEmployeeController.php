<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class JoEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $joEmployees = Employee::oldest()
            ->where('emp_type', '=', 'JO')
            ->orWhere('emp_type', '=', 'COS')
            ->get();

        return view('empView.allEmp', compact('joEmployees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('joEmployees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jo =  Employee::where('emp_fName', $request->emp_fName)
        ->where('emp_lName', $request->emp_lName)->exists();

        if($jo){
          return redirect()->route('joEmployees.create')->withErrors('Employee already exist!');
        }else{
            Employee::create($request->all());
            return redirect()->route('empView.allEmp')
                            ->with('success', 'Employee successfully added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $joEmployee)
    {
        return view('joEmployees.show',compact('joEmployees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $joEmployee)
    {
        return view('joEmployees.edit',compact('joEmployee',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $joEmployee)
    {
        $joEmployee->update($request->all());
        return redirect()->route('joEmployees.index')
                        ->with('success','Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $joEmployee)
    {
        $joEmployee->delete();
        return redirect()->back()
                        ->with('success','Employee deleted successfully');
    }
}

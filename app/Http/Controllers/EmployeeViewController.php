<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $permanentEmployees = Employee::oldest()
        ->where('emp_type', '=', 'PERMANENT')
        ->orWhere('emp_type', '=', 'CO-TERMINUS')
        ->get();

        $joEmployees = Employee::oldest()
        ->where('emp_type', '=', 'JO')
        ->orWhere('emp_type', '=', 'COS')
        ->get();

        $casualEmployees = Employee::oldest()
        ->where('emp_type', '=', 'CASUAL')
        ->get();

        $separatedEmployees = Employee::oldest()
        ->where('emp_type', '=', 'SEPARATED')
        ->get();

        return view('empView.allEmp' ,compact('permanentEmployees', 'joEmployees', 'casualEmployees','separatedEmployees'));

    }
}

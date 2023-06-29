<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countEmployee = DB::table('employees')->count();
        $countPermanent = Employee::where('emp_type', '=', 'PERMANENT')->count();
        $countCasual = Employee::where('emp_type', '=', 'CASUAL')->count();
        $countJOCOS = Employee::where('emp_type', '=', 'JO')->orWhere('emp_type', '=', 'COS')->count();
        $countSeparated = Employee::where('emp_type', '=', 'SEPARATED')->count();
        return view('home' ,compact('countEmployee', 'countPermanent', 'countCasual', 'countJOCOS', 'countSeparated'));
    }
}

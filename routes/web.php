<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/permanentEmployees', 'App\Http\Controllers\PermanentEmployeeController');
Route::resource('/casualEmployees', 'App\Http\Controllers\CasualEmployeeController');
Route::resource('/joEmployees', 'App\Http\Controllers\JoEmployeeController');
Route::resource('/separatedEmployees', 'App\Http\Controllers\SeparatedController');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/employeeType',[App\Http\Controllers\CasualEmployeeController::class, 'empType'])->name('casualEmployees.empType');
Route::get('/empView',[App\Http\Controllers\EmployeeViewController::class, 'index'])->name('empView.allEmp');

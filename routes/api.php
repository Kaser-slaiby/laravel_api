<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/////Get all employees
Route::get('/employees', [EmployeeController::class, 'getEmployee']);
// Route::get('employees', 'EmployeeController@getEmployee');
// Route::get('employees', 'App\Http\Controllers\Api\EmployeeController@getEmployee');
// or
// Route::get('/employees', 'App\Http\Controllers\EmployeeController@getEmployee');
///////////////////

////Get specic Employee detail
Route::get('/employee/{id}', [EmployeeController::class, 'getEmployeeById']);

//////////
////Add Employee
Route::post('addemployee', [EmployeeController::class, 'addemployee']);


////Update Employee
Route::put('updateemployee/{id}', [EmployeeController::class, 'updateemplyee']);

////Deleted Employee
Route::delete('deleteemployee/{id}', [EmployeeController::class, 'deleteemployee']);

/////////
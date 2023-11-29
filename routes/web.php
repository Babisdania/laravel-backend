<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;


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

Route::get('/employeeList', [EmployeeController::class, 'employeeList']);
Route::get('/addemployee', [EmployeeController::class, 'addemployee']);
Route::get('/editemployee/{id}', [EmployeeController::class, 'editemployee']);
Route::post('/submitemployee', [EmployeeController::class, 'submitemployee']);
Route::post('/updateEmployee', [EmployeeController::class, 'updateEmployee']);
Route::get('/deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);
Route::get('/viewEmployee/{id}', [EmployeeController::class, 'viewEmployee']);
Route::post('/goback', [EmployeeController::class, 'goback']);


//admin
Route::get('/adminList', [AdminController::class, 'adminList']);
Route::get('/addadmin', [AdminController::class, 'addadmin']);
Route::post('/updateAdmin', [AdminController::class, 'updateAdmin']);
Route::post('/submitadmin', [AdminController::class, 'submitadmin']);
Route::get('/editadmin/{id}', [AdminController::class, 'editadmin']);

Route::get('/viewAdmin/{id}', [AdminController::class, 'viewAdmin']);
Route::post('/goback', [AdminController::class, 'goback']);
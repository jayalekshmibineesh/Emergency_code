<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[EmployeeController::class,'index'])->name('index');
Route::get('/view',[EmployeeController::class,'view'])->name('view');
Route::get('/edit/{id}',[EmployeeController::class,'edit'])->name('edit');
Route::post('/update/{id}',[EmployeeController::class,'update'])->name('update');
Route::get('/delete/{id}',[EmployeeController::class,'delete'])->name('delete');
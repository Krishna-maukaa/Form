<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EmpController;
Use App\Models\Emp;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[EmpController::class,'home']);
Route::get('/register',[EmpController::class,'show']);
 
Route::post('/register',[EmpController::class,('detail')]);

Route::get('/emp',function(){
    $emp = emp::all();
    echo "<pr>";
    print_r($emp->toArray());
});

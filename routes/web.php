<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EmpController;

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

Route::get('/register',[EmpController::class,'show']);
 
Route::post('/register',[EmpController::class,('detail')]);

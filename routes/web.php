<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginStud;
use App\Http\Controllers\DiagnosisController;
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


Route::get('/',[HomeController::class, 'index'])->name('home.index');

Route::resource('admins', StudentController::class);
Route::resource('diagnosis', DiagnosisController::class);

Route::get('/login_stud', [LoginStud::class,'login_stud'])->name('login_stud');
Route::post('login-stud',[LoginStud::class,'loginStud'])->name('login-stud');
Route::get('/dashboard',[LoginStud::class,'dashboard'])->name('dashboard');

Route::get('/login_admin', [LoginController::class,'login_admin'])->name('login_admin');
Route::post('login-admin',[LoginController::class,'loginAdmin'])->name('login-admin');


Route::get('delete-student/{id}', [StudentController::class, 'destroy']);

Route::get('view-student/{id}', [StudentController::class, 'destroy']);




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index'])->name('index');

Route::post('/createstudent', [StudentController::class, 'create' ])->name('createstudent');
Route::post('/updatestudent', [StudentController::class, 'update' ])->name('updatestudent');
Route::get('/editstudent/{id}', [StudentController::class, 'edit'])->name('editstudent');
Route::get('/deletestudent/{id}', [StudentController::class, 'delete'])->name('deletestudent');
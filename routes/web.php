<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
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

Route::get('/', [StudentsController::class, 'index']);
Route::get("/students", [StudentsController::class, 'create'])->name("student.create");
Route::post("/students", [StudentsController::class, "store"])->name("student.store");
Route::post("/", "StudentController@index")->name("student.index");
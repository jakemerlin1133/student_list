<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [StudentController::class, 'index']);
Route::get('/register', [StudentController::class, 'register']);
Route::post('/register/store', [StudentController::class, 'create']);
Route::post('login/store',[StudentController::class, 'store']);
Route::get('/homepage', [StudentController::class, 'homepage'])->middleware('auth');
Route::post('/logout', [StudentController::class, 'logout']);

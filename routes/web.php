<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoanController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout']);


Route::get('/loan-register', [LoanController::class, 'index']);
Route::post('/loan-register', [LoanController::class, 'store']);
Route::get('/loan-register/verification_payment', [LoanController::class, 'verification_payment']);

Route::get('/followup', [LoanController::class, 'followup_index']);
Route::get('/followup/national-code/{id}', [LoanController::class, 'followup_national']);
Route::get('/followup/tracking-code/{id}', [LoanController::class, 'followup_tracking']);

Route::get('/alarms', [LoanController::class, 'alarms']);
Route::get('/alarms/{id}', [LoanController::class, 'alarms_show']);

Route::get('/contact_us', [HomeController::class, 'contact_us']);




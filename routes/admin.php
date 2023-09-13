<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AlarmsController;
use App\Http\Controllers\Admin\PaysController;
use App\Http\Controllers\Admin\QueueController;
use App\Http\Controllers\Admin\SettingsController;
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

Route::get('/login', [AdminHomeController::class, 'login']);


Route::group(['middleware' => ['admin','auth']], function () {

    Route::get('/', [AdminHomeController::class, 'index']);

    Route::resource('/pricing', SettingsController::class);
    Route::resource('/queue', QueueController::class);

    Route::resource('/alarms',AlarmsController::class);
    Route::get('/alarms/delete/{alarm_id}',[AlarmsController::class,'delete']);

    Route::get('/payed',[PaysController::class,'list_pays_index']);
    Route::get('/not-payed',[PaysController::class,'list_not_pays_index']);

    Route::get('/pay/excel/{choose}',[PaysController::class,'export_excel']);
    Route::get('/pay/{pay}',[PaysController::class,'show']);
    Route::get('/pay-delete/{pay}',[PaysController::class,'delete']);
    Route::get('/set-notpay/{pay}',[PaysController::class,'set_not_pay']);
    Route::get('/set-pay/{pay}',[PaysController::class,'set_pay']);
    Route::get('/pay/{pay}/edit',[PaysController::class,'edit']);

});


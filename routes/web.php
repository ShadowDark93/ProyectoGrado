<?php

use App\Http\Controllers\ConsumptionController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\IntelligenceArtificialReportController;
use App\Models\Consumption;
use App\Models\Device;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('devices', DeviceController::class)->names('devices');

Route::resource('reports', IntelligenceArtificialReportController::class)->names('reports');

Route::resource('consumptions', ConsumptionController::class)->names('consumptions');

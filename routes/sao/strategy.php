<?php

use App\Http\Controllers\SAO\Strategy\VisionMissionController;
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

Route::prefix('sao/strategy')
    ->namespace('App\Http\Controllers\SAO')->group(function () {
        Route::controller(VisionMissionController::class)->group(function () {
            Route::get('vision-mission', 'index')->name('sao.strategy.vision-mission.index');
            Route::get('vision-mission/detail-company', 'detailCompany')->name('sao.strategy.vision-mission.detail-company');
            Route::get('vision-mission/detail-unit', 'detailUnit')->name('sao.strategy.vision-mission.detail-unit');
        });
    });

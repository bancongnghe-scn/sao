<?php

use App\Http\Controllers\SAO\Objectives\SetController;
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
Route::
//middleware('auth')
//    ->
prefix('sao/objectives')
    ->namespace('App\Http\Controllers\SAO')->group(function () {
        Route::controller(SetController::class)->group(function () {
            Route::get('set', 'index')->name('sao.objectives.set.index');
            Route::get('set/detail-company', 'detailCompany')->name('sao.objectives.build.detail-company');
            Route::get('set/detail-unit', 'detailUnit')->name('sao.objectives.build.detail-unit');
//            Route::get('vision-mission/detail-unit', 'detailUnit')->name('sao.strategy.vision-mission.detail-unit');
        });
    });

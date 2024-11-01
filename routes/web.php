<?php

use App\Http\Controllers\AuthController;
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
Route::middleware(['authenSSO'])->group(function () {
    Route::get('authen', function () {});
});

Route::middleware(['checkAuth'])->group(function () {
    //============= code trong nay =============
    Route::view('/', 'home')->name('home');
    

    Route::prefix('rbac')->group(function () {
        Route::view('role/list', 'rbac.role.list');
        Route::view('permission/list', 'rbac.permission.list');
        Route::view('menu/list', 'rbac.menu.list');
    });
});

Route::view('/error', 'error')->name('error');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
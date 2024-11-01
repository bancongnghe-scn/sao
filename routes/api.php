<?php

use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resources([
    'user' => App\Http\Controllers\UserController::class,
]);
Route::middleware(['checkAuth'])->group(function () {
    Route::prefix('rbac')->group(function () {
        Route::prefix('menu')->controller(MenuController::class)->group(function () {
            Route::get('user', 'getMenuUserLogin');
            Route::get('parent', 'getMenuParent');
        });

        Route::resources([
            'role'       => App\Http\Controllers\RoleController::class,
            'permission' => App\Http\Controllers\PermissionController::class,
            'menu'       => MenuController::class,
        ]);
    });
});

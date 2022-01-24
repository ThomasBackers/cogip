<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [AppController::class, 'index'])
    ->middleware(['auth']);

Route::get('/dashboard', [AppController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware(['auth', 'role:admin', 'xsssanitizer'])
    ->group(function () {
        route::get('/users', [UsersController::class, 'index']);

        route::get('/users/{id}', [UsersController::class, 'show']);

        route::put('/users/{id}', [UsersController::class, 'update']);

        route::delete('/users/{id}', [UsersController::class, 'destroy']);

        route::get('/users/{id}/edit', [UsersController::class, 'edit']);
    }
);

require __DIR__.'/auth.php';

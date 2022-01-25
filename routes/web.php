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
        Route::get('/users', [UsersController::class, 'index']);

        Route::get('/users/{id}', [UsersController::class, 'show']);

        Route::put('/users/{id}', [UsersController::class, 'update']);

        Route::delete('/users/{id}', [UsersController::class, 'destroy']);

        Route::get('/users/{id}/edit', [UsersController::class, 'edit']);
    });

Route::middleware(['auth', 'xsssanitizer'])
    ->group(function () {
        Route::get('/companies', [CompaniesController::class, 'index']);

        Route::get('/companies/{id}', [CompaniesController::class, 'show']);

        Route::get('/contacts', [ContactsController::class, 'index']);

        Route::get('/contacts/{id}', [ContactsController::class, 'show']);

        Route::get('/invoices', [InvoicesController::class, 'index']);

        Route::get('/invoices/{id}', [InvoicesController::class, 'show']);
    });

Route::middleware(['auth', 'role:editor', 'xsssanitizer'])
    ->group(function () {
        Route::get('companies/{id}/edit', [CompaniesController::class, 'edit']);

        Route::put('companies/{id}', [CompaniesController::class, 'update']);

        Route::get('contacts/{id}/edit', [ContactsController::class, 'edit']);

        Route::put('contacts/{id}', [ContactsController::class, 'update']);

        Route::get('invoices/{id}/edit', [InvoicesController::class, 'edit']);

        Route::put('invoices/{id}', [InvoicesController::class, 'update']);
    });

require __DIR__.'/auth.php';

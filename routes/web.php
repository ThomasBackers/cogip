<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\InvoicesController;

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

        Route::get('/users/create', [UsersController::class, 'create']);
    });

Route::middleware(['auth', 'xsssanitizer'])
    ->group(function () {
        Route::get('/companies', [CompaniesController::class, 'index']);

        Route::get('/companies/suppliers', [CompaniesController::class, 'suppliers']);

        Route::get('/companies/clients', [CompaniesController::class, 'clients']);

        Route::get('/companies/{id}', [CompaniesController::class, 'show']);

        Route::get('/contacts', [ContactsController::class, 'index']);

        Route::get('/contacts/{id}', [ContactsController::class, 'show']);

        Route::get('/invoices', [InvoicesController::class, 'index']);

        Route::get('/invoices/{id}', [InvoicesController::class, 'show']);
    });

Route::middleware(['auth', 'role:editor', 'xsssanitizer'])
    ->group(function () {
        Route::get('companies/create/form', [CompaniesController::class, 'create']);
        
        Route::get('/companies/{id}/edit', [CompaniesController::class, 'edit']);

        Route::put('/companies/{id}', [CompaniesController::class, 'update']);

        Route::delete('/companies/{id}', [CompaniesController::class, 'delete']);

        Route::get('/contacts/create/form', [ContactsController::class, 'create']);
        
        Route::get('/contacts/{id}/edit', [ContactsController::class, 'edit']);

        Route::put('/contacts/{id}', [ContactsController::class, 'update']);

        Route::delete('/contacts/{id}', [ContactsController::class, 'delete']);

        Route::get('/invoices/create/form', [InvoicesController::class, 'create']);
        
        Route::get('/invoices/{id}/edit', [InvoicesController::class, 'edit']);

        Route::put('/invoices/{id}', [InvoicesController::class, 'update']);

        Route::delete('/invoices/{id}', [InvoicesController::class, 'delete']);
    });

require __DIR__.'/auth.php';

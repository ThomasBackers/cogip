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

        Route::get('/users/{id}', [UsersController::class, 'show'])
            ->where(['id' => '[0-9]+']);

        Route::put('/users/{id}', [UsersController::class, 'update'])
            ->where(['id' => '[0-9]+']);

        Route::delete('/users/{id}', [UsersController::class, 'destroy'])
            ->where(['id' => '[0-9]+']);

        Route::get('/users/{id}/edit', [UsersController::class, 'edit'])
            ->where(['id' => '[0-9]+']);

        Route::get('/users/create/form', [UsersController::class, 'create']);
    });

Route::middleware(['auth', 'xsssanitizer'])
    ->group(function () {
        Route::get('/companies', [CompaniesController::class, 'index']);

        Route::get('/companies/suppliers', [CompaniesController::class, 'suppliers']);

        Route::get('/companies/clients', [CompaniesController::class, 'clients']);

        Route::get('/companies/{id}', [CompaniesController::class, 'show'])
            ->where(['id' => '[0-9]+']);
        
        Route::get('/companies/create', [CompaniesController::class, 'create']);

        Route::post('/companies/create', [CompaniesController::class, 'store']);

        Route::get('/contacts', [ContactsController::class, 'index']);

        Route::get('/contacts/{id}', [ContactsController::class, 'show'])
            ->where(['id' => '[0-9]+']);

        Route::get('/contacts/create', [ContactsController::class, 'create']);

        Route::post('/contacts/create', [CompaniesController::class, 'store']);

        Route::get('/invoices', [InvoicesController::class, 'index']);

        Route::get('/invoices/{id}', [InvoicesController::class, 'show'])
            ->where(['id' => '[0-9]+']);
        
        Route::get('/invoices/create', [InvoicesController::class, 'create']);

        Route::post('/invoices/create', [CompaniesController::class, 'store']);
    });

Route::middleware(['auth', 'role:editor', 'xsssanitizer'])
    ->group(function () {
        Route::get('/companies/{id}/edit', [CompaniesController::class, 'edit'])
            ->where(['id' => '[0-9]+']);

        Route::put('/companies/{id}', [CompaniesController::class, 'update'])
            ->where(['id' => '[0-9]+']);

        Route::delete('/companies/{id}', [CompaniesController::class, 'destroy'])
            ->where(['id' => '[0-9]+']);
        
        Route::get('/contacts/{id}/edit', [ContactsController::class, 'edit'])
            ->where(['id' => '[0-9]+']);

        Route::put('/contacts/{id}', [ContactsController::class, 'update'])
            ->where(['id' => '[0-9]+']);

        Route::delete('/contacts/{id}', [ContactsController::class, 'destroy'])
            ->where(['id' => '[0-9]+']);
        
        Route::get('/invoices/{id}/edit', [InvoicesController::class, 'edit'])
            ->where(['id' => '[0-9]+']);

        Route::put('/invoices/{id}', [InvoicesController::class, 'update'])
            ->where(['id' => '[0-9]+']);

        Route::delete('/invoices/{id}', [InvoicesController::class, 'destroy'])
            ->where(['id' => '[0-9]+']);
    });

require __DIR__.'/auth.php';

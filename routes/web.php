<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/redirect',[HomeController::class, 'redirect']);
Route::get('/',[HomeController::class, 'index']);


// Admin
Route::get('/admin/dashboard',[AdminController::class, 'view_dashboard'])->name('view_dashboard');
Route::get('/admin/application',[AdminController::class, 'view_application'])->name('view_application');
Route::get('/admin/application/new',[AdminController::class, 'view_new_application'])->name('view_new_application');

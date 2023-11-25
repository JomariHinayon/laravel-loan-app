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
        return view('home.dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class, 'redirect']);
Route::get('/',[HomeController::class, 'index']);
Route::get('/loan/details',[HomeController::class, 'loan_details'])->name('loan_details');
Route::get('/loan/apply',[HomeController::class, 'apply_loan'])->name('apply_loan');
Route::get('/application/personal',[HomeController::class, 'new_personal_loan']);


Route::post('/application/personal/submit',[HomeController::class, 'submit_personal_loan']);


// 
// Admin
Route::get('/admin/dashboard',[AdminController::class, 'view_dashboard'])->name('view_dashboard');
Route::get('/admin/login',[AdminController::class, 'login'])->name('admin_login');
Route::get('/admin/application',[AdminController::class, 'view_application'])->name('view_application');
Route::get('/admin/application/new',[AdminController::class, 'view_new_application'])->name('view_new_application');
// Route::get('/admin/users',[AdminController::class, 'view_users'])->name('view_users');
// Route::delete('/admin/users/delete/{user}', [AdminController::class, 'delete_user'])->name('delete_user');
// Route::get('/admin/users/edit/{user}', [AdminController::class, 'edit_user'])->name('edit_user');
// Route::put('/admin/users/update/{user}', [AdminController::class, 'update_user'])->name('update_user');

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/page-user', function () {
    return view('page-user');
});

Route::get('/dashboard', [Controller::class, 'dashboard'])->middleware(['auth', 'verified', 'check.user.status'])->name('dashboard');

Route::middleware(['auth', 'check.user.status'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('edit-profile', [StaffController::class, 'editProfile'])->name('edit-profile');
    Route::get('update-password', [StaffController::class, 'updatePassword'])->name('update-password');

    // Project
    Route::resource('project', ProjectController::class);

    // Issue
    Route::resource('issue', IssueController::class);

    // Report
    Route::resource('report', ReportController::class);

    // Staff
    Route::resource('staff', StaffController::class);
});

require __DIR__.'/auth.php';

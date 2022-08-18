<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('submit-report', [ReportController::class, 'submitReports'])->name('submit-report');

Route::get('review-performance', [EmployeeController::class, 'reviewPerformance'])->name('review-performance');
Route::get('refer-task', [EmployeeController::class, 'referTask'])->name('refer-task');
Route::get('suggest-changes', [EmployeeController::class, 'suggestChanges'])->name('suggest-changes');
Route::get('view-notification', [EmployeeController::class, 'viewNotifications'])->name('view-notification');
Route::get('edit-profile', [EmployeeController::class, 'editProfile'])->name('edit-profile');
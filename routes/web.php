<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class, 'home'])->name('home');
Route::get('employees', [AdminController::class, 'employees'])->name('employees');
Route::get('leave', [AdminController::class, 'leave'])->name('leave');
Route::get('benefits', [AdminController::class, 'benefits'])->name('benefits');
Route::get('payroll', [AdminController::class, 'payroll'])->name('payroll');
Route::get('attendances', [AdminController::class, 'attendances'])->name('attendances');
Route::get('departments', [AdminController::class, 'departments'])->name('departments');
Route::get('analytics', [AdminController::class, 'analytics'])->name('analytics');
Route::get('settings', [AdminController::class, 'settings'])->name('settings');
Route::get('recruitments', [AdminController::class, 'recruitments'])->name('recruitments');




Route::get('model_saving', [AdminController::class, 'model_saving'])->name('model-saving');
Route::get('create_employee_records', function(){
    return view('employee_routes/create_employee_records');
})->name('create_employee_records');


Route::post('store_employee_records', [AdminController::class, 'store_employee_records'])->name('store_employee_records');

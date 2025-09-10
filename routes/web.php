<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::post('/employees/increase-salary', [EmployeeController::class, 'increaseSalary'])->name('employees.increase-salary');

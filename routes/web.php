<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index'); // bisa
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create'); // bisa

Route::resource('attendances', AttendanceController::class);
Route::post('/attendances', [AttendanceController::class, 'store'])->name('attendances.store'); // bisa

Route::resource('products', ProductController::class);
Route::post('/products', [ProductController::class, 'store'])->name('products.store');


Route::resource('sales', SaleController::class);
Route::post('/sales', [SaleController::class, 'store'])->name('sales.store');

Route::resource('orders', OrderController::class);
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store'); 

Route::resource('complaints', ComplaintController::class);
Route::post('/complaints', [ComplaintController::class, 'store'])->name('complaints.store'); // bisa (create.blade dibenerin)

Route::resource('transactions', TransactionController::class);
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store'); // bisa

Route::get('reports/financial', [ReportController::class, 'financial'])->name('reports.financial');



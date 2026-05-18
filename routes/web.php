<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware([
    'auth',
    'role:drh'
])->group(function () {

    Route::get('/employees/create',  [EmployeeController::class, 'create']);
    Route::post('/employees',  [EmployeeController::class, 'store'])-> name('employees.store') ;
    Route::get('/stats',  [EmployeeController::class, 'stats'])->name('employees.stats');
});


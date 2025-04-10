<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [EmployeeController::class, 'getEmployee']);
Route::post('/save_employee', [EmployeeController::class, 'saveNewEmployee']);

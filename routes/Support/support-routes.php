<?php

use App\Http\Controllers\Support\AttendanceReportsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Support Routes
|--------------------------------------------------------------------------
|
*/

Route::post('/home', [AttendanceReportsController::class, 'store']);

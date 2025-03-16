<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeValueController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

Route::apiResource('users', UserController::class)->middleware('auth:api');
Route::apiResource('projects', ProjectController::class)->middleware('auth:api');
Route::apiResource('timesheets', TimesheetController::class)->middleware('auth:api');
Route::apiResource('attributes', AttributeController::class)->middleware('auth:api');
Route::apiResource('attribute-values', AttributeValueController::class)->middleware('auth:api');

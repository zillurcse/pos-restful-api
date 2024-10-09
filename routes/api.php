<?php

use App\Http\Controllers\API\BusinessController;
use App\Http\Controllers\API\BusinessLocationController;
use App\Http\Controllers\API\InvoiceLayoutController;
use App\Http\Controllers\API\UnitController;
use App\Http\Controllers\HydraController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\ZATCA\ZatcaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//use the middleware 'hydra.log' with any request to get the detailed headers, request parameters and response logged in logs/laravel.log

Route::get('hydra', [HydraController::class, 'hydra']);
Route::get('hydra/version', [HydraController::class, 'version']);

Route::apiResource('users', UserController::class)->except(['edit', 'create', 'store', 'update'])->middleware(['auth:sanctum', 'ability:admin,super-admin']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{user}', [UserController::class, 'update'])->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::post('users/{user}', [UserController::class, 'update'])->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::patch('users/{user}', [UserController::class, 'update'])->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::get('me', [UserController::class, 'me'])->middleware('auth:sanctum');
Route::post('login', [UserController::class, 'login']);

Route::apiResource('roles', RoleController::class)->except(['create', 'edit'])->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::apiResource('users.roles', UserRoleController::class)->except(['create', 'edit', 'show', 'update'])->middleware(['auth:sanctum', 'ability:admin,super-admin']);

//POS API
Route::apiResource('business', BusinessController::class)->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::apiResource('business-location', BusinessLocationController::class)->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::apiResource('invoice-layouts', InvoiceLayoutController::class)->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::apiResource('unit', UnitController::class)->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);




//zatca api

Route::get('zatca', [ZatcaController::class, 'index'])->middleware(['auth:sanctum', 'ability:admin,super-admin']);
Route::post('csid', [ZatcaController::class, 'setting'])->middleware(['auth:sanctum', 'ability:admin,super-admin']);

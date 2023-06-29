<?php

use App\Http\Controllers\APISubCategoryController;
use App\Http\Controllers\APICategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIProductController;
use App\Http\Controllers\APIOrderController;
use App\Http\Controllers\APIDetailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\APIPurchaseController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

//Registro, login y logout
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');

Route::apiResource('products', APIProductController::class);
Route::put('/products/{id}/disable', [APIProductController::class, 'editImage']);
Route::post('/products/create', [APIProductController::class, 'store']);

Route::apiResource('categories', APICategoryController::class);
Route::post('/categories/create', [APICategoryController::class, 'store']);

Route::apiResource('subcategories', APISubCategoryController::class);
Route::post('/subcategories/create', [APISubCategoryController::class, 'store']);

Route::apiResource('orders', APIOrderController::class);
Route::post('/orders/create', [APIOrderController::class, 'store']);

Route::apiResource('details', APIDetailController::class);
Route::post('/details/create', [APIDetailController::class, 'store']);

Route::post('/comprar/auth', [APIPurchaseController::class, 'makePurchase']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseTypeController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;

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
    return view('home');
});

//Warehouse types
Route::get('/warehouse-type', [WarehouseTypeController::class, 'index']);
Route::get('/warehouse-type/create', [WarehouseTypeController::class, 'create']);
Route::post('/warehouse-type', [WarehouseTypeController::class, 'store']);
Route::patch('/warehouse-type/{id}', [WarehouseTypeController::class, 'update']);
Route::get('/warehouse-type/{id}', [WarehouseTypeController::class, 'show']);
Route::delete('/warehouse-type/{id}', [WarehouseTypeController::class, 'delete']);
Route::delete('/warehouse-type/{id}/soft', [WarehouseTypeController::class, 'softDelete']);

//Product types
Route::get('/product-type', [ProductTypeController::class, 'index']);
Route::get('/product-type/create', [ProductTypeController::class, 'create']);
Route::post('/product-type', [ProductTypeController::class, 'store']);
Route::patch('/product-type/{id}', [ProductTypeController::class, 'update']);
Route::get('/product-type/{id}', [ProductTypeController::class, 'show']);
Route::delete('/product-type/{id}', [ProductTypeController::class, 'delete']);
Route::delete('/product-type/{id}/soft', [ProductTypeController::class, 'softDelete']);


//Product categories
Route::get('/product-category', [ProductCategoryController::class, 'index']);
Route::get('/product-category/create', [ProductCategoryController::class, 'create']);
Route::post('/product-category', [ProductCategoryController::class, 'store']);
Route::patch('/product-category', [ProductCategoryController::class, 'update']);
Route::get('/product-category/{id}', [ProductCategoryController::class, 'show']);
Route::delete('/product-category/{id}', [ProductCategoryController::class, 'delete']);
Route::delete('/product-category/{id}', [ProductCategoryController::class, 'softDelete']);


//Produt
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::patch('/product', [ProductController::class, 'update']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::delete('/product/{id}', [ProductController::class, 'delete']);
Route::delete('/product/{id}', [ProductController::class, 'softDelete']);
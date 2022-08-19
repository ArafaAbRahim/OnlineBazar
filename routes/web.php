<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

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

//backend route
Route::get('/admins', [AdminController::class, 'index']);
Route::post('/admin-dashboard', [AdminController::class, 'login']);

Route::get('/dashboard', [SuperAdminController::class, 'dashboard']);
Route::get('/logout', [SuperAdminController::class, 'logout']);

//category
Route::resource('/categories', CategoryController::class);
Route::get('/cat-status{category}', [CategoryController::class, 'change_status']);

//sub category
Route::resource('/sub-categories', SubCategoryController::class);
Route::get('/subcat-status{subcategory}', [SubCategoryController::class, 'change_status']);

//brand
Route::resource('/brands', BrandController::class);
Route::get('/brand-status{brand}', [BrandController::class, 'change_status']);

//unit
Route::resource('/units', UnitController::class);
Route::get('/unit-status{unit}', [UnitController::class, 'change_status']);

//size
Route::resource('/sizes', SizeController::class);
Route::get('/size-status{size}', [SizeController::class, 'change_status']);

//color
Route::resource('/colors', ColorController::class);
Route::get('/color-status{color}', [ColorController::class, 'change_status']);

//product
Route::resource('/products', ProductController::class);
Route::get('/product-status{product}', [ProductController::class, 'change_status']);

//frontend route
Route::get('/', [HomeController::class, 'index']);
Route::get('/view-details{id}', [HomeController::class, 'view_details']);

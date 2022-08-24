<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
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

//order
Route::get('/manage-order', [OrderController::class, 'manage_order']);
Route::get('/view-orders/{id}', [OrderController::class, 'view_order']);
Route::get('/order-status{order}', [OrderController::class, 'change_status']);

//frontend route
Route::get('/', [HomeController::class, 'index']);
Route::get('/view-details/{id}', [HomeController::class, 'view_details']);
Route::get('/product-by-category/{id}', [HomeController::class, 'product_by_category']);
Route::get('/product-by-subcat/{id}', [HomeController::class, 'product_by_subcategory']);
Route::get('/product-by-brand/{id}', [HomeController::class, 'product_by_brand']);
Route::get('/search', [HomeController::class, 'search']);


//cart
Route::post('/add-to-cart', [CartController::class, 'add_to_cart']);
Route::get('/delete-cart/{id}', [CartController::class, 'delete_cart']);

//checkout
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/user-login', [CheckoutController::class, 'login_check']);
Route::post('/shipping-info', [CheckoutController::class, 'shipping_info']);
Route::get('/payment', [CheckoutController::class, 'payment']);
Route::post('/order-place', [CheckoutController::class, 'order_place']);

//customer login & logout
Route::post('/customer-login', [CustomerController::class, 'login']);
Route::post('/customer-registration', [CustomerController::class, 'registration']);
Route::get('/customer-logout', [CustomerController::class, 'logout']);
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\CartItemsController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CustomerAddressesController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CRUD APIs for products
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// CRUD APIs for orders
Route::get('/orders', [OrdersController::class, 'index']);
Route::post('/orders', [OrdersController::class, 'store']);
Route::get('/orders/{order}', [OrdersController::class, 'show']);
Route::put('/orders/{order}', [OrdersController::class, 'update']);
Route::delete('/orders/{order}', [OrdersController::class, 'destroy']);

// CRUD APIs for countries
Route::get('/countries', [CountriesController::class, 'index']);
Route::post('/countries', [CountriesController::class, 'store']);
Route::get('/countries/{country}', [CountriesController::class, 'show']);
Route::put('/countries/{country}', [CountriesController::class, 'update']);
Route::delete('/countries/{country}', [CountriesController::class, 'destroy']);

// CRUD APIs for cart items
Route::get('/cart_items', [CartItemsController::class, 'index']);
Route::post('/cart_items', [CartItemsController::class, 'store']);
Route::get('/cart_items/{cartItem}', [CartItemsController::class, 'show']);
Route::put('/cart_items/{cartItem}', [CartItemsController::class, 'update']);
Route::delete('/cart_items/{cartItem}', [CartItemsController::class, 'destroy']);

// CRUD APIs for order details
Route::get('/order_details', [OrderDetailsController::class, 'index']);
Route::post('/order_details', [OrderDetailsController::class, 'store']);
Route::get('/order_details/{orderDetail}', [OrderDetailsController::class, 'show']);
Route::put('/order_details/{orderDetail}', [OrderDetailsController::class, 'update']);
Route::delete('/order_details/{orderDetail}', [OrderDetailsController::class, 'destroy']);

// CRUD APIs for order items
Route::get('/order_items', [OrderItemsController::class, 'index']);
Route::post('/order_items', [OrderItemsController::class, 'store']);
Route::get('/order_items/{orderItem}', [OrderItemsController::class, 'show']);
Route::put('/order_items/{orderItem}', [OrderItemsController::class, 'update']);
Route::delete('/order_items/{orderItem}', [OrderItemsController::class, 'destroy']);

// CRUD APIs for payments
Route::get('/payments', [PaymentsController::class, 'index']);
Route::post('/payments', [PaymentsController::class, 'store']);
Route::get('/payments/{payment}', [PaymentsController::class, 'show']);
Route::put('/payments/{payment}', [PaymentsController::class, 'update']);
Route::delete('/payments/{payment}', [PaymentsController::class, 'destroy']);

// CRUD APIs for customers
Route::get('/customers', [CustomersController::class, 'index']);
Route::post('/customers', [CustomersController::class, 'store']);
Route::get('/customers/{customer}', [CustomersController::class, 'show']);
Route::put('/customers/{customer}', [CustomersController::class, 'update']);
Route::delete('/customers/{customer}', [CustomersController::class, 'destroy']);

// CRUD APIs for customer addresses
Route::get('/customer_addresses', [CustomerAddressesController::class, 'index']);
Route::post('/customer_addresses', [CustomerAddressesController::class, 'store']);
Route::get('/customer_addresses/{customerAddress}', [CustomerAddressesController::class, 'show']);
Route::put('/customer_addresses/{customerAddress}', [CustomerAddressesController::class, 'update']);
Route::delete('/customer_addresses/{customerAddress}', [CustomerAddressesController::class, 'destroy']);

// CRUD APIs for categories
Route::get('/categories', [CategoriesController::class, 'index']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::get('/categories/{id}', [CategoriesController::class, 'show']);
Route::put('/categories/{id}', [CategoriesController::class, 'update']);
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);



// Rute koje se odnose na autentifikaciju
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/refresh', [AuthController::class, 'refresh']);

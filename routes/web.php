<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('index');})->name('home');

// Route to view available categories
Route::get('/categories', [ProductController::class, 'categories'])->name('categories.index');

// Route to display products in a category
Route::get('/api/products/category/{category}', [ProductController::class, 'getProductsByCategory']);

// Route to view details of a specific product
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');



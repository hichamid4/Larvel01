<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [
    ProductController::class,
    'index'
])->name('index');

Route::get('/products/add', [
    ProductController::class,
    'formcreate'
])->name('formcreate');

Route::post('/products', [
    ProductController::class,
    'create',
])->name('addProd');

Route::get('/products/deleteProd/{id}', [
    ProductController::class,
    'delete',
])->name('del');

route::get('products/editeProd/{id}', [
    ProductController::class,
    'edit'
])->name('edit');

Route::post('products/updateProd', [
    ProductController::class,
    'update',
])->name('update');

Route::get('products/details/{id}', [
    ProductController::class,
    'show'
])->name('detail');

Route::get('/category', [
    CategoryController::class,
    'index',
])->name('allCategory');

Route::get('/category/form', [
    CategoryController::class,
    'create',
])->name('categoryForm');

Route::post('/category/add', [
    CategoryController::class,
    'store'
])->name('addCategory');

Route::get('/category/editForm/{id}', [
    CategoryController::class,
    'edit',
])->name('editForm');

Route::post('/category/updateCategory/{id}', [
    CategoryController::class,
    'update'
])->name('catUpdate');

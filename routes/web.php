<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index']);

Route::get('/list', [ProductController::class, 'list'])->name('list');
Route::get('/add/product', [ProductController::class, 'add_product'])->name('add.product');
Route::post('/product/form', [ProductController::class, 'form_check'])->name('product.form');
Route::get('/product/edit/{id}',[ProductController::class, 'edit_product_form'])->name('product.edit');
Route::post('product/update/{update_id}', [ProductController::class, 'product_update'])->name('product.update');
Route::post('product/quantity/{qty_id}', [ProductController::class, 'qty_update'])->name('product.quantity');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

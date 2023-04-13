<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
//Route of ProductController
Route::get('/', [ProductController::class, 'show'])->name('show');
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::get('/formProductRegistrer', [ProductController::class, 'formProductRegistrer'])->name('formProductRegistrer');
Route::get('/formProductUpdate/{id}', [ProductController::class, 'formProductUpdate'])->name('formProductUpdate');
Route::get('/deleteProduct/{id}', [ProductController::class, 'delete'])->name('deleteProduct');
Route::post('/updateProduct/{id}', [ProductController::class, 'update'])->name('updateProduct');
Route::fallback(function () {
    return "Pagina Não encontrada";
});
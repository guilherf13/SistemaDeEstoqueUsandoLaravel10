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

Route::get('/', function () {
    return view('pages.page-init');
})->name('defalte');

Route::get('/register', [ProductController::class, 'show'])->name('register');
Route::post('/store', [ProductController::class, 'store'])->name('store');

Route::fallback(function () {
    return "Pagina Não encontrada";
});
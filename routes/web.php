<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;   

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/add-to-card/{product}', [HomeController::class, 'add_to_card'])->name('add_to_card');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [HomeController::class, 'place_order'])->name('place_order');
// Route::get('/', function () {
//     return view('index');
// });

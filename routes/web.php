<?php

use App\Http\Livewire\Product\Index;
use App\Http\Livewire\Shop\Cart;
use App\Http\Livewire\Shop\Checkout;
use App\Http\Livewire\Shop\Index as ShopIndex;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/product', Index::class)->middleware('auth')->name('admin.product');
Route::get('/', ShopIndex::class)->name('shop.index');
Route::get('/cart', Cart::class)->name('shop.cart');
Route::get('/checkout', Checkout::class)->name('shop.checkout');
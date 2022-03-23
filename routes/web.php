<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/shops', [ShopController::class, 'index'])->name('shop.list');
Route::get('/shop/{id}', [ShopController::class, 'show'])->name('shop.detail');

Route::get('/', function () {
    return redirect('/shops');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
//dashboard pages
Route::get('/', function () {
    return view('welcome');
})->name('dashboard');
Route::get('/datatables', function () {
    return view('data-tables');
})->name('data-tables');
Route::get('/simpletables', function () {
    return view('simple-tables');
})->name('simple-tables');
// products
Route::get('/product',[productcontroller::class, 'index'])->name('products');
Route::get('/product/create',[productcontroller::class, 'create'])->name('products.create');
Route::get('/product/store',[productcontroller::class, 'store'])->name('products.store');
Route::get('/product/edit/{id}',[productcontroller::class, 'edit'])->name('products.edit');
Route::get('/product/update',[productcontroller::class, 'update'])->name('products.update');
Route::get('/product/destroy',[productcontroller::class, 'destroy'])->name('products.destroy');



<?php

use App\Http\Controllers\CrateController;
use App\Http\Controllers\home;
use App\Http\Controllers\ProductController;
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
Route::resource('products', ProductController::class);
Route::post('/posts', [ProductController::class, 'store'])->middleware(['auth']);
Route::get('/product', [ProductController::class, 'index'])->middleware(['auth']);
Route::get('/product.create', function(){
    return view('create');
} );
Route::get('/dashboard', [home::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('crate', CrateController::class);


require __DIR__.'/auth.php';


;


<?php
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/zoos', [App\Http\Controllers\ZooController::class, 'index'])->name('zoos.index');
    //Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
    //Route::get('/categories/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    //Route::put('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    //Route::delete('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
    //Route::post('/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');

<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PropertyController;
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

Route::get('/', [PageController::class, 'home'])->name('pages.home');
Route::resource('posts', PostController::class);
Route::resource('properties', PropertyController::class);
Route::get('/whoAreYou', [PageController::class, 'whoAreYou'])->name('pages.whoAreYou');
Route::get('/legal', [PageController::class, 'whoAreYou'])->name('pages.legal');
Route::get('/newsletter', [PageController::class, 'whoAreYou'])->name('pages.newsletter');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

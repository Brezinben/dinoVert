<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TagController;
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
Route::get('whoAreWe', [PageController::class, 'whoAreWe'])->name('pages.whoAreWe');
Route::get('legalNotices', [PageController::class, 'legalNotices'])->name('pages.legalNotices');
Route::get('contact', [PageController::class, 'contactForm'])->name('pages.contact');
Route::post('contact', [PageController::class, 'storeContactForm'])->name('pages.storeContact');
Route::post('newsletters', [PageController::class, 'storeNewsletter'])->name('pages.newsletter');
Route::get('/unsubscribe/{email}', [PageController::class, 'unsubscribe'])->name('unsubscribe')->middleware('signed');

Route::resource('tags', TagController::class)->only(['index', 'show']);
Route::resource('posts', PostController::class)->only(['index', 'show']);
Route::resource('properties', PropertyController::class)->only(['index', 'show']);

//Les routes suivantes sont pour les pages Admin elle sont préfixé par admin dans l'url et les name(s)
Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('properties', PropertyController::class)->except(['index', 'show']);
    Route::resource('posts', PostController::class)->except(['index', 'show']);
    Route::resource('tags', TagController::class)->except(['index', 'show']);
    Route::get('properties/index', [AdminController::class, 'properties'])->name('properties.index');
    Route::get('posts/index', [AdminController::class, 'posts'])->name('posts.index');
    Route::get('tags/index', [AdminController::class, 'tags'])->name('tags.index');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('edit', [AdminController::class, 'editHome'])->name('editHome');
    Route::post('edit/{id}', [AdminController::class, 'storeEditHome'])->name('storeEditHome');
});

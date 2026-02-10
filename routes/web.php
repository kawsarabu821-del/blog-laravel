<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermsController;

// Route::view('/','welcome')->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Blog pages //
Route::get('/blog', 		[BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', 	[BlogController::class, 'single'])->name('blog.single');
Route::get('/contact', 		[ContactController::class, 'index'])->name('contact.index');
Route::get('/privacy', 		[PrivacyController::class, 'index'])->name('privacy.index');
Route::get('/terms', 		[TermsController::class, 'index'])->name('terms.index');

// Blog Category //
Route::get('/category/{slug}',[CategoryController::class,'single'])->name('category.single');


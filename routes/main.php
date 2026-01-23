<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\Main\LanguageController;
use App\Http\Controllers\Main\Default\FaqController;
use App\Http\Controllers\Main\Default\HomeController;
use App\Http\Controllers\Main\Default\AboutController;
use App\Http\Controllers\Main\Default\BlogsController;
use App\Http\Controllers\Main\Default\LawyerController;
use App\Http\Controllers\Main\Default\SearchController;
use App\Http\Controllers\Main\Default\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/faqs', [FaqController::class, 'index'])->name('faq');

// Lawyer routes
Route::get('/avocats', [LawyerController::class, 'index'])->name('lawyers');

// Blogs routes
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');

// Search
Route::get('/search/{items?}', [SearchController::class, 'index'])->name('search');

// Newsletter
Route::post('/newsletter', [NewsLetterController::class, 'store'])->name('email.store');
Route::get('/newsletter', [NewsLetterController::class, 'index'])->name('newsletter');

// popup
Route::get('/success', [HomeController::class, 'success'])->name('send.success');

// About us
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/testy', function() {
    return view('main.default.rtl.pages.test');
});

Route::get('language/{lang?}', [LanguageController::class, 'index'])->name('language');

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\Default\LawyerController;
use App\Http\Controllers\Main\Lawyer\HomeController as LawyerHomeController;
use App\Http\Controllers\Main\Lawyer\FaqController as LawyerFaqController;
use App\Http\Controllers\Main\Lawyer\BlogsController as LawyerBlogsController;
use App\Http\Controllers\Main\Lawyer\ContactController as LawyerContactController;





Route::middleware('isPremium')->group(function() {

    Route::get('/avocats/{slug}', [LawyerHomeController::class, 'index'])->name('lawyers.show');
    Route::get('/avocats/{slug}/contact', [LawyerContactController::class, 'index'])->name('lawyers.contact');

    Route::get('/avocats/{slug}/faqs', [LawyerFaqController::class, 'index'])->name('lawyers.faqs');
    Route::get('/avocats/{slug}/faqs/{id}', [LawyerFaqController::class, 'show'])->name('lawyers.faqs.show');

    Route::get('/avocats/{slug}/blogs', [LawyerBlogsController::class, 'index'])->name('lawyers.blogs');
    Route::get('/avocats/{slug}/blogs/{blog}', [LawyerBlogsController::class, 'show'])->name('lawyers.blogs.show');
});


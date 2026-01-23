<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\Admin\AdminController;
use App\Http\Controllers\Dashboard\Admin\FaqController;
use App\Http\Controllers\Dashboard\Admin\LawyerController;
use App\Http\Controllers\Dashboard\Admin\OptionController;
use App\Http\Controllers\Dashboard\Admin\LawyerBlogController;
use App\Http\Controllers\Dashboard\Admin\LawyerMailController;
use App\Http\Controllers\Dashboard\Admin\LawyerExpertiseController;
use App\Http\Controllers\Dashboard\Admin\MailController;


Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin'], function () {
    Route::get("/", [AdminController::class, 'index'])->name("admin.index");
    // ---- Avocats routes ---------
    Route::get("/avocats", [LawyerController::class, 'index'])->name("admin.avocats");
    Route::get("/avocats-premium", [LawyerController::class, 'avocatPremium'])->name("admin.avocats.premium");
    Route::get("/avocats/create", [LawyerController::class, 'create'])->name("admin.avocats.create");
    Route::post("/avocats/create", [LawyerController::class, 'store'])->name("admin.avocats.store");
    Route::get("/avocats/{id}/edit", [LawyerController::class, 'edit'])->name("admin.avocats.edit");
    Route::put("/avocats/{id}/update", [LawyerController::class, 'update'])->name("admin.avocats.update");
    Route::delete("/avocats/delete/{id}", [LawyerController::class, 'destroy'])->name("admin.avocats.delete");
    Route::get("/avocats/{id}/show", [LawyerController::class, 'show'])->name("admin.avocats.show");
    Route::get("/avocats/{id}/login", [LawyerController::class, 'login'])->name("admin.avocats.login");

    // ---- Mail routes -----------
    Route::get("/mails", [MailController::class, 'index'])->name("admin.mails");
    Route::get("/mails/{id}/show", [MailController::class, 'show'])->name("admin.mails.show");
    Route::delete("/mails/delete/{id}", [MailController::class, 'destroy'])->name("admin.mails.delete");
    Route::get("/mails/{search}", [MailController::class, 'find'])->name("admin.find.mails");

    // Blogs routes
    Route::get("/blogs", [LawyerBlogController::class, 'index'])->name("admin.blogs");
    Route::get("/blogs/{id}/desactive", [LawyerBlogController::class, 'desactive'])->name("admin.blogs.desactive");
    Route::get("/blogs/{id}/active", [LawyerBlogController::class, 'active'])->name("admin.blogs.active");
    Route::get("/blogs/{search}", [LawyerBlogController::class, 'find'])->name("admin.find.blogs");

     // Blogs routes
    Route::get("/faqs", [FaqController::class, 'index'])->name("admin.faqs");
    Route::get("/faqs/{id}/show", [FaqController::class, 'show'])->name("admin.faqs.show");
    Route::get("/faqs/{id}/desactive", [FaqController::class, 'desactive'])->name("admin.faqs.desactive");
    Route::get("/faqs/{id}/active", [FaqController::class, 'active'])->name("admin.faqs.active");
    Route::get("/faqs/{search}", [FaqController::class, 'find'])->name("admin.find.faqs");

    // Settings routes
    Route::get("/settings", [OptionController::class, 'index'])->name("admin.settings");
    Route::get("/settings/profile", [OptionController::class, 'index'])->name("admin.settings");
    Route::put("/settings/update", [OptionController::class, 'update'])->name("admin.settings.update");
    Route::post("/settings/store", [OptionController::class, 'store'])->name("admin.settings.store");

});

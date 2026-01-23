<?php

use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Mail\EmailsController;
use App\Http\Controllers\Main\Default\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Auth::routes(["register" => false, "reset" => false]);

Route::view('/404', 'main.default.rtl.pages.404')->name('404');


Auth::routes(['verify' => true]);

Route::group(['middleware' => ["isLoginLawyer"]], function () {
    Route::any('/login/confirm', [AuthController::class, "requestOtp"])->name("request.opt");
    // Route::get('/login/confirm', [AuthController::class, 'confirmAuth'])->name('confirm.opt');
    Route::post("/login/confirm/poste", [AuthController::class, 'verifyOtp'])->name("verify.otp");
});

Route::group(['middleware' => ["isLoginLawyerClient"]], function () {
    Route::get('/logout-status', [AuthController::class, "logout"])->name("status.logout");
});


// Route for mailing
// Route::get("/email", function() {
//     Mail::to('laineis294@gmail.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });


// Route::get('/email',[EmailsController::class, "verifyEmail"]);


// Route::get('/contact/mail',[EmailsController::class, "contactSend"]);

Route::post("/contact-send/{id}",[EmailsController::class, "contactSend"])->name("lawyers.contact.send");
Route::post("/contact-admin-send",[EmailsController::class, "contactAdminSend"])->name("contact.admin.send");

Route::post("/contact-send-all",[EmailsController::class, "contactSendAllLawyerPremium"])->name("lawyers.contact.send.all");

Route::get('languageConverter/{locale}', function($locale) {
    if(in_array($locale, ['ar','en','fr'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('languageConverter');

Route::get('/loginAs/{id}', function($id) {
    User::findOrFail($id);
    Auth::loginUsingId($id);

    return redirect()->route('home');
});

Route::get('/fresh', function() {
    Artisan::call('config:cache');
    Artisan::call('storage:link');
    return "App is fresh now!";
});



Route::get('/testConsultation', [EmailsController::class, 'testConsultation']);

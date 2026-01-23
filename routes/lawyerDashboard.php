<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mail\EmailsController;
use App\Http\Controllers\Dashboard\Lawyer\FeesController;
use App\Http\Controllers\Dashboard\Lawyer\FileController;
use App\Http\Controllers\Dashboard\Lawyer\EventController;
use App\Http\Controllers\Dashboard\Lawyer\InfosController;
use App\Http\Controllers\Dashboard\Lawyer\ClientController;
use App\Http\Controllers\Dashboard\Lawyer\ExpensesController;
use App\Http\Controllers\Dashboard\Lawyer\AdminModelController;
use App\Http\Controllers\Dashboard\Lawyer\ProceduresController;
use App\Http\Controllers\Dashboard\Lawyer\AdminLawyerController;
use App\Http\Controllers\Dashboard\Lawyer\AdminLawyerFaqController;
use App\Http\Controllers\Dashboard\Notification\MessagesController;
use App\Http\Controllers\Dashboard\Lawyer\AdminLawyerBlogController;
use App\Http\Controllers\Dashboard\Lawyer\AdminLawyerMailController;
use App\Http\Controllers\Dashboard\Lawyer\EventProceduresController;
use App\Http\Controllers\Dashboard\Lawyer\AdminLawyerSettingController;
use App\Http\Controllers\Dashboard\Notification\MessageUsersController;

// Lawyar
Route::group(['middleware' => ['auth', 'isLawyar','verified','languageConverter'], 'prefix' => 'lawyer'], function () {
    Route::get("/", [AdminLawyerController::class, 'index'])->name("lawyer.index");

    // Routes Blogs
    Route::get("/blogs", [AdminLawyerBlogController::class, 'index'])->name("lawyer.blogs");
    Route::get("/blogs/create", [AdminLawyerBlogController::class, 'create'])->name("lawyer.blogs.create");
    Route::post("/blogs/create", [AdminLawyerBlogController::class, 'store'])->name("lawyer.blogs.store");
    Route::delete("/blogs/delete/{id}", [AdminLawyerBlogController::class, 'destroy'])->name("lawyer.blogs.destroy");
    Route::get("/blogs/{id}/edit", [AdminLawyerBlogController::class, 'edit'])->name("lawyer.blogs.edit");
    Route::put("/blogs/{id}/update", [AdminLawyerBlogController::class, 'update'])->name("lawyer.blogs.update");

    Route::get("/blogs/{id}/desactive", [AdminLawyerBlogController::class, 'desactive'])->name("lawyer.blogs.desactive");
    Route::get("/blogs/{id}/active", [AdminLawyerBlogController::class, 'active'])->name("lawyer.blogs.active");
    Route::get("/blogs/{search}", [AdminLawyerBlogController::class, 'find'])->name("lawyer.find.blogs");

    // Routes FAQ
    Route::get("/faqs",[AdminLawyerFaqController::class, 'index'])->name("lawyer.faqs");
    Route::get("/faqs/create", [AdminLawyerFaqController::class, 'create'])->name("lawyer.faqs.create");
    Route::post("/faqs/create", [AdminLawyerFaqController::class, 'store'])->name("lawyer.faqs.store");
    Route::delete("/faqs/delete/{id}", [AdminLawyerFaqController::class, 'destroy'])->name("lawyer.faqs.destroy");
    Route::get("/faqs/{id}/edit", [AdminLawyerFaqController::class, 'edit'])->name("lawyer.faqs.edit");
    Route::get("/faqs/{search}", [AdminLawyerFaqController::class, 'find'])->name("lawyer.find.faqs");
    Route::put("/faqs/{id}/update", [AdminLawyerFaqController::class, 'update'])->name("lawyer.faqs.update");
    Route::get("/faqs/{id}/desactive", [AdminLawyerFaqController::class, 'desactive'])->name("lawyer.faqs.desactive");
    Route::get("/faqs/{id}/active", [AdminLawyerFaqController::class, 'active'])->name("lawyer.faqs.active");

    // Routes Mails
    Route::get("/mails",[AdminLawyerMailController::class, 'index'])->name("lawyer.mails");
    // lawyer.find.mails
    Route::get("/mails/{search}", [AdminLawyerMailController::class, 'find'])->name("lawyer.find.mails");
    Route::get("/mails/{id}/show", [AdminLawyerMailController::class, 'show'])->name("lawyer.mails.show");
    Route::delete("/mails/delete/{id}", [AdminLawyerMailController::class, 'destroy'])->name("lawyar.mails.delete");
    // repondre
    Route::get("/mails/reponse/{id}/show",[AdminLawyerMailController::class,"showReponseMail"])->name("lawyer.reponse.mail.show");
    Route::post("/mails/{id}/reponse",[AdminLawyerMailController::class,"sendReponseMail"])->name("lawyer.reponse.mail.post");

    // -------- Routes Settings --------------
    Route::get("/settings", [AdminLawyerSettingController::class,"index"])->name("lawyer.settings");
    Route::get("/settings/show", [AdminLawyerSettingController::class,"show"])->name("lawyer.settings.show");
    Route::put('/settings/update', [AdminLawyerSettingController::class,"update"])->name("lawyer.settings.update");
    Route::get('/settings/show/expertise', [AdminLawyerSettingController::class,"showExpertise"])->name("lawyer.settings.show.expertise");
    Route::put('/settings/update/{id}/expertise', [AdminLawyerSettingController::class,"updateExpertise"])->name("lawyer.settings.update.expertise");
    // - LandingPage
    Route::get("/settings/landing-page", [AdminLawyerSettingController::class,"getLandingPage"])->name("lawyer.settings.landing.page.show");


    Route::get("/settings/landing-page/section/{id}", [AdminLawyerSettingController::class,"getLandingPage"])->name("lawyer.settings.landing.page.section.show");
    Route::get("/settings/landing-page/section-one/{id?}", [AdminLawyerSettingController::class,"getOneSection"])->name("lawyer.settings.landing.page.section.one.show");
    Route::delete("/settings/landing-page/section-one/delete/{id}", [AdminLawyerSettingController::class,"deleteOneSection"])->name("lawyer.settings.landing.page.section.one.delete");
    Route::get("/settings/landing-page/section-one/published/{id}", [AdminLawyerSettingController::class,"changeStatus"])->name("lawyer.settings.landing.page.section.one.change.status");
    Route::post("/settings/landing-page/section/create", [AdminLawyerSettingController::class,"storeOneSection"])->name("lawyer.settings.landing.page.section.one.add");
    Route::put("/settings/landing-page/section/{id}/update", [AdminLawyerSettingController::class,"updateOneSection"])->name("lawyer.settings.landing.page.section.one.update");


    Route::put("/settings/landing-page/{id}/update", [AdminLawyerSettingController::class,"updateLandingPage"])->name("lawyer.settings.landing.page.update");

    // - footer
    Route::get("/settings/footer",[AdminLawyerSettingController::class,"getFooterPage"])->name("lawyer.settings.footer.page");
    Route::put("/settings/footer/{id}/update",[AdminLawyerSettingController::class,"updateFooterPage"])->name("lawyer.settings.footer.page.update");



    // Model
    Route::get("/models", [AdminModelController::class,'index'])->name("lawyer.models");
    Route::get("/models/uploaded", [AdminModelController::class,'indexUploaded'])->name("lawyer.models.uploaded");
    Route::get("/models/show/{id}", [AdminModelController::class,'showFiles'])->name("lawyer.models.fiels.show");
    Route::get("/models/show/uploaded/{id}", [AdminModelController::class,'showFilesUploaded'])->name("lawyer.models.fiels.uploaded.show");
    Route::get("/models/{id}/create", [AdminModelController::class,'create'])->name("lawyer.models.create");
    Route::get("/models/{id}/create/uploaded", [AdminModelController::class,'createUploaded'])->name("lawyer.models.create.uploaded");

    Route::get("/models/all", [AdminModelController::class,'getModelFiles'])->name("lawyer.models.files.all");
    Route::get("/models/all/uploaded", [AdminModelController::class,'getModelFilesUploaded'])->name("lawyer.models.files.all.uploaded");

    Route::get("/models/upload", [AdminModelController::class, 'getFormUpload'])->name("lawyer.models.upload");

    Route::post("/models/upload/submit", [AdminModelController::class,'storeCreateNewModelFile'])->name("lawyer.models.upload.submit");

    Route::post("/models/create", [AdminModelController::class,'store'])->name("lawyer.models.store");
    Route::post("/models/create/uploaded", [AdminModelController::class,'storeModelUploded'])->name("lawyer.models.store.uploaded");
    Route::get("/models/{id}/edit", [AdminModelController::class,'edit'])->name("lawyer.models.edit");
    Route::get("/models/{id}/edit/uploaded", [AdminModelController::class,'editUploaded'])->name("lawyer.models.edit.uploaded");
    Route::put("/models/{id}/update", [AdminModelController::class,'update'])->name("lawyer.models.update");
    Route::put("/models/{id}/update/uploaded", [AdminModelController::class,'updateUploaded'])->name("lawyer.models.update.uploaded");
    Route::delete("/models/delete/{id}", [AdminModelController::class,'destroy'])->name("lawyer.models.destroy");
    Route::delete("/models/delete/{category}/{modelFile}/model", [AdminModelController::class,'destroyModel'])->name("lawyer.models.destroy.model");
    Route::delete("/models/delete/{id}/uploaded", [AdminModelController::class,'destroyUploaded'])->name("lawyer.models.destroy.uploaded");

    Route::get('/models/download/{file_name}', [AdminModelController::class, 'downloadFile'])->name("download.file");
    Route::get('/models/download/{file_name}/uploaded', [AdminModelController::class, 'downloadFileUploaded'])->name("download.file.uploaded");

    Route::get('/models/download/pdf/{id}',[AdminModelController::class, 'downloadPDF'])->name("download.pdf");

    // Client
    Route::get("/clients", [ClientController::class, 'index'])->name("lawyer.clients.index");
    Route::get("/clients/create", [ClientController::class, 'create'])->name("lawyer.clients.create");
    Route::post("/clients/create", [ClientController::class, 'store'])->name("lawyer.clients.store");
    Route::delete("/clients/delete/{client}", [ClientController::class, 'destroy'])->name("lawyer.clients.destroy");
    Route::get("/clients/{client}/edit", [ClientController::class, 'edit'])->name("lawyer.clients.edit");
    Route::put("/clients/{client}/update", [ClientController::class, 'update'])->name("lawyer.clients.update");

    // File
    Route::get("/files/{client}/create", [ClientController::class, 'createFile'])->name("lawyer.files.client.create");
    Route::post("/files/{client}/create", [ClientController::class, 'storeFile'])->name("lawyer.files.client.store");

    Route::get("/files", [FileController::class, 'index'])->name("lawyer.files.index");

    Route::get("/files/create", [FileController::class, 'create'])->name("lawyer.files.create");
    Route::post("/files/create", [FileController::class, 'store'])->name("lawyer.files.store");

    Route::delete("/files/delete/{file}", [FileController::class, 'destroy'])->name("lawyer.files.destroy");
    Route::get("/files/{file}/edit", [FileController::class, 'edit'])->name("lawyer.files.edit");
    Route::put("/files/{file}/update", [FileController::class, 'update'])->name("lawyer.files.update");

    // File Fees
    Route::get("/fees/{file}/create", [FeesController::class, 'create'])->name("lawyer.fees.create");
    Route::post("/fees/{file}/create", [FeesController::class, 'store'])->name("lawyer.fees.store");

    Route::get("/fees/{file}/all", [FeesController::class, 'index'])->name("lawyer.fees.index");
    Route::get("/fees/{fileFees}/edit", [FeesController::class, 'editFees'])->name("lawyer.fees.edit");
    Route::put("/fees/{fileFees}/update", [FeesController::class, 'updateFees'])->name("lawyer.fees.update");

    Route::get("/file-fees/{fileFees}/show", [FeesController::class, 'show'])->name("lawyer.file.fees.show");

    Route::delete("/file-fees/delete/{fileFees}", [FeesController::class, 'delete'])->name("lawyer.file.fees.delete");

    // Expenses
    Route::get("/expenses", [ExpensesController::class, 'index'])->name("lawyer.expenses.index");
    Route::get("/expenses/{file}/all", [ExpensesController::class, 'allExpenses'])->name("lawyer.expenses.all");
    Route::get("/expenses/{expenseFile}/edit", [ExpensesController::class, 'editExpenses'])->name("lawyer.expense.edit");
    Route::put("/expenses/{expenseFile}/update", [ExpensesController::class, 'updateExpenses'])->name("lawyer.expenses.update");
    Route::get("/expenses/{file}/create", [ExpensesController::class, 'create'])->name("lawyer.expenses.create");
    Route::post("/expenses/{file}/create", [ExpensesController::class, 'store'])->name("lawyer.expenses.store");
    Route::delete("/expenses/delete/{expenseFile}", [ExpensesController::class, 'delete'])->name("lawyer.expense.file.delete");

    Route::get("/expenses/{expenseFile}/increment-amount", [ExpensesController::class, 'createIncrementAmount'])->name("lawyer.expenses.increment.create");
    Route::post("/expenses/{file}/increment-amount", [ExpensesController::class, 'storeIncrementAmount'])->name("lawyer.expenses.increment.store");

    Route::get("/expenses/{expenseFile}/info", [ExpensesController::class, 'show'])->name("lawyer.expense.info.show");

    // Procedure
    Route::get("/procedures", [ProceduresController::class, 'index'])->name("lawyer.procedures.index");
    Route::get("/procedures/{file}/create", [ProceduresController::class, 'create'])->name("lawyer.procedures.create");
    Route::post("/procedures/{file}/create", [ProceduresController::class, 'store'])->name("lawyer.procedures.store");

    Route::get("/procedures/{file}/all", [ProceduresController::class, 'allProcedures'])->name("lawyer.procedures.all");
    Route::get("/procedures/{procedure}/edit", [ProceduresController::class, 'editProcedures'])->name("lawyer.procedure.edit");
    Route::put("/procedures/{procedure}/update", [ProceduresController::class, 'updateProcedures'])->name("lawyer.procedure.update");
    Route::delete("/procedures/delete/{procedure}", [ProceduresController::class, 'delete'])->name("lawyer.procedure.delete");

    // Infos (Files)
    Route::get("/infos", [InfosController::class, 'index'])->name("lawyer.infos.index");
    Route::get("/infos/{file}/create", [InfosController::class, 'create'])->name("lawyer.infos.create");
    Route::post("/infos/{file}/create", [InfosController::class, 'store'])->name("lawyer.infos.store");
    Route::get("/infos/{file}/all", [InfosController::class, 'allInfos'])->name("lawyer.infos.all");
    Route::get('/infos/download/{FileInfo}/{file}', [InfosController::class, 'downloadFile'])->name("lawyer.infos.download.file");
    Route::delete('/infos/delete/{FileInfo}', [InfosController::class, 'destroy'])->name("lawyer.infos.delete");

    // Calendar
    // Route::resource("/calendar/events", EventController::class);
    // Route::get("/calendar",[ EventController::class,"home"])->name("lawyer.calendar.home");

    Route::resource("/calendar/events", EventProceduresController::class);
    Route::get("/calendar",[ EventProceduresController::class,"home"])->name("lawyer.calendar.home");
    Route::delete("/calendar/events/info/delete/{event}", [EventProceduresController::class, "delete"])->name("lawyer.calendar.info.delete");
    Route::post("/calendar/events/info/create", [EventProceduresController::class, "eventStore"])->name("lawyer.calendar.info.store");
    Route::put("/calendar/events/info/{event}/update", [EventProceduresController::class, "eventUpdate"])->name("lawyer.calendar.info.update");

    // Notification
    Route::get('/notification',[MessagesController::class, 'index'])->name('notification.index');

    Route::get('/notification/checkConvo/{recieverId}',[MessageUsersController::class,'check']);
    Route::post('/notification/sendMessage',[MessagesController::class,'store'])->name('sendMessage');

    Route::get('/notification/loadMessage/{reciever}',[MessagesController::class,'load']);
    // Route::get('/notification/loadMessage/{reciever}/{sender}',[MessagesController::class,'load']);

    Route::get('/notification/retrieveMessages/{reciever}/{lastMsgId}',[MessagesController::class,'retrieveNew']);
});



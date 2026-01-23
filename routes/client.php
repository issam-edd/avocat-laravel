<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Client\AdminFileController;
use App\Http\Controllers\Dashboard\Client\AdminClientController;
use App\Http\Controllers\Dashboard\Client\AdminExpensesController;
use App\Http\Controllers\Dashboard\Client\AdminFeesController;
use App\Http\Controllers\Dashboard\Client\InfoFilesController;
use App\Http\Controllers\Dashboard\NotificationClient\MessagesController;
use App\Http\Controllers\Dashboard\NotificationClient\MessageUsersController;

// Lawyar
Route::group(['middleware' => ['isClient', 'languageConverter'], 'prefix' => 'client'], function () {
    Route::get("/", [AdminClientController::class, 'index'])->name("client.index");

    Route::get("/files",[AdminFileController::class, 'index'])->name("files.index");

    Route::get("/fees/{id_file}/all", [AdminFeesController::class, 'index'])->name("client.fees.index");
    Route::get("/expenses/{id_file}/all", [AdminExpensesController::class, 'index'])->name("client.expenses.index");

    Route::get("/expenses/{id_file}/{id_expense}/show", [AdminExpensesController::class, 'show'])->name("client.expense.show");
    Route::get("/file-fees/{id_file}/{id_fileFees}/show", [AdminFeesController::class, 'show'])->name("client.fees.show");

    // info
    Route::get("/infos", [InfoFilesController::class, 'index'])->name("client.infos.index");
    Route::get("/infos/create", [InfoFilesController::class, 'create'])->name("client.infos.create");
    Route::post("/infos/create", [InfoFilesController::class, 'store'])->name("client.infos.store");
    Route::get("/infos/all", [InfoFilesController::class, 'allInfos'])->name("client.infos.all");
    Route::get('/infos/download/{id}', [InfoFilesController::class, 'downloadFile'])->name("client.infos.download.file");
    Route::delete('/infos/delete/{id}', [InfoFilesController::class, 'destroy'])->name("client.infos.delete");


     // Notification
    Route::get('/notification',[MessagesController::class, 'index'])->name('client.notification.index');

    Route::get('/notification/checkConvo/{recieverId}',[MessageUsersController::class,'check']);
    Route::post('/notification/sendMessage',[MessagesController::class,'store'])->name('client.sendMessage');

    Route::get('/notification/loadMessage',[MessagesController::class,'load']);
    // Route::get('/notification/loadMessage/{reciever}/{sender}',[MessagesController::class,'load']);

    Route::get('/notification/retrieveMessages/{lastMsgId}',[MessagesController::class,'retrieveNew']);
});

<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    function index() {
        return view("dashboard.admin.managments.mails.index")->with([
            "mails" => Mail::orderBy("created_at","DESC")->paginate(10)
        ]);
    }


    function show($id) {
        $mail = Mail::findOrFail($id);
        $mail->is_read = 1;
        $mail->save();
        return view("dashboard.admin.managments.mails.show")->with([
            "mail" => $mail
        ]);
    }

    function destroy($id) {
        $mail = Mail::findOrFail($id);
        $mail->delete();

        return redirect()->route("admin.mails")->with([
            "success" => "Mail supprimer avec succès"
        ]);
    }


    public function find($search){
        // $search = $request->input('search');

        $mails = Mail::Join('users', 'users.id', '=', 'mails.lawyer_id')
                        ->where('users.first_name', 'like', "$search%")
                        ->orWhere('users.last_name', 'like', "$search%")
                        ->orWhere('mails.body', 'like', "$search%")
                        ->orderBy('mails.created_at', 'desc')->paginate(8);

        return view("dashboard.admin.managments.mails.index")->with([
            "mails" => $mails,
            "search" => $search
        ]);
    }

}

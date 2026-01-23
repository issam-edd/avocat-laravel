<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\LawyerMail;
use Illuminate\Http\Request;
use App\Mail\SendReponseMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AdminLawyerMailController extends Controller
{
    //

    function index() {
        $lawyer = Auth::user();
        return view("dashboard.lawyer.managments.mails.index")->with([
            "mails" => LawyerMail::Join('users', 'users.id', '=', 'lawyer_mails.lawyer_id')
                                ->where("lawyer_mails.lawyer_id",$lawyer->id)
                                ->orderBy("lawyer_mails.created_at","DESC")
                                ->paginate(10, array("lawyer_mails.id as mail_id", "lawyer_mails.*"))
        ]);
    }


    function show($id) {
        $mail = LawyerMail::findOrFail($id);
        $mail->is_read = 1;
        $mail->save();
        return view("dashboard.lawyer.managments.mails.show")->with([
            "mail" => $mail
        ]);
    }

    function destroy($id) {
        $mail = LawyerMail::findOrFail($id);
        $mail->delete();

        return redirect()->route("lawyer.mails")->with([
            "success" => "Mail supprimer avec succès"
        ]);
    }


    public function find($search){
        $lawyer = Auth::user();
        $mails = LawyerMail::Join('users', 'users.id', '=', 'lawyer_mails.lawyer_id')
                        ->where("lawyer_mails.lawyer_id",$lawyer->id)->where(function($query) use ($search) {
                            $query->Where('lawyer_mails.body', 'like', "%$search%")
                                    ->orWhere('lawyer_mails.email', 'like', "%$search%")
                                    ->orWhere('lawyer_mails.phone_number', 'like', "%$search%")
                                    ->orWhere('lawyer_mails.first_name', 'like', "%$search%")
                                    ->orWhere('lawyer_mails.last_name', 'like', "%$search%");
                        })->orderBy('lawyer_mails.created_at', 'desc')
                        ->paginate(10, array("lawyer_mails.id as mail_id", "lawyer_mails.*"));

        Session::put("active_btn" , true);
        return view("dashboard.lawyer.managments.mails.index",[
            "mails" => $mails,
            "search" => $search
        ]);
    }


    function showReponseMail($id)
    {
        $mail = LawyerMail::findOrFail($id);
        return view("dashboard.lawyer.managments.mails.reponse",["mail" => $mail]);
    }

    function sendReponseMail(Request $request, $id) {
        // dd($request->post());
        $user_send = LawyerMail::findOrFail($id);

        $mailData = [
            "title" => "Siteweb Marrakech",
            "email" => $user_send->user->email,
            "first_name" => $user_send->user->first_name,
            "last_name" => $user_send->user->first_name,
            "phone_number" => $user_send->user->lawyerDetail->phone_number,
            "message" => $request->message
        ];
        // // lawyer mail
        Mail::to($user_send->email)->send(new SendReponseMail($mailData));

        return redirect()->route("lawyer.mails")
                ->with(["success" => "Email is sent successfully."]);
    }
}

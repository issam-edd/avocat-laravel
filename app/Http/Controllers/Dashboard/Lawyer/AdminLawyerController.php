<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\Faq;
use App\Models\Mail;
use App\Models\LawyerBlog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLawyerController extends Controller
{
    //
    function index() {
        $lawyer = Auth::user()->id;
        return view("dashboard.lawyer.index")->with([
            "faqs" => Faq::where("lawyer_id",$lawyer)->latest(),
            "blogs" => LawyerBlog::where("lawyer_id",$lawyer)->latest(),
            "mails" => Mail::where("lawyer_id",$lawyer)->latest()
        ]);
    }
}

<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Faq;
use App\Models\User;
use App\Models\LawyerBlog;
use App\Models\LawyerMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LawyerDetail;

class AdminController extends Controller
{


    function index() {
        $lawyer_id = LawyerDetail::where("is_premium",1)->pluck('lawyer_id');

        return view("dashboard.admin.index")->with([
            "faqs" => Faq::latest(),
            "blogs" => LawyerBlog::latest(),
            "avocats" => User::where('role', 0)->get(),
            "avocatsPremium" => User::whereIn('id', $lawyer_id)->get(),
            "mails" => LawyerMail::latest()
        ]);
    }
}

<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    function index() {
        // $faqs = DB::table('lawyer_faqs')->orderBy('created_at', 'desc')->get()->paginate(8);
        $faqs = Faq::orderBy('created_at', 'desc')->paginate(8);

        return view("dashboard.admin.managments.faqs.index")->with([
            "faqs" => $faqs
        ]);
    }

    function show($id) {
        $faq = Faq::find($id);
        return view("dashboard.admin.managments.faqs.show")->with([
            "faq" => $faq
        ]);
    }

    function desactive($id) {
        // dd($id);
        $faq = Faq::find($id);
        $faq->is_published = 0;
        $faq->save();
        return redirect()->route("admin.faqs")->with([
            "success" => "FAQ est desactivés avec succès"
        ]);
    }

    function active($id) {
        // dd($id);
        $faq = Faq::find($id);
        $faq->is_published = 1;
        $faq->save();
        return redirect()->route("admin.faqs")->with([
            "success" => "FAQ est activés avec succès"
        ]);
    }


    public function find($search){
        // $search = $request->input('search');

        $faqs = Faq::Join('users', 'users.id', '=', 'faqs.lawyer_id')
                        ->where('users.first_name', 'like', "%$search%")
                        ->orWhere('users.last_name', 'like', "%$search%")
                        ->orWhere('faqs.question_fr', 'like', "%$search%")
                        ->orWhere('faqs.answer_fr', 'like', "%$search%")
                        ->orderBy('faqs.created_at', 'desc')->paginate(8);

        return view("dashboard.admin.managments.faqs.index")->with([
            "faqs" => $faqs,
            "search" => $search
        ]);
    }
}

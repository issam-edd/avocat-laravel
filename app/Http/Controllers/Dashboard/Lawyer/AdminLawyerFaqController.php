<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;

class AdminLawyerFaqController extends Controller
{
    //

    function index() {
        $lawyer = Auth::user()->id;
        return view("dashboard.lawyer.managments.faqs.index",[
            "faqs" => Faq::where("lawyer_id",$lawyer)->orderBy('created_at', 'desc')->paginate(5)
        ]);
    }
    function create(){
        return view("dashboard.lawyer.managments.faqs.create");
    }

    function store(Request $request) {
        // dd($request->post());
        $this->validate($request,[
            "question_fr" => "required",
            "question_ar" => "required",
            "answer_fr" => "required",
            "answer_ar" => "required",
        ]);
        $status = $request->is_published === "on" ? 1 : 0;
        Faq::create([
            "lawyer_id"=> Auth::user()->id,
            'question_fr'=>$request->question_fr,
            'question_ar'=>$request->question_ar,
            'answer_fr'=>$request->answer_fr,
            'answer_ar'=>$request->answer_ar,
            "is_published" => $status,
        ]);
        return redirect()->route('lawyer.faqs')->with([
            'success' => "تمت إضافة أسئلة وأجوبة بنجاح"
        ]);
    }

    function edit($id) {
        $faq = Faq::findOrFail($id);
        return view("dashboard.lawyer.managments.faqs.edit", [
            "faq" => $faq
        ]);
    }

    function update(Request $request, $id) {
        // dd($request->post());
        $faq = Faq::findOrFail($id);
        $this->validate($request,[
            "question_fr" => "required",
            "question_ar" => "required",
            "answer_fr" => "required",
            "answer_ar" => "required",
        ]);
        $status = $request->is_published === "on" ? 1 : 0;
        $faq->update([
            'question_fr'=>$request->question_fr,
            'question_ar'=>$request->question_ar,
            'answer_fr'=>$request->answer_fr,
            'answer_ar'=>$request->answer_ar,
            "is_published" => $status,
        ]);
        return redirect()->route('lawyer.faqs')->with([
            'success' => "تمت تحديث أسئلة وأجوبة بنجاح"
        ]);
    }

    function destroy($id) {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('lawyer.faqs')->with([
            'success' => "تم حذف أسئلة وأجوبة بنجاح"
        ]);
    }


    public function find($search){
        // $search = $request->input('search');
        $lawyer = Auth::user()->id;

        $faqs = Faq::Join('users', 'users.id', '=', 'faqs.lawyer_id')
                        ->where("faqs.lawyer_id",$lawyer)
                        ->where(function($query) use ($search){
                            $query->where('faqs.question_fr', 'like', "%$search%")
                            ->orWhere('faqs.answer_fr', 'like', "%$search%")
                            ->orWhere('faqs.question_fr', 'like', "%$search%")
                            ->orWhere('faqs.question_ar', 'like', "%$search%")
                            ->orWhere('faqs.answer_ar', 'like', "%$search%");
                        })->orderBy('faqs.created_at', 'desc')->paginate(5);
        return view("dashboard.lawyer.managments.faqs.index",[
            "faqs" => $faqs,
            "search" => $search
        ]);
    }


    function desactive($id) {
        // dd($id);
        $faq = Faq::find($id);
        $faq->is_published = 0;
        $faq->save();
        return redirect()->route("lawyer.faqs")->with([
            "success" => "Question Réponse est desactivés avec succès"
        ]);
    }

    function active($id) {
        // dd($id);
        $faq = Faq::find($id);
        $faq->is_published = 1;
        $faq->save();
        return redirect()->route("lawyer.faqs")->with([
            "success" => "Question Réponse est activés avec succès"
        ]);
    }
}

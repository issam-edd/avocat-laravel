<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\File;
use App\Models\Client;
use App\Models\Avocacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    //
    function index() {
        $lawyer = Auth::user()->id;

        $clients_id = Client::where("lawyer_id",$lawyer)->pluck("id");

        // dump($clients_id);
        $files = File::whereIn("client_id", $clients_id)->orderBy("created_at", "DESC")->get();
        // dd($files);

        return view("dashboard.lawyer.managments.files.index",[
            "files" => $files
        ]);
    }

    function create(){
        $lawyer = Auth::user()->id;

        $clients = Client::where("lawyer_id",$lawyer)->get();
        $avocacy = Avocacy::all();

        return view("dashboard.lawyer.managments.files.create",[
            "clients" => $clients,
            "avocacy" => $avocacy
        ]);
    }

    function store(Request $request){
        $formFields = $request->validate([
            "avocacy_division" => "required",
            "file_reference" => "required",
            "amount" => "required|numeric|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
            "client_id" => "required"
        ]);
        if($request->has("parties")) {
            $formFields["parties"] = $request->parties ;
        }
        if($request->has("parties_involved")) {
            $formFields["parties_involved"] = $request->parties_involved ;
        }
        File::create($formFields);

        return to_route('lawyer.files.index')->with([
            'success' => "تمت إضافة الملف بنجاح"
        ]);
    }

    function edit(File $file) {
        $lawyer = Auth::user()->id;

        $clients = Client::where("lawyer_id",$lawyer)->get();
        $avocacy = Avocacy::all();

        return view("dashboard.lawyer.managments.files.edit",compact("file","clients","avocacy"));
    }

    function update(Request $request, File $file) {
        $formFields = $request->validate([
            "avocacy_division" => "required",
            "file_reference" => "required",
            "amount" => "required|numeric|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
            "client_id" => "required"
        ]);
        if($request->has("parties")) {
            $formFields["parties"] = $request->parties ;
        }
        if($request->has("parties_involved")) {
            $formFields["parties_involved"] = $request->parties_involved ;
        }

        $file->fill($formFields)->save();

        return to_route('lawyer.files.index')->with([
            'success' => "تمت تعديل الملف بنجاح"
        ]);
    }

    function destroy(File $file) {
        $file->delete();
        return to_route('lawyer.files.index')->with([
            'success' => "تمت مسح الملف بنجاح"
        ]);
    }
}

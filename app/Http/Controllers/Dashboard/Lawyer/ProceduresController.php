<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\File;
use App\Models\Client;
use App\Models\Procedure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EventProcedure;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProceduresController extends Controller
{
    //

    function index()
    {
        $lawyer = Auth::user()->id;

        $clients_id = Client::where("lawyer_id",$lawyer)->pluck("id");

        $files = File::whereIn("client_id", $clients_id)->get();

        return view("dashboard.lawyer.managments.files.procedures.index",[
            "files" => $files
        ]);
    }

    function create(File $file) {
        return view("dashboard.lawyer.managments.files.procedures.create-procedure",compact('file'));
    }

    function store(File $file, Request $request) {
        $formFields = $request->validate([
            "date_debut" => "required",
            "date_fin" => "required",
            "title" => "required",
            "description" => "required"
        ]);
        $formFields["file_id"] = $file->id ;

        Procedure::create($formFields);

        $slug = Str::replace(' ', '-', $formFields["title"]);

        $slug = $slug . "-" . time();

        EventProcedure::create([
            "lawyer_id" => Auth::user()->id,
            "file_id" => $file->id,
            "exist" => 1,
            "avocacy_division" => $file->avocacy_division,
            "file_reference" => $file->file_reference,
            "client_name" => $file->client->client_name,
            "phone_number" => $file->client->phone_number,

            "slug" => $slug,
            "title" =>$formFields["title"],
            "date_debut" => $formFields["date_debut"],
            "date_fin" => $formFields["date_fin"],
            "procedure_id" => Procedure::latest()->first()->id,
            "procedure_description" => $formFields["description"]
            // "procedure_result"
        ]);

        $procedure = Procedure::latest('id')->first()->id;

        return to_route("lawyer.procedures.index", compact("file"))
                ->with('success','procedure ajouter avec succés');
    }

    function allProcedures(File $file) {
        return view("dashboard.lawyer.managments.files.procedures.all-procedure",compact('file'));
    }

    function editProcedures(Procedure $procedure) {
        return view("dashboard.lawyer.managments.files.procedures.edit-procedure",compact('procedure'));
    }

    function updateProcedures(Request $request ,Procedure $procedure) {
        $eventProcedure = EventProcedure::where("procedure_id",$procedure->id);

        $procedure->update(["result" => $request->result]);
        $eventProcedure->update(["procedure_result" => $request->result]);

        return to_route("lawyer.procedures.all", ["file" => $procedure->file])
        ->with('success','result est modifier avec succés');
    }

    function delete(Procedure $procedure) {
        $eventProcedure = EventProcedure::where("procedure_id",$procedure->id);

        $procedure->delete();
        if(!!$eventProcedure) {
            $eventProcedure->delete();
        }
        return to_route("lawyer.procedures.all", ["file" => $procedure->file])
        ->with('success','procedure supprimer avec succés');

    }
}

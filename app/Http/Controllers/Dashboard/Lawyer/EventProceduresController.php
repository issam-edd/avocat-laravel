<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\Avocacy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EventProcedure;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventProceduresController extends Controller
{
    function home() {
        $avocacy = Avocacy::all();
        return view("dashboard.lawyer.managments.files.calendar.home",["avocacy" => $avocacy]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return $this->eventsToArray(EventProcedure::where('lawyer_id', Auth::user()->id)->get());
    }

    public function eventsToArray($events){
        $eventsArray = [];
        foreach($events as $event){
            // $a=array("#FC2947","#FFF323","#0E7CF4", "#79D70F");
            // $random_keys=array_rand($a);
            // $bg = $a[$random_keys];
            $data = [
                "slug" => $event->slug,
                "title" => $event->title,
                "avocacy_division" => $event->avocacy_division,
                "file_reference" => $event->file_reference,
                "client_name" => $event->client_name,
                "phone_number" => $event->phone_number,
                "procedure_id" => $event->procedure_id,
                "procedure_description" => $event->procedure_description,
                "procedure_result" => $event->procedure_result,
                "end" => $event->date_fin,
                "start" => $event->date_debut,
                "color" => $event->color ? $event->color : "#0E7CF4" ,
                "textColor" => $event->color === "#FFF323" ? "#222222" : "white"
            ];
            array_push($eventsArray,$data);
        }
        return response()->json($eventsArray);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.lawyer.managments.files.calendar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::replace(' ', '-', $request->title);

        $slug = $slug . "-" . time();

        EventProcedure::create([
            "slug" => $slug,
            "title" => $request->title,
            "lawyer_id" => Auth::user()->id,
            "avocacy_division" => $request->avocacy_division,
            "file_reference" => $request->file_reference,
            "client_name" => $request->file_reference,
            "phone_number" => $request->phone_number,
            "procedure_description" => $request->procedure_description,
            "procedure_result" => $request->procedure_result,
            "color" => $request->color,
            "date_debut" => $request->start_date,
            "date_fin" => $request->end_date
        ]);
        return to_route("lawyer.calendar.home")->withSuccess("Event added successfully");
    }

    function eventStore(Request $request) {
        $formFields = $request->validate([
            "title" =>"required",
            "file_reference" => "required",
            "avocacy_division" =>"required",
            "client_name" =>"required",
            "date_debut" =>"required",
            "date_fin" =>"required",
        ]);

        $slug = Str::replace(' ', '-', $request->title);
        $slug = $slug . "-" . time();

        if($request->has("file_reference")) {
            $formFields["file_reference"] = $request->file_reference ;
        }
        if($request->has("phone_number")) {
            $formFields["phone_number"] = $request->phone_number ;
        }
        if($request->has("procedure_description")) {
            $formFields["procedure_description"] = $request->procedure_description ;
        }
        if($request->has("procedure_result")) {
            $formFields["procedure_result"] = $request->procedure_result ;
        }
        if($request->has("color")) {
            $formFields["color"] = $request->color ;
        }
        $formFields["lawyer_id"] = Auth::user()->id;
        $formFields["slug"] = $slug;

        EventProcedure::create($formFields);
        return to_route("lawyer.calendar.home")->withSuccess("Event added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(EventProcedure $event)
    {
        //
        // return view('dashboard.lawyer.managments.files.calendar.show')->withEvent($event);
        return $event;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventProcedure $event)
    {
        $avocacy = Avocacy::all();
        return view('dashboard.lawyer.managments.files.calendar.edit', ["event" => $event, "avocacy" => $avocacy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventProcedure $event)
    {
        //
        $event->update([
            "date_debut" => $request->start,
            "date_fin" => $request->end
        ]);
        return response()->json(['success'=>'updated']);
    }

    function eventUpdate(Request $request, EventProcedure $event) {

        // id file nuuuuul

        if($request->result_check != "on")
        {
            // echo "OFFFFFFFFFFFFF";
            $formFields = $request->validate([
                "title" =>"required",
                "avocacy_division" =>"required",
                "client_name" =>"required",
                "date_debut" =>"required",
                "date_fin" =>"required",
            ]);

            $slug = Str::replace(' ', '-', $request->title);
            $slug = $slug . "-" . time();

            if($request->has("file_reference")) {
                $formFields["file_reference"] = $request->file_reference ;
            }
            if($request->has("phone_number")) {
                $formFields["phone_number"] = $request->phone_number ;
            }
            if($request->has("procedure_description")) {
                $formFields["procedure_description"] = $request->procedure_description ;
            }
            if($request->has("procedure_result")) {
                $formFields["procedure_result"] = $request->procedure_result ;
            }
            if($request->has("color")) {
                $formFields["color"] = $request->color ;
            }
            $formFields["lawyer_id"] = Auth::user()->id;
            $formFields["slug"] = $slug;

            $event->fill($formFields)->save();
        }else{
            $formFieldsNew = $request->validate([
                "procedure_result" =>"required",
                "file_reference" => "required",
                "avocacy_division" =>"required",
                "client_name" =>"required",
                "date_debut_result" =>"required",
                "date_fin_result" =>"required",
            ]);
            unset($formFieldsNew["procedure_result"]);
            unset($formFieldsNew["date_debut_result"]);
            unset($formFieldsNew["date_fin_result"]);

            $formFieldsNew["title"] = $request->procedure_result;
            $formFieldsNew["date_debut"] = $request->date_debut_result;
            $formFieldsNew["date_fin"] = $request->date_fin_result;

            $slug = Str::replace(' ', '-', $request->procedure_result);
            $slug = $slug . "-" . time();

            if($request->has("file_reference")) {
                $formFieldsNew["file_reference"] = $request->file_reference ;
            }
            if($request->has("phone_number")) {
                $formFieldsNew["phone_number"] = $request->phone_number ;
            }
            if($request->has("description_result")) {
                $formFieldsNew["procedure_description"] = $request->description_result ;
            }

            if($request->has("color")) {
                $formFieldsNew["color"] = $request->color ;
            }
            $formFieldsNew["lawyer_id"] = Auth::user()->id;
            $formFieldsNew["slug"] = $slug;

            EventProcedure::create($formFieldsNew);
            // echo "ONNNNNNNNNNNNNNN"; // add event_procedures
        }

        // if(!!$event->procedure) {
        //     // $event->delete();
        //     echo "exist procedure"; // delete procedure
        // }else{
        //     echo "procedure not exist"; // no
        // }

        return to_route("lawyer.calendar.home")->withSuccess("Event Modifier successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventProcedure $event)
    {
        //
        $event->delete();
        return response()->json(['success'=>'deleted']);
    }

    public function delete(EventProcedure $event)
    {
        $event->delete();
        return to_route("lawyer.calendar.home")->withSuccess("Evénement supprimer avec succés");
    }
}

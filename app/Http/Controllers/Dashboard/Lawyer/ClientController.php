<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\File;
use App\Models\Client;
use App\Models\Avocacy;
use App\Models\UsersPeople;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    function index()
    {
        $lawyer = Auth::user()->id;
        return view("dashboard.lawyer.managments.clients.index",[
            "clients" => Client::where("lawyer_id",$lawyer)->latest()->get()
        ]);
    }

    function create() {
        return view("dashboard.lawyer.managments.clients.create");
    }

    function createFile(Client $client) {
        $avocacy = Avocacy::all();
        return view('dashboard.lawyer.managments.clients.add-file', compact("client","avocacy"));
    }

    function storeFile(Request $request, Client $client) {
        $formFields = $request->validate([
            "avocacy_division" => "required",
            "file_reference" => "required",
            "amount" => "required|numeric",
        ]);
        if($request->has("parties")) {
            $formFields["parties"] = $request->parties ;
        }
        if($request->has("parties_involved")) {
            $formFields["parties_involved"] = $request->parties_involved ;
        }

        $formFields["client_id"] = $client->id ;

        File::create($formFields);


        return to_route('lawyer.files.index')->with([
            'success' => "تمت إضافة الملف بنجاح"
        ]);
    }

    function store(Request $request){
        Validator::extend('uniqueNameAndPhone', function ($attribute, $value, $parameters, $validator) {
            $count = DB::table('clients')->where('client_name', $value)
                                        ->where('phone_number', $parameters[0])
                                        ->count();
            return $count === 0;
        });

        $formFields = $request->validate([
            'client_name' => "uniqueNameAndPhone:{$request->phone_number}",
            // "client_name" => "required",
            "phone_number" => "required",
        ]);


        $formFields["lawyer_id"] = Auth::user()->id ;

        Client::create($formFields);

        $client = Client::latest('id')->first()->id;

        // $lastId = Client::latest()->first()->id;
        UsersPeople::create([
            "client_id" => $client ,
            "type" => "client"
        ]);

        return to_route("lawyer.files.client.create", compact("client"));
    }
    function edit(Client $client) {
        return view("dashboard.lawyer.managments.clients.edit",compact("client"));
    }
    function update(Request $request, Client $client) {
        if($client->client_name !== $request->client_name || $client->phone_number !== $request->phone_number) {
            Validator::extend('uniqueNameAndPhone', function ($attribute, $value, $parameters, $validator) {
                $count = DB::table('clients')->where('client_name', $value)
                                            ->where('phone_number', $parameters[0])
                                            ->count();
                return $count === 0;
            });

            $formFields = $request->validate([
                'client_name' => "uniqueNameAndPhone:{$request->phone_number}",
                "phone_number" => "required",
            ]);

            $client->fill($formFields)->save();
        }

        return to_route('lawyer.clients.index')->with([
            'success' => "تمت تعديل الموكل بنجاح"
        ]);
    }

    function destroy(Client $client) {
        $client->delete();
        return to_route('lawyer.clients.index')->with([
            'success' => "تمت مسح الموكل بنجاح"
        ]);
    }
}
